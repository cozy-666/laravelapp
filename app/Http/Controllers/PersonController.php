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
