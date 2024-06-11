<?php

use Illuminate\Support\Facades\Route;
use Statamic\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
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
use App\Http\Controllers\FormController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::statamic('search', 'search', [
   'title' => 'Search Results'
]);

Route::post('/form-submit', [FormController::class, 'submit'])->name('form.submit');