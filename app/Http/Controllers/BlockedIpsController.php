<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlockedIps;

class BlockedIpsController extends Controller
{
    public function getAll(Request $request){
        try{
            $blocked_ips = BlockedIps::get();
        }catch(\Exception $e){
            Log::error('Error when fetching blocked ips' . $e->getMessage());
        }
        return view('blocked_ips', $blocked_ips);
    }
/*
    public function create(Request $request){
        return view('create_blocked_ip');
    }

    public function store(Request $request){
        $params = $request->all();

        try{
            $blocked_ip = new \App\BlockedIps();
            $blocked_ip->fill($params);
            $blocked_ip->save();
        }catch(\Exception $e) {
            Log::error('Admin: new blocked ip error : ' . $e->getMessage());
        }
        return redirect()->route('dashboard.blocked_ips');
    }

    public function delete(Request $request, $id){
        $blocked_ip = \App\BlockedIp::find($id);
        try{
            $blocked_ip->delete();
        }catch(\Exception $e){
            Log::error('Admin: delete blocked ip error : ' . $e->getMessage());
        }
        return redirect()->route('dashboard.blocked_ips');
    }*/
}
