<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;  // この行を追加が新しい書き方

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{id?}', [HelloController::class, 'index']);  // 新しい書き方

