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

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $channel = new Channel();

        // $brand->logo = $logoPath;
        $channel->name = $request->name;
        $channel->slug = $request->slug;
        $channel->status = $request->status;
        $channel->save();

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
    public function edit(string $id)
    {
        $channel = Channel::findOrFail($id);
        return view('admin.channel.edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'status' => ['required']
        ]);


        $channel = Channel::findOrFail($id);

        // $logoPath = $this->updateImage($request, 'logo', 'uploads', $brand->logo);
        // $brand->logo = empty(!$logoPath) ? $logoPath : $brand->logo;

        $channel->name = $request->name;
        $channel->slug = $request->slug;
        $channel->status = $request->status;
        $channel->save();



        toastr('Updated Successfully!', 'success');
        return redirect()->route('channel.index');
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
