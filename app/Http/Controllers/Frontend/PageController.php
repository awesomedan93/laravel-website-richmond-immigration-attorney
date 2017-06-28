<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
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
        $routeName = Route::currentRouteName();


        switch ($routeName) {
            case "pages.home":

                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.index',['metaTags'=>$metaTags]);
                break;

            case "pages.about":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.about',['metaTags'=>$metaTags]);
                break;

            case "pages.cases":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.cases',['metaTags'=>$metaTags]);
                break;

            case "pages.cases.criminal_defense":

                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.case_criminal_defense',['metaTags'=>$metaTags]);
                break;

            case "pages.cases.immigration_law":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.case_immigration_law',['metaTags'=>$metaTags]);
                break;

            case "pages.cases.traffic_law":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.case_traffic_law',['metaTags'=>$metaTags]);
                break;

            case "pages.cases.dui_law":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.case_dui_law',['metaTags'=>$metaTags]);
                break;

            case "pages.attorneys":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.attorneys',['metaTags'=>$metaTags]);
                break;

            case "pages.raul_novo":

                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.lawyer',['metaTags'=>$metaTags]);
                break;

            case "pages.soulmaz_taghavi":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.lawyer2',['metaTags'=>$metaTags]);
                break;

            case "pages.reviews":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.reviews',['metaTags'=>$metaTags]);
                break;

            case "pages.contact":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.contact',['metaTags'=>$metaTags]);
                break;

            case "pages.terms_and_conditions":
                $page = new Page();
                $metaTags = $page->getMetaTags($routeName);

                return view('frontend.terms-and-conditions',['metaTags'=>$metaTags]);
                break;
            default:

                return view('frontend.index',['metaTags'=>$metaTags]);
        }
    }

    public function sendEmail(Request $request)
    {

        $inputData = $request->all();

        $to = "info@novotaghavi.com";
        $headers = "From: info@richmondimmigrationattorney.com";
        $msg = 'Message: '.$inputData['message']. "\n".'Phone: '.$inputData['phone'];
        $success = mail($to,$inputData['firstname'],$msg,$headers);

        if($success){
            $request->session()->flash('alert-success', 'Email has been sent!');
        }else{
            $request->session()->flash('alert-danger', 'Something wrong!');
        }
        return Redirect::to('/contact#success');
    }

    public function sendEmailHome(Request $request)
    {

        $inputData = $request->all();

        $to = "info@novotaghavi.com";
        $headers = "From: info@richmondimmigrationattorney.com";
        $msg = 'Message: '.$inputData['message']. "\n".'Phone: '.$inputData['phone'];
        $success = mail($to,$inputData['firstname'],$msg,$headers);

        if($success){
            $request->session()->flash('alert-success', 'Email has been sent!');
        }else{
            $request->session()->flash('alert-danger', 'Something wrong!');
        }
        return Redirect::to('#success');
    }
}
