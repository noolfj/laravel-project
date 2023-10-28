<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;


class HomeController extends Controller
{
    public function home(){
        $jobs = Job::with(['companies', 'locations', 'jobtypes'])->paginate(15); 

        return view('index', [
            'jobs' => $jobs
        ]);
    }
 }

