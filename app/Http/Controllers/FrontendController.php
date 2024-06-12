<?php

namespace App\Http\Controllers;
use App\Models\Channel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $channels = Channel::all();
        return view('frontend.home', compact('channels'));
    }

}
