<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use Carbon\Carbon;








//Route::get('/time', function () {
    //return response()->json([
        //'current_time' => Carbon::now('Asia/Tehran')->toDateTimeString()
   // ]);
//});




//use App\Http\Controllers\TimeController;

//Route::get('/time', [TimeController::class, 'now']);





//use Illuminate\Support\Facades\Route;

//Route::get('/name', function () {
   // return 'sahar';
//});






//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Api\NameController;

//Route::get('/name', [NameController::class, 'index']);





//use App\Http\Controllers\Api\NameController;

//Route::get('/name', [NameController::class, 'index']);





//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;

//Route::get('/first', [UserController::class, 'index']);





//Route::post('/register', [UserController::class, 'register']);
//Route::get('/users', [UserController::class, 'index']);







//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;






//use Illuminate\Support\Facades\Route;


//Route::get('/name', function(){
//return response()->json([
  // 'name'=>'sahar',
  // 'fristname'=>'mst'
//]);
//});

// routes/api.php
//use App\Http\Controllers\Api\TimeController;
//use Illuminate\Support\Facades\Route;

//Route::get('/time', [TimeController::class, 'now']);




// class Controller extends BaseController
// {
//     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
// }


// use App\Http\Controllers\ProgressController;

// Route::get('/progress', [ProgressController::class, 'index']);




//get → نوع درخواست HTTP (GET، POST، PUT، DELETE و …)

//ProgressController → کنترلری که مسئول این مسیر است

//index → متدی در کنترلر که پاسخ را برمی‌گرداند







// Route::post('/data',function(){
// return response()->json(["course_name"=>"laravel"]);
// });



// Route::post('/data',function(Request $request){
//    return response()->json ([
//       "name_user" =>$request-> name,
//    "email_user" =>$request-> email,
// ]);
// });

// Route ::post ('/register',[UserController ::class, 'store']);




//use App\Http\Controllers\ProjectController;

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/projects', [ProjectController::class, 'index']);
//     Route::post('/projects', [ProjectController::class, 'store']);
// });




use App\Http\Controllers\ProjectController;
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('projects', ProjectController::class);
    Route::post('/projects/{project}/tasks', [TaskController::class,'store']);
});







