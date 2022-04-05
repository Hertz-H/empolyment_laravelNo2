<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobPagController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdController;

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

Route::get('/index',[HomeController::class,"load"]);
Route::get('/jobs',[JobPagController::class,"load"]);
Route::get('/jobDetails',[JobPagController::class,"loadDetails"]);
Route::get('/companies',[CompanyController::class,"load"]);
Route::get('/contact',[ContactController::class,"load"]);
Route::get('/about',[AboutController::class,"load"]);
Route::get('/signup',[UserController::class,"signup"]);
Route::get('/login',[UserController::class,"login"]);
Route::get('/add_service',[ServiceController::class,"loadAdd"]);
Route::get('/services',[ServiceController::class,"load"]);

Route::post('/add_service',[ServiceController::class,"add"])->name('save_service');
Route::post('/add_ad',[AdController::class,"add"])->name('save_ad');
Route::get('/add_ad',[AdController::class,"loadAdd"]);
Route::post('/add_company',[ServiceController::class,"add"])->name('save_company');
Route::get('/add_company',[CompanyController::class,"loadAdd"]);
Route::post('/add_company',[CompanyController::class,"add"])->name('save_company');
Route::get('/add_job',[JobPagController::class,"loadAdd"]);
Route::post('/add_job',[JobPagController::class,"add"])->name('save_job');

Route::get('/list_jobs',function(){
    return view("dashboard.list_jobs");
});
// Route::get('/add_services',function(){
//     return view("dashboard.services");
// });

// Route::get('/add_about',function(){
//     return view("dashboard.about");
// });
// // Route::get('/add_job',function(){
// //     return view("dashboard.job");
// // });
// Route::get('/add_adds',function(){
//     return view("dashboard.job");
// });
