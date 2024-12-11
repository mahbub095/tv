<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use DB;


class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $setting = Setting::first();
        $categories = Category::select('name', 'id')->get();
        $channels = Channel::select('logo', 'name', 'slug', 'category_id')->latest()->get();
        $channelsData = Channel::paginate(10);

        return view('frontend.home', compact('channels', 'categories', 'channelsData', 'setting'));

        // return response()->json(['category'=>$categories,'channel'=>$channels]);
    }
}
