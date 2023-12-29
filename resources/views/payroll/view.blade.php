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
</style>
@endsection
@section('content')

<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">View PayRoll</h4>
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
            <h6 class="card-title">PayRoll Information</h6>
            <div class="table-responsive">
                <div class="user-info">

                    {{-- <p><strong>ID:</strong> {{ $user->id }}</p> --}}
                    <p><strong>Employee Name:</strong> {{ $employeeData->first_name }} {{ $employeeData->last_name }}</p>
                    <p><strong>Number of Day Work:</strong> {{ $getData->number_of_day_work }}</p>
                    <p><strong>Bonus:</strong> {{ $getData->bonus }}</p>
                    <p><strong>Overtime:</strong> {{ $getData->overtime }}</p>
                    <p><strong>Gross Salary:</strong> {{ $getData->gross_salary }}</p>
                    <p><strong>Cash Advance:</strong> {{ $getData->cash_advance }}</p>
                    <p><strong>Late Hours:</strong> {{ $getData->late_hours }}</p>
                    <p><strong>Abscent Day:</strong> {{ $getData->abscent_days }}</p>
                    <p><strong>Phil Health:</strong> {{ $getData->phill_health }}</p>
                    <p><strong>Total Deduction :</strong> {{ $getData->total_deduction }}</p>
                    <p><strong>NetPay :</strong> {{ $getData->net_pay }}</p>
                    <p><strong>Payroll Monthly :</strong> {{ $getData->payroll_monthly }}</p>
                    <a class="btn-sm btn btn-outline-primary" href="{{ route('all.payroll') }}">Back</a>
                </div>
            </div>
          </div>
        </div>

@endsection

