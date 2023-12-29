<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function AllLocation()
    {
        $getCountries = Country::select('countries.country_name', 'locations.*')
            ->join('locations', 'countries.id', '=', 'locations.countries_id')
            ->get();

        return view('location.all_location', compact('getCountries'));
    }
     // END METHOD............


    public function AddLocation (){
        $getCountries = Country::get();
        return view('location.add_location',compact('getCountries'));
    }  // END METHOD ..........



    public function StoreLocation(Request $request){
        $request->validate([
            'street_address'=>'required',
            'postal_code'=>'required',
            'city'=>'required',
            'state_provice'=>'required',
            'countries_id'=>'required',
        ]);
        Location::insert([
            'street_address'=>$request->street_address,
            'postal_code'=>$request->postal_code,
            'city'=>$request->city,
            'state_provice'=>$request->state_provice,
            'countries_id'=>$request->countries_id,
        ]);
        $notification=array(
            'message'=>'Location Inserted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.location')->with($notification);
        }   // End METHOD ----------//


        public function EditLocation($id){
            $editLocation = Location::findOrFail($id);
            $getCountries = Country::get(); // Fetch countries data
            return view('location.edit_location', compact('editLocation', 'getCountries'));
        }   // END METHOD............


        public function UpdateLocation (Request $request){
            $id = $request->id;
            Location::findOrFail($id)->update([
                'street_address'=>$request->street_address,
                'postal_code'=>$request->postal_code,
                'city'=>$request->city,
                'state_provice'=>$request->state_provice,
                'countries_id'=>$request->countries_id,
            ]);
            $notification=array(
                'message'=>'Location Updated Successfully!',
                'alert-type'=>'success'
                );
                return Redirect()->route('all.location')->with($notification);
        }  // END METHOD...........


        public function DeleteLocation ($id){
            Location::findOrFail($id)->delete();
            $notification=array(
                'message'=>'Location Deleted Successfully!',
                'alert-type'=>'success'
                );
                return Redirect()->route('all.location')->with($notification);
        }
}
