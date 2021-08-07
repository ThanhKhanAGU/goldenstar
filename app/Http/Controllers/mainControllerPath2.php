<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Information;
use App\Images;
use App\Posts;

class mainController extends Controller
{
    //
    function __construct()
    {
        $dt['dc'] = Information::where('Ten','dc')->first()->NoiDung;
        $dt['sdt'] = Information::where('Ten','sdt')->first()->NoiDung;
        $dt['mail'] = Information::where('Ten','mail')->first()->NoiDung;
        view()->share('dt',$dt);
    }

    public function home()
    {
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $pin[1] = Posts::find($data['pin1']);
        $pin[2] = Posts::find($data['pin2']);
        $pin[3] = Posts::find($data['pin3']);
        $gt = Posts::find($data['id_gt']);
        $sp = Posts::all()->where('type','pr')->sortByDesc('id')->take(4);
        $tt = Posts::all()->where('type','ps')->sortByDesc('id')->take(3);
        $s = "home";
        return view('pages.home',['s'=>$s,'data'=>$data,'pin'=>$pin,'gt'=>$gt,'sp'=>$sp,'post'=>$tt]);

    }
    public function up_img(Request $request)
    {
        $file = $request->file('upload');
        $name = $file->getClientOriginalName();
        $HinhAnh = time()."_".$name;
        $file->move('public/img/',$HinhAnh);
        
        $ck = $request->input('CKEditorFuncNum');
        $url = asset('public/img/'.$HinhAnh);
        $msg = "Tải Ảnh Thành Công";
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($ck,'$url','$msg')</script>";
        @header('Content-type: text/html; charset=utf-8');
        echo $response;
    }
    public function file_img(Request $request)
    {
        return view('listimg');
    }

    public function products()
    {

        $product = DB::table('posts')->orderBy('id', 'DESC')->where("type","pr")->get();
        $di = DB::table('posts')->where("type","di")->get();
        $tr = DB::table('posts')->where("type","tr")->get();
        $img = DB::table('images')->get();
        $s = "products";
        return view('pages.products', ['s'=>$s,'p' => $product,'di' => $di,'tr' => $tr, 'img' => $img]);
    }

    public function inforProduct($id){
        $product = Posts::find($id);
        $images = DB::table('images')->where('id_post', $id)->get();
        $s = "products";
        return view('pages.inforproduct', ['s'=>$s,'product' => $product, 'images' => $images]);
    }

    public function pages()
    {
        $tintuc = DB::table('posts')->orderBy('id', 'DESC')->where('type','ps')->get();
        $noibat = DB::table('posts')->where('type','ps')->where("show",1)->get()->take(3);
        $moi = Posts::all()->where('type','ps')->sortByDesc('created_at')->take(3);
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $pin[1] = Posts::find($data['pin1']);
        $pin[2] = Posts::find($data['pin2']);
        $pin[3] = Posts::find($data['pin3']);
        $s = 'pages';
        return view('pages.listpages',['s'=>$s,'tintuc'=>$tintuc,'noibat'=>$noibat,'moi'=>$moi,'pin'=>$pin]);
    }
    public function page($id)
    {
        $tin = Posts::find($id);
        $noibat = DB::table('posts')->where("type",'ps')->where("show",1)->get()->take(4);
        $moi = Posts::all()->where("type",'ps')->sortByDesc('created_at')->take(3);
        $s = 'pages';
        return view('pages.page',['s'=>$s,'data'=>$tin,'noibat'=>$noibat,'moi'=>$moi]);
    }

    public function distributor(){
        $di = DB::table('posts')->where("type","di")->paginate(12);
        $s = 'di';
        return view('pages.distributor',['s'=>$s,'di'=>$di]);
    }

    public function trademark(){
        $tr = DB::table('posts')->where("type","tr")->paginate(12);
        $s = 'tra';
        return view('pages.trademark',['s'=>$s,'tr'=>$tr]);
    }

    public function plusview($id)
    {
        $tin = Posts::find($id);
        $tin->view++;
        $tin->save();
    }
    public function view_img($id)
    {
        $img = DB::table('images')->where('id_post', $id)->get();
        return view('view_img', ['img'=> $img]);
    }

    public function get_action()
    {
        $action = DB::table('posts')->where("type","ac")->paginate(12);
        $s = 'actions';
        return view('pages.action', ['s'=>$s,'p' => $action]);
    }

    public function infor_action($id)
    {
        $tin = Posts::find($id);
        // $noibat = DB::table('posts')->where("type",'ps')->where("show",1)->get()->take(4);
        // $moi = Posts::all()->where("type",'ps')->sortByDesc('created_at')->take(3);
        $s = 'actions';
        return view('pages.inforaction',['s'=>$s,'data'=>$tin]);
    }
    public function welcome()
    {
        return view("ad.welcome");
    }
    public function distributor_infor($id)
    {
        $dis = Posts::find($id);
        $s = 'di';
        return view('pages.infordistributor',['s'=>$s,'data'=>$dis]);
    }
    public function trademark_infor($id)
    {
        $dis = Posts::find($id);
        $s = 'tra';
        return view('pages.infortrademark',['s'=>$s,'data'=>$dis]);
    }

}
