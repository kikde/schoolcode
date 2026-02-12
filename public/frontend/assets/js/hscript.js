(() => {
  const navWrap = document.querySelector("[data-nav]");
  const navToggle = document.querySelector("[data-nav-toggle]");
  const dropdownParents = document.querySelectorAll(".navitem.has-dropdown");

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

  dropdownParents.forEach((item) => {
    const link = item.querySelector(".navlink");
    if (!link) return;

    link.addEventListener("click", (e) => {
      if (!isMobile()) return;
      e.preventDefault();
      const isOpen = item.getAttribute("data-open") === "true";
      closeAllDropdowns();
      item.setAttribute("data-open", String(!isOpen));
    });
  });

  document.addEventListener("click", (e) => {
    if (!isMobile()) return;
    if (!navWrap) return;
    if (!navWrap.contains(e.target)) closeAllDropdowns();
  });

  window.addEventListener("resize", () => {
    if (!isMobile()) {
      if (navWrap) navWrap.removeAttribute("data-open");
      closeAllDropdowns();
    }
  });
})();
