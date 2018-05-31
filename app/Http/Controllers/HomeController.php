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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereRoleIs('user')->get();
        return view('home')->withUsers($users);
    }
}
