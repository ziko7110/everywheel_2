<!DOCTYPE html>
<html lang="ja">
<head>
    <title>everywheel</title>
    <meta content="当日、地域のライブハウス出演者のまとめ" name="description">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <!-- <link href="{{ asset('/css/header.css') }}" rel="stylesheet"> -->
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <!-- <script src="{{ asset('/js/test.js') }}"></script> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ツイッターカード -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@ziko7110_2" />
    <meta property="og:url" content="#" />
    <meta property="og:title" content="everywheel" />
    <meta property="og:description" content="当日のライブ情報まとめサイト" />
    <meta property="og:image" content="#" />

    <!-- <script src="{{ asset('/js/heatmap.js') }}"></script> -->
    <!-- <script src="{{ asset('/js/heatmap_demo.js') }}"></script> -->
    <style>
        /* #heatmapArea {
            position:relative;
            float:left;
            width:500px;
            height:300px;
            border:1px dashed black;
        } */
    </style>
</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
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
        <div class="footer-copyright text-center py-3">Copyright(C) everywheel. All Rights Researved.</div>
    </div>
</footer>
<!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/test-heatmap.js"></script>
<script type="text/javascript" src="/js/heatmap.js"></script>
<script type="text/javascript" src="/js/heatmap_demo.js"></script>

</body>
</html>