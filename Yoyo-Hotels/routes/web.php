<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/',[AdminController::class,'home']);


route::get('/home',[AdminController::class,'index'])->name('home');


route::get('/index',[AdminController::class,'main']);


route::get('/rooms',[AdminController::class,'rooms']);


route::get('/about_us',[AdminController::class,'about_us']);


route::get('/contact',[AdminController::class,'contact']);


route::get('/create_room',[AdminController::class,'create_room']);

route::post('/add_room',[AdminController::class,'add_room']);


// route::get('/index',[AdminController::class,'dashboard']);

route::get('/view_room',[AdminController::class,'view_room']);

route::get('/room_delete/{id}',[AdminController::class,'room_delete']);

route::get('/room_details/{id}',[HomeController::class,'room_details']);

route::get('/room_update/{id}',[AdminController::class,'room_update']);

route::post('/edit_room/{id}',[AdminController::class,'edit_room']);

route::post('/add_booking/{id}',[HomeController::class,'add_booking']);

route::get('/booking',[AdminController::class,'booking']);

route::get('/delete_booking/{id}',[AdminController::class,'delete_booking']);

route::get('/approve_book/{id}',[AdminController::class,'approve_book']);

route::get('/reject_book/{id}',[AdminController::class,'reject_book']);

route::post('/contact',[HomeController::class,'contact']);

route::get('/messages',[AdminController::class,'messages']);

route::get('/send_mail/{id}',[AdminController::class,'send_mail']);

route::post('/mail/{id}',[AdminController::class,'mail']);

route::get('/offers_image',[AdminController::class,'offers']);

route::post('/add_offers',[AdminController::class,'add_offers']);

route::get('/delete_image/{id}',[AdminController::class,'delete_image']);

route::get('/view_offers',[AdminController::class,'view_offers']);

// Route::post('/calculate-Price', [HomeController::class, 'calculatePrice'])->name('calculatePrice');

route::get('/available_room',[HomeController::class,'available_room'])->name('available_room');

route::get('/reviews',[AdminController::class,'reviews']);

route::post('/add_review/{id}',[AdminController::class,'add_review']);

route::get('/my_bookings',[HomeController::class,'my_bookings']);

// Route::get('/room-details/{id}', [AdminController::class, 'showRoomDetails'])->name('room_details');

Route::get('/search', [HomeController::class, 'search'])->name('search');

route::get('/cancel_booking/{id}',[HomeController::class,'cancel_booking']);

route::get('/mail_delete/{id}',[AdminController::class,'mail_delete']);

route::get('/review_delete/{id}',[AdminController::class,'review_delete']);









