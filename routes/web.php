<?php

use Illuminate\Support\Facades\Route;

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
Route::view("/404","users.pages.404");
Route::view("/templateAdmin","admin.pages.template");
Route::view("/index","admin.pages.index");
