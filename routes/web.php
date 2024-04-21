<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PortfolioController;


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

Route::get('/', function () {
    return view('welcome');
});
 


Route::get('/home', function () {
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/image', function () {
    return view('image');
});

Route::get('/portfolioform1', function () {
    return view('portfolioform1');
});

Route::get('/portfolioform2', function () {
    return view('portfolioform2');
});

Route::get('/portfolioform3', function () {
    return view('portfolioform3');
});

Route::get('/portfolioform4', function () {
    return view('portfolioform4');
});




Route::get('/delete', [ProfileController::class, 'showDeleteForm']);
Route::post('/profile/delete', [ProfileController::class, 'deleteProfile'])->name('profile.deleteForm');




Route::post('/edit', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/home', [ProfileController::class, 'showhome'])->name('profile.show');
Route::get('/about', [ProfileController::class, 'showProfile'])->name('profile.show');

//Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::get('portfolio/{id}/edit/{formNumber}', [PortfolioController::class, 'edit'])->name('portfolio.edit');

Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
/*


Route::get('portfolio/{id}/edit1', PortfolioController::class, 'edit')->name('portfolio.edit1');
Route::get('portfolio/{id}/edit2', PortfolioController::class, 'edit')->name('portfolio.edit2');
Route::get('portfolio/{id}/edit3', PortfolioController::class, 'edit')->name('portfolio.edit3');
Route::get('portfolio/{id}/edit4', PortfolioController::class, 'edit')->name('portfolio.edit4');
*/
