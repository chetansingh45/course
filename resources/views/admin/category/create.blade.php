@extends('layouts.admin.app')
@section('title','New Course')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <form method="post" action="{{ route('category.store') }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6  col-md-6 mb-4">
                            <label  class="form-label font-w600">Category Name<span class="text-danger scale5 ms-2">*</span></label>
                            <input type="text" name="name" class="form-control solid" placeholder="Name" aria-label="name">
                            @error('name')
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
@endsection


            