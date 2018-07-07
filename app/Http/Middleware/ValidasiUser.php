<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Barang;

class ValidasiUser
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
        $barang = barang::findOrFail($id);
        if (Auth::user()->id == $barang->id_user ){
            return $next($barang);
        }
        return redirect('/');
    }
}
