<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mostwanted;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;

class MostwantedController extends Controller
{
    public function mostwanted(){
      $mostwanteds = Mostwanted::all();

      return view('mostwanted.mostwanted', ['mostwanteds' => $mostwanteds]);
    }

    public function addmostwanted(){
      return view('mostwanted.addmostwanted');
    }

    public function addingmostwanted(Request $request){
      $this->validate($request,[
        'mostwanted_title'=> 'required',
        'mostwanted_name'=> 'required',
        'mostwanted_image'=> 'required'
      ]);
      $mostwanteds = new Mostwanted;
      $mostwanteds->mostwanted_title = $request->input('mostwanted_title');
      $mostwanteds->mostwanted_name = $request->input('mostwanted_name');
    //  $newss->news_image = $request->input('news_image');
      if(Input::hasFile('mostwanted_image')){
        $file = Input::file('mostwanted_image');
        $file->move(public_path(). '/uploads/',
        $file->getClientOriginalName());
        $url = URL::to("/"). '/uploads/'. $file->getClientOriginalName();

      }
      $mostwanteds->mostwanted_image = $url;
      $mostwanteds->save();
      return redirect('/mostwanted')->with('response', 'added');
    }
}
