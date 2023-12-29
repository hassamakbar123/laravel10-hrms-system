<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
   public function AllManager (){
    $managers = Manager::get();
    return view('manager.all_manager',compact('managers'));
   } // END METHOD..........


   public function AddManager (){
    return view('manager.add_manager');
   } // END METHOD..........


   public function StoreManager (Request $request){
        $request->validate([
            'manager_name'=>'required|unique:managers',
            'manager_email'=>'required',
            'manager_mobile'=>'required'
        ]);
        Manager::insert([
            'manager_name'=>$request->manager_name,
            'manager_email'=>$request->manager_email,
            'manager_mobile'=>$request->manager_mobile
        ]);
        $notification=array(
            'message'=>'Manager Inserted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.manager')->with($notification);
   }  //  END METHOD .......



   public function EditManager ($id){
    $getManagers = Manager::find($id);
    return view('manager.edit_manager',compact('getManagers'));
   }  // END METHOD .......


   public function UpdateManager (Request $request){
    $id = $request->id;
    Manager::findOrFail($id)->update([
        'manager_name'=>$request->manager_name,
        'manager_email'=>$request->manager_email,
        'manager_mobile'=>$request->manager_mobile
    ]);
    $notification=array(
        'message'=>'Manager Updated Successfully!',
        'alert-type'=>'success'
        );
        return Redirect()->route('all.manager')->with($notification);
   }  //  END METHOD.........


   public function DeleteManager ($id){
    Manager::find($id)->delete();
    $notification=array(
        'message'=>'Manager Deleted Successfully!',
        'alert-type'=>'success'
        );
        return Redirect()->route('all.manager')->with($notification);
   }
}
