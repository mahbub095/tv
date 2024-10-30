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
        $channels = Channel::get();
        $catagories = Category::get();
        return view('frontend.home', compact('channels','catagories'));
    }

}
