<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsCategoryController;
use App\Http\Controllers\EventsPostController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\WebHomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EnquiryController;

Route::get('/homw', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/', 'web.pages.index');
// Route::get('/', [WebHomeController::class, 'index'])->name('home');
// Route::view('/about-us', 'web.pages.about-us');
// Route::view('/departments', 'web.pages.departments');
// Route::view('/programs-details', 'web.pages.programs-details');
// Route::view('/contact-us', 'web.pages.contact-us');
// Route::view('/chancellor', 'web.pages.chancellor');
// Route::view('/vice-chancellor', 'web.pages.vice-chancellor');
// Route::view('/pro-vice-chancellor', 'web.pages.pro-vice-chancellor');
// Route::view('/registrar', 'web.pages.registrar');
// Route::view('/director', 'web.pages.director');
// Route::view('/academic-leadership-team', 'web.pages.academic-leadership-team');
// Route::view('/incubation-center', 'web.pages.incubation-center');
// Route::view('/academics-team', 'web.pages.academics-team');
// Route::view('/coe', 'web.pages.coe');
// Route::view('/anti-ragging', 'web.pages.anti-ragging');
// Route::view('/notice-and-events-details', 'web.pages.notice-and-events-details');
// Route::view('/academic-collaborations', 'web.pages.academic-collaborations');
// Route::view('/alumni', 'web.pages.alumni');
// Route::view('/awards', 'web.pages.awards');
// Route::view('/cpio', 'web.pages.cpio');
// Route::view('/grievance-cell', 'web.pages.grievance-cell');
// Route::view('/academic-council', 'web.pages.academic-council');
// Route::view('/constituent-colleges', 'web.pages.constituent-colleges');
// Route::view('/health-facilities', 'web.pages.health-facilities');
// Route::view('/syllabus-courses', 'web.pages.syllabus-courses');
// Route::view('/equal-opportunity-cell', 'web.pages.equal-opportunity-cell');
// Route::view('/research-and-development-cell', 'web.pages.research-and-development-cell');
// Route::view('/internal-complaint-committee', 'web.pages.internal-complaint-committee');
// Route::view('/scholarship-policy', 'web.pages.scholarship-policy');
// Route::view('/refund-policy', 'web.pages.refund-policy');
// Route::view('/reservation-roster', 'web.pages.reservation-roster');
// Route::view('/ombudsperson', 'web.pages.ombudsperson');
// Route::view('/project-development-cell', 'web.pages.project-development-cell');
// Route::view('/sedg-cell', 'web.pages.sedg-cell');
// Route::view('/verification', 'web.pages.verification');
// Route::view('/recruitments', 'web.pages.recruitments');
// Route::view('/telephone-directories', 'web.pages.telephone-directories');
// Route::view('/iqac', 'web.pages.iqac');
// Route::view('/public-self-disclosure', 'web.pages.public-self-disclosure');
// Route::view('/exam-results', 'web.pages.exam-results');
// Route::view('/gallery', 'web.pages.gallery');
// Route::view('/privacy-policy', 'web.pages.privacy-policy');
// Route::view('/term-condition', 'web.pages.term-condition');
// Route::get('/blogs', [BlogController::class, 'blogListing'])->name('blogs.listing');
// Route::get('/blog/{slug}', [BlogController::class, 'blogDetails'])->name('blogs.details');
// Route::middleware('guest')->get('/cms', function () {
//     return view('admin.index');
// })->name('admin.login');
// Route::get('/dashboard', function () {
//     return view('admin.home');
// })->middleware(['auth', 'verified'])->name('dashboard'); // route for frontend
// Route::get('/schools-and-departments', [SchoolController::class, 'show'])->name('schools.show');
// Route::prefix('events')->group(function () {
//     Route::get('/', [EventsCategoryController::class, 'index'])->name('events.index');
//     Route::get('/create', [EventsCategoryController::class, 'create'])->name('events.create');
//     Route::post('/store', [EventsCategoryController::class, 'store'])->name('events.store');
//     Route::get('/edit/{id}', [EventsCategoryController::class, 'edit'])->name('events.edit');
//     Route::post('/update/{id}', [EventsCategoryController::class, 'update'])->name('events.update');
//     Route::delete('/delete/{id}', [EventsCategoryController::class, 'destroy'])->name('events.delete');
//     Route::get('/status/{id}', [EventsCategoryController::class, 'status'])->name('events.status');
// });
// Route::get('/notice-and-events', [EventsCategoryController::class, 'noticeAndEvents'])->name('notice.events');
// Route::get('/notice-and-events/{slug}', [EventsCategoryController::class, 'showPost'])->name('post.details');
// Route::prefix('posts')->group(function () {
//     Route::get('/', [EventsPostController::class, 'index'])->name('posts.index');
//     Route::get('/create', [EventsPostController::class, 'create'])->name('posts.create');
//     Route::post('/store', [EventsPostController::class, 'store'])->name('posts.store');
//     Route::get('/edit/{id}', [EventsPostController::class, 'edit'])->name('posts.edit');
//     Route::post('/update/{id}', [EventsPostController::class, 'update'])->name('posts.update');
//     Route::delete('/delete/{id}', [EventsPostController::class, 'destroy'])->name('posts.delete');
//     Route::get('/status/{id}', [EventsPostController::class, 'status'])->name('posts.status');
// });
// Route::prefix('schools')->group(function () {
//     Route::get('/', [SchoolController::class, 'index'])->name('schools.index');
//     Route::get('/create', [SchoolController::class, 'create'])->name('schools.create');
//     Route::post('/store', [SchoolController::class, 'store'])->name('schools.store');
//     Route::get('/edit/{id}', [SchoolController::class, 'edit'])->name('schools.edit');
//     Route::post('/update/{id}', [SchoolController::class, 'update'])->name('schools.update');
//     Route::delete('/delete/{id}', [SchoolController::class, 'destroy'])->name('schools.delete');
//     Route::get('/status/{id}', [SchoolController::class, 'status'])->name('schools.status');
// });
// Route::prefix('programs')->group(function () {
//     Route::get('/', [ProgramController::class, 'index'])->name('programs.index');
//     Route::get('/create', [ProgramController::class, 'create'])->name('programs.create');
//     Route::post('/store', [ProgramController::class, 'store'])->name('programs.store');
//     Route::get('/edit/{id}', [ProgramController::class, 'edit'])->name('programs.edit');
//     Route::post('/update/{id}', [ProgramController::class, 'update'])->name('programs.update');
//     Route::delete('/delete/{id}', [ProgramController::class, 'destroy'])->name('programs.delete');
//     Route::get('/status/{id}', [ProgramController::class, 'status'])->name('programs.status');
// });
// Route::prefix('courses')->group(function () {
//     Route::get('/', [CourseController::class, 'index'])->name('courses.index');
//     Route::get('/create', [CourseController::class, 'create'])->name('courses.create');
//     Route::post('/store', [CourseController::class, 'store'])->name('courses.store');
//     Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('courses.edit');
//     Route::post('/update/{id}', [CourseController::class, 'update'])->name('courses.update');
//     Route::delete('/delete/{id}', [CourseController::class, 'destroy'])->name('courses.delete');
//     Route::get('/status/{id}', [CourseController::class, 'status'])->name('courses.status');
// });
// Route::prefix('testimonials')->group(function () {
//     Route::get('/', [TestimonialController::class, 'index'])->name('testimonials.index');
//     Route::get('/create', [TestimonialController::class, 'create'])->name('testimonials.create');
//     Route::post('/store', [TestimonialController::class, 'store'])->name('testimonials.store');
//     Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonials.edit');
//     Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
//     Route::delete('/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.delete');
//     Route::get('/status/{id}', [TestimonialController::class, 'status'])->name('testimonials.status');
// });
// Route::prefix('faqs')->group(function () {
//     Route::get('/', [FaqController::class, 'index'])->name('faqs.index');
//     Route::get('/create', [FaqController::class, 'create'])->name('faqs.create');
//     Route::post('/store', [FaqController::class, 'store'])->name('faqs.store');
//     Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('faqs.edit');
//     Route::post('/update/{id}', [FaqController::class, 'update'])->name('faqs.update');
//     Route::delete('/delete/{id}', [FaqController::class, 'destroy'])->name('faqs.delete');
//     Route::get('/status/{id}', [FaqController::class, 'status'])->name('faqs.status');
// });
// Route::prefix('admin-blogs')->group(function () {
//     Route::get('/', [BlogController::class, 'index'])->name('admin-blogs.index');
//     Route::get('/create', [BlogController::class, 'create'])->name('admin-blogs.create');
//     Route::post('/store', [BlogController::class, 'store'])->name('admin-blogs.store');
//     Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('admin-blogs.edit');
//     Route::post('/update/{id}', [BlogController::class, 'update'])->name('admin-blogs.update');
//     Route::delete('/delete/{id}', [BlogController::class, 'destroy'])->name('admin-blogs.delete');
//     Route::get('/status/{id}', [BlogController::class, 'status'])->name('admin-blogs.status');
// });
// Route::prefix('specialization')->group(function () {
//     Route::get('/', [SpecializationController::class, 'index'])->name('specialization.index');
//     Route::get('/create', [SpecializationController::class, 'create'])->name('specialization.create');
//     Route::post('/store', [SpecializationController::class, 'store'])->name('specialization.store');
//     Route::get('/edit/{id}', [SpecializationController::class, 'edit'])->name('specialization.edit');
//     Route::post('/update/{id}', [SpecializationController::class, 'update'])->name('specialization.update');
//     Route::delete('/delete/{id}', [SpecializationController::class, 'destroy'])->name('specialization.delete');
//     Route::get('/status/{id}', [SpecializationController::class, 'status'])->name('specialization.status');
// });

// Route::prefix('gallery')->group(function () {
//     Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
//     Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
//     Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
//     Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
//     Route::post('/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
//     Route::delete('/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');
//     Route::get('/status/{id}', [GalleryController::class, 'status'])->name('gallery.status');
//     Route::get('/image-status/{id}', [GalleryController::class, 'toggleImageStatus'])->name('gallery.image-status');
// });
// Route::get('/gallery-list', [GalleryController::class, 'frontendGallery'])->name('gallery.frontend');
// Route::post('/enquiry/store', [EnquiryController::class, 'store'])->name('enquiry.store');



// Route::get('/test', function () {
//     return 'Laravel is working';
// });
// Route::get('/schools/{slug}', [SchoolController::class, 'details'])
//     ->name('schools.{slug}');
// Route::get('/{course}/{program}/{specialization}', [SpecializationController::class, 'show'])->name('specialization.show');
// Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
//     Route::resource('enquiries', EnquiryController::class);
//     Route::post('enquiries/toggle-status/{id}', [EnquiryController::class, 'toggleStatus'])->name('enquiries.toggle-status');
// });

require __DIR__ . '/settings.php';
