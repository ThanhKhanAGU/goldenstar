<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Information;
use App\TinTuc;

class mainController extends Controller
{
    //
    public function home()
    {
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $pin[1] = TinTuc::find($data['pin1']);
        $pin[2] = TinTuc::find($data['pin2']);
        $pin[3] = TinTuc::find($data['pin3']);
        return view('pages.home',['data'=>$data,'pin'=>$pin]);
    }
    public function up_img(Request $request)
    {
        $file = $request->file('upload');
        $name = $file->getClientOriginalName();
        $HinhAnh = time()."_".$name;
        $file->move('post',$HinhAnh);
        
        $ck = $request->input('CKEditorFuncNum');
        $url = asset('/post/'.$HinhAnh);
        $msg = "Tải Ảnh Thành Công";
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($ck,'$url','$msg')</script>";
        @header('Content-type: text/html; charset=utf-8');
        echo $response;
    }
    public function file_img(Request $request)
    {
        return view('listimg');
    }
    public function setting_danhmuc()
    {
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        return view('ad.setting.danhmuc',['data'=>$data]);
    }
    public function edit_tag1(Request $request)
    {
        
        $data = Information::where("Ten",'tag1')->first();
        $data->NoiDung = $request->tag1;
        $data->save();

        for($i=1;$i<4;$i++)
        {
            $data = Information::where("Ten",'tag1_'.$i.'_icon')->first();
            $data->NoiDung = $request['tag1_'.$i.'_icon'];
            $data->save();
            $data = Information::where("Ten",'tag1_'.$i.'_title')->first();
            $data->NoiDung = $request['tag1_'.$i.'_title'];
            $data->save();
            $data = Information::where("Ten",'tag1_'.$i.'_ct')->first();
            $data->NoiDung = $request['tag1_'.$i.'_ct'];
            $data->save();
        }

        return redirect('/#service');      
    }
    public function edit_tag2(Request $request)
    {
        
        $data = Information::where("Ten",'tag2')->first();
        $data->NoiDung = $request->tag2;
        $data->save();

        for($i=1;$i<5;$i++)
        {
            if($request->hasFile('tag2_'.$i.'_icon')){
                $data = Information::where("Ten",'tag2_'.$i.'_icon')->first();
                $file = $request->file('tag2_'.$i.'_icon');
                $name = $file->getClientOriginalName();
                $HinhAnh = time()."_".$name;
                $file->move('assets_pages/images/img',$HinhAnh);
                if($data->NoiDung != "default.jpg")
                    unlink('assets_pages/images/img/'.$data->NoiDung);
                $data->NoiDung = $HinhAnh;
                $data->save();
            }
            $data = Information::where("Ten",'tag2_'.$i.'_title')->first();
            $data->NoiDung = $request['tag2_'.$i.'_title'];
            $data->save();
            $data = Information::where("Ten",'tag2_'.$i.'_ct')->first();
            $data->NoiDung = $request['tag2_'.$i.'_ct'];
            $data->save();
        }
        return redirect('/#team');      
    }
    public function edit_tag3(Request $request)
    {
        for($i=1;$i<5;$i++)
        {
            $data = Information::where("Ten",'sl_'.$i)->first();
            $data->NoiDung = $request['sl_'.$i];
            $data->save();
            $data = Information::where("Ten",'sl_'.$i.'_ten')->first();
            $data->NoiDung = $request['sl_'.$i.'_ten'];
            $data->save();
            $data = Information::where("Ten",'sl_'.$i.'_icon')->first();
            $data->NoiDung = $request['sl_'.$i.'_icon'];
            $data->save();
        }
        return redirect('/#gioithieu'); 
    }
    public function edit_tag4(Request $request)
    {
        $data = Information::where("Ten",'gt_title')->first();
        $data->NoiDung = $request->gt_title;
        $data->save();

        $data = Information::where("Ten",'gt_ct')->first();
        $data->NoiDung = $request->gt_ct;
        $data->save();

        if($request->hasFile('gt_icon')){
            $data = Information::where("Ten",'gt_icon')->first();
            $file = $request->file('gt_icon');
            $name = $file->getClientOriginalName();
            $HinhAnh = time()."_".$name;
            $file->move('assets_pages/images',$HinhAnh);
            if($data->NoiDung != "default.jpg")
                unlink('assets_pages/images/'.$data->NoiDung);
            $data->NoiDung = $HinhAnh;
            $data->save();
        }

        return redirect('/#image-block'); 
    }
}
