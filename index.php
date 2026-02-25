<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jake Rodriguez | CV</title>

<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
font-family:'DM Sans',sans-serif;
background:#05050d;
color:#e6e6f5;
}

/* GRID BACKGROUND */
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

/* LAYOUT */
.container{
max-width:1000px;
margin:auto;
padding:80px 20px;
}

/* HEADER */
.header{
text-align:center;
margin-bottom:60px;
}

.avatar{
width:140px;
height:140px;
margin:auto;
border-radius:50%;
padding:5px;
background:conic-gradient(#4f8ef7,#a78bfa);
animation:spin 8s linear infinite;
}

.avatar img{
width:100%;
height:100%;
border-radius:50%;
border:4px solid #05050d;
object-fit:cover;
}

@keyframes spin{to{transform:rotate(360deg)}}

h1{
font-family:'Syne',sans-serif;
font-size:3rem;
margin-top:20px;
}

.role{
color:#4f8ef7;
margin-top:5px;
}

/* CARD */
.card{
background:#0e0e1c;
border:1px solid rgba(79,142,247,0.15);
padding:30px;
border-radius:20px;
margin-bottom:30px;
}

/* TITLES */
.section-title{
font-family:'Syne',sans-serif;
margin-bottom:20px;
font-size:1.6rem;
}

/* TIMELINE */
.item{
margin-bottom:15px;
}

.item h3{
font-size:1.1rem;
}

.item span{
color:#6868a0;
font-size:.85rem;
}

/* SKILLS */
.skills{
display:flex;
flex-wrap:wrap;
gap:10px;
}

.skill{
border:1px solid rgba(255,255,255,0.1);
padding:6px 14px;
border-radius:999px;
font-size:.75rem;
}

/* CONTACT */
.contact a{
display:block;
color:#4f8ef7;
text-decoration:none;
margin-top:6px;
}
</style>
</head>

<body>

<div class="bg-grid"></div>

<div class="container">

<!-- HEADER -->
<div class="header">
<div class="avatar">
<img src="images/developers/jake.jpg">
</div>
<h1>Jake Rodriguez</h1>
<p class="role">Full-Stack Developer</p>
</div>

<!-- PROFILE -->
<div class="card">
<h2 class="section-title">Profile</h2>
<p>
Passionate full-stack developer specializing in modern UI/UX and scalable backend systems.
Focused on building high-performance and visually immersive web applications.
</p>
</div>

<!-- EDUCATION -->
<div class="card">
<h2 class="section-title">Education</h2>

<div class="item">
<h3>Bachelor of Information Technology</h3>
<span>2022 – Present</span>
<p>University Name</p>
</div>

</div>

<!-- EXPERIENCE -->
<div class="card">
<h2 class="section-title">Experience</h2>

<div class="item">
<h3>Full-Stack Developer – Balt Bep</h3>
<span>2024 – Present</span>
<p>Developed ordering system with admin dashboard.</p>
</div>

</div>

<!-- SKILLS -->
<div class="card">
<h2 class="section-title">Skills</h2>
<div class="skills">
<span class="skill">Laravel</span>
<span class="skill">Vue</span>
<span class="skill">Tailwind</span>
<span class="skill">PHP</span>
<span class="skill">MySQL</span>
<span class="skill">REST API</span>
</div>
</div>

<!-- PROJECTS -->
<div class="card">
<h2 class="section-title">Projects</h2>

<div class="item">
<h3>Balt Bep Ordering System</h3>
<p>Modern food ordering platform with role-based dashboard.</p>
</div>

</div>

<!-- CONTACT -->
<div class="card contact">
<h2 class="section-title">Contact</h2>
<a href="mailto:your@email.com">your@email.com</a>
<a href="https://facebook.com" target="_blank">Facebook</a>
<a href="#">GitHub</a>
</div>

</div>

</body>
</html>