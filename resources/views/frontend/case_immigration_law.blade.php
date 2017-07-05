@extends('frontend.layouts.default')
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <h2 class="blue_title">{{ trans('pages/cases/immigration_law.title') }}</h2>
            <h6>{{ trans('pages/cases/immigration_law.sub_title') }}</h6>

            {!! trans('pages/cases/immigration_law.page_content') !!}
            <span class="align_center_text">
                <h6 class="bold_text">GET HELP FROM AN EXPERIENCED RICHMOND, VA CRIMINAL LAWYER</h6>
                <span class="align_center_text">We are here to defend your rights. Call (804) 614-6920 today for your free consultation.</span>
            </span>
            <br><br>
            <a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases') }}" class="button orange_button responsive_align">{{ trans('general.practice_areas') }}</a>
            <br><br>
        </div>
    </div>
    <div class="case_quote_row align_center">
        <div class="container">
            <div class="quote">
                <div class="quote_icon"></div>
                <div class="text_align_right">- {{ trans('pages/cases/immigration_law.testimonial_client_name') }}</div>

                {!! trans('pages/cases/immigration_law.testimonial_content') !!}
            </div>
            <a href="{{ LaravelLocalization::getLocalizedURL(null, '/reviews') }}" class="button blue_button align_right">{{ trans('general.more_testimonials') }}</a>
            <div class="clear"></div>
        </div>
    </div>
@stop