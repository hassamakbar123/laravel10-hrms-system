<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Location;
use App\Models\Manager;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function AllDepartment (){
        $getStreets = Location::select('locations.street_address', "managers.*",'departments.*',"departments.id as depart_id")
                    ->join('departments', 'locations.id', '=', 'departments.location_id')
                    ->join("managers","managers.id","=","departments.manager_id")
                    ->orderBy("departments.id","ASC")
                    ->get();
            $manager= Manager::all();
// dd($getStreets);
        // $getDepartments = Department::get();
        return view('department.all_department',compact('getStreets',"manager"));
    } // END METHOD.......



    public function AddDepartment (){
        $getLocations= Location::get();
        $manager= Manager::all();
        return view('department.add_department',compact('getLocations',"manager"));
    }  // END METHOD..........



    public function StoreDepartment (Request $request){
        $request->validate([
            'department_name'=>'required',
            'manager_id'=>'required',
            'location_id'=>'required'
        ]);
        Department::insert([
            'department_name'=>$request->department_name,
            'manager_id'=>$request->manager_id,
            'location_id'=>$request->location_id
        ]);
        $notification=array(
            'message'=>'Department Inserted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.department')->with($notification);
    }  // END METHOD.......


    public function EditDepartment($id)
{
    $editDepartment = Department::findOrFail($id);
    $getLocations = Location::get();
    $managers = Manager::all();

    return view('department.edit_department', compact('editDepartment', 'getLocations', 'managers'));
}
  // END METHOD..........


    public function UpdateDepartment (Request $request){
        $id = $request->id;
        Department::findOrFail($id)->update([
            'department_name'=>$request->department_name,
            'manager_id'=>$request->manager_id,
            'location_id'=>$request->location_id
        ]);
        $notification=array(
            'message'=>'Department Updated Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.department')->with($notification);
    }  // END METHOD.......



    public function DeleteDepartment ($id){
        Department::find($id)->delete();
        $notification=array(
            'message'=>'Department Deleted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.department')->with($notification);
    }
}
