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
Route::get('demo',function () {
    return 'Đây là demo đầu tiên';
});

Route::get("demo1","HomeController@getFirst");

Route::get('/san-pham/{name}/{id}', function ($name,$id){
    echo "Bạn đang xem sản phẩm ".$name." có ID là ".$id;
})->where(array('name' => '[a-z]+','id' => '[0-9]+'));


Route::get('test','HomeController@test');
Route::get('kiemtra',function (){
    return view('luyentap');
});