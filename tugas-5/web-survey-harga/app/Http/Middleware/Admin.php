<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('loggedIn')) {
            $alert = [
                'type' => 'warning',
                'message'=> 'Kamu belum login'
            ];
            return redirect()->route('admin-login')->with('type',$alert['type'])->with('message',$alert['message']);
        }elseif ($request->session()->exists('loggedIn') && $request->session()->get('role') != 'admin') {
        	return redirect('404');
        }
        return $next($request);
    }

}