<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\images;

class PostsController extends Controller
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

        $post = new posts;

        $post->type = "ps";
        
        if($request->name){
            $post->name = $request->name;
        }

        if($request->summary){
            $post->summary = $request->summary;
        }

        if($request->content){
            $post->content = $request->content;
        }

        if($request->show=="show")
        {
            $post->show = 1;
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
        return  redirect("ad/post/list");
       
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
    public function count_view($id)
    {
        $post = Posts::find($id);
        $post->view+=1;
        $post->save();
    }
}
