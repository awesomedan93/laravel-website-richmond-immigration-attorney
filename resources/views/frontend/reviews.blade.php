@extends('frontend.layouts.default')
@section('content')
    <div class="slider_testimonials">

        <div class="container">
            <div class="testimonails_slider_title">
                <span class="bold_title">{{ trans('pages/testimonials.title') }}</span><br>
                <h2 class="attorneys_title">{{ trans('pages/testimonials.sub_title') }}</h2>
            </div>
        </div>

    </div>
    <div class="testimonials_row">
        <div class="container">
            <br>
            <ul class="testimonials_list">
                <li>
                    <p>"{{ trans('pages/testimonials.lorena') }}"</p>
                    <span class="testimonial_person">
                    - Lorena F.
                </span>
                </li>
                <li>
                    <p>"{{ trans('pages/testimonials.umar') }}"</p>
                    <span class="testimonial_person">
                    - Umar
                </span>
                </li>
                <li>
                    <p>"{{ trans('pages/testimonials.norma') }}"</p>
                    <span class="testimonial_person">
                    - Norma A.
                </span>
                </li>
                <li>
                    <p>"{{ trans('pages/testimonials.nan') }}"</p>
                    <span class="testimonial_person">
                    - Nan
                </span>
                </li>
                <li>
                    <p>"{{ trans('pages/testimonials.kamal') }}"</p>
                    <span class="testimonial_person">
                    - Kamal
                </span>
                </li>
            </ul>
            <br>
        </div>
    </div>
@stop