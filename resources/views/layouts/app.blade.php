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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
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
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="#">Expand at md</a> -->
    <a class="navbar-brand" href="#">EVERYWHEEL<span>2020</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">ホーム <span class="sr-only">（現在位置）</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">リンク</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">無効なアイテム</a>
        </li> -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ドロップダウン</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item" href="#">問い合わせ</a>
            <a class="dropdown-item" href="#">ログアウト</a>
            <a class="dropdown-item" href="#">管理者用ページ</a>
            </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="検索">
        </form>
    </div>
</nav>
@yield('content')
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">
    <div class="container">
    </div>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Copyright(C) everywheel. All Rights Researved.</div>
</footer>
<!-- <footer>
    <div class="footer_content">
        <p class="footer_copy">Copyright(C) everywheel. All Rights Researved.</p>
    </div>
</footer> -->
<!-- JavaScripts -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>