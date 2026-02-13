<section class="updates" aria-label="Latest Updates">
        <div class="container">
          <div class="updates__top">
            <div class="updates__kicker">CAMPUS HEADLINES</div>
            <h2 class="updates__title">Latest <span>Updates</span></h2>
            <p class="updates__sub">
              Stay up to date with the latest news, announcements, and events from {{$setting->title}} including
              academic updates, achievements, and important notices.
            </p>
          </div>

          <div class="updates__grid">
            <article class="update-card update-card--embed" aria-label="Social feed">
              <div class="update-embed" role="img" aria-label="Facebook feed preview">
                <div class="update-embed__top">
                  <img class="update-embed__logo" src="{{ asset('backend/uploads/'.$setting->site_logo) }}" alt="" aria-hidden="true" />
                  <div class="update-embed__meta">
                    <div class="update-embed__name">{{$setting->title}}</div>
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
             @foreach( $newspost as $newslist)
            <article class="update-card">
              <div class="update-card__meta">
                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                <span>Himachal Dental College, Sundernagar</span>
              </div>
              <div class="update-card__media">
                <img src="{{asset('backend/uploads/'.$newslist->breadcrumb)}}" alt="Campus activity update" loading="lazy" />
              </div>
              <div class="update-card__body">
                <div class="update-card__date">
                  <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                  <span>{{ $newslist->created_at->format('F d, Y') }}</span>
                </div>
                <h3 class="update-card__title">{{$newslist->pagetitle}}</h3>
                <p class="update-card__text">
                  Team HDC proudly hosted twelve Healthcare stream students from Government Senior Secondary School�
                </p>
                <a class="update-card__btn" href="#">
                  <span>READ MORE</span>
                  <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </article>
            @endforeach
           
          </div>

          <div class="updates__more">
            <a class="updates__morebtn" href="#">
              <span>VIEW MORE</span>
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </section>




