<?php
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class,'home'])->name("home");

Route::get('/contact', [FrontController::class,'contactForm'])->name("contact.form");

Route::post('/contact', [FrontController::class,'contactStore'])->name("contact.store");

Route::get('/contact/{id}', [FrontController::class,'details'])->name("contact.details");

Route::put('/contact/{id}', [FrontController::class,'edit'])->name("contact.edit");

Route::delete('/contact/{id}', [FrontController::class,'delete'])->name("contact.delete");
