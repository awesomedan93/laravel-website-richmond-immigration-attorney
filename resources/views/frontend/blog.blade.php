@extends('frontend.layouts.default')
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <div class="blog_content">
                @foreach($posts as $post)
                    <article>
                        <a href="blog_article.html" class="article_title">{{ $post->title }}</a><br>
                        <span class="">{{ $post->pulished_at }}</span>
                        <div class="article_content">
                            <div class="article_image">
                                <img src="{{ asset('img/article_image.png') }}">
                            </div>
                            <p>
                                {!! excerpt(strip_tags($post->body)) !!}
                                <div class="clear"></div>
                                <a href="blog_article.html" class="button read_more float_left">Read more</a>
                            </p>

                        </div>
                    </article>
                @endforeach
                <div class="clear"></div>
                <div class="center">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#" class="article_active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div>
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