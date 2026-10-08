<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description"
content="Jake Rodriguez — IT Graduate, Web Developer and IT Support Specialist based in Cebu, Philippines.">

<title>Jake Rodriguez — From Madridejos</title>

<!-- Favicon -->
<link rel="icon" type="image/developers" href="images/developers/favicon.png">

<style>
:root{
    color-scheme:light;

    --bg:#f7f8fa;
    --surface:#ffffff;
    --surface-2:#f1f3f6;
    --text:#111827;
    --muted:#647084;
    --line:#e5e7eb;

    --accent:#2563eb;
    --accent-strong:#1d4ed8;
    --accent-soft:#eff6ff;

    --success:#15803d;
    --success-soft:#ecfdf3;

    --shadow:0 18px 50px rgba(15,23,42,.08);
    --radius:18px;

    --nav:rgba(255,255,255,.86);
}

html[data-theme="dark"]{
    color-scheme:dark;

    --bg:#0b0f16;
    --surface:#111722;
    --surface-2:#171e2b;
    --text:#f3f6fb;
    --muted:#9aa7ba;
    --line:#273142;

    --accent:#60a5fa;
    --accent-strong:#93c5fd;
    --accent-soft:#12233b;

    --success:#4ade80;
    --success-soft:#10281b;

    --shadow:0 20px 60px rgba(0,0,0,.3);
    --nav:rgba(11,15,22,.86);
}

*{
    box-sizing:border-box;
    margin:0;
    padding:0;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family:
        Inter,
        ui-sans-serif,
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        sans-serif;

    background:var(--bg);
    color:var(--text);

    line-height:1.65;
    font-size:16px;

    transition:
        background .25s,
        color .25s;
}

a{
    color:inherit;
}

button{
    font:inherit;
}

/* =========================
   PROGRESS
========================= */

.progress{
    position:fixed;
    top:0;
    left:0;

    height:3px;
    width:0;

    background:var(--accent);

    z-index:1000;
}

/* =========================
   GLOBAL
========================= */

.container{
    width:min(1120px,calc(100% - 40px));
    margin:auto;
}

/* =========================
   NAVIGATION
========================= */

.nav{
    position:sticky;
    top:0;
    z-index:100;

    background:var(--nav);
    backdrop-filter:blur(18px);

    border-bottom:1px solid var(--line);
}

.nav-inner{
    height:72px;

    display:flex;
    align-items:center;
    justify-content:space-between;
}

.brand{
    text-decoration:none;

    font-weight:800;
    letter-spacing:-.04em;
    font-size:1.1rem;
}

.brand span{
    color:var(--accent);
}

.nav-links{
    display:flex;
    gap:28px;
    list-style:none;
}

.nav-links a{
    text-decoration:none;
    color:var(--muted);

    font-size:.9rem;
    font-weight:600;

    transition:.2s;
}

.nav-links a:hover,
.nav-links a.active{
    color:var(--accent);
}

.nav-actions{
    display:flex;
    align-items:center;
    gap:10px;
}

.icon-btn,
.menu-btn{
    width:42px;
    height:42px;

    border:1px solid var(--line);
    background:var(--surface);
    color:var(--text);

    border-radius:12px;

    display:grid;
    place-items:center;

    cursor:pointer;

    transition:.2s;
}

.menu-btn{
    display:none;
}

.icon-btn:hover,
.menu-btn:hover{
    border-color:var(--accent);
    color:var(--accent);
}

/* =========================
   HERO
========================= */

.hero{
    padding:100px 0 80px;

    border-bottom:1px solid var(--line);

    background:
        radial-gradient(
            circle at 80% 25%,
            var(--accent-soft),
            transparent 30%
        ),
        var(--bg);
}

.hero-grid{
    display:grid;
    grid-template-columns:1.35fr .65fr;

    gap:70px;
    align-items:center;
}

.eyebrow{
    display:flex;
    align-items:center;
    gap:8px;

    padding:7px 12px;

    border:1px solid #bbf7d0;
    background:var(--success-soft);
    color:var(--success);

    border-radius:999px;

    font-size:.78rem;
    font-weight:700;

    margin-bottom:22px;
}

.dot{
    width:7px;
    height:7px;

    border-radius:50%;

    background:currentColor;

    box-shadow:
        0 0 0 5px rgba(21,128,61,.1);
}

h1{
    font-size:clamp(3rem,7vw,5.6rem);

    line-height:.98;
    letter-spacing:-.065em;

    max-width:800px;
}

h1 .accent{
    color:var(--accent);
}

.hero-copy{
    font-size:1.1rem;

    color:var(--muted);

    max-width:670px;

    margin:26px 0 32px;
}

.actions{
    display:flex;
    gap:12px;
    flex-wrap:wrap;
}

.btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;

    padding:12px 18px;

    border-radius:12px;
    border:1px solid var(--line);

    text-decoration:none;

    font-weight:700;
    font-size:.9rem;

    transition:.2s;
}

.btn-primary{
    background:var(--accent);
    color:#fff;
    border-color:var(--accent);
}

.btn-primary:hover{
    background:var(--accent-strong);
    transform:translateY(-2px);
}

.btn-secondary{
    background:var(--surface);
    color:var(--text);
}

.btn-secondary:hover{
    border-color:var(--accent);
    color:var(--accent);
}

/* =========================
   HERO PROFILE CARD
========================= */

.hero-card{
    background:var(--surface);

    border:1px solid var(--line);
    border-radius:28px;

    padding:28px;

    box-shadow:var(--shadow);
}

.avatar{
    width:118px;
    height:118px;

    border-radius:28px;

    overflow:hidden;

    background:var(--surface-2);

    display:block;

    margin-bottom:22px;
}

.avatar img{
    width:100%;
    height:100%;

    display:block;

    object-fit:cover;
}

.hero-card h3{
    font-size:1.15rem;
    margin-bottom:6px;
}

.hero-card p{
    color:var(--muted);
    font-size:.9rem;
}

.mini-list{
    margin-top:20px;

    display:grid;
    gap:10px;
}

.mini-item{
    display:flex;
    justify-content:space-between;
    gap:16px;

    padding-top:10px;

    border-top:1px solid var(--line);

    font-size:.82rem;
}

.mini-item span:first-child{
    color:var(--muted);
}

/* =========================
   SECTIONS
========================= */

section{
    padding:88px 0;

    border-bottom:1px solid var(--line);
}

.section-head{
    display:flex;
    align-items:end;
    justify-content:space-between;

    gap:30px;

    margin-bottom:36px;
}

.kicker{
    font-size:.72rem;

    text-transform:uppercase;
    letter-spacing:.16em;

    color:var(--accent);

    font-weight:800;

    margin-bottom:8px;
}

.section-title{
    font-size:clamp(2rem,4vw,3rem);

    letter-spacing:-.045em;

    line-height:1.05;
}

.section-note{
    max-width:430px;

    color:var(--muted);

    font-size:.92rem;
}

/* =========================
   ABOUT
========================= */

.about{
    display:grid;

    grid-template-columns:1.1fr .9fr;

    gap:70px;
}

.about-copy p{
    color:var(--muted);
    margin-bottom:18px;
}

.stats{
    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:12px;
}

.stat{
    background:var(--surface);

    border:1px solid var(--line);
    border-radius:16px;

    padding:20px;
}

.stat strong{
    display:block;

    font-size:1.7rem;

    letter-spacing:-.04em;

    color:var(--accent);
}

.stat span{
    display:block;

    color:var(--muted);

    font-size:.76rem;

    margin-top:4px;
}

/* =========================
   SKILLS
========================= */

.skills{
    display:grid;

    grid-template-columns:repeat(2,1fr);

    gap:14px;
}

.skill{
    background:var(--surface);

    border:1px solid var(--line);
    border-radius:16px;

    padding:18px;
}

.skill-top{
    display:flex;
    justify-content:space-between;

    gap:12px;

    margin-bottom:10px;
}

.skill-name{
    font-weight:700;
}

.skill-level{
    font-size:.78rem;
    color:var(--muted);
}

.bar{
    height:7px;

    background:var(--surface-2);

    border-radius:99px;

    overflow:hidden;
}

.fill{
    height:100%;
    width:var(--w);

    background:var(--accent);

    border-radius:inherit;
}

/* =========================
   EXPERIENCE
========================= */

.timeline{
    display:grid;
    gap:14px;
}

.experience{
    display:grid;

    grid-template-columns:170px 1fr;

    gap:28px;

    padding:24px;

    background:var(--surface);

    border:1px solid var(--line);

    border-radius:18px;
}

.experience-date{
    color:var(--muted);

    font-size:.8rem;
    font-weight:700;
}

.experience h3{
    font-size:1.05rem;
}

.experience .company{
    color:var(--accent);

    font-size:.85rem;
    font-weight:700;

    margin:3px 0 9px;
}

.experience p{
    color:var(--muted);
    font-size:.9rem;
}

/* =========================
   PROJECTS
========================= */

.projects{
    display:grid;

    grid-template-columns:repeat(2,1fr);

    gap:18px;
}

.project{
    background:var(--surface);

    border:1px solid var(--line);
    border-radius:20px;

    padding:24px;

    cursor:pointer;

    transition:.22s;

    position:relative;

    overflow:hidden;
}

.project:hover{
    transform:translateY(-4px);

    border-color:var(--accent);

    box-shadow:var(--shadow);
}

.project-top{
    display:flex;

    justify-content:space-between;
    align-items:start;

    gap:20px;
}

.project-icon{
    width:48px;
    height:48px;

    border-radius:14px;

    background:var(--accent-soft);
    color:var(--accent);

    display:grid;
    place-items:center;

    font-weight:900;
    font-size:.8rem;
}

.arrow{
    color:var(--muted);
    font-size:1.2rem;
}

.project h3{
    margin-top:20px;

    font-size:1.15rem;
}

.project p{
    color:var(--muted);

    font-size:.87rem;

    margin:8px 0 17px;
}

.tags{
    display:flex;

    gap:7px;

    flex-wrap:wrap;
}

.tag{
    font-size:.7rem;

    font-weight:700;

    color:var(--muted);

    background:var(--surface-2);

    border:1px solid var(--line);

    padding:4px 9px;

    border-radius:999px;
}

/* =========================
   SERVICES
========================= */

.services{
    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:16px;
}

.service{
    background:var(--surface);

    border:1px solid var(--line);
    border-radius:18px;

    padding:25px;
}

.service-icon{
    width:42px;
    height:42px;

    border-radius:12px;

    background:var(--accent-soft);

    display:grid;
    place-items:center;

    color:var(--accent);

    font-weight:900;

    margin-bottom:18px;
}

.service h3{
    font-size:1rem;
    margin-bottom:7px;
}

.service p{
    color:var(--muted);
    font-size:.85rem;
}

/* =========================
   CONTACT
========================= */

.contact{
    background:var(--surface);

    border:1px solid var(--line);

    border-radius:24px;

    padding:50px;

    text-align:center;

    box-shadow:var(--shadow);
}

.contact p{
    max-width:580px;

    margin:12px auto 26px;

    color:var(--muted);
}

.email{
    display:inline-flex;

    font-weight:800;

    color:var(--accent);

    text-decoration:none;

    margin-bottom:24px;
}

.socials{
    display:flex;

    justify-content:center;

    gap:9px;
}

.social{
    width:42px;
    height:42px;

    border-radius:12px;

    border:1px solid var(--line);

    background:var(--surface-2);

    display:grid;
    place-items:center;

    text-decoration:none;

    font-size:.78rem;
    font-weight:800;
}

.social:hover{
    border-color:var(--accent);
    color:var(--accent);
}

/* =========================
   FOOTER
========================= */

footer{
    padding:28px 0;

    color:var(--muted);

    font-size:.78rem;

    text-align:center;
}

/* =========================
   PROJECT MODAL
========================= */

.modal-bg{
    position:fixed;

    inset:0;

    background:rgba(2,6,23,.62);

    backdrop-filter:blur(8px);

    display:grid;
    place-items:center;

    padding:20px;

    z-index:500;

    opacity:0;
    visibility:hidden;

    transition:.2s;
}

.modal-bg.open{
    opacity:1;
    visibility:visible;
}

.modal{
    width:min(680px,100%);

    max-height:88vh;

    overflow:auto;

    background:var(--surface);

    border:1px solid var(--line);

    border-radius:22px;

    box-shadow:0 30px 90px rgba(0,0,0,.28);

    transform:translateY(14px);

    transition:.2s;
}

.modal-bg.open .modal{
    transform:none;
}

.modal-head{
    padding:25px;

    border-bottom:1px solid var(--line);

    display:flex;

    justify-content:space-between;

    gap:20px;
}

.modal-close{
    width:36px;
    height:36px;

    border:1px solid var(--line);

    background:var(--surface-2);

    color:var(--text);

    border-radius:10px;

    cursor:pointer;
}

.modal-body{
    padding:25px;
}

.modal-title{
    font-size:1.45rem;

    letter-spacing:-.03em;
}

.modal-sub{
    color:var(--muted);

    font-size:.85rem;
}

.modal-section{
    margin-bottom:24px;
}

.modal-label{
    font-size:.5rem;

    text-transform:uppercase;

    letter-spacing:.12em;

    color:var(--accent);

    font-weight:800;

    margin-bottom:9px;
}

.modal-text{
    color:var(--muted);
    font-size:.9rem;
}

.feature-list{
    list-style:none;

    display:grid;

    gap:8px;
}

.feature-list li{
    color:var(--muted);

    font-size:.87rem;
}

.feature-list li::before{
    content:'✓';

    color:var(--success);

    font-weight:800;

    margin-right:9px;
}

.modal-foot{
    padding:0 25px 25px;

    display:flex;

    gap:10px;
}

/* =========================
   ANIMATION
========================= */

.reveal{
    opacity:0;

    transform:translateY(18px);

    transition:.55s ease;
}

.reveal.visible{
    opacity:1;

    transform:none;
}

/* =========================
   MOBILE
========================= */

.mobile-menu{
    display:none;
}

@media(max-width:800px){

    .container{
        width:min(100% - 28px,680px);
    }

    .nav-inner{
        height:64px;
    }

    .nav-links{
        display:none;
    }

    .menu-btn{
        display:grid;
    }

    .nav-actions{
        margin-left:auto;
    }

    .hero{
        padding:68px 0 60px;
    }

    .hero-grid,
    .about{
        grid-template-columns:1fr;

        gap:35px;
    }

    .hero-card{
        display:none;
    }

    .skills,
    .projects{
        grid-template-columns:1fr;
    }

    .services{
        grid-template-columns:1fr;
    }

    .section-head{
        display:block;
    }

    .section-note{
        margin-top:12px;
    }

    .experience{
        grid-template-columns:1fr;

        gap:10px;
    }

    .contact{
        padding:34px 20px;
    }

    section{
        padding:64px 0;
    }

    .mobile-menu.open{
        display:block;

        border-top:1px solid var(--line);

        background:var(--surface);
    }

    .mobile-menu a{
        display:block;

        padding:13px 20px;

        text-decoration:none;

        color:var(--muted);

        font-weight:700;

        border-bottom:1px solid var(--line);
    }
}

@media(prefers-reduced-motion:reduce){

    *,
    *::before,
    *::after{

        scroll-behavior:auto!important;

        transition:none!important;

        animation:none!important;
    }
}
</style>
</head>

<body>

<div class="progress" id="progress"></div>

<!-- =========================
     NAVIGATION
========================= -->

<nav class="nav">

<div class="container nav-inner">

<a class="brand" href="#top">
    Jake<span>.</span>
</a>

<ul class="nav-links">

<li>
    <a href="#about">About</a>
</li>

<li>
    <a href="#skills">Skills</a>
</li>

<li>
    <a href="#experience">Experience</a>
</li>

<li>
    <a href="#projects">Projects</a>
</li>

<li>
    <a href="#services">Services</a>
</li>

<li>
    <a href="#contact">Contact</a>
</li>

</ul>

<div class="nav-actions">

<button
    class="icon-btn"
    id="themeBtn"
    aria-label="Toggle theme">
    ☾
</button>

<button
    class="menu-btn"
    id="menuBtn"
    aria-label="Open menu">
    ☰
</button>

</div>

</div>

<div class="mobile-menu" id="mobileMenu">

<div class="container">

<a href="#about">About</a>
<a href="#skills">Skills</a>
<a href="#experience">Experience</a>
<a href="#projects">Projects</a>
<a href="#services">Services</a>
<a href="#contact">Contact</a>

</div>

</div>

</nav>


<main id="top">

<!-- =========================
     HERO
========================= -->

<section class="hero">

<div class="container hero-grid">

<div>

<div class="eyebrow">
    <span class="dot"></span>
    Available for opportunities
</div>

<h1>
    Hi! I'm Jake<br>
    <span class="accent">
        I build useful digital products.
    </span>
</h1>

<p class="hero-copy">
    IT graduate and aspiring developer based in Cebu,
    Philippines. I build web systems, mobile apps,
    internal tools, and provide practical technical support.
</p>

<div class="actions">

<a
    class="btn btn-primary"
    href="#projects">
    View my work →
</a>

<a
    class="btn btn-secondary"
    href="#contact">
    Let's connect
</a>

</div>

</div>


<!-- PROFILE -->

<aside class="hero-card">

<div class="avatar">

<img
    src="jakedp.jpg"
    alt="Jake Rodriguez">

</div>

<h3>
    Jake Rodriguez
</h3>

<p>
    IT Graduate · Web Developer · IT Support
</p>

<div class="mini-list">

<div class="mini-item">
    <span>Based in</span>
    <strong>Cebu, PH</strong>
</div>

<div class="mini-item">
    <span>Focus</span>
    <strong>Web & Systems</strong>
</div>

<div class="mini-item">
    <span>Availability</span>
    <strong>Remote / On-site</strong>
</div>

</div>

</aside>

</div>

</section>


<!-- =========================
     ABOUT
========================= -->

<section id="about">

<div class="container">

<div class="section-head">

<div>

<div class="kicker">
    01 / About
</div>

<h2 class="section-title">
    A practical builder, still growing.
</h2>

</div>

<p class="section-note">
    I care about clean interfaces, useful functionality,
    and learning by building real projects.
</p>

</div>


<div class="about">

<div class="about-copy">

<p>
    I'm Jake Rodriguez from Bantayan Island, now based
    in Cebu, Philippines. I hold a Bachelor of Science
    in Information Technology and enjoy turning ideas
    into working websites, applications, and office tools.
</p>

<p>
    My experience includes Laravel and PHP web development,
    database-driven systems, C# desktop applications,
    React Native projects, and hands-on office/IT work.
    I also use AI tools to speed up research, prototyping,
    and development.
</p>

<p>
    I'm open to entry-level, freelance, internship,
    and full-time opportunities where I can contribute
    while continuing to grow as a developer and IT professional.
</p>

</div>


<div class="stats">

<div class="stat">
    <strong>3+</strong>
    <span>Years learning & building</span>
</div>

<div class="stat">
    <strong>10+</strong>
    <span>Projects & school outputs</span>
</div>

<div class="stat">
    <strong>8+</strong>
    <span>Technologies explored</span>
</div>

</div>

</div>

</div>

</section>


<!-- =========================
     SKILLS
========================= -->

<section id="skills">

<div class="container">

<div class="section-head">

<div>

<div class="kicker">
    02 / Expertise
</div>

<h2 class="section-title">
    Tools I work with.
</h2>

</div>

<p class="section-note">
    Practical skills developed through school,
    personal projects, and hands-on experience.
</p>

</div>


<div class="skills reveal">


<div class="skill">

<div class="skill-top">
    <span class="skill-name">Laravel</span>
    <span class="skill-level">Advanced · 81%</span>
</div>

<div class="bar">
    <div class="fill" style="--w:81%"></div>
</div>

</div>


<div class="skill">

<div class="skill-top">
    <span class="skill-name">HTML / CSS</span>
    <span class="skill-level">Advanced · 68%</span>
</div>

<div class="bar">
    <div class="fill" style="--w:68%"></div>
</div>

</div>


<div class="skill">

<div class="skill-top">
    <span class="skill-name">C#</span>
    <span class="skill-level">Advanced · 68%</span>
</div>

<div class="bar">
    <div class="fill" style="--w:68%"></div>
</div>

</div>


<div class="skill">

<div class="skill-top">
    <span class="skill-name">PHP</span>
    <span class="skill-level">Advanced · 60%</span>
</div>

<div class="bar">
    <div class="fill" style="--w:60%"></div>
</div>

</div>


<div class="skill">

<div class="skill-top">
    <span class="skill-name">MySQL</span>
    <span class="skill-level">Intermediate · 58%</span>
</div>

<div class="bar">
    <div class="fill" style="--w:58%"></div>
</div>

</div>


<div class="skill">

<div class="skill-top">
    <span class="skill-name">JavaScript</span>
    <span class="skill-level">Intermediate · 41%</span>
</div>

<div class="bar">
    <div class="fill" style="--w:41%"></div>
</div>

</div>


<div class="skill">

<div class="skill-top">
    <span class="skill-name">React Native</span>
    <span class="skill-level">Intermediate · 45%</span>
</div>

<div class="bar">
    <div class="fill" style="--w:45%"></div>
</div>

</div>


<div class="skill">

<div class="skill-top">
    <span class="skill-name">Firebase</span>
    <span class="skill-level">Beginner · 35%</span>
</div>

<div class="bar">
    <div class="fill" style="--w:35%"></div>
</div>

</div>


</div>

</div>

</section>


<!-- =========================
     EXPERIENCE
========================= -->

<section id="experience">

<div class="container">

<div class="section-head">

<div>

<div class="kicker">
    03 / Experience
</div>

<h2 class="section-title">
    Where I've been learning.
</h2>

</div>

<p class="section-note">
    Practical experience from internship,
    training, and professional development.
</p>

</div>


<div class="timeline">


<article class="experience reveal">

<div class="experience-date">
    Jan — Apr 2026
</div>

<div>

<h3>
    HR Department Intern
</h3>

<div class="company">
    Philippine Statistics Authority
</div>

<p>
    Supported personnel records, recruitment-related
    tasks, data entry, office workflows, and internal
    tools while learning professional documentation
    and compliance practices.
</p>

</div>

</article>


</div>

</div>

</section>


<!-- =========================
     PROJECTS
========================= -->

<section id="projects">

<div class="container">

<div class="section-head">

<div>

<div class="kicker">
    04 / Selected work
</div>

<h2 class="section-title">
    Projects that show how I build.
</h2>

</div>

<p class="section-note">
    Click a project to see its role,
    technology stack, and key features.
</p>

</div>


<div class="projects">


<!-- BURN BAI -->

<article
    class="project reveal"
    data-project="burnbai">

<div class="project-top">

<div class="project-icon">
    BB
</div>

<span class="arrow">
    ↗
</span>

</div>

<h3>
    Burn Bai
</h3>

<p>
    Island-ready fitness companion with bodyweight
    workouts, progress tracking, reminders,
    and multiple intensity levels.
</p>

<div class="tags">

<span class="tag">2024</span>
<span class="tag">React Native</span>
<span class="tag">Firebase</span>

</div>

</article>


<!-- PSA -->

<article
    class="project reveal"
    data-project="psa">

<div class="project-top">

<div class="project-icon">
    PSA
</div>

<span class="arrow">
    ↗
</span>

</div>

<h3>
    Philippine Statistics Authority
</h3>

<p>
    HR internship focused on personnel records,
    office workflows, recruitment support,
    and internal productivity tools.
</p>

<div class="tags">

<span class="tag">2026</span>
<span class="tag">Internship</span>
<span class="tag">Office Tools</span>

</div>

</article>


<!-- BALT BEP -->

<article
    class="project reveal"
    data-project="baltbep">

<div class="project-top">

<div class="project-icon">
    BBT
</div>

<span class="arrow">
    ↗
</span>

</div>

<h3>
    BaltBep Ticketing System
</h3>

<p>
    Capstone ship-ticketing platform with booking
    management, passenger records, ticket generation,
    and an admin dashboard.
</p>

<div class="tags">

<span class="tag">2025</span>
<span class="tag">Laravel</span>
<span class="tag">MySQL</span>

</div>

</article>


<!-- GYM PHP -->

<article
    class="project reveal"
    data-project="gym-php">

<div class="project-top">

<div class="project-icon">
    GYM
</div>

<span class="arrow">
    ↗
</span>

</div>

<h3>
    Gym Management System
</h3>

<p>
    PHP-based gym platform with member management,
    attendance, payments, reporting,
    and an AI assistant concept.
</p>

<div class="tags">

<span class="tag">2024–25</span>
<span class="tag">PHP</span>
<span class="tag">AI</span>

</div>

</article>


<!-- GYM C# -->

<article
    class="project reveal"
    data-project="gym-csharp">

<div class="project-top">

<div class="project-icon">
    C#
</div>

<span class="arrow">
    ↗
</span>

</div>

<h3>
    Gym Monitoring System
</h3>

<p>
    Windows desktop application built as an early
    major project, combining C#, database integration,
    and reporting.
</p>

<div class="tags">

<span class="tag">2024</span>
<span class="tag">C#</span>
<span class="tag">.NET</span>

</div>

</article>


</div>

</div>

</section>


<!-- =========================
     SERVICES
========================= -->

<section id="services">

<div class="container">

<div class="section-head">

<div>

<div class="kicker">
    05 / What I do
</div>

<h2 class="section-title">
    Ways I can help.
</h2>

</div>

<p class="section-note">
    Services positioned around the work I can
    realistically support as an entry-level
    IT professional.
</p>

</div>


<div class="services">


<article class="service">

<div class="service-icon">
    &lt;/&gt;
</div>

<h3>
    Web Development
</h3>

<p>
    Build and improve responsive websites and
    database-driven web applications with PHP,
    Laravel, JavaScript, HTML, and CSS.
</p>

</article>


<article class="service">

<div class="service-icon">
    ▣
</div>

<h3>
    Application Development
</h3>

<p>
    Create practical mobile or desktop applications
    for school projects, small organizations,
    and internal workflows.
</p>

</article>


<article class="service">

<div class="service-icon">
    ⚙
</div>

<h3>
    IT & Office Support
</h3>

<p>
    Help with documentation, data handling,
    basic troubleshooting, productivity tools,
    and day-to-day technical tasks.
</p>

</article>


</div>

</div>

</section>


<!-- =========================
     CONTACT
========================= -->

<section id="contact">

<div class="container">

<div class="contact reveal">

<div class="kicker">
    06 / Contact
</div>

<h2 class="section-title">
    Have a project or opportunity?
</h2>

<p>
    I'm open to entry-level roles, freelance work,
    internships, and practical projects where I can
    contribute and keep improving.
</p>

<a
    class="email"
    href="mailto:jeikur42@gmail.com">
    jeikur42@gmail.com
</a>


<div class="socials">

<a
    class="social"
    href="https://github.com/Jeii22"
    target="_blank"
    rel="noreferrer">
    GH
</a>

<a
    class="social"
    href="https://facebook.com/jei.waizzu"
    target="_blank"
    rel="noreferrer">
    FB
</a>

<a
    class="social"
    href="https://instagram.com/jei.waizzu"
    target="_blank"
    rel="noreferrer">
    IG
</a>

</div>

</div>

</div>

</section>

</main>


<footer>

<div class="container">

© 2026 Jake Rodriguez · Cebu, Philippines ·
Built with HTML, CSS & JavaScript

</div>

</footer>


<!-- =========================
     PROJECT MODAL
========================= -->

<div class="modal-bg" id="modal">

<div
    class="modal"
    role="dialog"
    aria-modal="true">

<div class="modal-head">

<div>

<div
    class="modal-title"
    id="m-title">
</div>

<div
    class="modal-sub"
    id="m-sub">
</div>

</div>

<button
    class="modal-close"
    id="closeModal"
    aria-label="Close">
    ×
</button>

</div>


<div class="modal-body">

<div class="modal-section">

<div class="modal-label">
    Overview
</div>

<p
    class="modal-text"
    id="m-overview">
</p>

</div>


<div class="modal-section">

<div class="modal-label">
    Technologies
</div>

<div
    class="tags"
    id="m-tech">
</div>

</div>


<div class="modal-section">

<div class="modal-label">
    Key features
</div>

<ul
    class="feature-list"
    id="m-features">
</ul>

</div>

</div>


<div
    class="modal-foot"
    id="m-foot">
</div>

</div>

</div>


<script>

/* =========================
   PROJECT DATA
========================= */

const projects = {

    burnbai:{
        title:'Burn Bai',

        sub:'Island-Ready Fitness Companion · 2024',

        overview:
        'A mobile fitness app designed for people who want to stay fit without gym equipment. It provides three workout intensity levels and focuses on accessible, bodyweight-based routines.',

        tech:[
            'React Native',
            'Firebase',
            'Node.js',
            'Expo',
            'AsyncStorage',
            'Push Notifications'
        ],

        features:[
            'Three workout levels: Easy, Medium, and Intense',
            'Zero equipment — bodyweight focused',
            'Progress tracking and workout history',
            'Customizable reminders and schedules',
            'Calorie counter and goal setting',
            'Video demonstrations for exercises'
        ]
    },


    psa:{
        title:'Philippine Statistics Authority',

        sub:'HR Department Internship · Jan–Apr 2026',

        overview:
        'An internship experience under the Human Resources department, focused on personnel records, recruitment support, data handling, and office workflows.',

        tech:[
            'Microsoft Office',
            'Data Entry',
            'Record Management',
            'HR Information Systems'
        ],

        features:[
            'Personnel record management',
            'Recruitment and onboarding support',
            'Excel-based productivity tools',
            'Professional documentation workflows',
            'Exposure to government compliance practices'
        ]
    },


    baltbep:{
        title:'BaltBep Ticketing System',

        sub:'Ship Ticketing & Reservation Platform · 2025',

        overview:
        'A comprehensive web-based ship ticketing system developed as a fourth-year capstone project, with booking management, passenger records, ticket generation, and an admin dashboard.',

        tech:[
            'Laravel',
            'PHP',
            'MySQL',
            'JavaScript',
            'Bootstrap',
            'HTML/CSS'
        ],

        features:[
            'Seat availability and booking management',
            'Automated ticket generation',
            'Admin dashboard and analytics',
            'Passenger management',
            'Responsive interface',
            'Live project: baltbep.net'
        ],

        link:'https://baltbep.net'
    },


    'gym-php':{

        title:'Gym Management System (PHP)',

        sub:'AI-Powered Fitness Center Platform · Oct 2024–Mar 2025',

        overview:
        'A full-featured gym management system with member registration, attendance, payment processing, workout plans, reporting, and an integrated AI assistant concept.',

        tech:[
            'PHP',
            'MySQL',
            'JavaScript',
            'jQuery',
            'Bootstrap',
            'HTML/CSS',
            'OpenAI API',
            'AJAX'
        ],

        features:[
            'Member registration and profiles',
            'Attendance and payment management',
            'AI assistant for member support',
            'Personalized workout plan concept',
            'Financial reporting dashboard'
        ]
    },


    'gym-csharp':{

        title:'Gym Monitoring System (C#)',

        sub:'Desktop Application · Mar–May 2024',

        overview:
        'A Windows desktop application for gym management built with C# and .NET Framework. It was an early major project focused on desktop UI, database integration, and reporting.',

        tech:[
            'C#',
            '.NET Framework',
            'Windows Forms',
            'SQL Server',
            'Crystal Reports'
        ],

        features:[
            'Windows Forms interface',
            'Local database integration',
            'Crystal Reports',
            'Member photo and ID features',
            'Backup and restore',
            'Offline operation'
        ]
    }

};


/* =========================
   PROJECT MODAL
========================= */

const modal =
    document.getElementById('modal');


function openProject(id){

    const project = projects[id];

    if(!project) return;


    document.getElementById('m-title')
        .textContent = project.title;


    document.getElementById('m-sub')
        .textContent = project.sub;


    document.getElementById('m-overview')
        .textContent = project.overview;


    document.getElementById('m-tech')
        .innerHTML =
        project.tech
        .map(
            item =>
            `<span class="tag">${item}</span>`
        )
        .join('');


    document.getElementById('m-features')
        .innerHTML =
        project.features
        .map(
            item =>
            `<li>${item}</li>`
        )
        .join('');


    document.getElementById('m-foot')
        .innerHTML =
        project.link
        ?
        `<a
            class="btn btn-primary"
            href="${project.link}"
            target="_blank"
            rel="noreferrer">
            Visit live site →
        </a>`
        :
        '';


    modal.classList.add('open');

    document.body.style.overflow='hidden';
}


function closeProject(){

    modal.classList.remove('open');

    document.body.style.overflow='';
}


document
    .querySelectorAll('.project')
    .forEach(project => {

        project.addEventListener(
            'click',
            () => openProject(project.dataset.project)
        );

    });


document
    .getElementById('closeModal')
    .addEventListener(
        'click',
        closeProject
    );


modal.addEventListener(
    'click',
    event => {

        if(event.target === modal){

            closeProject();

        }

    }
);


document.addEventListener(
    'keydown',
    event => {

        if(event.key === 'Escape'){

            closeProject();

        }

    }
);


/* =========================
   DARK / LIGHT THEME
========================= */

const root =
    document.documentElement;

const themeBtn =
    document.getElementById('themeBtn');


function setTheme(theme){

    root.dataset.theme = theme;

    themeBtn.textContent =
        theme === 'dark'
        ? '☀'
        : '☾';


    themeBtn.setAttribute(
        'aria-label',
        `Switch to ${
            theme === 'dark'
            ? 'light'
            : 'dark'
        } theme`
    );


    localStorage.setItem(
        'theme',
        theme
    );
}


const savedTheme =
    localStorage.getItem('theme');


setTheme(
    savedTheme ||
    (
        matchMedia(
            '(prefers-color-scheme:dark)'
        ).matches
        ? 'dark'
        : 'light'
    )
);


themeBtn.addEventListener(
    'click',
    () => {

        setTheme(
            root.dataset.theme === 'dark'
            ? 'light'
            : 'dark'
        );

    }
);


/* =========================
   MOBILE MENU
========================= */

const menuBtn =
    document.getElementById('menuBtn');

const mobile =
    document.getElementById('mobileMenu');


menuBtn.addEventListener(
    'click',
    () => {

        mobile.classList.toggle('open');

    }
);


mobile
    .querySelectorAll('a')
    .forEach(link => {

        link.addEventListener(
            'click',
            () => {

                mobile.classList.remove('open');

            }
        );

    });


/* =========================
   SCROLL REVEAL
========================= */

const observer =
    new IntersectionObserver(

        entries => {

            entries.forEach(entry => {

                if(entry.isIntersecting){

                    entry.target
                        .classList
                        .add('visible');

                }

            });

        },

        {
            threshold:.12
        }

    );


document
    .querySelectorAll('.reveal')
    .forEach(element => {

        observer.observe(element);

    });


/* =========================
   NAV ACTIVE SECTION
========================= */

const sections =
    [
        ...document.querySelectorAll(
            'main section[id]'
        )
    ];


const links =
    [
        ...document.querySelectorAll(
            '.nav-links a'
        )
    ];


window.addEventListener(
    'scroll',
    () => {

        const height =
            document.documentElement
                .scrollHeight
            -
            innerHeight;


        document
            .getElementById('progress')
            .style.width =
            (
                scrollY /
                Math.max(height,1)
                *
                100
            )
            +
            '%';


        let current = '';


        sections.forEach(section => {

            if(
                scrollY >=
                section.offsetTop - 150
            ){

                current =
                    section.id;

            }

        });


        links.forEach(link => {

            link.classList.toggle(
                'active',
                link.getAttribute('href')
                ===
                '#'
                +
                current
            );

        });

    },

    {
        passive:true
    }

);

</script>

</body>
</html>