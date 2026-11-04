<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php 
        if (isset($page_title)) {
            echo $page_title . " | ME Dept - UoP";
        } else {
            echo "Department of Mechanical Engineering | UoP";
        }
    ?>
</title>
  <link rel="icon" type="image/x-icon" href="logo.png">
  <link rel="stylesheet" href="styles.css">

        <?php if (isset($page_css)): ?>
            <link rel="stylesheet" href="css/<?php echo $page_css; ?>">
        <?php endif; ?>
</head>
<body>

<!-- ════════════════════════════════
     SITE HEADER  (Logo + Name)
════════════════════════════════ -->
<header class="site-header">
  <img src="logo.png" alt="Department Logo" class="header-logo" />
  <div class="header-name">
    <span class="dept"><a href="index.php">Department of Mechanical Engineering</a></span>
    <span class="univ"><a href="index.php">University of Peradeniya · Sri Lanka</a></span>
  </div>

  <!-- Nav moved inside header -->
  <nav class="navbar" aria-label="Main navigation">
    <div class="nav-container">
        
        
          <div class="menu-toggle" id="mobile-menu">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </div>

          <div class="nav-menu-wrapper">
              <!-- About Us -->
              <div class="nav-item">
                <span class="nav-link">About Us <span class="arrow">▼</span></span>
                <div class="dropdown">
                    <a href="about.php#overview"       class="dropdown-link">Overview</a>
                    <a href="about.php#history"        class="dropdown-link">History</a>
                    <a href="about.php#vision"         class="dropdown-link">Vision & Mission</a>
                    <a href="about.php#objectives"     class="dropdown-link">Objectives</a>
                    <a href="about.php#accreditation"  class="dropdown-link">Accreditation</a>
                </div>
              </div>

              <!-- Academic -->
              <div class="nav-item">
                <span class="nav-link">Academic <span class="arrow">▼</span></span>
                <div class="dropdown">
                  <a href="academic.php#undergraduate" class="dropdown-link">Undergraduate</a>
                  <a href="academic.php#postgraduate" class="dropdown-link">Postgraduate</a>
                </div>
              </div>

              <!-- Research -->
              <div class="nav-item">
                <span class="nav-link">Research <span class="arrow">▼</span></span>
                <div class="dropdown">
                    <a href="research.php#areas"    class="dropdown-link">Research Areas</a>
                    <a href="research.php#projects" class="dropdown-link">Research Projects</a>
                    <a href="research.php#labs"     class="dropdown-link">Research Labs</a>
                </div>
              </div>

              <!-- People -->
              <div class="nav-item">
                <span class="nav-link">People <span class="arrow">▼</span></span>
                <div class="dropdown">
                    <a href="people.php#academic"    class="dropdown-link">Academic Staff</a>
                    <a href="people.php#nonacademic" class="dropdown-link">Non-Academic Staff</a>
                    <a href="people.php#temporary"   class="dropdown-link">Temporary Staff</a>
                    <a href="people.php#directory"   class="dropdown-link">Directory</a>
                    <a href="people.php#vacancy"     class="dropdown-link">Vacancy</a>
                </div>
              </div>

              <!-- Resources -->
              <div class="nav-item">
                <span class="nav-link">Resources <span class="arrow">▼</span></span>
                <div class="dropdown">
                  <a href="resources.php#journals" class="dropdown-link">Journal Articles</a>
                  <a href="resources.php#conference" class="dropdown-link">Conference Articles</a>
                  <a href="resources.php#books" class="dropdown-link">Magazines / Books</a>
                  <a href="resources.php#bulletin" class="dropdown-link">Research Bulletin</a>
                  <a href="labs.php" class="dropdown-link">Laboratories</a>
                </div>
              </div>

              <!-- Services -->
              <div class="nav-item">
                <span class="nav-link">Services <span class="arrow">▼</span></span>
                <div class="dropdown">
                  <a href="services.php#testing" class="dropdown-link">Testing &amp; Analysis</a>
                  <a href="services.php#consultancy" class="dropdown-link">Consultancy</a>
                  <a href="services.php#workshops" class="dropdown-link">Workshops</a>
                </div>
              </div>

              <!-- Life at ME -->
              <div class="nav-item">
                <span class="nav-link">Life at ME <span class="arrow">▼</span></span>
                <div class="dropdown">
                  <a href="news.php" class="dropdown-link">News &amp; Events</a>
                  <a href="mes.php" class="dropdown-link">MES</a>
                </div>
              </div>

              <!-- Alumni -->
              <div class="nav-item">
                <span class="nav-link">Alumni <span class="arrow">▼</span></span>
                <div class="dropdown">
                  <a href="alumni.php#support" class="dropdown-link">Support Us</a>
                  <a href="alumni.php#join" class="dropdown-link">Join Us</a>
                  <a href="alumni.php#mep" class="dropdown-link">MEP</a>
                  <a href="alumni.php#pefaa" class="dropdown-link">PEFAA</a>
                </div>
              </div>

          </div>
    </div>
  </nav>
</header>

<script>
  // ── Intercept dropdown clicks on the SAME page ──
  // Prevents a full page reload when clicking a dropdown link
  // that points to the current page with a different hash.
  document.addEventListener('DOMContentLoaded', function () {
    const currentPage = window.location.pathname.split('/').pop();

    document.querySelectorAll('.dropdown-link').forEach(function (link) {
      link.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (!href) return;

        const parts    = href.split('#');
        const linkPage = parts[0];   // e.g. "academic.php"
        const hash     = parts[1];   // e.g. "postgraduate"

        // If the link points to the same page and has a hash
        if (hash && (linkPage === currentPage || linkPage === '')) {
          e.preventDefault();
          // Update hash — this fires hashchange which each page listens to
          window.location.hash = hash;
          // Close mobile menu if open
          const navWrapper = document.querySelector('.nav-menu-wrapper');
          if (navWrapper) navWrapper.classList.remove('active');
        }
      });
    });
  });
</script>