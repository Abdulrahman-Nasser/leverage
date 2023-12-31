<?php

namespace App\Http\Middleware;

use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if ($request->is('leverage-admin/*')) {
                return route('admin-panel.login');
            } else if ($request->is('leverage-admin')) {
                return route('admin-panel.login');
            } else {
                return route('login');
            }
        }
    }
}
