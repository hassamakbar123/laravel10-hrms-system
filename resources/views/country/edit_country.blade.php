@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Country</h4>
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

    <form class="forms-sample" action="{{ route('update.country',$editCountry->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="country_name" class="form-label">Counrty Name</label>
            <input type="text" value="{{ $editCountry->country_name }}" name="country_name" class="form-control @error('country_name') is-invalid @enderror" id="grade_level" placeholder="Enter Country Name" >
            @error('country_name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="region_name" class="form-label">Region Name</label>
            <select class="form-control @error('region_name') is-invalid @enderror" name="region_name" id="region_name">
              <option value="">Select Region Name</option>
              @foreach ($getRegions as $getRegion )
              <option {{ $getRegion->id == $editCountry->region_name ? 'selected' : '' }} value="{{$getRegion->id}}"> {{$getRegion->region_name}}</option>
              @endforeach
            </select>
            @error('region_name')
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
        <a href="{{ route('all.country') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>



@endsection
