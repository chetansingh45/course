<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;
use App\Models\Teacher;

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
        $teachers = Teacher::all();
        return view('admin.course.create',compact('categories','teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'duration' => 'required',
            'price' => 'required',
            'category' => 'required',
            'teacher' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required'
        ]);

        $imageName = 'Course-'.$request->name.'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('images/courses'), $imageName);
        
        $course = new Course();
        $course->name = $request->name;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->user_id = Auth::user()->id;
        $course->category_id = $request->category;
        $course->image = $imageName;
        $course->teacher_id = $request->teacher;
        $course->description = $request->description;
        $course->save();
        if($course->id){
            return redirect()->route('course.list')->with('success','Course Created!');
        }
        return back()->with('error','Something went wrong');
    }

    public function viewCourse($id){
        $course = Course::find($id);
        $similar_courses = Course::where('category_id', $course->category_id)->orderBy('id','DESC')->take(5)->get();
        $videos = Video::where('course_id',$id)->get();
        return view('admin.course.view',compact('videos','id','course','similar_courses'));
    }

    public function show(Course $course)
    {
        //
    }

    public function edit($id)
    {
        $course = Course::find($id);
        $categories = Category::all();
        $teachers = Teacher::all();
        return view('admin.course.edit',compact('course','categories','teachers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2',
            'duration' => 'required',
            'price' => 'required',
            'category' => 'required',
            'teacher' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required'
        ]);
        $course = Course::find($id);

        if($request->image){
            $imageName = 'Course-'.$request->name.'-'.time().'.'.$request->image->extension();
            $request->image->move(public_path('images/courses'), $imageName);
        }else{
            $imageName = $course->image;
        }

        $course->name = $request->name;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->user_id = Auth::user()->id;
        $course->category_id = $request->category;
        $course->image = $imageName;
        $course->teacher_id = $request->teacher;
        $course->description = $request->description;
        $course->save();
        if($course->id){
            return redirect()->route('course.list')->with('success','Course Updated!');
        }
        return back()->with('error','Something went wrong');
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
