<?php 
  $page_title = "Academic"; 
  include 'header.php'; 
?>

<link rel="stylesheet" href="academic.css">

<!-- ════════════════════ PAGE BANNER ════════════════════ -->
<div class="page-banner">
  <div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>›</span>
    <span>Academic</span>
  </div>
  <h1>Academic Programmes</h1>
  <div class="page-banner-line"></div>
</div>

<!-- ════════════════════ MAIN CONTENT ════════════════════ -->
<main class="main-content">

  <!-- Programme selector hero cards -->
  <div class="prog-hero">
    <div class="prog-card ug" onclick="switchTab('undergraduate')">
      <p class="prog-label">&#9654; 4-Year Honours Degree</p>
      <h2>Undergraduate Programme</h2>
      <p>Bachelor of Science and Engineering Honours in Mechanical Engineering — a rigorous, industry-aligned degree producing Sri Lanka's finest mechanical engineers.</p>
      <div class="prog-meta">
        <div class="prog-meta-item">4 Years <span>Duration</span></div>
        <div class="prog-meta-item">Full-time <span>Mode</span></div>
        <div class="prog-meta-item">IESL Accredited <span>Status</span></div>
      </div>
    </div>

    <div class="prog-card pg" onclick="switchTab('postgraduate')">
      <p class="prog-label">&#9654; Advanced Degrees</p>
      <h2>Postgraduate Programme</h2>
      <p>MSc, MPhil and PhD programmes in specialised areas of Mechanical Engineering — advancing research, innovation and professional expertise.</p>
      <div class="prog-meta">
        <div class="prog-meta-item">1–3 Years <span>Duration</span></div>
        <div class="prog-meta-item">Full / Part-time <span>Mode</span></div>
        <div class="prog-meta-item">Research-based <span>Focus</span></div>
      </div>
    </div>
  </div>

  <!-- Tab Buttons -->
  <div class="about-tabs">
    <button class="tab-btn active" data-tab="undergraduate">Undergraduate</button>
    <button class="tab-btn" data-tab="postgraduate">Postgraduate</button>
  </div>

  <!-- ══ TAB: UNDERGRADUATE ══ -->
  <div class="tab-panel active" id="tab-undergraduate">
    <div class="academic-grid">

      <!-- Left -->
      <div>
        <div class="section-heading">
          <div class="heading-accent"></div>
          <h2>BSc Engineering Honours in Mechanical Engineering</h2>
          <div class="heading-rule"></div>
        </div>

        <!-- ── Inner Sub-Tabs ── -->
        <div class="ug-subtabs" id="ugSubTabs">
          <button class="ug-tab-btn active" data-ugtab="overview">Overview</button>
          <button class="ug-tab-btn" data-ugtab="curriculum">Curriculum</button>
          <button class="ug-tab-btn" data-ugtab="credit">Credit Summary</button>
          <button class="ug-tab-btn" data-ugtab="prescribed">Prescribed Electives</button>
          <button class="ug-tab-btn" data-ugtab="free">Free Electives</button>
        </div>

        <!-- ── SUB-TAB: OVERVIEW ── -->
        <div class="ug-tab-panel active" id="ugtab-overview">
          <p class="about-intro" style="margin-top:24px;">
            A four-year, full-time programme designed to develop technically competent, 
            ethically grounded, and globally competitive mechanical engineers.
          </p>
          <p class="about-body">
            The undergraduate programme provides a solid grounding in the fundamental 
            sciences — mathematics, physics, thermodynamics, mechanics, and materials — 
            before progressing into advanced engineering design, manufacturing, fluid 
            mechanics, robotics, and sustainable energy systems.
          </p>
          <p class="about-body">
            Students undertake laboratory work, design projects, an industrial training 
            placement, and a final-year research project, ensuring they graduate with 
            both theoretical depth and practical experience.
          </p>

          <!-- Specialisation Areas -->
          <div class="section-heading" style="margin-top:32px;">
            <div class="heading-accent"></div>
            <h2>Elective Specialisations</h2>
            <div class="heading-rule"></div>
          </div>
          <div class="spec-grid">
            <div class="spec-card"><span class="spec-icon">🤖</span><h4>Mechatronics &amp; Robotics</h4><p>Autonomous systems, sensors, actuators, PLC programming and robotic design.</p></div>
            <div class="spec-card"><span class="spec-icon">🌡️</span><h4>Energy Systems</h4><p>Advanced thermodynamics, renewable energy, HVAC, and combustion engineering.</p></div>
            <div class="spec-card"><span class="spec-icon">🏭</span><h4>Mechanical Systems</h4><p>Machine design, dynamics, fluid dynamics, FEA and automobile engineering.</p></div>
            <div class="spec-card"><span class="spec-icon">💼</span><h4>Technopreneurship</h4><p>Business, finance, marketing, and entrepreneurship for engineers.</p></div>
          </div>

          <!-- Entry Requirements -->
          <div class="section-heading" style="margin-top:32px;">
            <div class="heading-accent"></div>
            <h2>Entry Requirements</h2>
            <div class="heading-rule"></div>
          </div>
          <div class="req-list">
            <div class="req-item"><div class="req-check">✓</div><p class="req-text">Sri Lanka Advanced Level examination with passes in Combined Mathematics, Physics and Chemistry.</p></div>
            <div class="req-item"><div class="req-check">✓</div><p class="req-text">Admission through the University Grants Commission (UGC) centralised system based on Z-score ranking.</p></div>
            <div class="req-item"><div class="req-check">✓</div><p class="req-text">Minimum English language proficiency required — students are expected to study through the medium of English.</p></div>
          </div>
        </div><!-- /ugtab-overview -->

        <!-- ── SUB-TAB: CURRICULUM ── -->
        <div class="ug-tab-panel" id="ugtab-curriculum">
        <div class="section-heading" style="margin-top:24px;">
          <div class="heading-accent"></div>
          <h2>Curriculum Overview</h2>
          <div class="heading-rule"></div>
        </div>

<table class="curr-table">
  <thead>
    <tr>
      <th>Year</th>
      <th>Sem</th>
      <th>Code</th>
      <th>Module Name</th>
      <th>Credits</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td rowspan="6">Year 1</td>
      <td rowspan="6">S1</td>
      <td><strong>CE1010</strong></td>
      <td>Engineering Mechanics</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>CO1010</td>
      <td>Programming for Engineers I</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>EE1010</td>
      <td>Electricity</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>EF1010</td>
      <td>English for Communication I</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>MA1100</td>
      <td>Ethics and Sustainability</td>
      <td>2</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>EM1010</td>
      <td>Calculus I</td>
      <td>4</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td rowspan="7">Year 1</td>
      <td rowspan="7">S2</td>
      <td><strong>EM1020</strong></td>
      <td>Linear Algebra</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>EM1030</td>
      <td>Differential Equations</td>
      <td>2</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>CE1110</td>
      <td>Materials Science</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME1010</td>
      <td>Elementary Fluid Mechanics &amp; Thermodynamics</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME1020</td>
      <td>Engineering Drawing</td>
      <td>2</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>MI1010</td>
      <td>Fundamentals of Manufacturing</td>
      <td>2</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>CO1810</td>
      <td>Programming for Engineers II</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>

    <tr>
      <td rowspan="7">Year 2</td>
      <td rowspan="7">S3</td>
      <td><strong>EM2010</strong></td>
      <td>Calculus II</td>
      <td>2</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>EM2020</td>
      <td>Probability and Statistics</td>
      <td>2</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME2010</td>
      <td>Engineering Innovation and Design</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME2020</td>
      <td>Mechanics of Machines</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>CE2080</td>
      <td>Mechanics of Materials</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>CE2020</td>
      <td>Fluid Mechanics I</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>EE2800</td>
      <td>Introduction to Electrical Engineering</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td rowspan="6">Year 2</td>
      <td rowspan="6">S4</td>
      <td><strong>ME2030</strong></td>
      <td>Machine Elements Design</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME2040</td>
      <td>Applied Thermodynamics</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>CE2180</td>
      <td>Materials Science II</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>EE2820</td>
      <td>Applied Electronics</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME2050</td>
      <td>Introduction to Statistical Learning</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>EM2050</td>
      <td>Computational Methods</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>

    <tr>
      <td rowspan="4">Year 3</td>
      <td rowspan="4">CS 1</td>
      <td><strong>MA2300</strong></td>
      <td>Management for Engineers</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME3020</td>
      <td>Mechanical Eng. Laboratory I</td>
      <td>1</td>
      <td><span class="badge badge-lab">Lab</span></td>
    </tr>
    <tr>
      <td>ME3050</td>
      <td>Occupational Health and Safety</td>
      <td>2</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>-</td>
      <td>General Electives</td>
      <td>3</td>
      <td><span class="badge badge-elec">Elective</span></td>
    </tr>
    <tr>
      <td rowspan="6">Year 3</td>
      <td rowspan="6">S5</td>
      <td><strong>ME3010</strong></td>
      <td>Control Systems</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME3030</td>
      <td>Dynamics of Mechanical Systems</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME3040</td>
      <td>Applied Thermodynamics &amp; Heat Transfer</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME3060</td>
      <td>Mechanical Engineering Group Project</td>
      <td>3</td>
      <td><span class="badge badge-proj">Project</span></td>
    </tr>
    <tr>
      <td>MI3810</td>
      <td>Manufacturing Engineering</td>
      <td>3</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>-</td>
      <td>Prescribed Electives</td>
      <td>3</td>
      <td><span class="badge badge-elec">Elective</span></td>
    </tr>
    <tr>
      <td>Year 3</td>
      <td>IT</td>
      <td><strong>TR400</strong></td>
      <td>Industrial Training</td>
      <td>6</td>
      <td><span class="badge badge-lab">Practical</span></td>
    </tr>
    <tr>
      <td rowspan="3">Year 3</td>
      <td rowspan="3">CS 2</td>
      <td><strong>MA3600</strong></td>
      <td>Basic Economics</td>
      <td>2</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>ME3070</td>
      <td>Introduction to Research Methods</td>
      <td>1</td>
      <td><span class="badge badge-core">Core</span></td>
    </tr>
    <tr>
      <td>-</td>
      <td>General Electives</td>
      <td>6</td>
      <td><span class="badge badge-elec">Elective</span></td>
    </tr>

    <tr>
      <td rowspan="3">Year 4</td>
      <td rowspan="3">S7</td>
      <td><strong>ME3080</strong></td>
      <td>Mechanical Eng. Laboratory II</td>
      <td>1</td>
      <td><span class="badge badge-lab">Lab</span></td>
    </tr>
    <tr>
      <td>ME4010</td>
      <td>Mechanical Eng. Individual Research Project</td>
      <td>3</td>
      <td><span class="badge badge-proj">Project</span></td>
    </tr>
    <tr>
      <td>-</td>
      <td>Prescribed / Technical &amp; General Electives</td>
      <td>14</td>
      <td><span class="badge badge-elec">Elective</span></td>
    </tr>
    <tr>
      <td rowspan="2">Year 4</td>
      <td rowspan="2">S8</td>
      <td><strong>ME4010</strong></td>
      <td>Mechanical Eng. Individual Research Project</td>
      <td>3</td>
      <td><span class="badge badge-proj">Project</span></td>
    </tr>
    <tr>
      <td>-</td>
      <td>Prescribed / Technical and General Electives</td>
      <td>14</td>
      <td><span class="badge badge-elec">Elective</span></td>
    </tr>
  </tbody>
</table>
        </div><!-- /ugtab-curriculum -->

        <!-- ── SUB-TAB: CREDIT SUMMARY ── -->
        <div class="ug-tab-panel" id="ugtab-credit">
          <div class="section-heading" style="margin-top:24px;">
            <div class="heading-accent"></div>
            <h2>Credit Score Summary</h2>
            <div class="heading-rule"></div>
          </div>
          <p class="about-body">The programme requires a total of <strong>150 credits</strong> for graduation, distributed across core modules, electives, laboratories, industrial training, and the research project.</p>
          <table class="curr-table">
            <thead><tr><th>Category</th><th>Description</th><th>Credits</th></tr></thead>
            <tbody>
              <tr><td><span class="badge badge-core">Core</span></td><td>Compulsory core modules (Years 1–4)</td><td>97</td></tr>
              <tr><td><span class="badge badge-lab">Lab / Practical</span></td><td>Laboratory sessions &amp; industrial training</td><td>9</td></tr>
              <tr><td><span class="badge badge-proj">Project</span></td><td>Group project &amp; individual research project</td><td>9</td></tr>
              <tr><td><span class="badge badge-elec">Prescribed Elective</span></td><td>Sub-specialisation track (5 of 7 courses)</td><td>15</td></tr>
              <tr><td><span class="badge badge-elec">Free / Technical Elective</span></td><td>Technical electives chosen freely</td><td>12</td></tr>
              <tr><td><span class="badge badge-elec">General Elective</span></td><td>General electives (cross-departmental)</td><td>8</td></tr>
              <tr style="background:var(--off-white);font-weight:700;"><td colspan="2" style="color:var(--maroon-dark);font-family:'Oswald',sans-serif;letter-spacing:0.05em;text-transform:uppercase;font-size:0.85rem;">Total Credits Required</td><td style="color:var(--maroon-dark);font-size:1rem;">150</td></tr>
            </tbody>
          </table>

          <div class="section-heading" style="margin-top:32px;">
            <div class="heading-accent"></div>
            <h2>Credit Distribution by Year</h2>
            <div class="heading-rule"></div>
          </div>
          <table class="curr-table">
            <thead><tr><th>Year</th><th>Semester / Period</th><th>Credits</th><th>Notes</th></tr></thead>
            <tbody>
              <tr><td>Year 1</td><td>Semester 1 (S1)</td><td>18</td><td>All core modules</td></tr>
              <tr><td>Year 1</td><td>Semester 2 (S2)</td><td>18</td><td>All core modules</td></tr>
              <tr><td>Year 2</td><td>Semester 3 (S3)</td><td>19</td><td>All core modules</td></tr>
              <tr><td>Year 2</td><td>Semester 4 (S4)</td><td>18</td><td>All core modules</td></tr>
              <tr><td>Year 3</td><td>CS 1 (Common Semester)</td><td>9</td><td>Core + General Elective</td></tr>
              <tr><td>Year 3</td><td>Semester 5 (S5)</td><td>18</td><td>Core + Prescribed Elective</td></tr>
              <tr><td>Year 3</td><td>Industrial Training (IT)</td><td>6</td><td>Industry placement</td></tr>
              <tr><td>Year 3</td><td>CS 2 (Common Semester)</td><td>9</td><td>Core + General Electives</td></tr>
              <tr><td>Year 4</td><td>Semester 7 (S7)</td><td>18</td><td>Lab + Project + Electives</td></tr>
              <tr><td>Year 4</td><td>Semester 8 (S8)</td><td>17</td><td>Project + Electives</td></tr>
              <tr style="background:var(--off-white);font-weight:700;"><td colspan="2" style="color:var(--maroon-dark);font-family:'Oswald',sans-serif;letter-spacing:0.05em;text-transform:uppercase;font-size:0.85rem;">Total</td><td style="color:var(--maroon-dark);font-size:1rem;">150</td><td></td></tr>
            </tbody>
          </table>
        </div><!-- /ugtab-credit -->

        <!-- ── SUB-TAB: PRESCRIBED ELECTIVES ── -->
        <div class="ug-tab-panel" id="ugtab-prescribed">
        <div class="section-heading" style="margin-top:24px;">
          <div class="heading-accent"></div>
          <h2>Prescribed Elective Courses</h2>
          <div class="heading-rule"></div>
        </div>

        <p class="about-body">
          The students are required to follow one of the four sub-specializations 
          in Mechanical Engineering: Mechanical Systems; Energy Systems; Mechatronics &amp; Robotics; Technopreneurship.
           A student is required to follow 5 courses [15 credits] out of 7 courses in each basket of courses listed under
            Prescribed Elective courses to claim the sub-specialization track (concentration).
        </p>

<table class="curr-table">
  <thead>
    <tr>
      <th>Track</th>
      <th>Code</th>
      <th>Module Name</th>
      <th>Credits</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td rowspan="7">Mechanical Systems</td>
      <td><strong>ME5010</strong></td>
      <td>Mechanical Systems Design</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5020</td>
      <td>Mechatronic Systems Design</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5030</td>
      <td>Vibration</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5060</td>
      <td>Finite Element Analysis for Mechanical Design</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5070</td>
      <td>Fluid Dynamics</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5090</td>
      <td>Automobile Engineering</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>MI3090</td>
      <td>Industrial Engineering and Decision Sciences</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>

    <tr>
      <td rowspan="7">Energy Systems</td>
      <td><strong>ME5040</strong></td>
      <td>Thermal Systems Design</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5060</td>
      <td>Finite Element Analysis for Mechanical Design</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5070</td>
      <td>Fluid Dynamics</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5080</td>
      <td>Energy Technology</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5110</td>
      <td>Heat Transfer</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>EE5810</td>
      <td>Electrical Power &amp; Machines</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>CP3080</td>
      <td>Energy and Environmental Management in Process Industry</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>

    <tr>
      <td rowspan="7">Mechatronics &amp; Robotics</td>
      <td><strong>ME5020</strong></td>
      <td>Mechatronic Systems Design</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5050</td>
      <td>Advanced Controls</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>ME5100</td>
      <td>Intelligent Robotic Systems Laboratory</td>
      <td>3</td>
      <td><span class="badge badge-elec">Lab Elective</span></td>
    </tr>
    <tr>
      <td>EE5130</td>
      <td>Artificial Intelligence and Machine Learning</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>EE2080</td>
      <td>Embedded Systems Design</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>EE5600/MI4230</td>
      <td>Robotics and Autonomous Systems</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>EE5630</td>
      <td>Industrial Automation</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>

    <tr>
      <td rowspan="7">Technopreneurship</td>
      <td><strong>MA5500</strong></td>
      <td>Business Communications</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>MA5510</td>
      <td>Circular Economy for Engineers</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>MA5520</td>
      <td>Marketing for Engineers</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>MA5610</td>
      <td>Corporate Finance and Accounting for Engineers</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>MA5620</td>
      <td>Business Law &amp; Intellectual Property</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>MA5720</td>
      <td>Organizational and Industrial Psychology</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
    <tr>
      <td>MA5820</td>
      <td>Engineer as Entrepreneur</td>
      <td>3</td>
      <td><span class="badge badge-elec">Prescribed Elective</span></td>
    </tr>
  </tbody>
</table>
        </div><!-- /ugtab-prescribed -->

        <!-- ── SUB-TAB: FREE ELECTIVES ── -->
        <div class="ug-tab-panel" id="ugtab-free">
        <div class="section-heading" style="margin-top:24px;">
          <div class="heading-accent"></div>
          <h2>Free Elective Courses</h2>
          <div class="heading-rule"></div>
        </div>
        <p class="about-body">
          Prescribed Elective courses listed in one track of sub-specialization can be 
          considered as free technical elective courses for other tracks. In addition, 
          the following courses are also considered as free technical elective courses for all tracks of sub-specializations.
        </p>

<table class="curr-table">
  <thead>
    <tr>
      <th>Code</th>
      <th>Module Name</th>
      <th>Credits</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>ME5130</td>
      <td>Optical flow Diagnosis for fluid and combustion</td>
      <td>2</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>ME5140</td>
      <td>Biomedical Instrumentation I</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>ME5150</td>
      <td>Maintenance Management</td>
      <td>2</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>ME5160</td>
      <td>Composite Materials</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>ME5170</td>
      <td>Bio-medical Instrumentation II</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>ME5180</td>
      <td>Environmental Fluid Mechanics Mixing and Transport Process</td>
      <td>2</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>CO5420</td>
      <td>Artificial Neural Networks and Deep Learning</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>CO5430</td>
      <td>Image Processing</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>CO5540</td>
      <td>Trends in Internet of Things</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>CO5530</td>
      <td>Computational Bioengineering</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>EE5140</td>
      <td>Audio Engineering and Acoustics</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>EE5210</td>
      <td>Medical Imaging and Biomechanics</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>EM5010</td>
      <td>Industrial Statistics</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>EM5020</td>
      <td>Optimization</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>EM5040</td>
      <td>Design of Experiments</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
    <tr>
      <td>EM5060</td>
      <td>Fourier Analysis</td>
      <td>3</td>
      <td><span class="badge badge-elec">Technical Elective</span></td>
    </tr>
  </tbody>
</table>
        </div><!-- /ugtab-free -->

      </div><!-- /left -->

      <!-- Right Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Programme Facts</h3>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;">
              <span style="color:#888;">Degree</span>
              <span style="color:var(--maroon-dark);font-weight:600;">BSc Eng (Hons)</span>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;">
              <span style="color:#888;">Duration</span>
              <span style="color:var(--maroon-dark);font-weight:600;">4 Years</span>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;">
              <span style="color:#888;">Credits</span>
              <span style="color:var(--maroon-dark);font-weight:600;">150</span>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;">
              <span style="color:#888;">Medium</span>
              <span style="color:var(--maroon-dark);font-weight:600;">English</span>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;border-bottom:1px dotted #ddd;padding-bottom:8px;">
              <span style="color:#888;">Accreditation</span>
              <span style="color:var(--maroon-dark);font-weight:600;">IESL / IET</span>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:0.86rem;">
              <span style="color:#888;">Intake</span>
              <span style="color:var(--maroon-dark);font-weight:600;">~50 / year</span>
            </div>
          </div>
        </div>

        <div class="sidebar-card">
          <h3>Downloads</h3>
          <ul>
            <li><a href="#">→ UG Programme Handbook</a></li>
            <li><a href="#">→ Full Curriculum (PDF)</a></li>
            <li><a href="#">→ Examination Regulations</a></li>
            <li><a href="#">→ Industrial Training Guide</a></li>
            <li><a href="#">→ Academic Calendar 2025</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h3>Career Outcomes</h3>
          <p>Our graduates pursue careers in:</p>
          <ul>
            <li><a  style="color:#555;font-weight:400;">→ Manufacturing &amp; Production</a></li>
            <li><a  style="color:#555;font-weight:400;">→ Energy &amp; Power Generation</a></li>
            <li><a style="color:#555;font-weight:400;">→ Aerospace &amp; Defence</a></li>
            <li><a  style="color:#555;font-weight:400;">→ Automotive Engineering</a></li>
            <li><a style="color:#555;font-weight:400;">→ Consulting &amp; Project Mgmt</a></li>
            <li><a  style="color:#555;font-weight:400;">→ Research &amp; Academia</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h3>Contact — Academic Office</h3>
          <p>For queries on admission, curriculum, or the programme:</p>
          <p>
            📞 +94 81 239 3631<br>
            ✉️ <a href="/cdn-cgi/l/email-protection#a3d6c48dcec6c0cbe3c6cdc48dd3c7cd8dc2c08dcfc8" style="color:var(--maroon);font-weight:600;"><span class="__cf_email__" data-cfemail="e39684cd8e86808ba3868d84cd93878dcd8280cd8f88">[email&#160;protected]</span></a>
          </p>
        </div>
      </aside>

    </div><!-- /academic-grid -->
  </div><!-- /tab-undergraduate -->

  <!-- ══ TAB: POSTGRADUATE ══ -->
  <div class="tab-panel" id="tab-postgraduate">
    <div class="academic-grid">

      <!-- Left -->
      <div>
        <div class="section-heading">
          <div class="heading-accent"></div>
          <h2>Postgraduate Programmes</h2>
          <div class="heading-rule"></div>
        </div>

        <p class="about-intro">
          The Department offers advanced research-based and coursework postgraduate 
          degrees, nurturing the next generation of engineering researchers, academics, 
          and industry leaders.
        </p>

        <p class="about-body">
          Postgraduate students work closely with experienced academic supervisors, 
          have access to well-equipped research laboratories, and are encouraged to 
          publish in internationally recognised journals and conferences. Collaboration 
          with industry and overseas universities is actively facilitated.
        </p>

        <!-- PG Degrees -->
        <div class="section-heading" style="margin-top:32px;">
          <div class="heading-accent"></div>
          <h2>Degree Programmes</h2>
          <div class="heading-rule"></div>
        </div>

        <div class="pg-grid">

          <div class="pg-card">
            <p class="pg-degree-type">Master of Science</p>
            <h3>MSc in Mechanical Engineering</h3>
            <p>A coursework-based master's programme offering advanced study in core and elective mechanical engineering modules, culminating in a research dissertation.</p>
            <div class="pg-details">
              <div class="pg-detail-row"><span>Duration</span><span>1.5 – 2 Years</span></div>
              <div class="pg-detail-row"><span>Mode</span><span>Full-time / Part-time</span></div>
              <div class="pg-detail-row"><span>Entry</span><span>BSc Eng (Hons) ≥ 2nd Class</span></div>
              <div class="pg-detail-row"><span>Intake</span><span>20 students / year</span></div>
            </div>
          </div>

          <div class="pg-card">
            <p class="pg-degree-type">Master of Philosophy</p>
            <h3>MPhil in Mechanical Engineering</h3>
            <p>A full research degree focused on original investigation in a chosen area of mechanical engineering, supervised by a senior academic staff member.</p>
            <div class="pg-details">
              <div class="pg-detail-row"><span>Duration</span><span>2 – 3 Years</span></div>
              <div class="pg-detail-row"><span>Mode</span><span>Full-time</span></div>
              <div class="pg-detail-row"><span>Entry</span><span>BSc Eng (Hons) ≥ 2nd Class Upper</span></div>
              <div class="pg-detail-row"><span>Intake</span><span>Rolling admissions</span></div>
            </div>
          </div>

          <div class="pg-card">
            <p class="pg-degree-type">Doctor of Philosophy</p>
            <h3>PhD in Mechanical Engineering</h3>
            <p>The highest academic qualification offered by the Department, requiring a substantial original contribution to knowledge in mechanical engineering or a related field.</p>
            <div class="pg-details">
              <div class="pg-detail-row"><span>Duration</span><span>3 – 5 Years</span></div>
              <div class="pg-detail-row"><span>Mode</span><span>Full-time</span></div>
              <div class="pg-detail-row"><span>Entry</span><span>MPhil or MSc (Research)</span></div>
              <div class="pg-detail-row"><span>Intake</span><span>Rolling admissions</span></div>
            </div>
          </div>

          <div class="pg-card">
            <p class="pg-degree-type">Professional Development</p>
            <h3>Postgraduate Diploma in Engineering</h3>
            <p>A flexible professional development programme for practising engineers, offering specialist coursework modules without a full research component.</p>
            <div class="pg-details">
              <div class="pg-detail-row"><span>Duration</span><span>1 Year</span></div>
              <div class="pg-detail-row"><span>Mode</span><span>Part-time</span></div>
              <div class="pg-detail-row"><span>Entry</span><span>BSc Eng + 2 yrs experience</span></div>
              <div class="pg-detail-row"><span>Intake</span><span>25 students / year</span></div>
            </div>
          </div>

        </div>

        <!-- Research Areas -->
        <div class="section-heading">
          <div class="heading-accent"></div>
          <h2>Research Areas</h2>
          <div class="heading-rule"></div>
        </div>

        <div class="spec-grid">
          <div class="spec-card">
            <span class="spec-icon">🔋</span>
            <h4>Renewable Energy Systems</h4>
            <p>Solar thermal, wind, biomass, and hybrid energy systems research.</p>
          </div>
          <div class="spec-card">
            <span class="spec-icon">⚙️</span>
            <h4>Advanced Manufacturing</h4>
            <p>Additive manufacturing, smart machining, Industry 4.0 technologies.</p>
          </div>
          <div class="spec-card">
            <span class="spec-icon">🌊</span>
            <h4>Computational Mechanics</h4>
            <p>FEA, CFD, multiphysics simulation and numerical modelling.</p>
          </div>
          <div class="spec-card">
            <span class="spec-icon">🦾</span>
            <h4>Robotics &amp; Automation</h4>
            <p>Industrial robots, soft robotics, human-robot interaction systems.</p>
          </div>
          <div class="spec-card">
            <span class="spec-icon">🧱</span>
            <h4>Materials Engineering</h4>
            <p>Composites, nanomaterials, failure analysis and surface engineering.</p>
          </div>
          <div class="spec-card">
            <span class="spec-icon">🏙️</span>
            <h4>Sustainable Infrastructure</h4>
            <p>Green building systems, water technology, transport engineering.</p>
          </div>
        </div>

        <!-- PG Entry Requirements -->
        <div class="section-heading">
          <div class="heading-accent"></div>
          <h2>Entry Requirements</h2>
          <div class="heading-rule"></div>
        </div>

        <div class="req-list">
          <div class="req-item">
            <div class="req-check">✓</div>
            <p class="req-text">A recognised Bachelor's degree in Mechanical Engineering or a closely related engineering discipline, with at least Second Class standing.</p>
          </div>
          <div class="req-item">
            <div class="req-check">✓</div>
            <p class="req-text">For PhD admission, a relevant MPhil or research-based Master's degree is normally required.</p>
          </div>
          <div class="req-item">
            <div class="req-check">✓</div>
            <p class="req-text">English language proficiency — IELTS 6.0 or equivalent for international applicants.</p>
          </div>
          <div class="req-item">
            <div class="req-check">✓</div>
            <p class="req-text">A research proposal outlining intended area of study is required for MPhil and PhD applications.</p>
          </div>
          <div class="req-item">
            <div class="req-check">✓</div>
            <p class="req-text">Two academic or professional references are required as part of the application.</p>
          </div>
        </div>

      </div><!-- /left -->

      <!-- Right Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Scholarships &amp; Funding</h3>
          <p>Several funding opportunities are available for postgraduate students:</p>
          <ul>
            <li><a href="#">→ UGC Postgraduate Scholarship</a></li>
            <li><a href="#">→ NSF Research Grants</a></li>
            <li><a href="#">→ HETC Fellowships</a></li>
            <li><a href="#">→ International Scholarships</a></li>
            <li><a href="#">→ Industry-sponsored Projects</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h3>How to Apply</h3>
          <p>Applications are accepted year-round for research degrees. Coursework programmes open in January and August each year.</p>
          <p>
            <a href="#" style="display:inline-block;margin-top:6px;background:var(--maroon);color:#fff;font-family:'Oswald',sans-serif;font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;padding:10px 20px;">
              Apply Online →
            </a>
          </p>
        </div>

        <div class="sidebar-card">
          <h3>Downloads</h3>
          <ul>
            <li><a href="#">→ PG Programme Prospectus</a></li>
            <li><a href="#">→ Research Proposal Template</a></li>
            <li><a href="#">→ Application Form (PDF)</a></li>
            <li><a href="#">→ Supervisor Directory</a></li>
            <li><a href="#">→ Thesis Guidelines</a></li>
          </ul>
        </div>

        <div class="sidebar-card">
          <h3>Contact — PG Office</h3>
          <p>For postgraduate admissions and research enquiries:</p>
          <p>
            📞 +94 81 239 3632<br>
            ✉️ <a href="/cdn-cgi/l/email-protection#a7d7c089cac2c4cfe7c2c9c089d7c3c989c6c489cbcc" style="color:var(--maroon);font-weight:600;"><span class="__cf_email__" data-cfemail="bfcfd891d2dadcd7ffdad1d891cfdbd191dedc91d3d4">[email&#160;protected]</span></a>
          </p>
        </div>
      </aside>

    </div><!-- /academic-grid -->
  </div><!-- /tab-postgraduate -->

</main>

<?php include 'footer.php'; ?>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
  // Tab switching
  const tabBtns   = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  function switchTab(name) {
    const btn = document.querySelector(`[data-tab="${name}"]`);
    if (!btn) return false;
    tabBtns.forEach(b => b.classList.remove('active'));
    tabPanels.forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    const panel = document.getElementById('tab-' + name);
    if (panel) panel.classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
    return true;
  }

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      switchTab(btn.dataset.tab);
      history.replaceState(null, '', '#' + btn.dataset.tab);
    });
  });

  // ── UG Inner Sub-Tab switching ──
  const ugTabBtns   = document.querySelectorAll('.ug-tab-btn');
  const ugTabPanels = document.querySelectorAll('.ug-tab-panel');

  function switchUgTab(name) {
    ugTabBtns.forEach(b => b.classList.remove('active'));
    ugTabPanels.forEach(p => p.classList.remove('active'));
    const btn = document.querySelector('[data-ugtab="' + name + '"]');
    if (btn) btn.classList.add('active');
    const panel = document.getElementById('ugtab-' + name);
    if (panel) panel.classList.add('active');
  }

  ugTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      switchUgTab(btn.dataset.ugtab);
      history.replaceState(null, '', '#' + btn.dataset.ugtab);
    });
  });

  // Copyright year
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
    if (!hash) return;

    // Try main tabs first
    if (switchTab(hash)) return;

    // Try UG inner sub-tabs
    const ugBtn = document.querySelector('[data-ugtab="' + hash + '"]');
    if (ugBtn) {
      switchUgTab(hash);
      // Make sure Undergraduate main tab is active
      const ugMainBtn = document.querySelector('[data-tab="undergraduate"]');
      if (ugMainBtn) {
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
        ugMainBtn.classList.add('active');
        const ugPanel = document.getElementById('tab-undergraduate');
        if (ugPanel) ugPanel.classList.add('active');
      }
    }
  }

  handleHash();
  window.addEventListener('hashchange', handleHash);

  // ── Intercept same-page dropdown clicks ──
  // Runs here (bottom of page) so switchTab is already defined
  (function () {
    const currentPage = window.location.pathname.split('/').pop();
    document.querySelectorAll('.dropdown-link').forEach(function (link) {
      link.addEventListener('click', function (e) {
        const href = this.getAttribute('href') || '';
        const parts = href.split('#');
        const linkPage = parts[0];
        const hash = parts[1];
        if (hash && (linkPage === currentPage || linkPage === '')) {
          e.preventDefault();
          if (window.location.hash === '#' + hash) {
            // Hash already set — manually call handleHash
            handleHash();
          } else {
            window.location.hash = hash; // triggers hashchange → handleHash
          }
          const navWrapper = document.querySelector('.nav-menu-wrapper');
          if (navWrapper) navWrapper.classList.remove('active');
        }
      });
    });
  })();
</body>
</html>