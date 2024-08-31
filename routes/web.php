<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MacanController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TaycanController;
use App\Http\Controllers\Models911Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KlikController;
use App\Http\Controllers\PurchaseController;


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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/models/mobil', function () {
    return view('App/Admin/pagemodel/911/show');
});

Route::get('/dashboard', [PostsController::class, 'index1']);


Route::get('tambahUser', [TambahController::class, 'form_tambah']);
Route::post('dataUsers', [TambahController::class, 'tambah']);

Route::get('/dataUsers', [UsersController::class, 'index']);
Route::patch('/dataUsers/{id}', [UsersController::class, 'update']);
Route::get('/dataUsers/{id}/edit', [UsersController::class, 'edit']);
Route::delete('dataUsers/{id}', [UsersController::class, 'destroy']);







Route::post(('/posts'), [PostsController::class, 'store']);
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{id}/edit', [PostsController::class, 'edit']);
Route::get('posts/{id}', [PostsController::class, 'show']);
Route::patch('/posts/{id}', [PostsController::class, 'update']);
Route::get('create', [PostsController::class, 'create']);
Route::delete('posts/{id}', [PostsController::class, 'destroy']);
Route::get('model/718', [PostsController::class, 'show']);


Route::post(('/postsMacan'), [MacanController::class, 'store']);
Route::get('/postsMacan', [MacanController::class, 'index']);
Route::get('/postsMacan/{id}/edit', [MacanController::class, 'edit']);
Route::get('postsMacan/{id}', [MacanController::class, 'show']);
Route::patch('/postsMacan/{id}', [MacanController::class, 'update']);
Route::get('createMacan', [MacanController::class, 'create']);
Route::delete('postsMacan/{id}', [MacanController::class, 'destroy']);
Route::get('model/macan', [MacanController::class, 'show']);


Route::post(('/postsTaycan'), [TaycanController::class, 'store']);
Route::get('/postsTaycan', [TaycanController::class, 'index']);
Route::get('/postsTaycan/{id}/edit', [TaycanController::class, 'edit']);
Route::get('postsTaycan/{id}', [TaycanController::class, 'show']);
Route::patch('/postsTaycan/{id}', [TaycanController::class, 'update']);
Route::get('createTaycan', [TaycanController::class, 'create']);
Route::delete('postsTaycan/{id}', [TaycanController::class, 'destroy']);
Route::get('model/taycan', [TaycanController::class, 'show']);

Route::post(('/posts911'), [Models911Controller::class, 'store']);
Route::get('/posts911', [Models911Controller::class, 'index']);
Route::get('/posts911/{id}/edit', [Models911Controller::class, 'edit']);
Route::get('posts911/{id}', [Models911Controller::class, 'show']);
Route::patch('/posts911/{id}', [Models911Controller::class, 'update']);
Route::get('create911', [Models911Controller::class, 'create']);
Route::delete('posts911/{id}', [Models911Controller::class, 'destroy']);
Route::get('model/911', [Models911Controller::class, 'show']);


Route::get('/admin/posts911/{id}', [KlikController::class, 'show911admin']);
Route::get('/posts911/{id}', [KlikController::class, 'show911']);
Route::get('/admin/posts718/{id}', [KlikController::class, 'show718admin']);
Route::get('/posts718/{id}', [KlikController::class, 'show718']);
Route::get('/admin/postsmacan/{id}', [KlikController::class, 'showmacanadmin']);
Route::get('/postsmacan/{id}', [KlikController::class, 'showmacan']);
Route::get('/admin/poststaycan/{id}', [KlikController::class, 'showtaycanadmin']);
Route::get('/poststaycan/{id}', [KlikController::class, 'showtaycan']);
Route::post(('/model/911'), [KlikController::class, 'store']);
Route::get('/formulir', [KlikController::class, 'create']);


Route::get('/purchase', [PurchaseController::class, 'index']);
Route::patch('/purchase/{id}', [PurchaseController::class, 'update']);
Route::get('/purchase/{id}/edit', [PurchaseController::class, 'edit']);
Route::delete('purchase/{id}', [PurchaseController::class, 'destroy']);





















