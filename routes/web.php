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
|--------------------------------------------------------------------------
| Resourse Web Routes
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Best way to write Route
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
| Ultimatrue Routes mcamara
|--------------------------------------------------------------------------
*/

Auth::routes(['register' => false]);

Route::get('/', function(){
    return redirect ("login");
});
Route::get('/home', function(){
    return redirect ("login");
});
Route::get('/logout', function(){
    return redirect ("login");
});



//this route with auth

Route::group(
[
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
], function(){ 

 /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    
    //  ---------------------------Distruboter User Design
    //  Route::get('/Distributor/fromRequest',[DistributorController::class, 'fromRequest'])->name("Distributor.fromRequest"); 
    //  Route::get('/lookup/getCitiesByCountryId/{countryId}','lookupController@getCitiesByCountryId'); 
    //  Route::get('/Distributor/getAllDistributorByFilter','DistributorController@getAllDistributorByFilter'); 
    //  Route::resource('Distributor', DistributorController::class);

    //-------------------------Admin Distributor
     Route::resource('adminDistributor', 'adminDistributorController');
     Route::resource('RequestDistributor', 'RequestDistributorController');
     Route::resource('/admin/distributors', adminDistributorController::class);
    
     Route::resource('captionDistributor', 'captionDistributorController');

     Route::get('admin/edit-distributor', function () 
     {
            return view('admin.edit-distributor');
     });

    //-------------------------Users Routes
     Route::resource('/AdminUser', UserController::class);
     Route::get('/user', function () 
     {
        return view('admin.user.index');
     });

     Route::get('/caption', function () 
     {
        return view('user.caption-distributors');
     });


});

//this route without auth


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function(){
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/


    Route::get('/index', function () 
     {
        return view('user.index');
     });

     Route::get('/about', function () 
     {
        return view('user.about');
     });

     Route::get('/all_courses', function () 
     {
        return view('user.all_courses');
     });


});