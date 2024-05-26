<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Peminjam
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()?->Role=='Peminjam') {
            return $next($request);
        }

        abort(401);
    }
}
