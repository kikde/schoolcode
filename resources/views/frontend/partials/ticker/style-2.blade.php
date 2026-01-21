<!-- Simple Events List (restored) -->
<style>
  .events-list{ margin:0; padding:8px 0; line-height:1.4; }
  .events-list .ev-label{ font-size:.95rem; color:#6b7280; margin:0 0 4px 0; font-weight:700 }
  .events-list .ev-item{ margin:4px 0; color:#374151 }
  .events-list .ev-title{ color:#0a58ca; font-weight:800; text-decoration:none }
  .events-list .ev-title:hover{ text-decoration:underline }
  .events-list .sep{ color:#9ca3af; padding:0 6px }
  @media(max-width:576px){ .events-list{ margin:0; padding:6px 12px } }
</style>
<div class="events-list" role="region" aria-label="Events">
  <div class="ev-label">Events</div>
  @foreach($all_events as $tickers)
    <div class="ev-item">
      @php $href = isset($tickers->slug) ? url('/event-details/'.$tickers->id.'/'.$tickers->slug) : '#'; @endphp
      <a class="ev-title" href="{{ $href }}">{{ $tickers->title }}</a>
      <span class="sep">—</span>
      <span class="ev-desc">{{ $tickers->meta_description }}</span>
    </div>
  @endforeach
</div>
