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
            @if($errors->has('name'))
            <tr>
                <th>ERROE<th>
                <td>{{ $errors->first('name') }}</td>
            </tr>
            @endif
            <tr>
                <th>name: </th>
                <td><input type="text" name="name"></td>
            </tr>
            @if($errors->has('mail'))
            <tr>
                <th>ERROE<th>
                <td>{{ $errors->first('mail') }}</td>
            </tr>
            @endif
            <tr>
                <th>mail: </th>
                <td><input type="text" name="mail"></td>
            </tr>
            @if($errors->has('age'))
            <tr>
                <th>ERROE<th>
                <td>{{ $errors->first('age') }}</td>
            </tr>
            @endif
            <tr>
                <th>age: </th>
                <td><input type="text" name="age"></td>
            </tr>
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
