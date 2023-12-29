<?php

namespace App\Http\Controllers;

use App\Models\JobGrade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function AllGrade (){
        $grades = JobGrade::get();
        return view('JobGrade.all_grade',compact('grades'));
    } //  End Method ....


    public function AddGrade (){
        return view('JobGrade.add_grade');
    } // End METHOD ......


    public function StoreGrade (Request $request)
    {
        $request->validate([
            'grade_level'=>'required',
            'lowest_sale'=>'required',
            'highest_sale'=>'required'
        ]);
        JobGrade::insert([
            'grade_level'=>$request->grade_level,
            'lowest_sale'=>$request->lowest_sale,
            'highest_sale'=>$request->highest_sale
        ]);
        $notification=array(
            'message'=>'Job Grade Inserted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.grade')->with($notification);
    }  // END METHOD .......


    public function EditGrade ($id){
        $editGrades = JobGrade::findOrFail($id);
        return view('JobGrade.edit_grade', compact('editGrades'));
    }  // End Method.....


    public function UpdateGrade (Request $request){
        $id = $request->id;
        JobGrade::findOrFail($id)->update([
            'grade_level'=>$request->grade_level,
            'lowest_sale'=>$request->lowest_sale,
            'highest_sale'=>$request->highest_sale
        ]);
        $notification=array(
            'message'=>'Job Grade Updated Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.grade')->with($notification);
    } // END METHOD ........


    public function DeleteGrade ($id){
        JobGrade::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Job History Deleted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.grade')->with($notification);
    }

}
