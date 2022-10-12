<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CustomerContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Frontend Controller
Route::get('/',[FrontendController::class,'welcome'])->name('welcome');

//Users Controller
Route::get('/users',[UsersController::class,'user_list'])->name('user.list');
Route::get('/delete/user/{user_id}',[UsersController::class,'user_delete'])->name('user.delete');
Route::get('/profile',[UsersController::class,'profile'])->name('profile');
Route::post('/profile/name',[UsersController::class,'profile_name'])->name('profile.name.update');
Route::post('/password/change',[UsersController::class,'password_change'])->name('profile.password.update');
Route::post('/profile/photo',[UsersController::class,'profile_photo'])->name('profile.photo');

//Backend Controller

   ///banner/////
Route::get('/add/banner',[BackendController::class,'add_banner'])->name('add.banner');
Route::post('/insert/banner',[BackendController::class,'insert_banner'])->name('insert.banner');
Route::get('/view/banner',[BackendController::class,'view_banner'])->name('view.banner');
Route::get('/status/banner/{banner_id}',[BackendController::class,'banner_status'])->name('banner.status');
Route::get('/delete/banner/{banner_id}',[BackendController::class,'delete_banner'])->name('delete.banner');
Route::get('/edit/banner/{banner_id}',[BackendController::class,'edit_banner'])->name('edit.banner');
Route::post('/update/banner',[BackendController::class,'update_banner'])->name('update.banner');
     ///banner/////

     ///about////
Route::get('/add/about',[BackendController::class,'add_about'])->name('add.about');     
Route::post('/insert/about',[BackendController::class,'insert_about'])->name('insert.about');     
Route::get('/view/about',[BackendController::class,'view_about'])->name('view.about');
Route::get('/status/about/{about_id}',[BackendController::class,'about_status'])->name('about.status');     
Route::get('/delete/about/{about_id}',[BackendController::class,'delete_about'])->name('delete.about');     
Route::get('/edit/about/{about_id}',[BackendController::class,'edit_about'])->name('edit.about');     
Route::post('/update/about',[BackendController::class,'update_about'])->name('update.about');     
     //about//


     //work//
Route::get('/add/work',[BackendController::class,'add_work'])->name('add.work');   
Route::post('/insert/work',[BackendController::class,'insert_work'])->name('insert.work');   
Route::get('/view/work',[BackendController::class,'view_work'])->name('view.work');   
Route::get('/status/work/{work_id}',[BackendController::class,'work_status'])->name('work.status');
Route::get('/delete/work/{work_id}',[BackendController::class,'delete_work'])->name('delete.work'); 
Route::get('/edit/work/{work_id}',[BackendController::class,'edit_work'])->name('edit.work');
Route::post('/update/work',[BackendController::class,'update_work'])->name('update.work');    
     //work//
     
     //service
Route::get('/add/service',[BackendController::class,'add_service'])->name('add.service');     
Route::post('/store/service',[BackendController::class,'service_store'])->name('service.store');     
Route::get('/view/service',[BackendController::class,'view_service'])->name('view.service');     
Route::get('/edit/service/{service_id}',[BackendController::class,'edit_service'])->name('edit.service');     
Route::post('/update/service',[BackendController::class,'service_update'])->name('service.update'); 
Route::get('/delete/service{service_id}',[BackendController::class,'delete_service'])->name('delete.service');    

     ///counter
Route::get('/add/counter',[BackendController::class,'add_counter'])->name('add.counter');     
Route::post('/store/counter',[BackendController::class,'counter_store'])->name('counter.store');
Route::get('/view/counter',[BackendController::class,'view_counter'])->name('view.counter');     
Route::get('/delete/counter/{counter_id}',[BackendController::class,'delete_counter'])->name('delete.counter'); 

     //Portfolio
Route::get('/add/portfolio',[BackendController::class,'add_portfolio'])->name('add.portfolio');
Route::post('/store/portfolio',[BackendController::class,'store_portfolio'])->name('store.portfolio');
Route::get('/view/portfolio',[BackendController::class,'view_portfolio'])->name('view.portfolio');
Route::get('/delete/portfolio/{portfolio_id}',[BackendController::class,'delete_portfolio'])->name('delete.portfolio');

    // Customer Contact
Route::post('/customer/contact',[CustomerContactController::class,'customer_contact'])->name('customer.contact');
Route::get('/customer/contact/view',[CustomerContactController::class,'customer_view'])->name('view.Contact');
Route::get('/customer/contact/delete/{customer_id}',[CustomerContactController::class,'customer_delete'])->name('delete.customer');
