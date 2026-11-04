<?php 
  $page_title = "Research"; 
  include 'header.php'; 
?>

<link rel="stylesheet" href="research.css">

<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="breadcrumb"><a href="index.html">Home</a><span>›</span><span>Research</span></div>
  <h1>Research</h1>
  <div class="page-banner-line"></div>
</div>

<!-- MAIN -->
<main class="main-content">

  <!-- Stats Banner -->
  <div class="stats-banner">
    <div class="stat-box"><span class="stat-num">80+</span><span class="stat-lbl">Journal Publications / Year</span></div>
    <div class="stat-box"><span class="stat-num">12</span><span class="stat-lbl">Research Laboratories</span></div>
    <div class="stat-box"><span class="stat-num">18</span><span class="stat-lbl">Active Research Projects</span></div>
    <div class="stat-box"><span class="stat-num">8</span><span class="stat-lbl">International Collaborations</span></div>
  </div>

  <!-- Tabs -->
  <div class="about-tabs">
    <button class="tab-btn active" data-tab="areas">Research Areas</button>
    <button class="tab-btn" data-tab="projects">Research Projects</button>
    <button class="tab-btn" data-tab="labs">Research Labs</button>
  </div>

  <!-- ══ RESEARCH AREAS TAB ══ -->
  <div class="tab-panel active" id="tab-areas">

    <div class="research-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Our Research Focus</h2><div class="heading-rule"></div></div>
        <p class="about-intro">The Department conducts cutting-edge research across a broad spectrum of mechanical engineering disciplines, addressing real-world challenges in energy, manufacturing, infrastructure, and health.</p>
        <p class="about-body">Our research programmes are driven by a commitment to excellence, innovation, and national relevance. Academic staff and postgraduate students work in well-equipped laboratories, collaborating with industry partners and international universities to produce high-impact research outcomes.</p>

        <div class="areas-grid" style="grid-template-columns:1fr 1fr;">

          <div class="area-card">
            <span class="area-icon"></span>
            <h3>Renewable Energy &amp; Thermal Systems</h3>
            <p>Research into solar thermal, wind, biomass, and hybrid energy systems. Covers energy storage, HVAC design, combustion engineering, and thermodynamic optimisation for sustainable infrastructure.</p>
            <div class="area-topics"><span class="topic-tag">Solar PV</span><span class="topic-tag">Wind Energy</span><span class="topic-tag">Biomass</span><span class="topic-tag">HVAC</span><span class="topic-tag">Combustion</span></div>
            <p class="area-staff">Lead Researchers: <strong>Prof. Gunawardena, Dr. Fernando</strong></p>
          </div>

          <div class="area-card">
            <span class="area-icon"></span>
            <h3>Advanced Manufacturing &amp; Industry 4.0</h3>
            <p>Exploring smart manufacturing systems, additive manufacturing, CNC optimisation, lean production, quality engineering, and the integration of IoT and AI into manufacturing processes.</p>
            <div class="area-topics"><span class="topic-tag">Additive Mfg</span><span class="topic-tag">CNC</span><span class="topic-tag">IoT</span><span class="topic-tag">Lean</span><span class="topic-tag">Quality</span></div>
            <p class="area-staff">Lead Researchers: <strong>Prof. Jayasinghe, Ms. Abeysekara</strong></p>
          </div>

          <div class="area-card">
            <span class="area-icon"></span>
            <h3>Computational Fluid Dynamics &amp; Heat Transfer</h3>
            <p>Numerical simulation of fluid flow and heat transfer phenomena. Applications in turbomachinery, aerodynamics, microfluidics, and thermal management of electronic systems.</p>
            <div class="area-topics"><span class="topic-tag">CFD</span><span class="topic-tag">Turbulence</span><span class="topic-tag">Aerodynamics</span><span class="topic-tag">Microfluidics</span></div>
            <p class="area-staff">Lead Researchers: <strong>Prof. Ratnayake</strong></p>
          </div>

          <div class="area-card">
            <span class="area-icon"></span>
            <h3>Robotics, Automation &amp; Control</h3>
            <p>Development of autonomous systems, soft robots, human-robot collaboration interfaces, and intelligent control algorithms for industrial and medical applications.</p>
            <div class="area-topics"><span class="topic-tag">Autonomous Systems</span><span class="topic-tag">Soft Robotics</span><span class="topic-tag">PLC</span><span class="topic-tag">HRI</span></div>
            <p class="area-staff">Lead Researchers: <strong>Dr. Perera</strong></p>
          </div>

          <div class="area-card">
            <span class="area-icon"></span>
            <h3>Materials Science &amp; Structural Mechanics</h3>
            <p>Investigation of composite materials, nanomaterials, failure analysis, fracture mechanics, and finite element modelling for structural and mechanical component design.</p>
            <div class="area-topics"><span class="topic-tag">Composites</span><span class="topic-tag">Nanomaterials</span><span class="topic-tag">FEA</span><span class="topic-tag">Fracture</span></div>
            <p class="area-staff">Lead Researchers: <strong>Prof. Wickramasinghe, Dr. Dissanayake</strong></p>
          </div>

          <div class="area-card">
            <span class="area-icon"></span>
            <h3>Biomechanics &amp; Medical Engineering</h3>
            <p>Applying engineering principles to biological systems — covering prosthetics design, rehabilitation engineering, medical device development, and human motion analysis.</p>
            <div class="area-topics"><span class="topic-tag">Prosthetics</span><span class="topic-tag">Rehabilitation</span><span class="topic-tag">Medical Devices</span><span class="topic-tag">Gait Analysis</span></div>
            <p class="area-staff">Lead Researchers: <strong>Mr. Bandara</strong></p>
          </div>

        </div>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Research Collaborations</h3>
          <div style="display:flex;flex-direction:column;gap:12px;">
            <div style="border-left:3px solid var(--gold);padding-left:10px;"><p style="font-size:0.82rem;font-weight:600;color:var(--maroon-dark);margin-bottom:2px;">German Aerospace Center (DLR)</p><p style="font-size:0.78rem;color:#888;">CFD &amp; Renewable Energy</p></div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;"><p style="font-size:0.82rem;font-weight:600;color:var(--maroon-dark);margin-bottom:2px;">University of Tokyo</p><p style="font-size:0.78rem;color:#888;">Robotics &amp; Automation</p></div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;"><p style="font-size:0.82rem;font-weight:600;color:var(--maroon-dark);margin-bottom:2px;">RMIT University, Australia</p><p style="font-size:0.78rem;color:#888;">Advanced Manufacturing</p></div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;"><p style="font-size:0.82rem;font-weight:600;color:var(--maroon-dark);margin-bottom:2px;">IIT Madras, India</p><p style="font-size:0.78rem;color:#888;">Thermal &amp; Fluid Systems</p></div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;"><p style="font-size:0.82rem;font-weight:600;color:var(--maroon-dark);margin-bottom:2px;">Delft University, Netherlands</p><p style="font-size:0.78rem;color:#888;">Materials Science</p></div>
          </div>
        </div>

        <div class="sidebar-card">
          <h3>Research Funding</h3>
          <ul style="display:flex;flex-direction:column;gap:9px;">
            <li><a href="#" class="sidebar-link">→ NSF Research Grants</a></li>
            <li><a href="#" class="sidebar-link">→ HETC Funding</a></li>
            <li><a href="#" class="sidebar-link">→ AHEAD Project</a></li>
            <li><a href="#" class="sidebar-link">→ Industry-Sponsored Research</a></li>
            <li><a href="#" class="sidebar-link">→ International Grants</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h3>Research Contact</h3>
          <p>For research collaboration, postgraduate supervision, or funding enquiries:</p>
          <p>📞 +94 81 239 3635<br>✉️ <a href="mailto:research.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">research.mech@eng.pdn.ac.lk</a></p>
        </div>
      </aside>
    </div>

    <!-- International Collaborations -->
    <div class="section-heading" style="margin-top:8px;"><div class="heading-accent"></div><h2>International Collaborations</h2><div class="heading-rule"></div></div>
    <div class="collab-grid">
      <div class="collab-card"><p class="collab-country">🇩🇪 Germany</p><p class="collab-org">German Aerospace Center (DLR)</p><p class="collab-area">Joint research in CFD, turbomachinery, and renewable energy. Staff and student exchange programme active since 2022.</p></div>
      <div class="collab-card"><p class="collab-country">🇯🇵 Japan</p><p class="collab-org">University of Tokyo</p><p class="collab-area">Collaborative projects in advanced robotics, human-robot interaction, and autonomous manufacturing systems.</p></div>
      <div class="collab-card"><p class="collab-country">🇦🇺 Australia</p><p class="collab-org">RMIT University</p><p class="collab-area">Additive manufacturing research, materials testing, and a joint PhD co-supervision arrangement.</p></div>
      <div class="collab-card"><p class="collab-country">🇮🇳 India</p><p class="collab-org">IIT Madras</p><p class="collab-area">Heat transfer and fluid mechanics research collaboration, including joint conference organisation and publication.</p></div>
      <div class="collab-card"><p class="collab-country">🇳🇱 Netherlands</p><p class="collab-org">Delft University of Technology</p><p class="collab-area">Materials science and structural mechanics research, particularly in composite and nanomaterial characterisation.</p></div>
      <div class="collab-card"><p class="collab-country">🇬🇧 United Kingdom</p><p class="collab-org">University of Manchester</p><p class="collab-area">Long-standing alumni connection supporting energy systems research and postgraduate student placements.</p></div>
    </div>
  </div>

  <!-- ══ RESEARCH PROJECTS TAB ══ -->
  <div class="tab-panel" id="tab-projects">
    <div class="research-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Active &amp; Recent Projects</h2><div class="heading-rule"></div></div>

        <div class="project-card">
          <span class="project-status status-active">● Active</span>
          <h3 class="project-title">Hybrid Solar-Wind Energy Storage for Rural Electrification in Sri Lanka</h3>
          <div class="project-meta"><span><strong>PI:</strong> Prof. A. Gunawardena</span><span><strong>Funder:</strong> National Science Foundation</span><span><strong>Duration:</strong> 2023 – 2026</span></div>
          <p class="project-desc">This project investigates the design, optimisation, and techno-economic feasibility of hybrid solar-wind energy systems with battery and flywheel storage for off-grid rural communities in Sri Lanka's Northern and Eastern provinces. The project involves field installations, real-time monitoring, and simulation-based optimisation.</p>
          <div class="project-tags"><span class="project-tag">Renewable Energy</span><span class="project-tag">Solar</span><span class="project-tag">Wind</span><span class="project-tag">Energy Storage</span><span class="project-tag">NSF Funded</span></div>
        </div>

        <div class="project-card">
          <span class="project-status status-active">● Active</span>
          <h3 class="project-title">AI-Augmented Fault Detection in CNC Machining Processes</h3>
          <div class="project-meta"><span><strong>PI:</strong> Prof. N. Jayasinghe</span><span><strong>Funder:</strong> HETC / Industry Partner</span><span><strong>Duration:</strong> 2024 – 2026</span></div>
          <p class="project-desc">Developing machine learning algorithms for real-time fault detection and predictive maintenance in CNC machining operations. The project integrates vibration sensors, acoustic emission sensors, and deep learning models to reduce downtime and improve product quality in Sri Lankan manufacturing SMEs.</p>
          <div class="project-tags"><span class="project-tag">AI / ML</span><span class="project-tag">CNC</span><span class="project-tag">Predictive Maintenance</span><span class="project-tag">Industry 4.0</span></div>
        </div>

        <div class="project-card">
          <span class="project-status status-active">● Active</span>
          <h3 class="project-title">Turbulent Flow in Micro-Channels for Electronics Cooling Applications</h3>
          <div class="project-meta"><span><strong>PI:</strong> Prof. P. Ratnayake</span><span><strong>Funder:</strong> NSF / DLR Collaboration</span><span><strong>Duration:</strong> 2023 – 2025</span></div>
          <p class="project-desc">Numerical and experimental investigation of turbulent convective heat transfer in micro-channel heat sinks for high-performance electronics cooling. Results are being validated against experimental data obtained at the Department's Fluid Mechanics Laboratory and DLR facilities in Germany.</p>
          <div class="project-tags"><span class="project-tag">CFD</span><span class="project-tag">Heat Transfer</span><span class="project-tag">Microfluidics</span><span class="project-tag">DLR Collaboration</span></div>
        </div>

        <div class="project-card">
          <span class="project-status status-active">● Active</span>
          <h3 class="project-title">Low-Cost Prosthetic Hand with Myoelectric Control for Amputees</h3>
          <div class="project-meta"><span><strong>PI:</strong> Mr. K. Bandara</span><span><strong>Funder:</strong> AHEAD / Ministry of Health</span><span><strong>Duration:</strong> 2024 – 2027</span></div>
          <p class="project-desc">Design and development of an affordable myoelectric prosthetic hand for upper-limb amputees, leveraging 3D printing and lightweight composite materials. The project is conducted in collaboration with the Teaching Hospital, Peradeniya, and targets a clinical trial phase in 2026.</p>
          <div class="project-tags"><span class="project-tag">Prosthetics</span><span class="project-tag">Biomechanics</span><span class="project-tag">3D Printing</span><span class="project-tag">Medical Devices</span></div>
        </div>

        <div class="project-card">
          <span class="project-status status-upcoming">◆ Upcoming</span>
          <h3 class="project-title">Green Hydrogen Production via Solar-Powered Electrolysis</h3>
          <div class="project-meta"><span><strong>PI:</strong> Dr. S. Fernando</span><span><strong>Funder:</strong> ADB Grant (Pending)</span><span><strong>Duration:</strong> 2025 – 2028</span></div>
          <p class="project-desc">A proposed project to investigate the scalability and efficiency of solar-powered alkaline electrolysis for green hydrogen production, targeting industrial heating and transport fuel applications in Sri Lanka.</p>
          <div class="project-tags"><span class="project-tag">Green Hydrogen</span><span class="project-tag">Solar</span><span class="project-tag">Electrolysis</span><span class="project-tag">Sustainability</span></div>
        </div>

        <div class="project-card" style="opacity:0.75;">
          <span class="project-status status-completed">✓ Completed</span>
          <h3 class="project-title">Characterisation of Natural Fibre-Reinforced Polymer Composites for Structural Applications</h3>
          <div class="project-meta"><span><strong>PI:</strong> Prof. K. Wickramasinghe</span><span><strong>Funder:</strong> NSF</span><span><strong>Duration:</strong> 2021 – 2023</span></div>
          <p class="project-desc">Comprehensive mechanical and thermal characterisation of coir, jute, and banana fibre-reinforced polymer composites. Results published in 4 international journals and contributed to two MSc theses.</p>
          <div class="project-tags"><span class="project-tag">Composites</span><span class="project-tag">Natural Fibres</span><span class="project-tag">Materials Testing</span></div>
        </div>

      </div>

      <!-- Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Project Statistics</h3>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;"><span style="color:#888;">Active Projects</span><span style="color:var(--maroon-dark);font-weight:700;">14</span></div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;"><span style="color:#888;">Upcoming Projects</span><span style="color:var(--maroon-dark);font-weight:700;">4</span></div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;"><span style="color:#888;">Completed (5 yrs)</span><span style="color:var(--maroon-dark);font-weight:700;">22</span></div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;"><span style="color:#888;">Total Funding (LKR)</span><span style="color:var(--maroon-dark);font-weight:700;">180M+</span></div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;"><span style="color:#888;">PhD Students Involved</span><span style="color:var(--maroon-dark);font-weight:700;">28</span></div>
          </div>
        </div>

        <div class="sidebar-card">
          <h3>Funding Bodies</h3>
          <ul style="display:flex;flex-direction:column;gap:9px;">
            <li><a href="#" class="sidebar-link">→ National Science Foundation (NSF)</a></li>
            <li><a href="#" class="sidebar-link">→ HETC Project</a></li>
            <li><a href="#" class="sidebar-link">→ AHEAD Initiative</a></li>
            <li><a href="#" class="sidebar-link">→ Asian Development Bank</a></li>
            <li><a href="#" class="sidebar-link">→ Ministry of Technology</a></li>
            <li><a href="#" class="sidebar-link">→ Industry Sponsors</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h3>Collaborate With Us</h3>
          <p>We welcome industry and academic collaborations. If you have a research challenge or funding, contact us to explore partnership opportunities.</p>
          <p>✉️ <a href="mailto:research.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">research.mech@eng.pdn.ac.lk</a></p>
        </div>
      </aside>
    </div>
  </div>

  <!-- ══ RESEARCH LABS TAB ══ -->
  <div class="tab-panel" id="tab-labs">
    <div class="research-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Research Laboratories</h2><div class="heading-rule"></div></div>
        <p class="about-intro" style="margin-bottom:32px;">The Department operates 12 specialist research and teaching laboratories, equipped with modern instruments and testing facilities to support world-class research and hands-on engineering education.</p>

        <div class="labs-grid">

          <div class="lab-card">
            <div class="lab-card-header"><span class="lab-icon"></span><p class="lab-name">Thermal Engineering &amp; Energy Laboratory</p></div>
            <div class="lab-body"><p class="lab-head">Head: Dr. Samanthi Fernando</p><p class="lab-desc">Supports research and teaching in thermodynamics, heat transfer, HVAC systems, and renewable energy. Houses a solar simulator, heat exchanger test rigs, and a small-scale wind turbine test bench.</p><p class="lab-equipment"><strong>Key Equipment</strong>Solar Simulator · Heat Exchanger Rigs · Calorimeters · Data Acquisition Systems · Wind Turbine Test Bench</p></div>
          </div>

          <div class="lab-card">
            <div class="lab-card-header"><span class="lab-icon"></span><p class="lab-name">Fluid Mechanics Laboratory</p></div>
            <div class="lab-body"><p class="lab-head">Head: Prof. Priya Ratnayake</p><p class="lab-desc">Dedicated to experimental and computational fluid dynamics research. Features subsonic wind tunnels, flow visualisation equipment, and an advanced PIV (Particle Image Velocimetry) system.</p><p class="lab-equipment"><strong>Key Equipment</strong>Subsonic Wind Tunnel · PIV System · Open-Channel Flow Rig · Centrifugal Pump Test Set · CFD Workstations</p></div>
          </div>

          <div class="lab-card">
            <div class="lab-card-header"><span class="lab-icon"></span><p class="lab-name">Manufacturing Systems Laboratory</p></div>
            <div class="lab-body"><p class="lab-head">Head: Prof. Nuwan Jayasinghe</p><p class="lab-desc">Equipped for research in advanced manufacturing including CNC machining, additive manufacturing, and quality systems. Features an FDM 3D printer, SLA printer, and a 3-axis CNC milling machine.</p><p class="lab-equipment"><strong>Key Equipment</strong>3-Axis CNC Milling · FDM &amp; SLA 3D Printers · CMM · Surface Roughness Tester · Acoustic Emission Sensor</p></div>
          </div>

          <div class="lab-card">
            <div class="lab-card-header"><span class="lab-icon"></span><p class="lab-name">Robotics &amp; Automation Laboratory</p></div>
            <div class="lab-body"><p class="lab-head">Head: Dr. Rohan Perera</p><p class="lab-desc">State-of-the-art facility for robotics research including a 6-DOF industrial robot arm, mobile robot platforms, and a real-time control hardware setup for rapid prototyping of control algorithms.</p><p class="lab-equipment"><strong>Key Equipment</strong>6-DOF Robot Arm · Mobile Robots · dSPACE Controller · Arduino &amp; Raspberry Pi Platforms · Vision Systems</p></div>
          </div>

          <div class="lab-card">
            <div class="lab-card-header"><span class="lab-icon"></span><p class="lab-name">Materials Testing Laboratory</p></div>
            <div class="lab-body"><p class="lab-head">Head: Prof. Kumari Wickramasinghe</p><p class="lab-desc">Comprehensive facilities for mechanical and physical testing of engineering materials including metals, polymers, ceramics, and composites. Supports both research and routine undergraduate testing.</p><p class="lab-equipment"><strong>Key Equipment</strong>Universal Testing Machine (100kN) · Charpy Impact Tester · Hardness Tester · SEM Access · Tribometer</p></div>
          </div>

          <div class="lab-card">
            <div class="lab-card-header"><span class="lab-icon"></span><p class="lab-name">Computational Engineering Laboratory</p></div>
            <div class="lab-body"><p class="lab-head">Head: Dr. Chaminda Dissanayake</p><p class="lab-desc">High-performance computing facility supporting FEA, CFD, and multibody dynamics simulation. Equipped with workstations running ANSYS, ABAQUS, SolidWorks, MATLAB, and OpenFOAM.</p><p class="lab-equipment"><strong>Key Equipment</strong>30 High-Performance Workstations · ANSYS · ABAQUS · MATLAB / Simulink · OpenFOAM · SolidWorks</p></div>
          </div>

          <div class="lab-card">
            <div class="lab-card-header"><span class="lab-icon"></span><p class="lab-name">Biomechanics &amp; Medical Engineering Lab</p></div>
            <div class="lab-body"><p class="lab-head">Head: Mr. Kasun Bandara</p><p class="lab-desc">Research facility for biomechanical analysis, prosthetics development, and medical device testing. Includes a motion capture system and access to a clinical trial space at Teaching Hospital, Peradeniya.</p><p class="lab-equipment"><strong>Key Equipment</strong>Motion Capture System · Force Plates · EMG Sensors · Prosthetics Test Rig · 3D Bio-printing Access</p></div>
          </div>

          <div class="lab-card">
            <div class="lab-card-header"><span class="lab-icon"></span><p class="lab-name">Main Engineering Workshop</p></div>
            <div class="lab-body"><p class="lab-head">Head: Mr. Wasantha Silva (Chief Technician)</p><p class="lab-desc">Central fabrication workshop supporting all departments. Provides machining, welding, and fabrication services for research projects and undergraduate practical sessions throughout the year.</p><p class="lab-equipment"><strong>Key Equipment</strong>Lathe Machines · Milling Machines · Drill Press · MIG/TIG Welders · Sheet Metal Tools · Grinding Machines</p></div>
          </div>

        </div>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Lab Access &amp; Booking</h3>
          <p>Laboratories are available to registered postgraduate students and academic staff. Undergraduate students access labs during scheduled sessions.</p>
          <p>To book specialist equipment or arrange a lab visit, contact the relevant lab head or the Chief Technician.</p>
          <a href="#" class="sidebar-link">→ Equipment Booking Form</a>
          <a href="#" class="sidebar-link">→ Lab Safety Guidelines</a>
          <a href="#" class="sidebar-link">→ Induction Requirements</a>
        </div>

        <div class="sidebar-card">
          <h3>External Access</h3>
          <p>Industry partners and external researchers may apply for access to Department laboratories for testing and analysis services.</p>
          <a href="#" class="sidebar-link">→ Testing &amp; Analysis Services</a>
          <a href="#" class="sidebar-link">→ Consultancy Services</a>
          <a href="#" class="sidebar-link">→ Apply for Lab Access</a>
        </div>

        <div class="sidebar-card">
          <h3>Lab Contact</h3>
          <p>Chief Technician: Mr. Wasantha Silva<br>📞 Ext. 3660<br>✉️ <a href="mailto:labs.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">labs.mech@eng.pdn.ac.lk</a></p>
        </div>
      </aside>
    </div>
  </div>

</main>

<?php include 'footer.php'; ?>

<script>
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
  document.getElementById('copyrightYear').textContent = new Date().getFullYear();
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

<script>
  // ── Handle hash on load and on every hashchange ──
  function handleHash() {
    const hash = window.location.hash.replace('#', '');
    if (hash) switchTab(hash);
  }
  handleHash();
  window.addEventListener('hashchange', handleHash);
</script>


</body>
</html>
