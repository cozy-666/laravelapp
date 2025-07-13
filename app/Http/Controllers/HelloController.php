<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(){
        $data = ['one', 'two', 'three', 'four', 'five'];
        return view('hello.index', ['data'=>$data]);
    }
    // public function post(Request $request){
    //     $msg = $request->msg;
    //     $data = [
    //         'msg' => 'こんにちは、' . htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') . 'さん！',
    //     ];
    //     return view('hello.index', $data);
    // }

}
