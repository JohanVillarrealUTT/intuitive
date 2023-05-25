<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Mail\contactUsMailable;
use Illuminate\Support\Facades\Mail;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', [ContactUsController::class,'index'])->name('contactUs.index');
Route::post('/', [ContactUsController::class,'store'])->name('contactUs.store');


/* Route::get('contactanos', function(){

    $correo = new ContactUsMailable;
    Mail::to('hola@gmail.com')->send($correo);
        return "mensaje enviado";
});
 */
