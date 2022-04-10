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

// MIDDLEWARE
// Route::group(['middleware' => ['auth']], function () {
//     //
// });

//Route::get('/register', 'RegisterController@index');
//Route::get('/login', 'AuthController@login');
//Route::post('/login', 'AuthController@login');
Route::get('/profile', 'AuthController@profile');
Route::post('/profile', 'AuthController@profile');

// CRUD Kategori
route::get('/kategori/create', 'kategoriController@create');
route::post('/kategori', 'kategoriController@store');
route::get('/kategori', 'kategoriController@index');
route::get('/kategori/{kategori_id}/edit', 'kategoriController@edit');
route::put('/kategori/{kategori_id}', 'kategoriController@update');
route::delete('/kategori/{kategori_id}', 'kategoriController@destroy');

// CRUD Pertanyaan
Route::resource('pertanyaan', 'pertanyaanController');

// <<<<<<< HEAD

// CRUD Profile
Route::resource('profile', 'profileController');
Auth::routes();
// =======
// // Auth::routes();
// >>>>>>> 83c2350d9da5ed5a22b6d787630eace7ddfcdca5

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profile', 'profileController')->only([
    'index', 'show',
]);
