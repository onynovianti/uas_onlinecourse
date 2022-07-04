<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use DB;

class LoginController extends Controller
{   
    // SHOW LOGIN-REGISTER
    public function index(){
        return view("login",[
            "title" => 'CO - Login',
        ]);
    }

    // CREATE USER
    public function store(Request $request){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);
        $validatedData['password']=bcrypt($validatedData["password"]);
        $validatedData['is_admin']=0;
        $validatedData['is_active']=0;
        User::create($validatedData); //untuk menyimpan data
        
        toast('Registration has been successful','success');
        return redirect()->intended('/login');
    }

    // Autentikasi
    public function validasiLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->is_admin == 1) {
                return redirect()->intended('/admin');
            }elseif(auth()->user()->is_admin == 0 && auth()->user()->is_active==1){
                return redirect()->intended('/user');
            }elseif(auth()->user()->is_admin == 0 && auth()->user()->is_active==0){
                Session::flush();
                Auth::logout();
                toast('Your Account Still Inactive, Contact Administrator!','danger');
                return redirect()->intended('/login');
            }
            // return redirect()->intended('/');
        }else{
            toast('Login Information are Wrong!','danger');
            return redirect()->intended('/login');
        }
    }

    // Logout
    public function logout(Request $request){
        // Auth::logout();
        // $request->session->invalidate();
        // $request->session->regenerateToken();
        // return redirect('/home');
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    // TAMPIL INDEX
    public function tampil(){
        return view('index',[
            "title" => "CO - Home",
            "category" => DB::table('categories')->where('is_top', '=', 1)->get(),
            "all" => DB::table('courses')->get(),
            "top" => DB::table('courses')->where('is_topcourse', '=', 1)->get(),
            "free" => DB::table('courses')->where('price', '=', 0)->get(),
        ]);
    }

    // TAMPIL REGISTER
    public function tampilregister(){
        return view('register',[
            "title" => "CO - Register"
        ]);
    }

    // TAMPIL MUST LOGIN
    public function mustlogin(){
        return view("mustlogin",[
            "title" => 'CO - Must Login',
        ]);
    }
}
