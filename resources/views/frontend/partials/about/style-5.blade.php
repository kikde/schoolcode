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

            <div class="message__text" aria-label="Message text">
              @if(!empty($pmessage->description))
                {!! $pmessage->description !!}
              @else
                <p>Welcome to {{ $setting->title }}. We are committed to quality education and holistic development.</p>
              @endif

              @if(!empty($pmessage->image))
                <p class="message__sign"><img src="{{ asset('backend/uploads/'.$pmessage->image) }}" alt="Signature" style="max-width:200px;height:auto"></p>
              @else
                <p class="message__sign">
                  <strong>Principal,</strong><br />
                  {{ $pmessage->name ?? 'Dr. Sanjay Kumar' }}<br />
                  {{ $setting->title }}
                </p>
              @endif
            </div>
          
          
          
          </div>
        </div>
      </section>

      
    </main>