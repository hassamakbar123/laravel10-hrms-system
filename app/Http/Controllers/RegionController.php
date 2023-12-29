<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function AllRegion (){
        $allRegions = Region::get();
        return view('region.all_region',compact('allRegions'));
    }  // END REGION ......


    public function AddRegion (){
        return view('region.add_region');
    }  //  End Method...


    public function StoreRegion (Request $request)
    {
        $request->validate([
            'region_name'=>'required',
        ]);
        Region::insert([
            'region_name'=>$request->region_name,
        ]);
        $notification=array(
            'message'=>'Region Inserted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.region')->with($notification);
    } // End Method .........


    public function EditRegion ($id)
    {
        $editRegion = Region::findOrFail($id);
        return view('region.edit_region',compact('editRegion'));
    } // End Method..


    public function UpdateRegion (Request $request)
    {
        $id = $request->id;
        Region::findOrFail($id)->update([
            'region_name'=>$request->region_name,
        ]);
        $notification=array(
            'message'=>'Region Updated Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.region')->with($notification);
    } // End Method.....



    public function DeleteRegion ($id)
    {
        Region::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Region Deleted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.region')->with($notification);
    }



}
