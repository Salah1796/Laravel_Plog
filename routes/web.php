<?php


Auth::routes();


Route::get('/', 'HomeController@index')->name('home');


//CategorieModel
Route::get('/byCat/{id}','HomeController@bycat')->name('bycat');

//userModel
Route::get('/User_info/{id}','userController@User_info')->name('User_info');
Route::get('/upUser','userController@upUser')->name('upUser');
Route::Post('/upUser','userController@upUser')->name('upUser');

//PostModel
Route::get('/post/{id}','PostController@post')->name('post');
Route::get('/add_Post','PostController@addPost')->name('add_Post');
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


//admin

Route::get('/admin', 'adminController@index')->name('admin');;

Route::get('/posts', 'adminController@viewposts')->name('viewPosts');
Route::get('/coments', 'adminController@viewComs')->name('viewcoms');
Route::get('/users', 'adminController@viewusers')->name('viewUsers');
Route::get('/cats', 'adminController@viewCats')->name('ViewCats');
Route::get('/Reports', 'adminController@viewReports')->name('viewReports');;
Route::get('/Admin_upPost/{id}', 'PostController@upPost');;
Route::get('/Admin_delPost/{id}', 'PostController@delPost');
Route::get('/delCat/{id}', 'adminController@delCat');
Route::Post('/upCat/{id}', 'adminController@upCat');
Route::get('/upCat/{id}', 'adminController@upCat');
