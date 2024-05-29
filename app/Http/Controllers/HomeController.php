<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('home.landingpage');
    }
    public function loginSystem()
    {
        return view('home.loginsystem');
    }
    public function createProduct()
    {
        return view('home.createform');
    }
    public function saveProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'product_quantity' => 'required',
            'product_image' => 'required|mimes:png,jpg,jpeg|max:10000'
        ]);

        $productImg = time() . '_product.' . $request->product_image->extension();
        $request->product_image->move(public_path('product_storage'), $productImg);

        $product = new Product();

        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;
        $product->product_image = $productImg;

        $product->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Product created successfully');
        // return back();


    }

    public function readProduct()
    {
        return view('home.landingpage', [
            'products' => Product::all()
        ]);
    }

    public function updateProduct($id)
    {
        $product = Product::where('id', $id)->first();
        return view('home.updateform', ['product' => $product]);
    }

    public function saveUpdatProduct(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'product_quantity' => 'required',
            'product_image' => 'nullable|mimes:png,jpg,jpeg|max:10000'
        ]);

        $product = Product::where('id', $id)->first();

        if ($request->hasFile('product_image')) {
            $productImg = time() . '_productnew.' . $request->product_image->extension();
            $request->product_image->move(public_path('product_storage'), $productImg);

            $product->product_image = $productImg;
        }

        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;

        $product->save();

        return redirect()->route('homepage.admin-dashboard')->with('message', 'Product updated successfully');
    }

    public function deleteProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Product deleted successfully');
    }
}
