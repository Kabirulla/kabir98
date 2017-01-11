<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $phpKnowledges= App\Khowledge::all();
    return view('index')->with('phpKnowledges',$phpKnowledges);
})->name('indexView');
Route::get('/contact',function(){
    $phpKnowledges= \App\Khowledge::all();
   return view('contact')->with('phpKnowledges',$phpKnowledges);
})->name('contactView');
Route::get('/projects/{id}',"Php@getPhpProjects")->name("phpView");
/*Route::get('ajax',function(){
   return view('message');
});
Route::get('/ajax2',function(){
   return redirect('/');
});
Route::get('/getmsg/{id}','AjaxController@index');*/
