<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request){
        return view('hello.index', ['msg' => 'フォームを入力:']);
    }

    public function post(Request $request){
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
    // 新しい書き方
    $validated = $request->validate($validate_rule);

    // バリデーション済みデータを使用
    // $validated には検証済みのデータが入っている
    return view('hello.index', [
            'msg' => '正しく入力されました。',
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ]);
    }

}
