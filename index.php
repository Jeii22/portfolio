<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jake Rodriguez - Portfolio</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*{box-sizing:border-box;margin:0;padding:0}

:root{
--bg:#05050d;
--card:#0e0e1c;
--border:rgba(79,142,247,0.15);
--blue:#4f8ef7;
--purple:#a78bfa;
--text:#e6e6f5;
--muted:#6868a0;
--white:#fff;
}

body{
background:var(--bg);
color:var(--text);
font-family:'DM Sans',sans-serif;
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
overflow:hidden;
}

/* === BACKGROUND === */
.bg-mesh{
position:fixed;inset:0;
background:
radial-gradient(ellipse 80% 60% at 15% 20%, rgba(79,142,247,0.12), transparent 60%),
radial-gradient(ellipse 60% 50% at 85% 80%, rgba(99,77,247,0.10), transparent 60%);
z-index:0;
}

.bg-grid{
position:fixed;inset:0;
background-image:
linear-gradient(rgba(79,142,247,0.05) 1px, transparent 1px),
linear-gradient(90deg, rgba(79,142,247,0.05) 1px, transparent 1px);
background-size:48px 48px;
mask-image:radial-gradient(circle, black 40%, transparent 90%);
z-index:0;
}

/* === CARD === */
.profile-card{
position:relative;
z-index:1;
display:flex;
gap:60px;
align-items:center;
background:var(--card);
border:1px solid var(--border);
padding:60px;
border-radius:28px;
max-width:900px;
width:90%;
backdrop-filter:blur(20px);
transition:.4s;
}

.profile-card:hover{
box-shadow:0 0 80px rgba(79,142,247,0.15);
}

/* === AVATAR === */
.avatar-wrap{
position:relative;
width:200px;
height:200px;
flex-shrink:0;
}

.avatar-halo{
position:absolute;
inset:-30px;
border-radius:50%;
background:radial-gradient(circle, rgba(79,142,247,.25), transparent 70%);
animation:pulse 3s infinite;
}

@keyframes pulse{
0%,100%{transform:scale(1);opacity:.6}
50%{transform:scale(1.08);opacity:1}
}

.avatar-ring{
position:absolute;
inset:0;
border-radius:50%;
background:conic-gradient(var(--blue),var(--purple),transparent 70%);
animation:spin 6s linear infinite;
}

@keyframes spin{
to{transform:rotate(360deg)}
}

.avatar-img{
position:absolute;
inset:8px;
border-radius:50%;
overflow:hidden;
border:2px solid rgba(79,142,247,.3);
}

.avatar-img img{
width:100%;
height:100%;
object-fit:cover;
}

/* === TEXT === */
.dev-name{
font-family:'Syne',sans-serif;
font-size:2.7rem;
font-weight:800;
}

.dev-title{
color:var(--blue);
margin:10px 0 20px;
}

.dev-bio{
color:var(--muted);
line-height:1.7;
margin-bottom:25px;
}

/* === SKILLS === */
.skills{
display:flex;
flex-wrap:wrap;
gap:10px;
}

.skill{
padding:6px 14px;
border-radius:999px;
border:1px solid rgba(255,255,255,.08);
font-size:.75rem;
color:#aaa;
transition:.2s;
}

.skill:hover{
border-color:var(--blue);
color:var(--blue);
}

/* === PARTICLES === */
.particles div{
position:absolute;
width:2px;height:2px;
background:var(--blue);
opacity:.4;
animation:float 8s infinite;
}

@keyframes float{
from{transform:translateY(0)}
to{transform:translateY(-100vh)}
}

/* === RESPONSIVE === */
@media(max-width:768px){
.profile-card{flex-direction:column;text-align:center}
}
</style>
</head>

<body>

<div class="bg-mesh"></div>
<div class="bg-grid"></div>

<div class="profile-card">

<div class="avatar-wrap">
<div class="avatar-halo"></div>
<div class="avatar-ring"></div>
<div class="avatar-img">
<img src="images/developers/jake.jpg" alt="Jake Rodriguez">
</div>
</div>

<div>
<h2 class="dev-name">Jake Rodriguez</h2>
<p class="dev-title">Full-Stack Developer</p>

<p class="dev-bio">
Full-stack developer crafting seamless digital experiences — bridging elegant
front-end design with robust back-end architecture to bring ideas to life.
</p>

<div class="skills">
<span class="skill">Laravel</span>
<span class="skill">Vue</span>
<span class="skill">Tailwind</span>
<span class="skill">PHP</span>
<span class="skill">MySQL</span>
<span class="skill">REST API</span>
</div>

</div>
</div>

<div class="particles" id="particles"></div>

<script>
const container=document.getElementById('particles');
for(let i=0;i<35;i++){
const p=document.createElement('div');
p.style.left=Math.random()*100+'%';
p.style.top=Math.random()*100+'%';
p.style.animationDuration=6+Math.random()*6+'s';
container.appendChild(p);
}
</script>

</body>
</html>