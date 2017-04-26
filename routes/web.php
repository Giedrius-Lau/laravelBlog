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




Route::get('/', 'PagesController@index');

Route::get('profile', 'PagesController@profile');

Route::get('users', ['uses' => 'UsersController@index']);
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);




// Route::get('users', function(){
//       $users = [
//         '0' => [
//           'first_name' => 'Giedrius',
//           'last_name' => 'Lauruska',
//           'location' => 'Lietuva'
//         ],
//         '1' => [
//           'first_name' => 'Viktoria',
//           'last_name' => 'Kriuckovaite',
//           'location' => 'Lietuva'
//         ]
//       ];
//     return $users;
// });

Auth::routes();

Route::get('/home', 'HomeController@index');
