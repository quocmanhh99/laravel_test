<?php

use App\Http\Controllers\Test\TestController;
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


// DEMO DEMO DEMO
Route::prefix('test/')->group(function () {

    Route::get('one', [TestController::class, 'one'])->name('test.one');
    // http://localhost/laravelTest/test/one
    Route::get('two', [TestController::class, 'two'])->name('test.two');
    // http://localhost/laravelTest/test/two
    Route::get('three', [TestController::class, 'three'])->name('test.three');
    // http://localhost/laravelTest/test/three

});
