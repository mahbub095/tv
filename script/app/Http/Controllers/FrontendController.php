<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\HomePageSetting;
use App\Models\Category;
use App\Models\LogoSetting;
use Illuminate\Http\Request;
use DB;


class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  

    public function welcome()
	{

      
         try {
          DB::connection()->getPdo();
        if(DB::connection()->getDatabaseName()){
        // $seo=Seo::first();
        // $settings=Setting::first();
        // SEOTools::setTitle($seo->meta_title);
        // SEOTools::setDescription($seo->meta_description);
        // SEOTools::opengraph()->setUrl(url('/'));
        // SEOTools::setCanonical(url('/'));
        // SEOTools::opengraph()->addProperty('keywords', $settings->meta_tags);
        // SEOTools::opengraph()->addProperty('author', $settings->author);
        // SEOTools::twitter()->setSite(url('/'));
        // SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');

        return view('frontend.home');
        }else{
            return redirect()->route('install');
        }
        } catch (\Exception $e) {
            return redirect()->route('install');
        } 

    }

    

    public function index()
    {
    
        $logoSetting = LogoSetting::first();
        $categories=Category::select('name','id')->get();
        $channels=Channel::select('logo','name', 'slug','category_id')->latest()->get();
        $channelsData = Channel::paginate(10);

        return view('frontend.home', compact('channels','categories','channelsData','logoSetting'));

        // return response()->json(['category'=>$categories,'channel'=>$channels]);

    }

}
