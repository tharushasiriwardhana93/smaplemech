<?php 
  $page_title = "People"; 
  include 'header.php'; 
  include 'staff_data.php'; 
?>

<link rel="stylesheet" href="people.css">

<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="breadcrumb">
    <a href="index.html">Home</a><span>›</span><span>People</span>
  </div>
  <h1>Our People</h1>
  <div class="page-banner-line"></div>
</div>

<!-- MAIN -->
<main class="main-content">

  <div class="about-tabs">
    <button class="tab-btn active" data-tab="academic">Academic Staff</button>
    <button class="tab-btn" data-tab="nonacademic">Non-Academic Staff</button>
    <button class="tab-btn" data-tab="temporary">Temporary Staff</button>
    <button class="tab-btn" data-tab="directory">Directory</button>
    <button class="tab-btn" data-tab="vacancy">Vacancy</button>
  </div>

  <!-- ── ACADEMIC STAFF ── -->
  <div class="tab-panel active" id="tab-academic">

    <div class="hod-card">
      <img src="images/academic/Pro.Primal.jpg" class="hod-photo-placeholder" alt="Head of Department">
      <div>
        <p class="hod-label">Head of Department</p>
        <h2 class="hod-name">Prof. Primal Fernando</h2>
        <p class="hod-title">Professor in Mechanical Engineering &nbsp;·&nbsp; BSc Eng (Peradeniya), PhD ####</p>
        <p class="hod-bio">Prof. Fernando leads the Department's academic and research agenda with over 25 years of experience in thermal engineering and sustainable energy systems. He has published extensively in international journals and has led several industry-funded research projects.</p>
        <div class="hod-contact">
          <a href="mailto:hod.mech@eng.pdn.ac.lk">✉ Email</a>
          <a href="#">📄 Profile</a>
          <a href="#">🔬 Research</a>
          <a href="#">📞 Ext. 3631</a>
        </div>
      </div>
    </div>

    <div class="filter-bar">
      <input type="text" class="search-input" id="staffSearch" placeholder="Search by name or specialisation…" oninput="filterStaff()" />
      <select class="filter-select" id="rankFilter" onchange="filterStaff()">
        <option value="">All Ranks</option>
        <option value="Professor">Professor</option>
        <option value="Senior Lecturer">Senior Lecturer</option>
        <option value="Lecturer">Lecturer</option>
      </select>
      <span class="filter-count" id="staffCount">Showing 12 staff</span>
    </div>

<p class="sub-heading">Professors</p>
<div class="staff-grid">
  <?php foreach ($professors as $prof): ?>
    <div class="staff-card" 
         data-name="<?php echo strtolower($prof['name']); ?>" 
         data-rank="Professor" 
         data-spec="<?php echo strtolower($prof['specialization']); ?>">
<div class="staff-photo-wrap">
  <div class="staff-avatar">
    <?php if (!empty($prof['image'])): ?>
      <img src="<?php echo $prof['image']; ?>" alt="<?php echo $prof['name']; ?>">
    <?php else: ?>
      <div class="avatar-initials"><?php echo $prof['initials']; ?></div>
    <?php endif; ?>
  </div>
</div>
      <div class="staff-body">
        <p class="staff-title">Professor</p>
        <h3 class="staff-name"><?php echo $prof['name']; ?></h3>
        <p class="staff-spec"><?php echo $prof['specialization']; ?></p>
        <div class="staff-links">
          <a href="<?php echo $prof['profile_link']; ?>" class="staff-link">Profile</a>
          <a href="<?php echo $prof['research_link']; ?>" class="staff-link">Research</a>
          <a href="<?php echo $prof['email']; ?>" class="staff-link">Email</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<p class="sub-heading">Senior Lecturers</p>
<div class="staff-grid">
  <?php foreach ($senior_lecturers as $sl): ?>
    <div class="staff-card" 
         data-name="<?php echo strtolower($sl['name']); ?>" 
         data-rank="Senior Lecturer" 
         data-spec="<?php echo strtolower($sl['specialization']); ?>">
    <div class="staff-photo-wrap">
      <div class="staff-avatar">
        <?php if (!empty($sl['image'])): ?>
          <img src="<?php echo $sl['image']; ?>" alt="<?php echo $sl['name']; ?>">
        <?php else: ?>
          <div class="avatar-initials"><?php echo $sl['initials']; ?></div>
        <?php endif; ?>
      </div>
    </div>
      <div class="staff-body">
        <p class="staff-title">Senior Lecturer</p>
        <h3 class="staff-name"><?php echo $sl['name']; ?></h3>
        <p class="staff-spec"><?php echo $sl['specialization']; ?></p>
        <div class="staff-links">
          <a href="<?php echo $sl['profile_link']; ?>" class="staff-link">Profile</a>
          <a href="<?php echo $sl['research_link']; ?>" class="staff-link">Research</a>
          <a href="<?php echo $sl['email']; ?>" class="staff-link">Email</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<p class="sub-heading">Lecturers</p>
  <div class="staff-grid">
    <?php foreach ($lecturers as $lec): ?>
      <div class="staff-card" 
          data-name="<?php echo strtolower($lec['name']); ?>" 
          data-rank="Lecturer" 
          data-spec="<?php echo strtolower($lec['specialization']); ?>">
        
      <div class="staff-photo-wrap">
        <div class="staff-avatar">
          <?php if (!empty($lec['image'])): ?>
            <img src="<?php echo $lec['image']; ?>" alt="<?php echo $lec['name']; ?>">
          <?php else: ?>
            <div class="avatar-initials"><?php echo $lec['initials']; ?></div>
          <?php endif; ?>
        </div>
      </div>

        <div class="staff-body">
          <p class="staff-title"><?php echo $lec['rank']; ?></p>
          <h3 class="staff-name"><?php echo $lec['name']; ?></h3>
          <p class="staff-spec"><?php echo $lec['specialization']; ?></p>
          
          <div class="staff-links">
            <a href="<?php echo $lec['profile_link']; ?>" class="staff-link">Profile</a>
            
            <?php if (isset($lec['has_research']) && $lec['has_research'] === true): ?>
              <a href="#" class="staff-link">Research</a>
            <?php endif; ?>
            
            <a href="<?php echo $lec['email']; ?>" class="staff-link">Email</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

    <div id="noResults" style="display:none;text-align:center;padding:40px;color:#888;font-family:'Oswald',sans-serif;letter-spacing:0.1em;text-transform:uppercase;font-size:0.88rem;">
      No staff found matching your search.
    </div>

  </div>

  <!-- ── NON-ACADEMIC STAFF ── -->
  <div class="tab-panel" id="tab-nonacademic">
    <div class="section-heading"><div class="heading-accent"></div><h2>Non-Academic Staff</h2><div class="heading-rule"></div></div>
    <p style="font-size:0.95rem;color:#555;line-height:1.7;margin-bottom:28px;">Our non-academic staff provide essential administrative, technical, and support services that keep the Department running smoothly.</p>

      <p class="sub-heading">Administrative Staff</p>
      <table class="staff-table">
        <thead><tr><th>Name</th><th>Designation</th><th>Division</th><th>Extension</th><th>Email</th></tr></thead>
        <tbody>
          <?php foreach ($admin_staff as $staff): ?>
            <tr>
              <td><?php echo $staff['name']; ?></td>
              <td><?php echo $staff['designation']; ?></td>
              <td><span class="dept-badge"><?php echo $staff['division']; ?></span></td>
              <td><?php echo $staff['ext']; ?></td>
              <td><?php echo ($staff['email'] !== '—') ? '<a href="mailto:'.$staff['email'].'">'.$staff['email'].'</a>' : '—'; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <p class="sub-heading">Technical Staff</p>
      <table class="staff-table">
        <thead><tr><th>Name</th><th>Designation</th><th>Laboratory</th><th>Extension</th><th>Email</th></tr></thead>
        <tbody>
          <?php foreach ($technical_staff as $tech): ?>
            <tr>
              <td><?php echo $tech['name']; ?></td>
              <td><?php echo $tech['designation']; ?></td>
              <td><span class="dept-badge"><?php echo $tech['lab']; ?></span></td>
              <td><?php echo $tech['ext']; ?></td>
              <td><a href="mailto:<?php echo $tech['email']; ?>"><?php echo $tech['email']; ?></a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>

  <!-- ── TEMPORARY STAFF ── -->
  <div class="tab-panel" id="tab-temporary">
    <div class="section-heading"><div class="heading-accent"></div><h2>Temporary &amp; Visiting Staff</h2><div class="heading-rule"></div></div>
    <p style="font-size:0.95rem;color:#555;line-height:1.7;margin-bottom:28px;">The Department appoints visiting lecturers, industry practitioners, and temporary instructors to bring real-world expertise into the classroom.</p>

    <p class="sub-heading">Visiting Lecturers — 2025</p>
    <table class="staff-table">
      <thead><tr><th>Name</th><th>Designation</th><th>Module(s) Taught</th><th>Period</th></tr></thead>
      <tbody>
        <?php foreach ($visiting_staff as $v_staff): ?>
          <tr>
            <td><?php echo $v_staff['name']; ?></td>
            <td><?php echo $v_staff['designation']; ?></td>
            <td><?php echo $v_staff['modules']; ?></td>
            <td><?php echo $v_staff['period']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <p class="sub-heading">Temporary Instructors</p>
    <table class="staff-table">
      <thead><tr><th>Name</th><th>Role</th><th>Assignment</th><th>Period</th></tr></thead>
      <tbody>
        <?php foreach ($temp_instructors as $instructor): ?>
          <tr>
            <td><?php echo $instructor['name']; ?></td>
            <td><?php echo $instructor['role']; ?></td>
            <td><?php echo $instructor['assignment']; ?></td>
            <td><?php echo $instructor['period']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- ── DIRECTORY ── -->
<div class="tab-panel" id="tab-directory">
    <div class="section-heading"><div class="heading-accent"></div><h2>Staff Directory</h2><div class="heading-rule"></div></div>

    <p class="sub-heading">Key Contacts</p>
    <div class="directory-grid">
      <?php foreach ($key_contacts as $contact): ?>
        <div class="dir-card">
          <p class="dir-name"><?php echo $contact['title']; ?></p>
          <p class="dir-role"><?php echo $contact['role']; ?></p>
          <p class="dir-contact">
            📞 <?php echo $contact['phone']; ?><br>
            ✉ <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="background:var(--off-white); border:1px solid #ddd; padding:18px 24px; margin-top:28px;">
      <p style="font-size:0.88rem; color:#666; line-height:1.7;">
        <strong style="color:var(--maroon-dark);">Main Line:</strong> +94 81 239 3631 &nbsp;|&nbsp;
        <strong style="color:var(--maroon-dark);">Email:</strong> mech@eng.pdn.ac.lk &nbsp;|&nbsp;
        <strong style="color:var(--maroon-dark);">Fax:</strong> +94 81 238 9150
      </p>
    </div>
  </div><!-- /tab-directory -->

  <!-- ── VACANCY ── -->
  <div class="tab-panel" id="tab-vacancy">
    <div class="section-heading">
      <div class="heading-accent"></div>
      <h2>Current Vacancies</h2>
      <div class="heading-rule"></div>
    </div>

    <p class="sub-heading">Open Positions</p>

    <?php if (!empty($vacancies)): ?>
      <?php foreach ($vacancies as $job): ?>
        <div class="vacancy-card" <?php echo !$job['is_open'] ? 'style="opacity:0.6;"' : ''; ?>>
          <div>
            <span class="vacancy-tag <?php echo $job['type_class']; ?>"><?php echo $job['type_tag']; ?></span>
            <span class="vacancy-tag <?php echo $job['status_class']; ?>"><?php echo $job['status_tag']; ?></span>
            <h3 class="vacancy-title"><?php echo $job['title']; ?></h3>
            <p class="vacancy-meta"><?php echo $job['description']; ?></p>
            <p class="vacancy-deadline">Closing Date: <strong><?php echo $job['closing_date']; ?></strong></p>
          </div>
          <?php if ($job['is_open']): ?>
            <a href="<?php echo $job['apply_link']; ?>" class="btn-apply">Apply Now</a>
          <?php else: ?>
            <span class="btn-closed">Closed</span>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p style="font-size:0.95rem;color:#777;padding:20px 0;">No current vacancies at the moment.</p>
    <?php endif; ?>

    <div style="background:var(--off-white);border:1px solid #ddd;border-left:4px solid var(--maroon);padding:20px 24px;margin-top:28px;">
      <p style="font-size:0.9rem;color:#555;line-height:1.7;">
        <strong style="color:var(--maroon-dark);">General Applications:</strong>
        Send your CV and expression of interest to
        <a href="mailto:hod.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">hod.mech@eng.pdn.ac.lk</a>.
      </p>
    </div>
  </div><!-- /tab-vacancy -->

</main>

<?php include 'footer.php'; ?>

<script>
  const tabBtns   = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  function switchTab(name) {
    tabBtns.forEach(b => b.classList.remove('active'));
    tabPanels.forEach(p => p.classList.remove('active'));
    const btn = document.querySelector('[data-tab="' + name + '"]');
    if (btn) btn.classList.add('active');
    const panel = document.getElementById('tab-' + name);
    if (panel) panel.classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      switchTab(btn.dataset.tab);
      history.replaceState(null, '', '#' + btn.dataset.tab);
    });
  });

  function filterStaff() {
    const q     = document.getElementById('staffSearch').value.toLowerCase();
    const rank  = document.getElementById('rankFilter').value;
    const cards = document.querySelectorAll('.staff-card');
    let visible = 0;
    cards.forEach(card => {
      const name  = (card.dataset.name || '').toLowerCase();
      const spec  = (card.dataset.spec || '').toLowerCase();
      const cRank = card.dataset.rank || '';
      const matchQ    = !q    || name.includes(q) || spec.includes(q);
      const matchRank = !rank || cRank.includes(rank);
      if (matchQ && matchRank) { card.style.display = ''; visible++; }
      else                     { card.style.display = 'none'; }
    });
    const countEl = document.getElementById('staffCount');
    if (countEl) countEl.textContent = 'Showing ' + visible + ' staff';
    const noRes = document.getElementById('noResults');
    if (noRes) noRes.style.display = visible === 0 ? 'block' : 'none';
  }

  document.getElementById('copyrightYear').textContent = new Date().getFullYear();

  // ── Handle hash on load and on every hashchange ──
  function handleHash() {
    const hash = window.location.hash.replace('#', '');
    if (hash) switchTab(hash);
  }
  handleHash();
  window.addEventListener('hashchange', handleHash);
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.getElementById('mobile-menu');
        const navWrapper = document.querySelector('.nav-menu-wrapper');
        menuToggle.addEventListener('click', () => {
            navWrapper.classList.toggle('active');
            menuToggle.classList.toggle('is-active');
        });
    });
</script>
</body>
</html>


