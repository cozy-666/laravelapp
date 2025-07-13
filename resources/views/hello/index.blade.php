@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
    @endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <P>必要なだけ記述できます。</P>

    @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot

        @slot('msg_content')
            これはメッセージの表示です。
        @endslot
    @endcomponent

@endsection


@section('footer')
copyright 2023 Cozy666.
@endsection
