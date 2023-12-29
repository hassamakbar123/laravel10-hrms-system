<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Department;
use App\Models\Job;
use App\Models\JobHistory;
use App\Models\Location;
use App\Models\Manager;
use App\Models\PayRoll;
use App\Models\Position;
use App\Models\Region;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function AdminDashboard(){
    if(Auth::user()->is_role == 1){
        $emplCount = User::where('is_role', '=' , 0)->count();
    $HRcount = User::where('is_role', '=' , 1)->count();
    $Manager = Manager::count();
    $Department = Department::count();
    $position = Position::count();
    $payroll = PayRoll::count();
    $allJob = Job::count();
    $JobHistory = JobHistory::count();
    $Region = Region::count();
    $todayRegion = Region::whereDate('created_at',Carbon::today())->count();
    $country = Country::count();
    $location = Location::count();
    return view('admin.admin_dashboard',compact('emplCount','HRcount','allJob','JobHistory','Region','todayRegion','country','location','Manager','Department','position','payroll'));
    } else if (Auth::user()->is_role == 0){
        return view('employeess.all_employess');
    }
    }
}
