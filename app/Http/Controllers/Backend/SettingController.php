<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {

        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function SettingUpdate(Request $request)
    {
        $request->validate([

            'site_name' => ['required', 'max:200']
        ]);

        $logoPath = $this->updateImage($request, 'logo', 'uploads', $request->old_logo);

        Setting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => $request->site_name,
                'headline' => $request->headline,
                'logo' => (!empty($logoPath)) ? $logoPath : $request->old_logo
            ]
        );

        toastr('Updated successfully!', 'success', 'success');

        return redirect()->back();
    }
}
