<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    function register()
    {
        return view('login.register');
    }
    function add(Request $request)
    {

        if($request->password==$request->passwords){
            $user = new Users();
            $user ->name = $request->name;
            $user ->day_of_birth = $request->day_of_birth;
            $user ->email = $request->email;
            $user ->password = bcrypt("$request->password");
            $user->gender = $request->gender;
            $user->save();
            return redirect()->route('login');
        } else {
            dd('password ko trùng khớp');
        }  
    }
    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
    function login()
    {
        return view('login.login');
    }
    function loginProcessing(Request $request)
    {
        $arr=[
            'email' => $request->email, 
            'password' =>$request->password
        ];
        if (Auth::attempt($arr)) {
            return redirect()->route('index');
        } else {
            $kq='tài khoản, hoặc mật khẩu không tồn tại';
            return view('login.login', compact('kq'));
        }
    }
    public function index()
    {
      $user = Users::all();
      return response()->json(['user'=>$user], 200);
    }

    public function show($id)
    {
      $user = Users::find($id);
      return response()->json(['user'=>$user], 200);
    }
}
