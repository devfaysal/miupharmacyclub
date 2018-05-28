<?php

namespace App\Http\Controllers;

use App\Batch;
use Illuminate\Http\Request;
use Session;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::all();
        return view('manage.batch.index')->withBatches($batches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch = new Batch;

        $batch->year = $request->year;
        $batch->name = $request->name;
        $batch->save();

        Session::flash('message', 'Batch Ids added successfully!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('batch.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, batch $batch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(batch $batch)
    {
        //
    }
}
