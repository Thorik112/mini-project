<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us — Trackly</title>
  <meta name="description" content="Meet the team behind Trackly and the principles that guide how we help businesses grow.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="About Us — Trackly">
  <meta property="og:description" content="Meet the team behind Trackly and the principles that guide how we help businesses grow.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="site-header" id="siteHeader">
    <div class="nav">
      <a class="logo" href="{{ route('home') }}" aria-label="Trackly home">
        <img src="images/W2RMPEQ1nAhx.webp" alt="Trackly" width="114" height="32">
      </a>

      <nav class="nav-links" id="menu" aria-label="Main">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}" class="active" aria-current="page">About Us</a>
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
        <nav class="crumbs" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span><span aria-current="page">About Us</span></nav>
        <p class="tag">About us</p>
        <h1>We Help Teams Sell Smarter, Not Harder</h1>
        <p class="page-hero-sub">Trackly started with one simple belief: growth should be measurable, repeatable, and never based on guesswork.</p>
      </div>
    </section>

    <section class="section">
      <div class="container split">
        <div class="split-media reveal">
          <img src="images/VGP6qmIjAWyI.webp" alt="The Trackly team at work" width="368" height="440" loading="lazy">
        </div>
        <div class="split-body reveal">
          <p class="tag">Our story</p>
          <h2 class="h4">From a Small Team to a Growth Partner for 3,000+ Businesses</h2>
          <p class="muted">We began in 2018 as three marketers frustrated by scattered spreadsheets and reports nobody trusted. We built the tool we wanted to use, and companies kept asking to use it too.</p>
          <p>Today Trackly brings sales pipelines, campaigns, and customer data into one place — so teams spend less time reconciling numbers and more time closing deals.</p>
          <a class="btn btn-primary btn-md" href="{{ route('contact') }}">Work With Us</a>
        </div>
      </div>
    </section>

    <section class="section stats-section">
      <div class="container">
        <ul class="stats reveal">
          <li><strong>3k+</strong><span>Businesses onboarded</span></li>
          <li><strong>40%</strong><span>Average lift in conversions</span></li>
          <li><strong>18</strong><span>Countries served</span></li>
          <li><strong>4.8</strong><span>Average client rating</span></li>
        </ul>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <header class="section-head center reveal">
          <p class="tag">What drives us</p>
          <h2 class="h4">Principles We Refuse to Compromise On</h2>
        </header>
        <div class="grid-3">
          <article class="card reveal">
            <span class="icon-box"><img src="images/8cPgpkb2hrpY.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">Evidence first</h3>
            <p>Every recommendation we make is tied to a number you can check yourself.</p>
          </article>
          <article class="card reveal">
            <span class="icon-box"><img src="images/lV6U9jttiBPW.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">Plain language</h3>
            <p>No jargon, no vanity metrics. Reports your whole team can read in a minute.</p>
          </article>
          <article class="card reveal">
            <span class="icon-box"><img src="images/COxHIBTi0M69.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">Long-term partnership</h3>
            <p>We measure our success by your retention, not by the size of the contract.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <header class="section-head center reveal">
          <p class="tag">Our team</p>
          <h2 class="h4">The People Behind Your Results</h2>
        </header>
        <div class="team">
          <article class="team-card reveal"><img src="images/oeNPPkgNr9OD.webp" alt="Amelia Carter" width="120" height="120" loading="lazy"><h3>Amelia Carter</h3><p>Co-founder &amp; CEO</p></article>
          <article class="team-card reveal"><img src="images/ZByiE2jPSsSe.webp" alt="Marcus Lee" width="120" height="120" loading="lazy"><h3>Marcus Lee</h3><p>Head of Strategy</p></article>
          <article class="team-card reveal"><img src="images/TOvOclWMKXJF.webp" alt="Lucas Moreau" width="120" height="120" loading="lazy"><h3>Lucas Moreau</h3><p>Head of Product</p></article>
          <article class="team-card reveal"><img src="images/Di2BEsKPzkIK.webp" alt="Ethan Brooks" width="120" height="120" loading="lazy"><h3>Ethan Brooks</h3><p>Lead Data Analyst</p></article>
          <article class="team-card reveal"><img src="images/me8K3xfzphza.webp" alt="Mei Tanaka" width="120" height="120" loading="lazy"><h3>Mei Tanaka</h3><p>Campaign Director</p></article>
          <article class="team-card reveal"><img src="images/ICNfenU3ejW6.webp" alt="Daniel Reyes" width="120" height="120" loading="lazy"><h3>Daniel Reyes</h3><p>Customer Success Lead</p></article>
        </div>
      </div>
    </section>

    <section class="clients" aria-label="Our clients">
      <div class="container clients-inner">
        <div class="clients-text reveal">
          <h2 class="h4">See Why Top Brands Trust Our Solutions</h2>
          <p>Building lasting relationships with industry leaders.</p>
        </div>
        <div class="marquees" aria-hidden="true">
          <div class="marquee">
            <ul class="marquee-track">
              <li><img src="images/CPInNOsR6vGi.webp" alt="" width="180" height="68" loading="lazy"></li>
              <li><img src="images/ih2LaxFcWl87.webp" alt="" width="180" height="68" loading="lazy"></li>
              <li><img src="images/Z2kmnKuViW3s.webp" alt="" width="180" height="68" loading="lazy"></li>
            </ul>
          </div>
          <div class="marquee marquee-reverse">
            <ul class="marquee-track">
              <li><img src="images/CmKCJtEZFEWk.webp" alt="" width="180" height="68" loading="lazy"></li>
              <li><img src="images/keYBMqmghznb.webp" alt="" width="180" height="68" loading="lazy"></li>
              <li><img src="images/IK2IY0HFohrm.webp" alt="" width="180" height="68" loading="lazy"></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="cta-wrap">
    <section class="cta reveal" aria-labelledby="ctaTitle">
      <svg class="cta-mark" viewBox="0 0 300 300" fill="none" aria-hidden="true">
        <g opacity="0.12">
          <path d="M299.587 161.25H246C199.2 161.25 161.25 199.19 161.25 246v53.58c73.88-5.48 132.86-64.46 138.34-138.33Z" fill="#fff"/>
          <path d="M138.75 299.58V246c0-46.8-37.94-84.75-84.75-84.75H.42c5.47 73.87 64.46 132.86 138.33 138.33Z" fill="#fff"/>
          <path d="M299.587 138.75C294.11 64.87 235.13 5.89 161.25.41V54c0 46.8 37.94 84.75 84.75 84.75h53.59Z" fill="#fff"/>
          <path d="M138.75.41C64.88 5.89 5.9 64.87.42 138.75H54c46.8 0 84.75-37.94 84.75-84.75V.41Z" fill="#fff"/>
          <path d="M101.87 150c20.8-10.39 37.74-27.34 48.13-48.13 10.39 20.8 27.34 37.74 48.13 48.13-20.8 10.39-37.74 27.34-48.13 48.13-10.39-20.8-27.34-37.74-48.13-48.13Z" fill="#fff" fill-opacity=".8"/>
        </g>
      </svg>
      <div class="cta-text">
        <h2 class="h4" id="ctaTitle">Don’t wait — transform your business with our expertise.</h2>
        <p>Ready to grow your business?</p>
      </div>
      <div class="cta-actions">
        <a class="btn btn-secondary btn-md" href="{{ route('contact') }}">Start Free Trial</a>
        <a class="btn btn-tertiary btn-md" href="{{ route('services') }}">Learn More</a>
      </div>
    </section>
  </div>

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
