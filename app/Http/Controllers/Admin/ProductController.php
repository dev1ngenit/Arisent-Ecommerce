<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Admin\Category;
use App\Models\Admin\ChildCategory;
use App\Models\Admin\Color;
use App\Models\Admin\MultiImg;
use App\Models\Admin\Product;
use App\Models\Admin\SubCategory;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // public function GetCheckDistrict($category_id)
    // {

    //     $subcat = SubCategory::where('category_id', $category_id)->orderBy('subcategory_name', 'ASC')->get();

    //     return json_encode($subcat);
    // }

    // public function StateGetAjax($subcategory_id)
    // {

    //     $ship = ChildCategory::where('subcategory_id', $subcategory_id)->orderBy('childcategory_name', 'ASC')->get();

    //     return json_encode($ship);
    // }

    // Fetch subcategories based on the selected category
    public function getCategory($category_id)
    {
        $subcategories = SubCategory::where('category_id', $category_id)->orderBy('subcategory_name', 'ASC')->get();
        return response()->json($subcategories); // Return as JSON
    }

// Fetch childcategories based on the selected subcategory
    public function getSubCategory($subcategory_id)
    {
        $childcategories = ChildCategory::where('subcategory_id', $subcategory_id)->orderBy('childcategory_name', 'ASC')->get();
        return response()->json($childcategories); // Return as JSON
    }

    //All Product
    public function AllProduct()
    {
        $products = Product::latest()->get();

        return view('admin.pages.product.all_product', compact('products'));
    }

    //Add Product
    public function AddProduct()
    {
        $products  = Product::where('status', '1')->latest()->get();
        $brands    = Brand::where('status', '1')->latest()->get();
        $categorys = Category::where('status', '1')->latest()->get();
        $colors    = Color::latest()->get();

        return view('admin.pages.product.add_product', compact('brands', 'categorys', 'colors', 'products'));
    }

    //Store Product
    public function StoreProduct(ProductRequest $request)
    {
        // $image = $request->file('product_image');
        // $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // Image::make($image)->save('upload/product/mainimage/' . $name_gen);
        // $save_url = 'upload/product/mainimage/' . $name_gen;

        $image     = $request->file('product_image');
        $name_gen  = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('product/mainimage', $name_gen, 'public');
        $save_url  = 'storage/product/mainimage/' . $name_gen;

        $color = $request->color_id;
        // $colors = implode(',', $color);
        if ($color !== null) {
            $colors = implode(',', $color);
        } else {
            $colors = null; // Or any other default value or logic you want to apply
        }

        // $child_id = $request->child_id;
        // $child_ids = implode(',', $child_id);

        $child_id = $request->child_id;
        if ($child_id !== null) {
            $child_ids = implode(',', $child_id);
        } else {
            $child_ids = null; // Or any other default value or logic you want to apply
        }

        // Sku Code
        $typePrefix = 'DB';
        $lastCode   = Product::where('sku_code', 'like', $typePrefix . '-' . '%')
            ->orderBy('id', 'desc')
            ->first();

        if ($lastCode) {
            // Extract the number part from the SKU code
            $lastNumber = (int) substr($lastCode->sku_code, strlen($typePrefix . '-'));
            // Increment the number for the new SKU code
            $newNumber = $lastNumber + 1;
        } else {
            // Start with 1 if there's no existing code
            $newNumber = 1;
        }

        // Format the new number with leading zeros, assuming you want a total of 6 digits
        $newNumberFormatted = str_pad($newNumber, 6, '0', STR_PAD_LEFT);
        // Construct the new code
        $skuCode = $typePrefix . '-' . $newNumberFormatted;
        //Sku Code

        $product_id = Product::insertGetId([

            'product_name'              => $request->product_name,
            'sku_code'                  => $request->sku_code,
            'mf_code'                   => $request->mf_code,
            'notification_days'         => $request->notification_days,
            'product_slug'              => Str::slug($request->product_name, "-"),

            // 'product_type' => $request->product_type,
            'stock'                     => $request->stock,
            'price_status'              => $request->price_status,
            'brand_id'                  => $request->brand_id,
            'category_id'               => $request->category_id,

            'price'                     => $request->price,
            'discount_price'            => $request->discount_price,
            'sas_price'                 => $request->sas_price,

            'subcategory_id'            => $request->subcategory_id,
            'childcategory_id'          => $request->childcategory_id,
            'tags'                      => $request->tags,
            'color_id'                  => $colors,

            'parent_id'                 => $request->parent_id,
            // 'pdiscount_price' => $request->pdiscount_price,
            'child_id'                  => $child_ids,
            // 'refurbished'               => $request->refurbished,
            'feature'                   => $request->feature,
            // 'deal'                      => $request->deal,

            'short_desc'                => $request->short_desc,
            'overview'                  => $request->overview,
            'specification'             => $request->specification,
            'accessories'               => $request->accessories,

            'source_one_name'           => $request->source_one_name,
            'source_one_link'           => $request->source_one_link,
            'source_one_price'          => $request->source_one_price,
            'source_one_estimate_time'  => $request->source_one_estimate_time,

            'source_one_principal_time' => $request->source_one_principal_time,
            'source_one_shipping_time'  => $request->source_one_shipping_time,
            'source_one_location'       => $request->source_one_location,
            'source_one_country'        => $request->source_one_country,

            'source_two_name'           => $request->source_two_name,
            'source_two_link'           => $request->source_two_link,
            'source_two_price'          => $request->source_two_price,
            'source_two_estimate_time'  => $request->source_two_estimate_time,

            'source_two_principal_time' => $request->source_two_principal_time,
            'source_two_shipping_time'  => $request->source_two_shipping_time,
            'source_two_location'       => $request->source_two_location,
            'source_two_country'        => $request->source_two_country,

            'source_contact'            => $request->source_contact,
            'competitor_one_name'       => $request->competitor_one_name,
            'competitor_one_link'       => $request->competitor_one_link,
            'competitor_one_price'      => $request->competitor_one_price,

            'competitor_two_name'       => $request->competitor_two_name,
            'competitor_two_link'       => $request->competitor_two_link,
            'competitor_two_price'      => $request->competitor_two_price,
            'solid_source'              => $request->solid_source,

            'direct_principal'          => $request->direct_principal,
            'agreement'                 => $request->agreement,
            'source_type'               => $request->source_type,

            'product_image'             => $save_url,
            'created_at'                => now(),
        ]);

        // Multi Image

        // $images = $request->file('multi_img');

        // foreach ($images as $img) {
        //     $make_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        //     Image::make($img)->save('upload/product/multiimage/' . $make_gen);
        //     $uploadPath = 'upload/product/multiimage/' . $make_gen;

        //     MultiImg::insert([

        //         'product_id' => $product_id,
        //         'multi_image' => $uploadPath,
        //         'created_at' => now(),

        //     ]);
        // }

        // Multi Image

        $images = $request->file('multi_img');

        // Check if $images is not null and is an array
        // if ($images !== null && is_array($images)) {
        //     foreach ($images as $img) {
        //         $make_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        //         Image::make($img)->save('upload/product/multiimage/' . $make_gen);
        //         $uploadPath = 'upload/product/multiimage/' . $make_gen;

        //         MultiImg::insert([
        //             'product_id' => $product_id,
        //             'multi_image' => $uploadPath,
        //             'created_at' => now(),
        //         ]);
        //     }
        // }
        if ($images !== null && is_array($images)) {
            foreach ($images as $img) {
                // Generate a unique name for the image
                $make_gen = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();

                // Store the image using storeAs method
                $uploadPath = $img->storeAs('product/multiimage', $make_gen, 'public');

                // Save the path to the database
                MultiImg::insert([
                    'product_id'  => $product_id,
                    'multi_image' => 'storage/' . $uploadPath, // 'public' disk will store images in storage/app/public
                    'created_at'  => now(),
                ]);
            }
        } else {

        }

        toastr()->success('Product Created Successfully');
        return redirect()->route('add.product');
    }

    //Edit Product
    public function EditProduct($id)
    {
        $editProduct = Product::findOrFail($id);

        $products  = Product::where('status', '1')->latest()->get();
        $brands    = Brand::where('status', '1')->latest()->get();
        $categorys = Category::where('status', '1')->latest()->get();
        $colors    = Color::latest()->get();

        $cats         = $editProduct->category_id;
        $subcategorys = SubCategory::where('category_id', $cats)->latest()->get();

        //$childcats = $editProduct->category_id;
        $subcats        = $editProduct->subcategory_id;
        $childcategorys = ChildCategory::where('subcategory_id', $subcats)->latest()->get();

        $multiImages = MultiImg::where('product_id', $id)->latest()->get();

        return view('admin.pages.product.edit_product', compact('brands', 'categorys', 'colors', 'products', 'editProduct', 'subcategorys', 'childcategorys', 'multiImages'));
    }

    // Update Product
    public function UpdateProduct(Request $request)
    {
        $update  = $request->id;
        $old_img = $request->old_image;

        // $color = $request->color_id;
        // $colors = implode(',', $color);

        $color = $request->color_id;
        // $colors = implode(',', $color);
        if ($color !== null) {
            $colors = implode(',', $color);
        } else {
            $colors = null; // Or any other default value or logic you want to apply
        }

        // $child_id = $request->child_id;
        // $child_ids = implode(',', $child_id);

        $child_id = $request->child_id;
        if ($child_id !== null) {
            $child_ids = implode(',', $child_id);
        } else {
            $child_ids = null; // Or any other default value or logic you want to apply
        }

        if ($request->file('product_image')) {

            // $image = $request->file('product_image');
            // $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->save('upload/product/mainimage/' . $name_gen);
            // $save_url = 'upload/product/mainimage/' . $name_gen;

            // if (file_exists($old_img)) {
            //     unlink($old_img);
            // }

            // Get the uploaded image
            $image     = $request->file('product_image');
            $name_gen  = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('product/mainimage', $name_gen, 'public');
            $save_url  = 'storage/product/mainimage/' . $name_gen;

            // Delete the old image if it exists
            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            Product::findOrFail($update)->update([

                'product_name'              => $request->product_name,
                'sku_code'                  => $request->sku_code,
                'mf_code'                   => $request->mf_code,
                'notification_days'         => $request->notification_days,
                'product_slug'              => Str::slug($request->product_name, "-"),

                // 'product_type' => $request->product_type,
                'stock'                     => $request->stock,
                'price_status'              => $request->price_status,
                'brand_id'                  => $request->brand_id,
                'category_id'               => $request->category_id,

                'price'                     => $request->price,
                'discount_price'            => $request->discount_price,
                'sas_price'                 => $request->sas_price,

                'subcategory_id'            => $request->subcategory_id,
                'childcategory_id'          => $request->childcategory_id,
                'tags'                      => $request->tags,
                'color_id'                  => $colors,

                // 'pdiscount_price' => $request->pdiscount_price,

                'parent_id'                 => $request->parent_id,
                'child_id'                  => $child_ids,
                // 'refurbished'               => $request->refurbished,
                'feature'                   => $request->feature,
                // 'deal'                      => $request->deal,

                'short_desc'                => $request->short_desc,
                'overview'                  => $request->overview,
                'specification'             => $request->specification,
                'accessories'               => $request->accessories,

                'source_one_name'           => $request->source_one_name,
                'source_one_link'           => $request->source_one_link,
                'source_one_price'          => $request->source_one_price,
                'source_one_estimate_time'  => $request->source_one_estimate_time,

                'source_one_principal_time' => $request->source_one_principal_time,
                'source_one_shipping_time'  => $request->source_one_shipping_time,
                'source_one_location'       => $request->source_one_location,
                'source_one_country'        => $request->source_one_country,

                'source_two_name'           => $request->source_two_name,
                'source_two_link'           => $request->source_two_link,
                'source_two_price'          => $request->source_two_price,
                'source_two_estimate_time'  => $request->source_two_estimate_time,

                'source_two_principal_time' => $request->source_two_principal_time,
                'source_two_shipping_time'  => $request->source_two_shipping_time,
                'source_two_location'       => $request->source_two_location,
                'source_two_country'        => $request->source_two_country,

                'source_contact'            => $request->source_contact,
                'competitor_one_name'       => $request->competitor_one_name,
                'competitor_one_link'       => $request->competitor_one_link,
                'competitor_one_price'      => $request->competitor_one_price,

                'competitor_two_name'       => $request->competitor_two_name,
                'competitor_two_link'       => $request->competitor_two_link,
                'competitor_two_price'      => $request->competitor_two_price,
                'solid_source'              => $request->solid_source,

                'direct_principal'          => $request->direct_principal,
                'agreement'                 => $request->agreement,
                'source_type'               => $request->source_type,

                'product_image'             => $save_url,
            ]);

            toastr()->success('Product Update With Image Successfully');

            return redirect()->route('all.product');
        } else {
            Product::findOrFail($update)->update([

                'product_name'              => $request->product_name,
                'sku_code'                  => $request->sku_code,
                'mf_code'                   => $request->mf_code,
                'notification_days'         => $request->notification_days,
                'product_slug'              => strtolower(str_replace(' ', '-', $request->product_name)),

                // 'product_type' => $request->product_type,
                'stock'                     => $request->stock,
                'price_status'              => $request->price_status,
                'brand_id'                  => $request->brand_id,
                'category_id'               => $request->category_id,

                'price'                     => $request->price,
                'discount_price'            => $request->discount_price,
                'sas_price'                 => $request->sas_price,

                'subcategory_id'            => $request->subcategory_id,
                'childcategory_id'          => $request->childcategory_id,
                'tags'                      => $request->tags,
                'color_id'                  => $colors,

                'parent_id'                 => $request->parent_id,
                'child_id'                  => $child_ids,
                // 'refurbished'               => $request->refurbished,
                // 'deal'                      => $request->deal,
                'feature'                   => $request->feature,

                'short_desc'                => $request->short_desc,
                'overview'                  => $request->overview,
                'specification'             => $request->specification,
                'accessories'               => $request->accessories,

                'source_one_name'           => $request->source_one_name,
                'source_one_link'           => $request->source_one_link,
                'source_one_price'          => $request->source_one_price,
                'source_one_estimate_time'  => $request->source_one_estimate_time,

                'source_one_principal_time' => $request->source_one_principal_time,
                'source_one_shipping_time'  => $request->source_one_shipping_time,
                'source_one_location'       => $request->source_one_location,
                'source_one_country'        => $request->source_one_country,

                'source_two_name'           => $request->source_two_name,
                'source_two_link'           => $request->source_two_link,
                'source_two_price'          => $request->source_two_price,
                'source_two_estimate_time'  => $request->source_two_estimate_time,

                'source_two_principal_time' => $request->source_two_principal_time,
                'source_two_shipping_time'  => $request->source_two_shipping_time,
                'source_two_location'       => $request->source_two_location,
                'source_two_country'        => $request->source_two_country,

                'source_contact'            => $request->source_contact,
                'competitor_one_name'       => $request->competitor_one_name,
                'competitor_one_link'       => $request->competitor_one_link,
                'competitor_one_price'      => $request->competitor_one_price,

                'competitor_two_name'       => $request->competitor_two_name,
                'competitor_two_link'       => $request->competitor_two_link,
                'competitor_two_price'      => $request->competitor_two_price,
                'solid_source'              => $request->solid_source,

                'direct_principal'          => $request->direct_principal,
                'agreement'                 => $request->agreement,
                'source_type'               => $request->source_type,
            ]);

            toastr()->success('Product Update WithOut Image Successfully');

            return redirect()->route('all.product');
        }
    }

    //Store MultiImage
    public function StoreMultiImage(Request $request)
    {
        // $new_multi = $request->imageid;

        // $image = $request->file('multi_img');

        // $make_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // Image::make($image)->save('upload/product/multiimage/' . $make_name);
        // $uploadPath = 'upload/product/multiimage/' . $make_name;

        $new_multi = $request->imageid;

        if ($request->file('multi_img')) {
            $image      = $request->file('multi_img');
            $make_name  = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $imagePath  = $image->storeAs('product/multiimage', $make_name, 'public');
            $uploadPath = 'storage/product/multiimage/' . $make_name;
        }

        MultiImg::insert([

            'product_id'  => $new_multi,
            'multi_image' => $uploadPath,
            'created_at'  => now(),

        ]);

        toastr()->success('Multi Image Inserted Successfully');

        return redirect()->back();
    }

    //Update MultiImage
    public function UpdateMultiImage(Request $request)
    {
        // $imgs = $request->multi_img;

        // foreach ($imgs as $id => $img) {

        //     $imgDel = MultiImg::findOrFail($id);
        //     unlink($imgDel->multi_image); //database imag name

        //     $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        //     Image::make($img)->save('upload/product/multiimage/' . $make_name);
        //     $uploadPath = 'upload/product/multiimage/' . $make_name;

        //     MultiImg::where('id', $id)->update([
        //         'multi_image' => $uploadPath,

        //     ]);
        // }

        $imgs = $request->multi_img;

        foreach ($imgs as $id => $img) {

            // Find the existing record in the database
            $imgDel = MultiImg::findOrFail($id);

            // Delete the old image from the storage
            if (file_exists(public_path($imgDel->multi_image))) {
                unlink(public_path($imgDel->multi_image));
            }

            // Generate a unique name for the new image
            $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();

            // Save the image to the 'product/multiimage' folder using the 'public' disk
            $imagePath = $img->storeAs('product/multiimage', $make_name, 'public');

            // URL to access the uploaded image
            $uploadPath = 'storage/product/multiimage/' . $make_name;

            // Update the database record with the new image path
            MultiImg::where('id', $id)->update([
                'multi_image' => $uploadPath,
            ]);
        }

        toastr()->success('Multi Image Update Successfully');

        return redirect()->back();
    }

    //DeleteMultiImage
    public function DeleteMultiImage($id)
    {
        $oldImg = MultiImg::findOrFail($id);
        // $oldImg = MultiImg::findOrFail($id);
        // unlink($oldImg->multi_image);

        MultiImg::findOrFail($id)->delete();

        toastr()->success('Multi Image Delete Successfully');

        return redirect()->back();
    }

    //Full Delete Product
    public function DeleteProduct($id)
    {
        $product = Product::findOrFail($id);
        // unlink($product->product_image);

        Product::findOrFail($id)->delete();

        $imges = MultiImg::where('product_id', $id)->get();

        foreach ($imges as $img) {
            // unlink($img->multi_image);
            MultiImg::where('product_id', $id)->delete();
        }

        toastr()->success('Fully Product Delete Successfully');

        return redirect()->back();
    }

    //Inactive Product
    public function InactiveProduct($id)
    {
        Product::find($id)->update([
            'status' => '0',
        ]);

        toastr()->success('Product Inactive Successfully');

        return redirect()->back();
    }

    //Active Product
    public function ActiveProduct($id)
    {
        Product::find($id)->update([
            'status' => '1',
        ]);

        toastr()->success('Product Active Successfully');

        return redirect()->back();
    }
}
