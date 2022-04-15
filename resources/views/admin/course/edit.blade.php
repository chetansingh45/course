@extends('layouts.admin.app')
@section('title','New Course')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <form method="post" action="{{ route('course.update',$course->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Course Name<span class="text-danger scale5 ms-2">*</span></label>
                            <input type="text" name="name" class="form-control solid" placeholder="Name" aria-label="name" value="{{ $course->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Course Duration<span class="text-danger scale5 ms-2">*</span></label>
                            <select  class="form-select form-control solid" name="duration">
                                <option value="{{ $course->duration }}" selected>{{ $course->duration }} Days</option>
                                <option value="">Choose...</option>
                                <option value="15">15 Days</option>
                                <option value="30">30 Days</option>
                                <option value="60">60 Days</option>
                                <option value="120">120 Days</option>
                                <option value="365">365 Days</option>
                            </select>
                            @error('duration')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Category<span class="text-danger scale5 ms-2">*</span></label>
                            <select  class="form-select form-control solid" name="category">
                                <option selected value="">Choose...</option>
                                @foreach($categories as $category)
                                    @if($course->category_id==$category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('duration')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Teacher<span class="text-danger scale5 ms-2">*</span></label>
                            <select  class="form-select form-control solid" name="teacher">
                                <option selected value="">Choose...</option>
                                @foreach($teachers as $teacher)
                                    @if($course->teacher_id==$teacher->id)
                                        <option value="{{ $teacher->id }}" selected>{{ $teacher->name }}</option>
                                    @else
                                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('teacher')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Price<span class="text-danger scale5 ms-2">*</span></label>
                            <input type="text" class="form-control solid" placeholder="Price" name="price" aria-label="name" value="{{ $course->price }}">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Image<span class="text-danger scale5 ms-2">*</span></label>
                            <input type="file" class="form-control"  name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img src="{{ asset('images/courses').'/'.$course->image}}" height="100" width="200" class="img-fluid">
                        </div>

                        <div class="col-xl-12  col-md-12 mb-4">
                            <label  class="form-label font-w600">Description<span class="text-danger scale5 ms-2">*</span></label>
                            <textarea class="form-control solid" placeholder="Description" id="editor" name="description" aria-label="name">{{ $course->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <div>
                        <a href="javascript:void(0);" class="btn btn-primary me-3">Close</a>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endsection



            