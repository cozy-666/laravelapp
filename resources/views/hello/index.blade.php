@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
    @endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <P>必要なだけ記述できます。</P>

    @include('components.message', [
        'msg_title' => 'OK',
        'msg_content' => 'サブビューです。'
    ])

@endsection


@section('footer')
copyright 2023 Cozy666.
@endsection
