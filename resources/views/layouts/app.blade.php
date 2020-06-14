<!DOCTYPE html>
<html lang="ja">
<head>
    <title>everywheel</title>
    <meta content="みんなで使えるタスク管理アプリ" name="description">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link href="{{ asset('/css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/tasks.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script src="{{ asset('/js/test.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ツイッターカード -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@ziko7110_2" />
    <meta property="og:url" content="http://test-laravel.com/" />
    <meta property="og:title" content="Task List" />
    <meta property="og:description" content="タスク管理アプリです" />
    <meta property="og:image" content="http://test-laravel.com/Twitter_card.png" />

    <!-- レスポンシブ -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- IEへの対応 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- ligthbox -->
    <link rel="stylesheet" href="/css/lightbox.css">
    <script src="/js/lightbox.js" type="text/javascript"></script>
    <!-- /Users/naitoukouzi/quickstart_2/public/js/lightbox.js -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM9JR5X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header>
<header>
        <h1>EVERYWHEEL<span>2019</span></h1>
        <div class="nav">
            <a class="inquiry" href=#>問い合わせ</a>
                <a class="inquiry2" href= '/users/sign_out'>ログアウト</a>
            <a class="inquiry2" href= '/users/sign_in'>管理者用ページ</a>
        </div>
    </header>
<headr>
@yield('content')
<footer>
        <div class="footer_content">
            <p class="footer_copy">Copyright(C) everywheel. All Rights Researved.</p>
        </div>
    </footer>
<!-- JavaScripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>
</html>