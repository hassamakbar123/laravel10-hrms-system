<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobHistoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\PayRollController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SingleEmployeeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.home');
})->name("home");

Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/team-detail', function () {
    return view('front.team-detail');
})->name('team.detail');

Route::get('/services', function () {
    return view('front.services');
})->name('services');

Route::get('/news',function(){
    return view('front.news');
})->name('news');

Route::get('/contact',function(){
    return view('front.contact');
})->name('contact');



Route::get('/jobs',function(){
    return view('front.jobs');
})->name('jobs');


Route::get('/blog-detail',function(){
    return view('front.blog-detail');
})->name('blog-detail');


Route::get('/hr-consulting',function(){
    return view('front.hr-cunsulting');
})->name('hr-consulting');




Route::get('/tech-resources',function(){
    return view('front.tech-resources');
})->name('tech-resources');



Route::get('/staffing-solution',function(){
    return view('front.staffing-solution');
})->name('staffing-solution');


Route::get('/project-deatil',function(){
    return view('front.project-deatail');
})->name('project-deatail');


Route::get('/optimize', function () {
Artisan::call("optimize");
});

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::get('/forget-password',[AuthController::class,'forget_password'])->name('forget.password');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register/store',[AuthController::class,'Store'])->name('register.store');
Route::post('/login-post',[AuthController::class,'loginPost'])->name('login.post');


// ADMIN || HR same name ......
Route::group(['middleware' => 'admin'],function (){
    Route::get('/admin/dashboard',[DashboardController::class,'AdminDashboard'])->name('admin.dashboard');


    // Employee CRUD....

    Route::get('/all/employee',[EmployeeController::class,'AllEmployee'])->name('all.employee');
    Route::get('/add/employee',[EmployeeController::class,'AddEmployee'])->name('add.employee');
    Route::post('/store/employee', [EmployeeController::class,'StoreEmployee'])->name('store.employee');
    Route::get('single/employee/{id}',[EmployeeController::class,'SingleUser'])->name('single.user');
    Route::get('/edit/employee/{id}',[EmployeeController::class,'EditEmployee'])->name('edit.employee');
    Route::post('/update/employee/{id}',[EmployeeController::class,'UpdateEmployee'])->name('update.employee');
    Route::get('/delete/employee/{id}',[EmployeeController::class,'DeleteEmployee'])->name('delete.employee');


    // Jobs CRUD....

    Route::get('/all/jobs',[JobController::class,'AllJobs'])->name('all.jobs');
    Route::get('/add/jobs',[JobController::class, 'AddJobs'])->name('add.jobs');
    Route::post('/store/jobs', [JobController::class,'StoreJobs'])->name('store.jobs');
    Route::get('/edit/jobs/{id}',[JobController::class,'EditJobs'])->name('edit.jobs');
    Route::post('/update/jobs/{id}', [JobController::class,'UpdateJobs'])->name('update.jobs');
    Route::get('/delete/jobs/{id}', [JobController::class,'DeleteJobs'])->name('delete.jobs');



    // Jobs HisTORY CRUD....
    Route::get('/all/job-history',[JobHistoryController::class,'AllJobHistory'])->name('all.history');
    Route::get('/add/job-history',[JobHistoryController::class,'AddJobHistory'])->name('add.history');
    Route::post('/store/job-history', [JobHistoryController::class,'StoreJobHistory'])->name('store.history');
    Route::get('/edit/job-history/{id}',[JobHistoryController::class,'EditJobHistory'])->name('edit.history');
    Route::post('/update/job-history/{id}',[JobHistoryController::class,'UpdateJobHistory'])->name('update.history');
    Route::get('/delete/job-history/{id}',[JobHistoryController::class,'DeleteJobHistory'])->name('delete.history');


    //   JOB GRADES CRUD....
    Route::get('/all/grade', [GradeController::class,'AllGrade']) ->name('all.grade');
    Route::get('/add/grade', [GradeController::class,'AddGrade']) ->name('add.grade');
    Route::post('/store/grade', [GradeController::class,'StoreGrade'] )->name('store.grade');
    Route::get('/edit/grade/{id}', [GradeController::class,'EditGrade']) ->name('edit.grade');
    Route::post('/update/grade/{id}', [GradeController::class,'UpdateGrade']) ->name('update.grade');
    Route::get('/delete/grade/{id}', [GradeController::class,'DeleteGrade']) ->name('delete.grade');



        //   Region CRUD....
        Route::get('/all/region', [RegionController::class,'AllRegion']) ->name('all.region');
        Route::get('/add/region', [RegionController::class,'AddRegion']) ->name('add.region');
        Route::post('/store/region', [RegionController::class,'StoreRegion']) ->name('store.region');
        Route::get('/edit/region/{id}', [RegionController::class,'EditRegion']) ->name('edit.region');
        Route::post('/update/region/{id}', [RegionController::class,'UpdateRegion']) ->name('update.region') ;
        Route::get('/delete/region/{id}', [RegionController::class,'DeleteRegion']) ->name('delete.region');




         //   Country   CRUD....
         Route::get('/all/country', [CountryController::class,'AllCountry']) ->name('all.country');
         Route::get('/add/country', [CountryController::class,'AddCountry']) ->name('add.country');
         Route::post('/store/country', [CountryController::class,'StoreCountry']) ->name('store.country');
         Route::get('/edit/country/{id}', [CountryController::class,'EditCountry']) ->name('edit.country');
         Route::post('/update/country/{id}', [CountryController::class,'UpdateCountry']) ->name('update.country') ;
         Route::get('/delete/country/{id}', [CountryController::class,'DeleteCountry']) ->name('delete.country');


        //   Location   CRUD....
        Route::get('/all/location', [LocationController::class,'AllLocation'])->name('all.location');
        Route::get('/add/location', [LocationController::class,'AddLocation'])->name ('add.location');
        Route::post('/store/location', [LocationController::class,'StoreLocation'])->name('store.location') ;
        Route::get('/edit/location/{id}' , [LocationController::class, 'EditLocation'])->name('edit.location');
        Route::post('/update/location/{id}' , [LocationController::class, 'UpdateLocation'])->name('update.location');
        Route::get('/delete/location/{id}' , [LocationController::class, 'DeleteLocation'])->name('delete.location');


        //   Department  CRUD....
        Route::controller(DepartmentController::class)->group(function(){
            Route::get('/all/department', 'AllDepartment')->name('all.department');
            Route::get('/add/department', 'AddDepartment')->name('add.department');
            Route::post('/store/department', 'StoreDepartment')->name('store.department');
            Route::get('/edit/department/{id}','EditDepartment') ->name('edit.department');
            Route::post('/update/department/{id}','UpdateDepartment') ->name('update.department');
            Route::get('/delete/department/{id}','DeleteDepartment') ->name('delete.department');

        });


        //   Manager  CRUD....
        Route::controller(ManagerController::class)->group(function(){
            Route::get('/all/manager', 'AllManager')->name('all.manager');
            Route::get('/add/manager', 'AddManager')->name('add.manager');
            Route::post('/store/manager', 'StoreManager')->name('store.manager');
            Route::get('/edit/manager/{id}', 'EditManager')->name('edit.manager');
            Route::post('/update/manager/{id}', 'UpdateManager')->name('update.manager');
            Route::get('/delete/manager/{id}', 'DeleteManager')->name('delete.manager');
        });


        //   Payroll  CRUD....
        Route::controller(PayRollController::class)->group(function(){
            Route::get('/all-payroll','AllPayroll')->name('all.payroll');
            Route::get('/add-payroll','AddPayroll')->name('add.payroll');
            Route::post('/store-payroll', 'StorePayroll')->name('store.payroll');
            Route::get('/view-payroll/{id}', 'ViewPayroll')->name('view.payroll');
            Route::get('/edit-payroll/{id}', 'EditPayroll')->name('edit.payroll');
            Route::post('/update-payroll/{id}', 'UpdatePayroll')->name('update.payroll');
            Route::get('/delete-payroll/{id}', 'DeletePayroll')->name('delete.payroll');

        });

        //   Position  CRUD....

        Route::controller(PositionController::class)->group(function(){
            Route::get('/all/position', 'AllPosition')->name('all.position');
            Route::get('/add/position', 'AddPosition')->name('add.position');
            Route::post('/store/position', 'StorePosition')->name('store.position');
            Route::get('/edit/position/{id}', 'EditPosition') ->name('edit.position');
            Route::post('/update/position/{id}', 'UpdatePosition') ->name('update.position');
            Route::get('/delete/position/{id}', 'DeletePosition') ->name('delete.position');
        });


        // My ACCOUNT SETTING .....
        Route::get('/my-account',[MyProfileController::class,'AdminProfile'])->name('admin.profile');
        Route::post('/update/my_account',[MyProfileController::class, 'UpdateProfile'])->name('store.profile');

});


Route::group(['middleware' => 'employees'], function() {
    Route::get('/employees/dashboard', [DashboardController::class, 'AdminDashboard'])->name('employess.dashboard');
    Route::get('/employees-account',[MyProfileController::class,'EmployeeAccount'])->name('employee.account');
    Route::post('/update/employees_account',[MyProfileController::class, 'UpdateAccount'])->name('update.account');


    // Interview...
    Route::get('/employee/interview',[InterviewController::class,'AllInterview'])->name('all.interview');
});

// ---------------------  LOGOUT ROUTE  ------------------//////////
Route::get("/logout", [AuthController::class, 'LogOut'])->name("logout");

