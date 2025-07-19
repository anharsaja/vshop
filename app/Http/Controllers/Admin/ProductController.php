<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'brand', 'product_images')->get();
        $categories = Category::get();
        $brands = Brand::get();

        return Inertia::render(
            'Admin/Product/Index',
            [
                'products' => $products,
                'categories' => $categories,
                'brands' => $brands
            ]
        );
    }

    public function store(Request $request)
    {
        // dd($request->file('product_images'));
        // dd($request);
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        // check if product has image upload
        if ($request->hasFile('product_images')) {
            $productImages = $request->file('product_images');
            foreach ($productImages as $image) {
                // generate a unique name for the image using timestamp and random string
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                // store the image in the public folder with the unique name
                $image->move('product_images', $uniqueName);
                // create a new product image record with the product_id and unique name
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product_images/' . $uniqueName
                ]);
            }
        }
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function update(Request $request, $id)
    { {
            $product = Product::findOrFail($id);
            $product->title = $request->title;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            // check if product has image upload
            if ($request->hasFile('product_images')) {
                $productImages = $request->file('product_images');
                foreach ($productImages as $image) {
                    // generate a unique name for the image using timestamp and random string
                    $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                    // store the image in the public folder with the unique name
                    $image->move('product_images', $uniqueName);
                    // create a new product image record with the product_id and unique name
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => 'product_images/' . $uniqueName
                    ]);
                }
            }
            $product->update();
            return redirect()->back()->with('success', 'Product created successfully.');
        }
    }
    public function deleteImage($id)
    {
        $image = ProductImage::findOrFail($id);

        // Hapus file dari storage
        $imagePath = public_path($image->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Hapus record dari database
        $image->delete();
        return redirect()->route('admin.products.index')->with('success', 'Image deleted successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id)->delete();
        return redirect()->route('admin.products.index')->with('success', 'Products deleted successfully.');
    }
}
