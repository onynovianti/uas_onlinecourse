<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use DB;

class PaymentAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    // Tampil Pending Payment
    public function index(){
        return view('admin.payment_pending',[
            "title" => "Payment - Pending",
            "data" => Payment::with('kursus','student')->latest()->where('status', '=', 0)->get(),
            "nama" => auth()->user()->name,
        ]);
    }

    // Tampil Accept Payment
    public function acceptedPayment(){
        return view('admin.payment_accepted',[
            "title" => "Payment - Accepted",
            "data" => Payment::with('kursus','student')->latest()->where('status', '=', 1)->get(),
            "nama" => auth()->user()->name,
        ]);
    }

    // VERIFIKASI
    public function verifikasi($id){
        $payment = Payment::find($id);
        $payment->status = 1;
        $payment->save();
        // $request->session()->flash('updatesuccess','Data Anda berhasil disimpan');
        toast('Verified','success');
        return redirect("/payment"); // untuk diarahkan kemana
    }
}
