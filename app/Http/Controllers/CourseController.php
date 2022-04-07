<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.list',compact('courses'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.course.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'duration' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);
        
        $course = new Course();
        $course->name = $request->name;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->user_id = Auth::user()->id;
        $course->category_id = $request->category;
        $course->save();
        if($course->id){
            return redirect()->route('course.list')->with('success','Course Created!');
        }
        return back()->with('error','Something went wrong');
    }

    public function viewCourse($id){
        $videos = Video::where('course_id',$id)->get();
        return view('admin.course.view',compact('videos','id'));
    }

    public function show(Course $course)
    {
        //
    }

    public function edit(Course $course)
    {
        //
    }

    public function update(Request $request, Course $course)
    {
        //
    }

    public function destroy($id)
    {
        $res = Course::where('id', $id)->delete();
        if($res){
            return redirect()->route('course.list')->with('success','Course Deleted!');
        }
        return back()->with('error','Something went wrong');
    }
}
