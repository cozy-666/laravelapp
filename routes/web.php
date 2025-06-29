<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
    <p>This is sample page.</p>
    <p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;



Route::get('hello', function () use ($html) {
    return $html;
});
