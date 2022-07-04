<?php

namespace App\Http\Controllers;
use App\Models\User;
use DB;
use Alert;

use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    // Use Tabel Users
    public function __construct()
    {
        $this->middleware('admin');
    }

    // Tampil Admin
    public function index(){
        return view('admin.user_student',[
            "title" => "User - Student",
            "data" => User::with('kursus')->latest()->where('is_admin', '=', 0)->get(),
            "nama" => auth()->user()->name,
        ]);
    }

    // Tampilan Register
    public function create(){
        return view('admin.user_tambahstudent',[
            "title" => "User - Tambah Student",
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
        $validatedData['is_admin']=0;
        $validatedData['is_active']=0;

        User::create($validatedData); //untuk menyimpan data
        toast('Your data has been submited!','success');
        return redirect("/user_student"); // untuk diarahkan kemana
    }

    // Tampilan Edit
    public function edit($id){
    		return view("admin.user_editstudent",[
    		'title' => 'User - Edit Student',
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
    	return redirect("/user_student"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
    	User::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
        toast('Your data has been deleted!','success');
    	return redirect("/user_student"); // untuk diarahkan kemana
    }  

    // SET ACTIVE
    public function setactive($id){
        $user = User::find($id);
        $user->is_active = 1;
        $user->save();
        // $request->session()->flash('updatesuccess','Data Anda berhasil disimpan');
        toast('Your data has been changed!','success');
        return redirect("/user_student"); // untuk diarahkan kemana
    }

    // SET INACTIVE
    public function setinactive($id){
        $user = User::find($id);
        $user->is_active = 0;
        $user->save();
        toast('Your data has been changed!','success');
        // $request->session()->flash('updatesuccess','Data Anda berhasil disimpan');
        return redirect("/user_student"); // untuk diarahkan kemana
    }
}
