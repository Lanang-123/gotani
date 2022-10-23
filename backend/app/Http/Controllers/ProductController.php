<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        $product = Product::all();
        return response()->json($product);
    }

    public function getById($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    // get with where clause
    public function getByCategory(Category $category)
    {
        $product = Product::where('category', $category->id)->get();
        return response()->json($product);
    }

    public function getByUser(User $user)
    {
        $product = Product::where('user_id', $user->id)->get();
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'stock' => 'required',
            'jenis' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/products'), $imageName);

        $product = Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'stock' => $request->stock,
            'jenis' => $request->jenis,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product
        ]);
    }

    public function update(Request $request, User $user)
    {
        $product = Product::find($user->id);

        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'stock' => 'required',
            'jenis' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/products/'), $imageName);

        // Remove old image
        $oldImage = $product->image;
        if ($oldImage) {
            unlink(public_path('images/products') . '/' . $oldImage);
        }

        $product->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'stock' => $request->stock,
            'jenis' => $request->jenis,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product
        ]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        // Remove old image
        $oldImage = $product->image;
        if ($oldImage) {
            unlink(public_path('images/products') . '/' . $oldImage);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully',
            'product' => $product
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $product = Product::where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->get();

        return response()->json($product);
    }
}
