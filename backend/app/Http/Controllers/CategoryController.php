<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll()
    {
        $category = Category::all();
        return response()->json($category);
    }

    public function getById($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/categories'), $imageName);

        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imageName,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully',
            'data' => $category
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = Category::find($user->id);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/categories'), $imageName);

        // remove old image
        $oldImage = public_path('images/categories/' . $category->image);
        if (file_exists($oldImage)) {
            @unlink($oldImage);
        }

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imageName,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Category updated successfully',
            'data' => $category
        ]);
    }

    public function delete($id)
    {
        $category = Category::find($id);

        // remove old image
        $oldImage = public_path('images/categories/' . $category->image);
        if (file_exists($oldImage)) {
            @unlink($oldImage);
        }

        $category->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Category deleted successfully',
        ]);
    }

    public function search(Request $request)
    {
        $category = Category::where('name', 'like', '%' . $request->keyword . '%')->get();
        return response()->json($category);
    }
}
