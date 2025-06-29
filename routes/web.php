<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{msg?}', function ($msg = 'no message') {

$html = <<<EOF
<html>
<head>
    <title>HEllo</title>
    <style>
        body {
            font-size:16pt; color:#999;
        }
        h1 {
            font-size:100pt;
            text-align: right;
            color: #eee;
            margin: -40px 0 -5opx 0;
        }
    </style>
</head>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;

    return $html;
});
