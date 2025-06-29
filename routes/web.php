<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;  // この行を追加が新しい書き方

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello',"HelloController@index");
//Laravel 8以降では、ルートの書き方が変わったため、以下のように記述します。
Route::get('hello/', [HelloController::class, 'index']);  // 新しい書き方
Route::get('hello/other', [HelloController::class, 'other']);  // 新しい書き方
