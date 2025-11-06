<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FitnessController;
use App\Http\Controllers\AdminController;

// Fitness routes
Route::controller(FitnessController::class)->group(function () {
    Route::get('/fitness', 'index')->name('fitness.index');
    Route::get('/fitness/about', 'about')->name('fitness.about');
    Route::get('/fitness/course', 'course')->name('fitness.course');
    Route::get('/fitness/blog', 'blog')->name('fitness.blog');
    Route::get('/fitness/contact', 'contact')->name('fitness.contact');
    Route::get('/fitness/feature', 'feature')->name('fitness.feature');
});

// Admin routes
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin.index');
    Route::get('/admin/calendar', 'calendar')->name('admin.calendar');
    Route::get('/admin/form-elements', 'formElements')->name('admin.formElements');
    Route::get('/admin/login', 'login')->name('admin.login');
    Route::get('/admin/table-plugins', 'tablePlugins')->name('admin.tablePlugins');
    Route::get('/admin/modal-notification', 'modalNotification')->name('admin.modalNotification');
});

Route::get('/', function () {
    return redirect()->route('fitness.index');
});