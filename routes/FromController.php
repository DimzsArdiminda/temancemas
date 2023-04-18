<?php

use App\Http\Controllers\NewCRUDController;
use App\Http\Controllers\RegisController;
use Illuminate\Support\Facades\Route;

Route::resource('CRUD-NEW', NewCRUDController::class)->scoped(['CRUD_NEW' => 'email']);

//route untuk register
route::post('/register',[RegisController::class,'regis']);
