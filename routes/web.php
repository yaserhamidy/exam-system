<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adminController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\catagoryController;
use App\Http\Controllers\subController;
use App\Http\Controllers\questionController;
use App\Http\Controllers\resultController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [homecontroller::class, 'show'])->name('welcome');
Route::get('exam_page', [homecontroller::class, 'exam_page'])->name('exam_page');
Route::get('/search', [SearchController::class, 'search'])->name('search');


// result routes
Route::get('show_result', [resultController::class, 'show'])->name('show_result');


// category routes
Route::get('show_catagory', [catagoryController::class, 'show'])->name('show_catagory');
Route::get('add_catagory', [catagoryController::class, 'add'])->name('add_catagory');
Route::post('addCatagory', [catagoryController::class, 'addCatagory'])->name('addCatagory');
Route::get('/catagoryDelete/{cat_id}', [catagoryController::class , 'catagoryDelete'])->name('catagoryDelete');
Route::get('/catagoryEdit/{cat_id}', [catagoryController::class , 'catagoryEdit'])->name('catagoryEdit');
Route::post('EditCatagory', [catagoryController::class, 'EditCatagory'])->name('EditCatagory');

// sub_classess route   

Route::get('show_sub', [subController::class, 'show'])->name('show_sub');
Route::get('add_sub', [subController::class, 'add'])->name('add_sub');
Route::post('addSubject', [subController::class, 'addSubject'])->name('addSubject');
Route::get('/subjectDelete/{sub_classesses_id}', [subController::class , 'subjectDelete'])->name('subjectDelete');
Route::get('/subjectEdit/{sub_classesses_id}', [subController::class , 'subjectEdit'])->name('subjectEdit');
Route::post('EditSubject', [subController::class, 'EditSubject'])->name('EditSubject');
Route::get('subjectActivate/{sub_classesses_id}', [subController::class, 'activateSubject'])->name('activate_sub');
Route::get('show_questions/{sub_classesses_id}', [subController::class, 'show_questions'])->name('show_questions');

Route::get('subjectDeactivate/{sub_classesses_id}', [subController::class, 'deactivateSubject'])->name('deactivate_sub');

// question routes

Route::get('show_question', [questionController::class, 'show'])->name('show_question');
Route::get('add_question', [questionController::class, 'add'])->name('add_question');
Route::post('addQuestion', [questionController::class, 'addQuestion'])->name('addQuestion');
Route::get('/questionDelete/{question_id}', [questionController::class , 'questionDelete'])->name('questionDelete');
Route::get('/questionEdit/{question_id}', [questionController::class , 'questionEdit'])->name('questionEdit');
Route::post('EditQuestion', [questionController::class, 'EditQuestion'])->name('EditQuestion');

// student routes
Route::get('show_student', [studentController::class, 'show'])->name('show_student');
Route::get('add_student', [studentController::class, 'add'])->name('add_student');
Route::post('addStudent', [studentController::class, 'addStudent'])->name('addStudent');
Route::get('/studentDelete/{id}', [studentController::class , 'studentDelete'])->name('studentDelete');
Route::get('/studentEdit/{id}', [studentController::class , 'studentEdit'])->name('studentEdit');
Route::post('EditStudent', [studentController::class, 'EditStudent'])->name('EditStudent');







Route::get('/admin', [admincontroller::class , 'admin']);

