<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $msg = "Necesita iniciar session para ver la información";
        if (Auth::user()) {
            if (Auth::user()->estado !== '1') {
                $msg = "No tiene permisos para acceder, consulte con el administrador";
                Auth::logout();
                return back()->with('eliminar',$msg);
            } else {
                if (Auth::user()->hasRole('Administrador') || Auth::user()->hasRole('Secretari@')) {
                    return $next($request);

                } else {

                    return redirect('/login')->with('eliminar','No tiene permisos para acceder al sistema, consulte con el administrador');

                }

            }
        }else{
            return redirect('/login');
        }

    }

}
