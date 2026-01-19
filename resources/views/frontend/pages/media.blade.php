@extends('layouts.master')

@section('content')


   <!-- Page Title -->
   <!-- <section class="page-title style-two centred" style="background-image: url({{asset('frontend/assets/images/background/media.png')}});">
    <div class="auto-container">
        <div class="content-box">
            <div class="title">
                <h1>Our Video Gallery</h1>
            </div>
            {{-- <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
              
            </ul> --}}
        </div>
    </div>
</section> -->
<!-- End Page Title -->


  <!-- feedback-section -->
  <section class="feedback-section sec-pad">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h6>Videos</h6>
           
        </div>
        @if(count($videos)> 0)
        <div class="row clearfix">
           
            @foreach($videos as $gallery)
            @php
                // Prefer explicit YouTube link if provided; otherwise use uploaded file name/path
                $videoSrc   = trim($gallery->link ?? '') !== '' ? trim($gallery->link) : ($gallery->video ?? '');
                $isAbsolute = filter_var($videoSrc, FILTER_VALIDATE_URL) !== false;
                $isYouTube  = $isAbsolute && preg_match('~(youtube\.com|youtu\.be)~i', $videoSrc);

                // If YouTube, normalize to embeddable URL
                $embedUrl = $videoSrc;
                if ($isYouTube) {
                    $ytId = null;
                    if (preg_match('~youtu\.be/([\w-]{11})~', $videoSrc, $m)) {
                        $ytId = $m[1];
                    } elseif (preg_match('~[?&]v=([\w-]{11})~', parse_url($videoSrc, PHP_URL_QUERY) ?? '', $m)) {
                        $ytId = $m[1];
                    } elseif (preg_match('~youtube\.com/(?:embed|shorts)/([\w-]{11})~', $videoSrc, $m)) {
                        $ytId = $m[1];
                    }
                    if ($ytId) {
                        $embedUrl = 'https://www.youtube.com/embed/' . $ytId;
                    }
                }

                // Final URL used by Fancybox/mobile. Local file becomes absolute asset path.
                $fileUrl = $isYouTube ? $embedUrl : ($isAbsolute ? $videoSrc : asset('backend/gallery/video/'.$videoSrc));
            @endphp
            <div class="col-lg-4 col-md-6 col-sm-12 feedback-block">
                <div class="feedback-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('backend/gallery/photo/'.$gallery->images) }}" alt=""></figure>
                        <div class="video-btn">
                            @if($isYouTube)
                                <a href="{{ $fileUrl }}?rel=0&autoplay=1" class="lightbox-image" data-fancybox data-type="iframe"><i class="flaticon-play-button-arrowhead"></i></a>
                            @else
                                <a href="{{ $fileUrl }}" class="lightbox-image" data-fancybox data-type="video"><i class="flaticon-play-button-arrowhead"></i></a>
                            @endif
                        </div>
                        @if($isYouTube)
                            <div class="responsive-embed">
                                <iframe src="{{ $fileUrl }}?rel=0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy" title="Video"></iframe>
                            </div>
                        @else
                            <div class="responsive-video">
                                <video controls playsinline preload="metadata" poster="{{ asset('backend/gallery/photo/'.$gallery->images) }}">
                                    <source src="{{ $fileUrl }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif
                        {{-- <div class="share-option">
                            <span><i class="flaticon-share"></i>Share</span>
                            <ul class="share-links clearfix">
                                 <li><a href='https://www.facebook.com/sharer/sharer.php?u=https%3A//delhi91.org/{{$gallery->video}}'><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkdin"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="pagination-wrapper centred">
            {{ $videos->links('vendor.pagination.default') }} 
                    @else
                    <h5 class="justify-content-center"> No Data found</h5>
                    @endif
        </div>
        

    </div>
</section>
<!-- feedback-section end -->

<style>
    /* Mobile-first responsive video: show inline video on small screens */
    .feedback-block-one .inner-box .responsive-video { display: none; }
    .feedback-block-one .inner-box .responsive-video video {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 12px;
        background: #000;
    }
    /* Responsive 16:9 wrapper for YouTube/Vimeo */
    .feedback-block-one .inner-box .responsive-embed { display:none; position:relative; width:100%; padding-top:56.25%; background:#000; border-radius:12px; overflow:hidden; }
    .feedback-block-one .inner-box .responsive-embed iframe { position:absolute; inset:0; width:100%; height:100%; border:0; }

    /* On phones, replace lightbox with inline video */
    @media (max-width: 767.98px) {
        .feedback-block-one .inner-box .image-box,
        .feedback-block-one .inner-box .video-btn { display: none; }
        .feedback-block-one .inner-box .responsive-video,
        .feedback-block-one .inner-box .responsive-embed { display: block; }
    }
</style>



@endsection
