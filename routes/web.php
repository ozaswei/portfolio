<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ScrapeController;
use App\Http\Controllers\SalarySurveyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'frontPage'])->name('frontPage');
Route::get('/salarySurvey', [SalarySurveyController::class, 'salarySurveyFrontPage'])->name('salarySurvey');
Route::post('/salarySurvey', [ScrapeController::class, 'scrape'])->name('runScraper');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
