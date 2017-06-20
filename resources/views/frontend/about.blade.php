@extends('frontend.layouts.default')
@section('header-custom-tags')

@stop
@section('content')
<div class="container">
    <div class="about_us_left_block">
        <br>
        <h2 class="blue_title">{{ trans('pages/about.title') }}</h2>
        <h6>{{ trans('pages/about.subtitle') }}</h6>
        <p>{{ trans('pages/about.first_paragraph') }}</p>
        <p>{{ trans('pages/about.second_paragraph') }}</p>
        <a href="{{ url('/contact') }}" class="button blue_button float_left">{{ trans('pages/about.get_in_touch') }}</a>
        <br><br><br>
    </div>
    <div class="about_us_right_block">
        <img src="@lang('pages/about.about_us_image')" alt="@lang('pages/about.about_us_image_alt')">
    </div>

    <div class="clear"></div>
</div>
@stop