<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function AllPosition (){
        $positions = Position::get();
        return view('position.all_position',compact('positions'));
    } // End Method.......


    public function AddPosition (){
        return view('position.add_position');
    } //  End Method......


    public function StorePosition (Request $request){
        $request->validate([
            'position_name'=>'required',
            'daily_rate'=>'required',
            'monthly_rate'=>'required',
            'working_days_per_month'=>'required'
        ]);
        Position::insert([
            'position_name'=>$request->position_name,
            'daily_rate'=>$request->daily_rate,
            'monthly_rate'=>$request->monthly_rate,
            'working_days_per_month'=>$request->working_days_per_month
        ]);
        $notification=array(
            'message'=>'Position Inserted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.position')->with($notification);
    } // End Method........



    public function EditPosition ($id){
        $position = Position::findOrFail($id);
        return view('position.edit_position', compact('position'));
    } // End Method.....




    public function UpdatePosition (Request $request){
        $id = $request->id;
        Position::findOrFail($id)->update([
            'position_name'=>$request->position_name,
            'daily_rate'=>$request->daily_rate,
            'monthly_rate'=>$request->monthly_rate,
            'working_days_per_month'=>$request->working_days_per_month
        ]);
        $notification=array(
            'message'=>'Position Updated Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.position')->with($notification);
    } // End Method....



    public function DeletePosition ($id){
        Position::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Position Deleted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.position')->with($notification);
    } //  End Method....
}
