<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\HomePageSetting;
use App\Models\Category;
use Illuminate\Http\Request;


class FrontendController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    
        $categories=Category::select('name','id')->get();
        $channels=Channel::select('logo','name', 'slug','category_id')->latest()->get();

        return view('frontend.home', compact('channels','categories'));

        // return response()->json(['category'=>$categories,'channel'=>$channels]);

    }

}
