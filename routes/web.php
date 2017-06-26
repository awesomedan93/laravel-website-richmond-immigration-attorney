<?php
//// FRONT END PAGES
///
Route::group([
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ], function() {

    Route::get('/', 'Frontend\PageController@show')->name('pages.home');

    Route::get('/about', 'Frontend\PageController@show')->name('pages.about');
    Route::get('/cases', 'Frontend\PageController@show')->name('pages.cases');
    Route::get('/cases/criminal-defense', 'Frontend\PageController@show')->name('pages.cases.criminal_defense');
    Route::get('/cases/immigration_law', 'Frontend\PageController@show')->name('pages.cases.immigration_law');
    Route::get('/cases/traffic-law','Frontend\PageController@show')->name('pages.cases.traffic_law');
    Route::get('/cases/dui-law', 'Frontend\PageController@show')->name('pages.cases.dui_law');
    Route::get('/attorneys', 'Frontend\PageController@show')->name('pages.attorneys');
    Route::get('/attorneys/raul-novo', 'Frontend\PageController@show')->name('pages.raul_novo');
    Route::get('/attorneys/soulmaz-taghavi', 'Frontend\PageController@show')->name('pages.soulmaz_taghavi');
    Route::get('/reviews', 'Frontend\PageController@show')->name('pages.reviews');
    Route::get('/blog', 'Frontend\PostController@index');

    Route::get('/blog/{slug}', 'Frontend\PostController@show')->name('blog.post');

    Route::get('/contact', 'Frontend\PageController@show')->name('pages.contact');
    Route::get('/terms-and-conditions', 'Frontend\PostController@show')->name('pages.terms_and_conditions');

    Route::post('/contact', ['as' => 'contact_us', 'uses' => 'Frontend\PageController@sendEmail']);
});

//BACKEND

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard/seo/{key}', 'Backend\PageController@edit');
    Route::post('/dashboard/seo/{key}', 'Backend\PageController@update')->name('blog.seo.update');

    Route::resource('/dashboard/blog', 'Backend\PostController');

    Route::delete('/dashboard/blog/post/{id}', 'Backend\PostController@destroy');

});