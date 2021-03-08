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
    return view('index');
});

Route::get('/resources', function() {
    return view('resources');
});

Route::get('/resource-detail', function() {
    return view('resource-detail');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/who-we-are', function() {
    return view('who-we-are');
});

Route::get('/custom-orthotics', function() {
    return view('custom-orthotics');
});

Route::get('/the-richie-brace', function() {
    return view('the-richie-brace');
});

Route::get('/geckos-orthotics', function() {
    return view('geckos-orthotics');
});

Route::get('/scan-mate', function() {
    return view('scan-mate');
});

Route::get('/my-qol', function() {
    return view('my-qol');
});

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/blog-detail', function() {
    return view('blog-detail');
});

Route::get ('/{page}/', 'PagesController@page');