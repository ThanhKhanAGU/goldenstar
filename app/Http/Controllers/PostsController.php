<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function get_list()
    {
        $posts = Posts::all();
        return view('ad.posts.list', ['posts' => $posts]);
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
        //return back();
       
    }

    public function get_edit($id)
    {
        $post = Tintuc::find($id);
        return view('ad.posts.edit',['post'=>$post]);
    }

    public function get_del($id)
    {
        $post = Posts::find($id);
        $post->delete();
        foreach($post->comment as $cmt){
            $cmt->delete();
        }
        return redirect('ad/posts/list')->with('thongbao','Xóa Thành Công');
    }
    
   

    
    
    public function post_edit(Request $request)
    {
        $post = Tintuc::find($request->id);

        if($request->name){
            $post->name = $request->name;
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


        if($request->hasFile('image')){
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
        return redirect('ad/posts/list')->with('thongbao','Cập nhật Thành Công');
    }
    public function test(Request $request)
    {
        if($request->file("image")){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move('post',$image);
            $post->image = $image;
        }
        var_dump($request->image);
    }

}
