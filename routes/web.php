<?php


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->name('/');

Route::get('/', 'HomeController@index')->name('home')->name('/');


//CategorieModel
Route::get('/byCat/{id}','HomeController@bycat')->name('bycat');

//userModel
Route::get('/User_info/{id}','userController@User_info')->name('User_info');
Route::get('/upUser','userController@upUser')->name('upUser');
Route::Post('/upUser','userController@upUser')->name('upUser');

//PostModel
Route::get('/post/{id}','PostController@post')->name('post');
Route::get('/add_Post','PostController@addPost');
Route::Post('/add_Post','PostController@savPost');
Route::get('/delPost/{id}','PostController@delPost');
Route::get('/upPost/{id}','PostController@upPost')->name('upPost');
Route::Post('/upPost/{id}','PostController@upPost')->name('upPost');

//commentModel
Route::POST('add_com','ComentController@add')->name('add_com');
Route::get('UpVot/{id}','ComentController@UpVot')->name('UpVot');
Route::get('DownVot/{id}','ComentController@DownVot')->name('DownVot');
Route::get('/delCom/{id}','ComentController@delCom');
Route::get('/upCom/{id}','ComentController@upCom');
Route::Post('/upCom/{id}','ComentController@upCom');
Route::get('/report/{id}','ComentController@ReportCom');
