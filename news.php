<?php 
  $page_title = "News & Events";
  include 'header.php'; 
?>
<link rel="stylesheet" href="life.css">

<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="breadcrumb"><a href="index.html">Home</a><span>›</span><span>Life at ME</span></div>
  <h1>NEWS</h1>
  <div class="page-banner-line"></div>
</div>

<!-- MAIN -->
<main class="main-content">

  
  <div class="tab-panel active" id="tab-news">

    <!-- Featured Event -->
        <?php include 'featured_event.php'; ?>


<?php include 'news_data.php'; ?>
<?php include 'events_data.php'; ?>

<div class="news-list">

  <?php foreach ($all_news as $item): ?>
    
    <div class="news-item">

      <?php if (!empty($item['image'])): ?>
        <div class="news-item-img" style="background-image:url('<?php echo htmlspecialchars($item['image']); ?>');"></div>
      <?php else: ?>
        <div class="news-item-date-block">
          <span class="news-day"><?php echo $item['day']; ?></span>
          <span class="news-month"><?php echo $item['month']; ?></span>
          <span class="news-year"><?php echo $item['year']; ?></span>
        </div>
      <?php endif; ?>

      <div class="news-item-body">
        <div class="news-item-meta-row">
          <span class="news-category"><?php echo $item['category']; ?></span>
          <span class="news-item-date-inline"><?php echo $item['day'] . ' ' . $item['month'] . ' ' . $item['year']; ?></span>
        </div>
        <h3 class="news-item-title"><?php echo $item['title']; ?></h3>
        <p class="news-item-excerpt"><?php echo $item['excerpt']; ?></p>
        <a href="<?php echo htmlspecialchars($item['link']); ?>" class="news-read-more">Read More →</a>
      </div>
    </div>

  <?php endforeach; ?>

</div>

    <!-- Upcoming Events -->
    <div class="section-heading" style="margin-top:48px;"><div class="heading-accent"></div><h2>Upcoming Events</h2><div class="heading-rule"></div></div>

<div class="events-grid">
  <?php foreach ($all_events as $event): ?>
    <div class="event-card">
      <div class="event-card-banner <?php echo $event['banner']; ?>"></div>
      <div class="event-card-body">
        <div class="event-date-row">
          <div class="event-date-badge"><span class="eday"><?php echo $event['day']; ?></span><span class="emon"><?php echo $event['month']; ?></span></div>
          <div class="event-meta-info">
            <p class="event-type"><?php echo $event['type']; ?></p>
            <p class="event-venue">📍 <?php echo $event['venue']; ?></p>
          </div>
        </div>
        <h3 class="event-title"><?php echo $event['title']; ?></h3>
        <p class="event-desc"><?php echo $event['desc']; ?></p>
        <a href="<?php echo $event['link']; ?>" class="event-link">Register / Learn More →</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>


  
  
  
</main>

<?php include 'footer.php'; ?>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('mobile-menu');
    const navWrapper = document.querySelector('.nav-menu-wrapper');
    if (menuToggle && navWrapper) {
      menuToggle.addEventListener('click', function () {
        navWrapper.classList.toggle('active');
        menuToggle.classList.toggle('is-active');
      });
    }

    // Mobile sub-menu toggle
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
  });
</script>
</body>
</html>
