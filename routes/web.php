<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\AdminController;

// Campaign routes
Route::get('/', [CampaignController::class, 'index'])->name('campaign.index');
Route::post('/submit', [CampaignController::class, 'store'])->name('campaign.submit');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/submissions', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/export', [AdminController::class, 'export'])->name('admin.export');
});
