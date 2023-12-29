@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Edit Employee</h4>
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


<div class=" container-fluid card-body col-mb-6">
    {{-- @if ($errors->any())
    {{dd($errors)}}
    @endif --}}

    <form class="forms-sample" action="{{ route('update.employee',$editData->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">Edit Name</label>
            <input type="text" name="first_name" value="{{ $editData->first_name }}" class="form-control" id="first_name" placeholder="First Name" >
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" value="{{ $editData->last_name }}" class="form-control" id="first_name" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" value="{{ $editData->email }}" class="form-control" id="email" placeholder="Email Address" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" value="{{ $editData->password }}" class="form-control" id="password" placeholder="Password" >
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Profile Picture</label>
            <input type="file" name="image" value="{{ $editData->image }}" class="form-control @error('image') is-invalid @enderror" id="image">
            @error('image')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" value="{{ $editData->phone_number }}" class="form-control" id="phone_number" placeholder="Phone Number" >
        </div>
        <div class="mb-3">
            <label for="job_id " class="form-label">Job Title</label>
            <select class="form-control" name="job_id" id="job_id" >
                <option value="">Select Job Title</option>
                @foreach ($jobTitles as $jobTitle)
                <option {{ ($jobTitle->id == $editData->job_id) ? 'selected' : '' }} value="{{ $jobTitle->id }}">{{ $jobTitle->job_title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="hire_date " class="form-label">Hire Date</label>
            <input type="date" name="hire_date" value="{{ $editData->hire_date }}" class="form-control" id="hire_date" placeholder="Date" >
        </div>
        <div class="mb-3">
            <label for="salary " class="form-label">Salary</label>
            <input type="text" name="salary" value="{{ $editData->salary }}" class="form-control" id="salary" placeholder="Salary" >
        </div>
        <div class="mb-3">
            <label for="commision_pct" class="form-label">Commision PCT</label>
            <input type="text" name="commision_pct" value="{{ $editData->commision_pct }}" class="form-control" id="commision_pct" placeholder="Commision PCT" >
        </div>
        <div class="mb-3">
            <label for="interview" class="form-label">Interview</label>
            <select class="form-control @error('interview') is-invalid @enderror" name="interview" id="interview" >
                <option value="">Select interview</option>
                <option {{ $editData->interview == '0' ? 'selected' : '' }} value="0">Cancel</option>
                <option {{ $editData->interview == '1' ? 'selected' : '' }} value="1">Pending</option>
                <option {{ $editData->interview == '2' ? 'selected' : '' }} value="2">Done</option>
            </select>
            @error('manager_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>
        <div class="mb-3">
            <label for="manager_id " class="form-label">Manager Name</label>
            <select class="form-control" name="manager_id" id="manager_id" >
                <option value="">Select Manager Name</option>
               @foreach ($getManagers as $getManager)
               <option {{ ($getManager->id == $editData->manager_id) ? 'selected' : '' }} value="{{ $getManager->id }}">{{ $getManager->manager_name }}</option>
               @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="department_id " class="form-label">Department Name</label>
            <select class="form-control" name="department_id" id="department_id" >
                <option value="">Select Department Name</option>
               @foreach ($getDeparts as $getDepart )
               <option {{ ($getDepart->id == $editData->department_id) ? 'selected' : '' }} value="{{ $getDepart->id }}">{{ $getDepart->department_name }}</option>
               @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="position_id " class="form-label">Position Name</label>
            <select class="form-control @error('position_id') is-invalid @enderror" name="position_id" id="department_id" >
                <option value="">Select Position Name</option>
                @foreach ($positions as $position)
                <option {{ $position->id == $editData->position_id ? 'selected' : '' }} value="{{$position->id}}"> {{$position->position_name}} </option>
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
        <button type="submit" class="btn btn-primary me-2">Update</button>
        <a href="{{ route('all.employee') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>



@endsection
