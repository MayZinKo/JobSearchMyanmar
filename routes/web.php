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
Route::get('/logout', [UserController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/joblist',[JobController::class, 'list']);

    Route::get('/job_edit/{id}',[JobController::class, 'edit']);
    Route::post('/job/update', [JobController::class, 'update']);

    Route::get('/insert',[JobController::class, 'create']);
    Route::post('/job/save', [JobController::class, 'store']);

    Route::post('/delete',[JobController::class, 'destroy']);
    Route::get('/delete/{id}',[JobController::class, 'destroy_']);
});


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