@extends('landingpage.layouts.appdetail')
@section('content')
<div class="single-post">
    <div class="post-header mb-5 text-center">
        <h2 class="post-title mt-2">
            Edit Artikel
        </h2>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form class="row g-3" action="{{ route('artikel.update', ['id' => $artikel->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="col-12 mb-3">
                            <label class="form-label" for="judul">Judul:</label><br>
                            <input class="form-control" type="text" id="judul" name="judul" value="{{ old('judul', $artikel->judul) }}">
                            @error('judul')
                                <p class="text text-danger mb-0">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="desc_artikel">Deskripsi Artikel:</label><br>
                            <textarea class="form-control" id="desc_artikel" name="desc_artikel" >{{ old('desc_artikel',$artikel->desc_artikel) }}</textarea>
                            @error('desc_artikel')
                                <p class="text text-danger mb-0">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="teks_lengkap">Teks Lengkap:</label><br>
                            <textarea class="form-control" id="teks_lengkap" name="teks_lengkap" >{{ old('teks_lengkap',$artikel->teks_lengkap) }}</textarea>
                            @error('teks_lengkap')
                                <p class="text text-danger mb-0">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="kategori_id">Kategori:</label><br>
                            <select class="form-select" id="kategori_id" name="kategori_id">
                                <option>Pilih Kategori</option>
                                @foreach ($kategori as $kategoriItem)
                                    <option value="{{ $kategoriItem->id }}" {{ $kategoriItem->id == $artikel->kategori_id ? 'selected' : '' }}>
                                        {{ $kategoriItem->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <p class="text text-danger mb-0">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="tags">Tags:</label><br>
                            @foreach ($tag as $tagLoop)
                                <input type="checkbox" name="tags[]" value="{{ $tagLoop->id }}"
                                    {{ in_array($tagLoop->id, $artikel->tags->pluck('id')->toArray()) ? 'checked' : '' }}>&nbsp;&nbsp;
                                {{ $tagLoop->nama }}<br>
                            @endforeach
                        </div>

                        <div class="col-12">
                            <label for="gambar">Gambar:</label><br>
                            <input type="file" id="gambar" name="gambar">
                            @error('gambar')
                                <p class="text text-danger mb-0">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary">Update Artikel</button>
                            <a class="btn btn-info" href="{{ route('artikeldetail', ['id' => $artikel->id]) }}">Kembali</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
