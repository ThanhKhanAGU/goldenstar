<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Images;

class DistributorController extends Controller
{
    public function get_list()
    {
        $posts = Posts::all()->where("type","ps");
        return view('ad.posts.list', ['p' => $posts]);
    }

    public function get_add()
    {
        return view('ad.posts.add');
    }

    public function post_add(Request $request)
    {

        $post = new Posts;

        
        if($request->name){
            $post->name = $request->name;
        }

            if($request->show=="show");
            {
                $post->show = 1;
            }

        if($request->summary){
            $post->summary = $request->summary;
        }
        if($request->content){
            $post->content = $request->content;
        }
        if($request->price){
            $post->price = $request->price;
        }
        if($request->promotion_price){
            $post->promotion_price = $request->promotion_price;
        }
        if($request->id_trademark){
            $post->id_trademark = $request->id_trademark;
        }
        if($request->id_distributor){
            $post->id_distributor = $request->id_distributor;
        }
        if($request->place){
            $post->place = $request->place;
        }
        if($request->timetake){
            $post->timetake = $request->timetake;
        }
        if($request->telephone){
            $post->telephone = $request->telephone;
        }
        if($request->email){
            $post->email = $request->email;
        }
        if($request->type){
            $post->type = $request->type;
        }
        if($request->image){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move('post',$image);
            $post->image = $image;
        }
        else
        {
            $post->image = "default.jpg";
        }
        $post->save();

        if($request->hasFile('img')){
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('post',$image);
                //create row of table Images
                $images = new Images();
                $images->id_post = $post->id;
                $images->img = $image;
                $images->save();
            }
        }
        
        return back();
       
    }
    public function get_edit($id)
    {
        $post = Posts::find($id);
        return view('ad.posts.edit',['p'=>$post]);
    }
    public function post_edit(Request $request,$id)
    {

        $post = Posts::find($id);

        if($request->name){
            $post->name = $request->name;
        }

        if($request->show=="show");
        {
            $post->show = 1;
        }

        if($request->summary){
            $post->summary = $request->summary;
        }
        if($request->content){
            $post->content = $request->content;
        }
        if($request->price){
            $post->price = $request->price;
        }
        if($request->promotion_price){
            $post->promotion_price = $request->promotion_price;
        }
        if($request->id_trademark){
            $post->id_trademark = $request->id_trademark;
        }
        if($request->id_distributor){
            $post->id_distributor = $request->id_distributor;
        }
        if($request->place){
            $post->place = $request->place;
        }
        if($request->timetake){
            $post->timetake = $request->timetake;
        }
        if($request->telephone){
            $post->telephone = $request->telephone;
        }
        if($request->email){
            $post->email = $request->email;
        }
        if($request->type){
            $post->type = $request->type;
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

        if($request->hasFile('img')){
            foreach ($post->images as $value){
                unlink('post/'.$value);
            } 
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('post',$image);

                //create row of table Images
                $images = new Images();
                $images->id_post = $post->id;
                $images->img = $image;
                $images->save();              
            }
        }    
        return  redirect("ad/post/list");
    }

    public function get_del($id)
    {
        $post = Posts::find($id);
        $post->delete();
        foreach($post->images as $img){
            $img->delete();
        }
        return  redirect("ad/post/list");
    }
    public function get_change($id)
    {
        $post = Posts::find($id);
        if($post->show==1)
            $post->show = 0;
        else 
            $post->show = 1;
        $post->save();
    }
}
