<?php

namespace App\Http\Controllers;

use App\User;
use App\Batch;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $batches = Batch::orderBy('name')->get();

        return view('members', [
            'batches'   => $batches
        ]);
    }

    public function batch($batch)
    {
        $members = User::where('batch', $batch)->get();

        return view('batch', [
            'members'   => $members,
            'batch'     => $batch
        ]);
    }
}
