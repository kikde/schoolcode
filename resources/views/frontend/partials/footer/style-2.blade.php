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
            <h3 class="footer__h">Quick Links</h3>
            <ul class="footer__list">
              <li><a href="{{ url('/about') }}">About Us</a></li>
              <li><a href="{{url('/photo-gallery')}}">Campus Facilities</a></li>
              <li><a href="{{ url('/event-all') }}">Events</a></li>
              <li><a href="{{ url('/faq') }}">FAQ's</a></li>
              <li><a href="#">Blogs</a></li>
              <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="footer__col">
            <h3 class="footer__h">Departments</h3>
            <ul class="footer__list">
              <li><a href="#">Periodontology</a></li>
              <li><a href="#">Prosthodontics</a></li>
              <li><a href="#">Pedodontics &amp; Preventive Dentistry</a></li>
              <li><a href="#">Oral Medicine &amp; Radiology</a></li>
              <li><a href="#">Public Health Dentistry</a></li>
              <li><a href="#">Oral Pathology &amp; Microbiology</a></li>
            </ul>
          </div>

          <div class="footer__col">
            <h3 class="footer__h">Contact Us</h3>

            <div class="footer__phoneLead" aria-hidden="true">
              <i class="fa-solid fa-phone"></i>
            </div>

            <div class="footer__phones" aria-label="Phone contacts">
              <div class="footer__phone">
                <div class="footer__plabel">Principal</div>
                <a class="footer__pvalue" href="tel:+911907267183">+91-9918359025</a>
              </div>
              <div class="footer__phone">
                <div class="footer__plabel">Alumni Student Query</div>
                <a class="footer__pvalue" href="tel:+911907267163">+91-8400244949</a>
              </div>
              <div class="footer__phone">
                <div class="footer__plabel">Student Support</div>
                <a class="footer__pvalue" href="tel:+911907267165">+91-9936233951</a>
              </div>
              <div class="footer__phone">
                <div class="footer__plabel">Admission</div>
                <a class="footer__pvalue" href="tel:+919915101234">+91-99151-01234</a>
              </div>
              <div class="footer__phone">
                <div class="footer__plabel">Career Opportunities</div>
                <a class="footer__pvalue" href="tel:+911907267163">+91-9621877659</a>
              </div>
            </div>

            <div class="footer__meta" aria-label="Address and email">
              <div class="footer__metaItem">
                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                <span>{{ $setting->address }}</span>
              </div>
              <a class="footer__metaItem" href="mailto:admission@hdc.ac.in">
                <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                <span>{{ $setting->site_email }}</span>
              </a>
            </div>
          </div>
        </div>



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

