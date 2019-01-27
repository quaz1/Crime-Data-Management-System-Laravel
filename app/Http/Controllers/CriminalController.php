<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criminals;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;

class CriminalController extends Controller
{
  public function criminals(){
    return view('criminals.criminals');
  }

  public function addcriminals(Request $request){
    $this->validate($request,[
      'criminals_name'=> 'required',
      'criminals_age'=> 'required',
      'criminals_dob'=> 'required',
      'criminals_gender'=> 'required',
      'criminals_nid'=> 'required',
      'criminals_crime'=> 'required',
      'criminals_blood'=> 'required',
      'criminals_status'=> 'required',
      'criminals_regno'=> 'required',
      'criminals_regdate'=> 'required'
    ]);
    $criminalss = new Criminals;
    $criminalss->criminals_name = $request->input('criminals_name');
    $criminalss->criminals_age = $request->input('criminals_age');
    $criminalss->criminals_dob = $request->input('criminals_dob');
    $criminalss->criminals_gender = $request->input('criminals_gender');
    $criminalss->criminals_nid = $request->input('criminals_nid');
    $criminalss->criminals_crime = $request->input('criminals_crime');
    $criminalss->criminals_blood = $request->input('criminals_blood');
    $criminalss->criminals_status = $request->input('criminals_status');
    $criminalss->criminals_regno = $request->input('criminals_regno');
    $criminalss->criminals_regdate = $request->input('criminals_regdate');

    $criminalss->save();
    return redirect('/criminals')->with('response', 'added');
  }

}
