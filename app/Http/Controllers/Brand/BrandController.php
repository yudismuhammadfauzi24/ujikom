<?php

namespace App\Http\Controllers\Brand;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', compact('brands'));
    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.edit', compact('brand'));
    }
    public function store(Request $request)
    {
        $brands = Brand::create([
            'nama_brand' => $request ->nama_brand,
        ]);

        return redirect(route('brand.store'));
    }
    public function update(Request $request, $id)
    {
        $brands = Brand::where('id', $id)->first();
        
        $brands->nama_brand = $request->input('nama_brand');

        $brands->save();

        return redirect(route('brand.update'));
    }
    public function destroy($id)
    {
        $brands = Brand::findOrFail($id);
        $brands->delete();

        return redirect(route('brand.delete'));
    }
}
