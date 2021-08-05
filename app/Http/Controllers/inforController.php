<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;

class inforController extends Controller
{
    //Xử Lý Thong tin 

    public function get_list()
    {
        $infor = information::all();
        return view('ad.infor.list', ['infor' => $infor]);
    }
}
