<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\information;
use App\posts;

class settingController extends Controller
{
    public function get_side(){
        $dt = information::all();
        $p = posts::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = posts::all();
        return view('ad.setting.side',['dt'=>$data,'p'=>$p]);
    }
    public function get_tag1(){
        $dt = information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = posts::all();
        return view('ad.setting.tag1',['dt'=>$data,'p'=>$p]);
    }
    public function get_tag2(){
        $dt = information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = posts::all();
        return view('ad.setting.tag2',['dt'=>$data,'p'=>$p]);
    }
    public function get_tag3(){
        $dt = information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = posts::all();
        return view('ad.setting.tag3',['dt'=>$data,'p'=>$p]);
    }
    public function get_introduce(){
        $id = information::where('Ten','id_gt')->first()->NoiDung;
        $p = posts::find($id);
        return view('ad.setting.introduce',['p'=>$p]);
    }

    public function get_policy(){
        $id = information::where('Ten','id_cl')->first()->NoiDung;
        $p = posts::find($id);
        return view('ad.setting.policy',['p'=>$p]);
    }
    public function get_communications(){
        $dt = information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = posts::all();
        return view('ad.setting.communications',['dt'=>$data,'p'=>$p]);
    }



    public function post_side(Request $request){
        $data = information::all();
        foreach ($request->pin as $i => $value) {
            $dt = $data->where("Ten","pin".($i+1))->first();
            $dt->NoiDung = $value;
        }
        return redirect('/');
    }
    public function post_tag1(Request $request){
        $data = information::where("Ten",'tag1')->first();
        $data->NoiDung = $request->tag1;
        $data->save();

        for($i=1;$i<4;$i++)
        {
            $data = information::where("Ten",'tag1_'.$i.'_icon')->first();
            $data->NoiDung = $request['tag1_'.$i.'_icon'];
            $data->save();
            $data = information::where("Ten",'tag1_'.$i.'_title')->first();
            $data->NoiDung = $request['tag1_'.$i.'_title'];
            $data->save();
            $data = information::where("Ten",'tag1_'.$i.'_ct')->first();
            $data->NoiDung = $request['tag1_'.$i.'_ct'];
            $data->save();
        }

        return redirect('/'); 
    }
    public function post_tag2(Request $request){
        $data = information::where("Ten",'tag2')->first();
        $data->NoiDung = $request->tag2;
        $data->save();

        for($i=1;$i<5;$i++)
        {
            if($request->hasFile('tag2_'.$i.'_icon')){
                $data = information::where("Ten",'tag2_'.$i.'_icon')->first();
                $file = $request->file('tag2_'.$i.'_icon');
                $name = $file->getClientOriginalName();
                $HinhAnh = time()."_".$name;
                $file->move('assets_pages/images/',$HinhAnh);
                if($data->NoiDung != "default.jpg")
                    unlink('assets_pages/images/'.$data->NoiDung);
                $data->NoiDung = $HinhAnh;
                $data->save();
            }
            $data = information::where("Ten",'tag2_'.$i.'_title')->first();
            $data->NoiDung = $request['tag2_'.$i.'_title'];
            $data->save();
            $data = information::where("Ten",'tag2_'.$i.'_ct')->first();
            $data->NoiDung = $request['tag2_'.$i.'_ct'];
            $data->save();
        }
        for($i=1;$i<5;$i++)
        {
            $data = information::where("Ten",'sl_'.$i)->first();
            $data->NoiDung = $request['sl_'.$i];
            $data->save();
            $data = information::where("Ten",'sl_'.$i.'_ten')->first();
            $data->NoiDung = $request['sl_'.$i.'_ten'];
            $data->save();
            $data = information::where("Ten",'sl_'.$i.'_icon')->first();
            $data->NoiDung = $request['sl_'.$i.'_icon'];
            $data->save();
        }

        return redirect('/');  
    }
    public function post_tag3(Request $request){
        for($i=1;$i<5;$i++)
        {
            $data = information::where("Ten",'sl_'.$i)->first();
            $data->NoiDung = $request['sl_'.$i];
            $data->save();
            $data = information::where("Ten",'sl_'.$i.'_ten')->first();
            $data->NoiDung = $request['sl_'.$i.'_ten'];
            $data->save();
            $data = information::where("Ten",'sl_'.$i.'_icon')->first();
            $data->NoiDung = $request['sl_'.$i.'_icon'];
            $data->save();
        }

        return redirect('/');  
    }
    public function post_policy(Request $request){
        $post = posts::find($request->id);
        
        if($request->name){
            $post->name = $request->name;
        }

        if($request->summary){
            $post->summary = $request->summary;
        }

        if($request->content){
            $post->content = $request->content;
        }

        if($request->show=="show");
        {
            $post->show = 1;
        }

        if($request->image){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move('post',$image);
            unlink("post/".$post->image);
            $post->image = $image;
        }
        $post->save();
        return redirect('/');  
    }
    public function post_communications(Request $request){
        $data = information::where("Ten",'dc')->first();
        $data->NoiDung = $request->dc;
        $data->save();

        $data = information::where("Ten",'mail')->first();
        $data->NoiDung = $request->mail;
        $data->save();

        $data = information::where("Ten",'sdt')->first();
        $data->NoiDung = $request->sdt;
        $data->save();
        return redirect('/');  
    }
    
}