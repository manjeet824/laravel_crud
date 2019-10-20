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

Route::get('/about', function () {
   $pro=App\Products::all();
    	return $pro;
});

Route::get('/contact', function (){
	 
$data = request('name');
	return view('contact',
		['name'=>$data]
	);
});
Route::get('/post/{post}', function ($post){
	 
	 $posts=[
	 	'my-first-blog' => 'fitnesss is a key to success',
	 	'my-second-blog' => 'khula khao  is a key to success',
	 ];

  if(!array_key_exists($post, $posts)) abort(404,'sorry key is now vald');

	return view('post', ['post'=> $posts[$post] ?? 'nothing is there'
]);

});

Route::get('/products/add', 'productscontroller@add');
Route::get('/products', 'productscontroller@index');
Route::get('/products/{post}', 'productscontroller@showProducts');
Route::post('/products/insert', 'productscontroller@insert');

