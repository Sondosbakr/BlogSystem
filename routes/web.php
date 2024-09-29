<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view ('welcome');
// });
Route::get('/', [HomeController::class, 'homepage']);

Route::get("register", [AuthController::class, "register"])->name("register");
Route::post("register", [AuthController::class, "registerPost"])->name("registerPost");
Route::get("login", [AuthController::class, "login"])->name("login");
Route::post("login", [AuthController::class, "loginPost"])->name("loginPost");
// ///////////
Route::get("home", [HomeController::class, "index"])->name("home");
Route::get("logout", [AuthController::class, "logout"])->name("logout");

Route::get("post_page", [AdminController::class, "post_page"]);
Route::post("add_post",[AdminController::class, "add_post"])->name("add_post");

// Route::get("show_post", [AdminController::class, "show_post"]);

Route::get("delete_post/{id}", [AdminController::class, "delete_post"])->name('delete_post');

Route::get("edit_page/{id}", [AdminController::class, "edit_page"])->name('edit_page');
Route::post("update_post/{id}", [AdminController::class, "update_post"])->name('update_post');



// Route::get("post_details/{id}", [HomeController::class, "post_details"])->name('post_details');

Route::get('create_post', [HomeController::class, 'create_post'])->name('create_post');
Route::post('user_post', [HomeController::class, 'user_post'])->name('user_post');

Route::get('my_post',[HomeController::class, 'my_post'])->name('my_post');

Route::get('my_post_delete/{id}', [HomeController::class, 'my_post_delete'])->name('my_post_delete');

Route::get('post_page/{id}', [HomeController::class, 'post_page'])->name('post_page');
Route::post('update_post_data/{id}', [HomeController::class, 'update_post_data'])->name('update_post_data');


Route::get("accept_post/{id}", [AdminController::class, "accept_post"])->name('accept_post');
Route::get("reject_post/{id}", [AdminController::class, "reject_post"])->name('reject_post');


