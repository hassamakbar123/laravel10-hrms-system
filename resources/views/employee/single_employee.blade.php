@extends('layouts.app')
@section('style')
<style>
    .user-info {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .user-info p {
        margin: 10px 0;
    }

    strong {
        color: #3498db;
    }
    .card {
    max-width: 150px;
}

</style>
@endsection
@section('content')

<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Single Employee </h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
      </div>
    </div>


    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Employee Information</h6>
            <div class="table-responsive">
                <div class="user-info">

                    {{-- <p><strong>ID:</strong> {{ $user->id }}</p> --}}
                    <p><strong>First Name:</strong> {{ $getManagerName->first_name }}</p>
                    <p><strong>Last Name:</strong> {{ $getManagerName->last_name }}</p>
                    <p><strong>Email:</strong> {{ $getManagerName->email }}</p>
                    <p><strong>Image:</strong>
                        @if ($getManagerName->image)
                        <div class="card">
                            <img src="{{ asset('storage/' . $getManagerName->image) }}" alt="Profile Picture" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $getManagerName->first_name }} {{ $getManagerName->last_name }}</h5>
                            </div>
                        </div>
                         @endif
                        </p>
                    <p><strong>Role:</strong> {{ !empty($getManagerName->is_role) ? 'HR' : 'Employee' }}</p>
                    <p><strong>Phone Number:</strong> {{ $getManagerName->phone_number }}</p>
                    <p><strong>Hiring Date:</strong> {{ date('F j, Y', strtotime($getManagerName->hire_date)) }}</p>
                    <p><strong>Job Title:</strong> {{ $getManagerName->job_title }}</p>
                    <p><strong>Salary:</strong> {{ $getManagerName->salary }}</p>
                    <p><strong>Interview:</strong>
                        @if ($getManagerName->interview == '0')
                        Cancel
                        @elseif ($getManagerName->interview == '1')
                        Pending
                        @elseif ($getManagerName->interview == '2')
                        Done
                        @endif </p>
                    <p><strong>Commission PCT:</strong> {{ $getManagerName->commision_pct }}</p>
                    <p><strong>Manager Name:</strong> {{ $getManagerName->manager_name }}</p>
                    <p><strong>Department Name:</strong> {{ $getManagerName->department_name }}</p>
                    <p><strong>Position Name:</strong> {{ $getManagerName->position_name }}</p>
                    <a class="btn-sm btn btn-outline-primary" href="{{ route('all.employee') }}">Back</a>
                </div>
            </div>
          </div>
        </div>

@endsection

