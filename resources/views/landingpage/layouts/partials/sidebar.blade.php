<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
    <div class="sidebar sidebar-right">
        <div class="sidebar-wrap mt-5 mt-lg-0">


            <div class="sidebar-widget mb-5 ">
                <h4 class="text-center widget-title">Trending Artikel</h4>

                @foreach ($artikelkanan as $row)
                <div class="media border-bottom py-3 sidebar-post-item">
                    <a href="{{ url('artikeldetail', $row->id)}}">
                        @empty($row->gambar)
                        <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="mr-4">
                        @else
                        <img src="{{ asset($row->gambar) }}" alt="Profile" class="mr-4">
                        @endempty</a>
                    <div class="media-body">
                        <span class="text-muted letter-spacing text-uppercase font-sm">{{ $row->created_at->format('F d, Y') }}</span>
                        <h4><a href="{{ url('artikeldetail', $row->id)}}">{{ $row->judul }}</a></h4>
                    </div>
                </div>
                @endforeach

            </div>


            <div class="sidebar-widget category mb-5">
                <h4 class="text-center widget-title">Kategori</h4>
                <ul class="list-unstyled">
                    @foreach ($kategori as $row)
                    <li class="align-items-center d-flex justify-content-between">
                        <a>{{ $row->nama}}</a>
                        <span>{{ $row->artikel_count }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
</div>