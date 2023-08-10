<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // delay the request for 10 seconds
        // sleep(10);

        $roles = collect($roles);

        // check if the collection has the admin role
        if ($roles->contains('admin')) {
            // run the conditions

            return $next($request);
        }

        abort(403, 'You are not authorized to access this page');

    }
}
