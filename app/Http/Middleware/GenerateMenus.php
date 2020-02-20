<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Lavary\Menu\Item;
use Illuminate\Support\Facades\Gate;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('AppNavMenu', function ($menu) {
            if (Gate::allows('quickLinksAccess')) {
                $menu->add('QuickLinks', ['url' => 'quick-links/admin']);
            }

            if (Gate::allows('webAliasAccess')) {
                $menu->add('Web Alias', ['route' => 'webAlias']);
            }
        })->filter(function (Item $item) {
            if (empty($item->data('permission'))) {
                return true;
            }

            if (Auth::check()) {
                return Auth::user()->can($item->data('permission'));
            }

            return false;
        });

        return $next($request);
    }
}
