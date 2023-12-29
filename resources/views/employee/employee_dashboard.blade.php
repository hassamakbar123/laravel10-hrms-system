@extends('layouts.app')
@section('content')
@section('style')

<style>
    /* CSS for the profile images in the table */
.table img {
    width: 50px; /* Adjust the width as needed */
    height: 50px; /* Adjust the height as needed */
    border-radius: 50%;
    object-fit: cover;
}

.table img:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

</style>
@endsection
<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Employee Dashboard</h4>
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
        <a href="{{ route('add.employee') }}" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
            Add Employee
        </a>
    </div>
<div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Employees List</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Role ID</th>
            <th>Interview</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
          <tr>
            <td>{{$employee->id}}</td>
            <td>{{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->email }}</td>
           <td>@if ($employee->image)
            <img src="{{ asset('storage/' . $employee->image) }}" alt="Profile Picture">
               @endif
           </td>
            <td>{{ !empty($employee->is_role) ? 'HR' : 'Employee' }}</td>
            <td>
                @if ($employee->interview == '0')
                Cancel
                @elseif ($employee->interview == '1')
                Pending
                @elseif ($employee->interview == '2')
                Done
                @endif
            </td>
            <td>
                <a class="btn-sm btn btn-outline-light" href="{{ route('single.user',['id' => $employee->id]) }}">View</a>
                <a class="btn-sm btn btn-outline-primary" href="{{ route('edit.employee',$employee->id) }}">Edit</a>
                <a class="btn-sm btn btn-outline-danger" href="{{ route('delete.employee',$employee->id) }}">Delete</a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $employees->links('pagination::bootstrap-5') }}
  </div>
</div>
        </div>
    </div>

@endsection


