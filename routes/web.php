<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LoginController::class, 'index'])->name('landing');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [LoginController::class, 'register'])->name('auth.register');
Route::post('/register', [LoginController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/users/teacher', [AdminController::class, 'teacher'])->name('admin.users.teacher');
});

Route::middleware(['teacher'])->group(function () {
    Route::get('/Teacher', [TeacherController::class, 'dashboard'])->name('Teacher.dashboard');
});

Route::middleware(['parent'])->group(function () {
    Route::get('/parent', [ParentController::class, 'dashboard'])->name('parent.dashboard');
});
