@extends('frontend.layouts.default')
@section('content')
<div class="slider_attorneys">

    <div class="container">
        <div class="attorneys_slider_title">
            <h2 class="attorneys_title">{{ trans('pages/attorneys.title') }}</h2>
            <span class="bold_title">{{ trans('pages/attorneys.sub_title') }}</span><br><br>
            {{ trans('pages/attorneys.page_description') }}
        </div>
    </div>

</div>
<div class="attorneys_row">
    <div class="container">
        <div class="attorneys_block">
            <img src="@lang('pages/attorneys.raul_img')" class="attorneys_sub_block" alt="@lang('pages/attorneys.raul_img_alt')">
            <span class="attorneys_sub_block_right">
                <br>
                <h6>{{ trans('general.attorney') }}</h6>
                <h2 class="blue_title">Raul Novo</h2>
                <p>{{ trans('pages/attorneys.about_raul') }}</p>
                <a href="{{ LaravelLocalization::getLocalizedURL(null, '/attorneys/raul-novo') }}" class="button blue_button responsive_align">{{ trans('pages/attorneys.learn_more_about_raul') }}</a>
            </span>

        </div>
        <div class="attorneys_block">
            <img src="@lang('pages/attorneys.soulmaz_img')" class="attorneys_sub_block" alt="@lang('pages/attorneys.soulmaz_img_alt')">
            <span class="attorneys_sub_block_right">
                <br>
                <h6>{{ trans('pages/attorneys.attorney_female') }}</h6>
                <h2 class="blue_title">Soulmaz Taghavi</h2>
                <p>{{ trans('pages/attorneys.about_soulmaz') }}</p>
                <a href="{{ LaravelLocalization::getLocalizedURL(null, '/attorneys/soulmaz-taghavi') }}" class="button blue_button">{{ trans('pages/attorneys.learn_more_about_soulmaz') }}</a>
            </span>

        </div>
    </div>
</div>
@stop
@section('custom-footer-js')
<script>
    $(function() {
        $('.slider_attorneys').parallax({
            imageSrc: '{{ asset("img/attorneys.png") }}',
            speed:0.5,
            naturalWidth:1960,
            nautralHeight:1120

        });
    });
</script>
@endsection