<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('main');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/services/{url}/{id}', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/work-history', [App\Http\Controllers\HomeController::class, 'works'])->name('works');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::post('/contact/sendMail', [App\Http\Controllers\HomeController::class, 'send_mail'])->name('send_mail');


Route::get('/admin/services', [App\Http\Controllers\AdminController::class, 'services'])->name('admin.services');
Route::get('/admin/service_posts/{id}', [App\Http\Controllers\AdminController::class, 'service_post'])->name('admin.service_post');
 


// POST Methods

Route::post('/admin/save_service', [App\Http\Controllers\AdminController::class, 'save_service'])->name('admin.save_service');
Route::post('/admin/update_service', [App\Http\Controllers\AdminController::class, 'update_service'])->name('admin.update_service');
Route::post('/admin/delete_service', [App\Http\Controllers\AdminController::class, 'delete_service'])->name('admin.delete_service');
 
Route::post('/admin/save_service_post', [App\Http\Controllers\AdminController::class, 'save_service_post'])->name('admin.save_service_post');
Route::post('/admin/update_service_post', [App\Http\Controllers\AdminController::class, 'update_service_post'])->name('admin.update_service_post');
Route::post('/admin/delete_service_post', [App\Http\Controllers\AdminController::class, 'delete_service_post'])->name('admin.delete_service_post');
  
Route::get('/about', [App\Http\Controllers\AdminController::class, 'about'])->name('admin.about');
Route::post('/admin/update_about', [App\Http\Controllers\AdminController::class, 'update_about'])->name('admin.update_about');


 

Route::get('/admin/work', [App\Http\Controllers\AdminController::class, 'work'])->name('admin.work');
Route::post('/admin/save_work', [App\Http\Controllers\AdminController::class, 'save_work'])->name('admin.save_work');
Route::post('/admin/update_work', [App\Http\Controllers\AdminController::class, 'update_work'])->name('admin.update_work');
Route::post('/admin/delete_work', [App\Http\Controllers\AdminController::class, 'delete_work'])->name('admin.delete_work');

 
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
Route::post('/admin/update_profile', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('admin.update_profile');
Route::post('/admin/save_user', [App\Http\Controllers\AdminController::class, 'save_user'])->name('admin.save_user');
Route::post('/admin/delete_user', [App\Http\Controllers\AdminController::class, 'delete_user'])->name('admin.delete_user');





