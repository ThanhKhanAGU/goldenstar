<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\images;

class DistributorController extends Controller
{
    public function get_list()
    {
        $distributor = posts::all()->where("type","di");
        return view('ad.distributor.list', ['p' => $distributor]);
    }

    public function get_add()
    {
        return view('ad.distributor.add');
    }

    public function post_add(Request $request)
    {

        $distributor = new posts;
        $distributor->type = "di";
        
        if($request->name){
            $distributor->name = $request->name;
        }

        if($request->content){
            $distributor->content = $request->content;
        }
    
        if($request->telephone){
            $distributor->telephone = $request->telephone;
        }

        if($request->email){
            $distributor->email = $request->email;
        }
        
        if($request->place){
            $distributor->place = $request->place;
        }
        
        $distributor->save();

        if($request->hasFile('img')){
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('distributor/',$image);
                //create row of table images
                $images = new images();
                $images->id_post = $distributor->id;
                $images->img = $image;
                $images->save();
            }
        }
        
        return  redirect("ad/distributor/list");   
    }
    public function get_edit($id)
    {
        $distributor = posts::find($id);
        return view('ad.distributor.edit',['p'=>$distributor]);
    }
    public function post_edit(Request $request,$id)
    {

        $distributor = posts::find($id);

        if($request->name){
            $distributor->name = $request->name;
        }

        if($request->content){
            $distributor->content = $request->content;
        }
    
        if($request->telephone){
            $distributor->telephone = $request->telephone;
        }

        if($request->email){
            $distributor->email = $request->email;
        }

        $distributor->save();

        if($request->hasFile('img')){
            foreach ($distributor->images as $value){
                unlink('distributor/'.$value->img);
            } 
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('distributor',$image);

                //create row of table images
                $images = new images();
                $images->id_post = $distributor->id;
                $images->img = $image;
                $images->save();              
            }
        }    
        return  redirect("ad/distributor/list");
    }

    public function get_del($id)
    {
        $distributor = posts::find($id);
        $distributor->delete();
        foreach($distributor->images as $img){
            unlink('distributor/'.$img->img);
            $img->delete();
        }
        return  redirect("ad/distributor/list");
    }
}
