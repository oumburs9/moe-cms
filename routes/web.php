<?php

use App\Livewire\User\ListUser;
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
Route::get('/mission-vision-and-values', function () { return view('guest.about-us.mission-vision');})->name('mvav');
Route::get('/organizational-structure', function () { return view('guest.about-us.organizational-structure');})->name('org-chart');
Route::get('/partners-and-stakeholders', function () { return view('guest.about-us.partners-and-stakeholders');})->name('partners');
Route::get('/power-and-duties', function () { return view('guest.about-us.power-and-duties');})->name('power-duties');
Route::get('/who-is-who', function () { return view('guest.about-us.who-is-who');})->name('who-is-who');
Route::get('/fact-sheets', function () { return view('guest.about-us.fact-sheets');})->name('fact-sheet');
Route::get('/history', function () { return view('guest.about-us.history');})->name('history');
// About Us -> sector institutions
Route::get('/sector-institutions', function () { return view('guest.about-us.sector-institutions');})->name('sector-institutions');
Route::get('/sector-institutions-agencies', function () { return view('guest.about-us.agencies');})->name('agencies');
Route::get('/sector-institutions-ctes', function () { return view('guest.about-us.ctes');})->name('ctes');
Route::get('/sector-institutions-regional-bureaus', function () { return view('guest.about-us.regional-bureaus');})->name('bureaus');
Route::get('/sector-institutions-universties', function () { return view('guest.about-us.universties');})->name('universties');

// Education Sector
Route::get('/education-sector', function () { return view('guest.sector.education-sector');})->name('education-sector');
Route::get('/general-education', function () { return view('guest.sector.general-education');})->name('general-education');
Route::get('/higher-education', function () { return view('guest.sector.higher-education');})->name('higher-education');

//  Resources
Route::get('/resources-policies-and-strategies', function () { return view('guest.resources.policies');})->name('policies');
Route::get('/resources-guidelines-and-standards', function () { return view('guest.resources.guidelines');})->name('guidelines');
Route::get('/resources-plans-and-reports', function () { return view('guest.resources.plans-reports');})->name('plans');
Route::get('/resources-annual-abstract', function () { return view('guest.resources.annual-abstract');})->name('abstract');
Route::get('/resources-digital-library-and-elearning', function () { return view('guest.resources.digital-library');})->name('digital-library');


//  Announcement
Route::get('/announcement-job-vacancy', function () { return view('guest.announcement.vacancy');})->name('vacancy');
Route::get('/announcement-tender', function () { return view('guest.announcement.tender');})->name('tender');
Route::get('/announcement-notices', function () { return view('guest.announcement.notices');})->name('notices');

// Media
Route::get('/media-news', function () { return view('guest.media.news');})->name('news');
Route::get('/media-press-release', function () { return view('guest.media.press-release');})->name('press-release');
Route::get('/media-magazine', function () { return view('guest.media.magazine');})->name('magazine');
Route::get('/media-gallery', function () { return view('guest.media.gallery');})->name('gallery');

// Contact Us
Route::get('/contact-us', function () { return view('guest.contact-us');})->name('contact-us');

// Admin Pages
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),  'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::get('/users', function () { return view('dashboard'); })->name('users-create');
    Route::get('/users/index',  ListUser::class)->name('users.index');
    Route::get('/user-access-level',  function () { return view('dashboard'); })->name('access-level');

    Route::resource(
        'roles', RoleController::class,
    );

     // web page admin routes
     Route::get('/slides', function () { return view('dashboard'); })->name('slide.list');
     Route::get('/slides/add', function () { return view('dashboard'); })->name('slide.add');
     Route::get('/slides/{slide}', function () { return view('dashboard'); })->name('slide.edit');

     Route::get('/admin-about', function () { return view('dashboard'); })->name('about.list');
     Route::get('/admin-about/add', function () { return view('dashboard'); })->name('about.add');
     Route::get('/admin-about/{about}', function () { return view('dashboard'); })->name('about.edit');

     // News & Events
     Route::get('/admin-news', function () { return view('dashboard'); })->name('news.list');
     Route::get('/admin-news/add', function () { return view('dashboard'); })->name('news.add');
     Route::get('/admin-news/{news}', function () { return view('dashboard'); })->name('news.edit');
     Route::get('/admin-news-category/', function () { return view('dashboard'); })->name('category');

     // Contact

     Route::get('/admin-message', function () { return view('dashboard'); })->name('message');
     Route::get('/social-links', function () { return view('dashboard'); })->name('social');

});
