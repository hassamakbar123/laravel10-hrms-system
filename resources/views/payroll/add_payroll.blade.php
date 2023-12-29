@extends('layouts.app')
@section('content')


<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Add PayRoll</h4>
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

    <form class="forms-sample" action="{{ route('store.payroll') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="employee_id " class="form-label">Employee Name</label>
            <select class="form-control @error('employee_id') is-invalid @enderror" name="employee_id" id="department_id" >
                <option value="">Select Employee Name</option>
                @foreach ($getEmployees as $getEmployee )
                <option value="{{ $getEmployee->id }}">{{ $getEmployee->first_name }} {{ $getEmployee->last_name }}</option>
                @endforeach
            </select>
            @error('employee_id')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>


        <div class="mb-3">
            <label for="number_of_day_work" class="form-label">Number of Day Work</label>
            <input type="number" name="number_of_day_work" class="form-control @error('number_of_day_work') is-invalid @enderror" id="commision_pct" placeholder="Enter Number of Day Work" >
            @error('number_of_day_work')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>

        <div class="mb-3">
            <label for="bonus" class="form-label">Bonus</label>
            <input type="number" name="bonus" class="form-control @error('bonus') is-invalid @enderror" id="bonus" placeholder="Enter Bonus" >
            @error('bonus')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>


        <div class="mb-3">
            <label for="overtime" class="form-label">Overtime</label>
            <input type="number" name="overtime" class="form-control @error('overtime') is-invalid @enderror" id="overtime" placeholder="Enter Overtime" >
            @error('overtime')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>

        <div class="mb-3">
            <label for="gross_salary" class="form-label">Gross Salary</label>
            <input type="number" name="gross_salary" class="form-control @error('gross_salary') is-invalid @enderror" id="gross_salary" placeholder="Enter Gross Salary" >
            @error('gross_salary')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>


        <div class="mb-3">
            <label for="cash_advance" class="form-label">Cash Advance</label>
            <input type="number" name="cash_advance" class="form-control @error('cash_advance') is-invalid @enderror" id="cash_advance" placeholder="Enter Cash Advance" >
            @error('gross_salary')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>

        <div class="mb-3">
            <label for="late_hours" class="form-label">Late Hours</label>
            <input type="number" name="late_hours" class="form-control @error('late_hours') is-invalid @enderror" id="late_hours" placeholder="Enter Late Hours" >
            @error('late_hours')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>

        <div class="mb-3">
            <label for="abscent_days" class="form-label">Abscent Days</label>
            <input type="number" name="abscent_days" class="form-control @error('abscent_days') is-invalid @enderror" id="abscent_days" placeholder="Enter Abscent Days" >
            @error('abscent_days')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>

        <div class="mb-3">
            <label for="ss_contribution" class="form-label">SS Contribution</label>
            <input type="text" name="ss_contribution" class="form-control @error('ss_contribution') is-invalid @enderror" id="ss_contribution" placeholder="Enter SS Contribution" >
            @error('ss_contribution')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>


        <div class="mb-3">
            <label for="phill_health" class="form-label">Phil Health</label>
            <input type="text" name="phill_health" class="form-control @error('phill_health') is-invalid @enderror" id="phill_health" placeholder="Enter Phil Health" >
            @error('phill_health')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>

        <div class="mb-3">
            <label for="total_deduction" class="form-label">Total Deduction</label>
            <input type="text" name="total_deduction" class="form-control @error('total_deduction') is-invalid @enderror" id="total_deduction" placeholder="Enter Total Deduction" >
            @error('total_deduction')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>


        <div class="mb-3">
            <label for="net_pay" class="form-label">NetPay</label>
            <input type="text" name="net_pay" class="form-control @error('net_pay') is-invalid @enderror" id="net_pay" placeholder="Enter NetPay" >
            @error('net_pay')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
             @enderror
        </div>


        <div class="mb-3">
            <label for="payroll_monthly" class="form-label">Payroll Monthly</label>
            <input type="text" name="payroll_monthly" class="form-control @error('payroll_monthly') is-invalid @enderror" id="payroll_monthly" placeholder="Enter Payroll Monthly" >
            @error('payroll_monthly')
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
          <a href="{{ route('all.payroll') }}" class="btn btn-secondary">Cancel</a>
      </form>

  </div>



  @endsection
