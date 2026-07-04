<?php get_header(); ?>
<main>
<section class="hero-slider" aria-label="Homepage hero slider">
  <div class="slide active">
    <div class="container hero-grid">
      <div class="hero-content">
        <span class="badge">Admission Open 2026</span>
        <h1>Build Your Skills<br>Build Your <span>Future</span></h1>
        <p>Join Softech Computer Centre, Ganaur and take the first step towards a successful career with practical computer training.</p>
        <div class="hero-points"><b>Expert Trainers</b><b>Latest Technology</b><b>Practical Learning</b><b>Job Assistance</b></div>
        <div class="hero-actions"><a class="btn btn-primary" href="/computer-courses/">Explore Courses</a><a class="btn btn-light" href="tel:+919996212345">+91 99962 12345</a></div>
      </div>
      <div class="hero-visual"><div class="student-card">🎓</div><div class="app-icons"><span>Ps</span><span>Ai</span><span>XL</span><span>W</span><span>{ }</span></div></div>
    </div>
  </div>
  <div class="slide"><div class="container hero-grid"><div class="hero-content"><span class="badge">Certification Courses</span><h2>Govt. & Industry Recognized Computer Courses</h2><p>CCC, DCA, ADCA, Tally, Excel, Web Design, Graphic Design and Programming courses with certificates.</p><a class="btn btn-primary" href="/certification-courses/">View Certifications</a></div><div class="hero-visual"><div class="student-card">📜</div></div></div></div>
  <button class="slider-btn prev" aria-label="Previous slide">‹</button><button class="slider-btn next" aria-label="Next slide">›</button><div class="dots"><button class="dot active"></button><button class="dot"></button></div>
</section>

<section class="features container">
  <?php $features=[['📜','Certification Courses','Govt. & industry recognized certificates'],['👨‍🏫','Experienced Faculty','Learn from practical experts'],['🖥️','Modern Computer Lab','Fully equipped latest technology'],['💼','Placement Assistance','Career support after training'],['🎯','Result Oriented Training','Practical knowledge, better results']]; foreach($features as $f): ?>
  <article><span><?php echo esc_html($f[0]); ?></span><div><h3><?php echo esc_html($f[1]); ?></h3><p><?php echo esc_html($f[2]); ?></p></div></article>
  <?php endforeach; ?>
</section>

<section class="courses container section">
  <div class="section-head"><h2>Popular <span>Courses</span></h2><a href="/computer-courses/">View All Courses →</a></div>
  <div class="course-grid">
    <?php foreach(softech_courses() as $course): ?>
    <article class="course-card"><div class="course-icon"><?php echo esc_html($course['icon']); ?></div><h3><?php echo esc_html($course['title']); ?></h3><p><?php echo esc_html($course['desc']); ?></p><small>Duration: <?php echo esc_html($course['duration']); ?></small></article>
    <?php endforeach; ?>
  </div>
</section>

<section class="container section split">
  <div class="achievement">
    <h2>Our <span>Achievements</span></h2>
    <div class="stats"><div><strong>12+</strong><span>Years Excellence</span></div><div><strong>2500+</strong><span>Students Trained</span></div><div><strong>100+</strong><span>Courses Offered</span></div><div><strong>95%</strong><span>Success Rate</span></div></div>
    <div class="yellow-cta"><b>Shape Your Career With Us</b><a class="btn btn-dark" href="/admissions/">Apply Now</a></div>
  </div>
  <div class="results-box"><h2>Latest Results</h2><p>Students can check their results online by roll number or registration number.</p><form class="result-form"><input placeholder="Enter Roll No. / Registration No."><button class="btn btn-primary" type="button">Check Result</button></form></div>
</section>

<section class="quick-links container">
  <a href="/results/">📄 Results</a><a href="/admissions/">📝 Online Admission</a><a href="/certification-courses/">📘 Download Brochure</a><a href="/computer-courses/">💰 Fee Structure</a><a href="/contact-us/">☎ Contact Us</a>
</section>
</main>
<?php get_footer(); ?>
