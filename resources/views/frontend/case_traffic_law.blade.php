@extends('frontend.layouts.default')
@section('content')
    <div class="case_row">
        <div class="container">
            <br>
            <h2 class="blue_title">Traffic Law</h2>

            <h6>Richmond Traffic Lawyer</h6>
            <br>
            <h6 class="bold_text">DON’T RISK LOSING YOUR LICENSE</h6>
            <p>
                Traffic violations in Virginia can be serious offenses. Most drivers never think about fighting their traffic tickets or moving violations in Virginia. With the help of a qualified and experienced traffic lawyer, you could have your charges reduced or even dismissed. If you have gotten a ticket in Richmond, Henrico, Chesterfield or surrounding areas in Virginia, contact our law office today for a free consultation.
                ​        </p>
            <h6 class="bold_text">HOW MANY POINTS WILL I GET ON MY LICENSE FOR A TRAFFIC TICKET IN VIRGINIA?</h6>
            <p>
                Virginia uses a system of demerit points for moving traffic violations. The number of points on your license varies according to the nature of the violation. Less serious violations typically result in three demerit points while more serious violations such as DUI or reckless driving can result in up to six demerit points. In addition to possible suspension of license, demerit points can carry other negative implications such as an increase in your car insurance.
                ​       </p>
            <h6 class="bold_text">HOW MANY POINTS CAN I GET ON MY LICENSE BEFORE IT IS SUSPENDED?</h6>
            <p>In Virginia, if you sustain 18 demerit points in a 12 month period your driver’s license will be suspended and you will be required to go to driving school. The length of the suspension will depend on the nature of the traffic violation. Likewise, if you sustain 24 demerit points in 24 months, your license will be suspended.</p>
            <h6 class="bold_text">WHAT IS RECKLESS DRIVING IN VIRGINIA?</h6>
            <p>Reckless driving in Virginia is a serious offense. Virginia defines reckless driving as:</p>
            <ul class="lawyer_list">
                <li>Driving in a manner that an officer deems to endanger life, limb, or property</li>
                <li>Driving 20 miles per hour over the posted speed limit, or</li>
                <li>Driving over 80 miles per hour</li>
            </ul>
            <br>
            <p>
                Reckless driving in Virginia carries stiff penalties and they are categorized as criminal offenses.
                Convictions for reckless driving in Virginia can result in the following:
            </p>
            <ul class="lawyer_list">
                <li>Up to 12 months in jail</li>
                <li>Up to a $2,500 fine</li>
                <li>Loss of driver’s license for up to one year</li>
            </ul>
            <h6 class="bold_text">OUR RICHMOND TRAFFIC LAWYERS CAN HELP PROTECT YOUR RIGHTS</h6>
            <p>Hiring a qualified traffic lawyer can save you money in fines and protect you from losing your driver’s license. Don’t risk losing your license if you don’t have to. The law firm of Novo Taghavi is ready to help you protect your rights in your traffic ticket case.</p>

            <span class="align_center_text">
            <h6 class="bold_text">
            GET HELP FROM AN EXPERIENCED RICHMOND, VA TRAFFIC LAWYER
            </h6>
            <span class="align_center_text">We are here to answer your questions and fight for your rights. Call today for your free consultation.<br>(804) 614-6920</span>
        </span>
            <br><br>
            <a href="{{ url('/cases') }}" class="button orange_button responsive_align">Practice Areas</a>
            <br><br>
        </div>
    </div>
    <div class="case_quote_row align_center">
        <div class="container">
            <div class="quote">
                <div class="quote_icon"></div><div class="text_align_right">- Umar</div>

                <p>"I am a highly satisfied client! Because of you, I got a green card. You are efficient and have saved a lot of my time in handling my complicated immigration case.</p>
                <p>I will always stay with you for all my legal and immigration advice. I am also highly recommending you to all my friends and colleagues for immigration/ criminal issues.</p>
            </div>
            <a href="{{ url('/testimonials') }}" class="button blue_button align_right">More Testimonials</a>
            <div class="clear"></div>
        </div>
    </div>
@stop