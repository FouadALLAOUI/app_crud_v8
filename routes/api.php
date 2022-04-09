<?php
use App\Http\Controllers\DocummentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/documments', [DocummentController::class,'index']); // get all doc
//Route::post('/documments', [DocummentController::class,'store']); // add new doc

//Route::resource('documments', DocummentController::class); // all function (CRUD) without authentif 
//Route::get('/documments/search/{name}', [DocummentController::class,'search']); // for search by name

Route::middleware(['middleware' => ['auth:sanctum']], function () {

    Route::get('/documments/search/{name}', [DocummentController::class,'search']);

});



 
 


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
