<?php 
  $page_title = "MES"; 
  include 'header.php'; 
  include 'mes_data.php'; 
?>
<link rel="stylesheet" href="life.css">

<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="breadcrumb"><a href="index.html">Home</a><span>›</span><span>Life at ME</span></div>
  <h1>MES</h1>
  <div class="page-banner-line"></div>
</div>

<main class="main-content">
    <!-- MES Hero -->
    <div class="mes-hero">
      <div class="mes-logo-block">
        <div class="mes-logo-circle"><span class="mes-logo-text">MES</span></div>
        <p class="mes-logo-sub">Mechanical Engineering Society<br>University of Peradeniya</p>
      </div>
      <div class="mes-content">
        <p class="mes-content-label">Student Society</p>
        <h2>Mechanical Engineering Society</h2>
        <p>The Mechanical Engineering Society (MES) is the official student society of the Department of Mechanical Engineering. Founded by students, for students, MES creates a vibrant community that enriches life at the Department beyond the lecture hall.</p>
        <p>From technical workshops and industrial visits to sports events, cultural activities, and community service, MES is at the heart of everything that makes student life at ME memorable.</p>
        <!--  <a href="#" class="btn-register">Join MES →</a>   -->
      </div>
    </div>


        <!-- MES Executive -->
<div class="section-heading"><div class="heading-accent"></div><h2>Executive Committee 2025</h2><div class="heading-rule"></div></div>

<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-bottom:40px;">
  <?php foreach ($executive_committee as $member): ?>
    <div style="background:var(--white);border:1px solid #e4dcdc;border-top:4px solid var(--maroon);padding:20px;text-align:center;">
      
      <div style="width:110px; height:110px; border-radius:6px; background:linear-gradient(135deg,var(--maroon),var(--maroon-dark)); display:flex; align-items:center; justify-content:center; margin:0 auto 12px; overflow:hidden; border:2px solid var(--gold-light);">
          <?php if (!empty($member['photo'])): ?>
              <img src="<?php echo $member['photo']; ?>" alt="<?php echo $member['name']; ?>" style="width:100%; height:100%; object-fit:cover;">
          <?php else: ?>
              <span style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:var(--gold-light);">
                  <?php echo $member['initials']; ?>
              </span>
          <?php endif; ?>
      </div>

      <p style="font-family:'Playfair Display',serif;font-size:0.95rem;font-weight:700;color:var(--maroon-dark);margin-bottom:4px;">
        <?php echo $member['name']; ?>
      </p>
      <p style="font-family:'Oswald',sans-serif;font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);">
        <?php echo $member['role']; ?>
      </p>
    </div>
  <?php endforeach; ?>
</div>

    <!-- Activities -->
    <div class="section-heading"><div class="heading-accent"></div><h2>What We Do</h2><div class="heading-rule"></div></div>

    <div class="mes-activities">
      <div class="mes-activity-card">
        <span class="mes-act-icon">🔧</span>
        <h4>Technical Workshops</h4>
        <p>Hands-on workshops on CAD software, 3D printing, Arduino, welding, and other practical engineering skills not covered in the formal curriculum.</p>
      </div>
      <div class="mes-activity-card">
        <span class="mes-act-icon">🏭</span>
        <h4>Industrial Visits</h4>
        <p>Organised visits to leading manufacturing plants, power stations, and engineering firms, connecting students with real-world industry practice.</p>
      </div>
      <div class="mes-activity-card">
        <span class="mes-act-icon">🏆</span>
        <h4>Competitions</h4>
        <p>Organising and participating in national and international engineering competitions — robotics, design challenges, and hackathons.</p>
      </div>
      <div class="mes-activity-card">
        <span class="mes-act-icon">⚽</span>
        <h4>Sports &amp; Recreation</h4>
        <p>Annual sports days, inter-batch tournaments, and friendly matches fostering teamwork, sportsmanship, and a healthy work-life balance.</p>
      </div>
      <div class="mes-activity-card">
        <span class="mes-act-icon">🎭</span>
        <h4>Cultural Events</h4>
        <p>The annual ME Night cultural show, fresher's welcome, and graduation celebrations that create lasting memories for students and staff.</p>
      </div>
      <div class="mes-activity-card">
        <span class="mes-act-icon">🌱</span>
        <h4>Community Service</h4>
        <p>Social responsibility projects including school STEM outreach, environmental initiatives, and engineering support for underserved communities.</p>
      </div>
    </div>



    <!-- Contact MES -->
    <div style="background:var(--off-white);border:1px solid #e0dada;border-left:4px solid var(--gold);padding:24px 28px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:20px;">
      <div>
        <h4 style="font-family:'Oswald',sans-serif;font-size:0.8rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:6px;">Get Involved with MES</h4>
        <p style="font-size:0.88rem;color:#555;">All students of the Department are automatically members of MES. Contact us to get involved in committees and events.</p>
        <p style="font-size:0.86rem;color:#666;margin-top:6px;">✉️ <a href="mailto:mes@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">mes@eng.pdn.ac.lk</a> &nbsp;|&nbsp; 📘 facebook.com/MES.Peradeniya</p>
      </div>
      <a href="#" class="btn-register" style="white-space:nowrap;">Contact MES →</a>
    </div>

  </div><!-- /tab-mes -->
</main>
<?php include 'footer.php'; ?>


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



</script>
</body>
</html>
