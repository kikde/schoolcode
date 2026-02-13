<section class="updates" aria-label="Latest Updates">
  <div class="container">
    <div class="updates__top">
      <div class="updates__kicker">CAMPUS HEADLINES</div>
      <h2 class="updates__title">Latest <span>Updates</span></h2>
      <p class="updates__sub">
        Stay up to date with the latest news, announcements, and events from {{ $setting->title }} including
        academic updates, achievements, and important notices.
      </p>
    </div>

    <div class="updates__grid">
      @php
        $first = ($newspost ?? collect())->first();
        $rest  = ($newspost ?? collect())->slice(1);
      @endphp

      @if($first)
        <article class="update-card update-card--embed" aria-label="Featured update">
          <div class="update-embed" role="img" aria-label="Featured update preview">
            <div class="update-embed__top">
              <img class="update-embed__logo" src="{{ asset('backend/uploads/'.$setting->site_logo) }}" alt="{{ $setting->title }}" aria-hidden="true" />
              <div class="update-embed__meta">
                <div class="update-embed__name">{{ $setting->title }}</div>
                <div class="update-embed__small">Social updates — Follow us</div>
              </div>
            </div>
            <div class="update-embed__body">
              <div class="update-embed__line"></div>
              <div class="update-embed__line"></div>
              <div class="update-embed__line"></div>
              <div class="update-embed__img">
                <img src="{{ asset('backend/uploads/'.$first->breadcrumb) }}" alt="{{ $first->pagetitle }}" aria-hidden="true" loading="lazy" />
              </div>
            </div>
          </div>
        </article>
      @endif

      @foreach($rest as $newslist)
        @php $newsUrl = url('news-details/'.$newslist->id.'/'.($newslist->slug ?? \Illuminate\Support\Str::slug($newslist->pagetitle ?? 'news'))); @endphp
        <article class="update-card">
          <div class="update-card__meta">
            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
            <span>{{ $setting->title }}</span>
          </div>
          <a class="update-card__media" href="{{ $newsUrl }}" aria-label="Open: {{ $newslist->pagetitle }}">
            <img src="{{ asset('backend/uploads/'.$newslist->breadcrumb) }}" alt="{{ $newslist->pagetitle }}" loading="lazy" />
          </a>
          <div class="update-card__body">
            <div class="update-card__date">
              <i class="fa-regular fa-calendar" aria-hidden="true"></i>
              <span>{{ optional($newslist->created_at)->format('F d, Y') }}</span>
            </div>
            <h3 class="update-card__title">{{ $newslist->pagetitle }}</h3>
            @if(!empty($newslist->description))
              <p class="update-card__text">{{ \Illuminate\Support\Str::limit(strip_tags($newslist->description), 140) }}</p>
            @endif
            <a class="update-card__btn" href="{{ $newsUrl }}">
              <span>READ MORE</span>
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </article>
      @endforeach
    </div>

    <div class="updates__more">
      <a class="updates__morebtn" href="{{ url('/news-post') }}">
        <span>VIEW MORE</span>
        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</section>
