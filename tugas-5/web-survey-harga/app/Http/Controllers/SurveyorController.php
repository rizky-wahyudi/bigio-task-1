<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Commodity;
use App\Surveyor;

class SurveyorController extends Controller
{
    //Dashboard Surveyor
	public function main()
    {
        return view('surveyor/main');
    }

    public function login()
    {
        if(Session::has('loggedIn')){
            return redirect()->route('surveyor-main');
        }else{
    	   return view('surveyor/login');
        }
    }

    public function doLogin(Request $request)
    {
        echo $username = $request->username;
        echo $password = md5($request->password);
        $data = Surveyor::find($username);
        if($data){
            if($password == $data->password){
                Session::put('username',$data->username);
                Session::put('name',$data->name);
                Session::put('loggedIn',TRUE);
                Session::put('role','surveyor');
                return redirect('surveyor');
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
        return redirect()->route('surveyor-login')->with('type',$alert['type'])->with('message',$alert['message']);
    }

    public function inputCommodity()
    {
        return view('surveyor/input-commodity');
    }

    public function doInputCommodity(Request $request)
    {
        $commodity = new Commodity;
        $commodity->commodityName =  $request->name;
        $commodity->market = $request->market;
        $commodity->commodityPrice = str_replace(".", "", $request->price);
        $commodity->date = $request->date;
        $commodity->status = 0;
        $commodity->surveyor = Session::get('username');

        $commodity->save();

        return view('surveyor/main');
    }

    public function listCommodity()
    {
        $commodityList =  DB::table('tb_commodity')
                        ->select('*')
                        ->where('status','1')
                        ->get();
        return view('surveyor/list-commodity', ['commodityList' => $commodityList]);
    }
}