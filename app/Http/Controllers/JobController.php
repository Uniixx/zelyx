<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class JobController extends BaseController
{
    function index3(){
        return view('job.index3');
    }
    function positions(){
        return view('job.positions');
    }
    function applicants(){
        return view('job.applicants');
    }
    function resumes(){
        return view('job.resumes');
    }
    function jobsettings(){
        return view('job.jobsettings');
    }
}
