<?php 
  $page_css = "home-styles.css"; 
  include 'header.php'; 
?>


<!-- ════════════════════════════════
     HERO SLIDESHOW
════════════════════════════════ -->
<section class="hero" aria-label="Featured slideshow">

  <div class="slides-wrapper" id="slidesWrapper">

    <!-- Slide 1 -->
    <div class="slide active">
      <div class="slide-img" style="background-image:url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=1400&q=80');"></div>
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <p class="slide-subtitle">Faculty of Engineering · University of Peradeniya</p>
        <h1 class="slide-title">
          BACHELOR OF THE SCIENCE OF ENGINEERING HONOURS IN
        </h1>
        <h2 class="sub-slide-title">
          MECHANICAL ENGINEERING
        </h2>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="slide">
      <div class="slide-img" style="background-image:url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1400&q=80');"></div>
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <p class="slide-subtitle">Research &amp; Innovation</p>
        <h1 class="slide-title">
          SOLVING TOMORROW'S CHALLENGES THROUGH
        </h1>
        <h2 class="sub-slide-title">
          ADVANCED ENGINEERING RESEARCH
        </h2>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="slide">
      <div class="slide-img" style="background-image:url('https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?w=1400&q=80');"></div>
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <p class="slide-subtitle">Advanced Laboratories &amp; Facilities</p>
        <h1 class="slide-title">
          INNOVATIVE SPACES DESIGNED <br>FOR
        </h1>
        <h2 class="sub-slide-title">
           NEXT GENERATION OF ENGINEERS
        </h2>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="slide">
      <div class="slide-img" style="background-image:url('https://images.unsplash.com/photo-1565043589221-1a6fd9ae45c7?w=1400&q=80');"></div>
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <p class="slide-subtitle">Industry &amp; Community Engagement</p>
        <h1 class="slide-title">
          WHERE ACADEMIC EXCELLENCE <br>MEETS
        </h1>
        <h2 class="sub-slide-title">
          GLOBAL INDUSTRY STANDARDS
        </h2>
      </div>
    </div>

  </div><!-- /slides-wrapper -->

  <!-- Prev / Next -->
  <button class="slide-arrow prev" id="prevBtn" aria-label="Previous slide">&#8592;</button>
  <button class="slide-arrow next" id="nextBtn" aria-label="Next slide">&#8594;</button>

  <!-- Dot indicators -->
  <div class="slide-dots" id="dotContainer">
    <span class="dot active" data-index="0"></span>
    <span class="dot"        data-index="1"></span>
    <span class="dot"        data-index="2"></span>
    <span class="dot"        data-index="3"></span>
  </div>

</section>

<!-- ════════════════════════════════
     WELCOME STRIP
════════════════════════════════ -->
<div class="welcome-strip">
  <div class="welcome-line"></div>
  <span class="welcome-text">Welcome to the Department of Mechanical Engineering</span>
  <div class="welcome-line"></div>
</div>

<!-- ════════════════════════════════
     AT A GLANCE — STAT COUNTERS
════════════════════════════════ -->
<div class="stats-strip">
  <div class="stats-strip-inner">

    <div class="stat-counter-box">
      <span class="stat-icon">🎓</span>
      <span class="stat-counter-num" data-target="1700"data-suffix="+">0</span>
      <span class="stat-counter-label">Undergraduate<br>Students</span>
    </div>

    <div class="stat-counter-box">
      <span class="stat-icon">📄</span>
      <span class="stat-counter-num" data-target="80" data-suffix="+">0</span>
      <span class="stat-counter-label">Research Publications<br>Per Year</span>
    </div>

    <div class="stat-counter-box">
      <span class="stat-icon">🔬</span>
      <span class="stat-counter-num" data-target="12">0</span>
      <span class="stat-counter-label">Specialised<br>Laboratories</span>
    </div>

    <div class="stat-counter-box">
      <span class="stat-icon">👨‍🏫</span>
      <span class="stat-counter-num" data-target="30" data-suffix="+">0</span>
      <span class="stat-counter-label">Academic Staff<br>PhD Holders</span>
    </div>

  </div>
</div>

<!-- ════════════════════════════════
     MAIN CONTENT
════════════════════════════════ -->
<main class="main-content">

  <!-- ── NEWS SECTION ── -->
<?php include 'news_data.php'; ?>

<section class="news-section">
    <div class="section-heading">
        <div class="heading-accent"></div>
        <h2>Latest News</h2>
        <div class="heading-rule"></div>
    </div>

    <div class="news-grid">
        <?php 
        // Show only the 3 most recent items
        $display_limit = min(3, count($all_news)); 
        
        for ($i = 0; $i < $display_limit; $i++): 
            $item = $all_news[$i]; 
        ?>
            <article class="news-card">
                <?php if (!empty($item['image'])): ?>
                  <div class="news-card-img" style="background-image:url('<?php echo htmlspecialchars($item['image']); ?>');background-size:cover;background-position:center;"></div>
                <?php else: ?>
                  <div class="news-card-img img-<?php echo ($i % 3) + 1; ?>" data-icon="⚙️"></div>
                <?php endif; ?>
                
                <div class="news-card-body">
                    <p class="news-date">
                        <?php echo $item['day'] . ' ' . $item['month'] . ' ' . $item['year']; ?>
                    </p>
                    
                    <h3 class="news-card-title">
                        <?php echo $item['title']; ?>
                    </h3>
                    
                    <p class="news-card-excerpt">
                        <?php echo $item['excerpt']; ?>
                    </p>
                    
                    <a href="news.php" class="news-card-link">
                        Read details <span>&rarr;</span>
                    </a>
                </div>
            </article>
        <?php endfor; ?>
    </div>

    <div class="more-news-wrap">
        <a href="news.php" class="btn-more">View All News</a>
    </div>
</section>

</main>

<!-- ════════════════════════════════
     INDUSTRY PARTNERS & CAREERS
════════════════════════════════ -->
<div class="industry-section">
  <div class="industry-section-inner">

    <div class="industry-header">
      <span class="section-label">Where Our Graduates Work</span>
      <h2>Industry Partners &amp; Career Pathways</h2>
      <p>Our graduates are sought after by leading organisations across Sri Lanka and internationally — from Fortune 500 companies to pioneering startups.</p>
    </div>

    <!-- Scrolling logo strip -->
    <div class="logo-slider-wrap">
      <div class="logo-track" id="logoTrack">
        <!-- Original set -->
        <div class="logo-card"><span>MAS Holdings</span></div>
        <div class="logo-card"><span>Brandix Lanka</span></div>
        <div class="logo-card"><span>Hayleys PLC</span></div>
        <div class="logo-card"><span>John Keells Holdings</span></div>
        <div class="logo-card"><span>Ceylon Electricity Board</span></div>
        <div class="logo-card"><span>Dialog Axiata</span></div>
        <div class="logo-card"><span>Loadstar (Pvt) Ltd</span></div>
        <div class="logo-card"><span>Samson Rope Technologies</span></div>
        <div class="logo-card"><span>Toyota Lanka</span></div>
        <div class="logo-card"><span>NWSDB</span></div>
        <div class="logo-card"><span>Boeing</span></div>
        <div class="logo-card"><span>Rolls-Royce</span></div>
        <div class="logo-card"><span>WSP Global</span></div>
        <div class="logo-card"><span>Arup</span></div>
        <!-- Duplicate set for seamless loop -->
        <div class="logo-card"><span>MAS Holdings</span></div>
        <div class="logo-card"><span>Brandix Lanka</span></div>
        <div class="logo-card"><span>Hayleys PLC</span></div>
        <div class="logo-card"><span>John Keells Holdings</span></div>
        <div class="logo-card"><span>Ceylon Electricity Board</span></div>
        <div class="logo-card"><span>Dialog Axiata</span></div>
        <div class="logo-card"><span>Loadstar (Pvt) Ltd</span></div>
        <div class="logo-card"><span>Samson Rope Technologies</span></div>
        <div class="logo-card"><span>Toyota Lanka</span></div>
        <div class="logo-card"><span>NWSDB</span></div>
        <div class="logo-card"><span>Boeing</span></div>
        <div class="logo-card"><span>Rolls-Royce</span></div>
        <div class="logo-card"><span>WSP Global</span></div>
        <div class="logo-card"><span>Arup</span></div>
      </div>
    </div>

    <!-- Career pathway cards -->
    <div class="career-grid">
      <div class="career-card">
        <span class="career-icon">🏭</span>
        <h4>Manufacturing &amp; Production</h4>
        <p>Process engineering, quality management, and production optimisation in Sri Lanka's leading manufacturing firms.</p>
      </div>
      <div class="career-card">
        <span class="career-icon">⚡</span>
        <h4>Energy &amp; Power</h4>
        <p>Design and operation of power generation systems, renewable energy projects, and utilities infrastructure.</p>
      </div>
      <div class="career-card">
        <span class="career-icon">🤖</span>
        <h4>Automation &amp; Robotics</h4>
        <p>Industrial automation, robotics integration, and smart manufacturing systems across diverse sectors.</p>
      </div>
      <div class="career-card">
        <span class="career-icon">✈️</span>
        <h4>Aerospace &amp; Defence</h4>
        <p>Structural analysis, propulsion systems, and precision engineering with global aerospace companies.</p>
      </div>
      <div class="career-card">
        <span class="career-icon">🔬</span>
        <h4>Research &amp; Academia</h4>
        <p>Postgraduate study and academic careers at leading universities in Sri Lanka and internationally.</p>
      </div>
      <div class="career-card">
        <span class="career-icon">💼</span>
        <h4>Consulting &amp; Project Management</h4>
        <p>Engineering consultancy, feasibility studies, and project management for infrastructure and industry.</p>
      </div>
      <div class="career-card">
        <span class="career-icon">🚗</span>
        <h4>Automotive Engineering</h4>
        <p>Vehicle design, testing, and manufacturing with international automotive OEMs and suppliers.</p>
      </div>
      <div class="career-card">
        <span class="career-icon">🌱</span>
        <h4>Sustainability &amp; Environment</h4>
        <p>Green engineering, environmental compliance, and sustainable infrastructure development.</p>
      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>

<!-- ════════════════════════════════
     JAVASCRIPT — Slideshow
════════════════════════════════ -->
<script>
  (function () {
    // --- SLIDER LOGIC ---
    const wrapper   = document.getElementById('slidesWrapper');
    const dots      = document.querySelectorAll('.dot');
    const slides    = document.querySelectorAll('.slide');
    const prevBtn   = document.getElementById('prevBtn');
    const nextBtn   = document.getElementById('nextBtn');
    let current     = 0;
    let autoTimer;

    // We check if wrapper exists so the script doesn't crash on pages without a slider
    if (wrapper && slides.length > 0) {
      function goTo(n) {
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = (n + slides.length) % slides.length;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
        wrapper.style.transform = `translateX(-${current * 100}%)`;
      }

      function startAuto() {
        autoTimer = setInterval(() => goTo(current + 1), 5500);
      }

      function resetAuto() {
        clearInterval(autoTimer);
        startAuto();
      }

      if (nextBtn) nextBtn.addEventListener('click', () => { goTo(current + 1); resetAuto(); });
      if (prevBtn) prevBtn.addEventListener('click', () => { goTo(current - 1); resetAuto(); });

      dots.forEach(dot => {
        dot.addEventListener('click', () => {
          goTo(parseInt(dot.dataset.index));
          resetAuto();
        });
      });

      startAuto();
    }

    // --- NAVIGATION MENU LOGIC (The part you just added) ---
    const menuToggle = document.getElementById('mobile-menu');
    const navWrapper = document.querySelector('.nav-menu-wrapper');

    if (menuToggle && navWrapper) {
      menuToggle.addEventListener('click', function() {
        navWrapper.classList.toggle('active');
      });
    }

    // --- COPYRIGHT YEAR ---
    const yearSpan = document.getElementById('copyrightYear');
    if (yearSpan) {
      yearSpan.textContent = new Date().getFullYear();
    }
  })();
</script>

<script>
  // Auto-open tab from URL hash  e.g. academic.html#postgraduate
  (function () {
    const hash = window.location.hash.replace('#', '');
    if (!hash) return;

    // Try main tabs first
    const mainBtn = document.querySelector('[data-tab="' + hash + '"]');
    if (mainBtn) {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
      mainBtn.classList.add('active');
      const panel = document.getElementById('tab-' + hash);
      if (panel) panel.classList.add('active');
      return;
    }

    // Try UG inner sub-tabs (academic page only)
    const ugBtn = document.querySelector('[data-ugtab="' + hash + '"]');
    if (ugBtn) {
      document.querySelectorAll('.ug-tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.ug-tab-panel').forEach(p => p.classList.remove('active'));
      ugBtn.classList.add('active');
      const panel = document.getElementById('ugtab-' + hash);
      if (panel) panel.classList.add('active');

      // Also make sure the Undergraduate main tab is active
      const ugMainBtn = document.querySelector('[data-tab="undergraduate"]');
      if (ugMainBtn) ugMainBtn.click();
    }
  })();
</script>

<script>
  // ── Animated stat counters ──
  function animateCounters() {
    document.querySelectorAll('.stat-counter-num').forEach(function (el) {
      var target = parseInt(el.getAttribute('data-target'), 10);
      var suffix = el.getAttribute('data-suffix') || '';
      var start  = 0;
      var duration = 1800;
      var step = target / (duration / 16);
      var current = start;

      var timer = setInterval(function () {
        current += step;
        if (current >= target) {
          current = target;
          clearInterval(timer);
        }
        el.textContent = Math.floor(current) + suffix;
      }, 16);
    });
  }

  // Trigger when stats section enters viewport
  var statsObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        animateCounters();
        statsObserver.disconnect();
      }
    });
  }, { threshold: 0.3 });

  var statsStrip = document.querySelector('.stats-strip');
  if (statsStrip) statsObserver.observe(statsStrip);
</script>

</body>
</html>