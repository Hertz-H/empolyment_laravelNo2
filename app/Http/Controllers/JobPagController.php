<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Validator;

class JobPagController extends Controller
{
    public function load(){

        return view('template.jobs_page');
    }

    public function loadDetails(){

        return view('template.job_details');
    }
    public function loadAdd(){

        return view('dashboard.add_job');
    }
    public function add(Request $request){


        Validator::validate($request->all(),[
            'title'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            'description'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            // 'requirements'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
           
        ],[
            'title.regex'=>'tilte must contain letters',
             'description.regex'=>'description must contain letters',
            //  'requirements.regex'=>' requirements must contain letters',
        ]);
        $job=new Job();
        $job->title=$request->title;
        $job->interval=$request->interval;
        $job->company_id=1;
        // $job->company_id=$request->company;
        $job->start_date=$request->from;
        $job->end_date=$request->to;
        $job->requirements=$request->requirements;
        $job->description=$request->description;
   
        if($job->save()){
           //  return route('companies')->with([ 'success'=>'created successfully' ]);
        }
       else{
           return back();
       }
        return view('dashboard.add_job');
    }
    
}
