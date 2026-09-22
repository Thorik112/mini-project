<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog — Trackly</title>
  <meta name="description" content="Practical articles on sales strategy, marketing analytics, and conversion from the Trackly team.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Blog — Trackly">
  <meta property="og:description" content="Practical articles on sales strategy, marketing analytics, and conversion from the Trackly team.">
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
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('case-studies') }}">Case Studies</a>
        <a href="{{ route('blog') }}"  class="active" aria-current="page">Blog</a>
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
        <nav class="crumbs" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span><span aria-current="page">Blog</span></nav>
        <p class="tag">Blog</p>
        <h1>Ideas, Playbooks, and Lessons From Real Campaigns</h1>
        <p class="page-hero-sub">Short, practical writing on sales, marketing, and the numbers that connect them.</p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <article class="featured-post reveal">
          <a class="featured-media" href="{{ route('blog-detail') }}"><img src="images/4kkk5bCfbQiqA1Dteeo4fb90jI_scale-down-to=2048.webp" alt="" loading="lazy"></a>
          <div class="featured-body">
            <div class="post-meta"><span class="badge badge-amber">Featured</span><span>Mar 12, 2025</span><span>·</span><span>8 min read</span></div>
            <h2 class="h4"><a href="{{ route('blog-detail') }}">5 Proven Strategies to Increase Your Sales in 2025</a></h2>
            <p class="muted">The tactics that consistently move revenue — and the ones that only look good in a deck.</p>
            <a class="btn btn-primary btn-md" href="{{ route('blog-detail') }}">Read article</a>
          </div>
        </article>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <header class="section-head center reveal">
          <p class="tag">Latest posts</p>
          <h2 class="h4">Fresh From the Trackly Team</h2>
        </header>
        <div class="post-grid">
          <article class="post-card reveal">
            <a class="post-media" href="#"><img src="images/ONUKiJ67eCtT.webp" alt="" loading="lazy"></a>
            <div class="post-body">
              <div class="post-meta"><span class="badge badge-blue">Analytics</span><span>Mar 4, 2025</span><span>·</span><span>6 min read</span></div>
              <h3 class="h5"><a href="#">How Data-Driven Marketing Turns Guesswork Into Growth</a></h3>
              <p>A practical way to decide which campaigns deserve more budget next quarter.</p>
              <a class="link-arrow" href="#">Read more <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
            </div>
          </article>
          <article class="post-card reveal">
            <a class="post-media" href="#"><img src="images/LJqsreJLDNu42kljrvPPLIhru90_scale-down-to=1024.webp" alt="" loading="lazy"></a>
            <div class="post-body">
              <div class="post-meta"><span class="badge badge-blue">Sales</span><span>Feb 21, 2025</span><span>·</span><span>7 min read</span></div>
              <h3 class="h5"><a href="#">Building a Sales Funnel That Actually Converts</a></h3>
              <p>Most funnels leak in the same three places. Here is how to find yours.</p>
              <a class="link-arrow" href="#">Read more <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
            </div>
          </article>
          <article class="post-card reveal">
            <a class="post-media" href="#"><img src="images/uZeL0wg1DB8XDmrsVAuR1GZZr5A_scale-down-to=1024.webp" alt="" loading="lazy"></a>
            <div class="post-body">
              <div class="post-meta"><span class="badge badge-blue">Operations</span><span>Feb 9, 2025</span><span>·</span><span>5 min read</span></div>
              <h3 class="h5"><a href="#">CRM Integration: A Checklist for Small Teams</a></h3>
              <p>What to clean up before you connect anything, so you don’t sync bad data.</p>
              <a class="link-arrow" href="#">Read more <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
            </div>
          </article>
          <article class="post-card reveal">
            <a class="post-media" href="#"><img src="images/T3ULthMtFacX60JVW8R0qCpCQ_scale-down-to=1024.webp" alt="" loading="lazy"></a>
            <div class="post-body">
              <div class="post-meta"><span class="badge badge-blue">Conversion</span><span>Jan 28, 2025</span><span>·</span><span>6 min read</span></div>
              <h3 class="h5"><a href="#">Why Your Landing Page Isn’t Converting</a></h3>
              <p>Six fixes you can ship this week, ordered by how much they usually matter.</p>
              <a class="link-arrow" href="#">Read more <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
            </div>
          </article>
          <article class="post-card reveal">
            <a class="post-media" href="#"><img src="images/47HioZdKUziH7OEXbCHZPeKRGY_scale-down-to=1024.webp" alt="" loading="lazy"></a>
            <div class="post-body">
              <div class="post-meta"><span class="badge badge-blue">Analytics</span><span>Jan 15, 2025</span><span>·</span><span>4 min read</span></div>
              <h3 class="h5"><a href="#">The Metrics Every Sales Team Should Review Weekly</a></h3>
              <p>A short list that keeps a pipeline honest without drowning anyone in charts.</p>
              <a class="link-arrow" href="#">Read more <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><circle cx="10" cy="10" r="10" fill="#5053F8"/><path d="M7 13l6-6M8.1 7H13v4.9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></a>
            </div>
          </article>
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
