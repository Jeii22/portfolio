<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jake Rodriguez — Developer & IT Support</title>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,400&family=IBM+Plex+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --bg: #fafaf8;
    --surface: #fff;
    --border: #e8e6e1;
    --text: #1a1a1a;
    --muted: #6b6860;
    --accent: #2d5be3;
    --accent-light: #eef1fd;
    --tag-bg: #f2f1ee;
    --tag-text: #4a4845;
    --green: #1a7a4a;
    --green-bg: #edf7f2;
    --radius: 10px;
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'IBM Plex Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    line-height: 1.6;
    font-size: 16px;
  }

  /* NAV */
  nav {
    position: sticky;
    top: 0;
    background: rgba(250,250,248,0.95);
    backdrop-filter: blur(8px);
    border-bottom: 1px solid var(--border);
    z-index: 100;
    padding: 0 40px;
  }

  .nav-inner {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
  }

  .nav-logo {
    font-family: 'Lora', serif;
    font-weight: 700;
    font-size: 1.15rem;
    color: var(--text);
    text-decoration: none;
  }

  .nav-links {
    display: flex;
    gap: 28px;
    list-style: none;
  }

  .nav-links a {
    font-size: 0.875rem;
    color: var(--muted);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s;
  }

  .nav-links a:hover { color: var(--accent); }

  /* LAYOUT */
  .container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 40px;
  }

  section {
    padding: 72px 0;
    border-bottom: 1px solid var(--border);
  }

  section:last-of-type { border-bottom: none; }

  /* HERO */
  .hero {
    padding: 80px 0 64px;
  }

  .hero-inner {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 48px;
    align-items: center;
  }

  .hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--green-bg);
    color: var(--green);
    border: 1px solid #b6ddc8;
    padding: 5px 13px;
    border-radius: 20px;
    font-size: 0.78rem;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: 0.02em;
  }

  .hero-tag::before {
    content: '';
    width: 7px;
    height: 7px;
    background: var(--green);
    border-radius: 50%;
    animation: blink 2s ease-in-out infinite;
  }

  @keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
  }

  .hero h1 {
    font-family: 'Lora', serif;
    font-size: clamp(2.2rem, 5vw, 3.2rem);
    font-weight: 700;
    line-height: 1.15;
    margin-bottom: 16px;
    color: var(--text);
  }

  .hero h1 em {
    font-style: italic;
    color: var(--accent);
  }

  .hero-sub {
    font-size: 1.05rem;
    color: var(--muted);
    max-width: 480px;
    margin-bottom: 32px;
    line-height: 1.7;
  }

  .hero-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
  }

  .btn {
    padding: 11px 24px;
    border-radius: var(--radius);
    font-size: 0.875rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s;
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }

  .btn-primary {
    background: var(--accent);
    color: #fff;
    border: 2px solid var(--accent);
  }

  .btn-primary:hover {
    background: #1e4ac7;
    border-color: #1e4ac7;
    transform: translateY(-1px);
  }

  .btn-ghost {
    background: transparent;
    color: var(--text);
    border: 2px solid var(--border);
  }

  .btn-ghost:hover {
    border-color: #c0bdb7;
    background: var(--tag-bg);
  }

  .hero-photo {
    width: 160px;
    height: 160px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--border);
    background: var(--tag-bg);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Lora', serif;
    font-size: 3rem;
    font-weight: 700;
    color: var(--accent);
    flex-shrink: 0;
  }

  /* SECTION HEADINGS */
  .section-label {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--accent);
    margin-bottom: 8px;
  }

  .section-title {
    font-family: 'Lora', serif;
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 32px;
  }

  /* ABOUT */
  .about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    align-items: start;
  }

  .about-text p {
    color: var(--muted);
    margin-bottom: 16px;
    line-height: 1.75;
    font-size: 0.975rem;
  }

  .stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
  }

  .stat {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 20px 16px;
    text-align: center;
  }

  .stat-num {
    font-family: 'Lora', serif;
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--accent);
    display: block;
  }

  .stat-label {
    font-size: 0.78rem;
    color: var(--muted);
    margin-top: 4px;
    line-height: 1.4;
  }

  /* SKILLS */
  .skills-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
  }

  .skill-row {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 16px 18px;
  }

  .skill-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }

  .skill-name-text {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--text);
  }

  .skill-pct {
    font-size: 0.8rem;
    color: var(--muted);
    font-weight: 500;
  }

  .skill-bar {
    height: 6px;
    background: var(--tag-bg);
    border-radius: 6px;
    overflow: hidden;
  }

  .skill-fill {
    height: 100%;
    background: var(--accent);
    border-radius: 6px;
    width: 0;
    transition: width 1s ease;
  }

  .skill-fill.animate { width: var(--w); }

  .skill-fill.advanced { background: #2d5be3; }
  .skill-fill.expert   { background: #1a7a4a; }
  .skill-fill.intermediate { background: #c08a00; }
  .skill-fill.beginner { background: #b04020; }

  /* PROJECTS */
  .projects-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .project-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
    cursor: pointer;
    transition: all 0.2s;
  }

  .project-card:hover {
    border-color: var(--accent);
    box-shadow: 0 4px 20px rgba(45,91,227,0.1);
    transform: translateY(-2px);
  }

  .project-icon {
    background: var(--accent-light);
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Lora', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--accent);
    letter-spacing: 0.02em;
    border-bottom: 1px solid var(--border);
  }

  .project-body { padding: 20px; }

  .project-meta {
    display: flex;
    gap: 8px;
    margin-bottom: 10px;
    flex-wrap: wrap;
    align-items: center;
  }

  .tag {
    font-size: 0.72rem;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 20px;
    letter-spacing: 0.02em;
  }

  .tag-year {
    background: var(--accent-light);
    color: var(--accent);
    border: 1px solid #c5d0f7;
  }

  .tag-type {
    background: var(--tag-bg);
    color: var(--tag-text);
  }

  .tag-ai {
    background: var(--green-bg);
    color: var(--green);
    border: 1px solid #b6ddc8;
  }

  .tag-mobile {
    background: #edf2ff;
    color: #3b5bdb;
    border: 1px solid #bac8ff;
  }

  .project-title {
    font-family: 'Lora', serif;
    font-size: 1.05rem;
    font-weight: 700;
    margin-bottom: 7px;
    color: var(--text);
  }

  .project-desc {
    font-size: 0.855rem;
    color: var(--muted);
    line-height: 1.6;
  }

  .project-cta {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    color: var(--accent);
    font-size: 0.82rem;
    font-weight: 600;
    margin-top: 12px;
    text-decoration: none;
    transition: gap 0.2s;
  }

  .project-card:hover .project-cta { gap: 8px; }

  /* SERVICES */
  .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
  }

  .service-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 28px 24px;
    transition: border-color 0.2s;
  }

  .service-card:hover { border-color: var(--accent); }

  .service-icon {
    font-size: 1.6rem;
    margin-bottom: 14px;
    display: block;
  }

  .service-name {
    font-family: 'Lora', serif;
    font-weight: 700;
    font-size: 1rem;
    margin-bottom: 8px;
    color: var(--text);
  }

  .service-desc {
    font-size: 0.86rem;
    color: var(--muted);
    line-height: 1.6;
  }

  /* CONTACT */
  .contact-box {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 48px;
    text-align: center;
  }

  .contact-box p {
    color: var(--muted);
    max-width: 480px;
    margin: 0 auto 28px;
    line-height: 1.7;
    font-size: 0.975rem;
  }

  .contact-email {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--text);
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: 600;
    border-bottom: 2px solid var(--accent);
    padding-bottom: 2px;
    transition: color 0.2s;
    margin-bottom: 32px;
  }

  .contact-email:hover { color: var(--accent); }

  .socials {
    display: flex;
    justify-content: center;
    gap: 12px;
  }

  .social-btn {
    width: 42px;
    height: 42px;
    border-radius: 8px;
    background: var(--tag-bg);
    border: 1px solid var(--border);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: var(--muted);
    text-decoration: none;
    transition: all 0.2s;
  }

  .social-btn:hover {
    background: var(--accent);
    border-color: var(--accent);
    color: #fff;
    transform: translateY(-2px);
  }

  /* FOOTER */
  footer {
    text-align: center;
    padding: 28px 40px;
    font-size: 0.82rem;
    color: var(--muted);
    border-top: 1px solid var(--border);
  }

  /* MODAL */
  .modal-bg {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.45);
    z-index: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.25s;
  }

  .modal-bg.open {
    opacity: 1;
    visibility: visible;
  }

  .modal {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 14px;
    max-width: 640px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    transform: translateY(16px);
    transition: transform 0.25s;
  }

  .modal-bg.open .modal { transform: translateY(0); }

  .modal-head {
    padding: 28px 28px 20px;
    border-bottom: 1px solid var(--border);
    position: relative;
  }

  .modal-close {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 32px;
    height: 32px;
    border-radius: 6px;
    background: var(--tag-bg);
    border: 1px solid var(--border);
    cursor: pointer;
    font-size: 1rem;
    color: var(--muted);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
  }

  .modal-close:hover { background: var(--border); color: var(--text); }

  .modal-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 12px;
  }

  .modal-title {
    font-family: 'Lora', serif;
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 6px;
  }

  .modal-sub { font-size: 0.9rem; color: var(--muted); }

  .modal-body { padding: 24px 28px; }

  .modal-section { margin-bottom: 24px; }

  .modal-section-title {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--accent);
    margin-bottom: 10px;
  }

  .modal-text {
    font-size: 0.9rem;
    color: var(--muted);
    line-height: 1.75;
  }

  .tech-tags { display: flex; flex-wrap: wrap; gap: 8px; }

  .tech-tag {
    font-size: 0.8rem;
    padding: 5px 12px;
    background: var(--tag-bg);
    border: 1px solid var(--border);
    border-radius: 6px;
    color: var(--tag-text);
    font-weight: 500;
  }

  .feature-list { list-style: none; }

  .feature-list li {
    font-size: 0.875rem;
    color: var(--muted);
    padding: 9px 0 9px 22px;
    border-bottom: 1px solid var(--border);
    position: relative;
    line-height: 1.5;
  }

  .feature-list li:last-child { border-bottom: none; }

  .feature-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--green);
    font-weight: 700;
    font-size: 0.9rem;
  }

  .modal-foot {
    padding: 16px 28px 24px;
    display: flex;
    gap: 10px;
  }

  /* RESPONSIVE */
  @media (max-width: 768px) {
    nav { padding: 0 20px; }
    .container { padding: 0 20px; }
    .hero-inner { grid-template-columns: 1fr; }
    .hero-photo { display: none; }
    .about-grid { grid-template-columns: 1fr; gap: 32px; }
    .stats { grid-template-columns: repeat(3, 1fr); }
    .skills-list { grid-template-columns: 1fr; }
    .projects-grid { grid-template-columns: 1fr; }
    .services-grid { grid-template-columns: 1fr; }
    .nav-links { display: none; }
    section { padding: 52px 0; }
    .contact-box { padding: 32px 20px; }
    .modal-head, .modal-body, .modal-foot { padding-left: 20px; padding-right: 20px; }
  }

  /* Scroll animations */
  .reveal {
    opacity: 0;
    transform: translateY(18px);
    transition: opacity 0.5s ease, transform 0.5s ease;
  }

  .reveal.visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-inner">
    <a href="#" class="nav-logo">Jake Rodriguez</a>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero-inner">
      <div>
        <div class="hero-tag">Available for Remote & On-Site Work</div>
        <h1>Jake Rodriguez<br><em>Developer & IT Support.</em></h1>
        <p class="hero-sub">
          I build websites, apps, and internal tools — can help with office and tech support too. Available remote or on-site in Manila or Cebu.
        </p>
        <div class="hero-actions">
          <a href="#projects" class="btn btn-primary">View My Work</a>
          <a href="#contact" class="btn btn-ghost">Get In Touch</a>
        </div>
      </div>
      <img src="jake.jpg" alt="Jake Rodriguez" class="hero-photo">
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="container">
    <div class="section-label">About Me</div>
    <h2 class="section-title">Who I Am</h2>
    <div class="about-grid reveal">
      <div class="about-text">
        <p>Jake Rodriguez, a developer based in Cebu, Philippines. I build web applications, mobile apps, and desktop tools — with a focus on clean interfaces and practical functionality.</p>
        <p>I use modern development frameworks alongside AI tools to work efficiently and deliver polished results. Whether it's a full web system, a mobile app, or IT and office support, I get things done.</p>
        <p>Currently open to freelance, full-time, or internship opportunities — both remote and on-site.</p>
      </div>
      <div class="stats">
        <div class="stat">
          <span class="stat-num">3+</span>
          <div class="stat-label">Years Learning</div>
        </div>
        <div class="stat">
          <span class="stat-num">10+</span>
          <div class="stat-label">Projects Built</div>
        </div>
        <div class="stat">
          <span class="stat-num">5+</span>
          <div class="stat-label">Technologies</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <div class="container">
    <div class="section-label">Expertise</div>
    <h2 class="section-title">My Skills</h2>
    <div class="skills-list reveal">
      <div class="skill-row">
        <div class="skill-top">
          <span class="skill-name-text">Laravel</span>
          <span class="skill-pct">81% — Advanced</span>
        </div>
        <div class="skill-bar"><div class="skill-fill advanced" style="--w:81%"></div></div>
      </div>
      <div class="skill-row">
        <div class="skill-top">
          <span class="skill-name-text">HTML / CSS</span>
          <span class="skill-pct">68% — Advanced</span>
        </div>
        <div class="skill-bar"><div class="skill-fill advanced" style="--w:68%"></div></div>
      </div>
      <div class="skill-row">
        <div class="skill-top">
          <span class="skill-name-text">C#</span>
          <span class="skill-pct">68% — Advanced</span>
        </div>
        <div class="skill-bar"><div class="skill-fill advanced" style="--w:68%"></div></div>
      </div>
      <div class="skill-row">
        <div class="skill-top">
          <span class="skill-name-text">PHP</span>
          <span class="skill-pct">60% — Advanced</span>
        </div>
        <div class="skill-bar"><div class="skill-fill advanced" style="--w:60%"></div></div>
      </div>
      <div class="skill-row">
        <div class="skill-top">
          <span class="skill-name-text">MySQL</span>
          <span class="skill-pct">58% — Intermediate</span>
        </div>
        <div class="skill-bar"><div class="skill-fill intermediate" style="--w:58%"></div></div>
      </div>
      <div class="skill-row">
        <div class="skill-top">
          <span class="skill-name-text">JavaScript</span>
          <span class="skill-pct">41% — Intermediate</span>
        </div>
        <div class="skill-bar"><div class="skill-fill intermediate" style="--w:41%"></div></div>
      </div>
      <div class="skill-row">
        <div class="skill-top">
          <span class="skill-name-text">React Native</span>
          <span class="skill-pct">45% — Intermediate</span>
        </div>
        <div class="skill-bar"><div class="skill-fill intermediate" style="--w:45%"></div></div>
      </div>
      <div class="skill-row">
        <div class="skill-top">
          <span class="skill-name-text">Firebase</span>
          <span class="skill-pct">35% — Beginner</span>
        </div>
        <div class="skill-bar"><div class="skill-fill beginner" style="--w:35%"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="container">
    <div class="section-label">Portfolio</div>
    <h2 class="section-title">Featured Projects</h2>
    <div class="projects-grid">

      <div class="project-card reveal" data-project="burnbai">
        <div class="project-icon">🔥 Burn Bai</div>
        <div class="project-body">
          <div class="project-meta">
            <span class="tag tag-year">2024</span>
            <span class="tag tag-type">Mobile App</span>
            <span class="tag tag-mobile">📱 Mobile</span>
          </div>
          <div class="project-title">Burn Bai</div>
          <p class="project-desc">A fat-burner fitness app with easy, medium, and intense workouts — no equipment needed. Work out anywhere.</p>
          <span class="project-cta">View details →</span>
        </div>
      </div>

      <div class="project-card reveal" data-project="psa">
        <div class="project-icon">PSA</div>
        <div class="project-body">
          <div class="project-meta">
            <span class="tag tag-year">Jan – Apr 2026</span>
            <span class="tag tag-type">Internship</span>
          </div>
          <div class="project-title">Philippine Statistics Authority</div>
          <p class="project-desc">HR Department internship — managing personnel records and developing internal office tools.</p>
          <span class="project-cta">View details →</span>
        </div>
      </div>

      <div class="project-card reveal" data-project="baltbep">
        <div class="project-icon">BaltBep</div>
        <div class="project-body">
          <div class="project-meta">
            <span class="tag tag-year">2025</span>
            <span class="tag tag-type">Capstone</span>
          </div>
          <div class="project-title">BaltBep Ticketing System</div>
          <p class="project-desc">A complete ship ticketing system with admin dashboard, booking management, and real-time availability.</p>
          <span class="project-cta">View details →</span>
        </div>
      </div>

      <div class="project-card reveal" data-project="gym-php">
        <div class="project-icon">Gym + AI</div>
        <div class="project-body">
          <div class="project-meta">
            <span class="tag tag-year">Oct 2024 – Mar 2025</span>
            <span class="tag tag-type">3rd Year</span>
            <span class="tag tag-ai">✨ AI</span>
          </div>
          <div class="project-title">Gym Management System (PHP)</div>
          <p class="project-desc">Full-featured gym system with an integrated AI assistant for member support, recommendations, and scheduling.</p>
          <span class="project-cta">View details →</span>
        </div>
      </div>

      <div class="project-card reveal" data-project="gym-csharp">
        <div class="project-icon">Gym</div>
        <div class="project-body">
          <div class="project-meta">
            <span class="tag tag-year">Mar – May 2024</span>
            <span class="tag tag-type">2nd Year</span>
          </div>
          <div class="project-title">Gym Monitoring System (C#)</div>
          <p class="project-desc">Desktop Windows application for gym management built with C# and .NET, with full reporting features.</p>
          <span class="project-cta">View details →</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="container">
    <div class="section-label">What I Do</div>
    <h2 class="section-title">Services</h2>
    <div class="services-grid reveal">
      <div class="service-card">
        <span class="service-icon">🌐</span>
        <div class="service-name">Web Development</div>
        <p class="service-desc">Full-stack web apps using Laravel, PHP, and JavaScript. From concept to deployment.</p>
      </div>
      <div class="service-card">
        <span class="service-icon">📱</span>
        <div class="service-name">Mobile Development</div>
        <p class="service-desc">Cross-platform apps for iOS and Android, built with React Native for real-world usability.</p>
      </div>
      <div class="service-card">
        <span class="service-icon">⚡</span>
        <div class="service-name">AI Integration</div>
        <p class="service-desc">Adding intelligent features to applications — chatbots, recommendations, and smart workflows.</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="container">
    <div class="contact-box reveal">
      <div class="section-label" style="text-align:center">Get In Touch</div>
      <h2 class="section-title" style="text-align:center;margin-bottom:16px">Let's Work Together</h2>
      <p>Open to freelance projects, full-time roles, and on-site opportunities in Cebu. Whether it's a website, an app, or IT and office support — I'm happy to help.</p>
      <div><a href="mailto:jeikur42@gmail.com" class="contact-email">📧 jeikur42@gmail.com</a></div>
      <div class="socials">
        <a href="https://github.com/Jeii22" target="_blank" class="social-btn" title="GitHub">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
        </a>
        <a href="#" class="social-btn" title="LinkedIn">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
        </a>
        <a href="#" class="social-btn" title="Facebook">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
        <a href="#" class="social-btn" title="Instagram">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Jake Rodriguez · Cebu, Philippines</p>
</footer>

<!-- MODAL -->
<div class="modal-bg" id="modal">
  <div class="modal">
    <div class="modal-head">
      <button class="modal-close" onclick="closeModal()">✕</button>
      <div class="modal-tags" id="m-tags"></div>
      <div class="modal-title" id="m-title"></div>
      <div class="modal-sub" id="m-sub"></div>
    </div>
    <div class="modal-body">
      <div class="modal-section">
        <div class="modal-section-title">Overview</div>
        <p class="modal-text" id="m-overview"></p>
      </div>
      <div class="modal-section">
        <div class="modal-section-title">Technologies</div>
        <div class="tech-tags" id="m-tech"></div>
      </div>
      <div class="modal-section">
        <div class="modal-section-title">Key Features</div>
        <ul class="feature-list" id="m-features"></ul>
      </div>
    </div>
    <div class="modal-foot" id="m-foot"></div>
  </div>
</div>

<script>
const projects = {
  burnbai: {
    year: '2024', type: 'Mobile Application', ai: false, mobile: true,
    title: 'Burn Bai', sub: 'Island-Ready Fitness Companion',
    overview: 'Burn Bai is a mobile fitness app designed for people who want to stay fit without gym equipment. Whether you\'re on Bantayan Island or anywhere else, this app delivers effective fat-burning workouts that only need your body. Three intensity levels (Easy, Medium, Intense) accommodate beginners to advanced users.',
    tech: ['React Native', 'Firebase', 'Node.js', 'Expo', 'AsyncStorage', 'Push Notifications'],
    features: ['Three workout levels: Easy, Medium, and Intense','Zero equipment — bodyweight only','Works offline — ideal for island locations','Progress tracking and workout history','Customizable reminders and schedules','Calorie counter and goal setting','Video demonstrations for all exercises'],
    link: null
  },
  psa: {
    year: 'Jan – Apr 2026', type: 'On-the-Job Training', ai: false, mobile: false,
    title: 'Philippine Statistics Authority', sub: 'HR Department Internship',
    overview: 'Served as an intern under the Human Resources department at the Philippine Statistics Authority. Responsible for managing personnel records, assisting in recruitment, and developing internal tools to streamline HR workflows.',
    tech: ['Microsoft Office', 'HR Information Systems', 'Data Entry', 'Record Management'],
    features: ['Managed personnel records for 100+ employees','Assisted in recruitment and onboarding','Built Excel tools for HR analytics','Participated in training sessions','Learned government compliance standards'],
    link: null
  },
  baltbep: {
    year: '2025', type: 'Capstone Project', ai: false, mobile: false,
    title: 'BaltBep Ticketing System', sub: 'Ship Ticketing & Reservation Platform',
    overview: 'A comprehensive web-based ship ticketing system developed as a 4th year Capstone project. Features real-time booking management, passenger tracking, automated ticket generation, and a full admin dashboard.',
    tech: ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'Bootstrap', 'HTML/CSS'],
    features: ['Real-time seat availability and booking','Automated ticket generation','Admin dashboard with analytics','Passenger management','Payment integration and invoicing','Mobile-responsive design','Mobile app for easy booking'],
    link: 'https://baltbep.net'
  },
  'gym-php': {
    year: 'Oct 2024 – Mar 2025', type: '3rd Year Final Project', ai: true, mobile: false,
    title: 'Gym Management System (PHP)', sub: 'AI-Powered Fitness Center Platform',
    overview: 'A full-featured gym management system built for Fettle Hut Fitness Gym, with an integrated AI assistant. Handles member registration, attendance, payment processing, and workout plans. The AI assistant gives personalized recommendations and answers member questions.',
    tech: ['PHP', 'MySQL', 'JavaScript', 'jQuery', 'Bootstrap', 'HTML/CSS', 'OpenAI API', 'AJAX'],
    features: ['AI assistant for member support','Smart AI-optimized scheduling','Member registration and profiles','Payment processing and invoices','AI-generated personalized workout plans','Financial reporting dashboard'],
    link: null
  },
  'gym-csharp': {
    year: 'Mar – May 2024', type: '2nd Year Final Project', ai: false, mobile: false,
    title: 'Gym Monitoring System (C#)', sub: 'Desktop Application for Gym Management',
    overview: 'A Windows desktop application for gym management built with C# and .NET Framework. My first major project — focused on desktop UI and database integration, with comprehensive reporting tools.',
    tech: ['C#', '.NET Framework', 'Windows Forms', 'SQL Server', 'Crystal Reports'],
    features: ['Windows Forms with modern UI','Local SQL Server database','Crystal Reports integration','Member photo capture and ID printing','Backup and restore','Offline operation'],
    link: null
  }
};

function openModal(id) {
  const p = projects[id];
  if (!p) return;

  const tags = [
    `<span class="tag tag-year">${p.year}</span>`,
    `<span class="tag tag-type">${p.type}</span>`,
    p.ai ? `<span class="tag tag-ai">✨ AI Powered</span>` : '',
    p.mobile ? `<span class="tag tag-mobile">📱 Mobile</span>` : ''
  ].join('');

  document.getElementById('m-tags').innerHTML = tags;
  document.getElementById('m-title').textContent = p.title;
  document.getElementById('m-sub').textContent = p.sub;
  document.getElementById('m-overview').textContent = p.overview;
  document.getElementById('m-tech').innerHTML = p.tech.map(t => `<span class="tech-tag">${t}</span>`).join('');
  document.getElementById('m-features').innerHTML = p.features.map(f => `<li>${f}</li>`).join('');
  document.getElementById('m-foot').innerHTML = p.link
    ? `<a href="${p.link}" target="_blank" class="btn btn-primary">Visit Live Site →</a><button class="btn btn-ghost" onclick="closeModal()">Close</button>`
    : `<button class="btn btn-ghost" onclick="closeModal()">Close</button>`;

  document.getElementById('modal').classList.add('open');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  document.getElementById('modal').classList.remove('open');
  document.body.style.overflow = '';
}

document.getElementById('modal').addEventListener('click', e => {
  if (e.target === document.getElementById('modal')) closeModal();
});

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

document.querySelectorAll('.project-card').forEach(card => {
  card.addEventListener('click', () => openModal(card.dataset.project));
});

// Skill bar animation on scroll
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('.skill-fill').forEach(bar => bar.classList.add('animate'));
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.15 });

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>

<p>&copy; <span id="year"></span> Your Name. All rights reserved.</p>
<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>

<p>
  <a href="/privacy" style="color:#fff; text-decoration:none;">Privacy Policy</a> | 
  <a href="/contact" style="color:#fff; text-decoration:none;">Contact</a>
</p>


<footer style="background-color:#222; color:#fff; text-align:center; padding:15px 0; font-size:14px;">
  <p>&copy; All rights reserved.</p>
  <p>Owner Jake Rodriguez</p>
</footer>

</body>
</html>
