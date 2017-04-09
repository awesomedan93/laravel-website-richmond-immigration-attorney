@extends('frontend.layouts.default')
@section('content')
    <div class="slider_cases parallax-window">

        <div class="container">
            <div class="cases_slider_title">
                <h2 class="attorneys_title">Cases We Handle</h2>
                Our firm is a full service immigration law firm that handles family and employment based immigration cases, humanitarian relief and removal defense. We also have over twenty years of experience in Central Virginia practicing Criminal and Traffic defense.
            </div>
        </div>

    </div>
    <div class="attorneys_row">
        <div class="container">



            <div class="case_block">
                <div class="cases_left_block">
                    <h2 class="blue_title_cases">Criminal Defense</h2>

                    <p>There are many areas of criminal law cases in Virginia ranging from reckless driving to murder. Our experienced Richmond criminal attorneys have experience in many types of criminal cases.</p>
                    <a href="{{ url('/cases/criminal-defense') }}" class="button orange_button responsive_align">Learn More</a>
                </div>

                <a href="{{ url('/cases/criminal-defense') }}"><img src="{{ asset('./img/criminal_defense.webp') }}" class="cases_sub_block_right"></a>

            </div>
            <div class="case_block">
                <div class="cases_left_block">
                    <h2 class="blue_title_cases">Immigration Law</h2>

                    <p>Being detained by immigration authorities and placed in removal proceedings can be a frightening experience If you have a family member, friend or employee facing deportation, the law firm of Novo Taghavi can help.                </p>
                    <a href="{{ url('/cases/immigration_law') }}" class="button orange_button responsive_align">Learn More</a>
                </div>

                <a href="{{ url('/cases/immigration_law') }}"><img src="{{ asset('./img/immigration_law.webp') }}" class="cases_sub_block_right"></a>

            </div>
            <div class="case_block">
                <div class="cases_left_block">
                    <h2 class="blue_title_cases">Traffic Law</h2>

                    <p>
                        Hiring a qualified traffic lawyer can save you money in fines and protect you from losing your driver’s license. Don’t risk losing your license if you don’t have to.
                    </p>
                    <a href="{{ url('/cases/traffic-law) }}" class="button orange_button responsive_align">Learn More</a>
                </div>

                <a href="{{ url('/cases/traffic-law') }}"><img src="{{ asset('./img/traffic_law.webp') }}" class="cases_sub_block_right"></a>

            </div>
            <div class="case_block">
                <div class="cases_left_block">
                    <h2 class="blue_title_cases">DUI Law</h2>

                    <p>
                        In addition to the legal consequences of a DUI in Virginia such as jail time, fines, and loss of license, a DUI conviction can cause you additional problems.
                    </p>
                    <a href="{{ url('/cases/dui-law') }}" class="button orange_button responsive_align">Learn More</a>
                </div>

                <a href="{{ url('/cases/dui-law') }}"><img src="{{ asset('./img/dui_law.webp') }}" class="cases_sub_block_right"></a>

            </div>



        </div>
    </div>
@stop
@section('custom-footer-js')
    <script>
        $(function() {
            $('.parallax-window').parallax({
                imageSrc: '{{ asset('./img/cases.png') }}',
                speed:0.5,
                naturalWidth:1500,
                nautralHeight:394,
                positionY:'-50%',

            });
        });
    </script>
@endsection