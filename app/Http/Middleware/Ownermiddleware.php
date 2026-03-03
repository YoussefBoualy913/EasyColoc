<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Ownermiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
         $user = Auth::user();

        if (! $user) {
            abort(403);
        }
        
        $calocation = $request->route('calocation'); 
      

        if (! $calocation) {
            abort(404);
        }

        $isOwner = $calocation->users()
            ->where('users.id', $user->id)
            ->wherePivot('type', 'owner')
            ->wherePivotNull('left_at')
            ->exists();

        if (! $isOwner) {
            abort(403, 'Accès réservé au propriétaire.');
        }
        return $next($request);
    }
}
