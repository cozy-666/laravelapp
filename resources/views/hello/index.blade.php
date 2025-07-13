<html>

<head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 120pt;
            text-align: right;
            color: #fafafa;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
    </style>
</head>

<body>
    <h1>Blade/Index</h1>
    <p>&#064;foreacchディレクティブの例</p>
    <ol>
        @foreach ($data as $item)
        @if($loop->first)
        <p>※データ一覧</p><ul>
        @endif
            <li>No,{{$loop -> iteration}}. {{ $item }}</li>
            @if($loop->last)
        </ul><p>-- ここまで</p>
            @endif
        @endforeach
    </ol>
</body>

</html>
