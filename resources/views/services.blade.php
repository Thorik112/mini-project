<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Services — Trackly</title>
  <meta name="description" content="Sales analytics, marketing campaigns, CRM integration, and growth consulting from the Trackly team.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Services — Trackly">
  <meta property="og:description" content="Sales analytics, marketing campaigns, CRM integration, and growth consulting from the Trackly team.">
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
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('services') }}" class="active" aria-current="page">Services</a>
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
        <nav class="crumbs" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span><span aria-current="page">Services</span></nav>
        <p class="tag">Services</p>
        <h1>Everything You Need to Turn Interest Into Revenue</h1>
        <p class="page-hero-sub">Strategy, execution, and measurement in one place — handled by people who have run these plays before.</p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <header class="section-head center reveal">
          <p class="tag">What we do</p>
          <h2 class="h4">Services Built Around Your Pipeline</h2>
        </header>
        <div class="grid-3">
          <article class="card service-card reveal">
            <span class="icon-box"><img src="images/8cPgpkb2hrpY.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">Sales Analytics</h3>
            <p>Real-time dashboards that show which deals are moving, which are stuck, and why.</p>
            <ul class="ticks"><li>Pipeline health scoring</li><li>Forecast accuracy tracking</li><li>Rep performance reports</li></ul>
            <a class="link-arrow" href="{{ route('contact') }}">Get started <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
          </article>
          <article class="card service-card reveal">
            <span class="icon-box"><img src="images/p8igP6pCW7pJ.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">Marketing Campaigns</h3>
            <p>Plan, launch, and measure multi-channel campaigns without switching tools.</p>
            <ul class="ticks"><li>Campaign planning calendar</li><li>A/B testing framework</li><li>Attribution reporting</li></ul>
            <a class="link-arrow" href="{{ route('contact') }}">Get started <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
          </article>
          <article class="card service-card reveal">
            <span class="icon-box"><img src="images/DWyWexQIjFww.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">CRM Integration</h3>
            <p>Connect the systems you already use so every record stays in sync.</p>
            <ul class="ticks"><li>Two-way data sync</li><li>Duplicate cleanup</li><li>Custom field mapping</li></ul>
            <a class="link-arrow" href="{{ route('contact') }}">Get started <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
          </article>
          <article class="card service-card reveal">
            <span class="icon-box"><img src="images/VCGeCF8Uj2C9.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">Lead Generation</h3>
            <p>Fill the top of your funnel with prospects who actually match your buyer profile.</p>
            <ul class="ticks"><li>Ideal customer profiling</li><li>Outbound sequences</li><li>Lead scoring rules</li></ul>
            <a class="link-arrow" href="{{ route('contact') }}">Get started <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
          </article>
          <article class="card service-card reveal">
            <span class="icon-box"><img src="images/vA9pFHPE5M37.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">Conversion Optimization</h3>
            <p>Find the leaks in your funnel and fix the ones worth fixing first.</p>
            <ul class="ticks"><li>Funnel audit</li><li>Landing page testing</li><li>Checkout flow review</li></ul>
            <a class="link-arrow" href="{{ route('contact') }}">Get started <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
          </article>
          <article class="card service-card reveal">
            <span class="icon-box"><img src="images/mjHWxhyXeQeq.webp" alt="" width="28" height="28" loading="lazy"></span>
            <h3 class="h5">Growth Consulting</h3>
            <p>A senior strategist working alongside your team, not just a monthly report.</p>
            <ul class="ticks"><li>Quarterly growth plan</li><li>Team enablement</li><li>Executive reporting</li></ul>
            <a class="link-arrow" href="{{ route('contact') }}">Get started <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
          </article>
        </div>
      </div>
    </section>

    <section class="section how">
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
            </div>
          </article>
          <article class="step reveal">
            <img class="step-img" src="images/LyayR6Et1CH2.webp" alt="" width="240" height="187" loading="lazy">
            <div class="step-body">
              <span class="badge badge-amber">Strategy</span>
              <p>We create a customized marketing and sales strategy</p>
            </div>
          </article>
          <article class="step reveal">
            <img class="step-img" src="images/tMJT2wg0fxJn.webp" alt="" width="240" height="187" loading="lazy">
            <div class="step-body">
              <span class="badge badge-green">Growth</span>
              <p>Implement, monitor, and grow with continuous improvements</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container narrow">
        <header class="section-head center reveal">
          <p class="tag">FAQ</p>
          <h2 class="h4">Questions We Hear Most Often</h2>
        </header>
        <div class="faq">
          <details class="faq-item reveal">
            <summary>How quickly can we get started?</summary>
            <div class="faq-body"><p>Most teams are fully onboarded within two weeks. That includes data migration, integration setup, and a training session for your team.</p></div>
          </details>
          <details class="faq-item reveal">
            <summary>Do you work with small businesses?</summary>
            <div class="faq-body"><p>Yes. Our plans scale from three-person sales teams up to enterprise organisations with multiple regions.</p></div>
          </details>
          <details class="faq-item reveal">
            <summary>Which tools do you integrate with?</summary>
            <div class="faq-body"><p>We connect with the most common CRMs, ad platforms, and email tools. If something is missing, our API covers the rest.</p></div>
          </details>
          <details class="faq-item reveal">
            <summary>Is there a long-term contract?</summary>
            <div class="faq-body"><p>No. Plans are monthly, and you can export all of your data at any time.</p></div>
          </details>
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
