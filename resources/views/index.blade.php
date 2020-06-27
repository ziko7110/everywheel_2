@extends('layouts.app')

@section('content')
<body>
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-12">
            <div class="page-header">
                <h1 id="tables">TODAY SCHEDULE</h1>
            </div>
            <div class="bs-component">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col"><h3><a class="drop" href="https://clubdrop.jp/">DROP</a></h3></th>
                        <th scope="col"><h3><a class="beyond" href="https://beyond-osaka.jp/">BEYOND</a><h3></th>
                        <th scope="col"><h3><a class="varon" href="https://osaka-varon.jp/">VARON</a></h3></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-active">
                            <th scope="row">スムージチークスワンマン 〜七夕リクエスト祭り〜</th>
                            <td>COMING HOME Vol.40 - MODERN KNOCK "SQUARe:<br> tour 2020"&New Side Chapter"RevolC<br> (REM;EMBER me.)"Release Party in OSAKA</td>
                            <td>WAGAMAMARAKIA 2MAN SHOWS「The Take Back」</td>
                        </tr>
                        <tr>
                            <th scope="row"><div>[ACT]</div>スムージチークス</th>
                            <td><div>[ACT]</div>{{ $beyond_artists[0] }} </td>
                            <td><div>[ACT]</div>{{ $varon_artists[0] }} /<br> FAITH /<br> Djつぶら</td>


                        </tr>
                        <tr class="table-light">
                            <th scope="row"><div>[OPEN/START]<div>18:30/19:00<div>[料金]</div>ADV/DOOR ￥3000/￥--(1D別)</th>
                            <td><div>[OPEN/START]<div>18:30/19:00<div>[料金]</div>ADV/DOOR ￥3000/￥--(1D別)</td>
                            <td><div>[OPEN/START]<div>18:30/19:00<div>[料金]</div>ADV/DOOR ￥2500/￥3200(1D別)</td>
                        </tr>
                    </tbody>
                </table> 
            </div>
            </div>
        </div>
    </div>
</body>
@endsection('content')