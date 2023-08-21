<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $artikel1 = Artikel::with('kategori')->latest()->first();
        $artikel1_id = $artikel1->id;
        $artikel = Artikel::with('kategori')->whereNotIn('id', [$artikel1_id])->latest()->paginate(3);
        $artikelslider = Artikel::with('kategori')->latest()->take(5)->get();
        $artikelkanan = Artikel::with('kategori')->oldest()->limit(2)->get();
        $kategori = Kategori::withCount('artikel')->get();

        return view('landingpage.pages.home', compact('artikel', 'artikel1', 'artikelslider', 'artikelkanan', 'kategori'), [
            "title" => "Glowria | Home",
            "active" => "Home",
        ]);
    }

    public function artikeldetail($id)
    {
        $artikel = Artikel::with('kategori')->find($id);
        $row = Artikel::find($id);
        $kategori = Kategori::withCount('artikel')->get();
        $artikelkanan = Artikel::with(['kategori'])->oldest()->limit(2)->get();
        $next = Artikel::where('id', '>', $id)->orderBy('id', 'asc')->first();
        $prev = Artikel::where('id', '<', $id)->orderBy('id', 'desc')->first();

        return view('landingpage.pages.artikeldetail', compact('row', 'artikelkanan', 'kategori', 'next', 'prev', 'artikel'))->with('row', $row)->with('title', "Glowriakjasdasjd Detail");
    }
}
