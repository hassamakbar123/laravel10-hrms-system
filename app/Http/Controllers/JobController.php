<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    // -----  All Jobs ------/
    public function AllJobs (){
        $jobs = Job::get();
        return view('jobs.all_job',compact('jobs'));
    } // End Method....



    // -----  Add Jobs ------/
    public function AddJobs (){
        return view('jobs.add_job');
    } // End Method....



     // -----  Store Jobs ------/
     public function StoreJobs (Request $request){
        $request->validate([
            'job_title'=>'required',
            'min_salary'=>'required',
            'max_salary'=>'required',
        ]);
        Job::insert([
            'job_title'=>$request->job_title,
            'min_salary'=>$request->min_salary,
            'max_salary'=>$request->max_salary,
        ]);
        $notification=array(
            'message'=>'Job Inserted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.jobs')->with($notification);
    } // End Method....




    // -----  Edit Jobs ------/

    public function EditJobs ($id){
        $jobs = Job::findOrFail($id);
        return view('jobs.edit_job',compact('jobs'));
    } // End Method....



    // -----  Update Jobs ------/
    public function UpdateJobs (Request $request){
        $id=$request->id;
        Job::findOrFail($id)->update([
            'job_title'=>$request->job_title,
            'min_salary'=>$request->min_salary,
            'max_salary'=>$request->max_salary
        ]);
        $notification=array(
            'message'=>'Job Updated Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.jobs')->with($notification);
    } // End Method.......



     // -----  Delete Jobs ------/

     public function DeleteJobs ($id){
        Job::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Job Deleted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.jobs')->with($notification);
     }
}
