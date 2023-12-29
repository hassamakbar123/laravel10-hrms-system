<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Job;
use App\Models\Manager;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

    public function AllEmployee() {
        $employees = User::paginate(5); // You can adjust the number of items per page (e.g., 10 items per page)
        return view('employee.employee_dashboard', compact('employees'));
    }


    public function AddEmployee (){
        $positions = Position::get();
        $getDeparts = Department::get();
        $getManagers = Manager::get();
        $jobTitles = Job::get();
        return view('employee.add_employee',compact('jobTitles','getManagers','getDeparts','positions'));
    } // End Method......



    public function StoreEmployee(Request $request){
        $request->validate([
                    'first_name'=>'required',
                    'last_name'=>'required',
                    'email'=>'required|unique:users',
                    'password'=>'required',
                    'phone_number'=>'required',
                    'hire_date'=>'required|date',
                    'job_id'=>'required',
                    'salary'=>'required',
                    'commision_pct'=>'required',
                    'department_id'=>'required',
                    'manager_id'=>'required',
                    'position_id'=>'required',
                    'image' => 'image|mimes:jpeg,png,jpg,gif'
                ]);
                $imagePath = null;

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('profile_pictures', 'public');
    }

    User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'phone_number' => $request->phone_number,
        'job_id' => $request->job_id,
        'hire_date' => $request->hire_date,
        'salary' => $request->salary,
        'commision_pct' => $request->commision_pct,
        'manager_id' => $request->manager_id,
        'department_id' => $request->department_id,
        'position_id' => $request->position_id,
        'interview' => $request->interview,
        'is_role' => 0,
        'image' => $imagePath, // Update this line to store the file path
    ]);

    $notification = [
        'message' => 'Employee Inserted Successfully!',
        'alert-type' => 'success'
    ];

    return redirect()->route('all.employee')->with($notification);
}


    public function SingleUser ($id){
        $getManagerName = User::
    join("jobs", "jobs.id", "=", "users.job_id")
    ->join('managers', 'users.manager_id', '=', 'managers.id')
    ->join('departments', 'users.manager_id', '=', 'departments.manager_id')
    ->join('positions', 'users.position_id', '=', 'positions.id') // Updated join condition
    ->find($id);

        // ->findOrFail($id);
        if ($getManagerName == null) {
echo "manager have no department";
        }
        // dd($getManagerName);
        return view('employee.single_employee',compact('getManagerName'));
    } // End Method .......




    public function EditEmployee ($id){
        $getDeparts = Department::get();
        $getManagers = Manager::get();
        $editData = User::findOrFail($id);
        $jobTitles = Job::get();
        $positions = Position::get();
        return view('employee.edit_employee',compact('editData','jobTitles','getManagers','getDeparts','positions'));
    } // End Method .......


    public function UpdateEmployee (Request $request){
        // dd($request);
        $id = $request->id;
        $employee = User::findOrFail($id);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_pictures', 'public');
            $employee->update(['image' => $imagePath]);
        }
        User::findOrFail($id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            'phone_number'=>$request->phone_number,
            'job_id'=>$request->job_id,
            'hire_date'=>$request->hire_date,
            'salary'=>$request->salary,
            'commision_pct'=>$request->commision_pct,
            'manager_id'=>$request->manager_id,
            'interview' => $request->interview,
            'department_id'=>$request->department_id,
            'position_id' => $request->position_id,
            'role_id'=>0,
        ]);
        $notification=array(
            'message'=>'Employee Updated Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.employee')->with($notification);
    } // End Method .........


    public function DeleteEmployee ($id){
        User::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Employee Deleted Successfully!',
            'alert-type'=>'success'
            );
            return Redirect()->route('all.employee')->with($notification);
    }
















//    public function index (){
//     return view('employee.employee_dashboard');
//    }

//    Public function add (){
//     return view('employee.add_employee');
//    }


//    public function create(Request $request){
//     $request->validate([
//         'first_name' => 'required',
//         'email' => 'required|unique:users',
//         'phone_number' => 'required|size:11',
//         'hire_date' => 'required|date',
//         'job_id' => 'required',
//         'salary' => 'required',
//         'commision_pct' => 'required',
//         'department_id' => 'required',
//         'manager_id' => 'required',
//     ]);

//     $user = new User;
//     $user->first_name = trim($request->first_name);
//     $user->last_name = trim($request->last_name);
//     $user->email = trim($request->email);
//     $user->phone_number = trim($request->phone_number);
//     $user->hire_date = trim($request->hire_date);
//     $user->salary = trim($request->salary);
//     $user->commision_pct = trim($request->commision_pct);
//     $user->department_id = trim($request->department_id);
//     $user->manager_id = trim($request->manager_id);
//     $user->is_role = 0;

//     return redirect()->route('admin.employee')->with('success', 'Employee added successfully');
//    }


   }

//    public function store(Request $request){
//     // dd($request->all());
//     //validate the data


