@extends('frontend.layouts.default')
@section('content')
    <div class="slider parallax">
        <div class="container">
            <div class="slider_title">{{ trans('pages/home.title') }}</div>
            <div class="align_center">
                <a href="{{ url('/contact') }}" class="button slider_button">{{ trans('pages/home.get_in_touch') }}</a>
            </div>
        </div>
    </div>

    <div class="home_first_row align_center">
        <div class="container">
            <div class="square">

                <h2 class="blue_title">{{ trans('pages/home.about_title') }}</h2>

                <h6>{{ trans('pages/home.about_sub_title') }}</h6>

                <p>{{ trans('pages/home.about_description') }}</p>
                <br>
                <a href="{{ url('/about') }}" class="button blue_button">{{ trans('pages/home.learn_more_about_us') }}</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="home_second_row align_center">
        <div class="container">

            <h2 class="blue_title">{{ trans('pages/home.cases') }}</h2>

            <p>{{ trans('pages/home.cases_description') }}</p>
            <div class="first_row">
                <div class="left_square">
                    <div class="blue_square_title">
                        <h3 class="blue_title">{{ trans('pages/home.crimminal_defense') }}</h3>
                    </div>

                    <a href="{{ url('/cases/criminal-defense') }}"><img src="@lang('pages/home.crimminal_defense_img')" alt="@lang('pages/home.crimminal_defense_img_alt')"></a>
                </div>
                <div class="right_square">
                    <div class="blue_square_title">
                        <h3 class="blue_title">{{ trans('pages/home.immigration_law') }}</h3>
                    </div>
                    <a href="{{ url('/cases/immigration_law') }}"><img src="@lang('pages/home.immigration_law_img')" alt="@lang('pages/home.immigration_law_img_alt')"></a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="second_row">
                <div class="left_square">
                    <div class="blue_square_title">
                        <h3 class="blue_title">{{ trans('pages/home.traffic_law') }}</h3>
                    </div>
                    <a href="{{ url('/cases/traffic-law') }}"><img src="@lang('pages/home.traffic_law_img')" alt="@lang('pages/home.traffic_law_img_alt')"></a>
                </div>
                <div class="right_square">
                    <div class="blue_square_title">
                        <h3 class="blue_title">{{ trans('pages/home.dui_law') }}</h3>
                    </div>
                    <a href="{{ url('/cases/dui-law') }}"><img src="@lang('pages/home.dui_law_img')" alt="@lang('pages/home.dui_law_img_alt')"></a>
                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>
    <div class="home_third_row align_center">
        <div class="container align_center_text">
            <div class="quote">
                <div class="quote_icon"></div><div class="text_align_right">- Umar</div>
                {!! trans('pages/home.testimonial') !!}
            </div>
            <a href="{{ url('/reviews') }}" class="button blue_button">{{ trans('general.more_testimonials')}}</a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="home_fourth_row align_center">
        <div class="container">
            <h2 class="blue_title padding_title">
                {{ trans('general.get_in_touch') }}
            </h2>
            <span>
                {{ trans('pages/home.contact_us_now') }}
            </span>
            <br><br><br>
            <div class="contact_form">
                <form class="text_align_left">

                    <input type="text" name="firstname" placeholder="{{ trans('pages/contact.first_name') }}" class="contact_form_name">

                    <input type="text" name="email" placeholder="Email" class="contact_form_email">

                    <input type="text" name="lastname" placeholder="{{ trans('pages/contact.last_name') }}">

                    <input type="text" name="phone" placeholder="{{ trans('pages/contact.phone') }}">

                    <textarea name="message" placeholder="{{ trans('pages/contact.first_name') }}"></textarea>
                    <input type="submit" value="{{ trans('pages/contact.send') }}" class="contact_form_submit">
                </form>
                <span class="terms">{!! trans('pages/contact.agreed_terms_text') !!}</span>
                <br><br>
                <img src="{{ asset('img/icons/fb.png') }}">
            </div>
        </div>
    </div>
@stop
@section('custom-footer-js')
<script>
    $(function() {
        $('.parallax').parallax({
            imageSrc: '{{ asset("img/slider_bg.png") }}',speed:0.3,naturalWidth:1500,nautralHeight:527
        });
    });
</script>
@endsection