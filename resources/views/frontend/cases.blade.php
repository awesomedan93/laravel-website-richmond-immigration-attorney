@extends('frontend.layouts.default')
@section('content')
    <div class="slider_cases parallax-window">

        <div class="container">
            <div class="cases_slider_title">
                <h2 class="attorneys_title">{{ trans('pages/cases.title') }}</h2>
                {{ trans('pages/cases.sub_title') }}
            </div>
        </div>

    </div>
    <div class="attorneys_row">
        <div class="container">

            <div class="case_block">
                <div class="cases_left_block">
                    <h2 class="blue_title_cases">{{ trans('pages/cases.criminal_defense') }}</h2>

                    <p>{{ trans('pages/cases.criminal_defense_desc') }}</p>
                    <a href="{{ url('/cases/criminal-defense') }}" class="button orange_button responsive_align">{{ trans('general.learn_more') }}</a>
                </div>

                <a href="{{ url('/cases/criminal-defense') }}"><img src="@lang('pages/cases.criminal_defense_img')" class="cases_sub_block_right"></a>

            </div>
            <div class="case_block">
                <div class="cases_left_block">
                    <h2 class="blue_title_cases">{{ trans('pages/cases.immigration_law') }}</h2>

                    <p>{{ trans('pages/cases.immigration_law_desc') }}</p>
                    <a href="{{ url('/cases/immigration_law') }}" class="button orange_button responsive_align">{{ trans('general.learn_more') }}</a>
                </div>

                <a href="{{ url('/cases/immigration_law') }}"><img src="@lang('pages/cases.immigration_law_img')" class="cases_sub_block_right"></a>

            </div>
            <div class="case_block">
                <div class="cases_left_block">
                    <h2 class="blue_title_cases">{{ trans('pages/cases.traffic_law') }}</h2>

                    <p>{{ trans('pages/cases.traffic_law_desc') }}</p>
                    <a href="{{ url('/cases/traffic-law') }}" class="button orange_button responsive_align">{{ trans('general.learn_more') }}</a>
                </div>

                <a href="{{ url('/cases/traffic-law') }}"><img src="@lang('pages/cases.traffic_law_img')" class="cases_sub_block_right"></a>

            </div>
            <div class="case_block">
                <div class="cases_left_block">
                    <h2 class="blue_title_cases">{{ trans('pages/cases.dui_law') }}</h2>

                    <p>{{ trans('pages/cases.dui_law_desc') }}</p>
                    <a href="{{ url('/cases/dui-law') }}" class="button orange_button responsive_align">{{ trans('general.learn_more') }}</a>
                </div>

                <a href="{{ url('/cases/dui-law') }}"><img src="@lang('pages/cases.dui_law_img')" class="cases_sub_block_right"></a>

            </div>



        </div>
    </div>
@stop
@section('custom-footer-js')
    <script>
        $(function() {
            $('.parallax-window').parallax({
                imageSrc: '{{ asset('img/cases.png') }}',
                speed:0.5,
                naturalWidth:1500,
                nautralHeight:394,
                positionY:'-50%',
            });
        });
    </script>
@endsection