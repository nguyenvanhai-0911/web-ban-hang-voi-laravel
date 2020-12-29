<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $viewprefix;
    public $viewnamespace;

    public function __construct()
    {
        $this->viewprefix='admin.QLUser.';
        $this->viewnamespace='User';
    }
    public function index()
    {
        $users = User::paginate(5);
        return view($this->viewprefix.'listuser')->with('users',$users);
    }
    public function getcreate()
    {
        return view($this->viewprefix.'createuser');
    }
    public function postcreate(request $request)
    {
        $user = new User();
        $this->Validate($request,[
            'txtname'=>'required',
            'txtemail'=>'required',
            'txtpassword'=>'required|min:5',
        ]);
        $user->image = $this->imageUpload($request);
        $user->name = $request->txtname;
        $user->email = $request->txtemail;
        $user->phone = $request->txtphone;
        $user->cmnd = $request->txtcmnd;
        $user->birthdate = $request->txtbirthdate;
        $user->address = $request->txtaddress;
        $user->position = $request->txtposition;
        $user->password = Hash::make($request->txtpassword);
        $user->status = $request->txtstatus;
        if($user -> save()){
            Session::flash('message','Thêm Tài Khoản Nhân Viên Thành Công!');
        }
        else{
            Session::flash('message','Thêm Tài Khoản Nhân Viên Không Thành Công!');
        }
           return redirect()->route('user.index');
    }

    public function getedit(request $request, $id)
    {
        $user = User::findOrFail($id);
        return view($this->viewprefix.'edituser')->with('user',$user);
    }
    public function postedit(request $request, $id)
    {
        $user= User::findOrFail($id);
        $data=$request->validate([
            'txtname'=>'required',
            'txtemail'=>'required',
            'txtpassword'=>'required|min:5',
        ]);
        $user->image = $this->imageUpload($request);
        $user->name = $request->txtname;
        $user->email = $request->txtemail;
        $user->phone = $request->txtphone;
        $user->cmnd = $request->txtcmnd;
        $user->birthdate = $request->txtbirthdate;
        $user->address = $request->txtaddress;
        $user->position = $request->txtposition;
        $user->password = $request->txtpassword;
        $user->status = $request->txtstatus;
        if($user -> save()){
            Session::flash('message','Chỉnh Sửa Tài Khoản Nhân Viên Thành Công!');
        }
        else{
            Session::flash('message','Chỉnh Sửa Tài Khoản Nhân Viên Không Thành Công!');
        }
        return redirect()->route('user.index');
    }
    public function delete(request $request, $id)
    {
        $user = User::findOrFail($id);
        if($user -> delete()){
            Session::flash('message','Xóa Tài Khoản Nhân Viên Thành Công!');
        }
        else{
            Session::flash('message','Xóa Tài Khoản Nhân Viên Không Thành Công!');
        }
        return redirect()->route('user.index');
    }

    public function imageUpload(Request $request)
    {
        if($request->hasFile('image')){
            if($request->file('image')->isValid()){
                $request->validate([
                    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/img_account'),$imageName);
                return $imageName;
            }
        }
        return '';
    }

    public function active($id)
    {
        $user = User::findOrFail($id);
        $user->status = 1;
        if($user->save()){
            Session::flash('message','Mở Khóa Tài Khoản!');
        }
        else{
            Session::flash('message','Khóa Tài Khoản!');
        }
        return redirect()->route('user.index');
    }
    public function unactive($id)
    {
        $user = User::findOrFail($id);
        $user->status = 0;
        if($user->save()){
            Session::flash('message','Khóa Tài Khoản!');
        }
        else{
            Session::flash('message','Mở Khóa Tài Khoản!');
        }
        return redirect()->route('user.index');
    }
}
