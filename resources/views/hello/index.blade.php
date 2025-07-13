@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{ $msg }}</p>
    @if(count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
    @endif
    <form method="POST" action="/hello">
        <table>
            @csrf
            @if ($errors->has('msg'))
            <tr>
                <th>エラー</th>
                <td>{{ $errors->first('msg') }}</td>
            </tr>
            @endif
            <tr>
                <th>message: </th>
                <td>
                    <input type="text" name="msg" value="{{ old('msg') }}">
                </td>
            <tr>
                <th></th>
            <td>
                <input type="submit" value="send">
            </td>
            </tr>
        </table>
    </form>
    @endsection


    @section('footer')
        copyright 2023 Cozy666.
    @endsection
