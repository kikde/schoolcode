<section class="courses" aria-label="Our Academic Programmes">
  <div class="container">
    <div class="courses__top">
      <div class="courses__kicker">OUR COURSES</div>
      <h2 class="courses__title">Let’s Check Our <span>Courses</span></h2>
      <p class="courses__sub">
        Explore key objectives and initiatives — curated from our sections.
      </p>
    </div>

    <div class="courses__grid">
      @foreach(($secmenu ?? collect())->take(6) as $items)
        @php
          $href = url('/objective-details/'.$items->id.'/'.$items->slug);
          $img  = asset('backend/uploads/'.$items->breadcrumb);
          $name = $items->sector_name ?? 'Objective';
          $desc = \Illuminate\Support\Str::limit(strip_tags($items->pagekeyword ?? $items->description ?? ''), 140);
        @endphp
        <article class="course-card">
          <a class="course-card__media" href="{{ $href }}" aria-label="Open: {{ $name }}">
            <div class="course-card__badge">
              <i class="fa-solid fa-bookmark" aria-hidden="true"></i>
              <span>Objective</span>
            </div>
            <img src="{{ $img }}" alt="{{ $name }}" loading="lazy" />
          </a>
          <div class="course-card__body">
            <h3 class="course-card__name">
              <a href="{{ $href }}">{{ $name }}</a>
            </h3>
            @if(!empty($desc))
              <p class="course-card__desc">{{ $desc }}</p>
            @endif
          </div>
        </article>
      @endforeach

      @if(($secmenu ?? collect())->isEmpty())
        {{-- Fallback when no sections are available --}}
        @for($i=0;$i<3;$i++)
          <article class="course-card">
            <div class="course-card__media">
              <div class="course-card__badge"><i class="fa-solid fa-bookmark"></i><span>Objective</span></div>
              <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="Placeholder" loading="lazy" />
            </div>
            <div class="course-card__body">
              <h3 class="course-card__name">Coming Soon</h3>
              <p class="course-card__desc">Content will appear here once objectives are published.</p>
            </div>
          </article>
        @endfor
      @endif
    </div>
  </div>
</section>
