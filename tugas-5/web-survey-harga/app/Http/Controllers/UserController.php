<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Commodity;

class UserController extends Controller
{

    public function main()
    {
        $commodityList =  DB::table('tb_commodity')
                        ->select('*')
                        ->where('status','1')
                        ->get();
        return view('surveyor/list-commodity', ['commodityList' => $commodityList]);
    }

}