<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest; // Import the HelloRequest class
use Validator;

class HelloController extends Controller
{
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'pass' => 'required',
        ]);
        if($validator->fails()) {
            $msg = 'クエリーに問題があります。';
        } else {
            $msg = 'ID/PASSを受け付けました。フォームを入力してください。';
        }
        return view('hello.index', ['msg' => $msg,]);
    }

    public function post(Request $request)
    {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $messages = [
            'name.required' => '名前は必須です。',
            'mail.email' => 'メールアドレスの形式が正しくありません。',
            'age.numeric' => '年齢は数値で入力してください。',
            'age.between' => '年齢は0から150の間で入力してください。',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->sometimes('age', 'min:0', function($input){
            return is_numeric($input->age);
        });
        $validator->sometimes('age', 'max:150', function($input){
            return is_numeric($input->age);
        });

        if($validator->fails()) {
            return redirect('/hello')
                ->withErrors($validator)
                ->withInput();
        }
        return view('hello.index', ['msg' => '正しく入力されました。',]);
    }

}
