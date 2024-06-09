<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ChannelDataTable;
use App\Models\Channel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ChannelDataTable $dataTable)
    {
         return $dataTable->render('admin.channel.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Channel $channel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Channel $channel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Channel $channel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Channel $channel)
    {
        //
    }
}
