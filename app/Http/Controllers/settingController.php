<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Information;
use App\Posts;
use App\Card;

class settingController extends Controller
{
    public function get_side(){
        $dt = Information::all();
        $p = Posts::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = Posts::all();
        return view('ad.setting.side',['dt'=>$data,'p'=>$p]);
    }
    public function get_tag1(){
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = Posts::all();
        return view('ad.setting.tag1',['dt'=>$data,'p'=>$p]);
    }
    public function get_tag2(){
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = Posts::all();
        return view('ad.setting.tag2',['dt'=>$data,'p'=>$p]);
    }
    public function get_tag3(){
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = Posts::all();
        return view('ad.setting.tag3',['dt'=>$data,'p'=>$p]);
    }
    public function get_introduce(){
        $id = Information::where('Ten','id_gt')->first()->NoiDung;
        $p = Posts::find($id);
        return view('ad.setting.introduce',['p'=>$p]);
    }

    public function get_policy(){
        $id = Information::where('Ten','id_cl')->first()->NoiDung;
        $p = Posts::find($id);
        return view('ad.setting.policy',['p'=>$p]);
    }
    public function get_communications(){
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = Posts::all();
        return view('ad.setting.communications',['dt'=>$data,'p'=>$p]);
    }



    public function post_side(Request $request){
         $data = Information::all();
         foreach ($request->pin as $i => $value) {
             $dt = $data->where("Ten","pin".($i+1))->first();
             $dt->NoiDung = $value;
             $dt->save();
         }
        return redirect('/');
    }
    public function post_tag1(Request $request){
        $data = Information::where("Ten",'tag1')->first();
        $data->NoiDung = $request->tag1;
        $data->save();

        foreach(Card::all()->where('id_tag',$data->id) as $card)
        {
            $card->delete();
        }

        if($request->img)
        foreach($request->img as $key=>$img)
        {
            $card = new Card;
            $card->img = $request->img[$key] ?? ' ';
            $card->title = $request->title[$key] ?? ' ';
            $card->content = $request->content[$key] ?? ' ';
            $card->id_tag = $data->id;
            $card->save();
        }
        return redirect('/'); 
    }
    public function post_tag2(Request $request){
        $data = Information::where("Ten",'tag2')->first();
        $data->NoiDung = $request->tag2;
        $data->save();

        $img = Card::all()->where("id_tag",$data->id);
        
        foreach($img as $i)
        { 
            if( isset($request->id[$i->id]) )
            {
                $i->title = $request->title[$i->id] ?? ' ';
                $i->content = $request->content[$i->id] ?? ' ';

                if( isset($request->img[$i->id])){
                    $name = $request->img[$i->id]->getClientOriginalName();
                    $image = time()."_".$name;
                    $request->img[$i->id]->move('assets_pages/images/img/',$image);
                    try {
                        unlink('assets_pages/images/img/',$i->img);
                    } catch (\Throwable $th) {}
                    $i->img = $image;
                }
                $i->save();
            }else
            {
                $i->delete();
                try {
                    unlink('assets_pages/images/img/',$i->img);
                } catch (\Throwable $th) {
                    
                }
            }
        }

        if($request->title_n)
        foreach($request->title_n as $key=>$i)
        {
            $card = new Card;
            if($request->img_n[$key]){
                $name = $request->img_n[$key]->getClientOriginalName();
                $image = time()."_".$name;
                $request->img_n[$key]->move('assets_pages/images/img/',$image);
                $card->img = $image;
            }
            else
            {
                $card->img = 'default.jpg';
            }
            $card->title = $request->title_n[$key];
            $card->content = $request->content_n[$key];
            $card->id_tag = $data->id;
            $card->save();
        }
        
        return redirect('/');  
    }
    public function post_tag3(Request $request){
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

        return redirect('/');  
    }
    public function post_policy(Request $request){
        $post = Posts::find($request->id);
        
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
            try {
                unlink("post/".$post->image);
            } catch (\Throwable $th) {
                //throw $th;
            }
            
            $post->image = $image;
        }
        $post->save();
        return redirect('/');  
    }
    public function post_communications(Request $request){
        $data = Information::where("Ten",'dc')->first();
        $data->NoiDung = $request->dc;
        $data->save();

        $data = Information::where("Ten",'mail')->first();
        $data->NoiDung = $request->mail;
        $data->save();

        $data = Information::where("Ten",'sdt')->first();
        $data->NoiDung = $request->sdt;
        $data->save();
        return redirect('/');  
    }
    
}