<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.list',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:teachers',
            'contact' => 'required|min:10|max:13',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio' => 'required|min:100'
        ]);

        $imageName = 'Teacher-'.$request->name.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/teachers'), $imageName);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->contact = $request->contact;
        $teacher->bio = $request->bio;
        $teacher->image = $imageName;
        $teacher->save();
        if($teacher->id){
            return redirect()->route('teacher.list')->with('success','Teacher Added !');
        }
        return back()->with('error','Something went wrong');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Teacher::where('id', $id)->delete();
        if($res){
            return redirect()->route('teacher.list')->with('success','Teacher Deleted!');
        }
        return back()->with('error','Something went wrong');
    }
}
