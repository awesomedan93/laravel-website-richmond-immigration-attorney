<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
@include('frontend.includes.head')
</head>
<body>
@include('frontend.includes.header')

@yield('content')

@include('frontend.includes.footer')
<script>
    $(function(){
        $("ul.nav_left_block > li").hover(function(){
                var sub_menu = $(this).children("ul");
                sub_menu.stop().fadeIn("slow");
                sub_menu.css('position','absolute');
                sub_menu.css('padding-top','12px');
            },
            function(){
                var sub_menu = $(this).children("ul");
                sub_menu.stop().fadeOut("slow");
            })
    })
</script>
<script>
    var slidebar_width  = 290; //slidebar width + padding size
    var slide_bar       = $(".side-menu-wrapper"); //slidebar
    var slide_open_btn  = $(".slide-menu-open"); //slidebar close btn
    var slide_close_btn = $(".menu-close"); //slidebar close btn
    var overlay         = $(".side-menu-overlay"); //slidebar close btn

    slide_open_btn.click(function(e){
        e.preventDefault();
        slide_bar.css( {"right": "0px"}); //change to "right" for right positioned menu
        slide_bar.css( {"left": "auto"}); //change to "right" for right positioned menu
        overlay.css({"opacity":"1", "width":"100%"});
    });
    slide_close_btn.click(function(e){
        console.log('close menu');
        e.preventDefault();
        slide_bar.css({"right": "-"+ slidebar_width + "px"}); //change to "right" for right positioned menu
        slide_bar.css( {"left": "-290px"});
        overlay.css({"opacity":"0", "width":"0"});
    });
</script>
@yield('custom-footer-js')
</body>
</html>