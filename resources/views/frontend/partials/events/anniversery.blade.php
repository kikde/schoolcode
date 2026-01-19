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
          <div class="abunting" aria-hidden="true"></div>
          <div class="aballoon l" aria-hidden="true"></div>
          <div class="aballoon r" aria-hidden="true"></div>
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
.acard-bg{ position:absolute; inset:0; background:
  radial-gradient(7px 7px at 16% 28%, rgba(255, 182, 193,.35) 40%, transparent 41%),
  radial-gradient(6px 6px at 86% 22%, rgba(255, 215,   0,.32) 40%, transparent 41%),
  radial-gradient(6px 6px at 62% 78%, rgba(173, 216, 230,.35) 40%, transparent 41%),
  radial-gradient(5px 5px at 32% 88%, rgba(221, 160, 221,.33) 40%, transparent 41%),
  linear-gradient(180deg, #fff 0%, #fff 36%, rgba(255,255,255,.9) 36%),
  linear-gradient(135deg, #ffe4f1 0%, #e6f2ff 100%);
}
.abunting{ position:absolute; left:0; right:0; top:0; height:56px; background-repeat:no-repeat; background-position:top center; background-size:cover; opacity:.95;
  background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 60' preserveAspectRatio='none'><path d='M0,10 Q100,30 200,10 T600,10' stroke='%23e18c25' stroke-width='2' fill='none'/><polygon points='50,12 70,48 30,48' fill='%23ff6a00'/><polygon points='150,12 170,48 130,48' fill='%237cc89a'/><polygon points='250,12 270,48 230,48' fill='%23ef6f91'/><polygon points='350,12 370,48 330,48' fill='%237cc89a'/><polygon points='450,12 470,48 430,48' fill='%23ff6a00'/><polygon points='550,12 570,48 530,48' fill='%23ef6f91'/></svg>"); }
.aballoon{ position:absolute; width:54px; height:70px; border-radius:50%/60% 60% 40% 40%; background:#f9a8d4; box-shadow: inset -10px -12px 0 rgba(0,0,0,.06); opacity:.9; }
.aballoon::after{ content:''; position:absolute; left:50%; top:68px; width:2px; height:28px; background:rgba(0,0,0,.15); transform:translateX(-50%); }
.aballoon.l{ left:8px; top:12px; background:#f9a8d4; }
.aballoon.r{ right:10px; top:16px; background:#86efac; }
.acard-inner{ position:relative; padding:16px; text-align:center; }
.avatar-wrap{ width:96px; height:96px; border-radius:50%; overflow:hidden; margin: 6px auto 10px; border:4px solid #fff; box-shadow:0 6px 18px rgba(0,0,0,.12); }
.avatar-wrap img{ width:100%; height:100%; object-fit:cover; display:block; }
.name{ font-size:1.05rem; margin:4px 0 2px; color:#111827; font-weight:800; }
.sub{ color:#6b7280; font-weight:600; }
@media (max-width: 480px){ .avatar-wrap{ width:80px; height:80px;} }
</style>
