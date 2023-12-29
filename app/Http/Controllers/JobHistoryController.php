<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Job;
use App\Models\JobHistory;
use App\Models\User;
use Illuminate\Http\Request;

class JobHistoryController extends Controller
{
    public function AllJobHistory(){
        $allHistories = JobHistory::join('users', 'job_histories.employee_id', '=', 'users.id')
            ->join('jobs', 'job_histories.job_id', '=', 'jobs.id')
            ->join('departments','job_histories.department_id', '=','departments.id')
            ->select('job_histories.*', 'users.first_name', 'users.last_name', 'jobs.job_title', 'departments.department_name')
            ->get();

        return view('JobHistory.all_history', compact('allHistories'));
    }



   //-------------  ///  -----------//

   public function AddJobHistory (){
    $getEmployees = User::where('is_role', '=', 0)->get();
    $getJobNames = Job::get();
    $departments = Department::all();
    return view('JobHistory.add_history',compact('getEmployees','getJobNames','departments'));
   }
   ///  ---- End Method

   public function StoreJobHistory (Request $request){
    $request->validate([
        'employee_id'=>'required',
        'start_date'=>'required',
        'end_date'=>'required',
        'job_id'=>'required',
        'department_id'=>'required',
    ]);
    JobHistory::insert([
        'employee_id'=>$request->employee_id,
        'start_date'=>$request->start_date,
        'end_date'=>$request->end_date,
        'job_id'=>$request->job_id,
        'department_id'=>$request->department_id,
    ]);
    $notification=array(
        'message'=>'Job Inserted Successfully!',
        'alert-type'=>'success'
        );
        return Redirect()->route('all.history')->with($notification);
   }   // End METHOD ----------//


   public function EditJobHistory($id)
{
    $getEmployees = User::where('is_role', '=', 0)->get();
    $getJobNames = Job::get();
    $editHistory = JobHistory::findOrFail($id);
    $departments = Department::all();
    return view('JobHistory.edit_history', compact('editHistory', 'getEmployees', 'getJobNames','departments'));
}  // END METHOD ..............


   public function UpdateJobHistory (Request $request){
    $id=$request->id;
    JobHistory::FindOrFail($id)->update([
        'employee_id'=>$request->employee_id,
        'start_date'=>$request->start_date,
        'end_date'=>$request->end_date,
        'job_id'=>$request->job_id,
        'department_id'=>$request->department_id,
    ]);
    $notification=array(
        'message'=>'Job History Inserted Successfully!',
        'alert-type'=>'success'
        );
        return Redirect()->route('all.history')->with($notification);
   } //  -- End METHOD ---->


   public function DeleteJobHistory ($id){
    JobHistory::findOrFail($id)->delete();
    $notification=array(
        'message'=>'Job History Deleted Successfully!',
        'alert-type'=>'success'
        );
        return Redirect()->route('all.history')->with($notification);
   }
}
