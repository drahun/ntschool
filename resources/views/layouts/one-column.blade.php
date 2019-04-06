@extends('layouts.app')
<!--переопределили меню навигации-->
@section('nav')
    @include('parts._nav')
@endsection

@section('content')
    <div class="container">
        @include($page)
    </div>
@endsection

@section('footer')
    @include('parts._footer')
    @include('parts._copyrights')
@endsection