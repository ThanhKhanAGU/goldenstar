<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\SanPham;
use App\HoatDong;
use App\Information;
use Illuminate\Support\Facades\DB;
class listpagesController extends Controller
{
    public function pages()
    {
        $tintuc = DB::table('TinTuc')->paginate(4);
        $noibat = DB::table('TinTuc')->where("NoiBat",1)->get()->take(4);
        $moi = TinTuc::all()->sortByDesc('created_at')->take(3);
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $pin[1] = TinTuc::find($data['pin1']);
        $pin[2] = TinTuc::find($data['pin2']);
        $pin[3] = TinTuc::find($data['pin3']);
        return view('pages.listpages',['tintuc'=>$tintuc,'noibat'=>$noibat,'moi'=>$moi,'pin'=>$pin]);
    }
    public function page($id,$ten)
    {
        $tin = TinTuc::find($id);
        $noibat = DB::table('TinTuc')->where("NoiBat",1)->get()->take(4);
        $moi = TinTuc::all()->sortByDesc('created_at')->take(3);

        return view('pages.page',['data'=>$tin,'noibat'=>$noibat,'moi'=>$moi]);
    }

    public function update_view($id)
    {
        $tin = TinTuc::find($id);
        $tin->SoLuotXem++;
        $tin->save();
    }
}
