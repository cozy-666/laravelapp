@extends('layouts.helloapp')

@section('title', 'Person.Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/person/del" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $item->id }}">
        <table>
            <tr>
                <th>name:</th>
                <td>{{ $item->name }}</td>
            </tr>
            <tr>
                <th>mail:</th>
                <td>{{ $item->mail }}</td>
            </tr>
            <tr>
                <th>age:</th>
                <td>{{ $item->age }}</td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="delete"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
Copyright 2023 Cozy666.
@endsection
