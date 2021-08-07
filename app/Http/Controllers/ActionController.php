<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Images;

class ActionController extends Controller
{
    public function get_list()
    {
        $actions = Posts::all()->where("type","ac");
        return view('ad.action.list', ['p' => $actions]);
    }

    public function get_add()
    {
        return view('ad.action.add');
    }

    public function post_add(Request $request)
    {

        $action = new Posts;
        $action->type = "ac";
        
        if($request->name){
            $action->name = $request->name;
        }

        if($request->content){
            $action->content = $request->content;
        }

        if($request->place){
            $action->place = $request->place;
        }

        if($request->timetake){
            $action->timetake = $request->timetake;
        }

        $action->save();

        if($request->hasFile('img')){
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('action/',$image);
                //create row of table images
                $images = new Images();
                $images->id_post = $action->id;
                $images->img = $image;
                $images->save();
            }
        }
        
        return  redirect("ad/action/list");
       
    }

    public function get_edit($id)
    {
        $action = Posts::find($id);
        return view('ad.action.edit',['p'=>$action]);
    }

    public function post_edit(Request $request,$id)
    {

        $action = Posts::find($id);

        if($request->name){
            $action->name = $request->name;
        }

        if($request->content){
            $action->content = $request->content;
        }

        if($request->place){
            $action->place = $request->place;
        }

        if($request->timetake){
            $action->timetake = $request->timetake;
        }

        $action->save();

        if($request->hasFile('img')){
            foreach ($action->images as $value){
                
                try {
                    unlink('action/'.$value->img);
                } catch (\Throwable $th) {
                   
                }
                $value->delete();
            } 
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('action/',$image);

                //create row of table images
                $images = new images();
                $images->id_post = $action->id;
                $images->img = $image;
                $images->save();              
            }
        }    
        return  redirect("ad/action/list");
    }

    public function get_del($id)
    {
        $action = posts::find($id);
        $action->delete();
        foreach($action->images as $img){
            try {
                unlink('action/'.$img->img);
            } catch (\Throwable $th) {
                //throw $th;
            }
           
            $img->delete();
            
        }
        return  redirect("ad/action/list");
    }
}
