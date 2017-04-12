<?php

Route::group([
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ], function() {

    Route::get('/', function () {
        return view('frontend.index');
    });
    Route::get('/about', function () {
        return view('frontend.about');
    });
    Route::get('/cases', function () {
        return view('frontend.cases');
    });
    Route::get('/cases/criminal-defense', function () {
        return view('frontend.case_criminal_defense');
    });
    Route::get('/cases/immigration_law', function () {
        return view('frontend.case_immigration_law');
    });
    Route::get('/cases/traffic-law', function () {
        return view('frontend.case_traffic_law');
    });
    Route::get('/cases/dui-law', function () {
        return view('frontend.case_dui_law');
    });
    Route::get('/attorneys', function () {
        return view('frontend.attorneys');
    });
    Route::get('/attorneys/raul-novo', function () {
        return view('frontend.lawyer');
    });
    Route::get('/attorneys/soulmaz-taghavi', function () {
        return view('frontend.lawyer2');
    });
    Route::get('/testimonials', function () {
        return view('frontend.testimonials');
    });
    Route::get('/blog', function () {
        return view('frontend.blog');
    });
    Route::get('/contact', function () {
        return view('frontend.contact');
    });
    Route::get('/terms-and-conditions', function () {
        return view('frontend.terms-and-conditions');
    });
});

//// FRONT END PAGES

Auth::routes();

Route::get('/dashboard/blog', 'Backend\PostController@index');
