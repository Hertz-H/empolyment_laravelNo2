<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\Validator;
class AdController extends Controller
{
   
    public function loadAdd(){

        return view('dashboard.add_ads');
    }
    public function add(Request $request){
        Validator::validate($request->all(),[
            'name'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
           
           
        ],[
            'name.regex'=>'title must contain letters',
            
        ]);
        $ad=new Ad();
        $ad->company=$request->name;
        $imageName=time().'_'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $ad->image=$imageName;
   
        if($ad->save()){
           //  return route('companies')->with([ 'success'=>'created successfully' ]);
        }
       else{
           return back();
       }
        return view('dashboard.add_ads');
    }
    
}
