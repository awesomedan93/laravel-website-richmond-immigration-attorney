@extends('frontend.layouts.default')
@section('content')
    <div class="contact_row">
        <div class="container align_center">
            <br>
            <div id="map"></div>

            <h2 class="blue_title padding_title">
                Get in Touch
            </h2>
            <span>
                Contact us now for your FREE CASE EVALUTATION
            </span>
            <br><br><br>
            <div class="contact_form contact_form_page">
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

                <div class="socials_contact">
                    <a href="https://plus.google.com/+NovoTaghaviRichmond" target="_blank"><img src="{{ asset('./img/g+.png') }}"></a>
                    <a href="https://www.facebook.com/novotaghavi" target="_blank"><img src="{{ asset('./img/fb-top.png') }}"></a></a>
                    <a href="https://www.youtube.com/channel/UCMbsWtzxAwuVBmM0I0ZZCJg" target="_blank"><img src="{{ asset('./img/yt.png') }}"></a>
                </div>
                <p>
                    Address:
                    1500 Forest Avenue, Suite 124, Richmond, VA<br>
                    Phone:
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
                zoom: 14,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#ff8000"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#ff8000"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#181818"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#1b1b1b"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#2c2c2c"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#8a8a8a"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#373737"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#3c3c3c"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#4e4e4e"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#3d3d3d"
                            }
                        ]
                    }
                ]
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