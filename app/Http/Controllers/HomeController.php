<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Artikel_Tag;
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
        $artikel = Artikel::with(['kategori','users'])->find($id);
        $judulArtikel = $artikel->judul;
        $row = Artikel::find($id);
        $next = Artikel::where('id', '>', $id)->orderBy('id', 'asc')->first();
        $prev = Artikel::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $artikelsuka = Artikel::with(['kategori'])->latest()->limit(3)->get();

        // Mendapatkan tags terkait artikel
        $tags = $artikel->tags;

        return view('landingpage.pages.artikeldetail', compact('row', 'next', 'prev', 'artikel','artikelsuka','judulArtikel','tags'))->with('row', $row)->with('title', "" .$judulArtikel);
    }

    public function about()
    {
        return view('landingpage.pages.about', [
            "title" => "Glowria | About",
            "active" => "About"
        ]);
    }
}
