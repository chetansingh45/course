@extends('layouts.admin.app')
@section('content')
<div class="col-md-4 col-sm-6">
    <div class="card bg-primary-light shadow-none">
        <div class="card-body">
            <div class="media align-items-center">
                <span class="p-3 mr-3 feature-icon rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="var(--primary)" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                        <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                    </svg>
                </span>
                <div class="media-body text-right">
                    <p class="fs-18 mb-2">Total Students</p>
                    <span class="fs-48 text-primary font-w600">86</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">
    <div class="card bg-primary-light shadow-none">
        <div class="card-body">
            <div class="media align-items-center">
                <span class="p-3 mr-3 feature-icon rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="var(--primary)" class="bi bi-briefcase" viewBox="0 0 16 16">
                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                    </svg>
                </span>
                <div class="media-body text-right">
                    <p class="fs-18 mb-2">Total Courses</p>
                    <span class="fs-48 text-primary font-w600">75</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">
    <div class="card bg-primary-light shadow-none">
        <div class="card-body">
            <div class="media align-items-center">
                <span class="p-3 mr-3 feature-icon rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="var(--primary)" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg>
                </span>
                <div class="media-body text-right">
                    <p class="fs-18 mb-2">Total Teachers</p>
                    <span class="fs-48 text-primary font-w600">45</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection