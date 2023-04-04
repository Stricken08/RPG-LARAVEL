<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\classController;
use App\Http\Controllers\GroupController;
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

Route::resource('/home', UserController::class);
Route::get('/login', [UserController::class, 'loginForm2'])->name('loginForm');
Route::post('/login', [UserController::class, 'login2'])->name('login');
Route::get('/disconnect', [UserController::class, 'disconnect'])->name('disconnect');

Route::get('/users', [UserController::class, 'show'])->name('users.show');



// routes des personnages
Route::get('/character/create', 'App\Http\Controllers\CharacterController@create');
Route::get('/character/create', [CharacterController::class, 'create'])->name('character.create');
Route::get('/character/show', [CharacterController::class, 'index'])->name('character.index');
Route::post('/character/create', [CharacterController::class, 'create'])->name('character.create');
Route::post('/character/create', [CharacterController::class, 'store']);
Route::delete('/character/{nom}', [CharacterController::class, 'destroy'])->name('character.destroy');
Route::get('/character/{nom}', [CharacterController::class, 'show'])->name('character.show');


// routes des groupes
Route::get('/group/create', 'App\Http\Controllers\GroupController@create');
Route::get('/group/create', [GroupController::class, 'create'])->name('group.create');
Route::get('/group/show', [GroupController::class, 'index'])->name('group.index');
Route::post('/group/create', [GroupController::class, 'create'])->name('group.create');
Route::post('/group/create', [GroupController::class, 'store']);
Route::delete('/groupe/{nom}', [GroupController::class, 'destroy'])->name('group.destroy');
Route::get('/groupe/{nom}', [GroupController::class, 'show'])->name('group.show');
//routes des classes
Route::get('/class/warrior', [ClassController::class, 'warrior'])->name('warrior');
Route::get('/class/mage', [ClassController::class, 'mage'])->name('mage');
Route::get('/class/druide', [ClassController::class, 'druide'])->name('druide');
Route::get('/class/assassin', [ClassController::class, 'assassin'])->name('assassin');
Route::get('/class/berserker', [ClassController::class, 'berserker'])->name('berserker');
Route::get('/class/archer', [ClassController::class, 'archer'])->name('archer');
