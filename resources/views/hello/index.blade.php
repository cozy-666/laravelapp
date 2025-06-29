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
    <p>{{ $msg }}</p>
    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg" value="{{ old('msg') }}">
        <input type="submit" value="送信">
    </form>
</body>

</html>
