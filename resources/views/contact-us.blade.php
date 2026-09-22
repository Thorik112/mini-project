<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us — Trackly</title>
  <meta name="description" content="Talk to the Trackly team about sales analytics, campaigns, CRM integration, or growth consulting.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Contact Us — Trackly">
  <meta property="og:description" content="Talk to the Trackly team about sales analytics, campaigns, CRM integration, or growth consulting.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="no-cta">

  <header class="site-header" id="siteHeader">
    <div class="nav">
      <a class="logo" href="{{ route('home') }}" aria-label="Trackly home">
        <img src="images/W2RMPEQ1nAhx.webp" alt="Trackly" width="114" height="32">
      </a>

      <nav class="nav-links" id="menu" aria-label="Main">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('case-studies') }}">Case Studies</a>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('contact') }}" class="menu-cta btn btn-primary btn-sm">Contact Us</a>
      </nav>

      <div class="nav-actions">
        <a class="btn btn-primary btn-sm nav-contact" href="{{ route('contact') }}">Contact Us</a>
        <button class="menu-toggle" id="menuToggle" aria-expanded="false" aria-controls="menu" aria-label="Open menu">
          <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path class="bars" d="M4 7h16M4 12h16M4 17h16"/>
            <path class="cross" d="M6 6l12 12M18 6L6 18"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <main>
    <section class="page-hero">
      <div class="container">
        <nav class="crumbs" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span><span aria-current="page">Contact Us</span></nav>
        <p class="tag">Contact us</p>
        <h1>Tell Us What You’re Trying to Grow</h1>
        <p class="page-hero-sub">Send a short note about your goals and we’ll come back within one business day.</p>
      </div>
    </section>

    <section class="section">
      <div class="container contact-grid">
        <div class="contact-info reveal">
          <h2 class="h5">Get in touch</h2>
          <ul class="contact-list">
            <li>
              <span class="icon-box"><img src="images/VCGeCF8Uj2C9.webp" alt="" width="28" height="28" loading="lazy"></span>
              <div><strong>Email</strong><a href="mailto:hello@trackly.com">hello@trackly.com</a></div>
            </li>
            <li>
              <span class="icon-box"><img src="images/vA9pFHPE5M37.webp" alt="" width="28" height="28" loading="lazy"></span>
              <div><strong>Phone</strong><a href="tel:+18005550132">+1 (800) 555-0132</a></div>
            </li>
            <li>
              <span class="icon-box"><img src="images/mjHWxhyXeQeq.webp" alt="" width="28" height="28" loading="lazy"></span>
              <div><strong>Office</strong><span>128 Harbor Street, Suite 400<br>San Francisco, CA 94107</span></div>
            </li>
          </ul>
          <div class="contact-hours">
            <p><strong>Monday – Friday</strong> 9:00 – 18:00</p>
            <p><strong>Saturday – Sunday</strong> Closed</p>
          </div>
          <div class="socials">
            <a href="https://www.facebook.com/profile.php?id=61557669644128" target="_blank" rel="noopener" aria-label="Facebook">
              <svg width="20" height="20" viewBox="0 0 20 21" aria-hidden="true"><path d="M7.584 20.112V13.462H5.522V10.406h2.062V9.09c0-3.405 1.54-4.982 4.882-4.982.334 0 .796.035 1.223.086.32.033.638.087.951.162v2.771a8.6 8.6 0 0 0-.544-.033c-.204-.005-.407-.008-.611-.007-.589 0-1.049.08-1.396.257a1.4 1.4 0 0 0-.566.518c-.215.35-.311.83-.311 1.46v1.081h3.265l-.321 1.753-.239 1.303h-2.705v6.871C16.163 19.735 20 15.519 20 10.406c0-5.522-4.477-10-10-10S0 4.884 0 10.406c0 4.69 3.228 8.625 7.584 9.706Z" fill="currentColor"/></svg>
            </a>
            <a href="https://www.linkedin.com/company/dipainhouse/" target="_blank" rel="noopener" aria-label="LinkedIn">
              <svg width="17" height="16" viewBox="0 0 17 16" aria-hidden="true"><path d="M4 2.537a1.667 1.667 0 1 1-3.333-.002A1.667 1.667 0 0 1 4 2.537ZM4.05 5.437H.717V15.87H4.05V5.437Zm5.267 0H6V15.87h3.283v-5.475c0-3.05 3.975-3.333 3.975 0v5.475h3.292V9.262c0-5.142-5.883-4.95-7.267-2.425V5.437Z" fill="currentColor"/></svg>
            </a>
            <a href="https://x.com/dipa_inhouse" target="_blank" rel="noopener" aria-label="X (Twitter)">
              <svg width="17" height="17" viewBox="0 0 17 17" aria-hidden="true"><path d="M.318.963h4.712l4.193 5.998L14.257.963h1.505L9.797 7.782l6.42 9.181h-4.71L7.127 10.701 1.721 16.963H.217l6.337-7.082L.318.963Z" fill="currentColor"/></svg>
            </a>
          </div>
        </div>

        <div class="contact-form-wrap reveal">
          <form class="contact-form" id="contactForm" novalidate>
            <div class="field-row">
              <p class="field">
                <label for="firstName">First name</label>
                <input id="firstName" name="firstName" type="text" autocomplete="given-name" required>
              </p>
              <p class="field">
                <label for="lastName">Last name</label>
                <input id="lastName" name="lastName" type="text" autocomplete="family-name" required>
              </p>
            </div>
            <p class="field">
              <label for="email">Work email</label>
              <input id="email" name="email" type="email" autocomplete="email" required>
            </p>
            <p class="field">
              <label for="company">Company</label>
              <input id="company" name="company" type="text" autocomplete="organization">
            </p>
            <p class="field">
              <label for="topic">What can we help with?</label>
              <select id="topic" name="topic">
                <option>Sales analytics</option>
                <option>Marketing campaigns</option>
                <option>CRM integration</option>
                <option>Growth consulting</option>
                <option>Something else</option>
              </select>
            </p>
            <p class="field">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </p>
            <button class="btn btn-primary btn-lg" type="submit">Send message</button>
            <p class="form-note" id="formNote" role="status" aria-live="polite"></p>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <div class="footer-top">
        <div class="footer-about">
          <a href="{{ route('home') }}" class="logo"><img src="images/W2RMPEQ1nAhx.webp" alt="Trackly" width="114" height="32" loading="lazy"></a>
          <p>The industry-leading automation platform specifical for your business.</p>
          <div class="socials">
            <a href="https://www.facebook.com/profile.php?id=61557669644128" target="_blank" rel="noopener" aria-label="Facebook">
              <svg width="20" height="20" viewBox="0 0 20 21" aria-hidden="true"><path d="M7.584 20.112V13.462H5.522V10.406h2.062V9.09c0-3.405 1.54-4.982 4.882-4.982.334 0 .796.035 1.223.086.32.033.638.087.951.162v2.771a8.6 8.6 0 0 0-.544-.033c-.204-.005-.407-.008-.611-.007-.589 0-1.049.08-1.396.257a1.4 1.4 0 0 0-.566.518c-.215.35-.311.83-.311 1.46v1.081h3.265l-.321 1.753-.239 1.303h-2.705v6.871C16.163 19.735 20 15.519 20 10.406c0-5.522-4.477-10-10-10S0 4.884 0 10.406c0 4.69 3.228 8.625 7.584 9.706Z" fill="currentColor"/></svg>
            </a>
            <a href="https://www.linkedin.com/company/dipainhouse/" target="_blank" rel="noopener" aria-label="LinkedIn">
              <svg width="17" height="16" viewBox="0 0 17 16" aria-hidden="true"><path d="M4 2.537a1.667 1.667 0 1 1-3.333-.002A1.667 1.667 0 0 1 4 2.537ZM4.05 5.437H.717V15.87H4.05V5.437Zm5.267 0H6V15.87h3.283v-5.475c0-3.05 3.975-3.333 3.975 0v5.475h3.292V9.262c0-5.142-5.883-4.95-7.267-2.425V5.437Z" fill="currentColor"/></svg>
            </a>
            <a href="https://x.com/dipa_inhouse" target="_blank" rel="noopener" aria-label="X (Twitter)">
              <svg width="17" height="17" viewBox="0 0 17 17" aria-hidden="true"><path d="M.318.963h4.712l4.193 5.998L14.257.963h1.505L9.797 7.782l6.42 9.181h-4.71L7.127 10.701 1.721 16.963H.217l6.337-7.082L.318.963Z" fill="currentColor"/></svg>
            </a>
          </div>
        </div>

        <nav class="footer-links" aria-label="Footer">
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('about') }}">About Us</a>
          <a href="{{ route('services') }}">Services</a>
          <a href="{{ route('case-studies') }}">Case Studies</a>
          <a href="{{ route('blog') }}">Blog</a>
          <a href="{{ route('contact') }}">Contact Us</a>
        </nav>
      </div>

      <hr>

      <div class="footer-bottom">
        <p class="copyright">© 2025 Trackly. All rights reserved.</p>
        <div class="legal">
          <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
          <a href="{{ route('terms-of-service') }}">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>
