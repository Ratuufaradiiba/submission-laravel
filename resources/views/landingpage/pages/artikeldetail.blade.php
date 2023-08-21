@extends('landingpage.layouts.appdetail')
@section('content')
<div class="single-post">
    <div class="post-header mb-5 text-center">
        <div class="meta-cat">
            <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">{{ $row->kategori->nama }}</a>
        </div>
        <h2 class="post-title mt-2">
            
        </h2>

        <div class="post-meta">
            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by Liam</span>
            <span class="text-uppercase font-sm letter-spacing-1">January 17,2019</span>
        </div>
        <div class="post-featured-image mt-5">
            <img src="images/fashion/bg-banner.jpg" class="img-fluid w-100" alt="featured-image" />
        </div>
    </div>
    <div class="post-body">
        <div class="entry-content">
            <p>
                It was a cheerful prospect. I asked
                Perry what he thought about it; but he
                only shrugged his shoulders and
                continued a longwinded prayer he had
                been at for some time. He was wont to
                say that the only redeeming feature of
                our captivity was the ample time it gave
                him for the improvisation of prayers—it
                was becoming an obsession with him.
            </p>
            <h2 class="mt-4 mb-3">
                Perfect design & code delivered to you
            </h2>
            <p>
                The Sagoths had begun to take notice of
                his habit of declaiming throughout
                entire marches. One of them asked him
                what he was saying—to whom he was
                talking. The question gave me an idea,
                so I answered quickly before Perry could
                say anything.
            </p>
            <blockquote>
                <i class="ti-quote-left mr-2"></i>A wise
                girls knows her limit to touch the
                sky.Repellat sapiente neque iusto
                praesentium adipisci.The question gave
                me an idea, so I answered quickly before
                Perry could say anything.<i class="ti-quote-right ml-2"></i>
            </blockquote>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="images/fashion/single-img1.png" alt="post-ads" class="img-fluid mr-4 w-100" />
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="images/fashion/single-img2.png" alt="post-ads" class="img-fluid mr-4 w-100" />
                </div>
            </div>
            <h3 class="mt-5 mb-3">
                Enjoying the view of summer
            </h3>

            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Unde cum delectus
                exercitationem natus quidem enim error
                suscipit. Iure cupiditate nobis quaerat
                consectetur! Vero aliquam, amet ipsum
                ullam reiciendis nostrum voluptate
                accusantium provident ut blanditiis
                incidunt.
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptates ab ratione
                animi nobis in et consequatur earum modi
                repellendus, qui, non debitis pariatur
                tempora consequuntur!
            </p>
        </div>

        <div class="post-tags py-4">
            <a href="#">#Health</a>
            <a href="#">#Game</a>
            <a href="#">#Tour</a>
        </div>

        <div class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">
            <span class="single-comment-o"><i class="fa fa-comment-o"></i>0
                comment</span>

            <div class="post-share">
                <span class="count-number-like">2</span>
                <a class="penci-post-like single-like-button"><i class="ti-heart"></i></a>
            </div>

            <div class="list-posts-share">
                <a target="_blank" rel="nofollow" href="#"><i class="ti-facebook"></i></a>
                <a target="_blank" rel="nofollow" href="#"><i class="ti-twitter"></i></a>
                <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
                <a target="_blank" rel="nofollow" href="#"><i class="ti-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>

<nav class="post-pagination clearfix border-top border-bottom py-4">
    <div class="prev-post">
        @if($prev)
        <a href="{{ url('culturedetail', ['id' => $prev->id]) }}">
            <span class="text-uppercase font-sm letter-spacing">Previous</span>
            <h4 class="mt-3"> {{ $prev->nama_culture }}</h4>
        </a>
        @endif
    </div>
    <div class="next-post">
        @if($next)
        <a href="{{ url('culturedetail', ['id' => $next->id]) }}">
            <span class="text-uppercase font-sm letter-spacing">Next</span>
            <h4 class="mt-3">{{ $next->nama_culture }}</h4>
        </a>
        @endif
    </div>
</nav>
<div class="related-posts-block mt-5">
    <h3 class="news-title mb-4 text-center">
        Kamu mungkin juga suka
    </h3>
    <div class="row">
        @foreach ($culturesuka as $row)
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="post-block-wrapper mb-4 mb-lg-0">
                <a class="post-thumb " href="{{ url('culturedetail', $row->id)}}">
                    @empty($row->gambar_culture)
                    <img src="{{ url('admin\media\no-image-found.png') }}" alt="Profile" class="img-fluid custom-image">
                    @else
                    <img src="{{ asset($row->gambar_culture) }}" alt="Profile" class="img-fluid custom-image">
                    @endempty
                </a>
                <div class="post-content mt-3 text-center">
                    <h5>
                        <a href="{{ url('culturedetail', $row->id)}}">{{ $row->nama_culture }}</a>
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
