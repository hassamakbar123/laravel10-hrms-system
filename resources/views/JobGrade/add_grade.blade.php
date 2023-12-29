@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add Grades</h4>
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

    <form class="forms-sample" action="{{ route('store.grade') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="grade_level" class="form-label">Grade Level</label>
            <input type="text" name="grade_level" class="form-control @error('grade_level') is-invalid @enderror" id="grade_level" placeholder="Grade Level" >
            @error('grade_level')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="lowest_sale" class="form-label">Lowest Sale</label>
            <input type="number" name="lowest_sale" class="form-control @error('lowest_sale') is-invalid @enderror" id="lowest_sale" placeholder="Lowest Sale">
            @error('lowest_sale')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="highest_sale" class="form-label">Highest Sale</label>
            <input type="number" name="highest_sale" class="form-control @error('highest_sale') is-invalid @enderror" id="highest_sale" placeholder="Highest Sale" >
            @error('highest_sale')
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
