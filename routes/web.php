<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


//User Routes Start

Route::get('/', function () {
    return view('users.pages.welcome');
});


Route::view("/template","users.pages.template");

Route::view("/aboutus","users.pages.aboutus");

Route::view("/gallery","users.pages.gallery");
Route::view("/contact","users.pages.contact");
Route::view("/service","users.pages.service");
Route::view("/service2","users.pages.service2");
Route::view("/team","users.pages.team");
Route::view("/pricing","users.pages.pricing");
Route::view("/blogSingle","users.pages.blog-single");
Route::view("/blogGrid","users.pages.blog-grid");
Route::view("/blogClassic","users.pages.blog-classic");
Route::view("/appointment","users.pages.appointment");
Route::view("/aboutCompany","users.pages.about-company");
Route::view("/user404","users.pages.404");

//User Routes End

//Admin Routes Start
Route::view("/dash","admin.dashboard");
Route::view("/404","admin.404");
Route::view("/blank","admin.blank");
Route::view("/button","admin.button");
Route::view("/chart","admin.chart");
Route::view("/element","admin.element");
Route::view("/form","admin.form");
Route::view("/adminSignIn","admin.signin");
Route::view("/adminSignUp","admin.signup");
Route::view("/table","admin.table");
Route::view("/spin","admin.spinTem");
Route::view("/index","admin.index");
Route::view("/typo","admin.typography");
Route::view("/widget","admin.widget");

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
