<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManageController extends Controller
{
    public function index(){
        return view ('manage.index');
    }

    public function students(){
        $users = User::whereRoleIs('user')->get();

        return view('manage.student.index')->withusers($users);
    }
}
