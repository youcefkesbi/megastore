<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('dashboard.brands.index', compact('brands'));
    }

    public function create(){
        return view('dashboard.brands.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:brands',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $logoPath = $request->file('logo') ? $request->file('logo')->store('brands', 'public') : null;

        Brand::create([
            'name' => $request->name,
            'logo' => $logoPath
        ]);

        return redirect()->route('brands.index')->with('success', 'Brand created successfully.');
    }

    public function destroy(Brand $brand) {
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully.');
    }

}