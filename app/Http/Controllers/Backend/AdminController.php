<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlockedIps;
use App\Models\Category;
use App\Models\Channel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $totalCategory = Category::count();
        $totalChannel = Channel::count();
        $totalBlockIP = BlockedIps::count();
        $totalUser = User::count();

        return view('admin.dashboard', compact(
            'totalCategory',
            'totalChannel',
            'totalBlockIP',
            'totalUser'
        ));
    }

    public function login()
    {
        return view('admin.auth.login');
    }
}
