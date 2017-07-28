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


Route::get('latihan', function() {
	return view('about');
});

Route::get('/about/1', function() {
	return view('about.satu');
});

Route::get('/about/2', function() {
	return view('about.dua');
});

Route::get('/about/3', function() {
	return view('about.tiga');
});

Route::get('/about/{nama}/{sekolah}/{umur}', function($e,$s,$r) {
	return 'Nama Saya : '.$e.' <br>
	        Sekolah Di SMK : '.$s.' <br> 
	        Umur Saya : '.$r.' <br> ' ;
});

Route::get('/about/{nama}', function($e) { 
	$e='John';
	return 'Ini Halaman '.$e.'' ;
});



Route::get('testmodel', function() {
	$a = App\Post::all();
	return $a;
});


Route::get('testmodel1', function() {
	$a = App\Post::find(1);
	return $a;
});

Route::get('testmodel2', function() {
	$a = App\Post::where('title','like','%Ciri Keluarga%')->get();
	return $a;
});

Route::get('testmodel3', function(){
	$post=App\Post::find(1);
	$post->title ="Ciri Keluarga Sakinah";
	$post->save();
	return $post;
});

Route::get('testmodel4', function(){
	$post=App\Post::find(1);
	$post->delete();
	return $post;
});

Route::get('testmodel5', function(){
	$post = new App\Post;
	$post->title = "7 Amalan Pembuka Jodoh";
	$post->content = "shalat malam, sedekah,puasa subuh, silaturahmi , senyum, doa , tobat";
	$post->save();
	return $post;
});

Route::get('/about', function() {
	return view('about');
});

Route::get('cektampilan',function() {
	return view('layouts.master');
});