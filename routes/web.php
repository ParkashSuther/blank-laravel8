<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ContactController;
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

// public routes
Route::get('/login',[UserAuthController::class,'get_login']);
Route::post('/login',[UserAuthController::class,'post_login']);

Route::get('/register',[UserAuthController::class,'get_register']);
Route::post('/register',[UserAuthController::class,'post_register']);

Route::get('/reset-password',[UserAuthController::class,'get_reset']);
Route::post('/reset-password',[UserAuthController::class,'post_reset']);

Route::get('/forgot-password',[UserAuthController::class,'get_forgot']);
Route::post('/forgot-password',[UserAuthController::class,'post_forgot']);



// private routes...
Route::get('/rest-password',function(){
    return view('auth.login');
});

Route::get('/forgot-password',function(){
    return view('auth.forgot_password');
});
// private routes

Route::middleware('authCheck')->group(function(){
    
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/temp', function () {
        return view('temp');
    });

    Route::get('/users/add', function(){
        return view('users.add');
    });

    Route::get('/users', function(){
        return view('users.view');
    });

    Route::get('/contacts', function(){
        return view('contacts.view');
    });

    Route::get('/contacts/add', function(){
        return view('contacts.add');
    });

    Route::post('/contacts/add', [ContactController::class, 'add_contact']);

    Route::get('/branches', [BranchController::class,'view_branches']);
    Route::get('/branch/add', [BranchController::class,'add_branch']);
    Route::post('/branch/add',[BranchController::class,'post_add_branch'] );
    Route::get('/branch/detail/{id}',[BranchController::class,'detail_view'] );

    Route::get('/branch/update/{id}',[BranchController::class,'view_update'] );
    Route::post('/branch/update/{id}',[BranchController::class,'post_update'] );


    Route::get('/company/add', [CompanyController::class,'add_company']);
    Route::post('/company/add', [CompanyController::class,'post_add_company']);
    Route::get('/company', [CompanyController::class,'view_company']);

    Route::get('/users/add', [UsersController::class,'add_users']);
    Route::post('/users/add', [UsersController::class,'post_add_users']);
    Route::get('/users', [UsersController::class,'view_users']);
    Route::get('/users/detail/{id}', [UsersController::class,'view_detail']);

    Route::get('/users/update/{id}', [UsersController::class,'view_update']);
    Route::post('/users/update/{id}', [UsersController::class,'post_update']);

    Route::get('/logout', [UserAuthController::class,'logout']);
});
