<header class="site-header">
      <div class="topbar">
        <div class="container topbar-inner">
          <div class="topbar-left">
            <span class="follow-label">Follow Us:</span>
            <a class="social social-fb" href="{{ $setting->facebook_url}}" aria-label="Facebook">
              <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
            </a>
            <a class="social social-ig" href="{{ $setting->insta_url}}" aria-label="Instagram">
              <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
            <a class="social social-yt" href="{{ $setting->youtube}}" aria-label="YouTube">
              <i class="fa-brands fa-youtube" aria-hidden="true"></i>
            </a>
            <a class="social social-wa" href="https://wa.me/{{ $setting->phone }}?text={{ urlencode('Hello Team,👋\nThank you for your support!') }}" aria-label="WhatsApp">
              <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            </a>
          </div>

          <div class="topbar-right">
            <div class="top-item">
              <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
              <span>{{ $setting->address }}</span>
            </div>
            <span class="top-divider" aria-hidden="true"></span>
            <a class="top-item" href="mailto:{{ $setting->site_email }}">
              <i class="fa-regular fa-envelope" aria-hidden="true"></i>
              <span>{{ $setting->site_email }}</span>
            </a>
            <span class="top-divider" aria-hidden="true"></span>
            <a class="top-item" href="tel:{{ preg_replace("/[^0-9+]/","", $setting->phone ?? "") }}">
              <i class="fa-solid fa-phone" aria-hidden="true"></i>
              <span>{{ $setting->phone }}</span>
            </a>
          </div>
        </div>
      </div>

      <div class="brandbar">
        <div class="container brandbar-inner">
          <div class="brand">
            <img class="brand-logo" src="{{ !empty($setting->site_logo) ? asset('backend/uploads/'.$setting->site_logo) : asset('backend/icons/'.$setting->favicon_icon) }}" alt="{{$setting->title}} logo" />
            <div class="brand-text">
              <div class="brand-title">
                {{ $setting->title }}
              </div>
              <div class="brand-subtitle">
                {{ $setting->meta_keywords ?? $setting->address }}
              </div>
            </div>
          </div>

          <a class="apply-btn" href="{{url('/member-registration')}}">
            <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i>
            <span>APPLY NOW</span>
          </a>

          <button class="nav-toggle" type="button" data-nav-toggle aria-label="Toggle menu">
            <i class="fa-solid fa-bars" aria-hidden="true"></i>
          </button>
        </div>
      </div>

      <div class="navwrap" data-nav>
        <div class="container nav-inner">
          <nav class="mainnav" aria-label="Primary">
            <ul class="navlist">
              <li class="navitem has-dropdown">
                
                <a href="{{ route('about') }}" class="navlink">
                  About Us <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="{{ route('about') }}">Overview</a></li>
                  <li><a href="{{ route('about.mission') }}">Mission &amp; Vision</a></li>
                  <li class="has-sub">
                    <a class="dropdown__item dropdown__item--arrow" href="#leadership" data-sub-toggle>
                      <span>Leadership</span>
                      <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
                    </a>
                    <ul class="dropdown-sub" aria-label="Leadership">
                      <li><a href="{{ route('about.leadership') }}">Dr. Sonelal Patel, Director</a></li>
                      <li><a href="{{ route('about.principal') }}">Dr. Sanjay Kumar, Principal</a></li>
                    
                    </ul>
                  </li>
                  <li><a href="{{ route('about') }}">Why Us</a></li>
                  <li><a href="{{url('/bank-details')}}">Bank Details</a></li>
                </ul>
              </li>
              <li class="navitem has-dropdown">
                <a href="#" class="navlink">
                  Academics <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="#">Departments</a></li>
                  <li><a href="#">Faculty</a></li>
                  <li><a href="#">Curriculum</a></li>
                </ul>
              </li>
              <li class="navitem has-dropdown">
                <a href="#" class="navlink">
                  Admissions <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="#">How to Apply</a></li>
                  <li><a href="#">Eligibility</a></li>
                  <li><a href="#">Fee Structure</a></li>
                </ul>
              </li>
              <li class="navitem has-dropdown">
                <a href="#" class="navlink">
                  Student Life <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="#">Campus</a></li>
                  <li><a href="#">Hostel</a></li>
                  <li><a href="#">Clubs</a></li>
                </ul>
              </li>
              <!-- <li class="navitem has-dropdown">
                <a href="#" class="navlink">
                  Patient Care <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="#">OPD</a></li>
                  <li><a href="#">Specialties</a></li>
                  <li><a href="#">Appointments</a></li>
                </ul>
              </li> -->
              <li class="navitem has-dropdown">
                <a href="#" class="navlink">
                  Institutional Committees <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="#">IQAC</a></li>
                  <li><a href="#">Anti-Ragging</a></li>
                  <li><a href="#">Grievance</a></li>
                </ul>
              </li>
              <li class="navitem has-dropdown">
                <a href="#" class="navlink">
                  Resources <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="#">Library</a></li>
                  <li><a href="#">Downloads</a></li>
                  <li><a href="#">Forms</a></li>
                </ul>
              </li>
              <li class="navitem has-dropdown">
                <a href="#" class="navlink">
                  Alumni <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="#">Association</a></li>
                  <li><a href="{{ url('/success-story') }}">Stories</a></li>
                   <li><a href="{{ url('/photo-gallery') }}">Photo Gallery</a></li>
                   <li><a href="{{ url('/video-gallery') }}">Video Gallery</a></li>
                </ul>
              </li>
              <li class="navitem has-dropdown">
                <a href="#" class="navlink">
                  Contact Us <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown">
                  <li><a href="{{ route('contact') }}">Contact Details</a></li>
                  <li><a href="{{ route('contact.enquiry') }}">Enquiry</a></li>
                  <li><a href="{{ route('contact.location') }}">Map</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>


