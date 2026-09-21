(function () {
  'use strict';

  // Tell CSS that JavaScript is available (enables reveal animations)
  document.documentElement.classList.add('js');

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- Header: solid background after scrolling ---------- */
  var header = document.getElementById('siteHeader');
  if (header) {
    var onScroll = function () {
      header.classList.toggle('scrolled', window.scrollY > 10);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ---------- Mobile / tablet menu ---------- */
  var toggle = document.getElementById('menuToggle');
  var menu = document.getElementById('menu');

  function setMenu(open) {
    if (!menu || !toggle) return;
    menu.classList.toggle('open', open);
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
  }
  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      setMenu(toggle.getAttribute('aria-expanded') !== 'true');
    });
    menu.addEventListener('click', function (e) {
      if (e.target.closest('a')) setMenu(false);
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') setMenu(false);
    });
    var wide = window.matchMedia('(min-width: 1200px)');
    if (wide.addEventListener) wide.addEventListener('change', function () { setMenu(false); });
  }

  /* ---------- Reveal on scroll ---------- */
  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && !reduceMotion) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in'); });
  }

  /* ---------- Logo marquees: duplicate items for a seamless loop ---------- */
  document.querySelectorAll('.marquee-track').forEach(function (track) {
    var items = Array.prototype.slice.call(track.children);
    items.forEach(function (li) { track.appendChild(li.cloneNode(true)); });
  });

  /* ---------- Testimonial tabs ---------- */
  var tabs = document.querySelectorAll('.tt-tab');
  var quote = document.getElementById('ttQuote');

  function selectTab(tab) {
    if (!quote) return;
    tabs.forEach(function (t) { t.setAttribute('aria-selected', String(t === tab)); });
    quote.textContent = tab.dataset.quote;
  }
  tabs.forEach(function (tab, i) {
    tab.setAttribute('aria-label', tab.dataset.name);
    tab.addEventListener('click', function () { selectTab(tab); });
    tab.addEventListener('keydown', function (e) {
      var next = null;
      if (e.key === 'ArrowRight') next = tabs[(i + 1) % tabs.length];
      if (e.key === 'ArrowLeft') next = tabs[(i - 1 + tabs.length) % tabs.length];
      if (next) { e.preventDefault(); next.focus(); selectTab(next); }
    });
  });
  var initial = document.querySelector('.tt-tab[aria-selected="true"]') || tabs[0];
  if (initial) selectTab(initial);

  /* ---------- Contact form: client-side validation only ---------- */
  var form = document.getElementById('contactForm');
  if (form) {
    var note = document.getElementById('formNote');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var required = form.querySelectorAll('[required]');
      var firstBad = null;

      required.forEach(function (field) {
        var value = field.value.trim();
        var ok = value !== '';
        if (ok && field.type === 'email') ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
        field.classList.toggle('invalid', !ok);
        if (!ok && !firstBad) firstBad = field;
      });

      if (firstBad) {
        note.textContent = 'Please check the highlighted fields.';
        note.classList.add('error');
        firstBad.focus();
        return;
      }

      // No back end here: swap this for your own endpoint (fetch/POST) or a
      // form service such as Formspree, Basin, or your CRM's webhook.
      note.classList.remove('error');
      note.textContent = 'Thanks \u2014 your message is ready to send. Connect a form endpoint to deliver it.';
      form.reset();
    });

    form.addEventListener('input', function (e) {
      if (e.target.classList) e.target.classList.remove('invalid');
    });
  }
})();
