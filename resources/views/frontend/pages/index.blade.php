@extends('layouts.master')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" referrerpolicy="no-referrer"><link rel="stylesheet" href="{{ asset('frontend/assets/css/hstyle.css') }}">
@endpush
@section('content')<main class="page">
      <section class="home-hero" aria-label="Hero">
        <div class="home-hero__bg" aria-hidden="true"></div>
        <div class="container home-hero__inner">
          <div class="home-hero__panel" aria-hidden="true"></div>
          <div class="home-hero__content">
            <div class="home-hero__kicker">WELCOME TO HDC!</div>
            <h1 class="home-hero__title">
              <span class="home-hero__line home-hero__line--top">Start Your Beautiful And</span>
              <span class="home-hero__line home-hero__line--bottom">
                <span class="home-hero__stroke">Bright</span>
                <span class="home-hero__solid">Future</span>
              </span>
            </h1>
            <p class="home-hero__desc">
              Modern learning, expert faculty, and hands-on clinical training � all under one roof.
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
                At Himachal Dental College, we empower students with the skills, knowledge, and confidence they need to
                lead in the dynamic field of dentistry and make a meaningful impact.
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

            <div class="about__right">
              <div class="about__frame">
                <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="Hands-on clinical training at HDC" loading="lazy" />
              </div>
            </div>
          </div>
        </div>
      </section>
   
     @include ("frontend.partials.breakingnews.style-2")
      <section class="departments" aria-label="Departments">
        <div class="departments__wrap">
          <div class="departments__top">
            <div class="departments__kicker">DEPARTMENT</div>
            <h2 class="departments__title">Browse Our <span>Department</span></h2>
            <p class="departments__sub">
              Explore specialized departments dedicated to in-depth knowledge, hands-on training, and excellence across
              dentistry.
            </p>
          </div>

          <div class="departments__track" aria-label="Department cards">
            <article class="dept-card">
              <div class="dept-card__icon" aria-hidden="true">
                <i class="fa-solid fa-tooth"></i>
              </div>
              <h3 class="dept-card__title">Conservative Dentistry and Endodontics</h3>
              <a class="dept-card__link" href="#">
                <span>READ MORE</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
              </a>
            </article>

            <article class="dept-card">
              <div class="dept-card__icon" aria-hidden="true">
                <i class="fa-solid fa-teeth"></i>
              </div>
              <h3 class="dept-card__title">Orthodontics and Dental Orthopaedics</h3>
              <a class="dept-card__link" href="#">
                <span>READ MORE</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
              </a>
            </article>

            <article class="dept-card">
              <div class="dept-card__icon" aria-hidden="true">
                <i class="fa-solid fa-teeth-open"></i>
              </div>
              <h3 class="dept-card__title">Prosthodontics and Crown and Bridge</h3>
              <a class="dept-card__link" href="#">
                <span>READ MORE</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
              </a>
            </article>

            <article class="dept-card">
              <div class="dept-card__icon" aria-hidden="true">
                <i class="fa-solid fa-tooth"></i>
              </div>
              <h3 class="dept-card__title">Periodontology and Oral Implantology</h3>
              <a class="dept-card__link" href="#">
                <span>READ MORE</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
              </a>
            </article>
          </div>

          <div class="departments__dots" aria-hidden="true">
            <span class="dot dot--active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </section>

      <nav class="home-social" aria-label="Social links">
        <a class="home-social__btn home-social__btn--fb" href="#" aria-label="Facebook">
          <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--ig" href="#" aria-label="Instagram">
          <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--yt" href="#" aria-label="YouTube">
          <i class="fa-brands fa-youtube" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--wa" href="#" aria-label="WhatsApp">
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



