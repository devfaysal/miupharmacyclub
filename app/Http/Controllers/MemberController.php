<?php

namespace App\Http\Controllers;

use App\Batch;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $batches = Batch::orderBy('name')->get();

        return view('v2.members', [
                'batches' => $batches
            ]);
    }
}
