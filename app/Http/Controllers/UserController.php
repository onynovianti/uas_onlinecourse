<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Curriculum;
use Illuminate\Support\Str;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.home',[
            "category" => DB::table('categories')->where('is_top', '=', 1)->get(),
            "all" => DB::table('courses')->get(),
            "top" => DB::table('courses')->where('is_topcourse', '=', 1)->get(),
            "free" => DB::table('courses')->where('price', '=', 0)->get(),
        ]);
    }

    public function exploreCourses()
    {
        return view('user.explore', [
            "category" => DB::table('categories')->get(),
            "course" => DB::table('courses')->get(),
        ]);
    }

    public function detailCourse($id)
    {
        return view('user.detailcourse', [
            "course" =>  Course::with('instruktur')->find($id),
            "requirements" => DB::table('requirements')->where('course', '=', $id)->get(),
            "outcomes" => DB::table('outcomes')->where('course', '=', $id)->get(),
            "curriculum" => DB::table('curricula')->where('course', '=', $id)->get(),
            "pertemuan" => Curriculum::select('pertemuan', DB::raw('count(*) as total'))->where('course', '=', $id)
                 ->groupBy('pertemuan')->get(),
        ]);
    }

    public function exploreByCategory($id)
    {
        $course = DB::table('courses')->where('category','=',$id)->get();
        if($course->isEmpty()){
            $course = 'No result found';
        }
        return view('user.explore', [
            "category" => DB::table('categories')->get(),
            "course" => $course,
        ]);
    }

    public function contactus()
    {
        return view('user.contactus');
    }

    public function myaccount()
    {
        return view('user.myaccount');
    }

    public function wishlist()
    {
        return view('user.wishlist');
    }

    public function cart()
    {
        return view('user.cart');
    }

    public function mycourse()
    {
        $course = Course::whereHas('student', function($q){
            $q->where('users.id', '=', auth()->user()->id);
        })->get();

        return view('user.cart', [
            "course" => $course,
            "title" => 'Courses - My Course',
            "nama" => auth()->user()->name,
        ]);
    }

    public function materibelajar($id)
    {
        return view('user.materibelajar', [
            "cur" => DB::table('curricula')->where('course','=',$id)->get(),
            "title" => 'Courses - Study Material',
            "nama" => auth()->user()->name,
        ]);
    }

    public function enroll(Request $request, $id){
        $cek = Curriculum::find($id);
        if($cek->price == 0){
            $posts = [
                'course_id' => $id,
                'user_id' => auth()->user()->id,
                'created_at' => new \DateTime,
            ]; 
            \DB::table('course_user')->insert($posts);

            $p = new Payment;
            $p->user = auth()->user()->id;
            $p->course = $id;
            $p->document = 'Free Course';
            $p->status = 1;
            $p->save();
            return redirect("/mycourse"); // untuk diarahkan kemana
        }else{
            // return dd($request->all());
            $validatedData=$request->validate([
                'payment' => 'required',
            ]);

            $posts = [
                'course_id' => $id,
                'user_id' => auth()->user()->id,
                'created_at' => new \DateTime,
            ]; 
            \DB::table('course_user')->insert($posts);

            $p = new Payment;
            $p->user = auth()->user()->id;
            $p->course = $id;

            // STORE BUKTI
            $name=Str::random(15).'.'.$request->file('payment')->extension();
            $path = $request->file('payment')->storeAs('public/uploads/payment',$name);
            $p->document = $name;

            $p->status = 0;
            $p->save();
            return redirect("/mycourse"); // untuk diarahkan kemana
        }
    }
}
