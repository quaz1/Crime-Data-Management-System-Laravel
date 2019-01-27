<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Auth;

class NewsController extends Controller
{
    public function news(){

      $newss = News::all();
      return view('news.news', ['newss' => $newss]);
    }
    public function delete($id){
      News::where('id',$id)
      ->delete();
      return redirect('/news')->with('response', 'Deleted successfully');

    }

    public function addnews(){
      return view('news.addnews');
    }

    public function view($id){
      $newss = News::where('id','=',$id)->get();
      return view('news.view',['newss'=> $newss] );
     }

    public function edit($id){
      $newss = News::find($id);

      return view('news.edit', ['newss'=>$newss]);
    }

    public function editingnews(Request $request,$id){
      $this->validate($request,[
        'news_title'=> 'required',
        'news_body'=> 'required',
        'news_image'=> 'required'
      ]);
      $newss = new News;
      $newss->news_title = $request->input('news_title');
      $newss->news_body = $request->input('news_body');
    //  $newss->news_image = $request->input('news_image');
      if(Input::hasFile('news_image')){
        $file = Input::file('news_image');
        $file->move(public_path(). '/uploads/',
        $file->getClientOriginalName());
        $url = URL::to("/"). '/uploads/'. $file->getClientOriginalName();

      }
      $newss->news_image = $url;
      $data = array(
        'news_title' => $newss->news_title,
        'news_body' => $newss->news_body,
        'news_image' => $newss->news_image
      );
      News::where('id',$id)
      ->update($data);
      $newss->update();
      return redirect('/news')->with('response', 'update successful');
    }

    public function addingnews(Request $request){
      $this->validate($request,[
        'news_title'=> 'required',
        'news_body'=> 'required',
        'news_image'=> 'required'
      ]);
      $newss = new News;
      $newss->news_title = $request->input('news_title');
      $newss->news_body = $request->input('news_body');
    //  $newss->news_image = $request->input('news_image');
      if(Input::hasFile('news_image')){
        $file = Input::file('news_image');
        $file->move(public_path(). '/uploads/',
        $file->getClientOriginalName());
        $url = URL::to("/"). '/uploads/'. $file->getClientOriginalName();

      }
      $newss->news_image = $url;
      $newss->save();
      return redirect('/news')->with('response', 'added');
    }
}
