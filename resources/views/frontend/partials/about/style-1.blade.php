<main class="page">
      <section class="contact-banner contact-banner--mv" aria-label="Mission and vision banner">
        <div class="container contact-banner__inner">
          <h1 class="contact-banner__title">Mission And Vision</h1>
          <nav class="contact-banner__crumbs" aria-label="Breadcrumb">
            <a href="{{url('/')}}">Home</a>
            <span class="contact-banner__sep" aria-hidden="true">&raquo;</span>
            <span class="contact-banner__current" aria-current="page">Mission And Vision</span>
          </nav>
        </div>
      </section>
@php
  $__about = ['title'=>'About Us','mission'=>null,'vision'=>null,'values'=>null];
  try {
    $p = storage_path('app/home_about.json');
    if (is_file($p)) {
      $j = json_decode(file_get_contents($p), true);
      if (is_array($j)) { $__about = array_merge($__about, $j); }
    }
  } catch (Throwable $e) {}
@endphp
      <section class="message message--mv" aria-label="Mission and vision content">
        <div class="container message__inner">
          <div class="mv__head">
            <div class="mv__titles">
              <div class="message__kicker">INSPIRATION, INTENTION &amp; IMPACT</div>
              <h2 class="message__title mv__title">
                Vision And The <span class="mv__accent">Road To Our Goals</span>
              </h2>
            </div>

          </div>

          <div class="message__body">
            <h3 class="mv__h">Our Vision</h3>
            <div class="message__text" aria-label="Vision text">
              @if(!empty($__about['vision']))
      {!! $__about['vision'] !!}
    @else
              <p>
                To create professional who are futuristic and flexiable in thinking and quick adapt themselves to the
                fast changing professional environment to ensure latest trends are incorporated in their treatment
                skills to make treatment affordable &amp; responsive. To train professionals in Dental Health Care
                &amp; make them capable of rising to the challenges, in a futuristic Global environment. To develop
                world class infrastructure with "State of the Art" equipment to ensure world class healthcare with a
                human face.
              </p>
              @endif
            </div>

            <h3 class="mv__h">Our Aim &amp; Objective</h3>
            <div class="message__text" aria-label="Aim and objective text">
               @if(!empty($__about['mission']))
              {!! $__about['mission'] !!}
            @else
              <p>
                Dynamic, innovative, periodically updated curriculum which assists students to remain abreast with
                current &amp; futuristic trends, assists better assimilation &amp; develops skills for efficient result
                oriented patient management in a global environment.
              </p>
              <p>
                Provide latest real time academic support services which helps students to have easy and cost effective
                access to the huge knowledge explosion and result oriented research findings.
              </p>
              <p>
                Encourage and organize camps to reach out to rural masses, educational institutes to create wider
                awareness and extent world class treatment at affordable costs.
              </p>
              <p>
                Create a network of satellite clinicise-enabled on innovative, incentive based partnership to enhance
                scope of "On the job" training &amp; promote dental care in rural areas &amp; urban metros with the
                ultimate aim of correcting the population: Doctor ratio and ensure an exposure spectrum which covers
                Rural-Metro-Global range.
              </p>
              @endif
            </div>
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
