@extends('landingpage.layouts.appartikel')
@section('content')
<div class="single-post">
    <div class="post-header mb-5 text-center">
        <h2 class="post-title mt-2">
            Artikel 
        </h2>
                        @if (!Auth::user())

                        @else
                        <div class="post-meta">
                            <a href="{{ url('upload')}}" class="text-uppercase font-sm letter-spacing-1 mr-3">&nbsp;&nbsp; Upload Artikel &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                              </svg></a>
                        </div>
                        @endif

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
@endsection
