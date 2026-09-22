<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trackly</title>
  <meta name="description" content="Trackly is a digital platform designed to help businesses optimize their sales and marketing performance with ease and efficiency.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Trackly">
  <meta property="og:description" content="Trackly is a digital platform designed to help businesses optimize their sales and marketing performance with ease and efficiency.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- ============ HEADER ============ -->
  <header class="site-header" id="siteHeader">
    <div class="nav">
      <a class="logo" href="{{ route('home') }}" aria-label="Trackly home">
        <img src="images/W2RMPEQ1nAhx.webp" alt="Trackly" width="114" height="32">
      </a>

      <nav class="nav-links" id="menu" aria-label="Main">
        <a href="{{ route('home') }}" class="active" aria-current="page">Home</a>
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

    <!-- ============ HERO ============ -->
    <section class="hero" id="hero">
      <div class="hero-inner">
        <div class="hero-text">
          <h1>
            <span class="line">Boost Your Sales &amp; Marketing</span>
            <span class="line">to the <em>Next Level</em></span>
          </h1>
          <p class="hero-sub">Drive Growth, Generate Leads, and Close Deals Faster</p>
        </div>

        <picture class="hero-illustration">
          <source media="(max-width: 767px)" srcset="images/NCn4NPqkvaOl.webp">
          <img src="images/ZDWjJtXloIWX.webp" alt="Trackly dashboard preview" width="920" height="300">
        </picture>

        <div class="hero-meta">
          <div class="hero-meta-left">
            <div class="rating">
              <p class="rating-text"><strong>4.8</strong> /ratings</p>
              <div class="stars" aria-label="Rated 4.8 out of 5">
                <img src="images/GGrQHdf01eSm.webp" alt="" width="20" height="20">
                <img src="images/GGrQHdf01eSm.webp" alt="" width="20" height="20">
                <img src="images/GGrQHdf01eSm.webp" alt="" width="20" height="20">
                <img src="images/GGrQHdf01eSm.webp" alt="" width="20" height="20">
                <img src="images/GGrQHdf01eSm.webp" alt="" width="20" height="20">
              </div>
            </div>
            <p class="lead">Take your business to new heights with our cutting-edge sales and marketing solutions.</p>
          </div>
          <a class="btn btn-primary btn-lg" href="{{ route('contact') }}">Join with Us</a>
        </div>
      </div>
    </section>

    <!-- ============ FEATURES CARD (overlaps hero) ============ -->
    <section class="features" id="features">
      <div class="features-card reveal">
        <img class="features-watermark" src="images/m1JikP7ZFdG7.webp" alt="" aria-hidden="true">

        <div class="features-left">
          <div class="features-text">
            <p class="tag">Features</p>
            <h2 class="h4">Discover the Powerful Features That Set Us Apart</h2>
            <p class="muted">Tools and insights designed to supercharge your business performance.</p>
          </div>

          <div class="users">
            <div class="avatars">
              <img src="images/oeNPPkgNr9OD.webp" alt="" width="50" height="50">
              <img src="images/ZByiE2jPSsSe.webp" alt="" width="50" height="50">
              <img src="images/TOvOclWMKXJF.webp" alt="" width="50" height="50">
            </div>
            <div>
              <p class="users-count">3k+</p>
              <p class="users-label">User registered</p>
            </div>
          </div>
        </div>

        <ul class="features-list">
          <li class="feature">
            <div class="feature-head">
              <span class="icon-box"><img src="images/8cPgpkb2hrpY.webp" alt="" width="28" height="28"></span>
              <h3>Data-Driven Insights</h3>
            </div>
            <p>Make informed decisions with real-time analytics.</p>
          </li>
          <li class="feature">
            <div class="feature-head">
              <span class="icon-box"><img src="images/p8igP6pCW7pJ.webp" alt="" width="28" height="28"></span>
              <h3>Marketing Campaigns</h3>
            </div>
            <p>Save time and increase efficiency with AI-powered automation.</p>
          </li>
          <li class="feature">
            <div class="feature-head">
              <span class="icon-box"><img src="images/DWyWexQIjFww.webp" alt="" width="28" height="28"></span>
              <h3>CRM Integration</h3>
            </div>
            <p>Seamlessly manage leads and customers in one centralized system.</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- ============ HOW IT WORKS ============ -->
    <section class="section how" id="how-it-works">
      <div class="container">
        <header class="section-head center reveal">
          <p class="tag">How it works</p>
          <h2 class="h4">Simple, Streamlined Steps to Achieve Business Success</h2>
        </header>

        <div class="steps">
          <article class="step reveal">
            <img class="step-img" src="images/nZPvcwd0O8MR.webp" alt="" width="240" height="187" loading="lazy">
            <div class="step-body">
              <span class="badge badge-blue">Planning</span>
              <p>Get a free consultation and understand your business needs.</p>
              <a class="link-arrow" href="{{ route('services') }}">Read More <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
            </div>
          </article>

          <article class="step reveal">
            <img class="step-img" src="images/LyayR6Et1CH2.webp" alt="" width="240" height="187" loading="lazy">
            <div class="step-body">
              <span class="badge badge-amber">Strategy</span>
              <p>We create a customized marketing and sales strategy</p>
              <a class="link-arrow" href="{{ route('services') }}">Read More <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
            </div>
          </article>

          <article class="step reveal">
            <img class="step-img" src="images/tMJT2wg0fxJn.webp" alt="" width="240" height="187" loading="lazy">
            <div class="step-body">
              <span class="badge badge-green">Growth</span>
              <p>Implement, monitor, and grow with continuous improvements</p>
              <a class="link-arrow" href="{{ route('services') }}">Read More <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============ CASE STUDIES ============ -->
    <section class="section case" id="case-studies">
      <div class="container">
        <header class="section-head center reveal">
          <p class="tag">Case studies</p>
          <h2 class="h4">Real Results That Speak for Themselves</h2>
        </header>

        <div class="case-grid">
          <div class="case-visual reveal">
            <img src="images/HT85WVAgxN1M.webp" alt="" width="420" height="436" loading="lazy">
          </div>

          <div class="case-details reveal">
            <h3 class="h5">Driving Market Expansion for NexGen Solutions</h3>

            <ul class="case-points">
              <li>
                <span class="icon-box"><img src="images/VCGeCF8Uj2C9.webp" alt="" width="28" height="28"></span>
                <p>Challenge: Entering new markets with minimal brand recognition.</p>
              </li>
              <li>
                <span class="icon-box"><img src="images/vA9pFHPE5M37.webp" alt="" width="28" height="28"></span>
                <p>Solution: Developed a targeted content marketing strategy and localized advertising.</p>
              </li>
              <li>
                <span class="icon-box"><img src="images/mjHWxhyXeQeq.webp" alt="" width="28" height="28"></span>
                <p>Results: Successfully expanded into three new regions, increasing market share by 30%.</p>
              </li>
            </ul>

            <a class="btn btn-primary btn-lg btn-icon" href="{{ route('case-studies') }}">
              See More
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M5 13.5L14 4.5" stroke="#fff" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.19 4.5H14.5v7.31" stroke="#fff" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ CLIENT LOGOS BAND ============ -->
    <section class="clients" id="clients" aria-label="Our clients">
      <div class="container clients-inner">
        <div class="clients-text reveal">
          <h2 class="h4">See Why Top Brands Trust Our Solutions</h2>
          <p>Building lasting relationships with industry leaders.</p>
        </div>

        <div class="marquees" aria-hidden="true">
          <div class="marquee">
            <ul class="marquee-track">
              <li><img src="images/CPInNOsR6vGi.webp" alt="" width="180" height="68"></li>
              <li><img src="images/ih2LaxFcWl87.webp" alt="" width="180" height="68"></li>
              <li><img src="images/Z2kmnKuViW3s.webp" alt="" width="180" height="68"></li>
            </ul>
          </div>
          <div class="marquee marquee-reverse">
            <ul class="marquee-track">
              <li><img src="images/CmKCJtEZFEWk.webp" alt="" width="180" height="68"></li>
              <li><img src="images/keYBMqmghznb.webp" alt="" width="180" height="68"></li>
              <li><img src="images/IK2IY0HFohrm.webp" alt="" width="180" height="68"></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ WHY CHOOSE US ============ -->
    <section class="section why" id="why-us">
      <div class="container why-grid">
        <div class="why-image reveal">
          <img src="images/VGP6qmIjAWyI.webp" alt="" width="368" height="440" loading="lazy">
        </div>

        <div class="why-content reveal">
          <div class="why-text">
            <p class="tag">Why choose us</p>
            <h2 class="h4">The Growth Partner You’ve Been Looking For</h2>
            <p class="muted">Experience, innovation, and personalized support that drive results.</p>
          </div>

          <ul class="why-list">
            <li><img src="images/lV6U9jttiBPW.webp" alt="" width="28" height="28"><p>Proven expertise in boosting sales efficiency.</p></li>
            <li><img src="images/ig4Ie4ZMphgT.webp" alt="" width="28" height="28"><p>Data-driven and innovative strategies.</p></li>
            <li><img src="images/COxHIBTi0M69.webp" alt="" width="28" height="28"><p>Personalized support for every step of the journey.</p></li>
          </ul>

          <a class="btn btn-primary btn-md" href="{{ route('about') }}">Find Out</a>
        </div>
      </div>
    </section>

    <!-- ============ SOCIAL PROOF ============ -->
    <section class="section proof" id="social-proof">
      <div class="container">
        <header class="proof-head reveal">
          <div>
            <p class="tag">Social proof</p>
            <h2 class="h4">Hear From Our Clients Who Achieved Real Success</h2>
          </div>
          <p class="muted">Genuine feedback from satisfied partners and customers.</p>
        </header>

        <div class="testimonial reveal" id="testimonial">
          <div class="tt-tabs" role="tablist" aria-label="Client testimonials">
            <button class="tt-tab" role="tab" aria-selected="false"
                    data-name="Ethan Brooks" data-role="COO, Harborlight"
                    data-quote="The weekly review format is deceptively simple and it caught a pipeline problem two months early.">
              <img src="images/Di2BEsKPzkIK.webp" alt="" width="48" height="48">
              <span class="tt-meta"><strong>Ethan Brooks</strong><small>COO, Harborlight</small></span>
            </button>
            <button class="tt-tab" role="tab" aria-selected="false"
                    data-name="Mei Tanaka" data-role="Marketing Lead, Kasa Studio"
                    data-quote="Onboarding took nine days. I had expected a quarter of disruption and it never came.">
              <img src="images/me8K3xfzphza.webp" alt="" width="48" height="48">
              <span class="tt-meta"><strong>Mei Tanaka</strong><small>Marketing Lead, Kasa Studio</small></span>
            </button>
            <button class="tt-tab" role="tab" aria-selected="true"
                    data-name="John Smith" data-role="CEO of TechNova"
                    data-quote="This platform completely transformed our sales strategy. Our conversions increased by 40% in just six months!">
              <img src="images/RZI4qqw0FEql.webp" alt="" width="48" height="48">
              <span class="tt-meta"><strong>John Smith</strong><small>CEO of TechNova</small></span>
            </button>
            <button class="tt-tab" role="tab" aria-selected="false"
                    data-name="Daniel Reyes" data-role="Sales Director, Orbit Logistics"
                    data-quote="Our reps stopped exporting spreadsheets. Nineteen days came off the average sales cycle in one quarter.">
              <img src="images/ICNfenU3ejW6.webp" alt="" width="48" height="48">
              <span class="tt-meta"><strong>Daniel Reyes</strong><small>Sales Director, Orbit Logistics</small></span>
            </button>
            <button class="tt-tab" role="tab" aria-selected="false"
                    data-name="Priya Nair" data-role="CMO, NexGen Solutions"
                    data-quote="The localized campaign plan was the first thing that actually worked in markets where nobody knew us.">
              <img src="images/Cb7Orz3gSlbl.webp" alt="" width="48" height="48">
              <span class="tt-meta"><strong>Priya Nair</strong><small>CMO, NexGen Solutions</small></span>
            </button>
          </div>

          <div class="tt-quote-wrap">
            <img class="quote-mark quote-open" src="images/lnav2AxbPLqb.webp" alt="" width="40" height="40">
            <blockquote class="tt-quote" id="ttQuote" aria-live="polite"></blockquote>
            <img class="quote-mark quote-close" src="images/5pbIkjm8T8YT.webp" alt="" width="40" height="40">
          </div>

          <a class="btn btn-primary btn-md" href="{{ route('testimonials') }}">See All</a>
        </div>
      </div>
    </section>

  </main>

  <!-- ============ CTA + FOOTER ============ -->
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
