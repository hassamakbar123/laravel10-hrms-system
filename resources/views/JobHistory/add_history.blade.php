@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Jobs</h4>
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

    <form class="forms-sample" action="{{ route('store.history') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="employee_id" class="form-label">Employee Name</label>
            <select class="form-control" name="employee_id" id="employee_id">
                <option value="employee_id">Select Employee Name</option>
                @foreach ($getEmployees as $getEmployee )
                <option value="{{$getEmployee->id }}"> {{$getEmployee->first_name}} {{$getEmployee->last_name}} </option>
                @endforeach
            </select>
            @error('employee_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control  @error('start_date') is-invalid @enderror" id="start_date" placeholder="Start Date">
            @error('start_date')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" class="form-control  @error('end_date') is-invalid @enderror" id="end_date" placeholder="End Date">
            @error('end_date')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="job_id" class="form-label">Job ID</label>
            <select class="form-control" name="job_id" id="job_id">
                <option value="employee_id">Select Job</option>
                @foreach ($getJobNames as $getJobName )
                <option value="{{$getJobName->id }}">{{$getJobName->job_title}}</option>
                @endforeach
            </select>
            @error('job_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="department_id" class="form-label">Department Name</label>
            <select class="form-control @error('department_id') is-invalid @enderror" name="department_id" id="department_id">
                <option value="">Select Department Name</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                @endforeach
            </select>

            @error('department_id')
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
        <a href="{{ route('all.history') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>



@endsection

