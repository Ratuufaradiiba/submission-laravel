@extends('landingpage.layouts.appdetail')
@section('content')
<div class="single-post">
    <div class="post-header mb-5 text-center">
        <div class="meta-cat">
            <span class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1">{{ $row->kategori->nama }}</span>
        </div>
        <h2 class="post-title mt-2">
            {{$row->judul}}
        </h2>

        <div class="post-meta">
            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by {{ $row->users->name }}</span>
            <span class="text-uppercase font-sm letter-spacing-1">{{ $row->created_at->format('F d, Y') }}</span>
            &nbsp;&nbsp;
            @if(Auth::check() && Auth::user()->id == $row->users->id)
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="{{ route('artikel.edit', ['id' => $row->id]) }}">
            Edit Artikel
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
            </a>
             @endif
        </div>
        <div class="post-featured-image mt-5">
            <a href="{{ url('artikeldetail', $row->id)}}">
                @empty($row->gambar)
                <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid w-100">
                @else
                <img src="{{ asset($row->gambar) }}" alt="Profile" class="img-fluid w-100">
                @endempty
            </a>
        </div>
    </div>
    <div class="post-body">
        <div class="entry-content">
            <p>
                {{ $row->desc_artikel}}
            </p>
            <h2 class="mt-4 mb-3">
                {{ $row->judul }}
            </h2>
            <p>
            <?php echo nl2br($row->teks_lengkap); ?>
            </p>

        </div>

        <div class="post-tags py-4">
            @foreach ($tags as $tag)
            <a href="#">{{ '#'. $tag->nama }}</a>
            @endforeach
        </div>
    </div>
</div>

<nav class="post-pagination clearfix border-top border-bottom py-4">
    <div class="prev-post">
        @if($prev)
        <a href="{{ url('artikeldetail', ['id' => $prev->id]) }}">
            <span class="text-uppercase font-sm letter-spacing">Previous</span>
            <h4 class="mt-3"> {{ $prev->judul }}</h4>
        </a>
        @endif
    </div>
    <div class="next-post">
        @if($next)
        <a href="{{ url('artikeldetail', ['id' => $next->id]) }}">
            <span class="text-uppercase font-sm letter-spacing">Next</span>
            <h4 class="mt-3">{{ $next->judul }}</h4>
        </a>
        @endif
    </div>
</nav>
<div class="related-posts-block mt-5">
    <h3 class="news-title mb-4 text-center">
        Kamu mungkin juga suka
    </h3>
    <div class="row">
        @foreach ($artikelsuka as $row)
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="post-block-wrapper mb-4 mb-lg-0">
                <a class="post-thumb " href="{{ url('artikeldetail', $row->id)}}">
                    @empty($row->gambar)
                    <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid custom-image">
                    @else
                    <img src="{{ asset($row->gambar) }}" alt="Profile" class="img-fluid custom-image">
                    @endempty
                </a>
                <div class="post-content mt-3 text-center">
                    <h5>
                        <a href="{{ url('artikeldetail', $row->id)}}">{{ $row->judul }}</a>
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
