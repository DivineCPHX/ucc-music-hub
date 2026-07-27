/*!
 * UCC Music Hub — footer.js
 * Progressive enhancement only: newsletter inline feedback and a
 * back-to-top control. No backend calls are made here — wire the
 * `data-newsletter-form` submit handler below to your real endpoint
 * when ready (see the TODO).
 */
(function () {
  "use strict";

  /* ---------- Newsletter forms ---------- */
  // Targets the footer form (data-newsletter-form) and, generically,
  // any other email-capture form on the page (e.g. the hero CTA
  // newsletter block in index.blade.php) so both get the same feel.
  var forms = document.querySelectorAll(
    "[data-newsletter-form], form:has(input[type='email'])"
  );

  forms.forEach(function (form) {
    if (form.dataset.ucNewsletterBound) return;
    form.dataset.ucNewsletterBound = "true";

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      var emailInput = form.querySelector("input[type='email']");
      var feedback =
        form.parentElement.querySelector("[data-newsletter-feedback]") ||
        getOrCreateFeedback(form);

      var email = emailInput ? emailInput.value.trim() : "";

      if (!email || !isValidEmail(email)) {
        showFeedback(feedback, "Please enter a valid email address.", true);
        return;
      }

      // TODO: replace with a real fetch() call to your subscribe endpoint.
      // fetch('/newsletter/subscribe', { method: 'POST', body: new FormData(form) })

      showFeedback(feedback, "Thanks! You're on the list for weekly worship inspiration.", false);
      form.reset();
    });
  });

  function getOrCreateFeedback(form) {
    var el = document.createElement("div");
    el.className = "form-feedback";
    form.insertAdjacentElement("afterend", el);
    return el;
  }

  function showFeedback(el, message, isError) {
    if (!el) return;
    el.textContent = message;
    el.classList.toggle("is-error", !!isError);
  }

  function isValidEmail(value) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
  }

  /* ---------- Back to top ---------- */
  var backToTop = document.querySelector("[data-back-to-top]");
  if (backToTop) {
    var toggleVisibility = function () {
      backToTop.classList.toggle("is-visible", window.scrollY > 480);
    };
    window.addEventListener("scroll", toggleVisibility, { passive: true });
    toggleVisibility();

    backToTop.addEventListener("click", function () {
      var reduceMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
      ).matches;
      window.scrollTo({ top: 0, behavior: reduceMotion ? "auto" : "smooth" });
    });
  }
})();
