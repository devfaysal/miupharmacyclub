<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Batch;
use Session;
use Image; /* https://github.com/Intervention/image */
use Storage;

class ProfileController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($profile)
    {
        if($profile != auth()->user()->student_id){
            return abort(404);
        }
        $batches = Batch::orderBy('name')->get();
        return view ('profile.edit')->withBatches($batches);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = auth()->user();

        //dd($request->all());

        if($request->file('image')){
            $this->validate($request, [
                'image' => 'image|max:250',
            ]);
            
            $image_basename = explode('.',$request->file('image')->getClientOriginalName())[0];
            $image = $image_basename . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();

            $img = Image::make($request->file('image')->getRealPath());
            $img->stream();

            //Upload image
            Storage::disk('local')->put('public/'.$image, $img);

            //Remove if there was any old image
            if($user->image != ''){
                Storage::disk('local')->delete('public/'.$user->image);
            }

            //add new image path to database
            $user->image = $image;
            
        }
        
        $user->name = $request->name;
        $user->batch = $request->batch;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->current_organization = $request->current_organization;
        $user->designation = $request->designation;

        $user->save();

        Session::flash('message', 'Profile Updated successfully!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('profile.show', $user->student_id);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\user  $batch
     * @return \Illuminate\Http\Response
     */
    public function show($profile)
    {
        $user = User::where('student_id', '=', $profile)->first();
        return view('profile.show')->withUser($user);
    }
}
