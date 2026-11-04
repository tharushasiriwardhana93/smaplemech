<?php
// ── Load data ──
include 'resources_data.php';

// ── Find book by id ──
$id   = isset($_GET['id']) ? $_GET['id'] : '';
$book = null;
foreach ($books as $b) {
    if ($b['id'] === $id) { $book = $b; break; }
}

// ── 404 fallback ──
if (!$book) {
    header("HTTP/1.0 404 Not Found");
    $page_title = "Book Not Found";
    $page_css   = "book-detail.css";
    include 'header.php';
?>
<div class="page-banner">
  <div class="breadcrumb">
    <a href="index.php">Home</a><span>›</span>
    <a href="resources.php">Resources</a><span>›</span>
    <a href="resources.php#books">Books</a><span>›</span>
    <span>Not Found</span>
  </div>
  <h1>Book Not Found</h1>
  <div class="page-banner-line"></div>
</div>
<main class="main-content">
  <div class="bd-not-found">
    <p>The book you are looking for does not exist or may have been moved.</p>
    <a href="resources.php#books" class="bd-btn">← Back to Books</a>
  </div>
</main>
<?php include 'footer.php'; ?>
<?php exit; }

// ── Prev / Next ──
$prev = null; $next = null;
$bkeys = array_keys($books);
foreach ($bkeys as $k => $v) {
    if ($books[$v]['id'] === $id) {
        if ($k > 0)                   $prev = $books[$bkeys[$k - 1]];
        if ($k < count($bkeys) - 1)   $next = $books[$bkeys[$k + 1]];
        break;
    }
}

// ── Other books (sidebar) ──
$other_books = array_filter($books, fn($b) => $b['id'] !== $id);

$page_title = $book['title'];
include 'header.php';
?>

<link rel="stylesheet" href="book-detail.css">
<!-- ════════════════════════════════
     PAGE BANNER
════════════════════════════════ -->
<div class="page-banner">
  <div class="breadcrumb">
    <a href="index.php">Home</a><span>›</span>
    <a href="resources.php">Resources</a><span>›</span>
    <a href="resources.php#books">Books &amp; Chapters</a><span>›</span>
    <span><?php echo htmlspecialchars($book['category']); ?></span>
  </div>
  <h1><?php echo htmlspecialchars($book['title']); ?></h1>
  <div class="page-banner-line"></div>
</div>

<!-- ════════════════════════════════
     MAIN
════════════════════════════════ -->
<main class="main-content bd-main">
  <div class="bd-layout">

    <!-- ════════════════
         LEFT — DETAIL
    ════════════════ -->
    <article class="bd-article">

      <!-- ── Hero panel: cover + key info ── -->
      <div class="bd-hero-panel">

        <!-- Book cover -->
        <div class="bd-cover-wrap">
          <?php if (!empty($book['image'])): ?>
            <img src="<?php echo htmlspecialchars($book['image']); ?>"
                 alt="Cover of <?php echo htmlspecialchars($book['title']); ?>"
                 class="bd-cover-img"
                 onerror="this.style.display='none';document.getElementById('bd-cover-fallback').style.display='flex';">
            <div class="bd-cover-fallback bd-cover-<?php echo $book['cover_class']; ?>" id="bd-cover-fallback" style="display:none;">
              <span class="bd-cover-icon"><?php echo $book['cover_icon']; ?></span>
            </div>
          <?php else: ?>
            <div class="bd-cover-fallback bd-cover-<?php echo $book['cover_class']; ?>">
              <span class="bd-cover-icon"><?php echo $book['cover_icon']; ?></span>
              <span class="bd-cover-title-text"><?php echo htmlspecialchars($book['title']); ?></span>
              <span class="bd-cover-author-text"><?php echo htmlspecialchars($book['author']); ?></span>
            </div>
          <?php endif; ?>
          <span class="bd-category-badge"><?php echo htmlspecialchars($book['category']); ?></span>
        </div>

        <!-- Key metadata -->
        <div class="bd-hero-info">
          <h1 class="bd-title"><?php echo htmlspecialchars($book['title']); ?></h1>
          <p class="bd-author-line"><?php echo htmlspecialchars($book['author']); ?></p>

          <div class="bd-meta-grid">
            <div class="bd-meta-item">
              <span class="bd-meta-lbl">Publisher</span>
              <span class="bd-meta-val"><?php echo htmlspecialchars($book['publisher']); ?></span>
            </div>
            <div class="bd-meta-item">
              <span class="bd-meta-lbl">Year</span>
              <span class="bd-meta-val"><?php echo htmlspecialchars($book['year']); ?></span>
            </div>
            <?php if (!empty($book['edition'])): ?>
            <div class="bd-meta-item">
              <span class="bd-meta-lbl">Edition / Volume</span>
              <span class="bd-meta-val"><?php echo htmlspecialchars($book['edition']); ?></span>
            </div>
            <?php endif; ?>
            <?php if (!empty($book['isbn'])): ?>
            <div class="bd-meta-item">
              <span class="bd-meta-lbl">ISBN</span>
              <span class="bd-meta-val bd-mono"><?php echo htmlspecialchars($book['isbn']); ?></span>
            </div>
            <?php endif; ?>
            <?php if (!empty($book['pages'])): ?>
            <div class="bd-meta-item">
              <span class="bd-meta-lbl">Pages</span>
              <span class="bd-meta-val"><?php echo htmlspecialchars($book['pages']); ?></span>
            </div>
            <?php endif; ?>
            <div class="bd-meta-item">
              <span class="bd-meta-lbl">Language</span>
              <span class="bd-meta-val"><?php echo htmlspecialchars($book['language']); ?></span>
            </div>
          </div>

          <!-- Keywords -->
          <?php if (!empty($book['keywords'])): ?>
          <div class="bd-keywords-row">
            <?php foreach ($book['keywords'] as $kw): ?>
              <span class="bd-keyword"><?php echo htmlspecialchars($kw); ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <!-- Action buttons -->
          <div class="bd-action-btns">
            <?php if (!empty($book['buy_links'])): ?>
              <?php foreach ($book['buy_links'] as $bl): ?>
                <a href="<?php echo htmlspecialchars($bl['url']); ?>" class="bd-btn bd-btn-primary" target="_blank" rel="noopener">
                  🛒 <?php echo htmlspecialchars($bl['label']); ?>
                </a>
              <?php endforeach; ?>
            <?php endif; ?>
            <?php if (!empty($book['access_links'])): ?>
              <?php foreach ($book['access_links'] as $al): ?>
                <a href="<?php echo htmlspecialchars($al['url']); ?>" class="bd-btn bd-btn-outline" target="_blank" rel="noopener">
                  🔗 <?php echo htmlspecialchars($al['label']); ?>
                </a>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

        </div>
      </div><!-- /bd-hero-panel -->

      <!-- ── Description ── -->
      <div class="bd-section">
        <div class="bd-section-heading">
          <div class="bd-accent"></div>
          <h2>About This <?php echo ($book['category'] === 'Book Chapter') ? 'Chapter' : 'Book'; ?></h2>
        </div>
        <p class="bd-description"><?php echo htmlspecialchars($book['description']); ?></p>
      </div>

      <!-- ── Table of Contents ── -->
      <?php if (!empty($book['contents'])): ?>
      <div class="bd-section">
        <div class="bd-section-heading">
          <div class="bd-accent"></div>
          <h2>Table of Contents</h2>
        </div>
        <ol class="bd-toc">
          <?php foreach ($book['contents'] as $i => $ch): ?>
            <li class="bd-toc-item">
              <span class="bd-toc-num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
              <span class="bd-toc-text"><?php echo htmlspecialchars($ch); ?></span>
            </li>
          <?php endforeach; ?>
        </ol>
      </div>
      <?php endif; ?>

      <!-- ── Share bar ── -->
      <div class="bd-share-bar">
        <span class="bd-share-label">Share</span>
        <div class="bd-share-btns">
          <a class="bd-share-btn bd-share-fb"
             href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://mech.eng.pdn.ac.lk/book-detail.php?id=' . $book['id']); ?>"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg> Facebook
          </a>
          <a class="bd-share-btn bd-share-li"
             href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode('https://mech.eng.pdn.ac.lk/book-detail.php?id=' . $book['id']); ?>&title=<?php echo urlencode($book['title']); ?>"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg> LinkedIn
          </a>
          <button class="bd-share-btn bd-share-copy" onclick="copyLink('<?php echo 'https://mech.eng.pdn.ac.lk/book-detail.php?id=' . $book['id']; ?>')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="13" height="13"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg> Copy Link
          </button>
        </div>
      </div>

      <!-- ── Prev / Next ── -->
      <div class="bd-prev-next">
        <?php if ($prev): ?>
          <a href="book-detail.php?id=<?php echo $prev['id']; ?>" class="bd-nav-link bd-nav-prev">
            <span class="bd-nav-dir">← Previous</span>
            <span class="bd-nav-title"><?php echo htmlspecialchars($prev['title']); ?></span>
          </a>
        <?php else: ?><div></div><?php endif; ?>
        <?php if ($next): ?>
          <a href="book-detail.php?id=<?php echo $next['id']; ?>" class="bd-nav-link bd-nav-next">
            <span class="bd-nav-dir">Next →</span>
            <span class="bd-nav-title"><?php echo htmlspecialchars($next['title']); ?></span>
          </a>
        <?php endif; ?>
      </div>

      <div style="margin-top:16px;">
        <a href="resources.php#books" class="bd-btn bd-btn-outline">← Back to Books &amp; Chapters</a>
      </div>

    </article>

    <!-- ════════════════
         SIDEBAR
    ════════════════ -->
    <aside class="bd-sidebar">

      <!-- Quick access card -->
      <div class="bd-access-card">
        <div class="bd-access-header">
          <span class="bd-access-icon">📖</span>
          <span class="bd-access-title">Access This Publication</span>
        </div>
        <div class="bd-access-body">
          <?php if (!empty($book['buy_links'])): ?>
            <p class="bd-access-section-lbl">Purchase</p>
            <?php foreach ($book['buy_links'] as $bl): ?>
              <a href="<?php echo htmlspecialchars($bl['url']); ?>" class="bd-access-link-btn bd-access-buy" target="_blank" rel="noopener">
                🛒 <?php echo htmlspecialchars($bl['label']); ?>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
          <?php if (!empty($book['access_links'])): ?>
            <p class="bd-access-section-lbl" style="margin-top:12px;">Online Access</p>
            <?php foreach ($book['access_links'] as $al): ?>
              <a href="<?php echo htmlspecialchars($al['url']); ?>" class="bd-access-link-btn bd-access-online" target="_blank" rel="noopener">
                🔗 <?php echo htmlspecialchars($al['label']); ?>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- Publication details card -->
      <div class="sidebar-card bd-details-card">
        <h3>Publication Details</h3>
        <div class="bd-detail-row"><span class="bd-detail-lbl">Category</span><span class="bd-detail-val"><span class="bd-cat-badge"><?php echo htmlspecialchars($book['category']); ?></span></span></div>
        <div class="bd-detail-row"><span class="bd-detail-lbl">Author(s)</span><span class="bd-detail-val"><?php echo htmlspecialchars($book['author']); ?></span></div>
        <div class="bd-detail-row"><span class="bd-detail-lbl">Year</span><span class="bd-detail-val"><?php echo htmlspecialchars($book['year']); ?></span></div>
        <div class="bd-detail-row"><span class="bd-detail-lbl">Publisher</span><span class="bd-detail-val"><?php echo htmlspecialchars($book['publisher']); ?></span></div>
        <?php if (!empty($book['isbn'])): ?>
        <div class="bd-detail-row"><span class="bd-detail-lbl">ISBN</span><span class="bd-detail-val bd-mono" style="font-size:0.8rem;"><?php echo htmlspecialchars($book['isbn']); ?></span></div>
        <?php endif; ?>
        <?php if (!empty($book['pages'])): ?>
        <div class="bd-detail-row"><span class="bd-detail-lbl">Pages</span><span class="bd-detail-val"><?php echo htmlspecialchars($book['pages']); ?></span></div>
        <?php endif; ?>
      </div>

      <!-- Author contact card -->
      <div class="sidebar-card">
        <h3>Contact the Author</h3>
        <p>For enquiries about this publication, please contact the author through the Department's academic staff directory.</p>
        <a href="people.php#academic" class="sidebar-link">→ View Academic Staff</a>
        <a href="mailto:mech@eng.pdn.ac.lk" class="sidebar-link">→ Email the Department</a>
      </div>

      <!-- Other books -->
      <?php if (!empty($other_books)): ?>
      <div class="sidebar-card">
        <h3>More Publications</h3>
        <div class="bd-other-list">
          <?php foreach ($other_books as $ob): ?>
          <a href="book-detail.php?id=<?php echo $ob['id']; ?>" class="bd-other-item">
            <div class="bd-other-cover bd-cover-<?php echo $ob['cover_class']; ?>">
              <?php if (!empty($ob['image'])): ?>
                <img src="<?php echo htmlspecialchars($ob['image']); ?>" alt="" class="bd-other-img" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                <span style="display:none;align-items:center;justify-content:center;font-size:1.2rem;"><?php echo $ob['cover_icon']; ?></span>
              <?php else: ?>
                <span style="font-size:1.2rem;"><?php echo $ob['cover_icon']; ?></span>
              <?php endif; ?>
            </div>
            <div class="bd-other-info">
              <span class="bd-other-cat"><?php echo htmlspecialchars($ob['category']); ?></span>
              <span class="bd-other-title"><?php echo htmlspecialchars($ob['title']); ?></span>
              <span class="bd-other-author"><?php echo htmlspecialchars($ob['author']); ?> · <?php echo $ob['year']; ?></span>
            </div>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

    </aside>

  </div><!-- /bd-layout -->
</main>

<?php include 'footer.php'; ?>

<script>
(function () {
  const menuToggle = document.getElementById('mobile-menu');
  const navWrapper = document.querySelector('.nav-menu-wrapper');
  if (menuToggle && navWrapper) {
    menuToggle.addEventListener('click', () => navWrapper.classList.toggle('active'));
  }
  document.querySelectorAll('.nav-menu-wrapper .nav-link').forEach(link => {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 1024) {
        const item   = this.closest('.nav-item');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
      }
    });
  });
  const yr = document.getElementById('copyrightYear');
  if (yr) yr.textContent = new Date().getFullYear();
})();

function copyLink(url) {
  navigator.clipboard.writeText(url).then(() => {
    const btn = document.querySelector('.bd-share-copy');
    if (btn) {
      btn.textContent = '✓ Copied!';
      setTimeout(() => {
        btn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="13" height="13"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg> Copy Link';
      }, 2000);
    }
  });
}
</script>
</body>
</html>
