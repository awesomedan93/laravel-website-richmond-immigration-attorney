<!-- START HEADER -->
<header class="header">
    <div class="container">

        <a href="{{ url('/') }}"><img src="{{ asset('./img/raul-novo-soulmaz-taghavi-lawyers.png') }}" class="logo" alt="raul novo soulmaz taghavi lawyers"></a>
        <div class="socials">
            <span class="tel"><a href="tel:(804) 614-6920">(804) 614-6920</a></span><br>
            <a href="https://plus.google.com/+NovoTaghaviRichmond" target="_blank"><img src="{{ asset('./img/g+.png') }}"></a>
            <a href="https://www.facebook.com/novotaghavi/" target="_blank"><img src="{{ asset('./img/fb-top.png') }}"></a>
            <a href="https://www.youtube.com/channel/UCMbsWtzxAwuVBmM0I0ZZCJg" target="_blank"><img src="{{ asset('./img/yt.png') }}"></a>
        </div>
    </div>
</header>
<nav class="nav">
    <div class="container nav_items">
        <ul class="nav_left_block">
            <li>
                <a href="{{ url('about') }}">About</a>
            </li>
            <li>
                <a href="{{ url('cases') }}">Cases we handle</a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/cases/criminal-defense') }}">Criminal Defense</a></li>
                    <li><a href="{{ url('/cases/immigration_law') }}">Immigration Law</a></li>
                    <li><a href="{{ url('/cases/traffic-law') }}">Traffic Law</a></li>
                    <li><a href="{{ url('/cases/dui-law') }}">DUI Law</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('attorneys') }}">Attorneys</a>
                <ul class="sub-menu">
                    <li><a href="{{ url('/attorneys/raul-novo') }}">Raul Novo</a></li>
                    <li><a href="{{ url('/attorneys/soulmaz-taghavi') }}">Soulmaz Taghavi</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('testimonials') }}">Testimonials</a>
            </li>
            <li>
                <a href="{{ url('blog') }}">Blog</a>
            </li>
            <li>
                <a href="{{ url('contact') }}">Contact</a>
            </li>
        </ul>
        <!-- END: NAV -->
        <ul class="lang_switcher">
            @if(App::getLocale() == 'es')
                <li><a href="{{LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
            @else
                <li><a href="{{LaravelLocalization::getLocalizedURL('es') }}">Español</a></li>
            @endif
        </ul>
        <div class="responsive-menu-icon slide-menu-open">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


</nav>
<div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
<div class="side-menu-wrapper">
    <a href="#" class="menu-close">&times;</a>
    <ul>
        <li>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/cases') }}">Cases we handle</a>
            <ul class="sub-menu-items">
                <li><a href="{{ url('/cases/criminal-defense') }}">Criminal Defense</a></li>
                <li><a href="{{ url('/cases/immigration_law') }}">Immigration Law</a></li>
                <li><a href="{{ url('/cases/traffic-law') }}">Traffic Law</a></li>
                <li><a href="{{ url('/cases/dui-law') }}">DUI Law</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ url('/attorneys') }}">Attorneys</a>
            <ul class="sub-menu">
                <li><a href="{{ url('/attorneys/raul-novo') }}">Raul Novo</a></li>
                <li><a href="{{ url('/attorneys/soulmaz-taghavi') }}">Soulmaz Taghavi</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/testimonials') }}">Testimonials</a></li>
        <li><a href="{{ url('/blog') }}">Blog</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</div>
