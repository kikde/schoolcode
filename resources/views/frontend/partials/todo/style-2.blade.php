<section class="departments" aria-label="What We Do">
  <div class="departments__wrap">
    <div class="departments__top">
      <div class="departments__kicker">PROGRAMS</div>
      <h2 class="departments__title">Browse Our <span>Programs</span></h2>
      <p class="departments__sub">
        Key initiatives and services we run at {{ $setting->title }}.
      </p>
    </div>

    @if(($whato ?? collect())->count())
      <div class="departments__track" aria-label="Program cards">
        @foreach($whato as $item)
          @php
            $img  = !empty($item->images) ? asset('backend/home/todo/'.$item->images) : null;
            $alt  = $item->alt_tag ?? $item->title ?? 'Program';
            $text = trim((string)($item->description ?? ''));
          @endphp
          <article class="dept-card">
            <div class="dept-card__icon" aria-hidden="true">
              @if($img)
                <img src="{{ $img }}" alt="{{ $alt }}" />
              @else
                <i class="fa-solid fa-circle-nodes"></i>
              @endif
            </div>
            <h3 class="dept-card__title">{{ $item->title ?? 'Program' }}</h3>
            @if($text !== '')
              <a class="dept-card__link" href="#" aria-label="Read more about {{ $item->title }}">
                <span>READ MORE</span>
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
              </a>
            @endif
          </article>
        @endforeach
      </div>
    @else
      <div class="departments__track" aria-label="Program cards">
        @for($i=0;$i<4;$i++)
          <article class="dept-card">
            <div class="dept-card__icon" aria-hidden="true"><i class="fa-solid fa-circle-nodes"></i></div>
            <h3 class="dept-card__title">Coming Soon</h3>
            <a class="dept-card__link" href="#">
              <span>READ MORE</span>
              <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
          </article>
        @endfor
      </div>
    @endif

    <div class="departments__dots" aria-hidden="true">
      <span class="dot dot--active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>
</section>
