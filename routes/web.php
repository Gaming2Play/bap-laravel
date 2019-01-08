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

/*

Route::get('/users/{id}', function ($id, $name) {
    return 'This is user ' . $name . ' with an id of ' . $id;

});

Route::get('/about', function () {
    return view('pages.about');

});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');

Route::get('/photo-gallery', 'PhotoGalleryController@listPhotos')
    ->name('gallery.photohome');


Route::get('/photo-gallery/add-photo', 'PhotoGalleryController@showPhotoForm')
    ->name('gallery.add_photo');

Route::post('/photo-gallery/add-photo', 'PhotoGalleryController@SavePhotoForm')
    ->name('gallery.save_photo');



