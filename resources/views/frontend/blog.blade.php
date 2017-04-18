@extends('frontend.layouts.default')
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <div class="blog_content">
                @if($posts->count() == 0)
                    <h3>No Posts Found</h3>
                @endif
                @foreach($posts as $postTranslation)

                    <article>
                        
                        <a href="{{ url('blog/'.$postTranslation->slug) }}" class="article_title">{{ $postTranslation->title }}</a><br>
                        <span class="">{{ $postTranslation->pulished_at }}</span>
                        <div class="article_content">

                            <div class="article_image">

                                @if(!empty($postTranslation->post->image))
                                    <a href="{{ url('blog/'.$postTranslation->slug) }}"><img src="{{ asset($postTranslation->post->image) }}"></a>
                                @endif
                            </div>
                            <p>
                                {!! excerpt(strip_tags($postTranslation->body)) !!}
                                <div class="clear"></div>
                                <a href="{{ url('blog/'.$postTranslation->slug) }}" class="button read_more float_left">Read more</a>
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
                    @foreach($featured as $post)
                        @if(!empty($post->post->image))
                            <img src="{{ asset($post->post->image) }}">
                        @endif
                    <p>{!! excerpt(strip_tags($post->body)) !!}</p>
                    <span class="">{{ convertTime($post->post->published_at) }}</span>
                    @endforeach
                </div>

                <div class="widget">
                <span class="widget_title">
                    Recent Posts
                </span>
                    @foreach($latest as $post)
                        @if(!empty($post->post->image))
                            <img src="{{ asset($post->post->image) }}">
                        @endif
                        <p>{!! excerpt(strip_tags($post->body)) !!}</p>
                        <span class="">{{ convertTime($post->post->published_at) }}</span>
                    @endforeach
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@stop