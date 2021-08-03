<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;

class userController extends Controller
{
    public function get_list(){
        $users = DB::table('users')->get();
        return view('ad.user.list', ['users'=>$users]);
    }

    public function get_add(){
        return view('ad.user.add');
    }

    public function post_add(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        //change
        $user->password = bcrypt($request->password);

        $user->save();
        return redirect('ad/user/list');
        // return redirect('ad/user/add')->with('thongbao','Thêm Thành Công');
    }

    public function get_edit($id){
        $user = User::find($id);
        return view('ad.user.edit', ['user'=> $user]);
    }

    public function post_edit(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;

        if($request->changePassword === "on"){
            $user->password = bcrypt($request->password);
        }
       
        $user->save();
        return redirect('ad/user/list')->with('thongbao','Xóa Thành Công');
    }

    public function get_del($id){
        $user = User::find($id);
        $user->delete();

        return redirect('ad/user/list')->with('thongbao','Xóa Thành Công');
    }

    public function get_dangnhap()
    {
        return view('ad.user.login');
    }

    public function post_dangnhap(Request $request)
    {
        $this->validate($request, [
            'password'=>'min:6|max:32',
            [
                'password.min'=>'Password không được nhỏ hơn 6 kí tự',
                'password.max'=>'Password không được lớn hơn 32 kí tự',
            ]
            ]);
        if(Auth::attempt(['email' => $request->email, 'password'=> $request->password ])){
            return redirect('ad/welcome_to_administrator');
        }else{
            return redirect('login')->with('thongbao','Đăng nhập không thành công');
        }
    }

    public function get_dangxuat()
    {
        Auth::logout();
        return redirect('login');
    }
}
