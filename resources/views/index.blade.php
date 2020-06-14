@extends('layouts.app')
@section('content')
<body>
    <div class = contents>
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
    <div>
</body>
@endsection('content')