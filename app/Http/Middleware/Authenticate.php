<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected $user_rote = 'user.login';
    protected $owner_rote = 'owner.login';
    protected $admin_rote = 'admin.login';
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(Route::is('owner.*')){
                return route($this->owner_route);
            }elseif(Route::is('admin.*')){
                return route($this->admin_route);
            }else {
                return route($this->user_route);
            }

        }
    }
}
