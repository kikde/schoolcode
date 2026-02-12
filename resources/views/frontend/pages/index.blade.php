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

      <section class="courses" aria-label="Our Academic Programmes">
        <div class="container">
          <div class="courses__top">
            <div class="courses__kicker">OUR ACADEMIC PROGRAMMES</div>
            <h2 class="courses__title">
              Let's Check Our <span>Courses</span>
            </h2>
            <p class="courses__sub">
              From foundational knowledge to advanced practice, our courses support every stage of your dental journey.
            </p>
          </div>

          <div class="courses__grid">
            <article class="course-card">
              <div class="course-card__media">
                <div class="course-card__badge">
                  <i class="fa-solid fa-bookmark" aria-hidden="true"></i>
                  <span>Undergraduate</span>
                </div>
                <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="BDS program training" loading="lazy" />
              </div>
              <div class="course-card__body">
                <div class="course-card__rating" role="img" aria-label="Rated 5 out of 5">
                  <span class="course-card__stars" aria-hidden="true">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  <span class="course-card__score">(5.0)</span>
                </div>
                <h3 class="course-card__name">BDS Program</h3>
                <p class="course-card__desc">
                  A 5-year degree course offering core knowledge and clinical skills for a strong foundation in
                  dentistry.
                </p>
              </div>
            </article>

            <article class="course-card">
              <div class="course-card__media">
                <div class="course-card__badge">
                  <i class="fa-solid fa-bookmark" aria-hidden="true"></i>
                  <span>Postgraduate</span>
                </div>
                <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="MDS program clinical practice" loading="lazy" />
              </div>
              <div class="course-card__body">
                <div class="course-card__rating" role="img" aria-label="Rated 5 out of 5">
                  <span class="course-card__stars" aria-hidden="true">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  <span class="course-card__score">(5.0)</span>
                </div>
                <h3 class="course-card__name">MDS Program</h3>
                <p class="course-card__desc">
                  A 3-year advanced programme focused on specialization, research, and expert clinical training.
                </p>
              </div>
            </article>

            <article class="course-card">
              <div class="course-card__media">
                <div class="course-card__badge">
                  <i class="fa-solid fa-bookmark" aria-hidden="true"></i>
                  <span>Diploma</span>
                </div>
                <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="Diploma dental courses" loading="lazy" />
              </div>
              <div class="course-card__body">
                <div class="course-card__rating" role="img" aria-label="Rated 5 out of 5">
                  <span class="course-card__stars" aria-hidden="true">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  <span class="course-card__score">(5.0)</span>
                </div>
                <h3 class="course-card__name">Diploma Courses</h3>
                <p class="course-card__desc">
                  Short-term dental courses aimed at skill enhancement in specific areas of dental practice.
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
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

      
      <section class="updates" aria-label="Latest Updates">
        <div class="container">
          <div class="updates__top">
            <div class="updates__kicker">CAMPUS HEADLINES</div>
            <h2 class="updates__title">Latest <span>Updates</span></h2>
            <p class="updates__sub">
              Stay up to date with the latest news, announcements, and events from Himachal Dental College � including
              academic updates, achievements, and important notices.
            </p>
          </div>

          <div class="updates__grid">
            <article class="update-card update-card--embed" aria-label="Social feed">
              <div class="update-embed" role="img" aria-label="Facebook feed preview">
                <div class="update-embed__top">
                  <img class="update-embed__logo" src="{{ asset('backend/uploads/'.$setting->site_logo) }}" alt="" aria-hidden="true" />
                  <div class="update-embed__meta">
                    <div class="update-embed__name">Himachal Dental College</div>
                    <div class="update-embed__small">Social updates � Follow us</div>
                  </div>
                </div>
                <div class="update-embed__body">
                  <div class="update-embed__line"></div>
                  <div class="update-embed__line"></div>
                  <div class="update-embed__line"></div>
                  <div class="update-embed__img">
                    <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="" aria-hidden="true" loading="lazy" />
                  </div>
                </div>
              </div>
            </article>

            <article class="update-card">
              <div class="update-card__meta">
                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                <span>Himachal Dental College, Sundernagar</span>
              </div>
              <div class="update-card__media">
                <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="Campus activity update" loading="lazy" />
              </div>
              <div class="update-card__body">
                <div class="update-card__date">
                  <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                  <span>2026-01-24</span>
                </div>
                <h3 class="update-card__title">Twelve Healthcare stream</h3>
                <p class="update-card__text">
                  Team HDC proudly hosted twelve Healthcare stream students from Government Senior Secondary School�
                </p>
                <a class="update-card__btn" href="#">
                  <span>READ MORE</span>
                  <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </article>

            <article class="update-card">
              <div class="update-card__meta">
                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                <span>Himachal Dental College, Sundernagar</span>
              </div>
              <div class="update-card__media">
                <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="Student achievement update" loading="lazy" />
              </div>
              <div class="update-card__body">
                <div class="update-card__date">
                  <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                  <span>2025-12-23</span>
                </div>
                <h3 class="update-card__title">
                  Himachal Dental College, Sundernagar outstanding performance of its students in the BDS
                </h3>
                <p class="update-card__text">
                  Himachal Dental College, Sundernagar is extremely pleased to announce the outstanding performance�
                </p>
                <a class="update-card__btn" href="#">
                  <span>READ MORE</span>
                  <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </article>
          </div>

          <div class="updates__more">
            <a class="updates__morebtn" href="#">
              <span>VIEW MORE</span>
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </section>
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



