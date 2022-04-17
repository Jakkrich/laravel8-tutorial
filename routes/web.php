<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Cookie\SessionCookieJar;
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

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');

Route::get('/posts/{id?}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');

Route::get('/add-post', [ClientController::class, 'getAddPost'])->name('posts.getaddpost');

Route::get('/update-post', [ClientController::class, 'getUpdatePost'])->name('posts.getupdatepost');

Route::get('/delete-post/{id?}', [ClientController::class, 'getDeletePost'])->name('posts.getdeletepost');

Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/user/form', [UserController::class, 'form'])->name('user.form');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove', [SessionController::class, 'removeSessionData'])->name('session.remove');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getallpost');

Route::get('/post-add', [PostController::class, 'addPost'])->name('post.add');

Route::post('/post-submit', [PostController::class, 'addPostSubmit'])->name('post.addsubmit');

Route::get('/post/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');

Route::get('/post-delete/{id}', [PostController::class, 'deletePost'])->name('post.delete');

Route::get('/post-edit/{id}', [PostController::class, 'editPost'])->name('post.edit');

Route::post('/post-editsubmit', [PostController::class, 'editPostSubmit'])->name('post.editsubmit');
