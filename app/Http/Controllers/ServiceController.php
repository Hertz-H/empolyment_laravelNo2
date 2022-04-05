<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
class ServiceController extends Controller
{
    public function load(){

        return view('template.services');
    }
    public function loadAdd(){

        return view('dashboard.add_service');
    }
    public function add(Request $request){
        Validator::validate($request->all(),[
            'title'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            'description'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
           
        ],[
            'title.regex'=>'tilte must contain letters',
             'description.regex'=>'description must contain letters',
        ]);
        $service=new Service();
        $service->title=$request->title;
        $service->description=$request->description;
   
        if($service->save()){
           //  return route('companies')->with([ 'success'=>'created successfully' ]);
        }
       else{
           return back();
       }
        return view('dashboard.add_service');
    }
    
}