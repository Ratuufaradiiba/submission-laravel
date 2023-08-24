@extends('landingpage.layouts.appdetail')
@section('content')

<div class="single-post">
    <div class="post-header mb-5 text-center">
        <h2 class="post-title mt-2">
            Artikel Data
        </h2>
        @if ($message = Session::get('success'))
        <div class="alert alert-success shadow-sm">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card-body px-0 pt-5 pb-2">
            <a href="{{ url('upload')}}" class="btn btn-sm btn-primary shadow-sm mb-5">
                Tambah</a>
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs opacity-7">Artikel</th>
                        <th class="text-uppercase text-secondary text-xxs opacity-7 ps-2">Kategori</th>
                        <th class="text-uppercase text-secondary text-xxs opacity-7 ps-2">Deksripsi</th>
                        <th class="text-uppercase text-secondary text-xxs opacity-7 ps-2">Aksi</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $artikel as $row )
                                    @php
                                    $wordCount = str_word_count($row->desc_artikel);
                                    $words = explode(' ', $row->desc_artikel);
                                    $limitedDescArtikel = implode(' ', array_slice($words, 0, 7));
                                    $ellipsis = $wordCount > 7 ? '...' : '';
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    @empty($row->gambar)
                                                    <img src="{{ url('admin\media\no-image-found.png') }}" alt="Artikel"class="img-fluid w-100" style="height: 60px; width: 33px;">
                                                    @else
                                                    <img src="{{ asset($row->gambar) }}" alt="Artikel" class="img-fluid w-100" style="height: 60px; width: 3px;">
                                                    @endempty
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $row->judul }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs  mb-0">{{ $row->kategori->nama }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs  mb-0">{{ $limitedDescArtikel . $ellipsis }}</p>
                                        </td>
                                        <td class="align-middle">
                                            <form method="POST" id="formDelete" action="{{ route('artikel.destroy', $row->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="button" class="btn btn-danger shadow-sm text-xs btnDelete" data-action="{{ route('artikel.destroy', $row->id) }}" data-toggle="tooltip" data-original-title="Edit user" >
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
