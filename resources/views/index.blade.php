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
                    <!-- <td>Column content</td> -->
                    </tr>
                    <tr>
                    <th scope="row"><div>[ACT]</div>スムージチークス</th>
                    <td><div>[ACT]</div>AFTER SQUALL <br> AX LITTLE CITY <br> MODERN KNOCK <br> New Side Chapter <br> Past life was Thief <br> SIGHTS</td>
                    <td><div>[ACT]</div>我儘ラキア-BAND SET- /<br> FAITH /<br> Djつぶら</td>
                    <!-- <td>Column content</td> -->
                    </tr>
                    <tr class="table-light">
                    <th scope="row"><div>[OPEN/START]<div>18:30/19:00<div>[料金]</div>ADV/DOOR ￥3000/￥--(1D別)</th>
                    <td><div>[OPEN/START]<div>18:30/19:00<div>[料金]</div>ADV/DOOR ￥3000/￥--(1D別)</td>
                    <td><div>[OPEN/START]<div>18:30/19:00<div>[料金]</div>ADV/DOOR ￥2500/￥3200(1D別)</td>
                    <!-- <td>[OPEN/START]18:30/19:00[料金]ADV/DOOR ￥3000/￥--(1D別)</td> -->
                    </tr>
                    <!-- <tr class="table-dark">
                    <th scope="row">Dark</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    </tr> -->
                </tbody>
                </table> 
            </div><!-- /example -->
            </div>
        </div>
        </div>
    <!-- <div class = contents>
        <h2>TODAY SCHEDULE</h2>
        <div class = "livehouses">
            <div class = "livehouse_names">
                <div class = "house1"><a class="drop" href="https://clubdrop.jp/">DROP</a></div>
                <div class = "house2"><a class="beyond" href="https://beyond-osaka.jp/">BEYOND</a></div>
                <div class = "house3"><a class="varon" href="https://osaka-varon.jp/">VARON</a></div>
            </div>
            <div class= 'events'>
                <div class= "event1">
                    <div class= "event1_title">
                        <div class = "event1_title_name"></div>
                    </div>
                    <ul div class="drop_bands">
                    </ul>
                    <div class = "flyer">
                    </div>
                    <div class= "event1_price">
                        <p> </p>
                        <p></p>
                    </div>
                </div>
                <div class= "event2">
                    <div class= "event2_title">
                        <div class = "event1_title_name"></div>
                    </div>
                    <ul div class="byond_bands">

                        <li></li>
                    </ul>
                    <div class = "flyer">
                    </div>
                    <div class= "event2_price">
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <div class= "event3">
                    <div class= "event3_title">
                        <div class = "event1_title_name"></div>
                    </div>
                    <ul div class="varon_bands">
                        <li></li>
                    </ul>
                    <div class = "flyer">
                    </div>
                    <div class= "event3_price">
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    <div> -->
</body>
@endsection('content')