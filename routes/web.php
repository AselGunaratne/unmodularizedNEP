<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\headOrgController;
use App\Http\Controllers\managerController;

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

Route::get('/home', function () {
    //dd(\Illuminate\Support\Facades\Auth::user());
    return view('admin/dashboard');
})->middleware(['auth', 'verified']);

Route::get('/general', function(){
    return view('admin/mainview');
});





Route::get('/administrator/index', 'App\Http\Controllers\AdministratorController@index');

Route::get('/administrator/show/{id}', 'App\Http\Controllers\AdministratorController@show');

Route::get('/administrator/edit/{id}', 'App\Http\Controllers\AdministratorController@edit');

Route::patch('/administrator/update/{id}', 'App\Http\Controllers\AdministratorController@update');

Route::delete('/administrator/delete/{id}', 'App\Http\Controllers\AdministratorController@destroy');

Route::get('/administrator/editpriviledge/{id}', 'App\Http\Controllers\AdministratorController@privilege');

Route::patch('/administrator/updateprivilege/{id}', 'App\Http\Controllers\AdministratorController@updateprivilege');

Route::get('/administrator/selfRegistered', 'App\Http\Controllers\AdministratorController@self');

Route::get('/administrator/activate/{id}', 'App\Http\Controllers\AdministratorController@activate');

Route::patch('/administrator/doActivate/{id}', 'App\Http\Controllers\AdministratorController@doActivate');

Route::get('/administrator/create', function () {
         return view('admin/adminCreate');
     });

Route::post('/administrator/store', 'App\Http\Controllers\AdministratorController@store');

Route::get('/passwordReset', function() {
    return view('passwordReset');
});

Route::patch('/resetpassword', 'App\Http\Controllers\AdministratorController@passwordReset');




Route::get('/headOrg/index', 'App\Http\Controllers\headOrgController@index');

Route::get('/headOrg/show/{id}', 'App\Http\Controllers\headOrgController@show');

Route::get('/headOrg/edit/{id}', 'App\Http\Controllers\headOrgController@edit');

Route::patch('/headOrg/update/{id}', 'App\Http\Controllers\headOrgController@update');

Route::get('/headOrg/create', function () {
         return view('headOrg/headOrgCreate');
     });

Route::post('/headOrg/store', 'App\Http\Controllers\headOrgController@store'); 




//Environment Restoration Module Routes
Route::get('/envRestoration/index', 'App\Http\Controllers\envRestorationController@index');

Route::get('/envRestoration/show/{id}', 'App\Http\Controllers\envRestorationController@show');

Route::get('/envRestoration/edit/{id}', 'App\Http\Controllers\envRestorationController@edit');

Route::patch('/envRestoration/update/{id}', 'App\Http\Controllers\envRestorationController@update');

Route::get('/envRestoration/create', function () {
         return view('envRestoration/envRestorationCreate');
     });

Route::post('/envRestoration/store', 'App\Http\Controllers\envRestorationController@store'); 








Route::get('/manager/index', 'App\Http\Controllers\managerController@index');

Route::get('/manager/show/{id}', 'App\Http\Controllers\managerController@show');

Route::get('/manager/edit/{id}', 'App\Http\Controllers\managerController@edit');

Route::patch('/manager/update/{id}', 'App\Http\Controllers\managerController@update');

Route::get('/manager/create', function () {
         return view('manager/managerCreate');
     });

Route::post('/manager/store', 'App\Http\Controllers\managerController@store');


Route::get('dynamic-field', 'DynamicFieldController@index');

Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');

