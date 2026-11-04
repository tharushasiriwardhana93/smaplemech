<?php 
  $page_title = "Services"; 
  include 'header.php'; 
?>

<link rel="stylesheet" href="services.css">


<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="breadcrumb"><a href="index.html">Home</a><span>›</span><span>Services</span></div>
  <h1>Services</h1>
  <div class="page-banner-line"></div>
</div>

<!-- MAIN -->
<main class="main-content">

  <!-- Services hero strip -->
  <div class="services-hero">
    <div class="service-hero-card" onclick="switchTab('testing')">
      <span class="service-hero-icon"></span>
      <h3>Testing &amp; Analysis</h3>
      <p>Precision material testing, structural analysis, thermal measurement, and fluid characterisation using our specialist laboratories.</p>
    </div>
    <div class="service-hero-card" onclick="switchTab('consultancy')">
      <span class="service-hero-icon"></span>
      <h3>Consultancy</h3>
      <p>Expert engineering consultancy for industry, government, and NGOs — from feasibility studies to full project management.</p>
    </div>
    <div class="service-hero-card" onclick="switchTab('workshops')">
      <span class="service-hero-icon"></span>
      <h3>Workshops &amp; Training</h3>
      <p>Short courses, professional development workshops, and hands-on training programmes for engineers and technicians.</p>
    </div>
  </div>

  <!-- Tabs -->
  <div class="about-tabs">
    <button class="tab-btn active" data-tab="testing">Testing &amp; Analysis</button>
    <button class="tab-btn" data-tab="consultancy">Consultancy</button>
    <button class="tab-btn" data-tab="workshops">Workshops</button>
  </div>

  <!-- ══ TESTING & ANALYSIS ══ -->
  <div class="tab-panel active" id="tab-testing">
    <div class="services-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Testing &amp; Analysis Services</h2><div class="heading-rule"></div></div>
        <p class="about-intro">The Department offers a range of accredited testing and analysis services to industry, government agencies, and research institutions using its specialist laboratories and equipment.</p>
        <p class="about-body">All testing is carried out by trained technical staff under the supervision of qualified academic engineers. Results are provided in formal technical reports suitable for regulatory submission, quality assurance, and research purposes.</p>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Mechanical Properties Testing</p><p class="service-card-sub">Materials Testing Laboratory</p></div>
          </div>
          <p class="service-card-desc">Comprehensive mechanical testing of metals, polymers, composites, and ceramics. Services include tensile, compressive, and flexural testing up to 100 kN; impact testing (Charpy and Izod); hardness testing (Vickers, Rockwell, Brinell); and fatigue life testing.</p>
          <div class="service-tags"><span class="service-tag">Tensile Testing</span><span class="service-tag">Hardness</span><span class="service-tag">Impact Test</span><span class="service-tag">Fatigue</span><span class="service-tag">Flexure</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 5,000 per test · Bulk discounts available · Report included</div>
        </div>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Thermal &amp; Heat Transfer Analysis</p><p class="service-card-sub">Thermal Engineering Laboratory</p></div>
          </div>
          <p class="service-card-desc">Thermal characterisation of materials and systems including thermal conductivity measurement, differential scanning calorimetry (DSC), heat exchanger performance evaluation, and temperature mapping using data acquisition systems and infrared thermography.</p>
          <div class="service-tags"><span class="service-tag">Thermal Conductivity</span><span class="service-tag">DSC</span><span class="service-tag">IR Thermography</span><span class="service-tag">Heat Exchangers</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 8,000 per test · Custom packages available</div>
        </div>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Fluid Flow Characterisation</p><p class="service-card-sub">Fluid Mechanics Laboratory</p></div>
          </div>
          <p class="service-card-desc">Flow measurement and characterisation services including velocity profiling using PIV (Particle Image Velocimetry), flow rate calibration, pressure drop measurement in piping systems, and aerodynamic testing of components in the subsonic wind tunnel.</p>
          <div class="service-tags"><span class="service-tag">PIV</span><span class="service-tag">Flow Rate Calibration</span><span class="service-tag">Wind Tunnel</span><span class="service-tag">Pressure Drop</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 12,000 per session · Includes data report</div>
        </div>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Structural &amp; Vibration Analysis</p><p class="service-card-sub">Computational Engineering Laboratory</p></div>
          </div>
          <p class="service-card-desc">Finite element analysis (FEA) of structural components and assemblies using ANSYS and ABAQUS. Services include stress and strain analysis, modal analysis, buckling analysis, and vibration measurement on physical structures using accelerometers and signal processing.</p>
          <div class="service-tags"><span class="service-tag">FEA</span><span class="service-tag">Modal Analysis</span><span class="service-tag">Vibration Measurement</span><span class="service-tag">Buckling</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 15,000 · Scope-dependent pricing</div>
        </div>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Surface Roughness &amp; Dimensional Inspection</p><p class="service-card-sub">Manufacturing Systems Laboratory</p></div>
          </div>
          <p class="service-card-desc">Precision dimensional inspection using a Coordinate Measuring Machine (CMM) and surface roughness measurement using contact profilometry. Suitable for quality control of machined components, tooling verification, and reverse engineering support.</p>
          <div class="service-tags"><span class="service-tag">CMM Inspection</span><span class="service-tag">Surface Roughness</span><span class="service-tag">Quality Control</span><span class="service-tag">Reverse Engineering</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 4,000 per component</div>
        </div>

        <!-- Process -->
        <div class="section-heading" style="margin-top:36px;"><div class="heading-accent"></div><h2>How to Request a Test</h2><div class="heading-rule"></div></div>
        <div class="process-steps">
          <div class="process-step"><div class="step-num">1</div><div><p class="step-title">Submit an Enquiry</p><p class="step-desc">Contact the Services Office by email or phone describing the test required, material type, and quantity of samples.</p></div></div>
          <div class="process-step"><div class="step-num">2</div><div><p class="step-title">Quotation &amp; Agreement</p><p class="step-desc">The Department will provide a formal quotation. A service agreement is signed before work commences.</p></div></div>
          <div class="process-step"><div class="step-num">3</div><div><p class="step-title">Sample Submission</p><p class="step-desc">Samples are submitted to the relevant laboratory. Standard turnaround is 5–10 working days depending on test complexity.</p></div></div>
          <div class="process-step"><div class="step-num">4</div><div><p class="step-title">Testing &amp; Report</p><p class="step-desc">Tests are performed by qualified technicians. A formal technical report is issued upon completion and payment.</p></div></div>
        </div>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="enquiry-form">
          <h3>Request a Test</h3>
          <p>Fill in the form and we will contact you within 2 working days.</p>
          <div class="form-group"><label>Full Name</label><input type="text" placeholder="Your name" /></div>
          <div class="form-group"><label>Organisation</label><input type="text" placeholder="Company / Institution" /></div>
          <div class="form-group"><label>Email</label><input type="email" placeholder="you@example.com" /></div>
          <div class="form-group"><label>Phone</label><input type="tel" placeholder="+94 xx xxx xxxx" /></div>
          <div class="form-group"><label>Service Required</label>
            <select>
              <option>Mechanical Properties Testing</option>
              <option>Thermal &amp; Heat Transfer Analysis</option>
              <option>Fluid Flow Characterisation</option>
              <option>Structural &amp; Vibration Analysis</option>
              <option>Surface Roughness &amp; CMM Inspection</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group"><label>Description</label><textarea rows="4" placeholder="Describe your testing requirement…"></textarea></div>
          <button class="btn-submit">Send Enquiry →</button>
        </div>
        <div class="sidebar-card" style="margin-top:22px;">
          <h3>Services Contact</h3>
          <p> +94 81 239 3636<br> <a href="mailto:services.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">services.mech@eng.pdn.ac.lk</a></p>
          <p style="margin-top:8px;font-size:0.82rem;color:#888;">Office hours: Mon–Fri, 8:30 AM – 4:30 PM</p>
        </div>
      </aside>
    </div>
  </div>

  <!-- ══ CONSULTANCY ══ -->
  <div class="tab-panel" id="tab-consultancy">
    <div class="services-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Consultancy Services</h2><div class="heading-rule"></div></div>
        <p class="about-intro">The Department's academic staff offer professional engineering consultancy to industry, government bodies, and development organisations across a wide range of mechanical engineering disciplines.</p>
        <p class="about-body">Our consultants bring decades of academic expertise and real-world research experience to every engagement. All consultancy work is conducted in accordance with the University of Peradeniya's consultancy policy and the IESL Code of Ethics.</p>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Energy Audit &amp; Feasibility Studies</p><p class="service-card-sub">Energy Systems Group</p></div>
          </div>
          <p class="service-card-desc">Comprehensive energy audits for industrial facilities, hospitals, and commercial buildings. Includes identification of energy saving opportunities, renewable energy feasibility assessments (solar, wind, biomass), and investment return analysis. Suitable for compliance with Sri Lanka Sustainable Energy Authority guidelines.</p>
          <div class="service-tags"><span class="service-tag">Energy Audit</span><span class="service-tag">Solar Feasibility</span><span class="service-tag">HVAC Optimisation</span><span class="service-tag">ROI Analysis</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 75,000 · Scope-based quotation</div>
        </div>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Structural Engineering Consultancy</p><p class="service-card-sub">Mechanics &amp; Materials Group</p></div>
          </div>
          <p class="service-card-desc">Structural integrity assessment, failure investigation, and design optimisation for mechanical components and structures. Includes FEA-based analysis, remaining life estimation, fitness-for-service assessments, and expert witness support for legal proceedings.</p>
          <div class="service-tags"><span class="service-tag">Failure Investigation</span><span class="service-tag">FEA Consultancy</span><span class="service-tag">Fitness-for-Service</span><span class="service-tag">Expert Witness</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 50,000 · Day-rate available</div>
        </div>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Manufacturing Process Improvement</p><p class="service-card-sub">Manufacturing Systems Group</p></div>
          </div>
          <p class="service-card-desc">Lean manufacturing implementation, process optimisation, quality management system (QMS) development, and factory layout design. Particularly suited to SMEs in Sri Lanka's manufacturing sector seeking to improve productivity, reduce waste, and achieve ISO certification.</p>
          <div class="service-tags"><span class="service-tag">Lean Manufacturing</span><span class="service-tag">QMS</span><span class="service-tag">ISO Support</span><span class="service-tag">Process Mapping</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 60,000 · Retainer packages available</div>
        </div>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Automation &amp; Robotics Consultancy</p><p class="service-card-sub">Robotics &amp; Control Group</p></div>
          </div>
          <p class="service-card-desc">Technical consultancy for industrial automation projects — from feasibility and technology selection through to system design, integration support, and staff training. Covers PLC programming, robot selection, conveyor systems, and SCADA integration.</p>
          <div class="service-tags"><span class="service-tag">PLC Programming</span><span class="service-tag">Robot Integration</span><span class="service-tag">SCADA</span><span class="service-tag">Automation Design</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 80,000 · Project-based pricing</div>
        </div>

        <div class="service-card">
          <div class="service-card-header">
            <div class="service-card-icon"></div>
            <div><p class="service-card-title">Environmental &amp; Sustainability Consulting</p><p class="service-card-sub">Interdisciplinary Group</p></div>
          </div>
          <p class="service-card-desc">Life cycle assessment (LCA), carbon footprint analysis, environmental impact assessment (EIA) support for engineering projects, and sustainability strategy development for manufacturing companies. Includes reporting for green certification programmes.</p>
          <div class="service-tags"><span class="service-tag">LCA</span><span class="service-tag">Carbon Footprint</span><span class="service-tag">EIA Support</span><span class="service-tag">Green Certification</span></div>
          <div class="service-fee"> <strong>Fee:</strong> From LKR 40,000 · Report-based pricing</div>
        </div>

        <!-- Past clients -->
        <div class="section-heading" style="margin-top:36px;"><div class="heading-accent"></div><h2>Past Clients</h2><div class="heading-rule"></div></div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:20px;">
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:14px 16px;text-align:center;font-family:'Oswald',sans-serif;font-size:0.72rem;letter-spacing:0.08em;text-transform:uppercase;color:var(--maroon-dark);">Ceylon Electricity Board</div>
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:14px 16px;text-align:center;font-family:'Oswald',sans-serif;font-size:0.72rem;letter-spacing:0.08em;text-transform:uppercase;color:var(--maroon-dark);">National Water Supply Board</div>
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:14px 16px;text-align:center;font-family:'Oswald',sans-serif;font-size:0.72rem;letter-spacing:0.08em;text-transform:uppercase;color:var(--maroon-dark);">Lanka Hospitals PLC</div>
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:14px 16px;text-align:center;font-family:'Oswald',sans-serif;font-size:0.72rem;letter-spacing:0.08em;text-transform:uppercase;color:var(--maroon-dark);">Sri Lanka Army Corps of Engineers</div>
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:14px 16px;text-align:center;font-family:'Oswald',sans-serif;font-size:0.72rem;letter-spacing:0.08em;text-transform:uppercase;color:var(--maroon-dark);">Dialog Axiata PLC</div>
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:14px 16px;text-align:center;font-family:'Oswald',sans-serif;font-size:0.72rem;letter-spacing:0.08em;text-transform:uppercase;color:var(--maroon-dark);">Ministry of Power &amp; Energy</div>
        </div>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="enquiry-form">
          <h3>Request Consultancy</h3>
          <p>Tell us about your project and we'll match you with the right expert.</p>
          <div class="form-group"><label>Full Name</label><input type="text" placeholder="Your name" /></div>
          <div class="form-group"><label>Organisation</label><input type="text" placeholder="Company / Institution" /></div>
          <div class="form-group"><label>Email</label><input type="email" placeholder="you@example.com" /></div>
          <div class="form-group"><label>Phone</label><input type="tel" placeholder="+94 xx xxx xxxx" /></div>
          <div class="form-group"><label>Service Area</label>
            <select>
              <option>Energy Audit &amp; Feasibility</option>
              <option>Structural Engineering</option>
              <option>Manufacturing Improvement</option>
              <option>Automation &amp; Robotics</option>
              <option>Environmental &amp; Sustainability</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group"><label>Project Brief</label><textarea rows="4" placeholder="Briefly describe your project or challenge…"></textarea></div>
          <button class="btn-submit">Submit Request →</button>
        </div>
        <div class="sidebar-card" style="margin-top:22px;">
          <h3>Consultancy Office</h3>
          <p> +94 81 239 3637<br> <a href="mailto:consult.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">consult.mech@eng.pdn.ac.lk</a></p>
        </div>
        <div class="sidebar-card">
          <h3>Our Consultants</h3>
          <a href="people.html" class="sidebar-link">→ View Academic Staff</a>
          <a href="research.html" class="sidebar-link">→ Research Expertise</a>
        </div>
      </aside>
    </div>
  </div>

  <!-- ══ WORKSHOPS ══ -->
  <div class="tab-panel" id="tab-workshops">
    <div class="services-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Workshops &amp; Training Programmes</h2><div class="heading-rule"></div></div>
        <p class="about-intro">The Department runs short courses and professional development workshops for practising engineers, technicians, and industry professionals throughout the year.</p>
        <p class="about-body">Workshops are designed and delivered by academic staff and industry experts. Certificates of participation are issued by the Faculty of Engineering, University of Peradeniya. CPD points are recognised by the Institution of Engineers, Sri Lanka (IESL).</p>

        <div class="section-heading" style="margin-top:8px;"><div class="heading-accent"></div><h2>Upcoming Workshops</h2><div class="heading-rule"></div></div>
        <div class="workshop-grid">

          <div class="workshop-card">
            <div class="workshop-banner gold"></div>
            <div class="workshop-body">
              <span class="workshop-status status-open">● Registration Open</span>
              <p class="workshop-title">Introduction to Finite Element Analysis using ANSYS</p>
              <div class="workshop-meta">
                <span> <strong>Date:</strong> 14–15 June 2025</span>
                <span> <strong>Duration:</strong> 2 Days (16 hrs)</span>
                <span> <strong>Venue:</strong> Computational Engineering Lab, ME Dept.</span>
                <span> <strong>Capacity:</strong> 20 participants</span>
                <span> <strong>Fee:</strong> LKR 15,000 per person</span>
              </div>
              <p class="workshop-desc">Hands-on workshop covering FEA fundamentals, mesh generation, boundary conditions, static structural, modal, and thermal analysis using ANSYS Workbench.</p>
              <a href="#" class="btn-workshop">Register Now</a>
            </div>
          </div>

          <div class="workshop-card">
            <div class="workshop-banner"></div>
            <div class="workshop-body">
              <span class="workshop-status status-open">● Registration Open</span>
              <p class="workshop-title">Renewable Energy Systems Design for Engineers</p>
              <div class="workshop-meta">
                <span> <strong>Date:</strong> 21 June 2025</span>
                <span> <strong>Duration:</strong> 1 Day (8 hrs)</span>
                <span> <strong>Venue:</strong> Thermal Engineering Lab, ME Dept.</span>
                <span> <strong>Capacity:</strong> 30 participants</span>
                <span> <strong>Fee:</strong> LKR 8,000 per person</span>
              </div>
              <p class="workshop-desc">Covers solar PV sizing, wind resource assessment, energy storage selection, and hybrid system design. Includes site visit to the University's solar installation.</p>
              <a href="#" class="btn-workshop">Register Now</a>
            </div>
          </div>

          <div class="workshop-card">
            <div class="workshop-banner dark"></div>
            <div class="workshop-body">
              <span class="workshop-status status-upcoming">◆ Coming Soon</span>
              <p class="workshop-title">CNC Machining &amp; G-Code Programming</p>
              <div class="workshop-meta">
                <span> <strong>Date:</strong> 19–20 July 2025</span>
                <span> <strong>Duration:</strong> 2 Days (16 hrs)</span>
                <span> <strong>Venue:</strong> Manufacturing Systems Lab, ME Dept.</span>
                <span> <strong>Capacity:</strong> 15 participants</span>
                <span> <strong>Fee:</strong> LKR 18,000 per person</span>
              </div>
              <p class="workshop-desc">Practical training on CNC milling and turning operations, G-code programming, tool selection, and CAM software. Each participant machines their own component.</p>
              <a href="#" class="btn-workshop">Pre-Register</a>
            </div>
          </div>

          <div class="workshop-card">
            <div class="workshop-banner gold"></div>
            <div class="workshop-body">
              <span class="workshop-status status-open">● Registration Open</span>
              <p class="workshop-title">Robotics &amp; PLC Programming for Industry</p>
              <div class="workshop-meta">
                <span> <strong>Date:</strong> 26–27 July 2025</span>
                <span> <strong>Duration:</strong> 2 Days (16 hrs)</span>
                <span> <strong>Venue:</strong> Robotics &amp; Automation Lab, ME Dept.</span>
                <span> <strong>Capacity:</strong> 18 participants</span>
                <span> <strong>Fee:</strong> LKR 20,000 per person</span>
              </div>
              <p class="workshop-desc">Introduction to industrial robotics, robot programming (teach pendant and offline), Ladder Logic for PLCs, and hands-on time with the Department's 6-DOF robot arm.</p>
              <a href="#" class="btn-workshop">Register Now</a>
            </div>
          </div>

          <div class="workshop-card">
            <div class="workshop-banner"></div>
            <div class="workshop-body">
              <span class="workshop-status status-full">⚠ Fully Booked</span>
              <p class="workshop-title">Lean Manufacturing &amp; Waste Elimination</p>
              <div class="workshop-meta">
                <span> <strong>Date:</strong> 10 May 2025</span>
                <span> <strong>Duration:</strong> 1 Day (8 hrs)</span>
                <span> <strong>Venue:</strong> Seminar Room 1, ME Dept.</span>
                <span> <strong>Capacity:</strong> 25 participants — FULL</span>
                <span> <strong>Fee:</strong> LKR 7,500 per person</span>
              </div>
              <p class="workshop-desc">Introduction to lean principles, value stream mapping, 5S implementation, and kaizen events for manufacturing improvement.</p>
              <a href="#" class="btn-workshop" style="opacity:0.5;cursor:default;pointer-events:none;">Fully Booked</a>
            </div>
          </div>

          <div class="workshop-card">
            <div class="workshop-banner dark"></div>
            <div class="workshop-body">
              <span class="workshop-status status-upcoming">◆ Coming Soon</span>
              <p class="workshop-title">3D Printing &amp; Additive Manufacturing Fundamentals</p>
              <div class="workshop-meta">
                <span> <strong>Date:</strong> August 2025 (TBC)</span>
                <span> <strong>Duration:</strong> 1 Day (8 hrs)</span>
                <span> <strong>Venue:</strong> Manufacturing Systems Lab, ME Dept.</span>
                <span> <strong>Capacity:</strong> 20 participants</span>
                <span> <strong>Fee:</strong> LKR 10,000 per person</span>
              </div>
              <p class="workshop-desc">Covers FDM, SLA, and SLS printing technologies, design for additive manufacturing, slicing software, and print quality optimisation. Each participant prints a component.</p>
              <a href="#" class="btn-workshop">Pre-Register</a>
            </div>
          </div>

        </div>

        <!-- Custom workshops -->
        <div class="section-heading" style="margin-top:12px;"><div class="heading-accent"></div><h2>Custom &amp; In-House Training</h2><div class="heading-rule"></div></div>
        <p class="about-body">The Department can design and deliver bespoke training programmes tailored to your organisation's specific technical needs, delivered at our facilities or at your site. Topics can be drawn from any area of mechanical engineering expertise.</p>
        <div style="background:var(--off-white);border:1px solid #e0dada;border-left:4px solid var(--gold);padding:20px 24px;">
          <h4 style="font-family:'Oswald',sans-serif;font-size:0.8rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:8px;">Request a Custom Programme</h4>
          <p style="font-size:0.88rem;color:#555;line-height:1.65;">Contact the Training Coordinator to discuss your requirements. Minimum group size is 10 participants. We can accommodate groups of up to 40.</p>
          <p style="font-size:0.86rem;margin-top:10px;">✉️ <a href="mailto:training.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">training.mech@eng.pdn.ac.lk</a> &nbsp;|&nbsp; 📞 +94 81 239 3638</p>
        </div>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Registration Info</h3>
          <p>Registrations are confirmed upon receipt of payment. Early registration is recommended as places fill quickly.</p>
          <p><strong style="color:var(--maroon-dark);">Payment Methods:</strong><br>Bank transfer or cheque payable to the University of Peradeniya.</p>
          <a href="#" class="sidebar-link">→ Bank Details</a>
          <a href="#" class="sidebar-link">→ Registration Form (PDF)</a>
        </div>
        <div class="sidebar-card">
          <h3>CPD Recognition</h3>
          <p>All workshops are eligible for CPD credit points with the Institution of Engineers, Sri Lanka (IESL). Certificates are issued on same day of completion.</p>
        </div>
        <div class="sidebar-card">
          <h3>Workshop Contact</h3>
          <p> +94 81 239 3638<br> <a href="mailto:training.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">training.mech@eng.pdn.ac.lk</a></p>
          <p style="margin-top:8px;font-size:0.82rem;color:#888;">Mon–Fri, 8:30 AM – 4:30 PM</p>
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
  const tabMap = { testing: 'testing', consultancy: 'consultancy', workshops: 'workshops' };
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
