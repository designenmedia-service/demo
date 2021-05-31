<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',function(){
    return view('welcome');
});

// Route::get('/about',function(){
//     return "Hi";
// });

// Route::get('/contact', array('as' => 'chris.home',function(){
//     $hallo = route('chris.home');

//     return "Contact" . $hallo;
// }));

// Route::get('/post/{id}/{name}', function($id, $name ){

//     return "This is post number". $id. "   " .$name;
// });

// Route::get('admin/posts/example', array('as'=> 'admin.home' ,function(){

//     $chris = route('admin.home');

//     return "this url is ". $chris;
// }));

// use App\Http\Controllers\PostController;
// Route::get('/post/{id}', [PostController::class, 'index']);

use App\Http\Controllers\PostController;
Route::resource('posts', PostController::Class);
Route::get('contact', [PostController::class, 'contact']);
Route::get('post/{id}/{name}/{password}', [PostController::class, 'show_post']);
Route::get('chris/{id1}/{id2}/{id3}', [PostController::class, 'show_chris']);
Route::get('testpagina', [PostController::class, 'show_testpagina']);
Route::get('array', [PostController::class, 'show_array']);
Route::get('index', [PostController::class, 'show_index']);

// Route::get('/insert' , function(){

//     DB::insert('insert into posts(title, content value(?');

// });
