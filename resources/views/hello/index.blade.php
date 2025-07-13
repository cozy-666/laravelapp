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
    <p>&#064;forディレクティブの例</p>
    <ol>
        @for($i = 1; $i <= 100; $i++)
        @if($i % 2 == 1)
        @continue
        @elseif ($i <= 10)
            <li>No, {{$i}}
                @else
                @break
        @endif
        @endfor

    </ol>
</body>

</html>
