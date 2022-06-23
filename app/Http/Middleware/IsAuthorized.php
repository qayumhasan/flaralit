<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAuthorized
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
            if (auth()->user()->role == 1) {
                return $next($request);
            }

            $role_permission = \App\Models\PermissionRole::where([
                ['role_id', auth()->user()->role],
                ['permission_id', $request->route()->action['namespace']]
            ])->first();

            if ($role_permission) {
                return $next($request);
            }

            return redirect()->back();
        } catch (\Throwable $th) {
            alert()->error('Error', __('Something Wrong Try Again!'));
        }
    }
}
