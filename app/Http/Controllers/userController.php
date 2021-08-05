<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\user;

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
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:Users,email',
            'password' => 'required|min:6',
            'confirm-password' => 'required|same:password'
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
            'confirm-password.required' => 'Bạn chưa nhập lại mật khẩu',
            'confirm-password.same' => 'Mật khẩu nhập lại chưa trùng khớp'
        ]);
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->level;
        //change
        $user->password = bcrypt($request->password);

        echo $request->level;
        $user->save();
        return redirect('ad/user/list');
    }

    public function get_edit($id){
        $user = user::find($id);
        return view('ad.user.edit', ['user'=> $user]);
    }

    public function post_edit(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
        ]);
        $user = user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        // echo $request->changePassword;

        if($request->changePassword == "checked"){
            $this->validate($request, [
                'password' => 'required|min:6',
                'confirm-password' => 'required|same:password'
            ],[
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
                'confirm-password.required' => 'Bạn chưa nhập lại mật khẩu',
                'confirm-password.same' => 'Mật khẩu nhập lại chưa trùng khớp'
            ]);
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('ad/user/list')->with('thongbao','Xóa Thành Công');
    }

    public function get_del($id){
        $user = user::find($id);
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

    public function get_edit_user($id){
        $user = user::find($id);
        return view('ad.user.edituser', ['user'=> $user]);
    }

    public function post_edit_user(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            
        ]);
        $user = user::find($id);
        echo $user;
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->changePassword == "checked"){
            $this->validate($request, [
                'password' => 'required|min:6',
                'confirm-password' => 'required|same:password'
            ],[
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
                'confirm-password.required' => 'Bạn chưa nhập lại mật khẩu',
                'confirm-password.same' => 'Mật khẩu nhập lại chưa trùng khớp'
            ]);
            $user->password = bcrypt($request->password);
        }

        $user->save();
        Auth::logout();
        return redirect('login')->with('thongbao','Xóa Thành Công');
    }
}
