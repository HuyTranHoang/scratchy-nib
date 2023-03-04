<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $visitor = Visitor::where('ip', $ip)->first();

        if (!$visitor) {
            Visitor::create(['ip' => $ip]);
        } else {
            $lastVisit = $visitor->updated_at;

            $diffInMinutes = $lastVisit->diffInMinutes(now());
            if ($diffInMinutes >= 1) {
                $newView = $visitor->view + 1;
                $visitor->update(['updated_at' => now(), 'view' => $newView]);
            }
        }

        return $next($request);
    }
}
