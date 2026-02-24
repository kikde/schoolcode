<main class="page">
      <section class="page-hero" aria-label="Inquiry form">
        <div class="container page-hero__inner">
          <div class="page-hero__kicker">CONTACT US</div>
          <h1 class="page-hero__title">Inquiry Form</h1>
          <p class="page-hero__sub">Send your question and weâ€™ll get back to you.</p>
        </div>
      </section>

      <nav class="contact-tabs" aria-label="Contact pages">
        <div class="container contact-tabs__inner">
          <a class="contact-tab" href="contact/location.html#location">Location</a>
          <a class="contact-tab" href="contact/location.html#phone-email">Phone &amp; Email</a>
          <a class="contact-tab is-active" href="contact/location.html#inquiry">Inquiry Form</a>
          <a class="contact-tab" href="contact/location.html#emergency">Emergency Form</a>
        </div>
      </nav>

      <section class="contact-section" aria-label="Inquiry form section">
        <div class="container">
          <div class="contact-grid">
            <article class="contact-card">
              <div class="contact-card__icon" aria-hidden="true">
                <i class="fa-solid fa-circle-info"></i>
              </div>
              <h2 class="contact-card__title">Before you submit</h2>
              <ul class="contact-bullets">
                <li>Use a valid phone number so we can contact you quickly.</li>
                <li>For urgent issues, use the Emergency Form.</li>
                <li>We typically respond during working hours.</li>
              </ul>
            </article>

            <article class="form-card" aria-label="Inquiry form card">
              <h2 class="form-card__title">Inquiry Details</h2>
              <form class="form" data-demo-form>
                <div class="form-row">
                  <div class="field">
                    <label class="field__label" for="inq-name">Full Name</label>
                    <input class="field__control" id="inq-name" name="name" type="text" autocomplete="name" required />
                  </div>
                  <div class="field">
                    <label class="field__label" for="inq-phone">Phone</label>
                    <input
                      class="field__control"
                      id="inq-phone"
                      name="phone"
                      type="tel"
                      autocomplete="tel"
                      required
                    />
                  </div>
                </div>

                <div class="form-row">
                  <div class="field">
                    <label class="field__label" for="inq-email">Email</label>
                    <input
                      class="field__control"
                      id="inq-email"
                      name="email"
                      type="email"
                      autocomplete="email"
                      required
                    />
                  </div>
                  <div class="field">
                    <label class="field__label" for="inq-topic">Topic</label>
                    <select class="field__control" id="inq-topic" name="topic" required>
                      <option value="" selected disabled>Select</option>
                      <option>Admissions</option>
                      <option>Patient Care</option>
                      <option>Courses</option>
                      <option>Fees</option>
                      <option>Other</option>
                    </select>
                  </div>
                </div>

                <div class="field">
                  <label class="field__label" for="inq-message">Message</label>
                  <textarea class="field__control" id="inq-message" name="message" rows="6" required></textarea>
                </div>

                <label class="check">
                  <input class="check__box" type="checkbox" required />
                  <span class="check__text">I agree to be contacted regarding this inquiry.</span>
                </label>

                <button class="form-btn" type="submit">
                  <span>Submit Inquiry</span>
                  <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                </button>
              </form>
            </article>
          </div>
        </div>
      </section>

      <a class="home-top" href="#top" aria-label="Back to top">
        <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
      </a>
    </main>