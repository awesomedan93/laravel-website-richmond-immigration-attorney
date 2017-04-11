@extends('frontend.layouts.default')
@section('content')
<div class="container">
    <div class="about_us_left_block">
        <br>
        <h2 class="blue_title">{{ trans('pages/about.title') }}</h2>

        <h6>Central Virginia’s Premier Immigration & Criminal Defense Attorneys</h6>
        <p>
            The ancient Chinese proverb wishing, “may you live in interesting times” has never been more true.  Two of the most controversial issues facing society today are immigration and criminal justice.  As laws have become more complex, the average person cannot afford to take on these twin hurdles without competent, aggressive legal counsel.
        </p>
        <p>
            Founded at the end of 2016, Novo Taghavi, Ltd. is a law firm specializing in personal service for difficult criminal and immigration cases. Soulmaz Taghavi honed her skills in both disciplines while Raul Novo has concentrated solely on criminal and traffic representation. The unique pairing of these two Children of Revolution to take on the toughest cases clients face was a natural consequence of the blending of laws known as “crimmigration.”  Make an appointment today with Soulmaz or Raul and see how we can help you navigate these interesting times.</p>
        <a href="{{ url('/contact') }}" class="button blue_button float_left">Get in touch</a>
        <br><br><br>
    </div>
    <div class="about_us_right_block">
        <img src="@lang('pages/about.about_us_image')">
    </div>

    <div class="clear"></div>
</div>
@stop