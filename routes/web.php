<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Questions;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuizController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/questions", [QuestionsController::class, "index"])->name("questions.all")->middleware(IsAdmin::class);

Route::get("/questions/create", [QuestionsController::class, "create"])->name("questions.create")->middleware(IsAdmin::class);

Route::post("/questions/save_question", [QuestionsController::class, "save"])->name("questions.save")->middleware(IsAdmin::class);

Route::get("/questions/{question}/edit", [QuestionsController::class, "edit"])->name("questions.edit")->middleware(IsAdmin::class);

Route::put("/questions/{question}/update", [QuestionsController::class, "update"])->name("questions.update")->middleware(IsAdmin::class);

Route::delete("/questions/{question}/delete", [QuestionsController::class, "delete"])->name("questions.delete")->middleware(IsAdmin::class);

Route::get("/quiz", [QuizController::class, "index"])->name("quiz")->middleware('auth');

Route::get("/quiz/result", [QuizController::class, "result"])->name("quiz.result")->middleware('auth');

Route::get("/users/login", [LoginController::class, "login"])->name("login");

Route::post("/users/post-login", [LoginController::class, "postLogin"])->name("post.login");

Route::post("/users/logout", [LoginController::class, "logout"])->name("logout")->middleware('auth');



