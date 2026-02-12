<footer class="site-footer" aria-label="Footer">
      <div class="container footer__inner">
        <div class="footer__grid">
          <div class="footer__col">
            <div class="footer__brandtop">
              <img class="footer__logo" src="{{ !empty($setting->site_logo) ? asset('backend/uploads/'.$setting->site_logo) : asset('backend/icons/'.$setting->favicon_icon) }}" alt="Himachal Dental College logo" />
              <div>
                <div class="footer__name">
                  {{ $setting->title }}
                </div>
                <div class="footer__tagline">
                  {{ $setting->meta_author ?? $setting->address }}
                </div>
              </div>
            </div>

            <p class="footer__desc">
              With experienced faculty, modern facilities, and a focus on hands-on learning, we prepare future dental
              professionals to serve with skill and compassion.
            </p>

                        <div class="footer__map" aria-label="Campus location map">
              @php $map = $setting->map_iframe ?? ''; @endphp
              @if(!empty($map))
                @if(stripos($map, '<iframe') !== false)
                  {!! $map !!}
                @else
                  <iframe title="Location map" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="{{ $map }}"></iframe>
                @endif
              @endif
            </div>
          </div>

          <div class="footer__col">

        <div class="footer__bottom" aria-label="Footer bottom">
          <div class="footer__line" aria-hidden="true"></div>
          <div class="footer__social" aria-label="Footer social links">
            <a class="footer__sbtn footer__sbtn--fb" href="{{ $setting->facebook_url ?? '#' }}" aria-label="Facebook">
              <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
            </a>
            <a class="footer__sbtn footer__sbtn--wa" href="{{ $setting->phone ? ('https://wa.me/'.preg_replace('/[^0-9]/','', $setting->phone)) : '#' }}" aria-label="WhatsApp">
              <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            </a>
            <a class="footer__sbtn footer__sbtn--in" href="{{ $setting->linkdin_url ?? '#' }}" aria-label="LinkedIn">
              <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
            </a>
            <a class="footer__sbtn footer__sbtn--yt" href="{{ $setting->youtube ?? '#' }}" aria-label="YouTube">
              <i class="fa-brands fa-youtube" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>

