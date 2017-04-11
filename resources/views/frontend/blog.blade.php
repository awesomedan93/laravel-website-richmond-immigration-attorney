@extends('frontend.layouts.default')
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <div class="blog_content">

                <article>
                    <a href="blog_article.html" class="article_title">Deportation threat strikes fear in county’s growing Latino population</a><br>
                    <span class="">March 27, 2017</span>
                    <div class="article_content">
                        <div class="article_image">
                            <img src="{{ asset('img/article_image.png') }}">
                        </div>
                        <p>
                            Attorney Soulmaz Taghavi was featured in Chesterfield Observer stressing that there is indeed a fresh wave of fear of deportation among Chesterfield County's growing Latino population.
                            It’s a stressful time for Noemi. In addition to working full time at a Midlothian lau...
                        <div class="clear"></div>
                        <a href="blog_article.html" class="button read_more float_left">Read more</a>
                        </p>

                    </div>
                </article>
                <article>
                    <a href="blog_article.html" class="article_title">Deportation threat strikes fear in county’s growing Latino population</a><br>
                    <span class="">March 27, 2017</span>
                    <div class="article_content">
                        <div class="article_image">
                            <img src="{{ asset('img/article_image.png') }}">
                        </div>
                        <p>
                            Attorney Soulmaz Taghavi was featured in Chesterfield Observer stressing that there is indeed a fresh wave of fear of deportation among Chesterfield County's growing Latino population.
                            It’s a stressful time for Noemi. In addition to working full time at a Midlothian lau...
                        <div class="clear"></div>
                        <a href="blog_article.html  " class="button read_more float_left">Read more</a>
                        </p>

                    </div>
                </article>
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