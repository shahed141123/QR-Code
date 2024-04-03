<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\SiteRequest;

class SiteController extends Controller
{
    public function index()
    {
        $data = [
            'site'      => Site::first(),
        ];
        return view('admin.pages.webSetting.index', $data);
    }

    // function seo(SeoRequest $request)
    // {
    //     $dataToUpdateOrCreate = [
    //         'page_name'                => $request->page_name,
    //         'page_link'                => $request->page_link,
    //         'meta_title'               => $request->meta_title,
    //         'meta_description'         => $request->meta_description,
    //         'meta_keywords'            => json_encode($request->meta_keywords),
    //         'google_analytics_code'    => $request->google_analytics_code,
    //         'google_verification_code' => $request->google_verification_code,
    //         'google_adsense_code'      => $request->google_adsense_code,
    //     ];

    //     $seo = Seo::updateOrCreate([], $dataToUpdateOrCreate);

    //     $toastMessage = $seo->wasRecentlyCreated ? 'Data has been created successfully!' : 'Data has been updated successfully!';
    //     toastr()->success($toastMessage);
    //     return redirect()->back();
    // }


    public function site(Request $request)
    {

        $webSetting = Site::firstOrNew([]);

        $faviconMainFile   = $request->file('site_icon');
        $logoWhiteMainFile = $request->file('system_logo_white');
        $logoBlackMainFile = $request->file('system_logo_black');
        $uploadPath      = storage_path('app/public/');

        if ($request->hasFile('system_logo_white')) {
            if (!empty($webSetting->system_logo_white)) {
                $filePaths = [
                    storage_path("app/public/" . $webSetting->system_logo_white),
                    storage_path("app/public/requestImg/" . $webSetting->system_logo_white)
                ];

                foreach ($filePaths as $filePath) {
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            }
            $glogoWhiteMainFile = uploadImage($logoWhiteMainFile, $uploadPath);
        } else {
            $glogoWhiteMainFile = ['status' => 0];
        }

        if ($request->hasFile('system_logo_black')) {
            if (!empty($webSetting->system_logo_black)) {
                $filePaths = [
                    storage_path("app/public/" . $webSetting->system_logo_black),
                    storage_path("app/public/requestImg/" . $webSetting->system_logo_black)
                ];

                foreach ($filePaths as $filePath) {
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            }
            $globallogoBlackMainFile = uploadImage($logoBlackMainFile, $uploadPath);
        } else {
            $globallogoBlackMainFile = ['status' => 0];
        }

        if ($request->hasFile('site_icon')) {
            if (!empty($webSetting->site_icon)) {
                $filePaths = [
                    storage_path("app/public/" . $webSetting->site_icon),
                    storage_path("app/public/requestImg/" . $webSetting->site_icon)
                ];

                foreach ($filePaths as $filePath) {
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            }
            $globalFunImgFavicon = uploadImage($faviconMainFile, $uploadPath, 44, 44);
        } else {
            $globalFunImgFavicon = ['status' => 0];
        }

        Site::updateOrCreate([], [
            'website_name'               => $request->website_name,
            'site_motto'                 => $request->site_motto,
            'site_icon'                  => $globalFunImgFavicon['status']     == 1 ? $faviconMainFile->hashName()  : $webSetting->site_icon,
            'about'                      => $request->about,
            'address_line_one'           => $request->address_line_one,
            'address_line_one'           => $request->address_line_one,
            'system_logo_white'          => $glogoWhiteMainFile['status']      == 1 ? $logoWhiteMainFile->hashName(): $webSetting->system_logo_white,
            'system_logo_black'          => $globallogoBlackMainFile['status'] == 1 ? $logoBlackMainFile->hashName(): $webSetting->system_logo_black,
            'system_timezone'            => $request->system_timezone,
            'base_color'                 => $request->base_color,
            'base_hover_color'           => $request->base_hover_color,
            'secondary_base_color'       => $request->secondary_base_color,
            'secondary_base_hover_color' => $request->secondary_base_hover_color,
            'phone_one'                  => $request->phone_one,
            'phone_two'                  => $request->phone_two,
            'whatsapp_number'            => $request->whatsapp_number,
            'default_language'           => $request->default_language,
            'default_language'           => $request->default_language,
            'contact_email'              => $request->contact_email,
            'support_email'              => $request->support_email,
            'info_email'                 => $request->info_email,
            'facebook_url'               => $request->facebook_url,
            'twitter_url'                => $request->twitter_url,
            'instagram_url'              => $request->instagram_url,
            'linkedin_url'               => $request->linkedin_url,
            'youtube_url'                => $request->youtube_url,
            'service_days'               => $request->service_days,
            'service_time'               => $request->service_time,

        ]);

        return redirect()->back()->with('success', 'Site Data have been updated successfully.');
    }
}