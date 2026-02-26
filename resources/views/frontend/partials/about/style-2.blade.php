 <main class="page">
      <section class="contact-banner" aria-label="Our history banner">
        <div class="container contact-banner__inner">
          <h1 class="contact-banner__title">{{ $about->pagetitle ?? $about->name ?? "Our History" }}</h1>
          <nav class="contact-banner__crumbs" aria-label="Breadcrumb">
            <a href="{{url('/')}}">Home</a>
            <span class="contact-banner__sep" aria-hidden="true">&raquo;</span>
            <span class="contact-banner__current" aria-current="page">{{ $about->pagetitle ?? $about->name ?? "Our History" }}</span>
          </nav>
        </div>
      </section>

      <section class="message message--history" aria-label="Our history">
        <div class="container message__inner">
          <div class="history__head">
            <div class="history__titles">
              <div class="message__kicker">OUR HISTORY</div>
              <h2 class="message__title history__title">
                {{ $about->pagekeyword ?? ("A Journey Of Dedication To ") }} <span class="history__accent">{{ $setting->title ?? "Education" }}</span>
              </h2>
            </div>

          </div>

          <div class="message__body">
            <div class="message__text" aria-label="History text">@if(!empty($about->description)){!! $about->description !!}@else<p>{{ $setting->title }} was established to provide quality education and holistic development.</p>@endif</div>
          </div>
        </div>
      </section>

      <!-- <div class="home-social" aria-label="Social links">
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
      </div>

      <a class="home-top" href="#top" aria-label="Back to top">
        <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
      </a> -->
    </main>