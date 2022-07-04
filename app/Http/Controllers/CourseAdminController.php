<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Course_User;
use App\Models\Requirement;
use App\Models\Curriculum;
use App\Models\Outcome;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Alert;
use Redirect;

class CourseAdminController extends Controller
{
    // Use Tabel Course

    public function __construct()
    {
        $this->middleware('admin');
    }

    // Tampil Admin
    public function index(){
        return view('admin.course_course',[
            "title" => "Courses - Manage Course",
            "data" => Course::with('kategori')->get(),
            "nama" => auth()->user()->name,
        ]);
    }

    // Tampilan Tambah Course
    public function create(){
        return view('admin.course_tambahcourse',[
            "title" => "Courses - Tambah Course",
            "nama" => auth()->user()->name,
            "kategori" => DB::table('categories')->get(),
        ]);
    }

    // Simpan Data Course
    public function store(Request $request){
        $validatedData=$request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'category' => 'required',
            'description' => 'required',
            'level' => 'required',
            'requirements' => 'required',
            'outcomes' => 'required',
            'gambar' => 'required',
        ]);

        // return redirect("/course/create");
        $c = new Course;
        $c->title = $request->title;
        $c->short_description = $request->short_description;
        $c->description = $request->description;
        $c->category = $request->category;
        $c->level = $request->level;
        $c->instructor = 0;
        
        // STORE GAMBAR
        // $name = $request->file('gambar')->getClientOriginalName();
        $name=Str::random(15).'.'.$request->file('gambar')->extension();
        $path = $request->file('gambar')->storeAs('public/uploads/course',$name);
        $c->gambar = $name;

        // // TOP COURSE
        if($request->is_topcourse == 1) $c->is_topcourse = 1;
        else $c->is_topcourse = 0;

        // // ALLOW ENROLL
        if($request->allow_enroll == 1) $c->allow_enroll = 1;
        else $c->allow_enroll = 0;

        // // FREE
        if($request->is_free == 1) $c->price = 0;
        else if($request->discount == 1){
            if($request->discount_price === null) $request->discount_price=0;
            $c->price = $request->price - $request->discount_price;
        }
        else $c->price = $request->price;

        // INSERT
        $c->save();

        // BEDA TABEL
        // REQUIREMENTS
        foreach($request->requirements as $req){
            Requirement::create([
                'name' => $req,
                'course' => $c->id
            ]);
        }

        // OUTOMES
        foreach($request->outcomes as $out){
            Outcome::create([
                'name' => $out,
                'course' => $c->id
            ]);
        }

        toast('Your data has been submited!','success');
        // dd($request->all());
        return redirect("/course"); // untuk diarahkan kemana
    }

    // Tampilan Edit
    public function edit($id){
    		return view("admin.course_editcourse",[
    		'title' => 'Courses - Edit Course',
            'item' => Course::find($id),
            "nama" => auth()->user()->name,
            "kategori" => DB::table('categories')->get(),
            "instructor" => DB::table('users')->where('is_admin', '=', 2)->get(),
            "req" => DB::table('requirements')->where('course', '=', $id)->get(),
            "out" => DB::table('outcomes')->where('course', '=', $id)->get(),
            "cur" => DB::table('curricula')->where('course', '=', $id)->get(),
            "pertemuan" => Curriculum::select('pertemuan', DB::raw('count(*) as total'))->where('course', '=', $id)
                 ->groupBy('pertemuan')->get(),
    	]);
    }
        
    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'category' => 'required',
            'description' => 'required',
            'level' => 'required',
            'requirements' => 'required',
            'outcomes' => 'required',
        ]);
        Requirement::where('course', '=', $id)->delete();
        Outcome::where('course', '=', $id)->delete();

        // return redirect("/course/create");
        $c = Course::find($id);
        $c->title = $request->title;
        $c->short_description = $request->short_description;
        $c->description = $request->description;
        $c->category = $request->category;
        $c->level = $request->level;
        $c->instructor = $request->instructor;
        
        // STORE GAMBAR
        if ($request->hasFile('gambar')) {
            $name=$c->gambar;
            $path = $request->file('gambar')->storeAs('public/uploads/course',$name);
            $c->gambar = $name;
        }

        // // TOP COURSE
        if($request->is_topcourse == 1) $c->is_topcourse = 1;
        else $c->is_topcourse = 0;

        // // ALLOW ENROLL
        if($request->allow_enroll == 1) $c->allow_enroll = 1;
        else $c->allow_enroll = 0;

        // // FREE
        if($request->is_free == 1) $c->price = 0;
        else if($request->discount == 1){
            if($request->discount_price === null) $request->discount_price=0;
            $c->price = $request->price - $request->discount_price;
        }
        else $c->price = $request->price;

        // INSERT
        $c->save();

        // BEDA TABEL
        // REQUIREMENTS
        foreach($request->requirements as $req){
            Requirement::create([
                'name' => $req,
                'course' => $c->id
            ]);
        }

        // OUTOMES
        foreach($request->outcomes as $out){
            Outcome::create([
                'name' => $out,
                'course' => $c->id
            ]);
        }

        toast('Your data has been updated!','success');
        // dd($request->all());
        return redirect("/course"); // untuk diarahkan kemana
    }

    // Hapus Data Course
    public function destroy(Request $request, $id){
    	Course::destroy($id);
    	// Session::flash('hapussuccess', 'Data berhasil dihapus!');
        toast('Your data has been deleted!','success');
    	return redirect("/course"); // untuk diarahkan kemana
    }

    // Add Section
    // Simpan Hasil Edit
    public function addsection(Request $request, $id){
        $validatedData=$request->validate([
            'section' => 'required|min:5',
        ]);

        // Menyimpan update
    	$user = User::find($id);
    	$user->name = $request->name;
        $user->email = $request->email;
    	$user->save();
    	
        toast('Your data has been saved!','success');
    	return redirect("/course"); // untuk diarahkan kemana
    }

    // ADD LESSON
    public function addLesson(Request $request, $id){
        $validatedData=$request->validate([
            'pertemuan' => 'required',
            'materi' => 'required',
            'jenis' => 'required',
        ]);
        $validatedData['course']=$id;

        if($validatedData['jenis'] !== 'Youtube Video'){
            // STORE MATERI
            $name=Str::random(15).'.'.$request->file('materi')->extension();
            $path = $request->file('materi')->storeAs('public/uploads/materi',$name);
            $validatedData['materi'] = $name;
        }

        // dd($request->all());
        Curriculum::create($validatedData); //untuk menyimpan data
        toast('Your data has been added!','success');
        return \Redirect::back();
    }

    public function detailCourseAdmin($id)
    {
        return view('admin.course_detailcourse', [
            "course" =>  Course::with('instruktur')->find($id),
            "title" => 'Courses - Detail Course',
            "nama" => auth()->user()->name,
        ]);
    }
}
