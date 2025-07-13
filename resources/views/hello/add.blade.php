@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action = "/hello/add" method="post">
        @csrf
        <table>
            <tr>
                <th>name:</th>
                <td><input type="text" name="name" value="{{ old('name') }}"></td>
            </tr>
            <tr>
                <th>mail:</th>
                <td><input type="text" name="mail" value="{{ old('mail') }}"></td>
            </tr>
            <tr>
                <th>age:</th>
                <td><input type="text" name="age" value="{{ old('age') }}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
        </table>
    </form>
@endsection

@section('footer')
copyright 2023 Cozy666.
@endsection
