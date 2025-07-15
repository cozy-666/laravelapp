<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();

        // デバッグ用
        // if ($items->count() > 0) {
        //     $firstItem = $items->first();
        //     dd([
        //         'class' => get_class($firstItem),
        //         'methods' => get_class_methods($firstItem),
        //         'properties' => get_object_vars($firstItem),
        //         'has_getData' => method_exists($firstItem, 'getData')
        //     ]);
        // }

        return view('person.find', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }
    public function search(Request $request)
    {

        $item = Person::nameEqual($request->input)
            ->first();
        $param = ['input' => $request->input, 'items' => $item];
        return view('person.find', $param);
    }
}
