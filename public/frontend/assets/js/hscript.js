(() => {
  const getSiteRoot = () => {
    const currentUrl = new URL(window.location.href);
    const pathname = currentUrl.pathname || "";
    const normalized = pathname.toLowerCase();
    const pagesSegment = "/pages/";
    const pagesIdx = normalized.lastIndexOf(pagesSegment);

    const rootPath =
      pagesIdx !== -1 ? pathname.slice(0, pagesIdx + 1) : pathname.slice(0, Math.max(0, pathname.lastIndexOf("/") + 1));
    const rootUrl = new URL(rootPath, currentUrl);
    const makeUrl = (p) => new URL(p, rootUrl).href;
    return { currentUrl, rootUrl, makeUrl };
  };

  const normalizePrimaryNavbar = () => {
    const navList = document.querySelector(".mainnav .navlist");
    if (!navList) return;

    const { makeUrl } = getSiteRoot();
    const u = (p) => makeUrl(p);

    navList.innerHTML = `
      <li class="navitem has-dropdown">
        <a href="${u("pages/about-us.html")}" class="navlink">
          About Us <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
        </a>
        <ul class="dropdown">
          <li><a href="${u("pages/our-history.html")}">Our History</a></li>
          <li><a href="${u("pages/mission-vision.html")}">Mission &amp; Vision</a></li>
          <li class="has-sub">
            <a class="dropdown__item dropdown__item--arrow" href="${u("pages/about-us.html#leadership")}" data-sub-toggle>
              <span>Leadership</span>
              <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
            </a>
            <ul class="dropdown-sub" aria-label="Leadership">
              <li><a href="${u("pages/leadership-anil-singla.html")}">Dr. Anil Singla, Director</a></li>
              <li><a href="${u("pages/leadership-vikas-jindal.html")}">Dr. Vikas Jindal, Director</a></li>
              <li><a href="${u("pages/leadership-baljeet-singh.html")}">Dr. Baljeet Singh, Principal</a></li>
            </ul>
          </li>
          <li><a href="${u("pages/infrastructure.html")}">Infrastructure</a></li>
          <li><a href="${u("pages/affiliations-accreditations.html")}">Affiliations &amp; Accreditation</a></li>
          <li class="has-sub">
            <a class="dropdown__item dropdown__item--arrow" href="${u("pages/about-us.html#nirf")}" data-sub-toggle>
              <span>NIRF</span>
              <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
            </a>
            <ul class="dropdown-sub" aria-label="NIRF">
              <li><a href="${u("pages/nirf-dental.html")}">Dental</a></li>
              <li><a href="${u("pages/nirf-overall.html")}">Overall</a></li>
            </ul>
          </li>
          <li><a href="${u("pages/why-us.html")}">Why Us</a></li>
          <li><a href="${u("pages/bank-details.html")}">Bank Details</a></li>
          <li><a href="${u("pages/how-to-reach-us.html")}">How To Reach Us</a></li>
        </ul>
      </li>

      <li class="navitem navitem--academics has-dropdown">
        <a href="${u("pages/academics.html")}" class="navlink">
          Academics <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
        </a>
        <ul class="dropdown">
          <li class="has-sub">
            <a class="dropdown__item dropdown__item--arrow" href="${u("pages/academics.html#programs")}" data-sub-toggle>
              <span>Programs Offered</span>
              <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
            </a>
            <ul class="dropdown-sub" aria-label="Programs offered">
              <li class="has-sub">
                <a class="dropdown__item dropdown__item--arrow" href="${u("pages/academics.html#bds")}" data-sub-toggle>
                  <span>BDS</span>
                  <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
                </a>
                <ul class="dropdown-sub" aria-label="BDS">
                  <li><a class="no-arrow" href="${u("pages/bds-first-year.html")}">First Professional</a></li>
                  <li><a class="no-arrow" href="${u("pages/bds-second-year.html")}">Second Professional</a></li>
                  <li><a class="no-arrow" href="${u("pages/bds-third-year.html")}">Third Professional</a></li>
                  <li><a class="no-arrow" href="${u("pages/bds-fourth-year.html")}">Fourth Professional</a></li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="dropdown__item dropdown__item--arrow" href="${u("pages/academics.html#mds")}" data-sub-toggle>
                  <span>MDS</span>
                  <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
                </a>
                <ul class="dropdown-sub" aria-label="MDS">
                  <li>
                    <a class="no-arrow" href="${u("pages/mds-conservative-dentistry-endodontics.html")}">
                      Conservative Dentistry and Endodontics
                    </a>
                  </li>
                  <li>
                    <a class="no-arrow" href="${u("pages/mds-orthodontics-dental-orthopaedics.html")}">
                      Orthodontics and Dental Orthopaedics
                    </a>
                  </li>
                  <li>
                    <a class="no-arrow" href="${u("pages/mds-prosthodontics-crown-bridge.html")}">
                      Prosthodontics And Crown and Bridge
                    </a>
                  </li>
                  <li>
                    <a class="no-arrow" href="${u("pages/mds-periodontology-oral-implantology.html")}">
                      Periodontology and Oral Implantology
                    </a>
                  </li>
                  <li>
                    <a class="no-arrow" href="${u("pages/mds-paedodontics-preventive-dentistry.html")}">
                      Paedodontics and Preventive Dentistry
                    </a>
                  </li>
                </ul>
              </li>
              <li><a href="${u("pages/diploma-courses.html")}">Diploma Courses</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a class="dropdown__item dropdown__item--arrow" href="${u("pages/academics.html#departments")}" data-sub-toggle>
              <span>Departments</span>
              <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
            </a>
            <ul class="dropdown-sub dropdown-sub--departments" aria-label="Departments">
              <li><a class="no-arrow" href="${u("pages/mds-conservative-dentistry-endodontics.html")}">Conservative Dentistry and Endodontics</a></li>
              <li><a class="no-arrow" href="${u("pages/mds-orthodontics-dental-orthopaedics.html")}">Orthodontics and Dental Orthopaedics</a></li>
              <li><a class="no-arrow" href="${u("pages/mds-prosthodontics-crown-bridge.html")}">Prosthodontics And Crown and Bridge</a></li>
              <li><a class="no-arrow" href="${u("pages/mds-periodontology-oral-implantology.html")}">Periodontology and Oral Implantology</a></li>
              <li><a class="no-arrow" href="${u("pages/mds-paedodontics-preventive-dentistry.html")}">Paedodontics and Preventive Dentistry</a></li>
              <li><a class="no-arrow" href="${u("pages/oral-medicine-and-radiology.html")}">Oral Medicine And Radiology</a></li>
              <li><a class="no-arrow" href="${u("pages/oral-pathology.html")}">Oral Pathology</a></li>
              <li><a class="no-arrow" href="${u("pages/pharmacology.html")}">Pharmacology</a></li>
              <li><a class="no-arrow" href="${u("pages/public-health-dentistry.html")}">Public Health Dentistry</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a class="dropdown__item dropdown__item--arrow" href="${u("pages/academics.html#curriculum")}" data-sub-toggle>
              <span>Curriculum</span>
              <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
            </a>
            <ul class="dropdown-sub" aria-label="Curriculum">
              <li><a class="no-arrow" href="${u("pages/details-of-syllabi.html")}">Details of syllabi</a></li>
              <li><a class="no-arrow" href="${u("pages/duration.html")}">Duration</a></li>
              <li><a class="no-arrow" href="${u("pages/teaching-methods.html")}">Teaching Methods</a></li>
            </ul>
          </li>
          <li><a href="${u("pages/faculty.html")}">Faculty</a></li>
          <li class="has-sub">
            <a class="dropdown__item dropdown__item--arrow" href="${u("pages/academics.html#calendar")}" data-sub-toggle>
              <span>Academic Calendar</span>
              <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
            </a>
            <ul class="dropdown-sub" aria-label="Academic Calendar">
              <li><a class="no-arrow" href="${u("pages/exam-schedules.html")}">Exam Schedules</a></li>
              <li><a class="no-arrow" href="${u("pages/holidays.html")}">Holidays</a></li>
              <li><a class="no-arrow" href="${u("pages/semester-timelines.html")}">Semester Timelines</a></li>
            </ul>
          </li>
          <li class="has-sub">
            <a class="dropdown__item dropdown__item--arrow" href="${u("pages/academics.html#research")}" data-sub-toggle>
              <span>Research</span>
              <span class="dropdown__arrow" aria-hidden="true">&rsaquo;</span>
            </a>
            <ul class="dropdown-sub" aria-label="Research">
              <li><a class="no-arrow" href="${u("pages/ongoing-projects.html")}">Ongoing Projects</a></li>
              <li><a class="no-arrow" href="${u("pages/publications.html")}">Publications</a></li>
              <li>
                <a class="no-arrow" href="${u("pages/student-research-opportunities.html")}">Student Research Opportunities</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="navitem navitem--admissions has-dropdown">
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

      <li class="navitem has-dropdown">
        <a href="#" class="navlink">
          Patient Care <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
        </a>
        <ul class="dropdown">
          <li><a href="#">OPD</a></li>
          <li><a href="#">Specialties</a></li>
          <li><a href="#">Appointments</a></li>
        </ul>
      </li>

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
          <li><a href="#">Stories</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </li>

      <li class="navitem has-dropdown">
        <a href="#" class="navlink">
          Contact Us <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
        </a>
        <ul class="dropdown">
          <li><a href="${u("pages/contact/location.html#phone-email")}">Phone &amp; Email</a></li>
          <li><a href="${u("pages/contact/location.html#inquiry")}">Inquiry Form</a></li>
          <li><a href="${u("pages/contact/location.html#emergency")}">Emergency Form</a></li>
          <li><a href="${u("pages/contact/location.html#location")}">Location</a></li>
        </ul>
      </li>
    `.trim();
  };

  normalizePrimaryNavbar();

  const navWrap = document.querySelector("[data-nav]");
  const navToggle = document.querySelector("[data-nav-toggle]");
  const dropdownParents = document.querySelectorAll(".navitem.has-dropdown");
  const stickyNav = document.querySelector(".navwrap");

  if (navToggle && navWrap) {
    navToggle.addEventListener("click", () => {
      const isOpen = navWrap.getAttribute("data-open") === "true";
      navWrap.setAttribute("data-open", String(!isOpen));
    });
  }

  const isMobile = () => window.matchMedia("(max-width: 980px)").matches;

  const closeAllDropdowns = () => {
    dropdownParents.forEach((item) => item.removeAttribute("data-open"));
  };

  const closeAllSubmenus = () => {
    document.querySelectorAll(".dropdown li[data-open]").forEach((li) => li.removeAttribute("data-open"));
  };

  dropdownParents.forEach((item) => {
    const link = item.querySelector(".navlink");
    if (!link) return;

    link.addEventListener("click", (e) => {
      if (!isMobile()) return;
      e.preventDefault();
      const isOpen = item.getAttribute("data-open") === "true";
      closeAllDropdowns();
      closeAllSubmenus();
      item.setAttribute("data-open", String(!isOpen));
    });
  });

  const subToggles = document.querySelectorAll("[data-sub-toggle]");
  subToggles.forEach((toggle) => {
    toggle.addEventListener("click", (e) => {
      if (!isMobile()) return;
      const li = toggle.closest("li");
      if (!li) return;

      e.preventDefault();
      const isOpen = li.getAttribute("data-open") === "true";

      const siblings = li.parentElement ? [...li.parentElement.children] : [];
      siblings.forEach((sib) => {
        if (sib !== li) sib.removeAttribute("data-open");
      });
      li.setAttribute("data-open", String(!isOpen));
    });
  });

  document.addEventListener("click", (e) => {
    if (!isMobile()) return;
    if (!navWrap) return;
    if (!navWrap.contains(e.target)) {
      closeAllDropdowns();
      closeAllSubmenus();
    }
  });

  window.addEventListener("resize", () => {
    if (!isMobile()) {
      if (navWrap) navWrap.removeAttribute("data-open");
      closeAllDropdowns();
      closeAllSubmenus();
    }
  });

  const updateHeaderShadow = () => {
    if (!stickyNav) return;
    document.body.classList.toggle("is-scrolled", window.scrollY > 8);
  };
  updateHeaderShadow();
  window.addEventListener("scroll", updateHeaderShadow, { passive: true });

  const demoForms = document.querySelectorAll("[data-demo-form]");
  demoForms.forEach((form) => {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      // No backend is connected yet (static site). This provides a friendly UX in the meantime.
      alert("Thank you! Your form has been submitted. We will contact you soon.");
      form.reset();
    });
  });

  const contactTabs = document.querySelectorAll("[data-contact-tab]");
  const contactPanels = document.querySelectorAll("[data-contact-panel]");

  if (contactTabs.length) {
    const allowed = new Set([...contactTabs].map((t) => t.getAttribute("data-contact-tab")).filter(Boolean));

    const setActive = (name, { updateHash = true } = {}) => {
      if (!name || !allowed.has(name)) return;

      contactTabs.forEach((t) => {
        t.classList.toggle("is-active", t.getAttribute("data-contact-tab") === name);
      });
      if (contactPanels.length) {
        contactPanels.forEach((p) => {
          p.classList.toggle("is-active", p.getAttribute("data-contact-panel") === name);
        });
      }

      if (updateHash) history.replaceState(null, "", `#${encodeURIComponent(name)}`);
    };

    const fromHash = () => decodeURIComponent(window.location.hash.replace(/^#/, "").trim());

    const boot = () => {
      const initial = fromHash();
      const fallback = contactTabs[0]?.getAttribute("data-contact-tab");
      setActive(allowed.has(initial) ? initial : fallback, { updateHash: false });
    };

    contactTabs.forEach((t) => {
      t.addEventListener("click", (e) => {
        const href = t.getAttribute("href") || "";
        const name = t.getAttribute("data-contact-tab");
        if (href.startsWith("#") && contactPanels.length) {
          e.preventDefault();
          setActive(name);
          return;
        }
        setActive(name, { updateHash: false });
      });
    });

    window.addEventListener("hashchange", () => {
      const name = fromHash();
      setActive(name, { updateHash: false });
    });

    boot();
  }

  const ensureAcademicsDrawer = () => {
    const path = (window.location.pathname || "").toLowerCase();
    const isAcademicsPage =
      path.includes("/academics") ||
      path.includes("bds-") ||
      path.includes("mds-") ||
      path.includes("diploma-courses") ||
      path.includes("details-of-syllabi") ||
      path.includes("teaching-methods") ||
      path.includes("duration") ||
      path.includes("exam-schedules") ||
      path.includes("semester-timelines") ||
      path.includes("holidays") ||
      path.includes("ongoing-projects") ||
      path.includes("publications") ||
      path.includes("student-research-opportunities");

    if (!isAcademicsPage) return;

    if (!document.querySelector("[data-dept-drawer]")) {
      const drawer = document.createElement("div");
      drawer.className = "dept-drawer";
      drawer.setAttribute("data-dept-drawer", "");
      drawer.setAttribute("data-open", "false");
      drawer.setAttribute("aria-hidden", "true");

      drawer.innerHTML = `
        <div class="dept-drawer__overlay" data-dept-close aria-hidden="true"></div>
        <aside class="dept-drawer__panel" aria-label="Academics menu">
          <button class="dept-drawer__close" type="button" data-dept-close aria-label="Close menu">
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
          </button>

          <div class="dept-drawer__card">
            <div class="dept-drawer__title">Academics</div>
            <div class="dept-drawer__underline" aria-hidden="true"></div>

            <nav class="dept-drawer__nav" aria-label="Academics links">
              <div class="dept-drawer__group" data-drawer-group data-open="false">
                <button
                  class="dept-drawer__item dept-drawer__item--toggle"
                  type="button"
                  aria-expanded="false"
                  data-drawer-toggle
                >
                  Programs Offered
                </button>
                <div class="dept-drawer__drop" data-drawer-panel hidden>
                  <div class="dept-drawer__subgroup" data-drawer-group data-open="false">
                    <button
                      class="dept-drawer__subitem dept-drawer__subitem--toggle"
                      type="button"
                      data-drawer-toggle
                      aria-expanded="false"
                    >
                      BDS
                    </button>
                    <div class="dept-drawer__subpanel" data-drawer-panel hidden>
                      <a class="dept-drawer__subchild" href="bds-first-year.html">First Professional</a>
                      <a class="dept-drawer__subchild" href="bds-second-year.html">Second Professional</a>
                      <a class="dept-drawer__subchild" href="bds-third-year.html">Third Professional</a>
                      <a class="dept-drawer__subchild" href="bds-fourth-year.html">Fourth Professional</a>
                    </div>
                  </div>

                  <div class="dept-drawer__subgroup" data-drawer-group>
                    <button
                      class="dept-drawer__subitem dept-drawer__subitem--toggle"
                      type="button"
                      data-drawer-toggle
                      aria-expanded="false"
                    >
                      MDS
                    </button>
                    <div class="dept-drawer__subpanel" data-drawer-panel hidden>
                      <a class="dept-drawer__subchild" href="mds-conservative-dentistry-endodontics.html">
                        Conservative Dentistry and Endodontics
                      </a>
                      <a class="dept-drawer__subchild" href="mds-orthodontics-dental-orthopaedics.html">
                        Orthodontics and Dental Orthopaedics
                      </a>
                      <a class="dept-drawer__subchild" href="mds-prosthodontics-crown-bridge.html">
                        Prosthodontics And Crown and Bridge
                      </a>
                      <a class="dept-drawer__subchild" href="mds-periodontology-oral-implantology.html">
                        Periodontology and Oral Implantology
                      </a>
                      <a class="dept-drawer__subchild" href="mds-paedodontics-preventive-dentistry.html">
                        Paedodontics and Preventive Dentistry
                      </a>
                    </div>
                  </div>

                  <a class="dept-drawer__subitem dept-drawer__subitem--link" href="diploma-courses.html">
                    Diploma Courses
                  </a>
                </div>
              </div>

              <div class="dept-drawer__group" data-drawer-group>
                <button class="dept-drawer__item dept-drawer__item--toggle" type="button" data-drawer-toggle aria-expanded="false">
                  Departments
                </button>
                <div class="dept-drawer__drop" data-drawer-panel hidden>
                  <a class="dept-drawer__subchild" href="mds-conservative-dentistry-endodontics.html">
                    Conservative Dentistry and Endodontics
                  </a>
                  <a class="dept-drawer__subchild" href="mds-orthodontics-dental-orthopaedics.html">
                    Orthodontics and Dental Orthopaedics
                  </a>
                  <a class="dept-drawer__subchild" href="mds-prosthodontics-crown-bridge.html">
                    Prosthodontics And Crown and Bridge
                  </a>
                  <a class="dept-drawer__subchild" href="mds-periodontology-oral-implantology.html">
                    Periodontology and Oral Implantology
                  </a>
                  <a class="dept-drawer__subchild" href="mds-paedodontics-preventive-dentistry.html">
                    Paedodontics and Preventive Dentistry
                  </a>
                  <a class="dept-drawer__subchild" href="oral-medicine-and-radiology.html">Oral Medicine And Radiology</a>
                  <a class="dept-drawer__subchild" href="oral-pathology.html">Oral Pathology</a>
                  <a class="dept-drawer__subchild" href="pharmacology.html">Pharmacology</a>
                  <a class="dept-drawer__subchild" href="public-health-dentistry.html">Public Health Dentistry</a>
                </div>
              </div>

              <div class="dept-drawer__group" data-drawer-group>
                <button class="dept-drawer__item dept-drawer__item--toggle" type="button" data-drawer-toggle aria-expanded="false">
                  Curriculum
                </button>
                <div class="dept-drawer__drop" data-drawer-panel hidden>
                  <a class="dept-drawer__subchild" href="details-of-syllabi.html">Details of syllabi</a>
                  <a class="dept-drawer__subchild" href="duration.html">Duration</a>
                  <a class="dept-drawer__subchild" href="teaching-methods.html">Teaching Methods</a>
                </div>
              </div>

              <a class="dept-drawer__item" href="faculty.html">Faculty</a>

              <div class="dept-drawer__group" data-drawer-group>
                <button class="dept-drawer__item dept-drawer__item--toggle" type="button" data-drawer-toggle aria-expanded="false">
                  Academic Calendar
                </button>
                <div class="dept-drawer__drop" data-drawer-panel hidden>
                  <a class="dept-drawer__subchild" href="exam-schedules.html">Exam Schedules</a>
                  <a class="dept-drawer__subchild" href="holidays.html">Holidays</a>
                  <a class="dept-drawer__subchild" href="semester-timelines.html">Semester Timelines</a>
                </div>
              </div>

              <div class="dept-drawer__group" data-drawer-group>
                <button class="dept-drawer__item dept-drawer__item--toggle" type="button" data-drawer-toggle aria-expanded="false">
                  Research
                </button>
                <div class="dept-drawer__drop" data-drawer-panel hidden>
                  <a class="dept-drawer__subchild" href="ongoing-projects.html">Ongoing Projects</a>
                  <a class="dept-drawer__subchild" href="publications.html">Publications</a>
                  <a class="dept-drawer__subchild" href="student-research-opportunities.html">Student Research Opportunities</a>
                </div>
              </div>
            </nav>
          </div>
        </aside>
      `.trim();

      document.body.appendChild(drawer);
    }

    if (!document.querySelector("[data-dept-toggle]")) {
      const candidates = [
        ".why-loader__menu",
        ".holidays-head__menu",
        ".teach-head__menu",
        ".duration-head__menu",
        ".syllabi-head__menu",
        ".diploma__menu",
        ".bank-info__menu",
      ];

      const main = document.querySelector("main") || document;
      for (const selector of candidates) {
        const btn = main.querySelector(selector);
        if (!btn) continue;
        btn.setAttribute("data-dept-toggle", "");
        break;
      }
    }
  };

  ensureAcademicsDrawer();

  const deptToggle = document.querySelector("[data-dept-toggle]");
  const deptDrawer = document.querySelector("[data-dept-drawer]");

  if (deptToggle && deptDrawer) {
    const setOpen = (open) => {
      deptDrawer.setAttribute("data-open", String(Boolean(open)));
      deptDrawer.setAttribute("aria-hidden", String(!open));
      document.body.classList.toggle("drawer-open", Boolean(open));

      if (open) {
        deptDrawer.querySelectorAll("[data-drawer-group]").forEach((group) => {
          group.setAttribute("data-open", "false");
          const toggle = group.querySelector(":scope > [data-drawer-toggle]");
          const panel = group.querySelector(":scope > [data-drawer-panel]");
          if (toggle) toggle.setAttribute("aria-expanded", "false");
          if (panel) panel.setAttribute("hidden", "");
        });
      }
    };

    const isOpen = () => deptDrawer.getAttribute("data-open") === "true";

    deptToggle.addEventListener("click", () => setOpen(!isOpen()));

    deptDrawer.querySelectorAll("[data-dept-close]").forEach((el) => {
      el.addEventListener("click", () => setOpen(false));
    });

    deptDrawer.querySelectorAll("a").forEach((a) => {
      a.addEventListener("click", () => setOpen(false));
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") setOpen(false);
    });

    deptDrawer.querySelectorAll("[data-drawer-group]").forEach((group) => {
      const toggle = group.querySelector(":scope > [data-drawer-toggle]");
      const panel = group.querySelector(":scope > [data-drawer-panel]");
      if (!toggle || !panel) return;

      const applyState = (open) => {
        group.setAttribute("data-open", String(Boolean(open)));
        toggle.setAttribute("aria-expanded", String(Boolean(open)));
        if (open) panel.removeAttribute("hidden");
        else panel.setAttribute("hidden", "");
      };

      applyState(group.getAttribute("data-open") === "true");

      toggle.addEventListener("click", () => {
        const isOpenNow = group.getAttribute("data-open") === "true";
        applyState(!isOpenNow);
      });
    });
  }

  const pgSessions = document.querySelectorAll("[data-pg-session]");
  if (pgSessions.length) {
    pgSessions.forEach((session) => {
      const toggle = session.querySelector("[data-pg-toggle]");
      const panel = session.querySelector("[data-pg-panel]");
      if (!toggle || !panel) return;

      const applyState = (open) => {
        session.setAttribute("data-open", String(Boolean(open)));
        toggle.setAttribute("aria-expanded", String(Boolean(open)));
        if (open) panel.removeAttribute("hidden");
        else panel.setAttribute("hidden", "");
      };

      const initialOpen = session.getAttribute("data-open") === "true";
      applyState(initialOpen);

      toggle.addEventListener("click", () => {
        const isOpenNow = session.getAttribute("data-open") === "true";
        applyState(!isOpenNow);
      });
    });
  }

})();
