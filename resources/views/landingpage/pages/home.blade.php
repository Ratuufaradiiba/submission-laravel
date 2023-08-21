@extends('landingpage.layouts.app')
@section('content')
<div class="col-lg-12">
	<div class="subscribe-home py-4 px-4 mb-5 bg-grey">
		<div class="form-group row align-items-center mb-0">
			<label for="colFormLabel" class="col-form-label col-sm-12 h4 col-lg-4">Subscribe for Newsletter</label>
			<div class="col-sm-6 col-lg-3">
				<input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel" placeholder="Full Name">
			</div>
			<div class="col-sm-6 col-lg-3">
				<input type="email" class="form-control mb-3 mb-lg-0" id="colFormLabel2" placeholder="Email Address">
			</div>
			<div class="col-sm-2">
				<a href="#" class="btn btn-dark">Subscribe</a>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
	<article class="post-list mb-5 pb-4 border-bottom">
		<a class="post-thumb mb-3 d-block" href="{{ url('artikeldetail', $artikel1->id)}}">
			@empty($artikel1->gambar)
			<img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid w-100">
			@else
			<img src="{{ asset($artikel1->gambar) }}" alt="Profile" class="img-fluid w-100">
			@endempty
		</a>
		<div class=" meta-cat">
			<span class="letter-spacing cat-name font-extra text-uppercase font-sm">{{ $artikel1->kategori->nama}}</span>
		</div>
		<h3 class="post-title mt-2"><a href="{{ url('artikeldetail', $artikel1->id)}}">{{ $artikel1->judul }}</a></h3>

		<div class="post-meta footer-meta">
			<ul class="list-inline">
				<li class="post-like list-inline-item">
					<span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>{{ $artikel1->created_at->diffForHumans() }}</span>
				</li>
				<li class="post-view list-inline-item letter-spacing-1">189 Views</li>
			</ul>
		</div>
		<div class="post-content">
			<p>{{ $artikel1->teks_lengkap }}</p>
		</div>
	</article>


	@foreach ($artikel as $row )
	<div class="mb-4 post-list border-bottom pb-4">
		<div class="row no-gutters">
			<div class="col-md-5">
				<a class="post-thumb " href="{{ url('artikeldetail', $row->id)}}">
					@empty($row->gambar)
					<img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid w-100">
					@else
					<img src="{{ asset($row->gambar) }}" alt="Profile" class="img-fluid w-100">
					@endempty
				</a>
			</div>

			<div class="col-md-7">
				<div class="post-article mt-sm-3">
					<div class="meta-cat">
						<span class="letter-spacing cat-name font-extra text-uppercase font-sm">{{ $row->kategori->nama}}</span>
					</div>
					<h3 class="post-title mt-2"><a href="{{ url('artikeldetail', $row->id)}}">{{ $row->judul }}</a></h3>

					<div class="post-meta">
						<ul class="list-inline">
							<li class="post-like list-inline-item">
								<span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>{{ $row->created_at->diffForHumans() }}</span>
							</li>
							<li class="post-view list-inline-item letter-spacing-1">259 Views</li>
						</ul>
					</div>
					<div class="post-content">
						<p>{{ $row->teks_lengkap }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach

	<div class="pagination mt-5 pt-4">
		<ul class="list-inline">
        {{ $artikel->links('vendor.pagination.default') }}
		</ul>
	</div>

</div>
@endsection
