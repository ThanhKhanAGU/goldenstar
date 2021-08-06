<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class inforController extends Controller
{
    //Xử Lý Thong tin 

    public function get_list()
    {
        $infor = Information::all();
        return view('ad.infor.list', ['infor' => $infor]);
    }
}
