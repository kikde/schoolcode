<!-- Ribbon / Testimonials Ticker (clickable) -->
<style>
  /* Make ticker full-bleed and flush on mobile */
  .ribbon-ticker{position:relative; width:100%; box-sizing:border-box; overflow:hidden; margin:0 !important; padding:0; display:block; border:0; line-height:1}
  /* break out of centered containers to remove side gutters */
  @media (max-width: 768px){ .ribbon-ticker{  left:50%; right:50%; margin-left:-50vw; margin-right:-50vw; } }
  .ribbon-track{display:inline-flex; gap:28px; white-space:nowrap; padding:8px 12px}
  .ribbon-label{display:inline-flex; align-items:center; background:#2b1979; color:#fff; font-weight:800; padding:8px 14px; margin-right:10px}
  .ribbon-text{color:#111827; text-decoration:none; font-weight:600}
  .ribbon-text:hover{text-decoration:underline}
</style>
<div class="ribbon-ticker" role="region" aria-label="Testimonials">
  <div class="ribbon-label">Events</div>
  <div class="ribbon-track">
     @foreach( $all_events  as $tickers)

    <a href="#testimonials" class="ribbon-text">
      <strong>{{$tickers->title}}</strong> — {{$tickers->meta_description}}
    </a>
    @endforeach
  </div>
</div>
  


