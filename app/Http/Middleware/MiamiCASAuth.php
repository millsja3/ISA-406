<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Request;
use App\Users\User;
use App\Users\ISAScholarshipUser;
use Illuminate\Contracts\Auth\Guard;
use Log;

class MiamiCASAuth
{
    protected $auth;
    protected $cas;

    public function __construct(Guard $auth)
    {
        if (strcmp(env("APP_ENV"), "acceptance") !== 0) {
            $this->auth = $auth;
            $this->cas = app('cas');
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->cas->isAuthenticated() && !Auth::check()) {

            // Some users not in the banner table ( may be parents of students etc.. ) has the ability to authenticate via CAS.
            // We do not want them to access the internal applications
            /*$uniqueID = Szbuniq::where('szbuniq_unique_id', strtoupper($this->cas->user()))->first();
            if( empty($uniqueID) ){
                Log::error("Invalid UniqueID Or User not in Banner: ".strtoupper($this->cas->user()));
                return response()->view('errors.403');
            }*/
            if ((!empty(Request::segments()[0])) && (Request::segments()[0] === config('quicklinks.route_path'))) {
                $user = new ISAScholarshipUser();
            } else {
                $user = new User();
            }

            $user->setUniqueId(strtoupper($this->cas->user()));
            $user->setPidm($this->cas->getAttributes()['uidNumber'] ?? '');
            $user->setGivenName($this->cas->getAttributes()['givenName'] ?? '');
            $user->setDisplayName($this->cas->getAttributes()['displayName'] ?? '');
            Auth::login($user);
        } else {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            }
            $this->cas->authenticate();
        }

        return $next($request);
    }
}
