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
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EnquiryController;

Route::get('/homw', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::view('/', 'web.pages.index');
Route::get('/', [WebHomeController::class, 'index'])->name('home');
Route::view('/about', 'web.pages.about');
Route::view('/contact', 'web.pages.contact');
Route::view('/chancellor', 'web.pages.chancellor');
Route::view('/pro-vice-chancellor', 'web.pages.pro-vice-chancellor');
Route::view('/vice-chancellor', 'web.pages.vice-chancellor');
Route::view('/registrar', 'web.pages.registrar');
Route::view('/director', 'web.pages.director');
Route::view('/coe', 'web.pages.coe');
// Route::view('/schools-and-departments', 'web.pages.schools-and-departments');
Route::get('/school', [SchoolController::class, 'show'])->name('schools.show');
Route::get('/program', [ProgramController::class, 'show'])->name('programs');
Route::get('/program/{slug}', [ProgramController::class, 'details'])->name('program.details');
Route::get('/school/{slug}', [SchoolController::class, 'details'])->name('school.details');
Route::get('/course/{slug}', [CourseController::class, 'details'])->name('course.details');
// Route::view('/programs-listing', 'web.pages.programs');
Route::view('/schools-departments-details', 'web.pages.schools-departments-details');
// Route::view('/blog', 'web.pages.blog');
// Route::view('/blog-details', 'web.pages.blog-details');
Route::get('/blogs', [BlogController::class, 'blogListing'])->name('blogs.listing');
Route::get('/blog/{slug}', [BlogController::class, 'blogDetails'])->name('blogs.details');
// Route::view('/all-events', 'web.pages.events');
Route::get('/events', [EventsPostController::class, 'show'])->name('events');
Route::get('/event/{slug}', [EventsPostController::class, 'details'])->name('events-details');
// Route::view('/event-details', 'web.pages.event-details');
Route::view('/iqac', 'web.pages.iqac');

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
Route::middleware('guest')->get('/cms', function () {
    return view('admin.index');
})->name('admin.login');
Route::get('/dashboard', function () {
    return view('admin.home');
})->middleware(['auth', 'verified'])->name('dashboard'); // route for frontend
// Route::get('/schools-and-departments', [SchoolController::class, 'show'])->name('schools.show');
Route::prefix('admin/events')->group(function () {
    Route::get('/', [EventsCategoryController::class, 'index'])->name('admin.events.index');
    Route::get('/create', [EventsCategoryController::class, 'create'])->name('admin.events.create');
    Route::post('/store', [EventsCategoryController::class, 'store'])->name('admin.events.store');
    Route::get('/edit/{id}', [EventsCategoryController::class, 'edit'])->name('admin.events.edit');
    Route::post('/update/{id}', [EventsCategoryController::class, 'update'])->name('admin.events.update');
    Route::delete('/delete/{id}', [EventsCategoryController::class, 'destroy'])->name('admin.events.delete');
    Route::get('/status/{id}', [EventsCategoryController::class, 'status'])->name('admin.events.status');
});
// Route::get('/notice-and-events', [EventsCategoryController::class, 'noticeAndEvents'])->name('notice.events');
// Route::get('/notice-and-events/{slug}', [EventsCategoryController::class, 'showPost'])->name('post.details');
Route::prefix('admin/posts')->group(function () {
    Route::get('/', [EventsPostController::class, 'index'])->name('admin.posts.index');
    Route::get('/create', [EventsPostController::class, 'create'])->name('admin.posts.create');
    Route::post('/store', [EventsPostController::class, 'store'])->name('admin.posts.store');
    Route::get('/edit/{id}', [EventsPostController::class, 'edit'])->name('admin.posts.edit');
    Route::post('/update/{id}', [EventsPostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/delete/{id}', [EventsPostController::class, 'destroy'])->name('admin.posts.delete');
    Route::get('/status/{id}', [EventsPostController::class, 'status'])->name('admin.posts.status');
});
Route::prefix('admin/schools')->group(function () {
    Route::get('/', [SchoolController::class, 'index'])->name('admin.schools.index');
    Route::get('/create', [SchoolController::class, 'create'])->name('admin.schools.create');
    Route::post('/store', [SchoolController::class, 'store'])->name('admin.schools.store');
    Route::get('/edit/{id}', [SchoolController::class, 'edit'])->name('admin.schools.edit');
    Route::post('/update/{id}', [SchoolController::class, 'update'])->name('admin.schools.update');
    Route::delete('/delete/{id}', [SchoolController::class, 'destroy'])->name('admin.schools.delete');
    Route::get('/status/{id}', [SchoolController::class, 'status'])->name('admin.schools.status');
});
Route::prefix('admin/programs')->group(function () {
    Route::get('/', [ProgramController::class, 'index'])->name('admin.programs.index');
    Route::get('/get-categories-by-school', [ProgramController::class, 'getCategoriesBySchool'])->name('admin.programs.getCategoriesBySchool');
    Route::get('/create', [ProgramController::class, 'create'])->name('admin.programs.create');
    Route::post('/store', [ProgramController::class, 'store'])->name('admin.programs.store');
    Route::get('/edit/{id}', [ProgramController::class, 'edit'])->name('admin.programs.edit');
    Route::post('/update/{id}', [ProgramController::class, 'update'])->name('admin.programs.update');
    Route::delete('/delete/{id}', [ProgramController::class, 'destroy'])->name('admin.programs.delete');
    Route::get('/status/{id}', [ProgramController::class, 'status'])->name('admin.programs.status');
});
Route::prefix('admin/courses')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('admin.courses.index');
    Route::get('/create', [CourseController::class, 'create'])->name('admin.courses.create');

    Route::post('/store', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::post('/update/{id}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/delete/{id}', [CourseController::class, 'destroy'])->name('admin.courses.delete');
    Route::get('/status/{id}', [CourseController::class, 'status'])->name('admin.courses.status');
});
Route::prefix('admin/testimonials')->group(function () {
    Route::get('/', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
    Route::get('/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('/store', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/delete/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.delete');
    Route::get('/status/{id}', [TestimonialController::class, 'status'])->name('admin.testimonials.status');
});
Route::prefix('admin/faqs')->group(function () {
    Route::get('/', [FaqController::class, 'index'])->name('admin.faqs.index');
    Route::get('/create', [FaqController::class, 'create'])->name('admin.faqs.create');
    Route::post('/store', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('admin.faqs.edit');
    Route::post('/update/{id}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::delete('/delete/{id}', [FaqController::class, 'destroy'])->name('admin.faqs.delete');
    Route::get('/status/{id}', [FaqController::class, 'status'])->name('admin.faqs.status');
});
Route::prefix('admin/blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/store', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::post('/update/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.delete');
    Route::get('/status/{id}', [BlogController::class, 'status'])->name('admin.blogs.status');
});
Route::prefix('admin/specialization')->group(function () {
    Route::get('/', [SpecializationController::class, 'index'])->name('admin.specialization.index');
    Route::get('/create', [SpecializationController::class, 'create'])->name('admin.specialization.create');
    Route::post('/store', [SpecializationController::class, 'store'])->name('admin.specialization.store');
    Route::get('/edit/{id}', [SpecializationController::class, 'edit'])->name('admin.specialization.edit');
    Route::post('/update/{id}', [SpecializationController::class, 'update'])->name('admin.specialization.update');
    Route::delete('/delete/{id}', [SpecializationController::class, 'destroy'])->name('admin.specialization.delete');
    Route::get('/status/{id}', [SpecializationController::class, 'status'])->name('admin.specialization.status');
});
Route::prefix('admin/category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
    Route::get('/status/{id}', [CategoryController::class, 'status'])->name('admin.category.status');
});
Route::prefix('admin/gallery')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::get('/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
    Route::post('/update/{id}', [GalleryController::class, 'update'])->name('admin.gallery.update');
    Route::delete('/delete/{id}', [GalleryController::class, 'destroy'])->name('admin.gallery.delete');
    Route::get('/status/{id}', [GalleryController::class, 'status'])->name('admin.gallery.status');
    Route::get('/image-status/{id}', [GalleryController::class, 'toggleImageStatus'])->name('admin.gallery.image-status');
});
// Route::get('/gallery-list', [GalleryController::class, 'frontendGallery'])->name('admin.gallery.frontend');
// Route::post('/enquiry/store', [EnquiryController::class, 'store'])->name('admin.enquiry.store');



// Route::get('/test', function () {
//     return 'Laravel is working';
// });
// Route::get('/schools/{slug}', [SchoolController::class, 'details'])
//     ->name('schools.{slug}');
// Route::get('/{course}/{program}/{specialization}', [SpecializationController::class, 'show'])->name('specialization.show');
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    // Route::prefix('admin/')->group(function () {
    Route::resource('enquiries', EnquiryController::class);
    Route::post('enquiries/toggle-status/{id}', [EnquiryController::class, 'toggleStatus'])->name('enquiries.toggle-status');
    // });
});

require __DIR__ . '/settings.php';
