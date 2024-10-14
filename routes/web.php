<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view("/template","pages.template");
Route::view("/index","pages.index");
Route::view("/aboutus","pages.aboutus");
Route::view("/index2","pages.index2");
Route::view("/index3","pages.index3");
Route::view("/index4","pages.index4");
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
