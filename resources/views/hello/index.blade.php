@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
    @endsection

@section('contents')
<p>ここが本文のコンテンツです。</p>
<P>必要なだけ記述できます。</P>
@endsection

@section('footer')
copyright 2023 Cozy666.
@endsection
