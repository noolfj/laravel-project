<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Location;
use App\Models\JobType;
use App\Models\Company;

use Illuminate\Http\Request;

class NewpostController extends Controller
{
    public function newpost(){
        $locations =Location::all();
        $jobTypes =JobType::all();
        $companies =Company::all();
      
        return view('new-post',[
            
            'locations'=>$locations,
            'jobTypes'=>$jobTypes,
            'companies'=>$companies
        
        ]);
    }
        public function create(Request $request){
            Job::create($request->all());

            return redirect('/');
            
            // dd($request);
        
    }
}
