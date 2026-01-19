@php
  $items = collect($upcomingBirthdays ?? [])->take(12);
@endphp
@if($items->count() > 0)
<section class="vsf-bdays section-padding">
  <header class="vsf-evt2-header">
    <h6>Members</h6>
    <h2>Upcoming Birthdays</h2>
    <p>Warm wishes to our community celebrating soon.</p>
  </header>

  <div class="vsf-bday-grid">
    @foreach($items as $u)
      <article class="bcard">
        <div class="bcard-bg"></div>
        <div class="props" aria-hidden="true"><span>🎈</span><span>🎉</span></div>
        <div class="bcard-inner">
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
</section>

<style>
.vsf-bdays{ padding: 30px 16px; }
.vsf-bday-grid{
  display:grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 240px));
  gap:16px;
  justify-content:center; /* center tracks on wide screens */
  max-width: 1200px;
  margin: 0 auto;
}
.bcard{ position:relative; border-radius:16px; overflow:hidden; box-shadow:0 10px 28px rgba(0,0,0,.08); background:#fff; border:1px solid rgba(0,0,0,.04); transition:transform .18s ease, box-shadow .18s ease; }
.bcard:hover{ transform: translateY(-2px); box-shadow:0 14px 36px rgba(0,0,0,.12); }
.bcard-bg{
  position:absolute; inset:0;
  background:
    radial-gradient(12px 12px at 20% 30%, rgba(255, 182, 193,.30) 20%, transparent 21%),
    radial-gradient(10px 10px at 78% 22%, rgba(255, 215,   0,.28) 20%, transparent 21%),
    radial-gradient(10px 10px at 60% 72%, rgba(173, 216, 230,.30) 20%, transparent 21%),
    radial-gradient( 8px  8px at 34% 84%, rgba(221, 160, 221,.28) 20%, transparent 21%),
    radial-gradient(120% 120% at 0% 0%, #ffe8b3 0%, #ffd0d0 50%, #ffffff 100%);
  filter:saturate(1.05);
}
.bcard .props{ position:absolute; top:8px; right:10px; display:flex; gap:6px; font-size:18px; opacity:.9; transform: rotate(-6deg); }
.bcard-inner{ position:relative; padding:16px; text-align:center; }
.avatar-wrap{ width:96px; height:96px; border-radius:50%; overflow:hidden; margin: 6px auto 10px; border:4px solid #fff; box-shadow:0 6px 18px rgba(0,0,0,.12); }
.avatar-wrap img{ width:100%; height:100%; object-fit:cover; display:block; }
.name{ font-size:1.05rem; margin:4px 0 2px; color:#111827; font-weight:800; }
.sub{ color:#6b7280; font-weight:600; }
@media (max-width: 480px){ .avatar-wrap{ width:80px; height:80px;} }
</style>
@endif
