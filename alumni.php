<?php 
  $page_title = "Alumni"; 
  include 'header.php'; 
?>

<link rel="stylesheet" href="alumni.css">

<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="breadcrumb"><a href="index.html">Home</a><span>›</span><span>Alumni</span></div>
  <h1>Alumni</h1>
  <div class="page-banner-line"></div>
</div>

<!-- MAIN -->
<main class="main-content">

  <!-- Alumni Hero -->
  <div class="alumni-hero">
    <div class="alumni-hero-text">
      <p class="label">Our Global Community</p>
      <h2>Once a Mechanical Engineer of Peradeniya, Always Part of the Family</h2>
      <p>Our alumni are our greatest achievement — engineers, researchers, entrepreneurs, and leaders making an impact across Sri Lanka and around the world. We are proud of every graduate and committed to staying connected throughout your career.</p>
      <a href="#" class="btn-gold" onclick="switchTab('join');return false;">Join the Alumni Network →</a>
    </div>
    <div class="alumni-stats">
      <div class="alumni-stat"><span class="alumni-stat-num">1,700+</span><span class="alumni-stat-lbl">Graduates Worldwide</span></div>
      <div class="alumni-stat"><span class="alumni-stat-num">40+</span><span class="alumni-stat-lbl">Countries</span></div>
      <div class="alumni-stat"><span class="alumni-stat-num">50+</span><span class="alumni-stat-lbl">Years of Alumni</span></div>
      <div class="alumni-stat"><span class="alumni-stat-num">200+</span><span class="alumni-stat-lbl">Industry Partners</span></div>
    </div>
  </div>

  <!-- Tabs -->
  <div class="about-tabs">
    <button class="tab-btn active" data-tab="support">Support Us</button>
    <button class="tab-btn" data-tab="join">Join Us</button>
    <button class="tab-btn" data-tab="mep">MEP</button>
    <button class="tab-btn" data-tab="pefaa">PEFAA</button>
  </div>

  <!-- ══ SUPPORT US ══ -->
  <div class="tab-panel active" id="tab-support">
    <div class="alumni-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Support Your Department</h2><div class="heading-rule"></div></div>
        <p class="about-intro">Your support — whether financial, professional, or in-kind — makes a real and lasting difference to the students, staff, and research programmes of the Department you are proud to have graduated from.</p>
        <p class="about-body">Every contribution, large or small, helps us maintain world-class facilities,
           fund scholarships for deserving students, support pioneering research, and strengthen our connections with industry.
            Alumni giving is a powerful expression of pride in the Department and commitment to future generations of engineers.</p>

        <div class="support-grid">
          <div class="support-card">
            <span class="support-icon"></span>
            <h4>Student Scholarships</h4>
            <p>Fund a merit-based or need-based scholarship to help a talented student complete their degree without financial worry.</p>
            <a href="#" class="btn-support">Give Now</a>
          </div>
          <div class="support-card">
            <span class="support-icon"></span>
            <h4>Research &amp; Equipment</h4>
            <p>Contribute to purchasing new laboratory equipment or co-fund a research project in your area of expertise.</p>
            <a href="#" class="btn-support">Give Now</a>
          </div>
          <div class="support-card">
            <span class="support-icon"></span>
            <h4>Infrastructure Fund</h4>
            <p>Support the renovation and expansion of teaching spaces, workshops, and computing facilities for future students.</p>
            <a href="#" class="btn-support">Give Now</a>
          </div>
          <div class="support-card">
            <span class="support-icon"></span>
            <h4>Industry Mentorship</h4>
            <p>Volunteer your time as a mentor to final-year students — sharing career insights, professional advice, and industry connections.</p>
            <a href="#" class="btn-support">Volunteer</a>
          </div>
          <div class="support-card">
            <span class="support-icon"></span>
            <h4>Internship Placements</h4>
            <p>Offer industrial training placements at your organisation to give students hands-on engineering experience.</p>
            <a href="#" class="btn-support">Offer a Placement</a>
          </div>
          <div class="support-card">
            <span class="support-icon"></span>
            <h4>Guest Lectures</h4>
            <p>Share your knowledge and experience by delivering a guest lecture or participating in a career panel for current students.</p>
            <a href="#" class="btn-support">Get Involved</a>
          </div>
        </div>

        <div class="section-heading"><div class="heading-accent"></div><h2>Present Endowments</h2><div class="heading-rule"></div></div>
          <p class="about-intro">Your support — whether financial, professional, or in-kind — makes a real and lasting difference to the students, 
            staff, and research programmes of the Department you are proud to have graduated from.</p>
          
          <p class="about-body">•	Prof. S. Mahalingam project fund - Funded by Ms. Sakthy Selvakumaran & immediate family members of Prof. S. Mahalaingam</p>
          <p class="about-body">•	Establishment of Prof. S. Mahalingam Conference Room (on going) - Funded by Eng. Lanka C. Pannila, Alpec Engineering, USA</p>
          <p class="about-body">•	Student mentoring programme - Initialled by some loyal Alumni</p>
          <p class="about-body">•	Prof. S. Mahalingam grant for Projects in Applied Mechanics - Funded by Dr. Tilak Peiris and Ms. Nimala Peiris, through PEFAA</p>
          


        <!-- How to donate -->
        <div class="section-heading" style="margin-top:8px;"><div class="heading-accent"></div><h2>How to Donate</h2><div class="heading-rule"></div></div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px;">
          <div style="background:var(--off-white);border:1px solid #e0dada;border-left:4px solid var(--maroon);padding:20px 18px;">
            <h4 style="font-family:'Oswald',sans-serif;font-size:0.78rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:10px;">Bank Transfer</h4>
            <p style="font-size:0.84rem;color:#555;line-height:1.7;">Account Name: University of Peradeniya — ME Dept. Development Fund<br>Bank: Bank of Ceylon<br>Branch: Peradeniya<br>Account No: 0012-3456-7890</p>
          </div>
          <div style="background:var(--off-white);border:1px solid #e0dada;border-left:4px solid var(--maroon);padding:20px 18px;">
            <h4 style="font-family:'Oswald',sans-serif;font-size:0.78rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--maroon-dark);margin-bottom:10px;">Cheque</h4>
            <p style="font-size:0.84rem;color:#555;line-height:1.7;">Make cheques payable to:<br><strong>University of Peradeniya</strong><br>and send to the Department Secretary, Department of Mechanical Engineering, University of Peradeniya, Peradeniya 20400.</p>
          </div>
        </div>
        <p style="font-size:0.86rem;color:#777;line-height:1.65;">All donations are acknowledged in writing and eligible for tax deduction under applicable Sri Lanka tax provisions. For large gifts, please contact the Alumni Relations Office to discuss naming opportunities and recognition.</p>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Contact — Alumni Office</h3>
          <p>📞 +94 81 239 3639<br>✉️ <a href="mailto:alumni.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">alumni.mech@eng.pdn.ac.lk</a></p>
          <p style="margin-top:6px;font-size:0.82rem;color:#888;">Mon–Fri, 8:30 AM – 4:30 PM</p>
        </div>
        <div class="sidebar-card">
          <h3>Impact of Giving</h3>
          <div style="display:flex;flex-direction:column;gap:12px;">
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.83rem;color:#555;"><strong style="color:var(--maroon-dark);display:block;">LKR 10,000</strong>Funds lab consumables for 10 student experiments</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.83rem;color:#555;"><strong style="color:var(--maroon-dark);display:block;">LKR 50,000</strong>Supports one student's industrial training travel</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.83rem;color:#555;"><strong style="color:var(--maroon-dark);display:block;">LKR 200,000</strong>Funds a full-year scholarship for a deserving student</div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;font-size:0.83rem;color:#555;"><strong style="color:var(--maroon-dark);display:block;">LKR 1,000,000+</strong>Naming opportunity for a lab or scholarship fund</div>
          </div>
        </div>
        <div class="sidebar-card">
          <h3>Other Ways to Help</h3>
          <a href="#" class="sidebar-link">→ Offer an Internship</a>
          <a href="#" class="sidebar-link">→ Become a Mentor</a>
          <a href="#" class="sidebar-link">→ Deliver a Guest Lecture</a>
          <a href="#" class="sidebar-link">→ Sponsor an Event</a>
        </div>
      </aside>
    </div>
  </div>

  <!-- ══ JOIN US ══ -->
  <div class="tab-panel" id="tab-join">
    <div class="alumni-grid">
      <div>
        <div class="section-heading"><div class="heading-accent"></div><h2>Join the Alumni Network</h2><div class="heading-rule"></div></div>
        <p class="about-intro">Staying connected with your alma mater keeps you part of a vibrant professional community — and helps us stay connected with the world through you.</p>
        <p class="about-body">By registering with the ME Alumni Network, you gain access to a directory of fellow graduates, invitations to alumni events, the department newsletter, career opportunities shared by other alumni, and the chance to give back to future generations of engineers.</p>

        <!-- Notable alumni profiles -->
        <div class="section-heading" style="margin-top:8px;"><div class="heading-accent"></div><h2>Notable Alumni</h2><div class="heading-rule"></div></div>

        <div class="profile-card">
          <div class="profile-avatar">RK</div>
          <div>
            <p class="profile-name">Eng. Rajitha Karunaratne</p>
            <p class="profile-batch">Batch of 2005 · BSc Eng (Hons)</p>
            <p class="profile-role">Chief Engineer, Ceylon Electricity Board · Colombo, Sri Lanka</p>
            <p class="profile-quote">"The foundation I received at Peradeniya gave me the analytical rigour and problem-solving mindset that has shaped my entire career in power engineering."</p>
          </div>
        </div>

        <div class="profile-card">
          <div class="profile-avatar">SN</div>
          <div>
            <p class="profile-name">Dr. Sumudu Nanayakkara</p>
            <p class="profile-batch">Batch of 2010 · BSc Eng (Hons), PhD (Cambridge)</p>
            <p class="profile-role">Senior Research Scientist, BMW Group Research · Munich, Germany</p>
            <p class="profile-quote">"From the ME labs in Peradeniya to the research centres of BMW — the curiosity and dedication I developed here travels with me everywhere."</p>
          </div>
        </div>

        <div class="profile-card">
          <div class="profile-avatar">AM</div>
          <div>
            <p class="profile-name">Eng. Amalka Mendis</p>
            <p class="profile-batch">Batch of 2014 · BSc Eng (Hons)</p>
            <p class="profile-role">Co-Founder &amp; CEO, EcoTech Solutions Lanka (Pvt) Ltd · Kandy</p>
            <p class="profile-quote">"The entrepreneurship electives and the practical design experience at ME planted the seed of what became my own company. I'm proud to employ 12 ME graduates today."</p>
          </div>
        </div>

        <div class="profile-card">
          <div class="profile-avatar">PJ</div>
          <div>
            <p class="profile-name">Eng. Pradeep Jayasuriya</p>
            <p class="profile-batch">Batch of 2008 · BSc Eng (Hons), MPhil</p>
            <p class="profile-role">Director of Engineering, Brandix Lanka · Colombo, Sri Lanka</p>
            <p class="profile-quote">"ME Peradeniya taught me not just engineering but how to lead, communicate, and solve problems that matter. Those lessons are timeless."</p>
          </div>
        </div>

        <!-- Registration form -->
        <div class="section-heading" style="margin-top:32px;"><div class="heading-accent"></div><h2>Register as an Alumni</h2><div class="heading-rule"></div></div>
        <div class="alumni-form">
          <h3>Alumni Registration Form</h3>
          <p>Fill in the form below to join the official ME Alumni Network. Registration is free and takes less than 2 minutes.</p>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
            <div class="form-group"><label>First Name</label><input type="text" placeholder="First name" /></div>
            <div class="form-group"><label>Last Name</label><input type="text" placeholder="Last name" /></div>
          </div>
          <div class="form-group"><label>Email Address</label><input type="email" placeholder="your@email.com" /></div>
          <div class="form-group"><label>Phone Number</label><input type="tel" placeholder="+94 xx xxx xxxx" /></div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
            <div class="form-group"><label>Graduation Year</label><input type="number" placeholder="e.g. 2018" min="1960" max="2025" /></div>
            <div class="form-group"><label>Degree Obtained</label><select><option>BSc Eng (Hons)</option><option>MPhil</option><option>MSc</option><option>PhD</option><option>PG Diploma</option></select></div>
          </div>
          <div class="form-group"><label>Current Employer / Organisation</label><input type="text" placeholder="Company or Institution" /></div>
          <div class="form-group"><label>Current Role / Designation</label><input type="text" placeholder="Your job title" /></div>
          <div class="form-group"><label>Country of Residence</label><select><option>Sri Lanka</option><option>Australia</option><option>Canada</option><option>Germany</option><option>Japan</option><option>Singapore</option><option>United Kingdom</option><option>United States</option><option>Other</option></select></div>
          <div class="form-group"><label>LinkedIn Profile (optional)</label><input type="url" placeholder="https://linkedin.com/in/..." /></div>
          <div class="form-group"><label>How would you like to engage?</label>
            <select><option>Stay informed (newsletter only)</option><option>Mentorship</option><option>Guest Lectures</option><option>Offer Internships</option><option>Donations / Sponsorship</option><option>All of the above</option></select>
          </div>
          <button class="btn-submit">Register Now →</button>
        </div>
      </div>

      <!-- Sidebar -->
      <aside>
        <div class="sidebar-card">
          <h3>Benefits of Joining</h3>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <div style="display:flex;gap:10px;align-items:flex-start;font-size:0.84rem;color:#555;"><span style="color:var(--gold);font-weight:700;">✓</span>Access to alumni directory</div>
            <div style="display:flex;gap:10px;align-items:flex-start;font-size:0.84rem;color:#555;"><span style="color:var(--gold);font-weight:700;">✓</span>Invitations to alumni events &amp; reunions</div>
            <div style="display:flex;gap:10px;align-items:flex-start;font-size:0.84rem;color:#555;"><span style="color:var(--gold);font-weight:700;">✓</span>Department newsletter &amp; research bulletin</div>
            <div style="display:flex;gap:10px;align-items:flex-start;font-size:0.84rem;color:#555;"><span style="color:var(--gold);font-weight:700;">✓</span>Career opportunities from alumni network</div>
            <div style="display:flex;gap:10px;align-items:flex-start;font-size:0.84rem;color:#555;"><span style="color:var(--gold);font-weight:700;">✓</span>Library &amp; database access (on request)</div>
            <div style="display:flex;gap:10px;align-items:flex-start;font-size:0.84rem;color:#555;"><span style="color:var(--gold);font-weight:700;">✓</span>Mentorship matching with current students</div>
          </div>
        </div>
        <div class="sidebar-card">
          <h3>Connect With Us</h3>
          <p> <a href="#" style="color:var(--maroon);font-weight:600;">facebook.com/MEdeptPDN</a></p>
          <p><a href="#" style="color:var(--maroon);font-weight:600;">linkedin.com/school/ME-Peradeniya</a></p>
          <p><a href="mailto:alumni.mech@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">alumni.mech@eng.pdn.ac.lk</a></p>
        </div>
        <div class="sidebar-card">
          <h3>Upcoming Alumni Events</h3>
          <div style="display:flex;flex-direction:column;gap:12px;">
            <div style="border-left:3px solid var(--gold);padding-left:10px;">
              <p style="font-size:0.84rem;font-weight:600;color:var(--maroon-dark);margin-bottom:2px;">Annual Alumni Reunion 2025</p>
              <p style="font-size:0.78rem;color:#888;">12 July 2025 · Faculty of Engineering</p>
            </div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;">
              <p style="font-size:0.84rem;font-weight:600;color:var(--maroon-dark);margin-bottom:2px;">Alumni Careers Panel</p>
              <p style="font-size:0.78rem;color:#888;">20 August 2025 · Online &amp; In-Person</p>
            </div>
            <div style="border-left:3px solid var(--gold);padding-left:10px;">
              <p style="font-size:0.84rem;font-weight:600;color:var(--maroon-dark);margin-bottom:2px;">ME Research Symposium 2025</p>
              <p style="font-size:0.78rem;color:#888;">28 June 2025 · Faculty Auditorium</p>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>

  <!-- ══ MEP ══ -->
  <div class="tab-panel" id="tab-mep">
    <div class="section-heading"><div class="heading-accent"></div><h2>Mechanical Engineers of Peradeniya</h2><div class="heading-rule"></div></div>

    <div class="org-card">
      <div class="org-header">
        <div class="org-logo">MEP</div>
        <div class="org-header-text">
          <p class="org-name">Mechanical Engineers of Peradeniya</p>
          <p class="org-abbr">MEP · Est. 1978 · University of Peradeniya</p>
        </div>
      </div>
      <div class="org-body">
        <p>The Mechanical Engineers of Peradeniya (MEP) is the official professional alumni association of the Department of Mechanical Engineering. Founded in 1978 by a pioneering group of graduates, MEP has grown into a vibrant network of over 4,000 engineers spanning every sector of industry and academia, both locally and internationally.</p>
        <p>MEP serves as the primary bridge between the Department and its alumni, fostering lifelong professional relationships, supporting the Department's development, and advocating for the interests of ME Peradeniya graduates in the professional world.</p>

        <div class="org-features">
          <div class="org-feature"><strong>Founded</strong>1978, by the Batch of 1973</div>
          <div class="org-feature"><strong>Membership</strong>1,000+ registered members</div>
          <div class="org-feature"><strong>Chapters</strong>Colombo, Kandy, UK, Australia, USA</div>
          <div class="org-feature"><strong>Annual Event</strong>MEP Annual General Meeting &amp; Dinner</div>
          <div class="org-feature"><strong>Scholarship Fund</strong>MEP Merit Scholarship (since 1990)</div>
          <div class="org-feature"><strong>Publication</strong>MEP Bulletin (Biannual)</div>
        </div>

        <div class="section-heading" style="margin-top:8px;margin-bottom:20px;"><div class="heading-accent"></div><h2>MEP Activities</h2><div class="heading-rule"></div></div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:24px;">
          <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:18px;text-align:center;"><div style="font-size:1.8rem;margin-bottom:8px;"></div><h4 style="font-family:'Playfair Display',serif;font-size:0.9rem;font-weight:700;color:var(--maroon-dark);margin-bottom:6px;">MEP Merit Scholarship</h4><p style="font-size:0.8rem;color:#666;line-height:1.55;">Annual scholarship awarded to the top-performing 2nd year undergraduate by MEP alumni donations.</p></div>
          <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:18px;text-align:center;"><div style="font-size:1.8rem;margin-bottom:8px;"></div><h4 style="font-family:'Playfair Display',serif;font-size:0.9rem;font-weight:700;color:var(--maroon-dark);margin-bottom:6px;">Industry Connect</h4><p style="font-size:0.8rem;color:#666;line-height:1.55;">MEP facilitates internships, job placements, and industry visits for final-year students through its extensive industry network.</p></div>
          <div style="background:var(--off-white);border-top:3px solid var(--maroon);padding:18px;text-align:center;"><div style="font-size:1.8rem;margin-bottom:8px;"></div><h4 style="font-family:'Playfair Display',serif;font-size:0.9rem;font-weight:700;color:var(--maroon-dark);margin-bottom:6px;">Annual Reunion</h4><p style="font-size:0.8rem;color:#666;line-height:1.55;">The MEP Annual Reunion brings together graduates from all batches for a night of networking, celebration, and reminiscing.</p></div>
        </div>

        <div class="section-heading" style="margin-bottom:16px;"><div class="heading-accent"></div><h2>MEP Executive Committee 2025</h2><div class="heading-rule"></div></div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:24px;">
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:16px;text-align:center;border-top:3px solid var(--maroon);"><div style="width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,var(--maroon),var(--maroon-dark));display:flex;align-items:center;justify-content:center;font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;color:var(--gold-light);margin:0 auto 10px;">HR</div><p style="font-size:0.85rem;font-weight:700;color:var(--maroon-dark);margin-bottom:3px;font-family:'Playfair Display',serif;">Eng. Harsha Rathnayake</p><p style="font-family:'Oswald',sans-serif;font-size:0.62rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);">President</p></div>
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:16px;text-align:center;border-top:3px solid var(--maroon);"><div style="width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,var(--maroon),var(--maroon-dark));display:flex;align-items:center;justify-content:center;font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;color:var(--gold-light);margin:0 auto 10px;">NK</div><p style="font-size:0.85rem;font-weight:700;color:var(--maroon-dark);margin-bottom:3px;font-family:'Playfair Display',serif;">Eng. Nishantha Kumara</p><p style="font-family:'Oswald',sans-serif;font-size:0.62rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);">Secretary</p></div>
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:16px;text-align:center;border-top:3px solid var(--maroon);"><div style="width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,var(--maroon),var(--maroon-dark));display:flex;align-items:center;justify-content:center;font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;color:var(--gold-light);margin:0 auto 10px;">SP</div><p style="font-size:0.85rem;font-weight:700;color:var(--maroon-dark);margin-bottom:3px;font-family:'Playfair Display',serif;">Eng. Sanduni Perera</p><p style="font-family:'Oswald',sans-serif;font-size:0.62rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);">Treasurer</p></div>
          <div style="background:var(--off-white);border:1px solid #e0dada;padding:16px;text-align:center;border-top:3px solid var(--maroon);"><div style="width:52px;height:52px;border-radius:50%;background:linear-gradient(135deg,var(--maroon),var(--maroon-dark));display:flex;align-items:center;justify-content:center;font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;color:var(--gold-light);margin:0 auto 10px;">TW</div><p style="font-size:0.85rem;font-weight:700;color:var(--maroon-dark);margin-bottom:3px;font-family:'Playfair Display',serif;">Eng. Thilak Wijesekara</p><p style="font-family:'Oswald',sans-serif;font-size:0.62rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);">Events Director</p></div>
        </div>

        <div class="org-contacts">
          <span> <a href="mailto:mep@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">mep@eng.pdn.ac.lk</a></span>
          <span> <a href="#" style="color:var(--maroon);font-weight:600;">facebook.com/MEP.Peradeniya</a></span>
          <span> <a href="#" style="color:var(--maroon);font-weight:600;">linkedin.com/groups/MEP</a></span>
        </div>
      </div>
    </div>
  </div>

  <!-- ══ PEFAA ══ -->
  <div class="tab-panel" id="tab-pefaa">
    <div class="section-heading"><div class="heading-accent"></div><h2>Peradeniya Engineering Faculty Alumni Association</h2><div class="heading-rule"></div></div>

    <div class="org-card">
      <div class="org-header">
        <div class="org-logo">PEFAA</div>
        <div class="org-header-text">
          <p class="org-name">Peradeniya Engineering Faculty Alumni Association</p>
          <p class="org-abbr">PEFAA · Est. 1985 · Faculty of Engineering, University of Peradeniya</p>
        </div>
      </div>
      <div class="org-body">
        <p>The Peradeniya Engineering Faculty Alumni Association (PEFAA) is the umbrella alumni body of the Faculty of Engineering, University of Peradeniya. It brings together graduates from all engineering departments — Civil, Electrical, Mechanical, Chemical &amp; Process, Production, and Computer — under a single platform.</p>
        <p>PEFAA works closely with the Faculty to enhance the graduate experience, support institutional development, and build a powerful professional network across all engineering disciplines. ME graduates are automatically eligible for PEFAA membership and are strongly encouraged to participate.</p>

        <div class="org-features">
          <div class="org-feature"><strong>Founded</strong>1985</div>
          <div class="org-feature"><strong>Membership</strong>15,000+ Faculty graduates</div>
          <div class="org-feature"><strong>Scope</strong>All 6 Engineering Departments</div>
          <div class="org-feature"><strong>Chapters</strong>Sri Lanka, UK, USA, Australia, Middle East</div>
          <div class="org-feature"><strong>Annual Event</strong>PEFAA Annual Dinner &amp; Awards</div>
          <div class="org-feature"><strong>Publication</strong>PEFAA Engineers Newsletter</div>
        </div>

        <div class="section-heading" style="margin-top:8px;margin-bottom:20px;"><div class="heading-accent"></div><h2>PEFAA Programmes</h2><div class="heading-rule"></div></div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:24px;">
          <div style="background:var(--off-white);border:1px solid #e0dada;border-left:5px solid var(--maroon);padding:20px 18px;"><h4 style="font-family:'Playfair Display',serif;font-size:0.95rem;font-weight:700;color:var(--maroon-dark);margin-bottom:8px;">PEFAA Scholarship Fund</h4><p style="font-size:0.84rem;color:#555;line-height:1.65;">Faculty-wide scholarships funded by alumni donations, awarded annually to top undergraduate students with financial need across all departments.</p></div>
          <div style="background:var(--off-white);border:1px solid #e0dada;border-left:5px solid var(--maroon);padding:20px 18px;"><h4 style="font-family:'Playfair Display',serif;font-size:0.95rem;font-weight:700;color:var(--maroon-dark);margin-bottom:8px;">Industry Engagement Programme</h4><p style="font-size:0.84rem;color:#555;line-height:1.65;">PEFAA facilitates structured engagement between alumni in industry and the Faculty, including internship agreements, joint research MoUs, and career fairs.</p></div>
          <div style="background:var(--off-white);border:1px solid #e0dada;border-left:5px solid var(--maroon);padding:20px 18px;"><h4 style="font-family:'Playfair Display',serif;font-size:0.95rem;font-weight:700;color:var(--maroon-dark);margin-bottom:8px;">PEFAA Distinguished Alumni Award</h4><p style="font-size:0.84rem;color:#555;line-height:1.65;">Annual award presented at the PEFAA Dinner to recognise outstanding contributions to engineering, industry, public service, or academia by a Faculty graduate.</p></div>
          <div style="background:var(--off-white);border:1px solid #e0dada;border-left:5px solid var(--maroon);padding:20px 18px;"><h4 style="font-family:'Playfair Display',serif;font-size:0.95rem;font-weight:700;color:var(--maroon-dark);margin-bottom:8px;">Faculty Development Fund</h4><p style="font-size:0.84rem;color:#555;line-height:1.65;">Pooled alumni contributions supporting Faculty-wide infrastructure improvements, equipment purchases, and student welfare initiatives.</p></div>
        </div>

        <div class="section-heading" style="margin-bottom:16px;"><div class="heading-accent"></div><h2>Become a PEFAA Member</h2><div class="heading-rule"></div></div>
        <p style="font-size:0.9rem;color:#555;line-height:1.7;margin-bottom:16px;">All graduates of the Faculty of Engineering, University of Peradeniya are eligible for PEFAA membership. Membership is available in two tiers:</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:24px;">
          <div style="background:var(--maroon);color:var(--white);padding:24px 20px;border-top:3px solid var(--gold);"><h4 style="font-family:'Oswald',sans-serif;font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--gold-light);margin-bottom:8px;">Ordinary Member</h4><p style="font-family:'Playfair Display',serif;font-size:1.6rem;font-weight:700;color:var(--white);margin-bottom:8px;">LKR 2,000 <span style="font-size:0.8rem;font-weight:400;font-family:'Source Sans 3',sans-serif;">/year</span></p><ul style="font-size:0.82rem;color:rgba(255,255,255,0.82);line-height:1.7;padding-left:16px;"><li>Newsletter subscription</li><li>Event invitations</li><li>Alumni directory access</li></ul></div>
          <div style="background:var(--maroon-dark);color:var(--white);padding:24px 20px;border-top:3px solid var(--gold);"><h4 style="font-family:'Oswald',sans-serif;font-size:0.75rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--gold-light);margin-bottom:8px;">Life Member</h4><p style="font-family:'Playfair Display',serif;font-size:1.6rem;font-weight:700;color:var(--white);margin-bottom:8px;">LKR 25,000 <span style="font-size:0.8rem;font-weight:400;font-family:'Source Sans 3',sans-serif;">one-time</span></p><ul style="font-size:0.82rem;color:rgba(255,255,255,0.82);line-height:1.7;padding-left:16px;"><li>All ordinary benefits</li><li>Voting rights at AGM</li><li>PEFAA lapel pin &amp; certificate</li><li>Priority event seating</li></ul></div>
        </div>

        <div class="org-contacts">
          <span>✉️ <a href="mailto:pefaa@eng.pdn.ac.lk" style="color:var(--maroon);font-weight:600;">pefaa@eng.pdn.ac.lk</a></span>
          <span>🌐 <a href="#" style="color:var(--maroon);font-weight:600;">pefaa.eng.pdn.ac.lk</a></span>
          <span>📘 <a href="#" style="color:var(--maroon);font-weight:600;">facebook.com/PEFAA</a></span>
        </div>
      </div>
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

  // ── Handle hash on load and on every hashchange ──
  const tabMap = { support: 'support', join: 'join', mep: 'mep', pefaa: 'pefaa' };
  function handleHash() {
    const hash = window.location.hash.replace('#', '');
    if (hash && tabMap[hash]) switchTab(tabMap[hash]);
  }
  handleHash();
  window.addEventListener('hashchange', handleHash);

  const menuToggle = document.getElementById('mobile-menu');
  const navWrapper = document.querySelector('.nav-menu-wrapper');
  if (menuToggle && navWrapper) {
    menuToggle.addEventListener('click', function () { navWrapper.classList.toggle('active'); });
  }

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

  document.getElementById('copyrightYear').textContent = new Date().getFullYear();
</script>
</body>
</html>
