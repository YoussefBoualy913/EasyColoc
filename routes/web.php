<?php

use App\Http\Controllers\CalocationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashbordController::class, 'userdashboad'])->name('userdashboard');
Route::get('/admin/dashboard', [DashbordController::class, 'adminDashboad'])->name('admindashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/calocation')->controller(CalocationController::class)->group( function() {
    Route::get('/index','index')->name('colocations.index');
    Route::get('/show/{calocation}','show')->name('colocations.show');
    Route::get('/create','create')->name('colocations.create');
    Route::post('/store','store')->name('colocations.store');
    Route::patch('/cancel/{calocation}','cancel')->name('colocations.cancel');
    
});

Route::prefix('/categories')->controller(CategoryController::class)->group( function() {
    Route::get('/index','index')->name('categories.index');
    Route::get('/create','create')->name('categories.create');
    Route::post('/store/{calocation}','store')->name('categories.store');
    Route::delete('/destroy/{category}','destroy')->name('categories.destroy');
});

Route::prefix('/depenses')->controller(DepenseController::class)->group( function() {
    Route::get('/index','index')->name('depenses.index');
    Route::get('/create','create')->name('depenses.create');
    Route::post('/store/{calocation}','store')->name('depenses.store');
    Route::delete('/destroy/{depense}','destroy')->name('depenses.destroy');
});

Route::prefix('/payments')->controller(PaymentController::class)->group( function() {
    Route::post('/payer/{payment}','payer')->name('payments.payer');
   
});

Route::prefix('/users')->controller(UserController::class)->group( function() {
    Route::post('/retreit/{user}','retreit')->name('users.retreit');
    Route::patch('/banni/{user}','banni')->name('users.banni');
    Route::patch('/unban/{user}','unban')->name('users.unban');
  

});

Route::controller(InvitationController::class)->group( function() {
Route::post('/colocations/{calocation}/invite', 'sendInvitation')->name('colocations.invite');

Route::get('/invitations/accept/{token}', 'accept');
Route::get('/invitations/refuse/{token}','refuse');
});