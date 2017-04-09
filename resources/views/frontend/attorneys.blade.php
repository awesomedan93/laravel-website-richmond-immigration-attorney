@extends('frontend.layouts.default')
@section('content')
<div class="slider_attorneys">

    <div class="container">
        <div class="attorneys_slider_title">
            <h2 class="attorneys_title">Meet The Team</h2>
            <span class="bold_title">Let us build a strong case for you.</span><br><br>
            Raul Novo and Soulmaz Taghavi have a combined 20 years of experience in both federal and local courts.
            They are passionate, aggressive and tenacious attorneys.
        </div>
    </div>

</div>
<div class="attorneys_row">
    <div class="container">
        <div class="attorneys_block">
            <img src="{{ asset('./img/best-criminal-lawyer-in-chesterfield-va.png') }}" class="attorneys_sub_block" alt="best criminal lawyer in chesterfield va">
            <span class="attorneys_sub_block_right">
                <br>
                <h6>Attorney</h6>
                <h2 class="blue_title">Raul Novo</h2>
                <p>
                Raul Novo is a Partner and Co-Founder of Novo Taghavi, located in Richmond Virginia where his practice expands Criminal & Traffic Defense and Immigration Law.
                </p>
                <a href="{{ url('/attorneys/raul-novo') }}" class="button blue_button responsive_align">Learn more about Raul</a>
            </span>

        </div>
        <div class="attorneys_block">
            <img src="{{ asset('./img/best-immigration-lawyer-in-henrico.png') }}" class="attorneys_sub_block" alt="best immigration lawyer in henrico">
            <span class="attorneys_sub_block_right">
                <br>
                <h6>Attorney</h6>
                <h2 class="blue_title">Soulmaz Taghavi</h2>
                <p>
                Soulmaz Taghavi is a Partner and Co-Founder of Novo Taghavi, located in Richmond, Virginia where her practice expands Immigration Law, Criminal & Traffic Defense and Family Law.
                </p>
                <a href="{{ url('/attorneys/soulmaz-taghavi') }}" class="button blue_button">Learn more about Soulmaz</a>
            </span>

        </div>
    </div>
</div>
@stop
@section('custom-footer-js')
<script>
    $(function() {
        $('.slider_attorneys').parallax({
            imageSrc: './img/attorneys.png',
            speed:0.5,
            naturalWidth:1960,
            nautralHeight:1120

        });
    });
</script>
@endsection