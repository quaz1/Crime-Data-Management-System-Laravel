<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submitatip;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;

class SubmitatipController extends Controller
{
    public function submitatip(){
      return view('submitatip.submitatip');
    }

    public function view(){
      $submitatips = Submitatip::all();
      
      //$submitatips = Submitatip::where('id','=',$id)->get();
      return view('submitatip.view',['submitatips'=> $submitatips] );
    }

    public function addingsubmitatip(Request $request){
      $this->validate($request,[
        'submitatip_title'=> 'required',
        'submitatip_body'=> 'required'
      ]);
      $submitatips = new Submitatip;
      $submitatips->submitatip_title = $request->input('submitatip_title');
      $submitatips->submitatip_body = $request->input('submitatip_body');
    //  $newss->news_image = $request->input('news_image');


      $submitatips->save();
      return redirect('/submitatip')->with('response', 'Tip Submitted');
    }

}
