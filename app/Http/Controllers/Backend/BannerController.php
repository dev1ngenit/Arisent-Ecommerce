<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    //All Banner
    public function AllBanner()
    {
        $banners = Banner::all();
        return view('admin.pages.banner.all_banner', compact('banners'));
    }

    //Store Banner
    // public function StoreBanner(Request $request)
    // {
    //     $request->validate(
    //         [
    //             'banner_name' => 'required|max:255',
    //             'banner_image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
    //         ],

    //         [
    //             'banner_name.required' => 'The Banner Name is required',
    //             'banner_image.required' => 'The Banner Image is required',
    //         ],
    //     );

    //     $image = $request->file('banner_image');
    //     $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

    //     Image::make($image)->resize(1850, 730)->save('upload/banner/' . $name_gen);
    //     $save_url = 'upload/banner/' . $name_gen;

    //     $banner = new Banner();
    //     $banner->banner_name = $request->banner_name;
    //     $banner->banner_slug = strtolower(str_replace('', '-', $request->banner_name));
    //     $banner->description = $request->description;

    //     $banner->banner_image = $save_url;
    //     $banner->save();

    //     toastr()->success('Banner Created Successfully');

    //     return redirect()->route('all.banner');

    // }

    public function StoreBanner(Request $request)
    {
        $request->validate(
            [
                'banner_name'  => 'required|max:255',
                'banner_image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
            ],

            [
                'banner_name.required'  => 'The Banner Name is required',
                'banner_image.required' => 'The Banner Image is required',
            ],
        );

        // Get the image from the request
        $image    = $request->file('banner_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        // Define the path to the upload folder
        $folder_path = public_path('upload/banner/');

        // Check if the folder exists, and create it if it doesn't
        if (! file_exists($folder_path)) {
            mkdir($folder_path, 0777, true); // Creates the folder with permissions
        }

        // Resize and save the image to the folder
        Image::make($image)->resize(1850, 730)->save($folder_path . $name_gen);
        $save_url = 'upload/banner/' . $name_gen;

        // Save the banner data into the database
        $banner               = new Banner();
        $banner->banner_name  = $request->banner_name;
        $banner->banner_slug  = strtolower(str_replace(' ', '-', $request->banner_name)); // Fixed the spacing in slug
        $banner->description  = $request->description;
        $banner->banner_image = $save_url;
        $banner->save();

        // Display success message
        toastr()->success('Banner Created Successfully');

        // Redirect to the all banners page
        return redirect()->route('all.banner');
    }

    //Update Banner
    public function UpdateBanner(Request $request)
    {
        $request->validate(
            [
                'banner_name'  => 'required|max:255',
                'banner_image' => 'mimes:jpeg,png,jpg,gif,svg,webp',
            ],

            [
                'banner_name.required' => 'The Banner Name is required',
            ],
        );

        $banner_id = $request->id;
        $old_img   = $request->old_image;

        if ($request->file('banner_image')) {
            $image    = $request->file('banner_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(1850, 730)->save('upload/banner/' . $name_gen);
            $save_url = 'upload/banner/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Banner::find($banner_id)->update([

                'banner_name'  => $request->banner_name,
                'banner_slug'  => strtolower(str_replace('', '-', $request->banner_name)),
                'description'  => $request->description,
                'banner_image' => $save_url,

            ]);

            toastr()->success('Banner Update With Image Successfully');

            return redirect()->route('all.banner');

        } else {

            Banner::find($banner_id)->update([

                'banner_name' => $request->banner_name,
                'banner_slug' => strtolower(str_replace('', '-', $request->banner_name)),
                'description' => $request->description,

            ]);

            toastr()->success('Banner Update Without Image Successfully');

            return redirect()->route('all.banner');

        }
    }

    //Delete Brand
    public function DeleteBanner($id)
    {
        $delete       = Banner::findOrFail($id);
        $delete_image = $delete->banner_image;
        unlink($delete_image);

        Banner::findOrFail($id)->delete();

        toastr()->success('Banner Delete Successfully');

        return redirect()->route('all.banner');
    }

    //InactiveBanner
    public function InactiveBanner($id)
    {

        Banner::find($id)->update([
            'status' => '0',
        ]);

        toastr()->success('Banner Inactive Successfully');

        return redirect()->back();
    }

    //ActiveBanner
    public function ActiveBanner($id)
    {

        Banner::find($id)->update([
            'status' => '1',
        ]);

        toastr()->success('Banner Active Successfully');

        return redirect()->back();
    }
}
