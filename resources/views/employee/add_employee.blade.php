@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Employee</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
          <i class="btn-icon-prepend" data-feather="printer"></i>
          Print
        </button>
      </div>
    </div>


<div class="container-fluid card-body col-mb-6">
    {{-- @if ($errors->any())
    {{dd($errors)}}
    @endif --}}

    <form class="forms-sample" action="{{ route('store.employee') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="First Name" >
            @error('first_name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="first_name" placeholder="Last Name">
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Address" >
            @error('email')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
           @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" >
            @error('password')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
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
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="Phone Number" >
            @error('phone_number')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
             </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="job_id" class="form-label">Job Title</label>
            <select class="form-control @error('job_id') is-invalid @enderror" name="job_id" id="job_id" >
                <option value="">Select Job Title</option>
                @foreach ($jobTitles as $jobTitle)
                <option value="{{ $jobTitle->id }}">{{ $jobTitle->job_title }}</option>
                @endforeach
            </select>
            @error('job_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>
        <div class="mb-3">
            <label for="hire_date " class="form-label">Hire Date</label>
            <input type="date" name="hire_date" class="form-control @error('hire_date') is-invalid @enderror" id="hire_date" placeholder="Date" >
            @error('hire_date')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>
        <div class="mb-3">
            <label for="salary " class="form-label">Salary</label>
            <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror" id="salary" placeholder="Salary" >
            @error('salary')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="commision_pct" class="form-label">Commision PCT</label>
            <input type="text" name="commision_pct" class="form-control @error('commision_pct') is-invalid @enderror" id="commision_pct" placeholder="Commision PCT" >
            @error('commision_pct')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>
        <div class="mb-3">
            <label for="manager_id " class="form-label">Manager Name</label>
            <select class="form-control @error('manager_id') is-invalid @enderror" name="manager_id" id="manager_id" >
                <option value="">Select Manager Name</option>
                @foreach ($getManagers as $getManager)
                <option value="{{ $getManager->id }}">{{ $getManager->manager_name }}</option>
                @endforeach
            </select>
            @error('manager_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>


        <div class="mb-3">
            <label for="department_id " class="form-label">Department Name</label>
            <select class="form-control @error('department_id') is-invalid @enderror" name="department_id" id="department_id" >
                <option value="">Select Department Name</option>
                @foreach ($getDeparts as $getDepart )
                <option value="{{ $getDepart->id }}">{{ $getDepart->department_name }}</option>
                @endforeach
            </select>
            @error('department_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="interview" class="form-label">Interview</label>
            <select class="form-control @error('interview') is-invalid @enderror" name="interview" id="interview" >
                <option value="">Select interview</option>
                <option {{ $getDepart->interview == '0' ? 'selected' : '' }} value="0">Cancel</option>
                <option {{ $getDepart->interview == '1' ? 'selected' : '' }} value="1">Pending</option>
                <option {{ $getDepart->interview == '2' ? 'selected' : '' }} value="2">Done</option>
            </select>
            @error('manager_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>
        <div class="mb-3">
            <label for="position_id " class="form-label">Position Name</label>
            <select class="form-control @error('position_id') is-invalid @enderror" name="position_id" id="department_id" >
                <option value="">Select Position Name</option>
                @foreach ($positions as $position)
                <option  value="{{$position->id}}"> {{$position->position_name}} </option>
                @endforeach
            </select>
            @error('position_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>



        <div class="form-check mb-3">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">
                Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <a href="{{ route('all.employee') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>



@endsection
