<!-- START HEADER -->
<header class="header">
    <div class="container">

        <a href="{{ LaravelLocalization::getLocalizedURL(null, '/') }}" class="logo_href"><img src="{{ asset('img/raul-novo-soulmaz-taghavi-lawyers.png') }}" class="logo" alt="raul novo soulmaz taghavi lawyers"><div class="clear"></div><span>RichmondImmigrationAttorney.com</span>
        </a>

        <div class="socials">
            <span class="tel"><a href="tel:(804) 614-6920">(804) 614-6920</a></span><br>
            <a href="https://plus.google.com/+NovoTaghaviRichmond" target="_blank"><img src="{{ asset('img/icons/g+.png') }}"></a>
            <a href="https://www.facebook.com/novotaghavi/" target="_blank"><img src="{{ asset('img/icons/fb-top.png') }}"></a>
            <a href="https://www.youtube.com/channel/UCMbsWtzxAwuVBmM0I0ZZCJg" target="_blank"><img src="{{ asset('img/icons/yt.png') }}"></a>
        </div>
    </div>
</header>
<nav class="nav">
    <div class="container nav_items">
        <ul class="nav_left_block">
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL(null, 'about') }}">{{ trans('general.about') }}</a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL(null, 'cases') }}">{{ trans('general.cases_we_handle') }}</a>
                <ul class="sub-menu">
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases/criminal-defense') }}">{{ trans('general.case_criminal_defense') }}</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases/immigration_law') }}">{{ trans('general.case_immigration_law') }}</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases/traffic-law') }}">{{ trans('general.case_traffic_law') }}</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases/dui-law') }}">{{ trans('general.case_dui_law') }}</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL(null, 'attorneys') }}">{{ trans('general.attorneys') }}</a>
                <ul class="sub-menu">
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/attorneys/raul-novo') }}">Raul Novo</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/attorneys/soulmaz-taghavi') }}">Soulmaz Taghavi</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL(null, 'reviews') }}">{{ trans('general.testimonials') }}</a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL(null, 'blog') }}">{{ trans('general.blog') }}</a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::getLocalizedURL(null, 'contact') }}">{{ trans('general.contact') }}</a>
            </li>
        </ul>
        <!-- END: NAV -->
        <ul class="lang_switcher">
            @include('frontend.includes.language_switcher')
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
            <a href="{{ LaravelLocalization::getLocalizedURL(null, '/about') }}">{{ trans('general.about') }}</a>
            <a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases') }}">{{ trans('general.cases_we_handle') }}</a>
            <ul class="sub-menu-items">
                <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases/criminal-defense') }}">{{ trans('general.case_criminal_defense') }}</a></li>
                <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases/immigration_law') }}">{{ trans('general.case_immigration_law') }}</a></li>
                <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases/traffic-law') }}">{{ trans('general.case_traffic_law') }}</a></li>
                <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/cases/dui-law') }}">{{ trans('general.case_dui_law') }}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ LaravelLocalization::getLocalizedURL(null, '/attorneys') }}">{{ trans('general.attorneys') }}</a>
            <ul class="sub-menu-items">
                <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/attorneys/raul-novo') }}">Raul Novo</a></li>
                <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/attorneys/soulmaz-taghavi') }}">Soulmaz Taghavi</a></li>
            </ul>
        </li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/reviews') }}">{{ trans('general.testimonials') }}</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/blog') }}">{{ trans('general.blog') }}</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(null, '/contact') }}">{{ trans('general.contact') }}</a></li>
    </ul>
</div>
