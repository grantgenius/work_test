<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Admin\itemController;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', function () {
        return view('layouts.admin');
    });
    Route::get('/admin/items/create', [App\Http\Controllers\Admin\ItemController::class, 'create'])->name('items.create');
    Route::post('/admin/items/store', [ItemController::class, 'store'])->name('items.store');;
    Route::get('/admin/items/posts', [ItemController::class, 'posts'])->name('items.posts');
    Route::put('/admin/items/{item}', [ItemController::class, 'update'])->name('items.update');
    Route::get('/admin/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
    Route::delete('/admin/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
