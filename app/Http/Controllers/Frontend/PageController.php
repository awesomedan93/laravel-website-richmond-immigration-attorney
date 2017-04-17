<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $page = Route::currentRouteName();

        switch ($page) {
            case "pages.home":
                return view('frontend.index');
                break;

            case "pages.about":
                return view('frontend.about');
                break;

            case "pages.cases":
                return view('frontend.cases');
                break;

            case "pages.cases.criminal_defense":
                return view('frontend.case_criminal_defense');
                break;

            case "pages.cases.immigration_law":
                return view('frontend.case_immigration_law');
                break;

            case "pages.cases.traffic_law":
                return view('frontend.case_traffic_law');
                break;

            case "pages.cases.dui_law":
                return view('frontend.case_dui_law');
                break;

            case "pages.attorneys":
                return view('frontend.attorneys');
                break;

            case "pages.raul_novo":
                return view('frontend.lawyer');
                break;

            case "pages.soulmaz_taghavi":
                return view('frontend.lawyer2');
                break;

            case "pages.testimonials":
                return view('frontend.testimonials');
                break;

            case "pages.contact":
                return view('frontend.contact');
                break;

            case "pages.terms_and_conditions":
                return view('frontend.terms-and-conditions');
                break;
            default:
                return view('frontend.index');
        }
    }
}
