<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Images;

class ProductController extends Controller
{
    public function get_list()
    {
        $product = Posts::all()->where("type","pr");
        $di = Posts::all()->where("type","di");
        $tr = Posts::all()->where("type","tr");
        return view('ad.product.list', ['p' => $product,'di' => $di,'tr' => $tr]);
    }

    public function get_add()
    {
        $tr = Posts::where("type","tr");
        $di = Posts::where("type","di");
        return view('ad.product.add',['tr'=>$tr,'di'=>$di]);
    }

    public function post_add(Request $request)
    {

        $product = new product;
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

        $product->save();

        if($request->hasFile('img')){
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('product',$image);
                //create row of table Images
                $images = new Images();
                $images->id_product = $product->id;
                $images->img = $image;
                $images->save();
            }
        }
        
        return  redirect("ad/product/list");
       
    }

    public function get_edit($id)
    {
        $product = Posts::find($id);
        return view('ad.product.edit',['p'=>$product]);
    }
    
    public function post_edit(Request $request,$id)
    {

        $product = Posts::find($id);

        
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
            unlink("product/".$product->image);
            $product->image = $image;
        }

        $product->save();

        if($request->hasFile('img')){
            foreach ($product->images as $value){
                unlink('product/'.$value);
            } 
            foreach($request->file("img") as $file)
            {
                //upload images to server
                $name = $file->getClientOriginalName();
                $image = time()."_".$name;
                $file->move('product',$image);

                //create row of table Images
                $images = new Images();
                $images->id_product = $product->id;
                $images->img = $image;
                $images->save();              
            }
        }   

        return  redirect("ad/product/list");
    }

    public function get_del($id)
    {
        $product = Posts::find($id);
        $product->delete();
        foreach($product->images as $img){
            $img->delete();
        }
        return  redirect("ad/product/list");
    }
    public function get_change($id)
    {
        $product = Posts::find($id);
        if($product->show==1)
            $product->show = 0;
        else 
            $product->show = 1;
        $product->save();
    }
    public function view_img($id)
    {
        //$pr = Posts::find($id)->images;
        return view ('view_img');
    }
    
}
