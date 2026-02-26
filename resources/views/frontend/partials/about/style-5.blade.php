    <main class="page">
      <section class="contact-banner" aria-label="Principal banner">
        <div class="container contact-banner__inner">
          <h1 class="contact-banner__title">{{ $pmessage->name ?? ("Principal") }}</h1>
          <nav class="contact-banner__crumbs" aria-label="Breadcrumb">
            <a href="{{url('/')}}">Home</a>
            <span class="contact-banner__sep" aria-hidden="true">&raquo;</span>
            <span class="contact-banner__current" aria-current="page">{{ $pmessage->name ?? ("Principal") }}</span>
          </nav>
        </div>
      </section>

      <section class="message" aria-label="Principal's message">
        <div class="container message__inner">
          <div class="message__kicker">PRINCIPAL'S MESSAGE</div>
          @if(!empty($pmessage->name))<h1 class="message__title">{{ $pmessage->name }}</h1>@endif

          <div class="message__body">
            <div class="message__photo" aria-label="Principal photo">\n              <img @if(!empty($pmessage->breadcrumb)) src="{{ asset('backend/uploads/'.$pmessage->breadcrumb) }}" @else src="{{ asset('backend/uploads/placeholder.jpg') }}" @endif alt="{{ $pmessage->name ?? ' }}" />\n            </div>

            <div class="message__text" aria-label="Message text">\n              @if(!empty($pmessage->description))\n                {!! $pmessage->description !!}\n              @else\n                <p>Welcome to {{ $setting->title }}. We are committed to quality education and holistic development.</p>\n              @endif\n              @if(!empty($pmessage->image))\n                <p class="message__sign"><img src="{{ asset('backend/uploads/'.$pmessage->image) }}" alt="Signature" style="max-width:200px;height:auto"></p>\n              @endif\n            </div>
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