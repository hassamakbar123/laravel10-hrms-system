@extends('layouts.app')
@section('content')

<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
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


    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $emplCount ? $emplCount : '0' }}</h3>

              <p>Employee</p>
            </div>
            <div class="icon">
                <i class="big-icon" data-feather="users"></i>
            </div>
            <a href="{{ route('all.employee') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $HRcount ? $HRcount : '0' }}</h3>

              <p>HR</p>
            </div>
            <div class="icon">
                <i class="big-icon" data-feather="user"></i>
            </div>
            <a href="{{ route('all.employee') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $Manager ? $Manager : '' }}</h3>

                <p>Manager</p>
              </div>
              <div class="icon">
                  <i class="big-icon" data-feather="users"></i>
              </div>
              <a href="{{ route('all.manager') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3>{{ $Department ? $Department : '0' }}</h3>

                <p>Department</p>
              </div>
              <div class="icon">
                  <i class="big-icon" data-feather="home"></i>
              </div>
              <a href="{{ route('all.department') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $position ? $position : '0' }}</h3>

                <p>Position</p>
              </div>
              <div class="icon">
                  <i class="big-icon" data-feather="users"></i>
              </div>
              <a href="{{ route('all.position') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $allJob ? $allJob : '0' }}</h3>

              <p>All Jobs</p>
            </div>
            <div class="icon">
                <i class="link-icon" data-feather="briefcase"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $Region ? $Region : '0' }}</h3>

                <p>Region</p>
              </div>
              <div class="icon">
                <i class="link-icon" data-feather="aperture"></i>
            </div>
              <a href="{{ route('all.region') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $todayRegion ? $todayRegion : '0' }}</h3>

                <p>Today Region</p>
              </div>
              <div class="icon">
                <i class="link-icon" data-feather="aperture"></i>
            </div>
              <a href="{{ route('all.region') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $country ? $country : '0' }}</h3>

                <p>Countries</p>
              </div>
              <div class="icon">
                <i class="link-icon" data-feather="flag"></i>
            </div>
              <a href="{{ route('all.country') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>{{ $location ? $location : '' }}</h3>

                <p>Location</p>
              </div>
              <div class="icon">
                <i class="link-icon" data-feather="navigation"></i>
            </div>
              <a href="{{ route('all.location') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $payroll ? $payroll : '0' }}</h3>

                <p>Payroll</p>
              </div>
              <div class="icon">
                <i class="link-icon" data-feather="credit-card"></i>
            </div>
              <a href="{{ route('all.payroll') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $JobHistory ? $JobHistory : '0' }}</h3>

              <p>Job History</p>
            </div>
            <div class="icon">
                <i class="link-icon" data-feather="book-open"></i>
            </div>
            <a href="{{ route('all.history') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>








@endsection


