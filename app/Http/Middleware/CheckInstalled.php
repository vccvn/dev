<?php

namespace App\Http\Middleware;

use App\Repositories\Users\UserRepository;
use Closure;
use Illuminate\Http\Request;

class CheckInstalled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {

            if (!app(UserRepository::class)->first(['type' => 'admin', 'statua' => 1]))
                return redirect(route('setup.install'));
        } catch (\Throwable $th) {
            abort(500, "Vui lòng chạy migrate");
        }
        return $next($request);
    }
}
