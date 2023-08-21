@extends('landingpage.layouts.appartikel')
@section('content')
<section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-header mb-5 text-center ">
                        <h2 class="post-title mt-2">
                            Artikel
                        </h2>
                    </div>
                    <div class="row">
                        @foreach ($artikel as $row)

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a href="{{ url('artikeldetail', $row->id)}}" class="post-thumb mb-4 d-block">
                                    @empty($row->gambar)
                                    <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid w-100" style="height: 245px;">
                                    @else
                                    <img src="{{ asset($row->gambar) }}" alt="Profile" class="img-fluid w-100" style="height: 245px;">
                                    @endempty</a>
                                </a>

                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">{{ $row->created_at->format('d') }}</span>
                                        <span class="month text-uppercase">{{ $row->created_at->format('M') }}</span>
                                    </div>
                                    <span class="cat-name text-color font-extra font-sm text-uppercase letter-spacing">{{ $row->kategori->nama }}</span>
                                    <h3 class="post-title mt-1">
                                        <a href="{{ url('artikeldetail', $row->id)}}">{{ $row->judul}}</a>
                                    </h3>
                                    <p>
                                        {{ Str::limit($row->teks_lengkap, $limit = 100, $end = '...') }}
                                    </p>
                                </div>
                            </article>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="m-auto">
                    <div class="pagination mt-5 pt-4">
                        <ul class="list-inline">
                        </ul>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
@endsection