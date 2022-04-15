@extends('layouts.admin.app')
@section('title','New Teacher')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <form method="post" action="{{ route('teacher.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Name<span class="text-danger scale5 ms-2">*</span></label>
                            <input type="text" name="name" class="form-control solid" placeholder="Name" aria-label="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
            
                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Email<span class="text-danger scale5 ms-2">*</span></label>
                            <input type="email" class="form-control solid" placeholder="Email" name="email" aria-label="name" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Contact<span class="text-danger scale5 ms-2">*</span></label>
                            <input type="text" class="form-control solid" placeholder="Contact" name="contact" aria-label="name" value="{{ old('contact') }}">
                            @error('contact')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Image<span class="text-danger scale5 ms-2"></span></label>
                            <input type="file" class="form-control" name="image" aria-label="name" >
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-xl-12  col-md-12 mb-4">
                            <label  class="form-label font-w600">Bio<span class="text-danger scale5 ms-2">*</span></label>
                            <textarea class="form-control solid" placeholder="Bio" id="editor" name="bio" aria-label="name"></textarea>
                            @error('bio')
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



            