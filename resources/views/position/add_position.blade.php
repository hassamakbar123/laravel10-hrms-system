@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Manager</h4>
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

    <form class="forms-sample" action="{{ route('store.position') }}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="mb-3">
            <label for="position_name" class="form-label">Position Name</label>
            <input type="text" name="position_name" class="form-control @error('position_name') is-invalid @enderror" id="position_name" placeholder="Enter Position Name" >
            @error('position_name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
           @enderror
        </div>

        <div class="mb-3">
            <label for="daily_rate" class="form-label">Daily Rate</label>
            <input type="text" name="daily_rate" class="form-control @error('daily_rate') is-invalid @enderror" id="daily_rate" placeholder="Enter Daily Rate" >
            @error('daily_rate')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
           @enderror
        </div>

        <div class="mb-3">
            <label for="monthly_rate" class="form-label">Monthly Rate</label>
            <input type="text" name="monthly_rate" class="form-control @error('monthly_rate') is-invalid @enderror" id="monthly_rate" placeholder="Enter Monthly Rate" >
            @error('monthly_rate')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
           @enderror
        </div>

        <div class="mb-3">
            <label for="working_days_per_month" class="form-label">Working Days Per Month</label>
            <input type="text" name="working_days_per_month" class="form-control @error('working_days_per_month') is-invalid @enderror" id="working_days_per_month" placeholder="Enter Working Days Per Month" >
            @error('manager_working_days_per_monthmobile')
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
        <a href="{{ route('all.position') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>



@endsection
