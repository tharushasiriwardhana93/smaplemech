<?php
// ── Load news data ──
include 'news_data.php';

// ── Find the article by id ──
$id      = isset($_GET['id']) ? $_GET['id'] : '';
$article = null;
foreach ($all_news as $item) {
    if ($item['id'] === $id) { $article = $item; break; }
}

// ── 404 fallback ──
if (!$article) {
    header("HTTP/1.0 404 Not Found");
    $page_title = "Article Not Found";
    include 'header.php';
?>
<link rel="stylesheet" href="news-detail.css">
<link rel="stylesheet" href="life.css">
<div class="page-banner">
  <div class="breadcrumb"><a href="index.php">Home</a><span>›</span><a href="news.php">News &amp; Events</a><span>›</span><span>Not Found</span></div>
  <h1>Article Not Found</h1>
  <div class="page-banner-line"></div>
</div>
<main class="main-content">
  <div class="not-found-wrap">
    <p>The article you are looking for does not exist or may have been moved.</p>
    <a href="news.php" class="nd-back-btn">← Back to News &amp; Events</a>
  </div>
</main>
<?php include 'footer.php'; ?>
<?php exit; } ?>

<?php
// ── Build related articles list ──
$related_articles = [];
if (!empty($article['related'])) {
    foreach ($all_news as $item) {
        if (in_array($item['id'], $article['related'])) {
            $related_articles[] = $item;
        }
    }
}

// ── Previous / Next navigation ──
$prev = null; $next = null;
$keys = array_keys($all_news);
foreach ($keys as $k => $v) {
    if ($all_news[$v]['id'] === $id) {
        if ($k > 0)                  $prev = $all_news[$keys[$k - 1]];
        if ($k < count($keys) - 1)   $next = $all_news[$keys[$k + 1]];
        break;
    }
}

$page_title = $article['title'];
include 'header.php';
?>
<link rel="stylesheet" href="news-detail.css">
<link rel="stylesheet" href="life.css">
<!-- ════════════════════════════════
     PAGE BANNER
════════════════════════════════ -->
<div class="page-banner">
  <div class="breadcrumb">
    <a href="index.php">Home</a><span>›</span>
    <a href="news.php">News &amp; Events</a><span>›</span>
    <span><?php echo htmlspecialchars($article['category']); ?></span>
  </div>
  <h1><?php echo htmlspecialchars($article['title']); ?></h1>
  <div class="page-banner-line"></div>
</div>

<!-- ════════════════════════════════
     MAIN
════════════════════════════════ -->
<main class="main-content nd-main">

  <div class="nd-layout">

    <!-- ══════════════
         ARTICLE BODY
    ══════════════ -->
    <article class="nd-article">

      <!-- Meta bar -->
      <div class="nd-meta-bar">
        <span class="nd-category"><?php echo htmlspecialchars($article['category']); ?></span>
        <span class="nd-meta-sep">·</span>
        <span class="nd-date">
          <?php echo $article['day'] . ' ' . $article['month'] . ' ' . $article['year']; ?>
        </span>
        <span class="nd-meta-sep">·</span>
        <span class="nd-author"><?php echo htmlspecialchars($article['author']); ?></span>
        <?php if (!empty($article['read_time'])): ?>
          <span class="nd-meta-sep">·</span>
          <span class="nd-read-time">🕐 <?php echo htmlspecialchars($article['read_time']); ?></span>
        <?php endif; ?>
      </div>

      <!-- Hero image -->
      <?php if (!empty($article['image'])): ?>
      <div class="nd-hero-img" style="background-image:url('<?php echo htmlspecialchars($article['image']); ?>');">
        <div class="nd-hero-overlay"></div>
      </div>
      <?php endif; ?>

      <!-- Tags -->
      <?php if (!empty($article['tags'])): ?>
      <div class="nd-tags-row">
        <?php foreach ($article['tags'] as $tag): ?>
          <span class="nd-tag"><?php echo htmlspecialchars($tag); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- Article body blocks -->
      <div class="nd-body">
        <?php foreach ($article['body'] as $block): ?>

          <?php if ($block['type'] === 'paragraph'): ?>
            <p class="nd-paragraph"><?php echo htmlspecialchars($block['text']); ?></p>

          <?php elseif ($block['type'] === 'subheading'): ?>
            <h2 class="nd-subheading"><?php echo htmlspecialchars($block['text']); ?></h2>

          <?php elseif ($block['type'] === 'quote'): ?>
            <blockquote class="nd-quote">
              <p>"<?php echo htmlspecialchars($block['text']); ?>"</p>
              <?php if (!empty($block['author'])): ?>
                <cite>— <?php echo htmlspecialchars($block['author']); ?></cite>
              <?php endif; ?>
            </blockquote>

          <?php elseif ($block['type'] === 'image'): ?>
            <figure class="nd-figure">
              <img src="<?php echo htmlspecialchars($block['src']); ?>"
                   alt="<?php echo htmlspecialchars($block['alt'] ?? ''); ?>"
                   class="nd-inline-img">
              <?php if (!empty($block['caption'])): ?>
                <figcaption class="nd-caption"><?php echo htmlspecialchars($block['caption']); ?></figcaption>
              <?php endif; ?>
            </figure>

          <?php elseif ($block['type'] === 'list'): ?>
            <ul class="nd-list">
              <?php foreach ($block['items'] as $li): ?>
                <li><?php echo htmlspecialchars($li); ?></li>
              <?php endforeach; ?>
            </ul>

          <?php endif; ?>

        <?php endforeach; ?>
      </div>

      <!-- Share strip -->
      <div class="nd-share-bar">
        <span class="nd-share-label">Share this article</span>
        <div class="nd-share-btns">
          <a class="nd-share-btn nd-share-fb"
             href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://mech.eng.pdn.ac.lk/news-detail.php?id=' . $article['id']); ?>"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            Facebook
          </a>
          <a class="nd-share-btn nd-share-tw"
             href="https://twitter.com/intent/tweet?text=<?php echo urlencode($article['title']); ?>&url=<?php echo urlencode('https://mech.eng.pdn.ac.lk/news-detail.php?id=' . $article['id']); ?>"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.7 5.5 4.4 9 4.5-.9-4.3 4-6.7 7-3.8 1.1 0 3-1.2 3-1.7z"/></svg>
            Twitter
          </a>
          <a class="nd-share-btn nd-share-li"
             href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode('https://mech.eng.pdn.ac.lk/news-detail.php?id=' . $article['id']); ?>&title=<?php echo urlencode($article['title']); ?>"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
            LinkedIn
          </a>
          <button class="nd-share-btn nd-share-copy"
                  onclick="copyLink('<?php echo 'https://mech.eng.pdn.ac.lk/news-detail.php?id=' . $article['id']; ?>')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
            Copy Link
          </button>
        </div>
      </div>

      <!-- Prev / Next navigation -->
      <div class="nd-prev-next">
        <?php if ($prev): ?>
          <a href="news-detail.php?id=<?php echo $prev['id']; ?>" class="nd-nav-link nd-nav-prev">
            <span class="nd-nav-dir">← Previous</span>
            <span class="nd-nav-title"><?php echo htmlspecialchars($prev['title']); ?></span>
          </a>
        <?php else: ?>
          <div></div>
        <?php endif; ?>
        <?php if ($next): ?>
          <a href="news-detail.php?id=<?php echo $next['id']; ?>" class="nd-nav-link nd-nav-next">
            <span class="nd-nav-dir">Next →</span>
            <span class="nd-nav-title"><?php echo htmlspecialchars($next['title']); ?></span>
          </a>
        <?php endif; ?>
      </div>

      <!-- Back link -->
      <div style="margin-top:16px;">
        <a href="news.php" class="nd-back-btn">← Back to News &amp; Events</a>
      </div>

    </article>

    <!-- ══════════════
         SIDEBAR
    ══════════════ -->
    <aside class="nd-sidebar">

      <!-- Article info card -->
      <div class="sidebar-card nd-info-card">
        <h3>Article Details</h3>
        <div class="nd-info-row">
          <span class="nd-info-lbl">Category</span>
          <span class="nd-info-val nd-category-pill"><?php echo htmlspecialchars($article['category']); ?></span>
        </div>
        <div class="nd-info-row">
          <span class="nd-info-lbl">Published</span>
          <span class="nd-info-val"><?php echo $article['day'] . ' ' . $article['month'] . ' ' . $article['year']; ?></span>
        </div>
        <div class="nd-info-row">
          <span class="nd-info-lbl">Author</span>
          <span class="nd-info-val"><?php echo htmlspecialchars($article['author']); ?></span>
        </div>
        <?php if (!empty($article['read_time'])): ?>
        <div class="nd-info-row">
          <span class="nd-info-lbl">Read Time</span>
          <span class="nd-info-val"><?php echo htmlspecialchars($article['read_time']); ?></span>
        </div>
        <?php endif; ?>
        <?php if (!empty($article['tags'])): ?>
        <div class="nd-info-row nd-info-tags">
          <span class="nd-info-lbl">Tags</span>
          <div class="category-tags" style="margin-top:6px;">
            <?php foreach ($article['tags'] as $tag): ?>
              <span class="cat-tag"><?php echo htmlspecialchars($tag); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>

      <!-- Related articles -->
      <?php if (!empty($related_articles)): ?>
      <div class="sidebar-card">
        <h3>Related Articles</h3>
        <div class="nd-related-list">
          <?php foreach ($related_articles as $rel): ?>
          <a href="news-detail.php?id=<?php echo $rel['id']; ?>" class="nd-related-item">
            <?php if (!empty($rel['image'])): ?>
            <div class="nd-related-thumb" style="background-image:url('<?php echo htmlspecialchars($rel['image']); ?>');"></div>
            <?php else: ?>
            <div class="nd-related-thumb nd-related-thumb-fallback">
              <span><?php echo $rel['day'] . ' ' . $rel['month']; ?></span>
            </div>
            <?php endif; ?>
            <div class="nd-related-info">
              <span class="nd-related-cat"><?php echo htmlspecialchars($rel['category']); ?></span>
              <span class="nd-related-title"><?php echo htmlspecialchars($rel['title']); ?></span>
              <span class="nd-related-date"><?php echo $rel['day'] . ' ' . $rel['month'] . ' ' . $rel['year']; ?></span>
            </div>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

      <!-- Browse by category -->
      <div class="sidebar-card">
        <h3>Browse by Category</h3>
        <div class="category-tags">
          <a href="news.php#achievement"  class="cat-tag">Achievement</a>
          <a href="news.php#research"     class="cat-tag">Research</a>
          <a href="news.php#partnership"  class="cat-tag">Partnership</a>
          <a href="news.php#academic"     class="cat-tag">Academic</a>
          <a href="news.php#industry"     class="cat-tag">Industry</a>
          <a href="news.php#publication"  class="cat-tag">Publication</a>
        </div>
      </div>

      <!-- Back to news -->
      <div class="sidebar-card nd-back-card">
        <h3>All News &amp; Events</h3>
        <p>Browse the full archive of departmental news, announcements, and upcoming events.</p>
        <a href="news.php" class="nd-back-btn">← Back to News &amp; Events</a>
      </div>

    </aside>

  </div><!-- /nd-layout -->

</main>

<?php include 'footer.php'; ?>

<script>
(function () {
  // Mobile menu
  const menuToggle = document.getElementById('mobile-menu');
  const navWrapper = document.querySelector('.nav-menu-wrapper');
  if (menuToggle && navWrapper) {
    menuToggle.addEventListener('click', function () {
      navWrapper.classList.toggle('active');
    });
  }
  document.querySelectorAll('.nav-menu-wrapper .nav-link').forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 1024) {
        const item   = this.closest('.nav-item');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
      }
    });
  });

  // Copyright year
  const yr = document.getElementById('copyrightYear');
  if (yr) yr.textContent = new Date().getFullYear();
})();

// Copy link helper
function copyLink(url) {
  navigator.clipboard.writeText(url).then(function () {
    const btn = document.querySelector('.nd-share-copy');
    if (btn) { btn.textContent = '✓ Copied!'; setTimeout(() => { btn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg> Copy Link'; }, 2000); }
  });
}
</script>
</body>
</html>
