@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Department</h4>
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

    <form class="forms-sample" action="{{ route('update.department',$editDepartment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="mb-3">
            <label for="city" class="form-label">Department Name</label>
            <input type="text" name="department_name" value="{{ $editDepartment->department_name }}" class="form-control @error('department_name') is-invalid @enderror" id="department_name" placeholder="Enter Department Name" >
            @error('department_name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>



        <div class="mb-3">
            <label for="manager_id" class="form-label">Manager Name (ID)</label>
            <select class="form-control @error('manager_id') is-invalid @enderror" name="manager_id" id="manager_id">
                @foreach ($managers as $manager)
                    <option value="{{ $manager->id }}" {{ ($manager->id == $editDepartment->manager_id) ? 'selected' : '' }}>
                        {{ $manager->manager_name }}
                    </option>
                @endforeach
            </select>

            @error('manager_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location_id" class="form-label">Location Name (ID)</label>
            <select class="form-control @error('location_id') is-invalid @enderror" name="location_id" id="manager_id">
                <option value="">Select Location Name</option>
                @foreach ($getLocations as $getLocation)
                    <option value="{{ $getLocation->id }}" {{ $getLocation->id == $editDepartment->location_id ? 'selected' : '' }}>
                        {{ $getLocation->street_address }}
                    </option>
                @endforeach
            </select>

            @error('location_id')
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
        <button type="submit" class="btn btn-primary me-2">Updated</button>
        <a href="{{ route('all.department') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>



@endsection
