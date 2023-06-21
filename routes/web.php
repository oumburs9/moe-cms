<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome');})->name('home');

// About Us
Route::get('/mission-vision-and-values', function () { return view('guest.mission-vision');})->name('mvav');
Route::get('/organizational-structure', function () { return view('guest.organizational-structure');})->name('org-chart');
Route::get('/partners-and-stakeholders', function () { return view('guest.partners-and-stakeholders');})->name('partners');
Route::get('/power-and-duties', function () { return view('guest.power-and-duties');})->name('power-duties');
Route::get('/who-is-who', function () { return view('guest.who-is-who');})->name('who-is-who');
Route::get('/fact-sheets', function () { return view('guest.fact-sheets');})->name('fact-sheet');
Route::get('/history', function () { return view('guest.history');})->name('history');
// About Us -> sector institutions
Route::get('/sector-institutions', function () { return view('guest.sector-institutions');})->name('sector-institutions');
Route::get('/sector-institutions-agencies', function () { return view('guest.agencies');})->name('agencies');
Route::get('/sector-institutions-ctes', function () { return view('guest.ctes');})->name('ctes');
Route::get('/sector-institutions-regional-bureaus', function () { return view('guest.regional-bureaus');})->name('bureaus');
Route::get('/sector-institutions-universties', function () { return view('guest.universties');})->name('universties');

// Education Sector
Route::get('/education-sector', function () { return view('guest.education-sector');})->name('education-sector');
Route::get('/general-education', function () { return view('guest.general-education');})->name('general-education');
Route::get('/higher-education', function () { return view('guest.higher-education');})->name('higher-education');

//  Resources
Route::get('/resources-policies-and-strategies', function () { return view('guest.policies');})->name('policies');
Route::get('/resources-guidelines-and-standards', function () { return view('guest.guidelines');})->name('guidelines');
Route::get('/resources-plans-and-reports', function () { return view('guest.plans-reports');})->name('plans');
Route::get('/resources-annual-abstract', function () { return view('guest.annual-abstract');})->name('abstract');
Route::get('/resources-digital-library-and-elearning', function () { return view('guest.digital-library');})->name('digital-library');


//  Announcement
Route::get('/announcement-job-vacancy', function () { return view('guest.vacancy');})->name('vacancy');
Route::get('/announcement-tender', function () { return view('guest.tender');})->name('tender');
Route::get('/announcement-notices', function () { return view('guest.notices');})->name('notices');

// Media
Route::get('/media-news', function () { return view('guest.news');})->name('news');
Route::get('/media-press-release', function () { return view('guest.press-release');})->name('press-release');
Route::get('/media-magazine', function () { return view('guest.magazine');})->name('magazine');
Route::get('/media-gallery', function () { return view('guest.gallery');})->name('gallery');

// Contact Us
Route::get('/contact-us', function () { return view('guest.contact-us');})->name('contact-us');

// Admin Pages
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),  'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});
