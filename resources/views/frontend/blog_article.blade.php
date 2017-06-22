@extends('frontend.layouts.default')
@section('custom-header')
    <link rel="stylesheet" href="{{ asset('packages/rrssb/css/rrssb.css') }}" />
@endsection
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <div class="blog_content">

                <article>
                    <span class="article_title">{{ $post->title }}</span><br>
                    <span class="">{{ $publishedAt }}</span>
                    <div class="article_content">
                        {{--@if(!empty($post->post->image))--}}
                            {{--<img src="{{ asset($post->post->image) }}">--}}
                        {{--@endif--}}
                        <p>{!! $post->body !!}</p>
                    </div>
                </article>
                <div class="share_socials" style="font-family: helvetica, arial, sans-serif; ">
                    @include('frontend.partials.socials')
                </div>
                <br>

                <div class="clear"></div>

            </div>
            <div class="sidebar">
                <div class="widget">
                <span class="widget_title">
                    {{ trans('general.featured_posts') }}
                </span>
                    @foreach($featured as $post)
                        <a href="{{ url('blog/'.$post->slug) }}">
                            @if(!empty($post->post->image))
                                <img src="{{ asset($post->post->image) }}">
                            @endif
                                <p class="widget_post_title">{{ $post->title }}</p>
                            <span class="">{{ convertTime($post->post->published_at) }}</span>
                        </a>
                    @endforeach
                </div>

                <div class="widget">
                <span class="widget_title">
                    {{ trans('general.recent_posts') }}
                </span>
                    @foreach($latest as $post)
                        <a href="{{ url('blog/'.$post->slug) }}">
                            @if(!empty($post->post->image))
                                <img src="{{ asset($post->post->image) }}">
                            @endif
                            <p class="widget_post_title">{{ $post->title }}</p>
                            <span class="">{{ convertTime($post->post->published_at) }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@stop
@section('custom-footer-js')
    <script>
        jQuery(document).ready(function ($) {

            $('.rrssb-buttons').rrssb({
                // required:
                title: '{{ $post->title }}',
                url: '{{ Request::url() }}',

                // optional:
                description: '{!! excerpt(strip_tags($post->body)) !!}'
//                emailBody: 'Usually email body is just the description + url, but you can customize it if you want'
            });

        });
    </script>
    <script src="{{ asset('packages/rrssb/js/rrssb.min.js') }}"></script>
@endsection