@extends('frontend.layouts.default')
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <div class="blog_content">
                @foreach($posts as $postTranslation)

                    <article>
                        
                        <a href="{{ url('blog/'.$postTranslation->slug) }}" class="article_title">{{ $postTranslation->title }}</a><br>
                        <span class="">{{ $postTranslation->pulished_at }}</span>
                        <div class="article_content">

                            <div class="article_image">
                                @if(!empty($postTranslation->post->image))
                                    <img src="{{ asset($postTranslation->post->image) }}">
                                @endif
                            </div>
                            <p>
                                {!! excerpt(strip_tags($postTranslation->body)) !!}
                                <div class="clear"></div>
                                <a href="blog_article.html" class="button read_more float_left">Read more</a>
                            </p>

                        </div>
                    </article>
                @endforeach
                <div class="clear"></div>

                <div class="center">
                    @include('frontend.partials.pagination', ['paginator' => $posts])
                </div>
            </div>
            <div class="sidebar">
                <div class="widget">
                <span class="widget_title">
                    Featured Posts
                </span>
                    <img src="{{ asset('img/article_image.png') }}">
                    <p>
                        Deportation threat strikes fear in county’s growing Latino population

                    </p>
                    <span class="">March 27, 2017</span>
                </div>

                <div class="widget">
                <span class="widget_title">
                    Recent Posts
                </span>
                    <img src="{{ asset('img/article_image.png') }}">
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