<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FitnessController;
use App\Http\Controllers\AdminController;

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

// Fitness Landing Page Routes
Route::prefix('fitness')->name('fitness.')->group(function () {
    Route::get('', [FitnessController::class, 'index'])->name('index');
    Route::get('about', [FitnessController::class, 'about'])->name('about');
    Route::get('course', [FitnessController::class, 'course'])->name('course');
    Route::get('blog', [FitnessController::class, 'blog'])->name('blog');
    Route::get('contact', [FitnessController::class, 'contact'])->name('contact');
    Route::get('feature', [FitnessController::class, 'feature'])->name('feature');
});

// Admin Dashboard Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('index');
    Route::get('calendar', [AdminController::class, 'calendar'])->name('calendar');
    Route::get('form-elements', [AdminController::class, 'formElements'])->name('formElements');
    Route::get('login', [AdminController::class, 'login'])->name('login');
    Route::get('table-plugins', [AdminController::class, 'tablePlugins'])->name('tablePlugins');
    Route::get('modal-notification', [AdminController::class, 'modalNotification'])->name('modalNotification');
});

// Default route - redirect to fitness landing page
Route::get('/', function () {
    return redirect()->route('fitness.index');
});
