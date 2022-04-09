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

Route::get('/documments', [DocummentController::class,'index']);


Route::post('/documments', function(){
    return Documment::create([
        'propr' => 'Fouad',
        'intitule' => 'Art of war',
        'auteur' => 'Fouad ALLAOUI',
        'description' => 'fnezfjzehzfhez feznfzejfzoeuf zezehfjezouz zefze',
        'type_document' => 'PDF',
        'visibility' => True,
        'archive' => TRUE
    ]);
});





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
