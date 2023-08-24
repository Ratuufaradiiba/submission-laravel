<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        return view('landingpage.pages.tagdata', compact('tag'), [
            "title" => "Tag Table",
            "active" => "Artikel",
        ]);
    }

    public function create()
    {
        return view ('landingpage.pages.tag_form',[
            "title" => "Buat Tag",
            "active" => "Tag",
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:tag|max:45'
        ]);

        Tag::create($request->all());

        return redirect()->route('tag.index')->with('success','Tag Berhasil Disimpan');
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('landingpage.pages.tag_edit', compact('tag'), [
            "title" => "Edit Tag Form",
            "active" => "Tag"
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:tag,nama,'. $id .'|max:45'
        ]);

        $tag = Tag::findOrFail($id);
        $tag->nama = $request->nama;
        $tag->save();

        return redirect()->route('tag.index')->with('success', 'Tag Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
