<?php

use App\Http\Controllers\AuditLibraryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PolicyLibraryController;
use App\Http\Controllers\QualityAmbassadorController;
use App\Http\Controllers\RcaLibraryController;
use App\Http\Controllers\WorkInstructionController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Protected Admin Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Admin Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // File Management
    Route::get('/files', [FileController::class, 'index'])->name('admin.files.index');
    Route::post('/files', [FileController::class, 'store'])->name('admin.files.store');
    Route::delete('/files/{id}', [FileController::class, 'destroy'])->name('admin.files.destroy');

    // Quality Ambassador Admin Routes
    Route::get('/quality-ambassadors', [QualityAmbassadorController::class, 'admin'])->name('admin.quality_ambassadors.index');
    Route::get('/quality-ambassadors/create', [QualityAmbassadorController::class, 'create'])->name('admin.quality_ambassadors.create');
    Route::post('/quality-ambassadors', [QualityAmbassadorController::class, 'store'])->name('admin.quality_ambassadors.store');
    Route::get('/quality-ambassadors/{id}/edit', [QualityAmbassadorController::class, 'edit'])->name('admin.quality_ambassadors.edit');
    Route::put('/quality-ambassadors/{id}', [QualityAmbassadorController::class, 'update'])->name('admin.quality_ambassadors.update');
    Route::delete('/quality-ambassadors/{id}', [QualityAmbassadorController::class, 'destroy'])->name('admin.quality_ambassadors.destroy');
});

// Add this route for file access
Route::get('/storage/{path}', function ($path) {
    return response()->file(storage_path('app/public/'.$path));
})->where('path', '.*');

Route::middleware('auth')->group(function () {
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
})->name('rft');

Route::get('/quality_kpi', function () {
    return view('pages.quality_kpi');
})->name('quality_kpi');

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
})->name('daily_performance');

Route::get('/quality_system', function () {
    return view('pages.quality_system');
});

Route::get('/rca_library', [RcaLibraryController::class, 'index'])->name('rca_library');
Route::get('/rca_library/download/{id}', [RcaLibraryController::class, 'download'])->name('rca_library.download');
Route::get('/rca_library/view/{id}', [RcaLibraryController::class, 'view'])->name('rca_library.view');

Route::get('/policy_library', [PolicyLibraryController::class, 'index'])->name('policy_library');
Route::get('/policy_library/download/{id}', [PolicyLibraryController::class, 'download'])->name('policy_library.download');
Route::get('/policy_library/view/{id}', [PolicyLibraryController::class, 'view'])->name('policy_library.view');

Route::get('/work_instruction_library', [WorkInstructionController::class, 'index'])->name('work_instruction_library');
Route::get('/work_instruction_library/download/{id}', [WorkInstructionController::class, 'download'])->name('work_instruction_library.download');
Route::get('/work_instruction_library/view/{id}', [WorkInstructionController::class, 'view'])->name('work_instruction_library.view');

Route::get('/audit_library', [AuditLibraryController::class, 'index'])->name('audit_library');
Route::get('/audit_library/download/{id}', [AuditLibraryController::class, 'download'])->name('audit_library.download');
Route::get('/audit_library/view/{id}', [AuditLibraryController::class, 'view'])->name('audit_library.view');

Route::get('/quality_ambassador', [QualityAmbassadorController::class, 'index'])->name('quality_ambassador');
Route::get('/quality_ambassador/{id}', [QualityAmbassadorController::class, 'show'])->name('quality_ambassador.show');

Route::get('/404', function () {
    return view('pages.404');
});
