@extends('layouts.app')
@section('content')

<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Jobs Dashboard</h4>
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
    <div class="container-fluid mb-3">
        <a href="{{ route('add.jobs') }}" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
            Add Job
        </a>
    </div>
<div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Jobs List</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Job Title</th>
            <th>Min Slary</th>
            <th>Max Slary</th>
            <th>Hire Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
          <tr>
            <td>{{ $job->id }}</td>
            <td>{{ $job->job_title }}</td>
            <td>{{ $job->min_salary }}</td>
            <td>{{ $job->max_salary }}</td>
            <td>{{ date("d-m-Y H:i A",strtotime($job->created_at)) }}</td>
            <td>
                <a id="edit" class="btn-sm btn btn-outline-primary" href="{{ route('edit.jobs',$job->id) }}">Edit</a>
                <a id="delete" class="btn-sm btn btn-outline-danger" href="{{ route('delete.jobs',$job->id) }}">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

@endsection


