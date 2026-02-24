@extends('layouts.master')

@section('content')

  <main class="page">
      <section class="page-hero" aria-label="Phone and email">
        <div class="container page-hero__inner">
          <div class="page-hero__kicker">CONTACT US</div>
          <h1 class="page-hero__title">Phone &amp; Email</h1>
          <p class="page-hero__sub">Reach the right department quickly.</p>
        </div>
      </section>

      <nav class="contact-tabs" aria-label="Contact pages">
        <div class="container contact-tabs__inner">
          <a class="contact-tab" href="{{ route('contact.location') }}">Location</a>
          <a class="contact-tab is-active" href="{{ route('contact') }}#phone-email">Phone &amp; Email</a>
          <a class="contact-tab" href="{{ route('contact.enquiry') }}">Inquiry Form</a>
         
        </div>
      </nav>

      <section class="contact-section" aria-label="Phone and email details">
        <div class="container">
          <div class="contact-grid">
            <article class="contact-card">
              <div class="contact-card__icon" aria-hidden="true">
                <i class="fa-solid fa-phone"></i>
              </div>
              <h2 class="contact-card__title">Phone</h2>
              <ul class="contact-list" aria-label="Phone contacts">
                <li>
                  <span class="contact-list__label">Principal</span>
                  <a class="contact-list__value" href="tel:+911907267183">+91-1907-267183</a>
                </li>
                <li>
                  <span class="contact-list__label">Alumni Student Query</span>
                  <a class="contact-list__value" href="tel:+911907267163">+91-1907-267163</a>
                </li>
                <li>
                  <span class="contact-list__label">Patient Care</span>
                  <a class="contact-list__value" href="tel:+911907267165">+91-1907-267165</a>
                </li>
                <li>
                  <span class="contact-list__label">Admission</span>
                  <a class="contact-list__value" href="tel:+919915101234">+91-99151-01234</a>
                </li>
                <li>
                  <span class="contact-list__label">Career Opportunities</span>
                  <a class="contact-list__value" href="tel:+911907267163">+91-1907-267163</a>
                </li>
              </ul>
            </article>

            <article class="contact-card">
              <div class="contact-card__icon" aria-hidden="true">
                <i class="fa-regular fa-envelope"></i>
              </div>
              <h2 class="contact-card__title">Email</h2>
              <ul class="contact-list" aria-label="Email contacts">
                <li>
                  <span class="contact-list__label">Admissions</span>
                  <a class="contact-list__value" href="mailto:admission@hdc.ac.in">admission@mamtaedu.in</a>
                </li>
                <li>
                  <span class="contact-list__label">General</span>
                  <a class="contact-list__value" href="mailto:info@hdc.ac.in">info@mamtaedu.in</a>
                </li>
              </ul>

              <div class="contact-note" role="note">
                If you do not know where to start, email admissions  the team will guide you to the correct department.
              </div>
            </article>
          </div>
        </div>
      </section>

      <a class="home-top" href="#top" aria-label="Back to top">
        <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
      </a>
    </main>



        <!-- Page Title -->
        <!-- <section class="page-title contact-page style-two centred" style="background-image: url({{asset('frontend/assets/images/background/contact.png')}});">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Contact</h1>
                    </div>
                   
                </div>
            </div>
        </section> -->
        <!-- End Page Title -->


        <!-- contact-info-section -->
        <!-- <section class="contact-info-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-location"></i></div>
                                    <h6>Location</h6>
                                    <p>{{$setting->address}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                                    <h6>Quick Contact</h6>
                                    <p> Phone : <a href="tel:{!!$setting->phone!!}">{!!$setting->phone!!}</a><br />
                                        Email : <a href="mailto:{{$setting->site_email}}">{{$setting->site_email}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-circular-clock"></i></div>
                                    <h6>Off. Hours</h6>
                                    <p>Mon - Sat : 9.30 am to 6.30 pm Sunday Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- contact-info-section -->


        <!-- contact-section -->
        <!-- <section class="contact-section sec-pad">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h6>Send Your Message</h6>
                    <h2>Drop us Message for any Query</h2>
                    <p>Please feel free to get in touch using the form below. We'd love to hear your <br />thoughts & answer any questions you may have!</p>
                </div>
                <div class="form-inner">
                    <form method="post" action="{{url('/send-mail')}}" method="POST" id="contact-form" class="default-form"> 
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="Full Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="ogname" placeholder="Organization Name" >
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="mobile" required="" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                <input type="text" name="subject" required="" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn-three thm-btn" type="submit" name="submit-form">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section> -->
        <!-- contact-section end -->


        <!-- google-map-section -->
        <!-- <section class="google-map-section">
            <div class="map-inner">
                <div 
                    class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7310.971940464816!2d72.93813414488372!3d23.62276119485529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395db974f9b87997%3A0xb9755180e2423c17!2sHimatnagar%20sabarkantha!5e0!3m2!1sen!2sin!4v1763709685119!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section> -->
        <!-- google-map-section end -->


@endsection