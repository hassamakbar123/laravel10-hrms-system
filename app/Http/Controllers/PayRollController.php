<?php

namespace App\Http\Controllers;

use App\Models\PayRoll;
use App\Models\User;
use Illuminate\Http\Request;

class PayRollController extends Controller
{
    public function AllPayroll (){

        $getEmploys = User::join('pay_rolls', 'users.id', '=', 'pay_rolls.employee_id')
                            ->select('users.first_name','users.last_name', 'pay_rolls.*')
                            ->get();
        return view('payroll.all_payroll',compact('getEmploys'));
    }  // End Method....


    public function AddPayroll (){
        $getEmployees = User::where('is_role','=', 0)->get();
        return view('payroll.add_payroll',compact('getEmployees'));
    }  // End Method....



    public function StorePayroll (Request $request){
        $request->validate([
            'employee_id'=>'required',
            'bonus'=>'required',
            'ss_contribution'=>'required',
        ]);
        PayRoll::insert([
            'employee_id'=>$request->employee_id,
            'number_of_day_work'=>$request->number_of_day_work,
            'bonus'=>$request->bonus,
            'overtime'=>$request->overtime,
            'gross_salary'=>$request->gross_salary,
            'cash_advance'=>$request->cash_advance,
            'late_hours'=>$request->late_hours,
            'abscent_days'=>$request->abscent_days,
            'ss_contribution'=>$request->ss_contribution,
            'phill_health'=>$request->phill_health,
            'total_deduction'=>$request->total_deduction,
            'net_pay'=>$request->net_pay,
            'payroll_monthly'=>$request->payroll_monthly,
        ]);
        $notification=array(
            'message'=>'Payroll Inserted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.payroll')->with($notification);
    }  // End Method....



    public function ViewPayroll($id){

    $viewEmployee = User::findOrFail($id);
    $getData = PayRoll::findOrFail($id);
    $employeeData = $getData->employee;
        return view('payroll.view',compact('getData','viewEmployee','employeeData'));
    } // End Method....



    public function EditPayroll ($id){
        $editData = PayRoll::findOrFail($id);
        $employees = User::where('is_role','=', 0) -> get();
        return view('payroll.edit_payroll',compact('editData','employees'));
    } //  End Method......



    public function UpdatePayroll(Request $request){
        // dd($request->all());
        $id = $request->id;
        PayRoll::findOrFail($id)->update([
            'employee_id'=>$request->employee_id,
            'number_of_day_work'=>$request->number_of_day_work,
            'bonus'=>$request->bonus,
            'overtime'=>$request->overtime,
            'gross_salary'=>$request->gross_salary,
            'cash_advance'=>$request->cash_advance,
            'late_hours'=>$request->late_hours,
            'abscent_days'=>$request->abscent_days,
            'ss_contribution'=>$request->ss_contribution,
            'phill_health'=>$request->phill_health,
            'total_deduction'=>$request->total_deduction,
            'net_pay'=>$request->net_pay,
            'payroll_monthly'=>$request->payroll_monthly,
        ]);
        $notification=array(
            'message'=>'Payroll Updated Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.payroll')->with($notification);
    }  // End Method......



    public function DeletePayroll ($id){
        PayRoll::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Payroll Deleted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.payroll')->with($notification);
    }
}
