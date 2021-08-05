<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\images;

class ActionController extends Controller
{
    public function get_list()
    {
        $actions = posts::all()->where("type","ac");
        return view('ad.action.list', ['p' => $actions]);
    }

    public function get_add()
    {
        return view('ad.action.add');
    }

    public function post_add(Request $request)
    {

        $action = new posts;
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
                $file->move('action',$image);
                //create row of table images
                $images = new images();
                $images->id_post = $action->id;
                $images->img = $image;
                $images->save();
            }
        }
        
        return  redirect("ad/action/list");
       
    }

    public function get_edit($id)
    {
        $action = posts::find($id);
        return view('ad.action.edit',['p'=>$action]);
    }

    public function post_edit(Request $request,$id)
    {

        $action = posts::find($id);

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
                unlink('action/'.$value->img);
            } 
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('post',$image);

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
            unlink('action/'.$img->img);
            $img->delete();
            
        }
        return  redirect("ad/action/list");
    }
}
