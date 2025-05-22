<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $iconPath = $request->file('icon') ? $request->file('icon')->store('categories', 'public') : null;
        Category::create([
            'name' => $request->name,
            'icon' => $iconPath
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

}