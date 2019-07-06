<?php

namespace App\Http\Controllers;

use App\StudentId;
use Illuminate\Http\Request;
use Session;

class StudentIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ids = StudentId::orderBy('number')->paginate(50);
        return view('manage.studentId.index')->withIds($ids);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.studentId.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for($i=$request->start; $i<=$request->end; $i++){
            $prefix = $i<1000 ? '00' : '0';
            //0812BPM00282
            $student_id = $request->year.$request->batch.'BPM'.$prefix.$i;

            $id = new StudentId;
            $id->number = $student_id;
            $id->save();
        }
        
        Session::flash('message', 'Student Ids added successfully!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('student-id.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentId  $studentId
     * @return \Illuminate\Http\Response
     */
    public function show(StudentId $studentId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentId  $studentId
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentId $studentId)
    {
        return view('manage.studentId.edit')->withStudentId($studentId);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentId  $studentId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentId $studentId)
    {
        $studentId->number = $request->number;
        $studentId->save();

        Session::flash('message', 'Student Ids updated successfully!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('student-id.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentId  $studentId
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentId $studentId)
    {
        //
    }
}
