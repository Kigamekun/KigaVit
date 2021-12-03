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
use App\Http\Controllers\invitController;

// available dashboard menu menu when you haven't selected a template
// 1:
Route::get('/',[invitController::class,'index'])->name('dashboard');
Route::get('/dashboard',[invitController::class,'index'])->name('dashboard');
Route::get('/category',[invitController::class ,'category'])->name('category');
Route::get('/category_filter/{id}',[invitController::class ,'category_filter'])->name('category_filter');
Route::get('/bookmarks',[invitController::class ,'bookmarks'])->name('bookmarks')->middleware('auth');
Route::get('/add_bookmarks/{id}',[invitController::class ,'add_bookmarks'])->name('add_bookmarks')->middleware('auth');
Route::get('/delete_bookmarks/{id}',[invitController::class ,'delete_bookmarks'])->name('delete_bookmarks')->middleware('auth');
Route::get('/like_template/{id}',[invitController::class ,'like_template'])->name('like_template')->middleware('auth');

// when you have selected a template, this route will be available
// 2:
Route::get('/template_details/{id}',[invitController::class,'details'])->middleware('auth');
Route::get('/edit_template/{id}',[invitController::class,'edit_template'])->middleware('auth');
Route::get('/edit_sub_template/{id}',[invitController::class,'edit_sub_template'])->middleware('auth');
Route::get('/my_template',[invitController::class,'my_template'])->name('my_template')->middleware('auth');
Route::post('/select_template/{id}',[invitController::class,'select_template'])->name('select-template')->middleware('auth');
Route::post('/new_layer',[invitController::class,'new_layer'])->middleware('auth');
Route::post('/delete_template',[invitController::class,'delete_template'])->middleware('auth');
Route::post('/in_music',[invitController::class,'in_music'])->middleware('auth');
Route::post('/update_design',[invitController::class,'update_design'])->middleware('auth');
Route::get('/responden',[invitController::class ,'responden'])->name('responden');
Route::post('/delete_section', [invitController::class, 'delete_section'])->name('delete_section');
Route::get('/add_music/{id}',[invitController::class ,'add_music'])->name('add_music');
Route::get('/send_email',[invitController::class ,'send_email'])->name('send_email')->middleware('auth');
Route::post('/send_bulk_email',[invitController::class ,'send_bulk_email'])->name('send_bulk_email')->middleware('auth');

// Admin Route
// 3:
Route::get('/create_template', function () {return view('add_template');})->middleware('auth');
Route::post('/create_template', [invitController::class,'add_template'])->name('create_template')->middleware('auth');
Route::get('/user_list', [invitController::class, 'user_list'])->name('user_list')->middleware('auth');
Route::get('/add_category', function () {return view('add_category');})->name('add_category')->middleware('auth');
Route::post('/store_category',[invitController::class ,'store_category'])->name('store_category')->middleware('auth');

// Recipient Invitation
Route::get('/invitation', [invitController::class, 'invitation'])->name('invitation');
Route::get('/fill_rsvp', function () {return view('fill_rsvp');});
Route::post('/add_rsvp', [invitController::class, 'add_rsvp'])->name('add_rsvp');
Route::get('/download_format', [invitController::class, 'download_format'])->name('download_format');