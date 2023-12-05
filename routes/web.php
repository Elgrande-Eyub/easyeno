<?php

use App\Http\Controllers\appointment;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return redirect()->route('index-en');;
});

Route::get('/en', function () {
    return view('english.index');
})->name('index-en');;

Route::get('en-contact', function () {
    return view('english.contact');
})->name('contact-en');

Route::get('en-about', function () {
    return view('english.about');
})->name('about-en');

Route::get('en-services', function () {
    return view('english.showcase-service');
})->name('service-en');

/* Route::get('/en-services', function () {
    return view('english.showcase-service');
})->name('service-en'); */

Route::get('/en-detail', function () {
    return view('english.project-details1');
})->name('det-en');

Route::get('/en-video', function () {
    return view('english.productVideo');
})->name('en-productVideo');

Route::get('/en-photographe', function () {
    return view('english.productPhotographe');
})->name('en-productPhotographe');

Route::get('/en-confirme/{id}', function ($id) {
    return view('english.confirme', ['id' => $id]);
})->name('en-confirmeOrder');

Route::get('/en-thank', function () {
    return view('english.thankyou');
})->name('en-thank');

Route::post('/en-confirmed', [appointment::class,'storeEn'])->name('en-confirmedOrder');

// arabic
Route::get('/ar', function () {
    return view('arabic.index');
})->name('index-ar');


Route::get('/ar-contact', function () {
    return view('arabic.contact');
})->name('contact-ar');

Route::get('/ar-about', function () {
    return view('arabic.about');
})->name('about-ar');

Route::get('/ar-services', function () {
    return view('arabic.showcase-service');
})->name('service-ar');

Route::get('/ar-detail', function () {
    return view('arabic.project-details1');
})->name('det-ar');

Route::get('/ar-video', function () {
    return view('arabic.productVideo');
})->name('ar-productVideo');

Route::get('/ar-photographe', function () {
    return view('arabic.productPhotographe');
})->name('ar-productPhotographe');

Route::get('/ar-confirme/{id}', function ($id) {
    return view('arabic.confirme', ['id' => $id]);
})->name('ar-confirmeOrder');


Route::get('/ar-thank', function () {
    return view('arabic.thankyou');
})->name('ar-thank');

Route::post('/ar-confirmed', [appointment::class,'store'])->name('ar-confirmedOrder');
// french
Route::get('/fr', function () {
    return view('french.index');
})->name('index-fr');


Route::get('/fr-contact', function () {
    return view('french.contact');
})->name('contact-fr');

Route::get('/fr-about', function () {
    return view('french.about');
})->name('about-fr');

Route::get('/fr-services', function () {
    return view('french.showcase-service');
})->name('service-fr');

Route::get('/fr-detail', function () {
    return view('french.project-details1');
})->name('det-en');

Route::get('/fr-video', function () {
    return view('french.productVideo');
})->name('fr-productVideo');

Route::get('/fr-photographe', function () {
    return view('french.productPhotographe');
})->name('fr-productPhotographe');

Route::get('/fr-confirme/{id}', function ($id) {
    return view('french.confirme', ['id' => $id]);
})->name('fr-confirmeOrder');

Route::get('/fr-thank', function () {
    return view('french.thankyou');
})->name('fr-thank');

Route::post('/fr-confirmed', [appointment::class,'storeFr'])->name('fr-confirmedOrder');


Route::post('/contactForm',[contactController::class,'store'])->name('contactPost');

Route::get('/easyeno-services', function () {
    $file = public_path('assets/files/Easyenomedia-Services.pdf');
    $headers = ['Content-Type: application/pdf'];
    return response()->file($file, $headers);
})->name('viewPDF');
