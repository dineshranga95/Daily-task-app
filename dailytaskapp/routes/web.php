<?php 

Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', function () {
    $data=App\Taskap::all();
    return view('task')->with('tasks',$data);
});
Route::post('/savetask','task_controller@store');

Route::get('/completed/{id}','task_controller@markcompleted');
Route::get('/notcompleted/{id}','task_controller@marknotcompleted');
Route::get('/delete/{id}','task_controller@delete');
Route::get('/update/{id}','task_controller@update');
Route::post('/updatedata','task_controller@updatedata');