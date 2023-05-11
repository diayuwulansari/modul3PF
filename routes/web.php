<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/routing', function() {
    return view('routing');
});

Route::get('/basic_routing', function() {
    return 'Hello World';
});

Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});

Route::get('username/{name?}', function($name = null) {
    return 'Username: '.$name;
});

Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');


// Route::get('/route_priority/{rpId}', function($rpId) {
//     return "This is Route One";
// });
Route::get('/route_priority/user', function() {
    return "This is Route 1";
});
Route::get('/route_priority/user', function() {
    return "This is Route 2";
});


Route::get('/bootstrap', function() {
    return view('bootstrap');
});

Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'Diaayu']);
Route::get('/controller_route', [RouteController::class, 'index']);
Route::redirect('/', '/routing');