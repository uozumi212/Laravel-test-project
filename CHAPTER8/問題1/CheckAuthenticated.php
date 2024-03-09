<?php


namespace CHAPTER8\問題1;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Symfony\Component\HttpFoundation\Response;

class CheckAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * //     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() && $request->route()->getName() !== 'login') {
            return redirect()->route('login');

        }

        return $next($request);
//        return redirect()->route('dashboard');
    }
}
