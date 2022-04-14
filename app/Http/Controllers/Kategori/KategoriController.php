<?php

namespace App\Http\Controllers\Kategori;

use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    }
    public function edit($id)
    {
        $kategoris = Kategori::findOrFail($id);
        
        return view('kategori.edit', compact('kategoris'));
    }
    public function store(Request $request)
    {
        $kategoris = Kategori::create([
            'nama_kategori' => $request ->nama_kategori,
        ]);

        return redirect(route('kategori.store'));
    }
    public function show($id)
    {
        $kategoris = Kategori::findOrFail($id);
        return view('kategori.index', compact('kategoris'));
    }
    public function update(Request $request, $id)
    {
        $kategoris = Kategori::where('id', $id)->first();
        
        $kategoris->nama_kategori = $request->input('nama_kategori');

        $kategoris->save();

        return redirect(route('kategori.update'));
    }
    public function destroy($id)
    {
        $kategoris = Kategori::findOrFail($id);
        $kategoris->delete();

        return redirect(route('kategori.delete'));
    }
}
