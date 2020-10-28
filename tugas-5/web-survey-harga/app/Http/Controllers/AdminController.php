<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Commodity;

class AdminController extends Controller
{
    //Dashboard Admin
	public function main()
    {
        return view('admin/main');
    }

    public function login()
    {
        if(Session::has('loggedIn')){
            return redirect()->route('admin-main');
        }else{
    	   return view('admin/login');
        }
    }

    public function doLogin(Request $request)
    {
        echo $username = $request->username;
        echo $password = md5($request->password);
        $data = Admin::find($username);
        if($data){
            if($password == $data->password){
                Session::put('username',$data->username);
                Session::put('name',$data->name);
                Session::put('loggedIn',TRUE);
                Session::put('role','admin');
                return redirect('admin');
            }
        }
        $alert = [
            'type' => 'error',
            'message'=> 'Wrong Username and/or Password!'
        ];
        return redirect()->back()->with($alert);
    }

    public function doLogout(){
		Session::flush();
        $alert = [
            'type' => 'info',
            'message'=> 'Successfully Logout'
        ];
        return redirect()->route('admin-login')->with('type',$alert['type'])->with('message',$alert['message']);
    }

    public function requestCommodity(){
		$commodityList =  DB::table('tb_commodity')
                        ->select('*')
                        ->where('status','0')
                        ->get();
        return view('admin/review-commodity', ['commodityList' => $commodityList]);
    }

    public function doRequestCommodity(Request $request){
		if(isset($request->check)){
            foreach ($request->check as $item) {
                $commodity = Commodity::find($item);
                if($request->action == "Verifikasi"){
                    $commodity->status = 1;
                }elseif ($request->action == "Tolak") {
                    $commodity->status = -1;
                }
                $commodity->save();
            }
        }
        if($request->action == "Verifikasi"){
            $alert = [
                'type' => 'success',
                'message'=> 'Usulan Berhasil Diverifikasi'
            ];
        }elseif ($request->action == "Tolak") {
            $alert = [
                'type' => 'success',
                'message'=> 'Usulan Berhasil Ditolak'
            ];
        }
        
        return redirect()->back()->with($alert);
    }

    public function listCommodity(){
		$commodityList =  DB::table('tb_commodity')
                        ->select('*')
                        ->where('status','1')
                        ->get();
        return view('admin/list-commodity', ['commodityList' => $commodityList]);
    }
}