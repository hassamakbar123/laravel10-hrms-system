@extends('layouts.app')
@section('content')
@section('style')
<style>
    .table {
        text-align: center
    }
</style>
@endsection
<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">All PayRoll</h4>
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
        <a href="{{ route('add.payroll') }}" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
            Add PayRoll
        </a>
    </div>
<div class="ok col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">PayRoll List</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Number of Day Work</th>
            <th>Bonus</th>
            <th>Overtime</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($getEmploys as $getEmploy)
          <tr>
            <td>{{ $getEmploy->id }}</td>
            <td>{{ $getEmploy->first_name }} {{ $getEmploy->last_name }}</td>
            <td>{{ $getEmploy->number_of_day_work }}</td>
            <td>{{ $getEmploy->bonus }}</td>
            <td>{{ $getEmploy->overtime }}</td>
            <td>
                <a class="btn-sm btn btn-outline-light" href="{{ route('view.payroll',$getEmploy->id) }}">View</a>
                <a id="edit" class="btn-sm btn btn-outline-primary" href="{{ route('edit.payroll',$getEmploy->id) }}">Edit</a>
                <a id="delete" class="btn-sm btn btn-outline-danger" href="{{ route('delete.payroll',$getEmploy->id) }}">Delete</a>
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


