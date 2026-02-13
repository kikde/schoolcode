@extends('layouts.master')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" referrerpolicy="no-referrer">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/hstyle.css') }}">
@php
  $firstBanner = collect($homebanner ?? [])->first();
  $heroUrl = $firstBanner && !empty($firstBanner->images)
    ? asset('backend/home/banner/'.$firstBanner->images)
    : asset('frontend/assets/images/background/default-banner.jpg');
@endphp
<style>
  .home-hero__bg{ background-image: linear-gradient(90deg, rgba(0,0,0,.62) 0%, rgba(0,0,0,.25) 58%, rgba(0,0,0,.05) 100%), url('{{ $heroUrl }}'), linear-gradient(135deg,#2a5a5b 0%, #1d3f56 45%, #1d2a3a 100%) }
</style>
@endpush
@section('content')<main class="page">
      <section class="home-hero" aria-label="Hero">
        <div class="home-hero__bg" aria-hidden="true"></div>
        <div class="container home-hero__inner">
          <div class="home-hero__panel" aria-hidden="true"></div>
          <div class="home-hero__content">
            <div class="home-hero__kicker">WELCOME TO MEA!</div>
            <h1 class="home-hero__title">
              <span class="home-hero__line home-hero__line--top">Start Your Beautiful And</span>
              <span class="home-hero__line home-hero__line--bottom">
                <span class="home-hero__stroke">Bright</span>
                <span class="home-hero__solid">Future</span>
              </span>
            </h1>
            <p class="home-hero__desc">
            Modern learning, expert faculty, and hands-on clinical training Ã¢â‚¬â€ all under one roof
            </p>
            <a class="home-hero__cta" href="#">
              <span>LEARN MORE</span>
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </section>

      @include ("frontend.partials.blog.style-2")
      @include ("frontend.partials.gallery.style-2")

      <section class="about" aria-label="Why Choose Us">
        <div class="container">
          <div class="about__grid">
            <div class="about__left">
              <div class="about__kicker">WHY CHOOSE US ?</div>
              <h2 class="about__title">
                Shaping Skills &amp; Confidence<br>
                To Lead In Dentistry
              </h2>
              <p class="about__desc">
                At {{$setting->title}},  we empower students with the skills, knowledge, and confidence they need to lead in the dynamic field of dentistry and make a meaningful impact.
              </p>

              <ul class="about__cards">
                <li class="about-card">
                  <div class="about-card__icon" aria-hidden="true">
                    <i class="fa-solid fa-user-graduate"></i>
                  </div>
                  <div class="about-card__text">
                    <div class="about-card__h">Expert Faculty</div>
                    <div class="about-card__s">Learn from experienced teachers.</div>
                  </div>
                </li>

                <li class="about-card">
                  <div class="about-card__icon" aria-hidden="true">
                    <i class="fa-solid fa-hospital"></i>
                  </div>
                  <div class="about-card__text">
                    <div class="about-card__h">Modern Facilities</div>
                    <div class="about-card__s">Well-equipped labs and clinics for practice.</div>
                  </div>
                </li>

                <li class="about-card">
                  <div class="about-card__icon" aria-hidden="true">
                    <i class="fa-solid fa-book-open-reader"></i>
                  </div>
                  <div class="about-card__text">
                    <div class="about-card__h">Smart Curriculum</div>
                    <div class="about-card__s">A good balance of theory and hands-on learning.</div>
                  </div>
                </li>

                <li class="about-card">
                  <div class="about-card__icon" aria-hidden="true">
                    <i class="fa-solid fa-briefcase"></i>
                  </div>
                  <div class="about-card__text">
                    <div class="about-card__h">Career Support</div>
                    <div class="about-card__s">Help and opportunities for your future.</div>
                  </div>
                </li>
              </ul>
            </div>
             @php
      try {
        $tvItem = \Modules\Gallery\Entities\Gallery::where('type','video')
                    ->whereNotNull('video')
                    ->latest()
                    ->first();
      } catch (\Throwable $e) { $tvItem = null; }
      $tvSrc    = $tvItem && $tvItem->video ? asset('backend/gallery/video/'.$tvItem->video) : asset('frontend/custom/intro.mp4');
      $tvPoster = $tvItem && $tvItem->images ? asset('backend/gallery/photo/'.$tvItem->images) : null;
    @endphp

            <div class="about__right">
              <div class="about__frame">
                 <video class="tv-media" preload="metadata" @if($tvPoster) poster="{{ $tvPoster }}" @endif controls playsinline>
      <source src="{{ $tvSrc }}" type="video/mp4">
     
      Your browser does not support HTML5 video.
    </video>
              </div>
            </div>
          </div>
        </div>
      </section>
   
     @include ("frontend.partials.breakingnews.style-2")
     @include ("frontend.partials.todo.style-2")
      

      <nav class="home-social" aria-label="Social links">
        <a class="home-social__btn home-social__btn--fb" href="{{ $setting->facebook_url}}" aria-label="Facebook">
          <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--ig" href="{{ $setting->insta_url}}" aria-label="Instagram">
          <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--yt" href="{{ $setting->youtube}}" aria-label="YouTube">
          <i class="fa-brands fa-youtube" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--wa" href="https://wa.me/{{ $setting->phone }}?text={{ urlencode('Hello Team,ÃƒÂ°Ã…Â¸Ã¢â‚¬ËœÃ¢â‚¬Â¹\nThank you for your support!') }}" aria-label="WhatsApp">
          <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        </a>
      </nav>

      <a class="home-top" href="#top" aria-label="Back to top">
        <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
      </a>
    </main>@endsection
@push('scripts')
<script src="{{ asset('frontend/assets/js/hscript.js') }}"></script>
@endpush








