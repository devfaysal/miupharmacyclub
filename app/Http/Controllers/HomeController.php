<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentId;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('takeMeHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function takeMeHome(Request $request)
    {
        if(StudentId::where('number', '=', $request->studentId)->exists()){
            return redirect()->route('home');
        }else{
            Session::flash('message', 'Provided ID is not valid!'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }

    }
}
