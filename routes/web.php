<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});


Route::view("/template","pages.template");

Route::view("/aboutus","pages.aboutus");

Route::view("/gallery","pages.gallery");
Route::view("/contact","pages.contact");
Route::view("/service","pages.service");
Route::view("/service2","pages.service2");
Route::view("/team","pages.team");
Route::view("/pricing","pages.pricing");
Route::view("/blogSingle","pages.blog-single");
Route::view("/blogGrid","pages.blog-grid");
Route::view("/blogClassic","pages.blog-classic");
Route::view("/appointment","pages.appointment");
Route::view("/aboutCompany","pages.about-company");
Route::view("/404","pages.404");
