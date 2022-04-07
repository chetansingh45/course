<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ env('APP_NAME') }} - Login</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('') }}css/style.css" rel="stylesheet">
    <link href="{{ asset('') }}css/custom.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .btn-white {
            background-color: #fff;
            color: var(--primary);
            font-weight: bold;
        }
        .btn-white:hover, .btn-white:focus {
            background-color: #56cfed;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center h-100 mt-5">
            <div class="col-md-4 shadow-sm p-5 border bg-primary">
                <form method="post" id="login" action="{{ route('login.attempt') }}">
                    <div class="text-center mt-2 mb-2"><span class="bg-primary p-3">
                        @csrf
                        {{-- <img class="lazyloaded" src="https://maryjane-assests.s3.ap-south-1.amazonaws.com/images/logo.png" class="logo" alt="Euler Logo"></span> --}}
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-white"><b>Email</b></label>
                        <input type="email" name="email"  class="form-control" placeholder="Enter Email" value="{{ old('password') }}">
                        @error('email') 
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label class="text-white"><b>Password</b></label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        @error('password') 
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="form-group mb-2 mt-4">
                        <button type="submit" class="btn btn-sm btn-white">Login</button>
                    </div>
                </form>
                @if(session()->has('failed'))
                <h5 class="text-center text-danger">{{ session('failed') }}</h5>
                @endif
            </div>
        </div>
    </div>
    
    <script src="{{ asset('') }}vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('') }}vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <!-- <script src="js/custom.min.js"></script> -->
    <script src="{{ asset('') }}js/dlabnav-init.js"></script>
</body>
</html>