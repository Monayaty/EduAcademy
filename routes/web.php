<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\EventSpeakerController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryGalleryController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FqaController;

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




Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/','App\Http\Controllers\HomeController@index')->name('Home');
    Route::get('/index','App\Http\Controllers\HomeController@index');
    Route::get('/about-us','App\Http\Controllers\HomeController@AboutUs')->name('aboutus');
    Route::get('/contact-us','App\Http\Controllers\HomeController@ContactUs')->name('contactus');
    Route::get('/course_details/{course_id}','App\Http\Controllers\HomeController@CourseDetails')->name('CourseDetails');
    Route::get('/events','App\Http\Controllers\HomeController@EventPage')->name('EventPage');
    Route::get('/event-details/{event_id}','App\Http\Controllers\HomeController@EventDetails')->name('EventDetails');
        
   });
 
   Route::get('/welcome', function () {
    return view('welcome');
  });
  
  
  
  Route::get('/getsubcategories/{id}','App\Http\Controllers\MainCategoryController@LoadSubCategory');
  
  Route::post('/frontendregister','App\Http\Controllers\HomeController@Register');
  
  