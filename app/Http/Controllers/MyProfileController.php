<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MyProfileController extends Controller
{
    public function AdminProfile (){
        $adminData = auth()->user();
        return view('admin.admin_profile',compact('adminData'));
    }  //  END METHOD.......


    public function UpdateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        // Update user information
        User::where("id", auth()->user()->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make(trim($request->password)),
            'Ptoken' => Crypt::encrypt(trim($request->password)),
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {

            $oldImagePath = auth()->user()->image;
            if (Storage::exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }

            // Upload the new image
            $imagePath = $request->file('image')->store('public/image');

            // Update the user's image path in the database
            User::where("id", auth()->user()->id)->update(['image' => $imagePath]);
        }

        $notification = [
            'message' => 'Profile Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.profile')->with($notification);
    }  // End Method........





    public function EmployeeAccount (){
        $adminData = auth()->user();
        return view('employeess.employees_account',compact('adminData'));
    }  // End Method........



    public function UpdateAccount(Request $request)
{
    // dd($request);
    $request->validate([
        'first_name' => 'required',
        'email' => 'required',
        'password' => 'required|min:6',
        'image' => 'image|mimes:jpeg,png,jpg,gif'
    ]);

    // Update user information
    $user = User::find(auth()->user()->id);
    $user->update([
        'first_name' => $request->first_name,
        'email' => $request->email,
        'password' => Hash::make(trim($request->password)),
        'Ptoken' => Crypt::encrypt(trim($request->password)),
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        // Check if the user has an existing image
        $oldImagePath = $user->image;
        if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
            // Delete the old image
            Storage::disk('public')->delete($oldImagePath);
        }

        // Upload the new image
        $imagePath = $request->file('image')->store('public/image');

        // Update the user's image path in the database
        $user->update(['image' => $imagePath]);
    }

    $notification = [
        'message' => 'Profile Updated Successfully!',
        'alert-type' => 'success'
    ];

    return redirect()->route('employee.account')->with($notification);
}

}


