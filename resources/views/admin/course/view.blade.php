@extends('layouts.admin.app')
@section('title','Course Details')
@section('content')
<div class="container-fluid">
				    
    {{-- <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Course Details</h4>
            </div>
        </div>
    </div> --}}
    
    <div class="row">
        <div class="col-xl-3 col-xxl-4 col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <button type="button" class="btn btn-success btn-sm">Add New</button>
						<div class="card-body">
							<h4 class="mb-0 text-center">{{ $course->name }}</h4>
                        </div>
						<img class="img-fluid" src="{{ asset('images/courses').'/'.$course->image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">About Course</h2>
                        </div>
                        <div class="card-body pb-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Duration</strong>
                                    <span class="mb-0">{{ $course->duration }} Days</span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Professor</strong>
                                    <span class="mb-0">{{ $course->teacher->name }}</span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Price</strong>
                                    <span class="mb-0">&#8377; {{ $course->price }}</span>
                                </li>
                                <li class="list-group-item d-flex px-0 justify-content-between">
                                    <strong>Date</strong>
                                    <span class="mb-0">{{ $course->created_at }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer pt-0 pb-0 text-center">
                            <div class="row">
                                <div class="col-4 pt-3 pb-3 border-right">
                                    <h3 class="mb-1 text-primary">07</h3>
                                    <span>Years</span>
                                </div>
                                <div class="col-4 pt-3 pb-3 border-right">
                                    <h3 class="mb-1 text-primary">10</h3>
                                    <span>Students</span>
                                </div>
                                <div class="col-4 pt-3 pb-3">
                                    <h3 class="mb-1 text-primary">{{ count($course->videos) }}</h3>
                                    <span>Videos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-xxl-8 col-lg-8">
            <div class="card">
                <div class="card-body">
					{!! $course->description !!}
                    <h4 class="text-primary">Our Courses</h4>
                    <div class="profile-skills pt-2 border-bottom-1 pb-2">
                        @foreach($similar_courses as $course)
                            <a href="{{ route('course.view',$course->id) }}" class="btn btn-outline-dark btn-rounded ps-4 my-3 my-sm-0 pe-4 me-3 m-b-10">{{ $course->name }}</a>
                        @endforeach
                    </div>
                    <div class="profile-lang pt-5 border-bottom-1 pb-5">
                        <h4 class="text-primary mb-4">Language</h4><a href="javascript:void()" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> <a href="javascript:void()" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                        <a href="javascript:void()" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                    </div>
                    <h4 class="text-primary">Courses Information</h4>
                    <ul class="list-group mb-3 list-group-flush">
                        <li class="list-group-item border-0 px-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
                        <li class="list-group-item -0 px-0">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</li>
                        <li class="list-group-item -0 px-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.</li>
                        <li class="list-group-item -0 px-0">A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</li>
                        <li class="list-group-item border-0 px-0">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection