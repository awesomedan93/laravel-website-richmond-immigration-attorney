@extends('frontend.layouts.default')
@section('content')
    <div class="slider parallax">
        <div class="container">
            <div class="slider_title">Let us build a strong case for you.</div>
            <div class="align_center">
                <a href="{{ url('/contact') }}" class="button slider_button">Get in touch</a>
            </div>
        </div>


    </div>


    <div class="home_first_row align_center">
        <div class="container">
            <div class="square">

                <h2 class="blue_title">About Novo Taghavi</h2>

                <h6>Central Virginia’s Premier Immigration & Criminal Defense Firm</h6>

                <p>
                    Rapidly changing social and family dynamics have produced a need for legal practitioners skilled in criminal as well as immigration matters, commonly referred to as Crimmigration Law.  Whether you have a legal issue that directly affects you or a loved one, let Novo Taghavi build a strong case for you.  We have over twenty years combined experience in State and Federal Courts protecting the rights of those clients facing the toughest cases, such as: rape, murder, drug distribution, DUI’s, removal and deportation, asylum petitions, as well other forms of immigrations relief.  You will personally meet with your attorney, and understand every legal step along the way towards having your case resolved promptly and professionally.  Don’t waste time, call us today and we will start building a strong case for you right away!
                </p>
                <br>
                <a href="{{ url('/about') }}" class="button blue_button">Learn more about us</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="home_second_row align_center">
        <div class="container">

            <h2 class="blue_title">Cases We Handle</h2>

            <p>
                Our firm is a full-service immigration law firm that handles family and employment-based immigration cases, humanitarian relief and removal defense. We also have over twenty years of experience in Central Virginia practicing Criminal and Traffic defense. Our attorneys are well-versed in the cross-section of Criminal and Immigration Law in what is known to be Crimmigration Law. Learn more about how we can make your case our priority.
            </p>
            <div class="first_row">
                <div class="left_square">
                    <div class="blue_square_title">
                        <h3 class="blue_title">Criminal Defense</h3>
                    </div>

                    <a href="{{ url('/cases/criminal-defense') }}"><img src="{{ asset('./img/immigration-arrest-richmond-va.jpg') }}" alt="immigration arrest richmond va"></a>
                </div>
                <div class="right_square">
                    <div class="blue_square_title">
                        <h3 class="blue_title">Immigration Law</h3>
                    </div>
                    <a href="{{ url('/cases/immigration_law') }}"><img src="{{ asset('./img/immigration-lawyer-hopewell-va.jpg') }}" alt="immigration lawyer hopewell va"></a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="second_row">
                <div class="left_square">
                    <div class="blue_square_title">
                        <h3 class="blue_title">Traffic Law</h3>
                    </div>
                    <a href="{{ url('/cases/traffic-law') }}"><img src="{{ asset('./img/work-visa-lawyer-richmond-va.jpg') }}" alt="work visa lawyer richmond va"></a>
                </div>
                <div class="right_square">
                    <div class="blue_square_title">
                        <h3 class="blue_title">DUI Law</h3>
                    </div>
                    <a href="{{ url('/cases/dui-law') }}"><img src="{{ asset('./img/fiancee-k1-visa-lawyer-virginia.jpg) }}" alt="fiancee k1 visa lawyer virginia"></a>
                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>
    <div class="home_third_row align_center">
        <div class="container align_center_text">
            <div class="quote">
                <div class="quote_icon"></div><div class="text_align_right">- Umar</div>

                <p>"I am a highly satisfied client! Because of you, I got a green card. You are efficient and have saved a lot of my time in handling my complicated immigration case.</p>
                <p>I will always stay with you for all my legal and immigration advice. I am also highly recommending you to all my friends and colleagues for immigration/ criminal issues.</p>
            </div>
            <a href="{{ url('/testimonials') }}" class="button blue_button">More Testimonials</a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="home_fourth_row align_center">
        <div class="container">
            <h2 class="blue_title padding_title">
                Get in Touch
            </h2>
            <span>
                Contact us now for your FREE CASE EVALUATION
            </span>
            <br><br><br>
            <div class="contact_form">
                <form class="text_align_left">

                    <input type="text" name="firstname" placeholder="First Name" class="contact_form_name">

                    <input type="text" name="email" placeholder="Email" class="contact_form_email">

                    <input type="text" name="lastname" placeholder="Last Name">

                    <input type="text" name="phone" placeholder="Phone">

                    <textarea name="message" placeholder="Message"></textarea>
                    <input type="submit" value="Send" class="contact_form_submit">
                </form>
                <span class="terms">*By submitting this contact form, I have read & agreed to the <a href="">Terms & Conditions.</a></span>
                <br><br>
                <img src="{{ asset('./img/fb.png') }}">
            </div>
        </div>
    </div>
@stop