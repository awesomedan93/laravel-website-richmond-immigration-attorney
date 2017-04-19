@extends('frontend.layouts.default')
@section('custom-header')
    <link rel="stylesheet" href="{{ asset('packages/rrssb/css/rrssb.css') }}" />
@endsection
@section('after-body')
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=450339215153598";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
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
                        @if(!empty($post->image))
                            <img src="{{ asset($post->image) }}">
                        @endif
                        <p>{!! $post->body !!}</p>
                    </div>
                </article>
                <div class="share_socials" style="font-family: helvetica, arial, sans-serif; ">
                    @include('frontend.partials.socials')
                </div>
                <br>
                <div class="fb-comments" data-width="100%" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
                <div class="clear"></div>

            </div>
            <div class="sidebar">
                <div class="widget">
                <span class="widget_title">
                    Featured Posts
                </span>
                    @foreach($featured as $post)
                        <a href="{{ url('blog/'.$post->slug) }}">
                            @if(!empty($post->post->image))
                                <img src="{{ asset($post->post->image) }}">
                            @endif
                            <p>{!! excerpt(strip_tags($post->body)) !!}</p>
                            <span class="">{{ convertTime($post->post->published_at) }}</span>
                        </a>
                    @endforeach
                </div>

                <div class="widget">
                <span class="widget_title">
                    Recent Posts
                </span>
                    @foreach($latest as $post)
                        <a href="{{ url('blog/'.$post->slug) }}">
                            @if(!empty($post->post->image))
                                <img src="{{ asset($post->post->image) }}">
                            @endif
                            <p>{!! excerpt(strip_tags($post->body)) !!}</p>
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
    <script src="{{ asset('packages/rrssb/js/rrssb.min.js') }}"></script>
@endsection