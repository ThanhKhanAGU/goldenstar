<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Posts;
use App\Images;

class ProductController extends Controller
{
    public function get_list()
    {
        $product = DB::table('posts')->where("type","pr")->get();
        $di = DB::table('posts')->where("type","di")->get();
        $tr = DB::table('posts')->where("type","tr")->get();
        // echo $product;
        return view('ad.product.list', ['p' => $product,'di' => $di,'tr' => $tr]);
    }

    public function get_add()
    {
        $di = DB::table('posts')->where("type","di")->get();
        $tr = DB::table('posts')->where("type","tr")->get();
        return view('ad.product.add',['tr'=>$tr,'di'=>$di]);
    }

    public function post_add(Request $request)
    {

        $product = new posts;
        $product->type = 'pr';
        
        if($request->name){
            $product->name = $request->name;
        }
     
        if($request->content){
            $product->content = $request->content;
        }

        if($request->price){
            $product->price = $request->price;
        }

        if($request->promotion_price){
            $product->promotion_price = $request->promotion_price;
        }

        if($request->id_trademark){
            $product->id_trademark = $request->id_trademark;
        }
        if($request->id_distributor){
            $product->id_distributor = $request->id_distributor;
        }

        // echo $request->promotion_price;
        $product->save();

        if($request->hasFile('img')){
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('product',$image);
                //create row of table images
                $images = new images();
                $images->id_post = $product->id;
                $images->img = $image;
                $images->save();
            }
        }
        
        return  redirect("ad/product/list");
       
    }

    public function get_edit($id)
    {
        $product = posts::find($id);    
        $di = DB::table('posts')->where("type","di")->get();
        $tr = DB::table('posts')->where("type","tr")->get();
        return view('ad.product.edit',['p'=>$product, 'tr'=>$tr,'di'=>$di]);
    }
    
    public function post_edit(Request $request,$id)
    {

        $product = posts::find($id);

        
        if($request->name){
            $product->name = $request->name;
        }
     
        if($request->content){
            $product->content = $request->content;
        }

        if($request->price){
            $product->price = $request->price;
        }

        if($request->promotion_price){
            $product->promotion_price = $request->promotion_price;
        }

        if($request->id_trademark){
            $product->id_trademark = $request->id_trademark;
        }
        if($request->id_distributor){
            $product->id_distributor = $request->id_distributor;
        }

        if($request->image){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $image = time()."_".$name;
            $file->move('product',$image);
            
            try {
                unlink("product/".$product->image);
            } catch (\Throwable $th) {
                //throw $th;
            }
            $product->image = $image;
        }

        $product->save();

        if($request->hasFile('img')){
            foreach ($product->images as $value){
                try {
                    unlink('product/'.$value->img);
                } catch (\Throwable $th) {
                    //throw $th;
                }
                $value->delete();
            } 
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('product',$image);

                //create row of table images
                $images = new images();
                $images->id_post = $product->id;
                $images->img = $image;
                $images->save();              
            }
        }   

        return  redirect("ad/product/list");
    }

    public function get_del($id)
    {
        $product = posts::find($id);
        $product->delete();
        foreach($product->images as $img){
            try {
                unlink('product/'.$img->img);
            } catch (\Throwable $th) {
                //throw $th;
            }
            
            $img->delete();
        }
        return  redirect("ad/product/list");
    }
    public function get_change($id)
    {
        $product = posts::find($id);
        if($product->show==1)
            $product->show = 0;
        else 
            $product->show = 1;
        $product->save();
    }
    public function view_img($id)
    {
        //$pr = posts::find($id)->images;
        return view ('view_img');
    }
    
}
