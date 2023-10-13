<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\DynamicFormsResourceController; 
use App\Http\Controllers\DynamicFormsStorageController;
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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');

    });    
    Route::prefix('dashboard')->group(function () {
        Route::get('/leads/create','App\Http\Controllers\LeadController@create')->name('leads.create');
        Route::post('/leads/store','App\Http\Controllers\LeadController@store')->name('leads.store');
        Route::get('/leads/index', 'App\Http\Controllers\LeadController@index')->name('leads.index');
        Route::get('/leads/search', 'App\Http\Controllers\LeadController@search')->name('leads.search');
        Route::put('/leads/update/{id}', 'App\Http\Controllers\LeadController@update')->name('leads.update');
        Route::delete('/leads/{id}', 'LeadController@destroy')->name('leads.destroy');
        Route::get('/leads/edit/{id}','App\Http\Controllers\LeadController@edit')->name('leads.edit');
        Route::get('/formBuilder','App\Http\Controllers\FormController@index')->name('formBuilder');

    });

    Route::get('createform', function () {
        return view('createform');
    })->name('createform');

    Route::get('/pages/lead/create', function () {
        return view('pages.lead.create');
    })->name('pages.lead.create');

    Route::get('/pages/lead/phase2', function () {
        return view('pages.lead.phase2');
    })->name('pages.lead.phase2');


    Route::get('/pages/lead/phase3', function () {
        return view('pages.lead.phase3');
    })->name('pages.lead.phase3');


    Route::get('/pages/lead/phase4', function () {
        return view('pages.lead.phase4');
    })->name('pages.lead.phase4');


    Route::get('/pages/lead/phase5', function () {
        return view('pages.lead.phase5');
    })->name('pages.lead.phase5');


    Route::get('/pages/lead/phase6', function () {
        return view('pages.lead.phase6');
    })->name('pages.lead.phase6');


    Route::get('/pages/lead/phase7', function () {
        return view('pages.lead.phase7');
    })->name('pages.lead.phase7');

    
    
});
Route::prefix('dynamic-forms')->name('dynamic-forms.')->group(function () {
    // Dummy route so we can use the route() helper to give formiojs the base path for this group
   // Route::get('/')->name('index');
   Route::get('/forms','App\Http\Controllers\DynamicFormsResourceController@index')->name('index');
    // Route::post('storage/s3', [App\Http\Controllers\DynamicFormsStorageController::class, 'storeS3'])
    //     ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

    // Route::get('storage/s3', [Controllers\DynamicFormsStorageController::class, 'showS3'])->name('S3-file-download');
    // Route::get('storage/s3/{fileKey}', [Controllers\DynamicFormsStorageController::class, 'showS3'])->name('S3-file-redirect');

    // Route::post('storage/url', [Controllers\DynamicFormsStorageController::class, 'storeURL'])
    //     ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

    // Route::get('storage/url', [App\Http\Controllers\DynamicFormsStorageController::class, 'showURL'])->name('url-file-download');
    // Route::delete('storage/url', [App\Http\Controllers\DynamicFormsStorageController::class, 'deleteURL']);

    // Route::get('form', [App\Http\Controllers\DynamicFormsResourceController::class, 'index']);
    // Route::get('form/{resource}', [App\Http\Controllers\DynamicFormsResourceController::class, 'resource']);
    // Route::get('form/{resource}/submission', [App\Http\Controllers\DynamicFormsResourceController::class, 'resourceSubmissions']);

});
