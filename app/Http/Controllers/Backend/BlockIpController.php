<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\BlockIPDataTable;
use App\Models\BlockedIps;
use App\Http\Controllers\Controller;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Str;


class BlockIpController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(BlockIPDataTable $dataTable)
    {
        return $dataTable->render('admin.blockIP.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blockip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ip' => ['required', 'max:200'],
        ]);

        $blockip = new BlockedIps();
        $blockip->ip = $request->ip;
        $blockip->save();

        toastr('Created Successfully!', 'success');
        return redirect()->route('admin.blockip.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blockip = BlockedIps::findOrFail($id);
        return view('admin.blockip.edit', compact('blockip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'ip' => ['required', 'max:200'],
        ]);

        $blockip = BlockedIps::findOrFail($id);
        $blockip->ip = $request->ip;
        $blockip->save();

        toastr('Updated Successfully!', 'success');
        return redirect()->route('admin.blockip.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blockip = BlockedIps::findOrFail($id);
        $blockip->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
