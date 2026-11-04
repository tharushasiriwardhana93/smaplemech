<?php 
  $page_title = "About Us"; 
  include 'header.php'; 
?>
 
 
<link rel="stylesheet" href="about.css" />
<!-- ════════════════════════════════
     PAGE BANNER
════════════════════════════════ -->
<div class="page-banner">
  <div class="breadcrumb">
    <a href="index.html">Home</a>
    <span>›</span>
    <span>About Us</span>
  </div>
  <h1>About the Department</h1>
  <div class="page-banner-line"></div>
</div>

<!-- ════════════════════════════════
     MAIN CONTENT
════════════════════════════════ -->
<main class="main-content">

  <!-- Tab Navigation -->
  <div class="about-tabs" id="aboutTabs">
    <button class="tab-btn active" data-tab="overview">Overview</button>
    <button class="tab-btn" data-tab="history">History</button>
    <button class="tab-btn" data-tab="vision">Vision &amp; Mission</button>
    <button class="tab-btn" data-tab="objectives">Objectives</button>
    <button class="tab-btn" data-tab="accreditation">Accreditation</button>
  </div>

  <!-- ── TAB: OVERVIEW ── -->
  <div class="tab-panel active" id="tab-overview">
    <div class="about-grid">

      <!-- Left: Main Content -->
      <div>
        <div class="section-heading">
          <div class="heading-accent"></div>
          <h2>Who We Are</h2>
          <div class="heading-rule"></div>
        </div>

        <p class="about-intro">
          The Department of Mechanical Engineering at the University of Peradeniya is one of 
          the oldest and most distinguished engineering departments in Sri Lanka, committed to 
          excellence in education, research, and service to society.
        </p>

        <p class="about-body">
          Established within the Faculty of Engineering, the Department offers a comprehensive 
          undergraduate programme leading to the Bachelor of Science and Engineering Honours 
          in Mechanical Engineering, alongside a range of postgraduate programmes at Masters 
          and Doctoral levels.
        </p>

        <p class="about-body">
          Our academic staff comprises highly qualified engineers and researchers with 
          expertise spanning a broad spectrum of mechanical engineering disciplines — from 
          thermodynamics and fluid mechanics to robotics, manufacturing technology, and 
          sustainable energy systems. The Department maintains state-of-the-art research 
          laboratories and actively collaborates with industry, government agencies, and 
          international institutions.
        </p>

        <p class="about-body">
          We pride ourselves on producing graduates who are technically proficient, 
          analytically sharp, and ethically grounded — engineers who are ready to lead 
          in a rapidly evolving world. Our alumni hold prominent positions in industry, 
          academia, and public service across Sri Lanka and internationally.
        </p>

        <!-- Key Stats -->
        <div class="section-heading" style="margin-top:40px;">
          <div class="heading-accent"></div>
          <h2>Department at a Glance</h2>
          <div class="heading-rule"></div>
        </div>

        <div class="stats-grid">
          <div class="stat-item">
            <span class="stat-number">50+</span>
            <span class="stat-label">Years of Excellence</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">30+</span>
            <span class="stat-label">Academic Staff</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">1700+</span>
            <span class="stat-label">Undergraduates</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">120+</span>
            <span class="stat-label">Postgraduates</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">12</span>
            <span class="stat-label">Research Labs</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">1000+</span>
            <span class="stat-label">Alumni Worldwide</span>
          </div>
        </div>
      </div>

      <!-- Right: Sidebar -->
      <aside class="about-sidebar">

        <div class="sidebar-card">
          <h3>Head of Department</h3>
          <p>
            <strong style="color:var(--maroon-dark);">Prof. Primal Fernando</strong><br>
            BSc Eng (Peradeniya), PhD #####<br>
            Professor in Mechanical Engineering
          </p>
          <p style="margin-top:10px; font-size:0.82rem; color:#777;">
            📞 +94 81 239 3631<br>
            ✉️ <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5dddad19bd8d0d6ddf5d0dbd29bc5d1db9bd4d69bd9de">[email&#160;protected]</a>
          </p>
        </div>



        <div class="sidebar-card">
          <h3>Location</h3>
          <p>
            Department of Mechanical Engineering<br>
            Faculty of Engineering<br>
            University of Peradeniya<br>
            Peradeniya 20400, Sri Lanka
          </p>
          <p style="margin-top:10px;">
              <a href="https://maps.app.goo.gl/C5HbB5PpxV4uw2qX7" target="_blank" rel="noopener noreferrer" style="font-size:0.82rem; color:var(--maroon); font-weight:600;">
                  → View on Map
              </a>
          </p>
        </div>

      </aside>
    </div>
  </div>

  <!-- ── TAB: HISTORY ── -->
  <div class="tab-panel" id="tab-history">
    <div class="about-grid">
      <div>
        <div class="section-heading">
          <div class="heading-accent"></div>
          <h2>Our History</h2>
          <div class="heading-rule"></div>
        </div>

        <p class="about-intro">
          From humble beginnings in the post-independence era to a nationally 
          recognised centre of engineering excellence — the journey of the 
          Department of Mechanical Engineering spans over seven decades.
        </p>

        <p class="about-body">
          The Department traces its origins to the founding of the Faculty of Engineering 
          at the University of Ceylon, Peradeniya in the early 1950s. Since then, it has 
          grown steadily in academic strength, research output, and international recognition.
        </p>

        <div class="timeline" style="margin-top:36px;">

          <div class="timeline-item animate-fade-up delay-1">
            <p class="timeline-year">1950</p>
            <h4 class="timeline-title">Foundation of the Faculty of Engineering</h4>
            <p class="timeline-text">The Faculty of Engineering is established at the University of Ceylon, Peradeniya. Mechanical Engineering is among the founding disciplines, offering a general engineering programme.</p>
          </div>

          <div class="timeline-item animate-fade-up delay-2">
            <p class="timeline-year">1966</p>
            <h4 class="timeline-title">Department of Mechanical Engineering Established</h4>
            <p class="timeline-text">The Department gains independent status within the Faculty. A dedicated four-year undergraduate degree programme in Mechanical Engineering is introduced.</p>
          </div>

          <div class="timeline-item animate-fade-up delay-3">
            <p class="timeline-year">1978</p>
            <h4 class="timeline-title">First Postgraduate Programme Launched</h4>
            <p class="timeline-text">The Department introduces its first MPhil programme, attracting students from across South Asia. Research activities expand significantly with new laboratory facilities.</p>
          </div>

          <div class="timeline-item animate-fade-up">
            <p class="timeline-year">1995</p>
            <h4 class="timeline-title">IESL Accreditation Achieved</h4>
            <p class="timeline-text">The undergraduate programme receives full accreditation from the Institution of Engineers, Sri Lanka (IESL), recognising the quality and rigour of the curriculum.</p>
          </div>

          <div class="timeline-item animate-fade-up">
            <p class="timeline-year">2008</p>
            <h4 class="timeline-title">Research Centres Established</h4>
            <p class="timeline-text">Specialised research centres in Energy Technology, Manufacturing Systems, and Robotics are established, catalysing collaborative industry–university research projects.</p>
          </div>

          <div class="timeline-item animate-fade-up">
            <p class="timeline-year">2018</p>
            <h4 class="timeline-title">International Collaborations Expanded</h4>
            <p class="timeline-text">MoUs signed with universities in Germany, Japan, and Australia, enabling staff and student exchange, joint research publications, and shared laboratory resources.</p>
          </div>

          <div class="timeline-item animate-fade-up">
            <p class="timeline-year">2024</p>
            <h4 class="timeline-title">New Engineering Complex Inaugurated</h4>
            <p class="timeline-text">A state-of-the-art engineering complex housing modern laboratories, a design studio, and a postgraduate research hub is officially inaugurated, marking a new chapter for the Department.</p>
          </div>

        </div>
      </div>

      <aside class="about-sidebar">
        <div class="sidebar-card">
          <h3>Key Milestones</h3>
          <ul style="display:flex;flex-direction:column;gap:12px;">
            <li style="font-size:0.87rem;color:#555;border-left:3px solid var(--gold);padding-left:12px;">First batch graduated: <strong>1954</strong></li>
            <li style="font-size:0.87rem;color:#555;border-left:3px solid var(--gold);padding-left:12px;">IESL Accreditation: <strong>1995</strong></li>
            <li style="font-size:0.87rem;color:#555;border-left:3px solid var(--gold);padding-left:12px;">5000th graduate: <strong>2019</strong></li>
            <li style="font-size:0.87rem;color:#555;border-left:3px solid var(--gold);padding-left:12px;">International MoUs: <strong>8 Universities</strong></li>
            <li style="font-size:0.87rem;color:#555;border-left:3px solid var(--gold);padding-left:12px;">PhD programmes: <strong>Since 2002</strong></li>
          </ul>
        </div>
        <div class="sidebar-card">
          <h3>Former Heads of Department</h3>
          <ul style="display:flex;flex-direction:column;gap:10px;">
            <li style="font-size:0.84rem;color:#555;">Prof. S. Wickramasinghe <span style="color:#aaa;">(1966–1974)</span></li>
            <li style="font-size:0.84rem;color:#555;">Prof. R. Perera <span style="color:#aaa;">(1975–1984)</span></li>
            <li style="font-size:0.84rem;color:#555;">Prof. K. Jayasinghe <span style="color:#aaa;">(1985–1996)</span></li>
            <li style="font-size:0.84rem;color:#555;">Prof. M. Fernando <span style="color:#aaa;">(1997–2008)</span></li>
            <li style="font-size:0.84rem;color:#555;">Prof. D. Attygalle <span style="color:#aaa;">(2009–2018)</span></li>
            <li style="font-size:0.84rem;color:#555;color:var(--maroon);font-weight:600;">Prof. A. Gunawardena <span style="color:#aaa;font-weight:400;">(2019–present)</span></li>
          </ul>
        </div>
      </aside>
    </div>
  </div>

  <!-- ── TAB: VISION & MISSION ── -->
  <div class="tab-panel" id="tab-vision">
    <div class="section-heading">
      <div class="heading-accent"></div>
      <h2>Vision &amp; Mission</h2>
      <div class="heading-rule"></div>
    </div>

    <div class="vm-grid">
      <div class="vm-card vision">
        <span class="vm-icon">🔭</span>
        <h3>Our Vision</h3>
        <p>
          To be a nationally and internationally recognised centre of excellence in 
          Mechanical Engineering education and research, producing innovative, ethical 
          and globally competent engineers who contribute to the sustainable development 
          of Sri Lanka and the world.
        </p>
      </div>
      <div class="vm-card mission">
        <span class="vm-icon">🎯</span>
        <h3>Our Mission</h3>
        <p>
          To provide a high-quality, industry-relevant mechanical engineering education 
          through rigorous academic programmes, cutting-edge research, and strong 
          partnerships with industry and society — nurturing graduates who are equipped 
          to solve real-world engineering challenges with creativity and integrity.
        </p>
      </div>
    </div>

    <div class="section-heading" style="margin-top:10px;">
      <div class="heading-accent"></div>
      <h2>Core Values</h2>
      <div class="heading-rule"></div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:20px;">
      <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:24px 20px;text-align:center;">
        <div style="font-size:2rem;margin-bottom:10px;">⚙️</div>
        <h4 style="font-family:'Oswald',sans-serif;font-size:0.85rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:8px;">Excellence</h4>
        <p style="font-size:0.85rem;color:#666;line-height:1.6;">Striving for the highest standards in teaching, research, and professional practice.</p>
      </div>
      <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:24px 20px;text-align:center;">
        <div style="font-size:2rem;margin-bottom:10px;">🤝</div>
        <h4 style="font-family:'Oswald',sans-serif;font-size:0.85rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:8px;">Integrity</h4>
        <p style="font-size:0.85rem;color:#666;line-height:1.6;">Upholding honesty, transparency, and ethical conduct in all our endeavours.</p>
      </div>
      <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:24px 20px;text-align:center;">
        <div style="font-size:2rem;margin-bottom:10px;">💡</div>
        <h4 style="font-family:'Oswald',sans-serif;font-size:0.85rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:8px;">Innovation</h4>
        <p style="font-size:0.85rem;color:#666;line-height:1.6;">Fostering creativity and a culture of inquiry, discovery, and problem-solving.</p>
      </div>
      <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:24px 20px;text-align:center;">
        <div style="font-size:2rem;margin-bottom:10px;">🌱</div>
        <h4 style="font-family:'Oswald',sans-serif;font-size:0.85rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:8px;">Sustainability</h4>
        <p style="font-size:0.85rem;color:#666;line-height:1.6;">Engineering solutions that respect people, the environment, and future generations.</p>
      </div>
      <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:24px 20px;text-align:center;">
        <div style="font-size:2rem;margin-bottom:10px;">🌍</div>
        <h4 style="font-family:'Oswald',sans-serif;font-size:0.85rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:8px;">Inclusivity</h4>
        <p style="font-size:0.85rem;color:#666;line-height:1.6;">Welcoming diversity and ensuring equal opportunity for all students and staff.</p>
      </div>
      <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:24px 20px;text-align:center;">
        <div style="font-size:2rem;margin-bottom:10px;">🏭</div>
        <h4 style="font-family:'Oswald',sans-serif;font-size:0.85rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:8px;">Industry Link</h4>
        <p style="font-size:0.85rem;color:#666;line-height:1.6;">Building strong bridges between academia and industry for mutual benefit.</p>
      </div>
    </div>
  </div>

  <!-- ── TAB: OBJECTIVES ── -->
  <div class="tab-panel" id="tab-objectives">
    <div class="section-heading">
      <div class="heading-accent"></div>
      <h2>Programme Objectives</h2>
      <div class="heading-rule"></div>
    </div>

    <p class="about-intro">
      The undergraduate programme in Mechanical Engineering is designed to produce 
      graduates who meet the highest standards of the engineering profession.
    </p>

    <p class="about-body" style="margin-bottom:32px;">
      The Programme Educational Objectives (PEOs) describe the career and professional 
      accomplishments that the programme is preparing graduates to achieve within a few 
      years of graduation.
    </p>

    <div class="objectives-list">
      <div class="objective-item animate-fade-up delay-1">
        <div class="objective-num">01</div>
        <p class="objective-text">Apply fundamental knowledge of mathematics, science, and engineering to analyse, design and develop solutions to mechanical engineering problems in industry and beyond.</p>
      </div>
      <div class="objective-item animate-fade-up delay-2">
        <div class="objective-num">02</div>
        <p class="objective-text">Demonstrate proficiency in the use of modern engineering tools, software, and experimental techniques relevant to the mechanical engineering discipline.</p>
      </div>
      <div class="objective-item animate-fade-up delay-3">
        <div class="objective-num">03</div>
        <p class="objective-text">Function effectively as individuals and as members or leaders of diverse, multi-disciplinary teams engaged in engineering practice or research.</p>
      </div>
      <div class="objective-item animate-fade-up">
        <div class="objective-num">04</div>
        <p class="objective-text">Communicate engineering concepts, results, and proposals clearly and effectively in both written and oral forms to technical and non-technical audiences.</p>
      </div>
      <div class="objective-item animate-fade-up">
        <div class="objective-num">05</div>
        <p class="objective-text">Recognise ethical responsibilities and the impact of engineering decisions on society, the economy, and the environment, and act accordingly with professional integrity.</p>
      </div>
      <div class="objective-item animate-fade-up">
        <div class="objective-num">06</div>
        <p class="objective-text">Engage in lifelong learning and professional development to remain current with advances in technology, research, and engineering practice throughout their careers.</p>
      </div>
      <div class="objective-item animate-fade-up">
        <div class="objective-num">07</div>
        <p class="objective-text">Contribute to the national development of Sri Lanka through innovative engineering solutions that address real-world challenges in energy, manufacturing, infrastructure, and sustainability.</p>
      </div>
    </div>
  </div>

  <!-- ── TAB: ACCREDITATION ── -->
  <div class="tab-panel" id="tab-accreditation">
    <div class="section-heading">
      <div class="heading-accent"></div>
      <h2>Accreditation &amp; Recognition</h2>
      <div class="heading-rule"></div>
    </div>

    <p class="about-intro">
      The Department's undergraduate programme is fully accredited and 
      internationally recognised, ensuring that our graduates meet global 
      professional engineering standards.
    </p>

    <p class="about-body" style="margin-bottom:32px;">
      Accreditation reflects the quality of our curriculum, faculty, facilities, 
      and student outcomes. Our graduates are eligible for professional membership 
      of recognised engineering bodies and are entitled to work as engineers in 
      accrediting countries under relevant mutual recognition agreements.
    </p>

    <div class="accreditation-row" style="margin-bottom:40px;">
      <div class="accreditation-badge">
        IESL
        <span>Institution of Engineers, Sri Lanka</span>
      </div>
      <div class="accreditation-badge">
        International Acceptance
        <span>Washington Accord Signatory</span>
      </div>
      <div class="accreditation-badge">
        IET
        <span>Institution of Engineering &amp; Technology (UK)</span>
      </div>

      <div class="accreditation-badge">
        ASEAN MRA
        <span>ASEAN Mutual Recognition Arrangement</span>
      </div>
    </div>

    <div class="section-heading">
      <div class="heading-accent"></div>
      <h2>Rankings &amp; Awards</h2>
      <div class="heading-rule"></div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
      <div style="background:var(--off-white);border-left:4px solid var(--maroon);padding:20px 24px;">
        <h4 style="font-family:'Playfair Display',serif;font-size:1rem;color:var(--maroon-dark);margin-bottom:8px;">Top Engineering Faculty in Sri Lanka</h4>
        <p style="font-size:0.86rem;color:#666;line-height:1.6;">Consistently ranked among the top engineering faculties in Sri Lanka by the University Grants Commission (UGC).</p>
      </div>
      <div style="background:var(--off-white);border-left:4px solid var(--maroon);padding:20px 24px;">
        <h4 style="font-family:'Playfair Display',serif;font-size:1rem;color:var(--maroon-dark);margin-bottom:8px;">National Research Awards</h4>
        <p style="font-size:0.86rem;color:#666;line-height:1.6;">Faculty members and students have received multiple national and international awards for research excellence in engineering and applied sciences.</p>
      </div>
      <div style="background:var(--off-white);border-left:4px solid var(--maroon);padding:20px 24px;">
        <h4 style="font-family:'Playfair Display',serif;font-size:1rem;color:var(--maroon-dark);margin-bottom:8px;">Washington Accord Member</h4>
        <p style="font-size:0.86rem;color:#666;line-height:1.6;">Sri Lanka is a signatory to the Washington Accord, granting graduates from accredited programmes international recognition across member countries.</p>
      </div>
      <div style="background:var(--off-white);border-left:4px solid var(--maroon);padding:20px 24px;">
        <h4 style="font-family:'Playfair Display',serif;font-size:1rem;color:var(--maroon-dark);margin-bottom:8px;">Industry Partnership Awards</h4>
        <p style="font-size:0.86rem;color:#666;line-height:1.6;">Recognised by the Sri Lanka Chamber of Commerce for outstanding contributions to industry through collaborative research and technical consultancy.</p>
      </div>
    </div>
  </div>

</main>

<?php include 'footer.php'; ?>

<!-- ════════════════════════════════
     JAVASCRIPT — Tabs
════════════════════════════════ -->
<script>
  // ── Tab switching (always works, hash-independent) ──
  const tabBtns   = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  function switchTab(name) {
    tabBtns.forEach(b => b.classList.remove('active'));
    tabPanels.forEach(p => p.classList.remove('active'));
    const btn = document.querySelector('[data-tab="' + name + '"]');
    if (btn) btn.classList.add('active');
    const panel = document.getElementById('tab-' + name);
    if (panel) panel.classList.add('active');
  }

  // Wire up tab buttons
  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      switchTab(btn.dataset.tab);
      // Clear hash so it doesn't interfere with future clicks
      history.replaceState(null, '', window.location.pathname);
    });
  });

  // ── On page load: open tab from URL hash ──
  (function () {
    const hash = window.location.hash.replace('#', '');
    if (hash) {
      switchTab(hash);
      // Clear the hash immediately so tabs work freely
      history.replaceState(null, '', window.location.pathname);
    }
  })();

  // Copyright year
  document.getElementById('copyrightYear').textContent = new Date().getFullYear();
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.getElementById('mobile-menu');
        const navWrapper = document.querySelector('.nav-menu-wrapper');

        menuToggle.addEventListener('click', () => {
            // Toggles the visibility of the menu
            navWrapper.classList.toggle('active');
            
            // Optional: Animation for the 3 lines
            menuToggle.classList.toggle('is-active');
        });
    });
</script>

<script>
  // ── Tab switching ──
  function switchTab(name) {
    // Main tabs
    const btn = document.querySelector('[data-tab="' + name + '"]');
    if (btn) {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const panel = document.getElementById('tab-' + name);
      if (panel) panel.classList.add('active');
      return true;
    }
    return false;
  }

  // Wire tab buttons
  document.querySelectorAll('.tab-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      switchTab(this.dataset.tab);
      // Update hash without reloading
      history.replaceState(null, '', '#' + this.dataset.tab);
    });
  });

  // ── Handle hash — runs on load AND every time hash changes ──
  function handleHash() {
    const hash = window.location.hash.replace('#', '');
    if (!hash) return;
    switchTab(hash);
  }

  // Run on page load
  handleHash();

  // Run whenever the hash changes (e.g. dropdown click while already on this page)
  window.addEventListener('hashchange', handleHash);
</script>


</body>
</html>