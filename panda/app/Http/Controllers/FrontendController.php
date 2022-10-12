<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Counter;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class FrontendController extends Controller
{
    function welcome(){
        $all_info = Banner::where('banner_status',1)->get();
        $all_about = About::where('about_status',1)->get();
        $all_work = Work::all();
        $all_service = Service::all();
        $all_counter = Counter::all();
        $all_portfolio = Portfolio::all();
        return view('frontend.master',[
            'all_info'=>$all_info,
            'all_about'=>$all_about,
            'all_work'=>$all_work,
            'all_service'=>$all_service,
            'all_counter'=>$all_counter,
            'all_portfolio'=>$all_portfolio,
        ]);
    }
}
