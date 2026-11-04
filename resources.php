<?php 
  $page_title = "Resources"; 
  include 'header.php'; 
  include 'resources_data.php'; 
?>
<link rel="stylesheet" href="resources.css">

<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="breadcrumb"><a href="index.html">Home</a><span>›</span><span>Resources</span></div>
  <h1>Resources</h1>
  <div class="page-banner-line"></div>
</div>

<!-- MAIN -->
<main class="main-content">

  <!-- Publication Stats -->
<div class="pub-stats">
    <?php foreach ($research_stats as $stat): ?>
        <div class="pub-stat-box">
            <span class="pub-stat-num"><?php echo $stat['num']; ?></span>
            <span class="pub-stat-lbl"><?php echo $stat['label']; ?></span>
        </div>
    <?php endforeach; ?>
</div>

  <!-- Tabs -->
  <div class="about-tabs">
    <button class="tab-btn active" data-tab="journals">Journal Articles</button>
    <button class="tab-btn" data-tab="conference">Conference Articles</button>
    <button class="tab-btn" data-tab="books">Magazines / Books</button>
    <button class="tab-btn" data-tab="bulletin">Research Bulletin</button>
  </div>

  <!-- ══ JOURNAL ARTICLES ══ -->
  <div class="tab-panel active" id="tab-journals">
    <div class="resources-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Journal Articles</h2><div class="heading-rule"></div></div>
        <p class="about-intro">Peer-reviewed journal publications by academic staff and postgraduate researchers of the Department.</p>

        <div class="filter-bar">
          <input class="search-input" type="text" id="journalSearch" placeholder="Search by title, author or keyword…" oninput="filterPubs('journal')" />
          <select class="filter-select" id="journalYear" onchange="filterPubs('journal')">
            <option value="">All Years</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
          </select>
          <select class="filter-select" id="journalArea" onchange="filterPubs('journal')">
            <option value="">All Areas</option>
            <option value="energy">Energy</option>
            <option value="fluid">Fluid Mechanics</option>
            <option value="manufacturing">Manufacturing</option>
            <option value="materials">Materials</option>
            <option value="robotics">Robotics</option>
          </select>
          <span class="result-count" id="journalCount"></span>
        </div>

        <div id="journalList">
            <?php foreach ($journal_articles as $pub): ?>
                <div class="pub-card" data-year="<?php echo $pub['year']; ?>" data-area="<?php echo strtolower($pub['category']); ?>">
                    <div class="pub-meta">
                        <span class="pub-year"><?php echo $pub['year']; ?></span>
                        <span class="pub-type"><?php echo $pub['category']; ?></span>
                    </div>
                    <p class="pub-title"><?php echo $pub['title']; ?></p>
                    <p class="pub-authors"><?php echo $pub['authors']; ?></p>
                    <p class="pub-journal"><?php echo $pub['journal']; ?></p>
                    <div class="pub-links">
                        <a href="<?php echo $pub['doi']; ?>" class="pub-link">DOI</a>
                        <a href="<?php echo $pub['pdf']; ?>" class="pub-link">PDF</a>
                        <a href="<?php echo $pub['abstract']; ?>" class="pub-link">Abstract</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="no-results" id="journalNoResults">No publications found matching your search.</p>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Publication Links</h3>
          <a href="#" class="sidebar-link">→ Google Scholar Profile</a>
          <a href="#" class="sidebar-link">→ ResearchGate Page</a>
          <a href="#" class="sidebar-link">→ Scopus Author List</a>
          <a href="#" class="sidebar-link">→ Web of Science</a>
          <a href="#" class="sidebar-link">→ ORCID Directory</a>
        </div>
        <div class="sidebar-card">
          <h3>Top Journals</h3>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">Renewable &amp; Sustainable Energy Reviews</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">Journal of Manufacturing Systems</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">Composites Part B: Engineering</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">International Journal of Heat &amp; Fluid Flow</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">IEEE Trans. on Neural Systems &amp; Rehabilitation</div>
          </div>
        </div>
        <div class="sidebar-card">
          <h3>Submit / Collaborate</h3>
          <p>Interested in co-authoring or citing our work? Contact the relevant researcher directly.</p>
          <a href="people.php" class="sidebar-link">→ View Academic Staff</a>
          <a href="research.php#areas" class="sidebar-link">→ Research Areas</a>
        </div>
      </aside>
    </div>
  </div>

  <!-- ══ CONFERENCE ARTICLES ══ -->
  <div class="tab-panel" id="tab-conference">
    <div class="resources-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Conference Articles</h2><div class="heading-rule"></div></div>
        <p class="about-intro">Papers presented at national and international engineering conferences by the Department's academic staff and postgraduate students.</p>

        <div class="filter-bar">
          <input class="search-input" type="text" id="confSearch" placeholder="Search by title or author…" oninput="filterPubs('conf')" />
          <select class="filter-select" id="confYear" onchange="filterPubs('conf')">
            <option value="">All Years</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
          </select>
          <span class="result-count" id="confCount"></span>
        </div>

          <div id="confList">
              <?php foreach ($conference_papers as $conf): ?>
                  <div class="pub-card" data-year="<?php echo $conf['year']; ?>">
                      <div class="pub-meta">
                          <span class="pub-year"><?php echo $conf['year']; ?></span>
                          <span class="pub-type"><?php echo $conf['type']; ?></span>
                      </div>
                      <p class="pub-title"><?php echo $conf['title']; ?></p>
                      <p class="pub-authors"><?php echo $conf['authors']; ?></p>
                      <p class="pub-journal"><?php echo $conf['venue']; ?></p>
                      <div class="pub-links">
                          <a href="<?php echo $conf['doi']; ?>" class="pub-link">DOI</a>
                          <a href="<?php echo $conf['slides']; ?>" class="pub-link">Slides</a>
                          <a href="<?php echo $conf['abstract']; ?>" class="pub-link">Abstract</a>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
        <p class="no-results" id="confNoResults">No conference papers found matching your search.</p>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Key Conferences</h3>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">ASME IMECE (International)</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">IESL Annual Sessions (Sri Lanka)</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">ERUSL Symposium (Peradeniya)</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">ECCM (European Composites)</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.82rem;color:#555;">MSEC (Manufacturing)</div>
          </div>
        </div>
        <div class="sidebar-card">
          <h3>Submit Your Paper</h3>
          <p>Department staff and students presenting at conferences are encouraged to register through the Academic Office.</p>
          <p>✉️ <a href="mailto:academic.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">academic.mech@eng.pdn.ac.lk</a></p>
        </div>
      </aside>
    </div>
  </div>

  <!-- ══ BOOKS / MAGAZINES ══ -->
  <div class="tab-panel" id="tab-books">
    <div class="section-heading"><div class="heading-accent"></div><h2>Magazines &amp; Books</h2><div class="heading-rule"></div></div>
    <p class="about-intro" style="margin-bottom:32px;">Books, book chapters, and magazine contributions authored or co-authored by members of the Department.</p>

    <h3 style="font-family:'Oswald',sans-serif;font-size:0.8rem;letter-spacing:0.18em;text-transform:uppercase;color:var(--gold);margin-bottom:18px;padding-bottom:8px;border-bottom:1px solid #eee;">Books &amp; Book Chapters</h3>
          
          <div class="book-grid" style="margin-bottom:40px;">
            <?php foreach ($books as $book): ?>
              <div class="book-card">
                <div class="book-cover <?php echo $book['cover_class']; ?>">
                  <?php echo $book['cover_icon']; ?>
                </div>
                <div class="book-body">
                  <p class="book-category"><?php echo $book['category']; ?></p>
                  <p class="book-title"><?php echo $book['title']; ?></p>
                  <p class="book-author"><?php echo $book['author']; ?></p>
                  <a href="<?php echo $book['link']; ?>" class="book-link">View Details →</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

<h3 style="font-family:'Oswald',sans-serif;font-size:0.8rem;letter-spacing:0.18em;text-transform:uppercase;color:var(--gold);margin-bottom:18px;padding-bottom:8px;border-bottom:1px solid #eee;">Magazines &amp; Technical Articles</h3>
            <div class="book-grid">
              <?php foreach ($magazines as $mag): ?>
                <div class="book-card">
                  <div class="book-cover <?php echo $mag['cover_class']; ?>">
                    <?php echo $mag['cover_icon']; ?>
                  </div>
                  <div class="book-body">
                    <p class="book-category"><?php echo $mag['category']; ?></p>
                    <p class="book-title"><?php echo $mag['title']; ?></p>
                    <p class="book-author"><?php echo $mag['author']; ?></p>
                    <a href="<?php echo $mag['link']; ?>" class="book-link">Read Article →</a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
  </div>

  <!-- ══ RESEARCH BULLETIN ══ -->
<div class="tab-panel" id="tab-bulletin"> <div class="resources-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Research Bulletin</h2><div class="heading-rule"></div></div>
        <p class="about-intro">The ME Research Bulletin is published biannually, showcasing the latest research highlights of the Department.</p>

        <?php foreach ($bulletins as $bul): ?>
            <div class="bulletin-card">
                <div class="bulletin-cover">
                    <span class="bulletin-vol">Vol.</span>
                    <span class="bulletin-num"><?php echo $bul['vol']; ?></span>
                    <span class="bulletin-year"><?php echo $bul['year']; ?> · Issue <?php echo $bul['issue']; ?></span>
                </div>
                <div class="bulletin-body">
                    <p class="bulletin-title"><?php echo $bul['title']; ?></p>
                    <p class="bulletin-desc"><?php echo $bul['desc']; ?></p>
                    <div class="bulletin-tags">
                        <?php foreach ($bul['tags'] as $tag): ?>
                            <span class="btag"><?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div style="margin-top:12px;display:flex;gap:10px;">
                        <a href="<?php echo $bul['pdf']; ?>" class="pub-link">Download PDF</a>
                        <a href="<?php echo $bul['online']; ?>" class="pub-link">View Online</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
      </div>

      <aside>
          <div class="sidebar-card">
              <h3>About the Bulletin</h3>
              <p>The ME Research Bulletin is published every January and July.</p>
          </div>
      </aside>
    </div>
  </div> 

</main>

<?php include 'footer.php'; ?>

<script>
  // ── Tab switching ──
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  function switchTab(name) {
    tabBtns.forEach(b => b.classList.remove('active'));
    tabPanels.forEach(p => p.classList.remove('active'));
    const btn = document.querySelector('[data-tab="' + name + '"]');
    if (btn) btn.classList.add('active');
    const panel = document.getElementById('tab-' + name);
    if (panel) panel.classList.add('active');
  }

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      switchTab(btn.dataset.tab);
      history.replaceState(null, '', '#' + btn.dataset.tab);
    });
  });

  // ── Handle hash on load and on every hashchange ──
  const tabMap = { journals: 'journals', conference: 'conference', books: 'books', bulletin: 'bulletin' };
  function handleHash() {
    const hash = window.location.hash.replace('#', '');
    if (hash && tabMap[hash]) switchTab(tabMap[hash]);
  }
  handleHash();
  window.addEventListener('hashchange', handleHash);

  // ── Publication search/filter ──
  function filterPubs(type) {
    if (type === 'journal') {
      const q     = document.getElementById('journalSearch').value.toLowerCase();
      const year  = document.getElementById('journalYear').value;
      const area  = document.getElementById('journalArea').value.toLowerCase();
      const cards = document.querySelectorAll('#journalList .pub-card');
      let vis = 0;
      cards.forEach(c => {
        const text  = c.textContent.toLowerCase();
        const cy    = c.dataset.year || '';
        const ca    = (c.dataset.area || '').toLowerCase();
        const show  = text.includes(q) && (!year || cy === year) && (!area || ca === area);
        c.style.display = show ? '' : 'none';
        if (show) vis++;
      });
      document.getElementById('journalCount').textContent = vis + ' of ' + cards.length + ' shown';
      document.getElementById('journalNoResults').style.display = vis === 0 ? 'block' : 'none';
    } else {
      const q     = document.getElementById('confSearch').value.toLowerCase();
      const year  = document.getElementById('confYear').value;
      const cards = document.querySelectorAll('#confList .pub-card');
      let vis = 0;
      cards.forEach(c => {
        const text  = c.textContent.toLowerCase();
        const cy    = c.dataset.year || '';
        const show  = text.includes(q) && (!year || cy === year);
        c.style.display = show ? '' : 'none';
        if (show) vis++;
      });
      document.getElementById('confCount').textContent = vis + ' of ' + cards.length + ' shown';
      document.getElementById('confNoResults').style.display = vis === 0 ? 'block' : 'none';
    }
  }

  // initialise counts
  filterPubs('journal');
  filterPubs('conf');

  // ── Hamburger menu ──
  const menuToggle = document.getElementById('mobile-menu');
  const navWrapper = document.querySelector('.nav-menu-wrapper');
  if (menuToggle && navWrapper) {
    menuToggle.addEventListener('click', function () { navWrapper.classList.toggle('active'); });
  }

  // ── Mobile dropdown toggle ──
  document.querySelectorAll('.nav-menu-wrapper .nav-link').forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 1024) {
        const item = this.closest('.nav-item');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.nav-item').forEach(function (i) { i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
      }
    });
  });

  // ── Copyright year ──
  document.getElementById('copyrightYear').textContent = new Date().getFullYear();
</script>
</body>
</html>
