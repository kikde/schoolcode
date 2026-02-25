

<main class="page">
      <section class="contact-banner" aria-label="Contact us banner">
        <div class="container contact-banner__inner">
          <h1 class="contact-banner__title">Contact Us</h1>
          <nav class="contact-banner__crumbs" aria-label="Breadcrumb">
            <a href="../index.html">Home</a>
            <span class="contact-banner__sep" aria-hidden="true">&raquo;</span>
            <span class="contact-banner__current" aria-current="page">Contact Us</span>
          </nav>
        </div>
      </section>

      <span class="contact-anchor" id="location" aria-hidden="true"></span>
      <span class="contact-anchor" id="phone-email" aria-hidden="true"></span>
      <span class="contact-anchor" id="inquiry" aria-hidden="true"></span>
      <span class="contact-anchor" id="emergency" aria-hidden="true"></span>

      <section class="contact-simple" aria-label="Contact inquiry form">
        <div class="container contact-simple__inner">
          <aside class="contact-simple__left" aria-label="Contact numbers">
            <div class="contact-simple__kicker">CONTACT US</div>
            <ul class="contact-simple__list">
              <li class="contact-simple__item">
                <span class="contact-simple__icon" aria-hidden="true">
                  <i class="fa-solid fa-user-tie"></i>
                </span>
                <div class="contact-simple__meta">
                  <div class="contact-simple__label">Principal</div>
                  <a class="contact-simple__value" href="tel:+919918359025">+91-9918359025</a>
                </div>
              </li>

              <li class="contact-simple__item">
                <span class="contact-simple__icon" aria-hidden="true">
                  <i class="fa-solid fa-user-group"></i>
                </span>
                <div class="contact-simple__meta">
                  <div class="contact-simple__label">Alumni Student Query</div>
                  <a class="contact-simple__value" href="tel:+918400244949">+91-8400244949</a>
                </div>
              </li>

              <li class="contact-simple__item">
                <span class="contact-simple__icon" aria-hidden="true">
                  <i class="fa-solid fa-heart-pulse"></i>
                </span>
                <div class="contact-simple__meta">
                  <div class="contact-simple__label">Student Support</div>
                  <a class="contact-simple__value" href="tel:+919936233951">+91-9936233951</a>
                </div>
              </li>

              <li class="contact-simple__item">
                <span class="contact-simple__icon" aria-hidden="true">
                  <i class="fa-solid fa-graduation-cap"></i>
                </span>
                <div class="contact-simple__meta">
                  <div class="contact-simple__label">Admission</div>
                  <a class="contact-simple__value" href="tel:+919915101234">+91-99151-01234</a>
                </div>
              </li>

              <li class="contact-simple__item">
                <span class="contact-simple__icon" aria-hidden="true">
                  <i class="fa-solid fa-briefcase"></i>
                </span>
                <div class="contact-simple__meta">
                  <div class="contact-simple__label">Career Opportunities</div>
                  <a class="contact-simple__value" href="tel:+919621877659">+91-9621877659</a>
                </div>
              </li>
            </ul>
          </aside>

          <div class="contact-simple__right">
            <div class="contact-simple__kicker">HAVE A QUESTION?</div>
            <h2 class="contact-simple__title">Fill Out the Form for General Queries or Feedback</h2>

            <form class="contact-simple__form" method="post" action="{{url('/send-mail')}}" data-demo-form>
                   @csrf
              <div class="contact-simple__row">
                <div class="contact-simple__field">
                  <label class="contact-simple__flabel" for="c-name">Full Name</label>
                  <input class="contact-simple__input" id="c-name" name="name" type="text" autocomplete="name" />
                </div>
                <div class="contact-simple__field">
                  <label class="contact-simple__flabel" for="c-email">Email Address</label>
                  <input class="contact-simple__input" id="c-email" name="email" type="email" autocomplete="email" />
                </div>
              </div>

              <div class="contact-simple__row">
                <div class="contact-simple__field">
                  <label class="contact-simple__flabel" for="c-phone">Phone Number</label>
                  <input class="contact-simple__input" id="c-phone" name="phone" type="tel" autocomplete="tel" />
                </div>
                <div class="contact-simple__field">
                  <label class="contact-simple__flabel" for="c-subject">Subject</label>
                  <input class="contact-simple__input" id="c-subject" name="subject" type="text" />
                </div>
              </div>

              <div class="contact-simple__field contact-simple__field--full">
                <label class="contact-simple__flabel" for="c-message">Your Message</label>
                <textarea
                  class="contact-simple__input contact-simple__textarea"
                  id="c-message"
                  name="message"
                  rows="7"
                ></textarea>
              </div>

              <div class="contact-simple__captcha" aria-label="reCAPTCHA placeholder">
                <div class="contact-simple__captchaLeft">
                  <span class="contact-simple__box" aria-hidden="true"></span>
                  <span>I'm not a robot</span>
                </div>
                <div class="contact-simple__captchaRight" aria-hidden="true">
                  <div class="contact-simple__captchaBrand">reCAPTCHA</div>
                  <div class="contact-simple__captchaMeta">Privacy &middot; Terms</div>
                </div>
              </div>

              <button class="contact-simple__submit" type="submit">SUBMIT INQUIRY</button>
            </form>
          </div>
        </div>
      </section>

      <section class="contact-mapstrip" aria-label="Campus map">
        <div class="container contact-mapstrip__inner">
          <div class="contact-mapstrip__frame">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7310.971940464816!2d72.93813414488372!3d23.62276119485529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395db974f9b87997%3A0xb9755180e2423c17!2sHimatnagar%20sabarkantha!5e0!3m2!1sen!2sin!4v1763709685119!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>

      <div class="home-social" aria-label="Social links">
        <a class="home-social__btn home-social__btn--fb" href="{{$setting->facebook_url}}" aria-label="Facebook">
          <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--ig" href="{{$setting->insta_url}}" aria-label="Instagram">
          <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--yt" href="{{$setting->youtube}}" aria-label="YouTube">
          <i class="fa-brands fa-youtube" aria-hidden="true"></i>
        </a>
        <a class="home-social__btn home-social__btn--wa" href="#" aria-label="WhatsApp">
          <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        </a>
      </div>

      <a class="home-top" href="#top" aria-label="Back to top">
        <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
      </a>
    </main>