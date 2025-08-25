<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Protected
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/files', [FileController::class, 'index'])->name('admin.files');
    Route::post('/files/upload', [FileController::class, 'store'])->name('admin.files.upload');
    Route::delete('/files/{id}', [FileController::class, 'destroy'])->name('admin.files.delete');
});

// Add this route for file access
Route::get('/storage/{path}', function($path) {
    return response()->file(storage_path('app/public/' . $path));
})->where('path', '.*');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/quality_production', function () {
    return view('pages.quality_production');
});

Route::get('/rft', function () {
    return view('pages.rft');
});

Route::get('/quality_kpi', function () {
    return view('pages.quality_kpi');
});

Route::get('/defective_return', function () {
    return view('pages.defective_return');
});

Route::get('/warehouse_claims', function () {
    return view('pages.warehouse_claims');
});

Route::get('/humidity_control', function () {
    return view('pages.humidity_control');
});

Route::get('/moisture_check', function () {
    return view('pages.moisture_check');
});

Route::get('/daily_performance', function () {
    return view('pages.daily_performance');
});

Route::get('/quality_system', function () {
    return view('pages.quality_system');
});

Route::get('/rca_library', function () {
    return view('pages.rca_library');
});

Route::get('/audit', function () {
    return view('pages.audit');
});

Route::get('/training', function () {
    return view('pages.training');
});

Route::get('/quality_ambassador', function () {
    return view('pages.quality_ambassador');
});

Route::get('/404', function () {
    return view('pages.404');
});
