<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\UserController;
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

// all listing
// Route::get('/', [ListingController::class, 'index']);
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index']);

// single listing


Route::get('/detail/{id}', [JobController::class, 'show']);
Route::get('/job', [JobController::class, 'index']);
Route::post('/search', [JobController::class, 'search']);
Route::post('/cv_submit', [CvController::class, 'store']);
Route::get('/cv', [CvController::class, 'index']);
Route::get('/job/create', [JobController::class, 'create']);

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
/*
Testing code
Route::get('/hello', function(){
    return response("<h1>Hello World</h1>",200);
});

Route::get('/post/{id}', function($id){
    return response('Post ' .$id);
})->where('id','[0-9]+');

Route::get('/search', function(Request $request){
    return $request->name;
});
*/