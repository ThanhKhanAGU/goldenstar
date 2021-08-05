<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\information;
use App\images;
use App\posts;

class mainController extends Controller
{
    //
    function __construct()
    {
        $dt['dc'] = information::where('Ten','dc')->first()->NoiDung;
        $dt['sdt'] = information::where('Ten','sdt')->first()->NoiDung;
        $dt['mail'] = information::where('Ten','mail')->first()->NoiDung;
        view()->share('dt',$dt);
    }

    public function home()
    {
        $dt = information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $pin[1] = posts::find($data['pin1']);
        $pin[2] = posts::find($data['pin2']);
        $pin[3] = posts::find($data['pin3']);
        $gt = posts::find($data['id_gt']);
        return view('pages.home',['data'=>$data,'pin'=>$pin,'gt'=>$gt]);

    }
    public function up_img(Request $request)
    {
        $file = $request->file('upload');
        $name = $file->getClientOriginalName();
        $HinhAnh = time()."_".$name;
        $file->move('post',$HinhAnh);
        
        $ck = $request->input('CKEditorFuncNum');
        $url = asset('/post/'.$HinhAnh);
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
        return view('pages.products', ['p' => $product,'di' => $di,'tr' => $tr, 'img' => $img]);
    }

    public function inforProduct($id){
        $product = posts::find($id);
        $images = DB::table('images')->where('id_post', $id)->get();
        return view('pages.inforproduct', ['product' => $product, 'images' => $images]);
    }

    public function pages()
    {
        $tintuc = DB::table('posts')->orderBy('id', 'DESC')->where('type','ps')->get();
        $noibat = DB::table('posts')->where('type','ps')->where("show",1)->get()->take(3);
        $moi = posts::all()->where('type','ps')->sortByDesc('created_at')->take(3);
        $dt = information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $pin[1] = posts::find($data['pin1']);
        $pin[2] = posts::find($data['pin2']);
        $pin[3] = posts::find($data['pin3']);
        return view('pages.listpages',['tintuc'=>$tintuc,'noibat'=>$noibat,'moi'=>$moi,'pin'=>$pin]);
    }
    public function page($id)
    {
        $tin = posts::find($id);
        $noibat = DB::table('posts')->where("type",'ps')->where("show",1)->get()->take(4);
        $moi = posts::all()->where("type",'ps')->sortByDesc('created_at')->take(3);

        return view('pages.page',['data'=>$tin,'noibat'=>$noibat,'moi'=>$moi]);
    }

    public function distributor(){
        $di = DB::table('posts')->where("type","di")->paginate(12);
        return view('pages.distributor',['di'=>$di]);
    }

    public function trademark(){
        $tr = DB::table('posts')->where("type","tr")->paginate(12);
        return view('pages.trademark',['tr'=>$tr]);
    }

    public function plusview($id)
    {
        $tin = posts::find($id);
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
        return view('pages.action', ['p' => $action]);
    }

    public function infor_action($id)
    {
        $tin = posts::find($id);
        // $noibat = DB::table('posts')->where("type",'ps')->where("show",1)->get()->take(4);
        // $moi = posts::all()->where("type",'ps')->sortByDesc('created_at')->take(3);

        return view('pages.inforaction',['data'=>$tin]);
    }
    public function welcome()
    {
        return view("ad.welcome");
    }
    public function distributor_infor($id)
    {
        $dis = posts::find($id);
        return view('pages.infordistributor',['data'=>$dis]);
    }
    public function trademark_infor($id)
    {
        $dis = posts::find($id);
        return view('pages.infortrademark',['data'=>$dis]);
    }

}
