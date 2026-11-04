<?php
// ── Load events data ──
include 'events_data.php';

// ── Find event by id ──
$id    = isset($_GET['id']) ? $_GET['id'] : '';
$event = null;
foreach ($all_events as $ev) {
    if ($ev['id'] === $id) { $event = $ev; break; }
}

// ── 404 fallback ──
if (!$event) {
    header("HTTP/1.0 404 Not Found");
    $page_title = "Event Not Found";
    $page_css   = "event-detail.css";
    include 'header.php';
?>
<div class="page-banner">
  <div class="breadcrumb"><a href="index.php">Home</a><span>›</span><a href="news.php">News &amp; Events</a><span>›</span><span>Not Found</span></div>
  <h1>Event Not Found</h1>
  <div class="page-banner-line"></div>
</div>
<main class="main-content">
  <div class="not-found-wrap">
    <p>The event you are looking for does not exist or may have been moved.</p>
    <a href="news.php" class="ed-back-btn">← Back to News &amp; Events</a>
  </div>
</main>
<?php include 'footer.php'; ?>
<?php exit; } ?>

<?php
// ── Prev / Next navigation ──
$prev = null; $next = null;
$keys = array_keys($all_events);
foreach ($keys as $k => $v) {
    if ($all_events[$v]['id'] === $id) {
        if ($k > 0)                  $prev = $all_events[$keys[$k - 1]];
        if ($k < count($keys) - 1)   $next = $all_events[$keys[$k + 1]];
        break;
    }
}

// ── Status badge colours ──
$status_class = [
    'Upcoming' => 'ed-status-upcoming',
    'Ongoing'  => 'ed-status-ongoing',
    'Past'     => 'ed-status-past',
][$event['status'] ?? 'Upcoming'] ?? 'ed-status-upcoming';

$page_title = $event['title'];
include 'header.php';
?>
<link rel="stylesheet" href="life.css">
<link rel="stylesheet" href="event-detail.css">
<!-- ════════════════════════════════
     PAGE BANNER
════════════════════════════════ -->
<div class="page-banner">
  <div class="breadcrumb">
    <a href="index.php">Home</a><span>›</span>
    <a href="news.php">News &amp; Events</a><span>›</span>
    <span><?php echo htmlspecialchars($event['type']); ?></span>
  </div>
  <h1><?php echo htmlspecialchars($event['title']); ?></h1>
  <div class="page-banner-line"></div>
</div>

<!-- ════════════════════════════════
     MAIN
════════════════════════════════ -->
<main class="main-content ed-main">

  <div class="ed-layout">

    <!-- ══════════════════════════════
         LEFT COLUMN — EVENT BODY
    ══════════════════════════════ -->
    <article class="ed-article">

      <!-- Meta bar -->
      <div class="ed-meta-bar">
        <span class="ed-type-badge"><?php echo htmlspecialchars($event['type']); ?></span>
        <span class="ed-meta-sep">·</span>
        <span class="ed-meta-item">📅 <?php echo $event['day'] . ' ' . $event['month'] . ' ' . $event['year']; ?></span>
        <span class="ed-meta-sep">·</span>
        <span class="ed-meta-item">🕐 <?php echo htmlspecialchars($event['time']); ?></span>
        <span class="ed-meta-sep">·</span>
        <span class="ed-meta-item">📍 <?php echo htmlspecialchars($event['venue']); ?></span>
        <span class="<?php echo $status_class; ?>"><?php echo htmlspecialchars($event['status'] ?? 'Upcoming'); ?></span>
      </div>

      <!-- Tags -->
      <?php if (!empty($event['tags'])): ?>
      <div class="ed-tags-row">
        <?php foreach ($event['tags'] as $tag): ?>
          <span class="ed-tag"><?php echo htmlspecialchars($tag); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- About this event -->
      <div class="ed-section">
        <div class="ed-section-heading">
          <div class="ed-accent"></div>
          <h2>About This Event</h2>
        </div>
        <p class="ed-about-text"><?php echo htmlspecialchars($event['about']); ?></p>
      </div>

      <!-- Speaker / Guest (if present) -->
      <?php if (!empty($event['speaker'])): ?>
      <div class="ed-section">
        <div class="ed-section-heading">
          <div class="ed-accent"></div>
          <h2><?php echo (strpos(strtolower($event['type']), 'lecture') !== false || strpos(strtolower($event['type']), 'keynote') !== false) ? 'About the Speaker' : 'Featured Speakers'; ?></h2>
        </div>
        <div class="ed-speaker-card">
          <div class="ed-speaker-avatar">
            <?php echo strtoupper(substr($event['speaker']['name'], 0, 2)); ?>
          </div>
          <div class="ed-speaker-info">
            <span class="ed-speaker-name"><?php echo htmlspecialchars($event['speaker']['name']); ?></span>
            <span class="ed-speaker-title"><?php echo htmlspecialchars($event['speaker']['title']); ?></span>
            <p class="ed-speaker-bio"><?php echo htmlspecialchars($event['speaker']['bio']); ?></p>
          </div>
        </div>
      </div>
      <?php endif; ?>

      <!-- Programme / Agenda -->
      <?php if (!empty($event['agenda'])): ?>
      <div class="ed-section">
        <div class="ed-section-heading">
          <div class="ed-accent"></div>
          <h2>Programme</h2>
        </div>
        <div class="ed-agenda">
          <?php foreach ($event['agenda'] as $i => $slot): ?>
          <div class="ed-agenda-row">
            <div class="ed-agenda-time"><?php echo htmlspecialchars($slot['time']); ?></div>
            <div class="ed-agenda-dot">
              <div class="ed-dot"></div>
              <?php if ($i < count($event['agenda']) - 1): ?>
                <div class="ed-dot-line"></div>
              <?php endif; ?>
            </div>
            <div class="ed-agenda-item"><?php echo htmlspecialchars($slot['item']); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

      <!-- Who should attend -->
      <?php if (!empty($event['audience'])): ?>
      <div class="ed-section">
        <div class="ed-section-heading">
          <div class="ed-accent"></div>
          <h2>Who Should Attend</h2>
        </div>
        <p class="ed-body-text"><?php echo htmlspecialchars($event['audience']); ?></p>
      </div>
      <?php endif; ?>

      <!-- Additional notes -->
      <?php if (!empty($event['notes'])): ?>
      <div class="ed-notes-box">
        <span class="ed-notes-icon">📌</span>
        <p><?php echo htmlspecialchars($event['notes']); ?></p>
      </div>
      <?php endif; ?>

      <!-- Share strip -->
      <div class="ed-share-bar">
        <span class="ed-share-label">Share this event</span>
        <div class="ed-share-btns">
          <a class="ed-share-btn ed-share-fb"
             href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://mech.eng.pdn.ac.lk/event-detail.php?id=' . $event['id']); ?>"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor" width="14" height="14"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            Facebook
          </a>
          <a class="ed-share-btn ed-share-tw"
             href="https://twitter.com/intent/tweet?text=<?php echo urlencode($event['title']); ?>&url=<?php echo urlencode('https://mech.eng.pdn.ac.lk/event-detail.php?id=' . $event['id']); ?>"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor" width="14" height="14"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.7 5.5 4.4 9 4.5-.9-4.3 4-6.7 7-3.8 1.1 0 3-1.2 3-1.7z"/></svg>
            Twitter
          </a>
          <a class="ed-share-btn ed-share-li"
             href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode('https://mech.eng.pdn.ac.lk/event-detail.php?id=' . $event['id']); ?>&title=<?php echo urlencode($event['title']); ?>"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor" width="14" height="14"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
            LinkedIn
          </a>
          <button class="ed-share-btn ed-share-copy"
                  onclick="copyLink('<?php echo 'https://mech.eng.pdn.ac.lk/event-detail.php?id=' . $event['id']; ?>')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
            Copy Link
          </button>
        </div>
      </div>

      <!-- Prev / Next -->
      <div class="ed-prev-next">
        <?php if ($prev): ?>
          <a href="event-detail.php?id=<?php echo $prev['id']; ?>" class="ed-nav-link ed-nav-prev">
            <span class="ed-nav-dir">← Previous Event</span>
            <span class="ed-nav-title"><?php echo htmlspecialchars($prev['title']); ?></span>
          </a>
        <?php else: ?><div></div><?php endif; ?>
        <?php if ($next): ?>
          <a href="event-detail.php?id=<?php echo $next['id']; ?>" class="ed-nav-link ed-nav-next">
            <span class="ed-nav-dir">Next Event →</span>
            <span class="ed-nav-title"><?php echo htmlspecialchars($next['title']); ?></span>
          </a>
        <?php endif; ?>
      </div>

      <div style="margin-top:16px;">
        <a href="news.php" class="ed-back-btn">← Back to News &amp; Events</a>
      </div>

    </article>

    <!-- ══════════════════════════════
         SIDEBAR
    ══════════════════════════════ -->
    <aside class="ed-sidebar">

      <!-- Registration card -->
      <?php if (!empty($event['registration'])): ?>
      <div class="ed-reg-card">
        <div class="ed-reg-header">
          <span class="ed-reg-icon">🎟️</span>
          <span class="ed-reg-title">Register Now</span>
        </div>
        <div class="ed-reg-body">
          <div class="ed-reg-row">
            <span class="ed-reg-lbl">📅 Date</span>
            <span class="ed-reg-val"><?php echo $event['day'] . ' ' . $event['month'] . ' ' . $event['year']; ?></span>
          </div>
          <div class="ed-reg-row">
            <span class="ed-reg-lbl">🕐 Time</span>
            <span class="ed-reg-val"><?php echo htmlspecialchars($event['time']); ?></span>
          </div>
          <div class="ed-reg-row">
            <span class="ed-reg-lbl">📍 Venue</span>
            <span class="ed-reg-val"><?php echo htmlspecialchars($event['venue']); ?></span>
          </div>
          <?php if (!empty($event['capacity'])): ?>
          <div class="ed-reg-row">
            <span class="ed-reg-lbl">👥 Capacity</span>
            <span class="ed-reg-val"><?php echo htmlspecialchars($event['capacity']); ?></span>
          </div>
          <?php endif; ?>
          <?php if (!empty($event['reg_deadline'])): ?>
          <div class="ed-reg-row">
            <span class="ed-reg-lbl">⏰ Deadline</span>
            <span class="ed-reg-val ed-deadline"><?php echo htmlspecialchars($event['reg_deadline']); ?></span>
          </div>
          <?php endif; ?>
        </div>
        <a href="<?php echo htmlspecialchars($event['reg_link'] ?? '#'); ?>" class="ed-reg-btn">
          Register for This Event →
        </a>
      </div>
      <?php endif; ?>

      <!-- Event details card -->
      <div class="sidebar-card ed-details-card">
        <h3>Event Details</h3>
        <div class="ed-detail-row">
          <span class="ed-detail-lbl">Type</span>
          <span class="ed-detail-val"><span class="ed-type-badge"><?php echo htmlspecialchars($event['type']); ?></span></span>
        </div>
        <div class="ed-detail-row">
          <span class="ed-detail-lbl">Status</span>
          <span class="ed-detail-val"><span class="<?php echo $status_class; ?>"><?php echo htmlspecialchars($event['status'] ?? 'Upcoming'); ?></span></span>
        </div>
        <div class="ed-detail-row">
          <span class="ed-detail-lbl">Organiser</span>
          <span class="ed-detail-val"><?php echo htmlspecialchars($event['organiser']); ?></span>
        </div>
        <?php if (!empty($event['contact'])): ?>
        <div class="ed-detail-row">
          <span class="ed-detail-lbl">Contact</span>
          <span class="ed-detail-val">
            <a href="mailto:<?php echo htmlspecialchars($event['contact']); ?>" class="ed-contact-link">
              <?php echo htmlspecialchars($event['contact']); ?>
            </a>
          </span>
        </div>
        <?php endif; ?>
        <?php if (!empty($event['tags'])): ?>
        <div class="ed-detail-row ed-detail-tags">
          <span class="ed-detail-lbl">Tags</span>
          <div class="category-tags" style="margin-top:6px;">
            <?php foreach ($event['tags'] as $tag): ?>
              <span class="cat-tag"><?php echo htmlspecialchars($tag); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>

      <!-- Add to calendar -->
      <div class="sidebar-card">
        <h3>Add to Calendar</h3>
        <p>Don't miss this event — add it to your calendar.</p>
        <div class="ed-cal-btns">
          <?php
            $cal_title   = urlencode($event['title']);
            $cal_details = urlencode($event['about'] ?? $event['desc']);
            $cal_loc     = urlencode($event['venue']);
            // Simple date string for Google (YYYYMMDD)
            $months = ['Jan'=>'01','Feb'=>'02','Mar'=>'03','Apr'=>'04','May'=>'05','Jun'=>'06',
                       'Jul'=>'07','Aug'=>'08','Sep'=>'09','Oct'=>'10','Nov'=>'11','Dec'=>'12'];
            $mon_num  = $months[$event['month']] ?? '01';
            $date_str = $event['year'] . $mon_num . str_pad($event['day'], 2, '0', STR_PAD_LEFT);
            $gcal_url = "https://calendar.google.com/calendar/render?action=TEMPLATE&text={$cal_title}&dates={$date_str}/{$date_str}&details={$cal_details}&location={$cal_loc}";
          ?>
          <a href="<?php echo $gcal_url; ?>" target="_blank" rel="noopener" class="ed-cal-btn">
            📅 Google Calendar
          </a>
          <a href="#" class="ed-cal-btn" onclick="downloadICS(); return false;">
            📥 Download .ics
          </a>
        </div>
      </div>

      <!-- More events -->
      <div class="sidebar-card">
        <h3>More Events</h3>
        <div class="ed-more-events">
          <?php foreach ($all_events as $ev):
            if ($ev['id'] === $id) continue; ?>
          <a href="event-detail.php?id=<?php echo $ev['id']; ?>" class="ed-more-item">
            <div class="ed-more-date">
              <span class="ed-more-day"><?php echo $ev['day']; ?></span>
              <span class="ed-more-mon"><?php echo $ev['month']; ?></span>
            </div>
            <div class="ed-more-info">
              <span class="ed-more-type"><?php echo htmlspecialchars($ev['type']); ?></span>
              <span class="ed-more-title"><?php echo htmlspecialchars($ev['title']); ?></span>
            </div>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Back -->
      <div class="sidebar-card ed-back-card">
        <h3>All News &amp; Events</h3>
        <p>Browse all departmental news, announcements, and upcoming events.</p>
        <a href="news.php" class="ed-back-btn">← Back to News &amp; Events</a>
      </div>

    </aside>

  </div><!-- /ed-layout -->

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
    const btn = document.querySelector('.ed-share-copy');
    if (btn) {
      btn.textContent = '✓ Copied!';
      setTimeout(() => {
        btn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><rect x="9" y="9" width="13" height="13" rx="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg> Copy Link';
      }, 2000);
    }
  });
}

function downloadICS() {
  const title   = <?php echo json_encode($event['title']); ?>;
  const date    = <?php echo json_encode($event['year'] . ($months[$event['month']] ?? '01') . str_pad($event['day'], 2, '0', STR_PAD_LEFT)); ?>;
  const venue   = <?php echo json_encode($event['venue']); ?>;
  const desc    = <?php echo json_encode($event['about'] ?? $event['desc']); ?>;

  const ics = [
    'BEGIN:VCALENDAR',
    'VERSION:2.0',
    'BEGIN:VEVENT',
    'DTSTART:' + date,
    'DTEND:'   + date,
    'SUMMARY:' + title,
    'LOCATION:' + venue,
    'DESCRIPTION:' + desc.replace(/\n/g, '\\n'),
    'END:VEVENT',
    'END:VCALENDAR'
  ].join('\r\n');

  const blob = new Blob([ics], { type: 'text/calendar' });
  const a    = document.createElement('a');
  a.href     = URL.createObjectURL(blob);
  a.download = 'event.ics';
  a.click();
}
</script>
</body>
</html>
