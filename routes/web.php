<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//news
Route::get('/news', 'NewsController@news');
Route::get('/addnews', 'NewsController@addnews');
Route::post('/addingnews', 'NewsController@addingnews');
Route::get('/news/view/{id}', 'NewsController@view');
Route::get('/news/edit/{id}', 'NewsController@edit');
Route::post('/editingnews/{id}', 'NewsController@editingnews');
Route::get('/news/delete/{id}', 'NewsController@delete');
//mostwanted
Route::get('/mostwanted', 'MostwantedController@mostwanted');
Route::get('/addmostwanted', 'MostwantedController@addmostwanted');
Route::post('/addingmostwanted', 'MostwantedController@addingmostwanted');
//what we INVESTIGATE
Route::get('/whatweinvestigate', 'WhatweinvestigateController@whatweinvestigate');
Route::get('/addwhatweinvestigate', 'WhatweinvestigateController@addwhatweinvestigate');
Route::post('/addingwhatweinvestigate', 'WhatweinvestigateController@addingwhatweinvestigate');
//submit a tip
Route::get('/submitatip', 'SubmitatipController@submitatip');
Route::post('/addingsubmitatip', 'SubmitatipController@addingsubmitatip');
Route::get('/submitatip/view/{id}', 'SubmitatipController@view');
//CRIMINALS
Route::get('/criminals', 'CriminalController@criminals');
Route::post('/addcriminals', 'CriminalController@addcriminals');
//Route::post('/addingcriminals', 'CriminalController@addingcriminals');
//SERVICES
Route::get('/services', 'ServicesController@services');
Route::get('/addservices', 'ServicesController@addservices');
Route::post('/addingservices', 'ServicesController@addingservices');
//contact us
