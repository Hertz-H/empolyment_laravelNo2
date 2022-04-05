<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Helpers\UploadFile;
use App\Models\Company;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function load(){

        return view('template.company_page');
    }
    public function loadAdd(){

        return view('dashboard.add_company');
    }
    public function add(Request $request){
        // echo $request->all;
        // echo $request->logo;
     
        Validator::validate($request->all(),[
            'name'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            // 'link'=>['regex:/^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/'],
            'location'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            'logo'=>['required'],
            // 'user_pass'=>['required','min:5']
        ],[
            'name.regex'=>'name must contain letters',
        //    ' link.regex'=>'link must vaild facebook format '
             'location.regex'=>'name must contain letters',
             'location.logo'=>'logo is required',
        ]);
     $company=new Company();
     $company->name=$request->name;
     $imageName=time().'_'.$request->logo->extension();
     $request->logo->move(public_path('images'),$imageName);
     $company->logo=$imageName;

    //  $company->logo=$request->logo;
     $company->location=$request->location;
     $company->link=$request->link;

     if($company->save()){
        //  return route('companies')->with([ 'success'=>'created successfully' ]);
     }
    else{
        return back();
    }
    // echo  UploadFile::uploadFile($request->logo);
 
    }
}
