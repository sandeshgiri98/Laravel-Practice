<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;
use  App\Http\Controllers\ImageController;
Route::get('/', function () {
    return view('welcome');
});

Route::view('add','add-student');
Route::post('add',[StudentController::class,'add']);

Route::get('list',[StudentController::class,'list']);

Route::get('delete/{id}', [StudentController::class, 'delete'])->name('delete.index');
Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit.index');
Route::put('update/{id}', [StudentController::class,'editStudent']);

Route::get('search',[StudentController::class,'search']);
Route::post('delete-multi',[StudentController::class,'deleteMultiple']);


Route::post('upload', [ImageController::class,'upload']);
Route::view('upload','upload');
