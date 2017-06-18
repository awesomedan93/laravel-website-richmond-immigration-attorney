@extends('frontend.layouts.default')
@section('content')
    <div class="contact_row">
        <div class="container align_center">
            <br>
            <div id="map"></div>

            <h2 class="blue_title padding_title">{{ trans('pages/contact.get_in_touch') }}</h2>
            <span>{{ trans('pages/contact.contact_us_now') }}</span>
            <br><br><br>
            <div class="contact_form contact_form_page">

                <div class="flash-message">

                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                            <div class="alert alert-{{ $msg }} fade in alert-dismissable" style="margin-top:18px;">
                                <strong>{{ Session::get('alert-' . $msg) }}!</strong>
                            </div>
                        @endif
                    @endforeach

                </div> <!-- end .flash-message -->
                <form action="{{ route('contact_us') }}" method="post" class="text_align_left">
                    {{ csrf_field() }}
                    <input type="text" name="firstname" placeholder="First Name" class="contact_form_name">
                    <input type="text" name="email" placeholder="Email" class="contact_form_email">
                    <input type="text" name="lastname" placeholder="Last Name">
                    <input type="text" name="phone" placeholder="Phone">
                    <textarea name="message" placeholder="Message"></textarea>
                    <input type="submit" value="{{ trans('pages/contact.send') }}" class="contact_form_submit">
                </form>

                <span class="terms">{!! trans('pages/contact.agreed_terms_text') !!}</span>
                <br><br>

                <div class="socials_contact">
                    <a href="https://plus.google.com/+NovoTaghaviRichmond" target="_blank"><img src="{{ asset('img/icons/g+.png') }}"></a>
                    <a href="https://www.facebook.com/novotaghavi" target="_blank"><img src="{{ asset('img/icons/fb-top.png') }}"></a></a>
                    <a href="https://www.youtube.com/channel/UCMbsWtzxAwuVBmM0I0ZZCJg" target="_blank"><img src="{{ asset('img/icons/yt.png') }}"></a>
                </div>
                <p>
                    {{ trans('general.address') }}:
                    1500 Forest Avenue, Suite 124, Richmond, VA<br>
                    {{ trans('general.phone') }}:
                    804-614-6920
                </p>
            </div>
        </div>
    </div>
@stop
@section('custom-footer-js')
    <script>
        var map;
        function initMap() {
            var RaulLawLatLong = new google.maps.LatLng(37.600269150473515,-77.54628222513122);
            var mapOptions = {
                center: RaulLawLatLong,
                zoom: 14
            }
            map = new google.maps.Map(document.getElementById('map'), mapOptions);

            var marker = new google.maps.Marker({
                position: RaulLawLatLong,

                title: 'Hello World!'
            });
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJeWp2RAWWa_fBnhE02n-3aWIEazcSI9I&callback=initMap"
            async defer></script>
@endsection