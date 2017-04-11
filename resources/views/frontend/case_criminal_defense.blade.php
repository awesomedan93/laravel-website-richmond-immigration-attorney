@extends('frontend.layouts.default')
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <h2 class="blue_title">{{ trans('pages/cases/criminal_defense.title') }}</h2>
            <h6>{{ trans('pages/cases/criminal_defense.sub_title') }}</h6>

            {!! trans('pages/cases/criminal_defense.page_content') !!}

            <br><br>
            <a href="{{ url('/cases') }}" class="button orange_button responsive_align">{{ trans('general.practice_areas') }}</a>
            <br><br>
        </div>
    </div>
@stop