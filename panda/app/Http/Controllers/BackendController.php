<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Counter;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Work;
use Carbon\Carbon;
use Image;

class BackendController extends Controller
{
    function add_banner(){
        return view('backend.banner.add_banner');
    }
    function insert_banner(Request $request){
        $request->validate([
            'banner_name'=>'required',
            'banner_img'=>'required',
        ]);
        $banner_id = Banner::insertGetId([
            'banner_name'=>$request->banner_name,
            'created_at'=>Carbon::now(),
        ]);
        $banner_img = $request->banner_img;
        $extension = $banner_img->getClientOriginalExtension();
        $file_name = $banner_id.'.'.$extension;
        $img = Image::make($banner_img)->save(public_path('/uploads/banner/'.$file_name));
        Banner::where('id',$banner_id)->update([
            'banner_img'=>$file_name,
        ]);
        return back()->with('success','Banner Added!!');
    }
    function view_banner(){
        $banner_info = Banner::all();
        return view('backend.banner.view_banner',[
            'banner_info'=>$banner_info,
        ]); 
    }
    function banner_status($banner_id){
        $banner_status = Banner::where('id',$banner_id)->get();
        if(Banner::count('id',$banner_id) >=0){
            if($banner_status->first()->banner_status == 0){
                $banner_status=1;
            }
            else{
                $banner_status=0;
            }
        }
        else{
            $banner_status=1;
        }
       
        Banner::where('id',$banner_id)->update([
            'banner_status'=>$banner_status,
        ]);
        return back();
    }
    function delete_banner($banner_id){
        Banner::find($banner_id)->delete();
        return back()->with('delete','Banner Deleted !!');
    }
    function edit_banner($banner_id){
        $update_info = Banner::find($banner_id);
        return view('backend.banner.edit_banner',[
            'update_info'=>$update_info,
        ]);
    }
    function update_banner(Request $request){
        if($request->banner_img == ""){
            Banner::find($request->banner_id)->update([
                'banner_name'=>$request->banner_name,
            ]);
            return redirect('/view/banner');
        }
        else{
            $image = Banner::find($request->banner_id);
            $delete = public_path('/uploads/banner/'.$image->banner_img);
            unlink($delete);
            $banner_img = $request->banner_img;
            $extension = $banner_img->getClientOriginalExtension();
            $file_name = $request->banner_id.'.'.$extension;
            Image::make($banner_img)->save(public_path('uploads/banner/'.$file_name));
            Banner::find($request->banner_id)->update([
                'banner_name'=>$request->banner_name,
                'banner_img'=>$file_name,
            ]);
            return redirect('/view/banner');
        }
    }
    //////banner end

    ///about start
    function add_about(){
        return view('backend.about.add_about');
    }
    function insert_about(Request $request){
        $request->validate([
            'about_heading'=>'required',
            'about_desp'=>'required',
            'about_img'=>'required',
        ]);
        $about_id = About::insertGetId([
            'about_heading'=>$request->about_heading,
            'about_desp'=>$request->about_desp,
            'created_at'=>Carbon::now(),
        ]);
        $about_img = $request->about_img;
        $extension = $about_img->getClientOriginalExtension();
        $file_name = $about_id.'.'.$extension;
        $img = Image::make($about_img)->save(public_path('/uploads/about/'.$file_name));
        About::where('id',$about_id)->update([
            'about_img'=>$file_name,
        ]);
        return back()->with('success','About Added!!');
    }
    function view_about(){
        $about_info = About::all();
        return view('backend.about.view_about',[
            'about_info'=>$about_info,
        ]); 
    }
    function about_status($about_id){
        $about_status = About::where('id',$about_id)->get();
        if(About::count('id',$about_id) >=0){
            if($about_status->first()->about_status == 0){
                $about_status=1;
            }
            else{
                $about_status=0;
            }
        }
        else{
            $about_status=1;
        }
       
        About::where('id',$about_id)->update([
            'about_status'=>$about_status,
        ]);
        return back();
    }
    function delete_about($about_id){
        About::find($about_id)->delete();
        return back()->with('delete','About Part Deleted !!');
    }
    function edit_about($about_id){
        $update_info = About::find($about_id);
        return view('backend.about.edit_about',[
            'update_info'=>$update_info,
        ]);
    }
    function update_about(Request $request){
        if($request->about_img == ""){
            About::find($request->about_id)->update([
                'about_heading'=>$request->about_heading,
                'about_desp'=>$request->about_desp,
            ]);
            return redirect('/view/about');
        }
        else{
            $image = About::find($request->about_id);
            $delete = public_path('/uploads/about/'.$image->about_img);
            unlink($delete);
            $about_img = $request->about_img;
            $extension = $about_img->getClientOriginalExtension();
            $file_name = $request->about_id.'.'.$extension;
            Image::make($about_img)->save(public_path('uploads/about/'.$file_name));
            About::find($request->about_id)->update([
                'about_heading'=>$request->about_heading,
                'about_desp'=>$request->about_desp,
                'about_img'=>$file_name,
            ]);
            return redirect('/view/about');
        }
    }
    ///work start
    function add_work(){
        return view('backend.work.add_work');
    }
    function insert_work(Request $request){
        $request->validate([
            'work_title'=>'required',
            'work_percentage'=>'required',
        ]);
        $work_id = Work::insertGetId([
            'work_title'=>$request->work_title,
            'work_percentage'=>$request->work_percentage,
            'created_at'=>Carbon::now(),
        ]);
        
        return back()->with('success','Work Added!!');
    }
    function view_work(){
        $work_info = Work::all();
        return view('backend.work.view_work',[
            'work_info'=>$work_info,
        ]); 
    }
  
    function delete_work($work_id){
        Work::find($work_id)->delete();
        return back()->with('delete','Work Part Deleted !!');
    }
    function edit_work($work_id){
        $update_info = Work::find($work_id);
        return view('backend.work.edit_work',[
            'update_info'=>$update_info,
        ]);
    }
    function update_work(Request $request){
        Work::find($request->work_id)->update([
                'work_desp'=>$request->work_desp,
                'work_title'=>$request->work_title,
                'work_percentage'=>$request->work_percentage,
            ]);
            return redirect('/view/work');
    }

    ///service

    function add_service(){
        return view('backend.service.add_service');
    }
    function service_store(Request $request){
        $request->validate([
            'service_icon'=>'required',
            'service_head'=>'required',
            'service_title'=>'required',
        ]);
        Service::insertGetId([
            'service_icon'=>$request->service_icon,
            'service_head'=>$request->service_head,
            'service_title'=>$request->service_title,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Service Item Added!!');
    }
    function view_service(){
        $all_service = Service::all();
        return view('backend.service.view_service',[
            'all_service'=>$all_service,
        ]);
    }
    function edit_service($service_id){
        $all_info = Service::find($service_id);
        return view('backend.service.edit_service',[
            'all_info'=>$all_info,
        ]);
    }
    function service_update(Request $request){
        Service::find($request->service_id)->update([
            'service_icon'=>$request->service_icon,
            'service_head'=>$request->service_head,
            'service_title'=>$request->service_title,
        ]);
        return redirect()->route('view.service');
    }
    function delete_service($service_id){
        Service::find($service_id)->delete();
        return back()->with('delete','Service deleted!!');
    }


    //Counter
    function add_counter(){
        return view('backend.counter.add_counter');
    }
    function counter_store(Request $request){
        $request->validate([
            'counter_icon'=>'required',
            'counter_number'=>'required',
            'counter_title'=>'required',
        ]);
        Counter::insert([
            'counter_icon'=>$request->counter_icon,
            'counter_number'=>$request->counter_number,
            'counter_title'=>$request->counter_title,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Counter Successfully Add');
    }
    function view_counter(){
        $all_counters = Counter::all();
        return view('backend.counter.view_counter',[
            'all_counters'=>$all_counters,
        ]);
    }
    function delete_counter($counter_id){
        Counter::find($counter_id)->delete();
        return back()->with('delete','Counter Deleted!');
    }



    ///portfolio
    function add_portfolio(){
        return view('backend.portfolio.add_portfolio');
    }
    function store_portfolio(Request $request){
        $request->validate([
            'portfolio_link'=>'required',
        ]);
        $portfolio_id = Portfolio::insertGetId([
            'portfolio_link'=>$request->portfolio_link,
            'created_at'=>Carbon::now(),
        ]);
        $portfolio_img = $request->portfolio_img;
        $extension = $portfolio_img->getClientOriginalExtension();
        $file_name = $portfolio_id.'.'.$extension;
        $img = Image::make($portfolio_img)->save(public_path('/uploads/portfolio/'.$file_name));
        Portfolio::where('id',$portfolio_id)->update([
            'portfolio_img'=>$file_name,
        ]);
        return back()->with('success','Portfolio Added Successfully.');
        

    }
    function view_portfolio(){
        $all_portfolio = Portfolio::all();
        return view('backend.portfolio.view_portfolio',[
            'all_portfolio'=>$all_portfolio,
        ]);
    }
    function delete_portfolio($portfolio_id){
        Portfolio::find($portfolio_id)->delete();
        return back();
    }
    
}
