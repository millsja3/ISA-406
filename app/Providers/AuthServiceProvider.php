<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use MiamiOH\LaravelAuthMan\AuthMan;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isaScholarshipAccess', function ($user) {
            $authman = resolve(AuthMan::class);
            return $authman->isAuthorized($user->getUniqueId(), 'ISAScholarship', 'AccessControl', 'manage');
        });


        //
    }
}
