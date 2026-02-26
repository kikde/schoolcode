    <main class="page">
      <section class="contact-banner" aria-label="Director banner">
        <div class="container contact-banner__inner">
          <h1 class="contact-banner__title">{{ $dmessage->name ?? 'Director' }}</h1>
          <nav class="contact-banner__crumbs" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <span class="contact-banner__sep" aria-hidden="true">&raquo;</span>
            <span class="contact-banner__current" aria-current="page">{{ $dmessage->name ?? 'Director' }}</span>
          </nav>
        </div>
      </section>

      <section class="message" aria-label="Director's message">
        <div class="container message__inner">
          <div class="message__kicker">DIRECTOR'S MESSAGE</div>
          @if(!empty($dmessage->name))
            <h2 class="message__title">{{ $dmessage->name }}</h2>
          @endif

          <div class="message__body">
            <div class="message__photo" aria-label="Director photo">
              <img
                @if(!empty($dmessage->breadcrumb))
                  src="{{ asset('backend/uploads/'.$dmessage->breadcrumb) }}"
                @else
                  src="{{ asset('backend/uploads/placeholder.jpg') }}"
                @endif
                alt="{{ $dmessage->name ?? 'Director' }}"
              />
            </div>

            <div class="message__text" aria-label="Message text">
              @if(!empty($dmessage->description))
                {!! $dmessage->description !!}
              @endif

              @if(!empty($dmessage->image))
                <div class="message__signature" style="margin-top:16px">
                  <img src="{{ asset('backend/uploads/'.$dmessage->image) }}" alt="Signature" style="max-width:200px; height:auto;" />
                </div>
              @endif

                <p class="message__sign">
                <strong>Director,</strong><br />
                {{ $dmessage->name }}<br />
                Director of  {{$setting->title}}
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- <div class="home-social" aria-label="Social links">
        <a class="home-social__btn home-social__btn--fb" href="{{ $setting->facebook_url}}" aria-label="Facebook">
          <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--ig" href="{{ $setting->insta_url}}" aria-label="Instagram">
          <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--yt" href="{{ $setting->youtube}}" aria-label="YouTube">
          <i class="fa-brands fa-youtube" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--wa" href="https://wa.me/{{ $setting->phone }}?text={{ urlencode('Hello Team,👋\nThank you for your support!') }}" aria-label="WhatsApp">
          <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        </a>
      </div>

      <a class="home-top" href="#top" aria-label="Back to top">
        <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
      </a> -->
    </main>