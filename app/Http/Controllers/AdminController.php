<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.dashboard',[
            "title" => "Dashboard",
            "nama" => auth()->user()->name,
            "instructor" => DB::table('users')->where('is_admin', '=', 2)->count(),
            "student" => DB::table('users')->where('is_admin', '=', 0)->count(),
            "payment" => DB::table('payments')->where('status', '=', 1)->count(),
            "course" => DB::table('courses')->count(),
        ]);
    }
}
