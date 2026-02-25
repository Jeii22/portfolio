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
.bg{
position:fixed;
inset:0;
background-image:
linear-gradient(rgba(79,142,247,0.05) 1px, transparent 1px),
linear-gradient(90deg, rgba(79,142,247,0.05) 1px, transparent 1px);
background-size:50px 50px;
z-index:-1;
}

/* LAYOUT */
.container{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:320px 1fr;
min-height:100vh;
}

/* LEFT PANEL */
.left{
background:#0e0e1c;
padding:40px 30px;
border-right:1px solid rgba(79,142,247,0.15);
}

/* AVATAR */
.avatar{
width:150px;
height:150px;
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

.section{
margin-top:40px;
}

.section h3{
font-family:'Syne',sans-serif;
margin-bottom:15px;
color:#4f8ef7;
font-size:1rem;
letter-spacing:.1em;
}

/* CONTACT */
.contact p{
font-size:.9rem;
margin-bottom:8px;
color:#aaa;
}

/* SKILLS */
.skill{
margin-bottom:12px;
}

.bar{
height:6px;
background:#111;
border-radius:10px;
overflow:hidden;
margin-top:5px;
}

.bar span{
display:block;
height:100%;
background:linear-gradient(90deg,#4f8ef7,#a78bfa);
}

/* RIGHT PANEL */
.right{
padding:60px;
}

/* HEADER */
.name{
font-family:'Syne',sans-serif;
font-size:3rem;
}

.role{
color:#4f8ef7;
margin-bottom:30px;
}

/* CARD */
.card{
background:#0e0e1c;
padding:30px;
border-radius:20px;
border:1px solid rgba(79,142,247,0.15);
margin-bottom:30px;
}

/* TIMELINE */
.timeline{
border-left:2px solid rgba(79,142,247,0.3);
padding-left:20px;
}

.item{
margin-bottom:25px;
position:relative;
}

.item::before{
content:'';
position:absolute;
left:-28px;
top:5px;
width:12px;
height:12px;
background:#4f8ef7;
border-radius:50%;
}

.year{
color:#4f8ef7;
font-size:.85rem;
margin-bottom:5px;
}

@media(max-width:900px){
.container{
grid-template-columns:1fr;
}
.left{
border-right:none;
border-bottom:1px solid rgba(79,142,247,0.15);
text-align:center;
}
.right{
padding:40px 25px;
}
}

</style>
</head>

<body>

<div class="bg"></div>

<div class="container">

<!-- LEFT -->
<div class="left">

<div class="avatar">
<img src="images/developers/jake.jpg">
</div>

<div class="section contact">
<h3>CONTACT</h3>
<p>+63 912 345 6789</p>
<p>jake@email.com</p>
<p>github.com/jeii22</p>
<p>Quezon City</p>
</div>

<div class="section">
<h3>SKILLS</h3>

<div class="skill">Laravel<div class="bar"><span style="width:90%"></span></div></div>
<div class="skill">Vue JS<div class="bar"><span style="width:80%"></span></div></div>
<div class="skill">PHP<div class="bar"><span style="width:85%"></span></div></div>

</div>

<div class="section">
<h3>LANGUAGES</h3>
<p>English</p>
<p>Filipino</p>
</div>

</div>

<!-- RIGHT -->
<div class="right">

<div class="name">Jake Rodriguez</div>
<div class="role">Full-Stack Developer</div>

<div class="card">
<h3>ABOUT ME</h3>
<p>
Full-stack developer focused on building immersive and scalable web applications
with modern UI/UX and robust backend architecture.
</p>
</div>

<div class="card">
<h3>EXPERIENCE</h3>

<div class="timeline">

<div class="item">
<div class="year">2024 – Present</div>
<h4>Balt Bep System Developer</h4>
<p>Developed a food ordering system with admin dashboard.</p>
</div>

<div class="item">
<div class="year">2023 – 2024</div>
<h4>Freelance Web Developer</h4>
<p>Created responsive and modern client websites.</p>
</div>

</div>
</div>

<div class="card">
<h3>EDUCATION</h3>

<div class="timeline">

<div class="item">
<div class="year">2022 – Present</div>
<h4>Bachelor of Information Technology</h4>
<p>Your University</p>
</div>

</div>
</div>

</div>

</div>

</body>
</html>