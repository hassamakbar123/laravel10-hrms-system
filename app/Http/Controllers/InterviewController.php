<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function AllInterview (){
        $InterDatas = auth()->user();
        return view('interview.all_interview',compact('InterDatas'));
    }
}
