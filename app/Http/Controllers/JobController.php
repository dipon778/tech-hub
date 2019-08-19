<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    //
    public function index(){

        $jobs = Job::all();
        return view('jobs.jobs', ['jlists'=>$jobs] );
    }
    public function showJob($id){
        $job = Job::find($id);
        return view('jobs.showJob', ['jlist'=>$job] );

    }
}
