@extends('layouts.admin.app')
@section('title','Courses')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="row align-items-center">
            <div class="col-md-6">
                <a href="{{ route('teacher.create') }}" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New Teacher</a>
            </div>
            <div class="col-md-6">
                <div class="input-group search-area">
                    <input type="text" class="form-control h-auto" placeholder="search job title here...">
                    <span class="search-btn"><a href="javascript:void(0)" class="btn btn-primary rounded-circle"><i class="flaticon-381-search-2"></i></a></span>
                </div>
            </div>
        </div>
        <div class="tab-content mt-4">
            <div class="tab-pane fade active show" id="Boxed" role="tabpanel">
                <div class="row">
                    @foreach($teachers as $teacher)
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="jobs2 text-center card-body">
                                <div class="text-center">
                                    <span class="job_list_icon">
                                        <img src="{{ asset('images/teachers').'/'.$teacher->image}}" height="100" width="100" alt="{{ $teacher->image }}">
                                    </span>
                                    <h4 class="fs-20 mb-0">{{ $teacher->name }}</h4>
                                    <h6 class="">{{ $teacher->email }}</h6>
                                    <span class="text-primary mb-3 d-block">{{ $teacher->contact }}</span>
                                </div>
                                <div class="mb-3">
                                    <span class="badge badge-success badge-lg light abs-status">Active</span>
                                    {{-- <span class="d-block mb-1"><i class="text-primary font-normal">Posted Date:</i> 12-01-2021</span> --}}
                                </div>
                                <div class="action-buttons d-flex justify-content-center">
                                    <a href="{{ route('course.view',$teacher->id) }}" class="btn btn-success light mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                                    </a>
                                    <a href="a" class="btn btn-secondary light mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="{{ route('teacher.delete',$teacher->id) }}" class="btn btn-danger light">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>	
            </div>
        </div>
	</div>
</div>
@endsection
@section('scripts')
<script>
    let msg = "{{ session('success') }}"
    @if(session()->has('success'))
        toastr.info(msg)
    @endif
</script>
@endsection
            