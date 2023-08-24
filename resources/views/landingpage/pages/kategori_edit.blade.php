@extends('landingpage.layouts.appdetail')
@section('content')
<div class="single-post">
    <div class="post-header mb-5 text-center">
        <h2 class="post-title mt-2">
            Form Edit Kategori
        </h2>
    </div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Terjadi Kesalahan saat Update data<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="row g-3" method="POST" action="{{ route('kategori.update', $kategori->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama', $kategori->nama) }}">
                        @error('nama')
                            <p class="text text-danger mb-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a class="btn btn-info" href="{{ route('kategori.index') }}">Kembali</a>
                    </div>
                </form><!-- Vertical Form -->
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
