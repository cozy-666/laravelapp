@extends('layouts.helloapp')

@section('title', 'Board.add')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')
    <form action="/board/add" method="post">
        @csrf
        <table>
            <tr>
                <th>Person ID:</th>
                <td><input type="text" name="person_id" value="{{ old('person_id') }}"></td>
            <tr>
                <th>Title:</th>
                <td><input type="text" name="title" value="{{ old('title') }}"></td>
            </tr>
            <tr>
                <th>Message:</th>
                <td><textarea name="message">{{ old('message') }}</textarea></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="add"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
Copyright 2023 Cozy666.
@endsection
