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

                    <a href="{{ url('/cases/criminal-defense') }}"><img src="@lang('pages/home.crimminal_defense_img')" alt="@lang('pages/home.crimminal_defense_img')"></a>
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

                <p>"I am a highly satisfied client! Because of you, I got a green card. You are efficient and have saved a lot of my time in handling my complicated immigration case.</p>
                <p>I will always stay with you for all my legal and immigration advice. I am also highly recommending you to all my friends and colleagues for immigration/ criminal issues.</p>
            </div>
            <a href="{{ url('/testimonials') }}" class="button blue_button">More Testimonials</a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="home_fourth_row align_center">
        <div class="container">
            <h2 class="blue_title padding_title">
                Get in Touch
            </h2>
            <span>
                Contact us now for your FREE CASE EVALUATION
            </span>
            <br><br><br>
            <div class="contact_form">
                <form class="text_align_left">

                    <input type="text" name="firstname" placeholder="First Name" class="contact_form_name">

                    <input type="text" name="email" placeholder="Email" class="contact_form_email">

                    <input type="text" name="lastname" placeholder="Last Name">

                    <input type="text" name="phone" placeholder="Phone">

                    <textarea name="message" placeholder="Message"></textarea>
                    <input type="submit" value="Send" class="contact_form_submit">
                </form>
                <span class="terms">*By submitting this contact form, I have read & agreed to the <a href="{{ url('/terms-and-conditions') }}">Terms & Conditions.</a></span>
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