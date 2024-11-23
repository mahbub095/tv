<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LogoSetting;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {

        $logoSetting = LogoSetting::first();
        return view('admin.setting.index', compact('logoSetting'));
    }

    public function logoSettingUpdate(Request $request)
    {
        $request->validate([

            'site_name' => ['required', 'max:200'],
            'logo' => ['image', 'max:3000'],
            'favicon' => ['image', 'max:3000'],
        ]);

        $logoPath = $this->updateImage($request, 'logo', 'uploads', $request->old_logo);
        $favicon = $this->updateImage($request, 'favicon', 'uploads', $request->old_favicon);

        LogoSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => $request->site_name,
                'headline' => $request->headline,
                'logo' => (!empty($logoPath)) ? $logoPath : $request->old_logo,
                'favicon' => (!empty($favicon)) ? $favicon : $request->old_favicon
            ]
        );

        toastr('Updated successfully!', 'success', 'success');

        return redirect()->back();
    }
}
