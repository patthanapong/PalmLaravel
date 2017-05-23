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
    return view('welcome');

});

Route::get('/hello', function() {
  return "Hello Laravel 5.4";

});

Route::get('form', 'Auth\LoginController@form');

Route::get('blog/{id}', function($id) {
    return "Welcome To Blog ID : " . $id;
});

Route::get('profile/{id?}', function($id=null) {
    return "Welcome To Profile ID : " . $id;
}); //สามารถไม่จำเป็นต้องกรอกค่าก้อได้ เนื่องจากใส่ค่า null ไว้

Route::get('number/{id}', function($id) {
    return "Welcome To number ID : " . $id;
})->where('id','[0-9]+') ; //สามารถใส่่ได้เฉพาะตัวเลขเท่านั้น
Route::get('text/{name}', function($name) {
  return "Welcome To text ID : " . $name;
})->where('name','[A-Z,a-z]+');  //สามารถใส่่ได้เฉพาะตัวอักษรเท่านั้น

route::any('poll', 'Auth\LoginController@poll');
