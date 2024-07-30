<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontendController::class ,'home'])->name('home');
Route::get('/trainer',function(){
    return View('trainerDashboard');
});
Route::get('/class',function(){
    return View('class');
});
Route::get('/schedule',function(){
    return View('schedule');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('trainer', [AdminController::class, 'trainer'])->name('trainer');
    Route::get('profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('addtrainer', [AdminController::class, 'addTrainer'])->name('addtrainer');
});

Route::middleware(['auth'])->prefix('trainer')->group(function () {
    Route::get('dashboard', [TrainerController::class, 'dashboard'])->name('trainer.dashboard');
});

Route::post('user/login',[UserController::class,'login'])->name('user.login');
Route::get('register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('user/register', [UserController::class, 'register'])->name('user.register');
Route::post('/profile', [UserController::class, 'update'])->name('user.profile.update');

require __DIR__.'/auth.php';
