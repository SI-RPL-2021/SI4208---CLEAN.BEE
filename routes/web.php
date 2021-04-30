<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/grocery', 'GroceryController@index')->name('grocery');
Route::post('/grocery', 'GroceryController@index');

Route::get('/cuciselimut', function () {
    return view('cuciselimut');
})->name('cuciselimut');

Route::get('/cucipakaian', function () {
    return view('cucipakaian');
})->name('cucipakaian');

Route::get('/cucisepatu', function () {
    return view('cucisepatu');
})->name('cucisepatu');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');

Route::get('/orderlist', function () {
    return view('orderlist');
})->name('orderlist');



Route::get('account/password', 'Account\PasswordController@edit')->name('profile');
Route::patch('account/password', 'Account\PasswordController@update')->name('profile');

// <?php
// Route::get('/', function(){
//     return View::make('profile');
// });

// Route::post('change', array(
//     'as=>'change',
//     function(){
//         $newpassword = Input::get('password');
//         $oldpassword = User::find(2) ->password;

//         if(Hash::checks($newpassword, $oldpassword)){
//             var_dump('password matches and allowed changes');

//             $user =User::find(2);
//             $user ->password = Hash::make(Input::get'newpassword'));
//             $user->save();

//             return 'password updated';
//         }else{
//             var_dump('old password unmatch');
//         }


//     }
// ));
// ?>


