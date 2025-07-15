<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PersonController extends Controller
{
    use ValidatesRequests; // これを追加

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

        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)
            ->ageLessThan($max)
            ->get();
        $param = ['input' => $request->input, 'items' => $item];
        return view('person.find', $param);
    }

    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person();
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.edit', ['form' => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function del(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.del', ['form' => $person]);
    }

    public function remove(Request $request)
    {
        $person = Person::find($request->id)->delete();
        return redirect('/person');
    }
}
