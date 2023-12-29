<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function AllCountry (){
        $getRegions = Country::select('countries.*', 'regions.region_name')
        ->join('regions', 'countries.region_name', '=', 'regions.id')
        ->paginate(4);

        return view('country.all_country',compact('getRegions'));
    }  //  END Method ...




    public function AddCountry (){
        $getRegions = Region::get();
        return view ('country.add_country',compact('getRegions'));
    }  // End Method.....


    public function StoreCountry (Request $request){
            $request->validate([
                'country_name'=>'required',
                'region_name'=>'required',
            ]);
            Country::insert([
                'country_name'=>$request->country_name,
                'region_name'=>$request->region_name,
            ]);
            $notification=array(
                'message'=>'Country Inserted Successfully!',
                'alert-type'=>'success'
                );
                return Redirect()->route('all.country')->with($notification);
        } // End Method .........


        public function EditCountry ($id){
          $editCountry = Country::findOrFail($id);
          $getRegions = Region::get();
          return view('country.edit_country', compact('editCountry','getRegions'));

        }   // END METHOD .......


        public function UpdateCountry (Request $request){
            $id = $request->id;
            Country::FindOrFail($id)->update([
                'country_name'=>$request->country_name,
                'region_name'=>$request->region_name,
            ]);
            $notification=array(
                'message'=>'Country Updated Successfully!',
                'alert-type'=>'success'
                );
                return Redirect()->route('all.country')->with($notification);
        } // End Method........




        public function DeleteCountry ($id){
            Country::findOrFail($id)->delete();
            $notification=array(
                'message'=>'Country Deleted Successfully!',
                'alert-type'=>'success'
                );
                return Redirect()->route('all.country')->with($notification);
        }   // END METHOD.........
}
