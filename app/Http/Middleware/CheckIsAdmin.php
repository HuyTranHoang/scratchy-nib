<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            Alert::html('Oops, something is wrong', "You don't have permission to access this admin dashboard
                <p class='mt-2' style='font-size: 0.8rem'>(Did you forget to <a href='/login'>login</a>?)</p>", 'error')
                ->buttonsStyling(false);
            return redirect(route('home.index'));
        }
        return $next($request);
    }
}
