<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products','public');
        }

        Product::create($data);
        return redirect()->back();
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // পুরানো ছবি delete করা
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products','public');
        }

        $product->update($data);
        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->back();
    }
}
