<section class="gallery" aria-label="Photo Gallery">
  <div class="container">
    <div class="gallery__top">
      <div class="gallery__kicker">MOMENTS THAT MATTER</div>
      <h2 class="gallery__title">Our Photo <span>Gallery</span></h2>
      <p class="gallery__sub">
        Capturing smiles, success, and memories from our campus — a visual journey through life, achievements, and cherished moments.
      </p>
    </div>

    @php
      $positions = ['lt','mt','rt','lb','mm','mb','rb'];
      $items = collect($photos ?? [])->take(count($positions));
    @endphp

    <div class="gallery__grid">
      @forelse($items as $idx => $photo)
        @php
          $slot = $positions[$idx] ?? 'mm';
          $src  = $photo->images ? asset('backend/gallery/photo/'.$photo->images) : asset('frontend/assets/images/clients/clients-logo-1.png');
          $alt  = $photo->alt_tag ?? $photo->title ?? 'Gallery photo';
        @endphp
        <figure class="gallery__item gallery__item--{{ $slot }}">
          <img src="{{ $src }}" alt="{{ $alt }}" loading="lazy" />
        </figure>
      @empty
        {{-- Fallback placeholders when no photos exist --}}
        @for($i=0; $i < 7; $i++)
          <figure class="gallery__item gallery__item--{{ $positions[$i] }}">
            <img src="{{ asset('frontend/assets/images/clients/clients-logo-1.png') }}" alt="Placeholder image" loading="lazy" />
          </figure>
        @endfor
      @endforelse
    </div>
  </div>
</section>
