<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    //All Brand
    public function AllBrand()
    {
        $brands = Brand::all();
        return view('admin.pages.brand.all_brand', compact('brands'));
    }

    //Store Brand
    public function StoreBrand(Request $request)
    {
        $validator = $request->validate(

            [
                'brand_name' => 'required|max:255',
                'brand_image' => 'mimes:jpeg,png,jpg,gif,svg,webp',
            ],

            [
                'brand_name.required' => 'The Brand Name is required',
            ],
        );

        if ($validator) {

            $mainFile = $request->file('brand_image');
            $imgPath = storage_path('app/public/brand');

            $iconmainFile = $request->file('icon'); ///////
            $iconimgPath = storage_path('app/public/brand'); //////

            ////////
            if (empty($iconmainFile)) {

                $globalFunIconImg['file_name'] = '';

            } else {
                $globalFunIconImg = Helper::customUpload($iconmainFile, $iconimgPath);
                $globalFunIconImg['file_name'] = $globalFunIconImg['file_name'];
            }
            /////////////////////

            if (empty($mainFile)) {

                Brand::create([

                    'brand_name' => $request->brand_name,
                    'brand_slug' => Str::slug($request->brand_name, "-"),
                    'description' => $request->description,

                ]);
            } else {

                $globalFunImg = Helper::customUpload($mainFile, $imgPath);

                if ($globalFunImg['status'] == 1) {
                    Brand::create([

                        'brand_name' => $request->brand_name,
                        'brand_slug' => Str::slug($request->brand_name, "-"),
                        'description' => $request->description,

                        'brand_image' => $globalFunImg['file_name'],
                        'icon' => $globalFunIconImg['file_name'], ////////

                    ]);
                } else {

                    toastr()->warning('Image upload failed! plz try again.');
                }
            }
            toastr()->success('Brand Created Successfully');
        }

        return redirect()->route('all.brand');
    }

    //Update Brand
    public function UpdateBrand(Request $request)
    {

        $brand = Brand::findOrFail($request->id);
        $validator = $request->validate(

            [
                'brand_name' => 'required|max:255',
                'brand_image' => 'mimes:jpeg,png,jpg,gif,svg,webp',
            ],

            [
                'brand_name.required' => 'The Brand Name is required',
            ],
        );

        if ($validator) {

            $mainFile = $request->file('brand_image');
            $uploadPath = storage_path('app/public/brand');

            $iconmainFile = $request->file('icon'); ///////
            $iconimgPath = storage_path('app/public/brand'); //////

            if (isset($mainFile)) {
                $globalFunImg = Helper::customUpload($mainFile, $uploadPath);
            } else {
                $globalFunImg['status'] = 0;
            }

            ////////////
            if (isset($iconmainFile)) {
                $globalFunIconImg = Helper::customUpload($iconmainFile, $iconimgPath);
            } else {
                $globalFunIconImg['status'] = 0;
            }
            /////////////

            if (!empty($brand)) {

                if ($globalFunImg['status'] == 1) {
                    if (File::exists(public_path('storage/brand/requestImg/') . $brand->brand_image)) {
                        File::delete(public_path('storage/brand/requestImg/') . $brand->brand_image);
                    }
                    if (File::exists(public_path('storage/brand/') . $brand->brand_image)) {
                        File::delete(public_path('storage/brand/') . $brand->brand_image);
                    }
                }

                ///////////

                if ($globalFunIconImg['status'] == 1) {
                    if (File::exists(public_path('storage/brand/requestImg/') . $brand->icon)) {
                        File::delete(public_path('storage/brand/requestImg/') . $brand->icon);
                    }
                    if (File::exists(public_path('storage/brand/') . $brand->icon)) {
                        File::delete(public_path('storage/brand/') . $brand->icon);
                    }
                }

                ////////

                $brand->update([

                    'brand_name' => $request->brand_name,
                    'brand_slug' => Str::slug($request->brand_name, "-"),
                    'description' => $request->description,
                    'brand_image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $brand->brand_image,

                    'icon' => $globalFunIconImg['status'] == 1 ? $globalFunIconImg['file_name'] : $brand->icon, ////

                ]);
            }

            toastr()->success('Brand Update Successfully');
        }
        return redirect()->route('all.brand');

    }

    //Delete Brand
    public function DeleteBrand($id)
    {

        $brand = Brand::find($id);

        if (File::exists(public_path('storage/brand/requestImg/') . $brand->brand_image)) {
            File::delete(public_path('storage/brand/requestImg/') . $brand->brand_image);
        }

        if (File::exists(public_path('storage/brand/') . $brand->brand_image)) {
            File::delete(public_path('storage/brand/') . $brand->brand_image);
        }

        if (File::exists(public_path('storage/brand/requestImg/') . $brand->icon)) {
            File::delete(public_path('storage/brand/requestImg/') . $brand->icon);
        }

        if (File::exists(public_path('storage/brand/') . $brand->icon)) {
            File::delete(public_path('storage/brand/') . $brand->icon);
        }

        $brand->delete();

        toastr()->success('Brand Delete Successfully');

        return redirect()->route('all.brand');
    }

    //InactiveBrand
    public function InactiveBrand($id)
    {
        Brand::find($id)->update([
            'status' => '0',
        ]);

        toastr()->success('Brand Inactive Successfully');

        return redirect()->back();
    }

    //ActiveBrand
    public function ActiveBrand($id)
    {

        Brand::find($id)->update([
            'status' => '1',
        ]);

        toastr()->success('Brand Active Successfully');
        return redirect()->back();
    }

}
