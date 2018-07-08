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
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereRoleIs('user')->orderBY('batch')->get()->groupBy('batch');

        // echo '<pre>';
        // print_r($users);
        // echo '</pre>';
        // foreach($users as $user){
        //     echo $user[0]->batch .'<br/><br/>';
        //     foreach ($user as $u){
        //         echo $u->name .'<br/><br/>';
        //     }
        // }
        // exit();
        return view('home')->withUsers($users);
    }
}
