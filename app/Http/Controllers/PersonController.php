
**Call to undefined method stdClass::getData()　@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
@endsection

    @section('footer')
        copyright 2023 Cozy666.
    @endsection
<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();

        // デバッグ用
        if ($items->count() > 0) {
            dd(get_class($items->first()));  // クラス名を確認
        }

        return view('person.index', ['items' => $items]);
    }
}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;  // この行を追加が新しい書き方
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', [HelloController::class, 'index'])
    ->middleware('hello');  // 新しい書き方
Route::post('hello', [HelloController::class, 'post']);  // 新しい書き方

Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);

Route::get('hello/edit', [HelloController::class, 'edit']);
Route::post('hello/edit', [HelloController::class, 'update']);

Route::get('hello/del', [HelloController::class, 'del']);
Route::post('hello/del', [HelloController::class, 'remove']);

Route::get('hello/show', [HelloController::class, 'show']);

Route::get('person', [PersonController::class, 'index']);
**

編集
The error "Call to undefined method stdClass::getData()" indicates that your Person model is not returning the expected model instances. Instead, it's returning stdClass objects, which don't have a getData() method.

Here are the most likely causes and solutions:

Most Common Cause: Missing Person Model
Your Person model likely doesn't exist or isn't properly defined. Create it:


Person Model
コード
Alternative Solutions:
Option 1: Use Model Attributes Directly
Instead of calling getData(), access the model properties directly:


Fixed Person Index View
コード
Option 2: Debug and Fix the Controller
Add proper debugging to your controller:


Person Controller with Debug
コード
Add Route for Person Controller
Make sure to add the PersonController import to your routes file:


Fixed Routes with PersonController
コード
Steps to Fix:
Create the Person model (if it doesn't exist) in app/Person.php or app/Models/Person.php
Add the import for PersonController in your routes file
Make sure your database table exists and has the proper structure
Test the debug output to confirm what type of objects you're getting
The most likely issue is that your Person model doesn't exist or doesn't have the getData() method. Once you create the proper model with the method, the error should be resolved.







<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();

        // デバッグ用
        if ($items->count() > 0) {
            $firstItem = $items->first();
            dd([
                'class' => get_class($firstItem),
                'methods' => get_class_methods($firstItem),
                'properties' => get_object_vars($firstItem),
                'has_getData' => method_exists($firstItem, 'getData')
            ]);
        }

        return view('person.index', ['items' => $items]);
    }
}
