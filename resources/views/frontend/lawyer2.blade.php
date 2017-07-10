@extends('frontend.layouts.default')
@section('content')
    <div class="lawyer_row">
        <div class="container">
            <br>
            <div class="lawyer_block">
                <div class="lawyer_left_block">
                    <img src="@lang('pages/attorneys/soulmaz.img')" title="@lang('pages/attorneys/soulmaz.img_alt')" alt="@lang('pages/attorneys/soulmaz.img_alt')">
                    <p>
                        {{ trans('general.email') }}: <a href="mailto:soulmaz@novotaghavi.com">soulmaz@novotaghavi.com</a><br>
                        {{ trans('general.phone') }}: (804) 614-6920
                    </p>
                </div>


                <span class="lawyer_sub_block_right">
                <h6>{{ trans('pages/attorneys.attorney_female') }}</h6>
                <h2 class="blue_title">Soulmaz Taghavi</h2>
                <div class="contact_lawyer">
                    <a href="mailto:soulmaz@novotaghavi.com" class="button blue_button responsive_align">{{ trans('general.email_me') }}</a>
                    <a href="https://www.linkedin.com/in/soulmaz-taghavi-26686a73" target="_blank"><img src="{{ asset('img/icons/in.png') }}"></a>
                </div>
                {!! trans('pages/attorneys/soulmaz.about') !!}
            <br>
            <span class="bold_text">{{ trans('general.languages') }}:</span>

            {{ trans('general.english') }}, {{ trans('general.persian') }}, {{ trans('general.dari') }}, {{ trans('general.spanish')}}<br>

            <span class="bold_text">{{ trans('general.memberships') }}</span><br>
            <ul class="lawyer_list">
                <li>{{ trans('pages/attorneys/soulmaz.member1') }}</li>
                <li>{{ trans('pages/attorneys/soulmaz.member2') }}</li>
                <li>{{ trans('pages/attorneys/soulmaz.member3') }}</li>
                <li>{{ trans('pages/attorneys/soulmaz.member4') }}</li>
                <li>{{ trans('pages/attorneys/soulmaz.member5') }}</li>
            </ul>

            </span>

            </div>
            <br>
        </div>
    </div>
@stop