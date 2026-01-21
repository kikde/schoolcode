<!-- Ribbon / Testimonials Ticker (clickable) -->
<style>
  .ribbon-ticker{position:relative; width:100%; box-sizing:border-box; overflow:hidden; margin:0}
  @media (max-width: 576px){
    .ribbon-ticker{ width:calc(100% + 30px); margin-left:-15px; margin-right:-15px; }
  }
</style>
<div class= — ribbon-ticker —  role= — region —  aria-label= — Testimonials — >
  <div class= — ribbon-label — >Events</div>
  <div class= — ribbon-track — >
     @foreach( $all_events  as $tickers)

    <a href= — #testimonials —  class= — ribbon-text — >
      <strong>{{$tickers->title}}</strong> â€” {{$tickers->meta_description}}
    </a>
    @endforeach
  </div>
</div>
  



