@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                @include($page)
            </div>

            <div class="col-xs-12 col-md-4">

                @include('widgets.me')
                <div class="sidebar boxed push-down-30">
                    <div class="row">
                        <div class="col-xs-10  col-xs-offset-1">
                            @include('pages.sidebar')

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

<!--выводим активнымй пункт меню-->
@section('bottom_scripts')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            if (window.BlogSettings.activeMenu) {
                $('ul.navigation').find('.' + window.BlogSettings.activeMenu).addClass('active');
            }
        });
    </script>
@endsection

@section('head_scripts')
    <script>
        window.BlogSettings = {
            "activeMenu": ""
        };
    </script>
@show

