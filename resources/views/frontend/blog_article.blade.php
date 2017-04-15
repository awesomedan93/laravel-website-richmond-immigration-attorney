@extends('frontend.layouts.default')
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
                <div class="share_socials">

                </div>
                <div class="fb-comments" data-width="100%" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
                <div class="clear"></div>

            </div>
            <div class="sidebar">
                <div class="widget">
                <span class="widget_title">
                    Featured Posts
                </span>
                    <img src="img/article_image.png">
                    <p>
                        Deportation threat strikes fear in county’s growing Latino population

                    </p>
                    <span class="">March 27, 2017</span>
                </div>

                <div class="widget">
                <span class="widget_title">
                    Recent Posts
                </span>
                    <img src="img/article_image.png">
                    <p>
                        Deportation threat strikes fear in county’s growing Latino population

                    </p>
                    <span class="">March 27, 2017</span>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@stop