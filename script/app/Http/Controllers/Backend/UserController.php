<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('admin.user.index');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $user = User::findOrFail($id);
        
        $user->status = $request->status;

        if ($user->role != 'user') {
            return response(['status' => 'error', 'message' => 'This users contain, Admin should not be delete first make it as user!']);
        }

        $user->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function changeStatus(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->status = $request->status == 'true' ? 'active' : 'inactive';

        
        if ($user->role != 'user') {
            return response(['status' => 'error', 'message' => 'This users contain, Admin should not be delete first make it as user!']);
        }

        $user->save();
        
        return response(['message' => 'User has been updated!']);
    }
}
