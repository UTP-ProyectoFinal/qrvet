<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function validarqr(Request $request){
        $qr=$request->qr_code;
        $data='123';
        if($qr==$data){
            return response()->json(['statuss'=>200,]);
    }else {
        return response()->json(['statuss'=>400,]);
    }
}
}
