<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Alert;

class UserAdminController extends Controller
{
    // Use Tabel Users

    public function __construct()
    {
        $this->middleware('admin');
    }

    // Tampil Admin
    public function index(){
        return view('admin.user_admin',[
            "title" => "User - Admin",
            "data" => DB::table('users')->where('is_admin', '=', 1)->get(),
            "nama" => auth()->user()->name,
        ]);
    }

    // Tampilan Register
    public function create(){
        return view('admin.user_tambahadmin',[
            "title" => "User - Tambah Admin",
            "nama" => auth()->user()->name,
        ]);
    }

    // Simpan Data User
    public function store(Request $request){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);
        $validatedData['password']=bcrypt($validatedData["password"]);
        $validatedData['is_admin']=1;
        $validatedData['is_active']=1;

        User::create($validatedData); //untuk menyimpan data
        toast('Your data has been submited!','success');
        return redirect("/user_admin"); // untuk diarahkan kemana
    }

    // Tampilan Edit
    public function edit($id){
    		return view("admin.user_editadmin",[
    		'title' => 'User - Edit Admin',
            'item' => User::find($id),
            "nama" => auth()->user()->name,
    	]);
    }
        
    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
        ]);

        // Menyimpan update
    	$user = User::find($id);
    	$user->name = $request->name;
        $user->email = $request->email;
    	$user->save();
    	
        toast('Your data has been saved!','success');
    	return redirect("/user_admin"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
    	User::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
        toast('Your data has been deleted!','success');
    	return redirect("/user_admin"); // untuk diarahkan kemana
    }  
}
