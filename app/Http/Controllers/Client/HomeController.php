<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FrontendPage;
use App\Models\Setting;
use App\Models\Testimonial;

class HomeController extends Controller
{

    public function home(){
        $obj = FrontendPage::with('faq')->where('id',1)->first();
        $testimonials = Testimonial::all();
        // $settings= Setting::all();
        
        
        return view('client.home',compact('obj','testimonials'));
    }
}