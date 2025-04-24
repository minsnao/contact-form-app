<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::match(['get', 'post'], '/', [ContactController::class, 'form'])->name('contact.form');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');


Route::post('/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/thanks', function (){
    \Log::info('Request method: ' . request()->method()); 
    if (!session('thanks_access')){
        return redirect('/');
    }
    return view('thanks');
})->name('contact.thanks');

//Route::get('/register', fn() => view('register'))->name('register');
//fortifyが内部で用意してくれている
//Route::get('/login', fn() => view('login'))->name('login');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
// ログアウトのルート
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/admin', [AdminController::class, 'index']);





// この辺再復習項目