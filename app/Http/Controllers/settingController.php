<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Information;
use App\Posts;

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
    public function get_introduce(){
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = Posts::all();
        return view('ad.setting.introduce',['dt'=>$data,'p'=>$p]);
    }
    public function get_policy(){
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $p = Posts::all();
        return view('ad.setting.policy',['dt'=>$data,'p'=>$p]);
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
        }
        var_dump($request->pin);
    }
    public function post_tag1(Request $request){
        
    }
    public function post_tag2(Request $request){
        
    }
    public function post_introduce(Request $request){
        
    }
    public function post_policy(Request $request){
        
    }
    public function post_communications(Request $request){
        
    }
    
}