@extends('frontend.layouts.default')
@section('content')
    <div class="lawyer_row">
        <div class="container">
            <br>
            <div class="lawyer_block">
                <div class="lawyer_left_block">
                    <img src="@lang('pages/attorneys/raul.img')" alt="best criminal lawyer in richmond">
                    <p>
                        {{ trans('general.email') }}: raul@novotaghavi.com<br>
                        {{ trans('general.phone') }}: (804) 614-6920
                    </p>
                </div>

                <span class="lawyer_sub_block_right">
                <h6>{{ trans('general.attorney') }}</h6>
                <h2 class="blue_title">Raul Novo</h2>
                <a href="mailto:raul@novotaghavi.com" class="button blue_button responsive_align">{{ trans('general.email_me') }}</a>
                {!! trans('pages/attorneys/raul.about') !!}
            <br>
            <span class="bold_text">{{ trans('general.languages') }}:</span> {{ trans('general.english') }}, {{ trans('general.spanish') }}<br>
            <span class="bold_text">{{ trans('general.memberships') }}</span><br>
            <ul class="lawyer_list">
                <li>Chesterfield County Bar Association</li>
                <li>Henrico County Bar Association</li>
            </ul>


            </span>

            </div>
            <br>
        </div>
    </div>
@stop