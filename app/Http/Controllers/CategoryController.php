<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function createView(Request $request)
    {
        return view('admin.category.create-category');
    }


    public function create(Request $request)
    {
        $request->validate([
            'category' => ['required', 'unique:categories,name']
        ]);

        try {

            Category::create([
                'name' => $request['category'],
                'slug' => Str::slug($request['category'])
            ]);

            return redirect()->route('all-category')->with('success', 'Category Created');

        } catch (\Exception $th) {

            return back()->with('error', 'Something went wrong');
        }
    }

    public function updateView(Request $request, Category $id)
    {
        $category = $id;
        return view('admin.category.update-category', compact('category'));
    }

    public function update(Request $request, Category $id)
    {

        $request->validate([
            'category' => 'required',
        ]);

        $categoryName = $request->input('category');

        if ($categoryName == $id->name) {
            return redirect()->route('all-category')->with('success', 'Category Updated');
        }

        if (Category::where('name', $categoryName)->exists()) {
            return redirect()->back()->withErrors("Category already exists");
        }

        $id->update([
            'name' => $categoryName,
            'slug' => Str::slug($categoryName)
        ]);

        return redirect()->route('all-category')->with('success', 'Category Updated');
    }

    public function delete(Category $id)
    {
        $id->delete();

        return redirect()->route('all-category')->with('success', 'Category Deleted');
    }

    public function allCategory()
    {

        $allCategory = Category::all();

        return view('admin.category.all-category', compact('allCategory'));
    }
}
