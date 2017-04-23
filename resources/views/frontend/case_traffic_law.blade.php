@extends('frontend.layouts.default')
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <h2 class="blue_title">{{ trans('pages/cases/traffic_law.title') }}</h2>

            <h6>{{ trans('pages/cases/traffic_law.sub_title') }}</h6>
            <br>
            {!! trans('pages/cases/traffic_law.page_content') !!}
            <br><br>
            <a href="{{ url('/cases') }}" class="button orange_button responsive_align">{{ trans('general.practice_areas') }}</a>
            <br><br>
        </div>
    </div>
    <div class="case_quote_row align_center">
        <div class="container">
            <div class="quote">
                <div class="quote_icon"></div><div class="text_align_right">- {{ trans('pages/cases/traffic_law.testimonial_client_name') }}</div>

                {!! trans('pages/cases/traffic_law.testimonial_content') !!}
            </div>
            <a href="{{ url('/opinions') }}" class="button blue_button align_right">{{ trans('general.more_testimonials') }}</a>
            <div class="clear"></div>
        </div>
    </div>
@stop