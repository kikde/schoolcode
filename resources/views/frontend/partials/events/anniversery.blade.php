@php
  $items = collect($upcomingAnniversaries ?? [])->take(12);
@endphp
<section class="vsf-anniv section-padding">
  <header class="vsf-evt2-header">
    <h6>Members</h6>
    <h2>Upcoming Anniversaries</h2>
    <p>Congratulate our members on their special day.</p>
  </header>

  @if($items->count() > 0)
    <div class="vsf-anniv-grid">
      @foreach($items as $u)
        <article class="acard">
          <div class="acard-bg"></div>
          <div class="acard-inner">
            <div class="avatar-wrap">
              @php $img = $u['profile_image'] ? asset('backend/uploads/members/'.$u['profile_image']) : asset('backend/uploads/user.jpg'); @endphp
              <img src="{{ $img }}" alt="{{ $u['name'] }}" loading="lazy">
            </div>
            <h3 class="name">{{ $u['name'] }}</h3>
            <div class="sub">in {{ $u['days'] }} day{{ $u['days'] == 1 ? '' : 's' }} • {{ \Carbon\Carbon::parse($u['date'])->format('d M') }}</div>
          </div>
        </article>
      @endforeach
    </div>
  @else
    <div class="vsf-anniv-empty">No upcoming anniversaries found.</div>
  @endif
</section>

<style>
.vsf-anniv{ padding: 18px 16px 32px; }
.vsf-anniv-grid{
  display:grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 240px));
  gap:16px;
  justify-content:center;
  max-width: 1200px;
  margin: 0 auto;
}
.vsf-anniv-empty{ text-align:center; color:#6b7280; font-weight:600; padding: 8px 0 16px; }
.acard{ position:relative; border-radius:16px; overflow:hidden; box-shadow:0 10px 28px rgba(0,0,0,.08); background:#fff; }
.acard-bg{ position:absolute; inset:0; background: linear-gradient(135deg, #ffe4f1 0%, #e6f2ff 100%); }
.acard-inner{ position:relative; padding:16px; text-align:center; }
.avatar-wrap{ width:96px; height:96px; border-radius:50%; overflow:hidden; margin: 6px auto 10px; border:4px solid #fff; box-shadow:0 6px 18px rgba(0,0,0,.12); }
.avatar-wrap img{ width:100%; height:100%; object-fit:cover; display:block; }
.name{ font-size:1.05rem; margin:4px 0 2px; color:#111827; font-weight:800; }
.sub{ color:#6b7280; font-weight:600; }
@media (max-width: 480px){ .avatar-wrap{ width:80px; height:80px;} }
</style>
