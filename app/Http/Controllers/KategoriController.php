<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('landingpage.pages.kategoridata', compact('kategori'), [
            "title" => "Kategori Table",
            "active" => "Artikel",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('landingpage.pages.kategori_form', [
            "title" => "Buat Kategori",
            "active" => "Kategori",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kategori|max:45'
        ]);

        Kategori::create($request->all());

        return redirect()->route('kategori.index')->with('success','Kategori Berhasil Disimpan');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('landingpage.pages.kategori_edit', compact('kategori'), [
            "title" => "Edit Kategori Form",
            "active" => "Kategori"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:kategori,nama,'. $id .'|max:45'
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Kategori Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $row = Kategori::findOrFail($id);
            Kategori::where('id', $id)->delete();
            return redirect()->route('kategori.index')->with('success', 'Data Kategori Berhasil Di Hapus');
        } catch (\Throwable $th) {
            return redirect()->route('kategori.index')->with('error', 'Data Kategori Tidak Bisa Dihapus Karena Dipakai Di Transaksi Lain');
        }
    }
}
