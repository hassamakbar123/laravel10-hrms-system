@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Update Manager</h4>
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

    <form class="forms-sample" action="{{ route('update.manager',$getManagers->id) }}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="mb-3">
            <label for="manager_name" class="form-label">Manager Name</label>
            <input type="text" name="manager_name" value="{{ $getManagers->manager_name }}" class="form-control @error('manager_name') is-invalid @enderror" id="manager_name" placeholder="Enter Manager Name" >
            @error('manager_name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
           @enderror
        </div>

        <div class="mb-3">
            <label for="manager_email" class="form-label">Manager Email</label>
            <input type="text" name="manager_email" value="{{ $getManagers->manager_email }}" class="form-control @error('manager_email') is-invalid @enderror" id="manager_email" placeholder="Enter Manager Email" >
            @error('manager_email')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
           @enderror
        </div>

        <div class="mb-3">
            <label for="manager_mobile" class="form-label">Manager Phone</label>
            <input type="number" name="manager_mobile"value="{{ $getManagers->manager_mobile }}" class="form-control @error('manager_mobile') is-invalid @enderror" id="manager_mobile" placeholder="Enter Manager Phone" >
            @error('manager_mobile')
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
        <a href="{{ route('all.manager') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>



@endsection
