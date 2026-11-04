<?php 
  $page_title = "Research Laboratories"; 
  include 'header.php'; 
?>
<link rel="stylesheet" href="labs.css">

<!-- ════════════════════════════════
     PAGE BANNER
════════════════════════════════ -->
<div class="page-banner">
  <div class="breadcrumb">
    <a href="index.php">Home</a><span>›</span><span>Research</span><span>›</span><span>Laboratories</span>
  </div>
  <h1>Research Laboratories</h1>
  <div class="page-banner-line"></div>
</div>

<!-- ════════════════════════════════
     LAB STATS STRIP
════════════════════════════════ -->
<div class="lab-stats-outer">
  <div class="lab-stats-strip">
    <div class="lab-stat-box">
      <span class="lab-stat-num">12</span>
      <span class="lab-stat-lbl">Specialised Laboratories</span>
    </div>
    <div class="lab-stat-box">
      <span class="lab-stat-num">450M+</span>
      <span class="lab-stat-lbl">Equipment Value (LKR)</span>
    </div>
    <div class="lab-stat-box">
      <span class="lab-stat-num">40+</span>
      <span class="lab-stat-lbl">Major Research Instruments</span>
    </div>
    <div class="lab-stat-box">
      <span class="lab-stat-num">200+</span>
      <span class="lab-stat-lbl">Postgraduate Researchers</span>
    </div>
  </div>
</div>

<!-- ════════════════════════════════
     MAIN CONTENT
════════════════════════════════ -->
<main class="main-content">

  <!-- Intro -->
  <div class="labs-intro-wrap">
    <div class="section-heading">
      <div class="heading-accent"></div>
      <h2>Our Laboratories</h2>
      <div class="heading-rule"></div>
    </div>
    <p class="about-intro">
      The Department of Mechanical Engineering houses twelve state-of-the-art research laboratories spanning core disciplines of the field. These facilities support undergraduate teaching, postgraduate research, and industry-focused consultancy and testing services. Each laboratory is managed by dedicated academic staff and equipped with modern instrumentation to international standards.
    </p>
  </div>

  <!-- ── TABS ── -->
  <div class="about-tabs">
    <button class="tab-btn active" data-tab="all">All Labs</button>
    <button class="tab-btn" data-tab="thermal">Thermal &amp; Fluids</button>
    <button class="tab-btn" data-tab="manufacturing">Manufacturing</button>
    <button class="tab-btn" data-tab="materials">Materials</button>
    <button class="tab-btn" data-tab="mechatronics">Mechatronics</button>
  </div>

  <!-- ══════════════════════════════
       TAB: ALL LABS (grid cards)
  ══════════════════════════════ -->
  <div class="tab-panel active" id="tab-all">
    <div class="labs-grid">

      <!-- 1. Fluid Mechanics Lab -->
      <div class="lab-card" data-category="thermal">
        <div class="lab-card-header lc-blue">
          <span class="lab-icon">💧</span>
          <span class="lab-tag">Thermal &amp; Fluids</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Fluid Mechanics Laboratory</h3>
          <p class="lab-desc">Equipped with flow visualisation tunnels, pipe-flow rigs, centrifugal pump test benches, and a subsonic wind tunnel for experimental aerodynamics and hydraulics research.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block A, Room 102</span>
            <span class="lab-meta-item">👨‍🔬 Dr. K. Perera</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">Aerodynamics</span>
            <span class="lab-pill">Hydraulics</span>
            <span class="lab-pill">Flow Measurement</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('fluid')">Learn More →</button>
        </div>
      </div>

      <!-- 2. Heat Transfer Lab -->
      <div class="lab-card" data-category="thermal">
        <div class="lab-card-header lc-orange">
          <span class="lab-icon">🔥</span>
          <span class="lab-tag">Thermal &amp; Fluids</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Heat Transfer &amp; Thermodynamics Laboratory</h3>
          <p class="lab-desc">Houses conduction, convection, and radiation demonstration units, a refrigeration test rig, heat exchanger setups, and a combustion analysis system for thermal research.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block A, Room 105</span>
            <span class="lab-meta-item">👨‍🔬 Dr. S. Jayasinghe</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">Thermodynamics</span>
            <span class="lab-pill">Heat Exchangers</span>
            <span class="lab-pill">Combustion</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('heat')">Learn More →</button>
        </div>
      </div>

      <!-- 3. Manufacturing Lab -->
      <div class="lab-card" data-category="manufacturing">
        <div class="lab-card-header lc-green">
          <span class="lab-icon">⚙️</span>
          <span class="lab-tag">Manufacturing</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Manufacturing Technology Laboratory</h3>
          <p class="lab-desc">Features CNC lathes, milling machines, a 3-axis CNC machining centre, EDM machine, surface grinder, and a coordinate measuring machine (CMM) for precision manufacturing.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block C, Room 201</span>
            <span class="lab-meta-item">👨‍🔬 Prof. R. Wijesinghe</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">CNC Machining</span>
            <span class="lab-pill">Metrology</span>
            <span class="lab-pill">EDM</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('manufacturing')">Learn More →</button>
        </div>
      </div>

      <!-- 4. Welding & Joining Lab -->
      <div class="lab-card" data-category="manufacturing">
        <div class="lab-card-header lc-red">
          <span class="lab-icon">🔩</span>
          <span class="lab-tag">Manufacturing</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Welding &amp; Joining Technology Laboratory</h3>
          <p class="lab-desc">Equipped with MIG, TIG, SMAW welding stations, a friction stir welding machine, and non-destructive testing equipment including ultrasonic and dye-penetrant testing systems.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block C, Room 210</span>
            <span class="lab-meta-item">👨‍🔬 Dr. A. Bandara</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">Welding</span>
            <span class="lab-pill">NDT</span>
            <span class="lab-pill">Joining Processes</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('welding')">Learn More →</button>
        </div>
      </div>

      <!-- 5. Materials Lab -->
      <div class="lab-card" data-category="materials">
        <div class="lab-card-header lc-purple">
          <span class="lab-icon">🧪</span>
          <span class="lab-tag">Materials</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Materials Testing Laboratory</h3>
          <p class="lab-desc">Contains a universal testing machine (UTM), Charpy impact tester, Vickers and Rockwell hardness testers, fatigue testing rig, and specimen preparation equipment.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block B, Room 301</span>
            <span class="lab-meta-item">👨‍🔬 Dr. N. Fernando</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">Tensile Testing</span>
            <span class="lab-pill">Hardness</span>
            <span class="lab-pill">Fatigue</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('materials')">Learn More →</button>
        </div>
      </div>

      <!-- 6. Metallurgy Lab -->
      <div class="lab-card" data-category="materials">
        <div class="lab-card-header lc-gold">
          <span class="lab-icon">🔬</span>
          <span class="lab-tag">Materials</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Metallurgy &amp; Microstructure Laboratory</h3>
          <p class="lab-desc">Houses optical and scanning electron microscopes (SEM), an X-ray diffractometer (XRD), sample polishing and etching equipment, and an image analysis system for microstructural characterisation.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block B, Room 305</span>
            <span class="lab-meta-item">👨‍🔬 Prof. C. Ranasinghe</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">SEM</span>
            <span class="lab-pill">XRD</span>
            <span class="lab-pill">Microstructure</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('metallurgy')">Learn More →</button>
        </div>
      </div>

      <!-- 7. Robotics & Automation Lab -->
      <div class="lab-card" data-category="mechatronics">
        <div class="lab-card-header lc-teal">
          <span class="lab-icon">🤖</span>
          <span class="lab-tag">Mechatronics</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Robotics &amp; Automation Laboratory</h3>
          <p class="lab-desc">Features industrial robotic arms, programmable logic controllers (PLCs), a flexible manufacturing cell, collaborative robots (cobots), and a computer vision-based inspection system.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block D, Room 101</span>
            <span class="lab-meta-item">👨‍🔬 Dr. T. Gunawardena</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">Robotics</span>
            <span class="lab-pill">PLC</span>
            <span class="lab-pill">Computer Vision</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('robotics')">Learn More →</button>
        </div>
      </div>

      <!-- 8. Control & Instrumentation Lab -->
      <div class="lab-card" data-category="mechatronics">
        <div class="lab-card-header lc-indigo">
          <span class="lab-icon">📡</span>
          <span class="lab-tag">Mechatronics</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Control Systems &amp; Instrumentation Laboratory</h3>
          <p class="lab-desc">Equipped with data acquisition systems, signal conditioning modules, process control trainers, DSP boards, and LabVIEW workstations for control systems education and research.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block D, Room 108</span>
            <span class="lab-meta-item">👨‍🔬 Dr. M. Dissanayake</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">Control Systems</span>
            <span class="lab-pill">LabVIEW</span>
            <span class="lab-pill">DAQ</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('control')">Learn More →</button>
        </div>
      </div>

      <!-- 9. CAD/CAM & Simulation Lab -->
      <div class="lab-card" data-category="manufacturing">
        <div class="lab-card-header lc-cyan">
          <span class="lab-icon">🖥️</span>
          <span class="lab-tag">Manufacturing</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">CAD/CAM &amp; Simulation Laboratory</h3>
          <p class="lab-desc">A 40-seat computer lab with SOLIDWORKS, ANSYS, ABAQUS, CATIA, and Mastercam licenses. Supports FEA, CFD, and CAM programming for design and manufacturing research.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block E, Room 001</span>
            <span class="lab-meta-item">👨‍🔬 Dr. P. Liyanage</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">FEA</span>
            <span class="lab-pill">CFD</span>
            <span class="lab-pill">CAM</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('cadcam')">Learn More →</button>
        </div>
      </div>

      <!-- 10. Vibration & Dynamics Lab -->
      <div class="lab-card" data-category="thermal">
        <div class="lab-card-header lc-orange">
          <span class="lab-icon">📳</span>
          <span class="lab-tag">Dynamics</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Vibration &amp; Machine Dynamics Laboratory</h3>
          <p class="lab-desc">Contains vibration analysers, accelerometers, a rotor dynamics test rig, shaker tables, and modal analysis software for structural dynamics and condition monitoring research.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block A, Room 115</span>
            <span class="lab-meta-item">👨‍🔬 Dr. L. Karunanayake</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">Modal Analysis</span>
            <span class="lab-pill">Condition Monitoring</span>
            <span class="lab-pill">Rotordynamics</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('vibration')">Learn More →</button>
        </div>
      </div>

      <!-- 11. Renewable Energy Lab -->
      <div class="lab-card" data-category="thermal">
        <div class="lab-card-header lc-green">
          <span class="lab-icon">☀️</span>
          <span class="lab-tag">Thermal &amp; Fluids</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Renewable Energy Laboratory</h3>
          <p class="lab-desc">Equipped with solar PV test rigs, a small-scale wind turbine, biomass gasification unit, solar thermal collectors, and energy monitoring and storage systems for clean-energy research.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block F (Rooftop)</span>
            <span class="lab-meta-item">👨‍🔬 Dr. H. Amarasinghe</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">Solar</span>
            <span class="lab-pill">Wind Energy</span>
            <span class="lab-pill">Biomass</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('renewable')">Learn More →</button>
        </div>
      </div>

      <!-- 12. Additive Manufacturing Lab -->
      <div class="lab-card" data-category="manufacturing">
        <div class="lab-card-header lc-purple">
          <span class="lab-icon">🖨️</span>
          <span class="lab-tag">Manufacturing</span>
        </div>
        <div class="lab-card-body">
          <h3 class="lab-name">Additive Manufacturing Laboratory</h3>
          <p class="lab-desc">Houses FDM, SLA, and SLS 3D printers, a metal 3D printer (DMLS), post-processing equipment, and reverse engineering tools including a structured-light 3D scanner.</p>
          <div class="lab-meta-row">
            <span class="lab-meta-item">📍 Block C, Room 220</span>
            <span class="lab-meta-item">👨‍🔬 Dr. V. Rajapaksha</span>
          </div>
          <div class="lab-tags-row">
            <span class="lab-pill">3D Printing</span>
            <span class="lab-pill">DMLS</span>
            <span class="lab-pill">Reverse Engineering</span>
          </div>
          <button class="lab-learn-btn" onclick="openModal('additive')">Learn More →</button>
        </div>
      </div>

    </div><!-- /labs-grid -->
  </div><!-- /tab-all -->

  <!-- ══ THERMAL & FLUIDS ══ -->
  <div class="tab-panel" id="tab-thermal">
    <div class="labs-filtered-list">
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-blue">💧</div>
        <div class="filtered-lab-info">
          <h3>Fluid Mechanics Laboratory</h3>
          <p>Flow visualisation tunnels, pipe-flow rigs, centrifugal pump test benches, and subsonic wind tunnel. Location: Block A, Room 102.</p>
          <div class="lab-tags-row"><span class="lab-pill">Aerodynamics</span><span class="lab-pill">Hydraulics</span><span class="lab-pill">Flow Measurement</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('fluid')">Details →</button>
      </div>
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-orange">🔥</div>
        <div class="filtered-lab-info">
          <h3>Heat Transfer &amp; Thermodynamics Laboratory</h3>
          <p>Conduction/convection/radiation units, refrigeration test rig, heat exchangers, combustion analysis system. Location: Block A, Room 105.</p>
          <div class="lab-tags-row"><span class="lab-pill">Thermodynamics</span><span class="lab-pill">Heat Exchangers</span><span class="lab-pill">Combustion</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('heat')">Details →</button>
      </div>
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-orange">📳</div>
        <div class="filtered-lab-info">
          <h3>Vibration &amp; Machine Dynamics Laboratory</h3>
          <p>Vibration analysers, rotor dynamics test rig, shaker tables, modal analysis software. Location: Block A, Room 115.</p>
          <div class="lab-tags-row"><span class="lab-pill">Modal Analysis</span><span class="lab-pill">Condition Monitoring</span><span class="lab-pill">Rotordynamics</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('vibration')">Details →</button>
      </div>
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-green">☀️</div>
        <div class="filtered-lab-info">
          <h3>Renewable Energy Laboratory</h3>
          <p>Solar PV rigs, small-scale wind turbine, biomass gasification unit, solar thermal collectors. Location: Block F (Rooftop).</p>
          <div class="lab-tags-row"><span class="lab-pill">Solar</span><span class="lab-pill">Wind Energy</span><span class="lab-pill">Biomass</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('renewable')">Details →</button>
      </div>
    </div>
  </div>

  <!-- ══ MANUFACTURING ══ -->
  <div class="tab-panel" id="tab-manufacturing">
    <div class="labs-filtered-list">
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-green">⚙️</div>
        <div class="filtered-lab-info">
          <h3>Manufacturing Technology Laboratory</h3>
          <p>CNC lathes, milling machines, 3-axis machining centre, EDM machine, CMM. Location: Block C, Room 201.</p>
          <div class="lab-tags-row"><span class="lab-pill">CNC Machining</span><span class="lab-pill">Metrology</span><span class="lab-pill">EDM</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('manufacturing')">Details →</button>
      </div>
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-red">🔩</div>
        <div class="filtered-lab-info">
          <h3>Welding &amp; Joining Technology Laboratory</h3>
          <p>MIG/TIG/SMAW welding stations, friction stir welding, ultrasonic and dye-penetrant NDT systems. Location: Block C, Room 210.</p>
          <div class="lab-tags-row"><span class="lab-pill">Welding</span><span class="lab-pill">NDT</span><span class="lab-pill">Joining Processes</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('welding')">Details →</button>
      </div>
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-cyan">🖥️</div>
        <div class="filtered-lab-info">
          <h3>CAD/CAM &amp; Simulation Laboratory</h3>
          <p>40-seat lab with SOLIDWORKS, ANSYS, ABAQUS, CATIA, Mastercam. Location: Block E, Room 001.</p>
          <div class="lab-tags-row"><span class="lab-pill">FEA</span><span class="lab-pill">CFD</span><span class="lab-pill">CAM</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('cadcam')">Details →</button>
      </div>
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-purple">🖨️</div>
        <div class="filtered-lab-info">
          <h3>Additive Manufacturing Laboratory</h3>
          <p>FDM, SLA, SLS printers, metal DMLS printer, structured-light 3D scanner. Location: Block C, Room 220.</p>
          <div class="lab-tags-row"><span class="lab-pill">3D Printing</span><span class="lab-pill">DMLS</span><span class="lab-pill">Reverse Engineering</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('additive')">Details →</button>
      </div>
    </div>
  </div>

  <!-- ══ MATERIALS ══ -->
  <div class="tab-panel" id="tab-materials">
    <div class="labs-filtered-list">
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-purple">🧪</div>
        <div class="filtered-lab-info">
          <h3>Materials Testing Laboratory</h3>
          <p>Universal testing machine, Charpy impact tester, Vickers/Rockwell hardness testers, fatigue testing rig. Location: Block B, Room 301.</p>
          <div class="lab-tags-row"><span class="lab-pill">Tensile Testing</span><span class="lab-pill">Hardness</span><span class="lab-pill">Fatigue</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('materials')">Details →</button>
      </div>
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-gold">🔬</div>
        <div class="filtered-lab-info">
          <h3>Metallurgy &amp; Microstructure Laboratory</h3>
          <p>Optical and scanning electron microscopes, X-ray diffractometer (XRD), image analysis system. Location: Block B, Room 305.</p>
          <div class="lab-tags-row"><span class="lab-pill">SEM</span><span class="lab-pill">XRD</span><span class="lab-pill">Microstructure</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('metallurgy')">Details →</button>
      </div>
    </div>
  </div>

  <!-- ══ MECHATRONICS ══ -->
  <div class="tab-panel" id="tab-mechatronics">
    <div class="labs-filtered-list">
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-teal">🤖</div>
        <div class="filtered-lab-info">
          <h3>Robotics &amp; Automation Laboratory</h3>
          <p>Industrial robotic arms, PLCs, flexible manufacturing cell, collaborative robots, computer vision inspection. Location: Block D, Room 101.</p>
          <div class="lab-tags-row"><span class="lab-pill">Robotics</span><span class="lab-pill">PLC</span><span class="lab-pill">Computer Vision</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('robotics')">Details →</button>
      </div>
      <div class="filtered-lab-row">
        <div class="filtered-lab-icon lc-indigo">📡</div>
        <div class="filtered-lab-info">
          <h3>Control Systems &amp; Instrumentation Laboratory</h3>
          <p>Data acquisition systems, process control trainers, DSP boards, LabVIEW workstations. Location: Block D, Room 108.</p>
          <div class="lab-tags-row"><span class="lab-pill">Control Systems</span><span class="lab-pill">LabVIEW</span><span class="lab-pill">DAQ</span></div>
        </div>
        <button class="lab-learn-btn" onclick="openModal('control')">Details →</button>
      </div>
    </div>
  </div>

  <!-- ════════════════════════════════
       LAB ACCESS & BOOKING
  ════════════════════════════════ -->
  <div class="lab-access-section">
    <div class="section-heading">
      <div class="heading-accent"></div>
      <h2>Laboratory Access &amp; Booking</h2>
      <div class="heading-rule"></div>
    </div>

    <div class="access-grid">
      <div class="access-card">
        <span class="access-icon">🎓</span>
        <h4>Undergraduate Students</h4>
        <p>Lab sessions are scheduled as part of the curriculum. Timetables are circulated at the beginning of each semester. Bring your student ID and log book to every session.</p>
      </div>
      <div class="access-card">
        <span class="access-icon">📚</span>
        <h4>Postgraduate Researchers</h4>
        <p>Researchers may book lab time through the online booking system. Contact the relevant lab supervisor to register and obtain lab access clearance before your first session.</p>
        <a href="#" class="access-link">→ Online Booking System</a>
      </div>
      <div class="access-card">
        <span class="access-icon">🏭</span>
        <h4>Industry &amp; External Users</h4>
        <p>Testing, analysis, and consultancy services are available to external organisations. Contact the Department for a quotation and to arrange access under our service agreements.</p>
        <a href="services.php#testing" class="access-link">→ Testing &amp; Analysis Services</a>
      </div>
      <div class="access-card">
        <span class="access-icon">⚠️</span>
        <h4>Safety &amp; Regulations</h4>
        <p>All lab users must complete the induction and sign the safety declaration before use. PPE is mandatory in all physical labs. Refer to the lab-specific safety handbook.</p>
        <a href="#" class="access-link">→ Download Safety Handbook</a>
      </div>
    </div>
  </div>

</main>

<!-- ════════════════════════════════
     MODAL OVERLAY
════════════════════════════════ -->
<div class="lab-modal-overlay" id="labModal" onclick="closeModalOutside(event)">
  <div class="lab-modal" id="labModalContent">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <div id="modalBody"></div>
  </div>
</div>

<?php include 'footer.php'; ?>

<!-- ════════════════════════════════
     JAVASCRIPT
════════════════════════════════ -->
<script>
(function () {

  // ── Tab switching ──
  const tabBtns   = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  function switchTab(name) {
    tabBtns.forEach(b => b.classList.remove('active'));
    tabPanels.forEach(p => p.classList.remove('active'));
    const btn   = document.querySelector('[data-tab="' + name + '"]');
    const panel = document.getElementById('tab-' + name);
    if (btn)   btn.classList.add('active');
    if (panel) panel.classList.add('active');
  }

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      switchTab(btn.dataset.tab);
      history.replaceState(null, '', '#' + btn.dataset.tab);
    });
  });

  const tabMap = { all: 'all', thermal: 'thermal', manufacturing: 'manufacturing', materials: 'materials', mechatronics: 'mechatronics' };
  function handleHash() {
    const hash = window.location.hash.replace('#', '');
    if (hash && tabMap[hash]) switchTab(tabMap[hash]);
  }
  handleHash();
  window.addEventListener('hashchange', handleHash);

  // ── Hamburger menu ──
  const menuToggle = document.getElementById('mobile-menu');
  const navWrapper = document.querySelector('.nav-menu-wrapper');
  if (menuToggle && navWrapper) {
    menuToggle.addEventListener('click', () => navWrapper.classList.toggle('active'));
  }

  // ── Mobile dropdown toggles ──
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

  // ── Copyright year ──
  const yearSpan = document.getElementById('copyrightYear');
  if (yearSpan) yearSpan.textContent = new Date().getFullYear();

})();

// ── Modal data ──
const labData = {
  fluid: {
    icon: '💧', color: 'lc-blue', category: 'Thermal & Fluids',
    name: 'Fluid Mechanics Laboratory',
    location: 'Block A, Room 102', supervisor: 'Dr. K. Perera (k.perera@eng.pdn.ac.lk)',
    capacity: '25 students (undergraduate) · 8 researchers (postgraduate)',
    equipment: ['Subsonic Wind Tunnel (0–30 m/s)', 'Open Channel Flow Rig', 'Pipe Flow & Loss Measurement System', 'Centrifugal Pump Test Bench', 'Flow Visualisation Tank', 'Pitot Tube & Orifice Plate Sets', 'Hydraulic Bench', 'Boundary Layer Measurement Apparatus'],
    research: 'Current research focuses on drag reduction in internal flows, biomimetic aerodynamics, and optimisation of hydro-turbine blade profiles.',
    courses: ['ME 2101 – Fluid Mechanics I', 'ME 3205 – Fluid Mechanics II', 'ME 4301 – Turbomachinery', 'ME 6110 – Advanced Fluid Dynamics (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 5:00 PM · Saturdays by appointment'
  },
  heat: {
    icon: '🔥', color: 'lc-orange', category: 'Thermal & Fluids',
    name: 'Heat Transfer & Thermodynamics Laboratory',
    location: 'Block A, Room 105', supervisor: 'Dr. S. Jayasinghe (s.jayasinghe@eng.pdn.ac.lk)',
    capacity: '24 students (undergraduate) · 6 researchers (postgraduate)',
    equipment: ['Linear Conduction Apparatus', 'Radial Conduction Unit', 'Free & Forced Convection Rig', 'Radiation Heat Transfer Trainer', 'Shell-and-Tube Heat Exchanger Test Rig', 'Plate Heat Exchanger Unit', 'Vapour Compression Refrigeration Trainer', 'Gas Analyser (Testo 350)'],
    research: 'Research areas include enhanced heat transfer surfaces, waste heat recovery systems, and PCM-based thermal storage.',
    courses: ['ME 2102 – Thermodynamics I', 'ME 3206 – Heat Transfer', 'ME 4302 – Refrigeration & Air Conditioning', 'ME 6111 – Advanced Thermal Systems (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 5:00 PM · Saturdays by appointment'
  },
  manufacturing: {
    icon: '⚙️', color: 'lc-green', category: 'Manufacturing',
    name: 'Manufacturing Technology Laboratory',
    location: 'Block C, Room 201', supervisor: 'Prof. R. Wijesinghe (r.wijesinghe@eng.pdn.ac.lk)',
    capacity: '20 students (undergraduate) · 10 researchers (postgraduate)',
    equipment: ['3-Axis CNC Machining Centre (HAAS VF-2)', 'CNC Turning Centre (Mazak QT-10)', 'Conventional Lathes (×4)', 'Vertical Milling Machines (×3)', 'Surface Grinder', 'EDM (Die-Sinking & Wire)', 'Coordinate Measuring Machine (Zeiss Contura)', 'Tooling & Fixture Workshop'],
    research: 'Research spans precision micro-machining, cutting tool wear monitoring using AI, and green machining with MQL lubrication.',
    courses: ['ME 2103 – Manufacturing Processes I', 'ME 3207 – Manufacturing Processes II', 'ME 4303 – Advanced Manufacturing', 'ME 6112 – Precision Engineering (PG)'],
    hours: 'Mon–Fri: 7:30 AM – 5:30 PM · Saturdays: 8:00 AM – 1:00 PM'
  },
  welding: {
    icon: '🔩', color: 'lc-red', category: 'Manufacturing',
    name: 'Welding & Joining Technology Laboratory',
    location: 'Block C, Room 210', supervisor: 'Dr. A. Bandara (a.bandara@eng.pdn.ac.lk)',
    capacity: '16 students (undergraduate) · 6 researchers (postgraduate)',
    equipment: ['MIG Welding Stations (×6)', 'TIG Welding Stations (×4)', 'SMAW (Arc) Welding Stations (×4)', 'Friction Stir Welding Machine', 'Spot Welding Machine', 'Ultrasonic NDT System (Olympus)', 'Dye Penetrant & Magnetic Particle Testing Kits', 'Weld Joint Tensile Tester'],
    research: 'Research includes dissimilar metal joining, weld quality prediction using machine learning, and FSW parameter optimisation for aluminium alloys.',
    courses: ['ME 3208 – Joining Technology', 'ME 4304 – Non-Destructive Testing', 'ME 6113 – Advanced Joining Processes (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 5:00 PM'
  },
  materials: {
    icon: '🧪', color: 'lc-purple', category: 'Materials',
    name: 'Materials Testing Laboratory',
    location: 'Block B, Room 301', supervisor: 'Dr. N. Fernando (n.fernando@eng.pdn.ac.lk)',
    capacity: '20 students (undergraduate) · 8 researchers (postgraduate)',
    equipment: ['Universal Testing Machine – 100 kN (Instron 5982)', 'Charpy & Izod Impact Tester', 'Vickers Hardness Tester (HMV-2T)', 'Rockwell Hardness Tester', 'Brinell Hardness Tester', 'Rotating Bending Fatigue Tester', 'Creep Testing Machine (900°C)', 'Specimen Preparation (Cutting, Mounting, Polishing)'],
    research: 'Research focuses on fatigue life prediction, creep behaviour of high-temperature alloys, and mechanical characterisation of composite materials.',
    courses: ['ME 2104 – Engineering Materials', 'ME 3209 – Strength of Materials Lab', 'ME 4305 – Advanced Materials Testing', 'ME 6114 – Composite Materials (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 5:00 PM'
  },
  metallurgy: {
    icon: '🔬', color: 'lc-gold', category: 'Materials',
    name: 'Metallurgy & Microstructure Laboratory',
    location: 'Block B, Room 305', supervisor: 'Prof. C. Ranasinghe (c.ranasinghe@eng.pdn.ac.lk)',
    capacity: '12 students (undergraduate) · 6 researchers (postgraduate)',
    equipment: ['Scanning Electron Microscope with EDS (JEOL JSM-6510)', 'Optical Microscope (Olympus BX53M) ×4', 'X-Ray Diffractometer (Bruker D2 Phaser)', 'Automatic Polishing Machine (Struers Tegramin)', 'Precision Cutting Machine', 'Vacuum Hot Press', 'Image Analysis Software (ImageJ, Clemex)', 'Thermal Etching Furnace'],
    research: 'Active research in phase transformation of steels, nanocomposite microstructure, EBSD texture analysis, and corrosion characterisation.',
    courses: ['ME 2105 – Engineering Metallurgy', 'ME 4306 – Physical Metallurgy', 'ME 6115 – Advanced Characterisation Techniques (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 5:00 PM · Prior booking required for SEM/XRD'
  },
  robotics: {
    icon: '🤖', color: 'lc-teal', category: 'Mechatronics',
    name: 'Robotics & Automation Laboratory',
    location: 'Block D, Room 101', supervisor: 'Dr. T. Gunawardena (t.gunawardena@eng.pdn.ac.lk)',
    capacity: '20 students (undergraduate) · 8 researchers (postgraduate)',
    equipment: ['ABB IRB 1200 Industrial Robot ×2', 'KUKA KR 6 R900 Robot Arm', 'Universal Robots UR5 Cobot ×2', 'Siemens S7-1200 PLC Trainers ×6', 'Flexible Manufacturing Cell (Conveyor + Vision)', 'Intel RealSense Depth Camera Modules', 'ROS (Robot Operating System) Workstations', 'MATLAB Robotics Toolbox Licences'],
    research: 'Research covers human-robot collaboration, vision-guided robotic assembly, swarm robotics for agricultural applications, and AI-based pick-and-place systems.',
    courses: ['ME 4307 – Robotics & Automation', 'ME 4308 – Industrial Automation', 'ME 6116 – Advanced Robotics (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 6:00 PM · Saturdays: 9:00 AM – 1:00 PM'
  },
  control: {
    icon: '📡', color: 'lc-indigo', category: 'Mechatronics',
    name: 'Control Systems & Instrumentation Laboratory',
    location: 'Block D, Room 108', supervisor: 'Dr. M. Dissanayake (m.dissanayake@eng.pdn.ac.lk)',
    capacity: '24 students (undergraduate) · 6 researchers (postgraduate)',
    equipment: ['NI DAQ USB-6001 Modules ×12', 'NI myRIO Embedded Systems ×10', 'Process Control Trainer (Tank Level, Temperature)', 'PID Controller Trainers ×6', 'TMS320 DSP Development Boards ×8', 'LabVIEW Campus Licence (40 seats)', 'Oscilloscopes & Function Generators', 'Signal Conditioning Modules & Sensor Kits'],
    research: 'Research includes adaptive control for flexible structures, IoT-based industrial monitoring, and model predictive control for HVAC systems.',
    courses: ['ME 3210 – Control Systems', 'ME 4309 – Instrumentation & Measurement', 'ME 6117 – Advanced Control (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 5:00 PM'
  },
  cadcam: {
    icon: '🖥️', color: 'lc-cyan', category: 'Manufacturing',
    name: 'CAD/CAM & Simulation Laboratory',
    location: 'Block E, Room 001', supervisor: 'Dr. P. Liyanage (p.liyanage@eng.pdn.ac.lk)',
    capacity: '40 workstations (open access for all ME students)',
    equipment: ['High-Performance Workstations ×40 (Intel i9, 64 GB RAM, RTX 4080)', 'SOLIDWORKS 2024 (Network Licence)', 'ANSYS Mechanical & Fluent 2024 R1', 'ABAQUS/CAE 2023', 'CATIA V5 (×10 seats)', 'Mastercam 2024 (×10 seats)', 'MATLAB & Simulink Campus Licence', 'Large-Format Technical Plotter (A0)'],
    research: 'Supports multi-physics simulation, topology optimisation, digital twin development, and CFD research across all departmental research groups.',
    courses: ['ME 2106 – Engineering Drawing & CAD', 'ME 3211 – FEA & Simulation', 'ME 4310 – CAD/CAM Integration', 'ME 6118 – Computational Mechanics (PG)'],
    hours: 'Mon–Fri: 7:30 AM – 9:00 PM · Sat–Sun: 9:00 AM – 5:00 PM'
  },
  vibration: {
    icon: '📳', color: 'lc-orange', category: 'Dynamics',
    name: 'Vibration & Machine Dynamics Laboratory',
    location: 'Block A, Room 115', supervisor: 'Dr. L. Karunanayake (l.karunanayake@eng.pdn.ac.lk)',
    capacity: '20 students (undergraduate) · 6 researchers (postgraduate)',
    equipment: ['4-Channel Vibration Analyser (Brüel & Kjær Type 3676)', 'Piezoelectric Accelerometers (PCB Piezotronics) ×20', 'Electromagnetic Shaker (100 N, 0–10 kHz)', 'Rotor Dynamics Test Rig (Bently Nevada)', 'Laser Doppler Vibrometer', 'Modal Analysis Software (ME\'scope VES)', 'Balancing Machine (Schenck)', 'Acoustic Emission Monitoring System'],
    research: 'Research focuses on structural health monitoring, gear and bearing fault diagnosis, active vibration control, and NVH characterisation of mechanical assemblies.',
    courses: ['ME 3212 – Engineering Vibrations', 'ME 4311 – Machine Dynamics', 'ME 6119 – Advanced Vibration Analysis (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 5:00 PM'
  },
  renewable: {
    icon: '☀️', color: 'lc-green', category: 'Thermal & Fluids',
    name: 'Renewable Energy Laboratory',
    location: 'Block F (Rooftop Level)', supervisor: 'Dr. H. Amarasinghe (h.amarasinghe@eng.pdn.ac.lk)',
    capacity: '20 students (undergraduate) · 8 researchers (postgraduate)',
    equipment: ['Monocrystalline & Polycrystalline PV Test Arrays (5 kWp total)', 'Small Horizontal-Axis Wind Turbine (1 kW)', 'Fixed-Bed Biomass Gasification Unit', 'Flat-Plate & Evacuated-Tube Solar Thermal Collectors', 'Lithium-Ion Battery Energy Storage System (10 kWh)', 'Solar Irradiance & Meteorological Station', 'Grid-Connected & Off-Grid Inverters', 'Energy Monitoring Dashboard (real-time)'],
    research: 'Research covers MPPT optimisation algorithms, hybrid renewable systems for rural Sri Lanka, biomass gasification efficiency, and solar cooling systems.',
    courses: ['ME 4312 – Renewable Energy Systems', 'ME 4313 – Energy Conversion', 'ME 6120 – Advanced Energy Systems (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 5:00 PM (outdoor access Mon–Sat 7:00 AM – 6:00 PM)'
  },
  additive: {
    icon: '🖨️', color: 'lc-purple', category: 'Manufacturing',
    name: 'Additive Manufacturing Laboratory',
    location: 'Block C, Room 220', supervisor: 'Dr. V. Rajapaksha (v.rajapaksha@eng.pdn.ac.lk)',
    capacity: '16 students (undergraduate) · 8 researchers (postgraduate)',
    equipment: ['FDM Printers – Ultimaker S5 ×4, Creality Ender 5 Plus ×4', 'SLA Printer – Formlabs Form 3L', 'SLS Printer – Formlabs Fuse 1+', 'Metal 3D Printer – EOS M 100 (DMLS, Stainless/Ti)', 'Structured-Light 3D Scanner (Artec Leo)', 'Post-Processing: UV Curing, Ultrasonic Cleaning, Shot Blasting', 'Slicer Software: PrusaSlicer, Chitubox, Materialise Magics', 'Tensile/Hardness Testing for AM Specimens'],
    research: 'Research includes lattice structure optimisation, multi-material FDM, biomedical implant design using DMLS, and surface finish characterisation of AM parts.',
    courses: ['ME 4314 – Additive Manufacturing', 'ME 4315 – Rapid Prototyping', 'ME 6121 – Advanced AM Processes (PG)'],
    hours: 'Mon–Fri: 8:00 AM – 6:00 PM · Saturdays: 9:00 AM – 1:00 PM'
  }
};

function openModal(key) {
  const d = labData[key];
  if (!d) return;

  const equipmentList = d.equipment.map(e => `<li>${e}</li>`).join('');
  const courseList    = d.courses.map(c => `<span class="lab-pill">${c}</span>`).join('');

  document.getElementById('modalBody').innerHTML = `
    <div class="modal-header ${d.color}">
      <span class="modal-icon">${d.icon}</span>
      <div>
        <span class="lab-tag">${d.category}</span>
        <h2 class="modal-title">${d.name}</h2>
      </div>
    </div>
    <div class="modal-details">
      <div class="modal-meta-grid">
        <div class="modal-meta-item"><strong>📍 Location</strong><span>${d.location}</span></div>
        <div class="modal-meta-item"><strong>👨‍🔬 Supervisor</strong><span>${d.supervisor}</span></div>
        <div class="modal-meta-item"><strong>👥 Capacity</strong><span>${d.capacity}</span></div>
        <div class="modal-meta-item"><strong>🕐 Hours</strong><span>${d.hours}</span></div>
      </div>
      <div class="modal-section">
        <h4>Major Equipment &amp; Instruments</h4>
        <ul class="modal-equip-list">${equipmentList}</ul>
      </div>
      <div class="modal-section">
        <h4>Research Focus</h4>
        <p>${d.research}</p>
      </div>
      <div class="modal-section">
        <h4>Courses Supported</h4>
        <div class="lab-tags-row">${courseList}</div>
      </div>
      <div class="modal-section">
        <a href="services.php#testing" class="lab-learn-btn" style="display:inline-block;">Request Testing Service →</a>
        <a href="people.php#academic"  class="lab-learn-btn" style="display:inline-block;margin-left:10px;">Contact Supervisor →</a>
      </div>
    </div>
  `;
  document.getElementById('labModal').classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  document.getElementById('labModal').classList.remove('active');
  document.body.style.overflow = '';
}

function closeModalOutside(e) {
  if (e.target.id === 'labModal') closeModal();
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
</script>
</body>
</html>