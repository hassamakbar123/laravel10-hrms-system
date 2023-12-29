<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Human - Resources</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('Backend_Theme/assets/vendors/core/core.css') }}">
	<!-- endinject -->

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
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">Human<span>Resources</span></a>
                    <h5 class="text-muted fw-normal mb-2">Welcome back! Log in to your account.</h5>
                    @if (!empty(session('error')))
                       <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                    @endif

                    {{--        FORM         --}}

                    <form action="{{ route('login.post') }}" method="POST" class="forms-sample" enctype="multipart/form-data" >
                        @csrf
                      <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                      <span style="color: red">
                        @error("email")
                        {{-- {{ $errors->first('email') }} --}}
                        @enderror
                    </span>

                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-valid @enderror" id="userPassword" autocomplete="current-password" placeholder="Password">
                      </div>
                      <span style="color: red">
                    @error("password")
                    {{ $errors->first('password') }}

                    @enderror
                    </span>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>
                      </div>
                      <div>
                        <button class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                        <a href="{{ route('forget.password') }}" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          Forget Password
                        </a>
                      </div>
                      <a href="{{ route('register') }}" class="d-block mt-3 ">Not a user? &nbsp; Register</a>
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
</body>
</html>
