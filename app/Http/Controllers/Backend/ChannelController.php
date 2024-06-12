<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ChannelDataTable;
use App\Models\Channel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Str;

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
        return view('admin.channel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'max:200'],
            'status' => ['required']
        ]);

        // $logoPath = $this->uploadImage($request, 'logo', 'uploads');
        $brand = new Channel();

        // $brand->logo = $logoPath;
        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->status = $request->status;
        $brand->save();

        toastr('Created Successfully!', 'success');
        return redirect()->route('channel.index');
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
    public function destroy(string $id)
    {

        $brand = Channel::findOrFail($id);
        $brand->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
