<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Human - Resources</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('Backend_Theme/assets/vendors/core/core.css') }}">
    <!-- endinject -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('Backend_Theme/assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend_Theme/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('Backend_Theme/assets/css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('Backend_Theme/assets/images/favicon.png') }}" />

    <style>
        .auth-side-wrapper {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">
                                        <img src="{{ asset('Backend_Theme/assets/login.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-2">
                                        <a href="#"
                                            class="noble-ui-logo logo-light d-block mb-2">Human<span>Resources</span></a>
                                        <h5 class="text-muted fw-normal mb-2">Welcome! Register your Account.</h5>
                                        @if (!empty(session('success')))
                                            <div class="alert alert-success" role="alert">{{ session('succcess') }}
                                            </div>
                                        @endif

                                        {{--               Form               --}}

                                        <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data"
                                            class="forms-sample">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="first_name" class="form-label">Name</label>
                                                <input type="text" name="first_name" value="{{ old('first_name') }}"
                                                    class="form-control" id="name" placeholder="Name" >
                                            </div>
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    class="form-control" id="email" placeholder="Email">
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="password" placeholder="password">
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <div class="mb-3">
                                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                                <input type="password" name="confirmPassword" class="form-control"
                                                    id="confirmPassword" placeholder="Confirm Password">
                                            </div>
                                            @error('confirmPassword')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                                <button type="btn"
                                                    class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Sign
                                                    Up</button>
                                                    <a href="{{ route('login') }}" type="btn"
                                                    class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('Backend_Theme/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('Backend_Theme/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('Backend_Theme/assets/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
           case 'info':
           toastr.info(" {{ Session::get('message') }} ");
           break;

           case 'success':
           toastr.success(" {{ Session::get('message') }} ");
           break;

           case 'warning':
           toastr.warning(" {{ Session::get('message') }} ");
           break;

           case 'error':
           toastr.error(" {{ Session::get('message') }} ");
           break;
        }
        @endif





        $(function(){
           $(document).on('click','#delete',function(e){
               e.preventDefault();
               var link = $(this).attr("href");


                         Swal.fire({
                           title: 'Are you sure?',
                           text: "Delete This Data?",
                           icon: 'warning',
                           showCancelButton: true,
                           confirmButtonColor: '#3085d6',
                           cancelButtonColor: '#d33',
                           confirmButtonText: 'Yes, delete it!'
                         }).then((result) => {
                           if (result.isConfirmed) {
                             window.location.href = link
                             Swal.fire(
                               'Deleted!',
                               'Your file has been deleted.',
                               'success'
                             )
                           }
                         })


           });

         });


       </script>

</body>

</html>
