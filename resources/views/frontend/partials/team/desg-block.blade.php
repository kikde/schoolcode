<style>
.desg-section{padding:30px 0}
.desg-section .desg-title{display:flex;align-items:center;justify-content:space-between;margin-bottom:12px}
.desg-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:16px}
@media(max-width:992px){.desg-grid{grid-template-columns:repeat(3,minmax(0,1fr))}}
@media(max-width:768px){.desg-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
.desg-card{border:1px solid #eef1f6;border-radius:10px;overflow:hidden;background:#fff;box-shadow:0 1px 2px rgba(16,24,40,.04)}
.desg-photo{aspect-ratio:1/1;background:#f3f4f6;background-size:cover;background-position:center}
.desg-meta{padding:10px 12px}
.desg-name{font-size:16px;font-weight:600;margin:0}
.desg-role{font-size:13px;color:#6b7280}
</style>

@php($items = $items ?? collect())
<section class="desg-section">
  <div class="auto-container">
    <div class="desg-title">
      <h3 style="margin:0;color:#230c74;font-weight:700;">{{ $title ?? 'Team' }}</h3>
      @if(!empty($moreUrl))
        <a href="{{ $moreUrl }}" class="btn btn-sm btn-outline-primary">View All</a>
      @endif
    </div>
    @if($items->count())
      <div class="desg-grid">
        @foreach($items as $m)
          <div class="desg-card">
            <div class="desg-photo" style="background-image:url('{{ $m->profile_image ? asset('backend/uploads/'.$m->profile_image) : asset('frontend/assets/images/team/team-1.jpg') }}')"></div>
            <div class="desg-meta">
              <p class="desg-name">{{ $m->name }}</p>
              <div class="desg-role">{{ $m->desg }}</div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <div class="text-center text-muted" style="padding:16px 0;">No members found.</div>
    @endif
  </div>
  </section>
 
