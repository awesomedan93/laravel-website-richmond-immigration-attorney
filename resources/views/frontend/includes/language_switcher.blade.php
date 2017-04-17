

@if(Route::currentRouteName() == 'blog.post')
    {{--{{dd(str_replace(end(Request::segments()), 'my-new-url', Request::url()))}}--}}
    @if(App::getLocale() == 'es')
        <li><a href="{{ $translatedPostUrl }}">English</a></li>
    @else
        <li><a href="{{ $translatedPostUrl }}">Español</a></li>
    @endif
@else
    @if(App::getLocale() == 'es')
        <li><a href="{{LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
    @else
        <li><a href="{{LaravelLocalization::getLocalizedURL('es') }}">Español</a></li>
    @endif
@endif

