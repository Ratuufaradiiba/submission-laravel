<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('landingpage.pages.artikel', compact('artikel'), [
            "title" => "Artikel",
            "active" => "Artikel",
        ]);
    }

    public function artikelData()
    {
        $artikel = Artikel::where('author_id', auth()->user()->id)->get();
        return view('landingpage.pages.artikeldata', compact('artikel'), [
            "title" => "Artikel Table",
            "active" => "Artikel",
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        $tag = Tag::all();

        return view('landingpage.pages.upload', compact('kategori', 'tag'),[
            "title" => "Upload Artikel",
            "active" => "Artikel",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'desc_artikel' => 'required|string',
            'teks_lengkap' => 'required|string',
            'kategori_id' => 'required|exists:kategori,id',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required|array',
        ]);

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->desc_artikel = $request->desc_artikel;
        $artikel->teks_lengkap = $request->teks_lengkap;
        $artikel->kategori_id = $request->kategori_id;
        $artikel->author_id = auth()->user()->id;

        if ($request->hasFile('gambar')) {
            $filename = $request->file('gambar')->hashName();
            $request->file('gambar')->move('admin/assets/img/artikel', $filename);
            $artikel->gambar = 'admin/assets/img/artikel/' . $filename;
        }
        if ($request->hasFile('file')) {
            $filename = $request->file('file')->hashName();
            $request->file('file')->move('admin/assets/img/artikel', $filename);
            $artikel->file = 'admin/assets/img/artikel/' . $filename;
        }

        $artikel->save();

        $artikel->tags()->sync($request->tags);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diupload');
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        // Memastikan bahwa hanya penulis artikel yang dapat mengakses halaman edit
        if (Auth::user()->id != $artikel->author_id) {
        return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk mengedit artikel ini.');
        }

        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('landingpage.pages.editartikel', compact('artikel','kategori','tag'), [
            "title" => "Edit Artikel",
            "active" => "Artikel",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $artikel = Artikel::findOrFail($id);

        // Memastikan bahwa hanya penulis artikel yang dapat mengupdate artikel
        if (Auth::user()->id != $artikel->author_id) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk mengupdate artikel ini.');
        }

        $request->validate([
            'judul' => 'required|string',
            'desc_artikel' => 'required|string',
            'teks_lengkap' => 'required|string',
            'kategori_id' => 'required|exists:kategori,id',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required|array',
        ]);

        $artikel->judul = $request->judul;
        $artikel->desc_artikel = $request->desc_artikel;
        $artikel->teks_lengkap = $request->teks_lengkap;
        $artikel->kategori_id = $request->kategori_id;

        if ($request->hasFile('gambar')) {
            if ($artikel->gambar != null) {
                unlink($artikel->gambar);
            }
            $filename = $request->file('gambar')->hashName();
            $request->file('gambar')->move('assets/img/artikel', $filename);
            $artikel->gambar = 'assets/img/artikel/' . $filename;
        }

        $artikel->save();

        $artikel->tags()->sync($request->tags);

        return redirect()->route('artikeldetail', ['id' => $artikel->id])->with('success', 'Artikel berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $row = Artikel::find($id);
        if (!empty($row->gambar)) unlink($row->gambar);
        Artikel::where('id', $id)->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel Berhasil Di Hapus');
    }
}
