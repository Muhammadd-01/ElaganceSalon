<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;

//User Routes Start


Route::get('/login', function () {
    return view('auth.register');
});

Route::get('/', function () {
    return view('users.pages.welcome');

});


Route::view("/template","users.pages.template");

Route::view("/aboutus","users.pages.aboutus");

Route::view("/gallery","users.pages.gallery");

Route::view("/service1","users.pages.service1");
Route::view("/service2","users.pages.service2");
Route::view("/service3","users.pages.service3");
Route::view("/service4","users.pages.service4");
Route::view("/service5","users.pages.service5");
Route::view("/service6","users.pages.service6");
Route::view("/service7","users.pages.service7");
Route::view("/service8","users.pages.service8");
Route::view("/feedback","users.pages.feedback");
Route::view("/testimonals","users.pages.testimonals");
Route::view("/contact","users.pages.contact");
Route::view("/service","users.pages.service");
Route::view("/team","users.pages.team");
Route::view("/pricing","users.pages.pricing");
Route::view("/signup","auth.register");
Route::view("/login","auth.login");
Route::view("/blogclassic","users.pages.blog-classic");
Route::view("/appointment","users.pages.appointment");
Route::view("/aboutcompany","users.pages.about-company");


Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');


//User Routes End

//Admin Routes Start
Route::view("/dash","admin.dashboard");
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
Route::view("/User","admin.user");
Route::view("/createUser","admin.userCreate");

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/getUser', [App\Http\Controllers\AdminController::class, 'getUsers']);

Route::post('/users', [HomeController::class, 'store'])->name('user.store');

Route::get('/users/{id}/edit', [HomeController::class, 'edit'])->name('user.edit'); // To show the form to edit an existing user
Route::put('/users/{id}', [HomeController::class, 'update'])->name('user.update'); // To update a user
Route::delete('/users/{id}', [HomeController::class, 'destroy'])->name('user.destroy'); // To delete a user
// Route::get('/user/create', [HomeController::class, 'create'])->name('user.create'); // This handles the GET request to show the form
