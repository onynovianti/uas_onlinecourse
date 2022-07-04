<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class CategoryAdminController extends Controller
{
    // Use Tabel Users

    public function __construct()
    {
        $this->middleware('admin');
    }

    // Tampil Admin
    public function index(){
        return view('admin.course_category',[
            "title" => "Courses - Category",
            "data" => DB::table('categories')->get(),
            "nama" => auth()->user()->name,
        ]);
    }

    // Tampilan Register
    public function create(){
        return view('admin.course_tambahcategory',[
            "title" => "Courses - Tambah Category",
            "nama" => auth()->user()->name,
        ]);
    }

    // Simpan Data User
    public function store(Request $request){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:15',
        ]);
        // TOP COURSE
        if($request->is_top == 1) $validatedData['is_top'] = 1;
        else $validatedData['is_top'] = 0;

        Category::create($validatedData); //untuk menyimpan data
        toast('Your data has been submited!','success');
        return redirect("/category"); // untuk diarahkan kemana
    }

    // Tampilan Edit
    public function edit($id){
    		return view("admin.course_editcategory",[
    		'title' => 'Courses - Edit Category',
            'item' => Category::find($id),
            "nama" => auth()->user()->name,
    	]);
    }
        
    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'description' => 'required|min:15',
        ]);

        // Menyimpan update
    	$cat = Category::find($id);
    	$cat->name = $request->name;
        $cat->description = $request->description;

        // TOP COURSE
        if($request->is_top == 1) $cat->is_top = 1;
        else $cat->is_top = 0;
        
    	$cat->save();
    	
        toast('Your data has been saved!','success');
    	return redirect("/category"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
    	Category::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
        toast('Your data has been deleted!','success');
    	return redirect("/category"); // untuk diarahkan kemana
    }
}
