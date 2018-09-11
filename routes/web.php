<?php

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

Route::get('', function () {
    return view('welcome');
});


Route::get('/services/{slug}', 'QuickContactController@data');

Route::get('spa', function () {
    return view('spa');
});
Route::get('about', function () {
    return view('about');
});

Route::get('boutique', function () {
    return view('boutique');
});
Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('contact-us', function () {
    return view('contact');
});


Route::get('salon-services', function () {
    return view('salon-services');
});

Route::get('our_team', function () {
    return view('our_team');
});

Route::get('book-appointment', function () {
    return view('book_appoitment');
});

Route::get('/our_team_details', function () {
    return view('our_team_details');
});
Route::post('/contact_store', 'QuickContactController@store');
Route::post('web-register', 'BookAnAppointmentController@webRegisterPost');
Route::prefix('/admin')->group(function () {
  Route::get('/', 'Auth\LoginController@showLoginForm');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bookappointment', 'HomeController@bookAppointments');
Route::get('/edit-bookappointment/{id}', 'HomeController@editbookAppointments');
Route::post('/edit-bookappointment/{id}', 'HomeController@updatebookAppointments');
Route::get('/contactlist', 'HomeController@contact');
Route::get('/delete-contactlist/{id}', 'HomeController@deletequickcontact');

Route::get('/flashnews', 'FlashNewsController@index');
Route::get('/createfashnews', 'FlashNewsController@create');
Route::post('/storeflashnews', 'FlashNewsController@store');
Route::get('/editflashnews/{id}', 'FlashNewsController@edit');
Route::post('/editflashnews/{id}', 'FlashNewsController@update');
Route::get('/delete-flashnews/{id}', 'FlashNewsController@delete');





Route::get('/gallerytypeindex', 'GalleryTypesController@index');
Route::get('/creategallerytype', 'GalleryTypesController@create');
Route::post('/storegallerytype', 'GalleryTypesController@store');
Route::get('/gallerytypesedit/{id}', 'GalleryTypesController@edit');
Route::post('/gallerytypesedit/{id}', 'GalleryTypesController@update');
Route::get('/deletegallerytype/{id}', 'GalleryTypesController@delete');

Route::get('/gallerys', 'GallerysController@index');
Route::get('/creategallery', 'GallerysController@create');
Route::post('/storegallery', 'GallerysController@store');
Route::get('/editgallery/{id}', 'GallerysController@edit');
Route::post('/editgallery/{id}', 'GallerysController@update');
Route::get('/deletegallery/{id}', 'GallerysController@delete');


Route::get('/sociallinks', 'SocialLinksController@index');
Route::get('/createsociallink', 'SocialLinksController@create');
Route::post('/storesociallink', 'SocialLinksController@store');
Route::get('/editsociallink/{id}', 'SocialLinksController@edit');
Route::post('/editsociallink/{id}', 'SocialLinksController@update');
Route::get('/deletesocial/{id}', 'SocialLinksController@delete');


Route::get('/pages', 'PageController@index');
Route::get('/createpage', 'PageController@create');
Route::post('/storepage', 'PageController@store');
Route::get('/editpage/{id}', 'PageController@edit');
Route::post('/editpage/{id}', 'PageController@update');
Route::get('/deletepage/{id}', 'PageController@delete');

Route::get('/teamlist', 'TeamController@index');
Route::get('/createteam', 'TeamController@create');
Route::post('/storeteam', 'TeamController@store');
Route::get('/editteam/{id}', 'TeamController@edit');
Route::post('/editteam/{id}', 'TeamController@update');
Route::get('/deleteteam/{id}','TeamController@destory');


Route::get('/servicetypes', 'ServiceTypeController@index');
Route::get('/createservicetype', 'ServiceTypeController@create');
Route::post('/storeservicetype', 'ServiceTypeController@store');
Route::get('/servicetypeedit/{id}', 'ServiceTypeController@edit');
Route::post('/servicetypeedit/{id}', 'ServiceTypeController@update');
Route::get('/deleteservicetype/{id}', 'ServiceTypeController@delete');
Route::post('/deletesetyajax', 'ServiceTypeController@deleteajax');

Route::get('/services', 'ServicesController@index');
Route::get('/createservice', 'ServicesController@create');
Route::post('/storeservice', 'ServicesController@store');
Route::get('/serviceedit/{id}', 'ServicesController@edit');
Route::post('/serviceedit/{id}', 'ServicesController@update');
Route::get('/deleteservice/{id}', 'ServicesController@delete');

Route::get('/clients', 'ClientController@index');
Route::get('/createclient', 'ClientController@create');
Route::post('/storeclient', 'ClientController@store');
Route::get('/editclient/{id}', 'ClientController@edit');
Route::post('/editclient/{id}', 'ClientController@update');
Route::get('/deleteclient/{id}','ClientController@destory');

//banners
Route::get('/banners', 'BannerController@index');
Route::get('/createbanner', 'BannerController@create');
Route::post('/storebanner', 'BannerController@store');
Route::get('/banneredit/{id}', 'BannerController@edit');
Route::post('/banneredit/{id}', 'BannerController@update');
  });

