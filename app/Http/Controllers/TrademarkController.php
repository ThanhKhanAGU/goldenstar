<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\images;

class TrademarkController extends Controller
{
    public function get_list()
    {
        $trademark = posts::all()->where("type","tr");
        return view('ad.trademark.list', ['p' => $trademark]);
    }

    public function get_add()
    {
        return view('ad.trademark.add');
    }

    public function post_add(Request $request)
    {

        $trademark = new posts;
        $trademark->type = "tr";
        
        if($request->name){
            $trademark->name = $request->name;
        }

        if($request->content){
            $trademark->content = $request->content;
        }
    
        if($request->telephone){
            $trademark->telephone = $request->telephone;
        }

        if($request->email){
            $trademark->email = $request->email;
        }
        
        $trademark->save();

        if($request->hasFile('img')){
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('trademark',$image);
                //create row of table images
                $images = new images();
                $images->id_post = $trademark->id;
                $images->img = $image;
                $images->save();
            }
        }
        
        return  redirect("ad/trademark/list");   
    }
    public function get_edit($id)
    {
        $trademark = posts::find($id);
        return view('ad.trademark.edit',['p'=>$trademark]);
    }
    public function post_edit(Request $request,$id)
    {

        $trademark = posts::find($id);

        if($request->name){
            $trademark->name = $request->name;
        }

        if($request->content){
            $trademark->content = $request->content;
        }
    
        if($request->telephone){
            $trademark->telephone = $request->telephone;
        }

        if($request->email){
            $trademark->email = $request->email;
        }

        $trademark->save();

        if($request->hasFile('img')){
            foreach ($trademark->images as $value){
                unlink('trademark/'.$value->img);
            } 
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('trademark',$image);

                //create row of table images
                $images = new images();
                $images->id_post = $trademark->id;
                $images->img = $image;
                $images->save();              
            }
        }    
        return  redirect("ad/trademark/list");
    }

    public function get_del($id)
    {
        $trademark = posts::find($id);
        $trademark->delete();
        foreach($trademark->images as $img){
            unlink('trademark/'.$img->img);
            $img->delete();
        }
        return  redirect("ad/trademark/list");
    }
}
