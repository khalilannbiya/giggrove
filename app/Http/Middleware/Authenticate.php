<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // If $request->expectsJson() or in other words, if the login is successful, then redirect to the Homepage using route('index').
        // If the login fails or !$request->expectsJson(), also redirect to the Homepage using route('index'), but display a login failed message on the homepage.
        return $request->expectsJson() ? route('index') : route('index');
    }
}
