@extends('layouts.app')
@section('content')

<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">

            <div class="d-flex">
                <!-- Left wrapper -->
                <div class="row profile-body">
                    <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                        <div class="card rounded">
                            <div class="card-body">
                                <div class="mb-3">
                                    <img class="wd-80 ht-80 rounded-circle" src="{{ (!empty($adminData->image)) ?   url(Storage::url($adminData->image)) : url('upload/no_image.jpg') }}" alt="">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6 class="card-title mb-0">About</h6>
                                    <div class="dropdown">
                                        <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="git-branch" class="icon-sm me-2"></i> <span class="">Update</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                                    data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                                        </div>
                                    </div>
                                </div>
                                <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of
                                    Social.</p>
                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Admin Name</label>
                                    <p class="text-muted">{{ $adminData->first_name  }}</p>
                                </div>
                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                                    <p class="text-muted">{{ $adminData->email  }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form wrapper -->
                    <div class="col-md-8 col-xl-9">
                        <form class="forms-sample" action="{{ route('store.profile') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="first_name" class="form-label">Manager Name</label>
                                <input type="text" name="first_name" value="{{ $adminData->first_name }}"
                                    class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                                    placeholder="Enter Manager Name">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Manager Email</label>
                                <input type="text" name="email" value="{{ $adminData->email }}"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Enter Manager Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" value="@if ($adminData->Ptoken){{decrypt($adminData->Ptoken)}}@endif"
                                    class="form-control  @error('manager_mobile') is-invalid @enderror" id="manager_mobile"
                                    placeholder="Enter Password">
                                @error('manager_mobile')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Profile Picture</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



@endsection
