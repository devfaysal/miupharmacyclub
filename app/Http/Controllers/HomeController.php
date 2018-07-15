<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentId;
use App\User;
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
        $this->middleware('auth')->except('welcome');
    }


    public function welcome(){
        $users = User::all();
        $batches = User::distinct()->get(['batch'])->count();
        $studentid = StudentId::count();
        return view('welcome')->withUsers($users)->withStudentid($studentid)->withBatches($batches);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereRoleIs('user')->orderBY('batch')->get()->groupBy('batch');

        return view('home')->withUsers($users);
    }
}
