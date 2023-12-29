@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Location</h4>
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

    <form class="forms-sample" action="{{ route('store.location') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="street_address" class="form-label">Street Address</label>
            <input type="text" name="street_address" class="form-control @error('street_address') is-invalid @enderror" id="street_address" placeholder="Enter Street Address" >
            @error('street_address')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>


        <div class="mb-3">
            <label for="postal_code" class="form-label">Postal Code</label>
            <input type="text" name="postal_code" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" placeholder="Enter Postal Code" >
            @error('postal_code')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>


        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="city" placeholder="Enter City" >
            @error('city')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="state_provice" class="form-label">State Provice</label>
            <input type="text" name="state_provice" class="form-control @error('state_provice') is-invalid @enderror" id="state_provice" placeholder="Enter State Provice" >
            @error('state_provice')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>



        <div class="mb-3">
            <label for="countries_id" class="form-label">Country Name</label>
            <select class="form-control @error('state_provice') is-invalid @enderror" name="countries_id" id="countries_id">
              <option value="">Select Country Name</option>
              @foreach ($getCountries as $getCountry )
              <option value="{{$getCountry->id}}"> {{$getCountry->country_name}}</option>
              @endforeach
            </select>
            @error('countries_id')
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
