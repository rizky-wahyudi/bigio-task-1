<?php

namespace App\Http\Middleware;

use Closure;

class Surveyor
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('loggedIn')) {
            $alert = [
                'type' => 'warning',
                'message'=> 'Kamu belum login'
            ];
            return redirect()->route('surveyor-login')->with('type',$alert['type'])->with('message',$alert['message']);
        }elseif ($request->session()->exists('loggedIn') && $request->session()->get('role') != 'surveyor') {
        	return redirect('404');
        }
        return $next($request);
    }

}