<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;
use IIlluminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    //site setting
    public function SiteSetting()
    {
        return view('backend.settings.site');
    }

    //updates site
    public function UpdateSiteSetting(Request $request)
    {
        SiteSetting::find(1)->update([

            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,

            'maintenace' => $request->maintenance,

            'chat' => $request->chat,

        ]);

        $notification = session()->flash("success", "Site Updated Successfully..");
        return redirect()->back()->with($notification);
    }
    //update site logo
    public function UpdateSiteSettingLogo(Request $request)
    {
        $old_image = $request->old_logo;

        $old_favicon = $request->old_favicon;
        if ($request->file('logo')) {
            //delete old image
            if (File::exists($old_image)) {
                unlink($old_image);
            }
            $image = $request->file('logo');
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(139, 36)->save('uploads/logos/' . $filename);
            $save_url = 'uploads/logos/' . $filename;
        }




        if ($request->file('favicon')) {
            //delete old image
            if (File::exists($old_favicon)) {
                unlink($old_favicon);
            }
            $image2 = $request->file('favicon');
            $filename2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();
            Image::make($image2)->resize(30, 30)->save('uploads/logos/' . $filename2);
            $flogo_url = 'uploads/logos/' . $filename2;
        }

        SiteSetting::find(1)->update([
            'logo' => $save_url,
            'favicon' => $flogo_url,
        ]);
        $notification = session()->flash("success", "Logo Updated Successfully..");
        return redirect()->back()->with($notification);
    }
}
