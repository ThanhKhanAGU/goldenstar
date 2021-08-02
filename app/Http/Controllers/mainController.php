<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Information;
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

        $product = DB::table('Posts')->where("type","pr")->paginate(20);
        $di = DB::table('Posts')->where("type","di")->get();
        $tr = DB::table('Posts')->where("type","tr")->get();
        // echo $product;
        return view('pages.products', ['p' => $product,'di' => $di,'tr' => $tr]);
        // return view('pages.products');
    }

    public function inforProduct($id){
        // $sanpham = SanPham::find($id);
        return view('pages.inforproduct');
    }

    public function hoatdong()
    {
        $hoatdong = HoatDong::all();
        // $noibat = DB::table('SanPham')->where("NoiBat",1)->get()->take(4);
        return view('pages.hoatdong',['hoatdong'=>$hoatdong]);
    }

    public function chitiethoatdong($id, $ten){
        $data = HoatDong::find($id);
        return view('pages.chitiethoatdong',['data'=>$data]);
    }

    public function pages()
    {
        $tintuc = DB::table('Posts')->orderBy('id', 'DESC')->where('type','ps')->paginate(4);
        $noibat = DB::table('Posts')->where('type','ps')->where("show",1)->get()->take(4);
        $moi = Posts::all()->where('type','ps')->sortByDesc('created_at')->take(3);
        $dt = Information::all();
        foreach($dt as $item)
        {
            $data[$item->Ten] = $item->NoiDung;
        }
        $pin[1] = Posts::find($data['pin1']);
        $pin[2] = Posts::find($data['pin2']);
        $pin[3] = Posts::find($data['pin3']);
        return view('pages.listpages',['tintuc'=>$tintuc,'noibat'=>$noibat,'moi'=>$moi,'pin'=>$pin]);
    }
    public function page($id,$ten)
    {
        $tin = Posts::find($id);
        $noibat = DB::table('Posts')->where("type",'ps')->where("show",1)->get()->take(4);
        $moi = Posts::all()->where("type",'ps')->sortByDesc('created_at')->take(3);

        return view('pages.page',['data'=>$tin,'noibat'=>$noibat,'moi'=>$moi]);
    }

    public function plusview($id)
    {
        $tin = Posts::find($id);
        $tin->view++;
        $tin->save();
    }

}
