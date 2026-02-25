<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jake Rodriguez | Portfolio</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>

/* ================= BASE ================= */
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}

:root{
--bg:#05050d;
--card:#0e0e1c;
--blue:#4f8ef7;
--purple:#a78bfa;
--text:#e6e6f5;
--muted:#6868a0;
--border:rgba(79,142,247,0.15);
}

body{
font-family:'DM Sans',sans-serif;
background:var(--bg);
color:var(--text);
}

/* ================= NAVBAR ================= */
nav{
position:fixed;
top:0;
width:100%;
display:flex;
justify-content:space-between;
padding:18px 8%;
background:rgba(5,5,15,0.6);
backdrop-filter:blur(14px);
border-bottom:1px solid var(--border);
z-index:999;
}

nav a{
color:var(--text);
text-decoration:none;
margin-left:25px;
font-size:.9rem;
}

/* ================= BACKGROUND ================= */
.bg-grid{
position:fixed;
inset:0;
background-image:
linear-gradient(rgba(79,142,247,0.05) 1px, transparent 1px),
linear-gradient(90deg, rgba(79,142,247,0.05) 1px, transparent 1px);
background-size:50px 50px;
mask-image:radial-gradient(circle, black 40%, transparent 90%);
z-index:-1;
}

/* ================= HERO ================= */
.hero{
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
flex-direction:column;
text-align:center;
padding:0 20px;
}

.avatar{
width:170px;
height:170px;
border-radius:50%;
padding:6px;
background:conic-gradient(var(--blue),var(--purple));
margin-bottom:25px;
animation:spin 8s linear infinite;
}

.avatar img{
width:100%;
height:100%;
border-radius:50%;
object-fit:cover;
border:4px solid var(--bg);
}

@keyframes spin{to{transform:rotate(360deg)}}

h1{
font-family:'Syne',sans-serif;
font-size:clamp(2.5rem,6vw,4.5rem);
}

.hero p{
color:var(--muted);
margin:15px 0 25px;
}

.btn{
padding:14px 28px;
border-radius:12px;
background:linear-gradient(135deg,var(--blue),var(--purple));
color:white;
text-decoration:none;
font-weight:600;
}

/* ================= SECTION ================= */
section{
padding:100px 8%;
max-width:1200px;
margin:auto;
}

.section-title{
font-family:'Syne',sans-serif;
font-size:2.5rem;
margin-bottom:40px;
}

/* ================= CARDS ================= */
.card{
background:var(--card);
padding:30px;
border-radius:20px;
border:1px solid var(--border);
}

/* ================= SKILLS ================= */
.skills{
display:flex;
flex-wrap:wrap;
gap:10px;
}

.skill{
padding:8px 16px;
border-radius:999px;
border:1px solid var(--border);
font-size:.8rem;
}

/* ================= PROJECTS ================= */
.projects{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
}

/* ================= CONTACT ================= */
.contact a{
display:inline-block;
margin-top:15px;
color:var(--blue);
text-decoration:none;
}

</style>
</head>

<body>

<div class="bg-grid"></div>

<nav>
<strong>Jake</strong>
<div>
<a href="#about">About</a>
<a href="#skills">Skills</a>
<a href="#projects">Projects</a>
<a href="#contact">Contact</a>
</div>
</nav>

<!-- HERO -->
<div class="hero">
<div class="avatar">
<img src="images/developers/jake.jpg">
</div>
<h1>Jake Rodriguez</h1>
<p>Full-Stack Developer • Futuristic UI Builder</p>
<a href="#projects" class="btn">View Projects</a>
</div>

<!-- ABOUT -->
<section id="about">
<h2 class="section-title">About Me</h2>
<div class="card">
<p>
I build modern, scalable, and visually stunning web applications.
Passionate about clean UI, smooth UX, and powerful backend systems.
</p>
</div>
</section>

<!-- SKILLS -->
<section id="skills">
<h2 class="section-title">Skills</h2>
<div class="skills">
<span class="skill">Laravel</span>
<span class="skill">Vue</span>
<span class="skill">Tailwind</span>
<span class="skill">PHP</span>
<span class="skill">MySQL</span>
<span class="skill">REST API</span>
</div>
</section>

<!-- PROJECTS -->
<section id="projects">
<h2 class="section-title">Projects</h2>
<div class="projects">

<div class="card">
<h3>Balt Bep</h3>
<p>Modern food ordering system with admin dashboard.</p>
</div>

<div class="card">
<h3>Portfolio</h3>
<p>Personal futuristic developer portfolio.</p>
</div>

</div>
</section>

<!-- CONTACT -->
<section id="contact">
<h2 class="section-title">Contact</h2>
<div class="card contact">
<p>Let’s build something amazing.</p>
<a href="https://facebook.com" target="_blank">Facebook</a>
</div>
</section>

</body>
</html>