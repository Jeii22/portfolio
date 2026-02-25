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
.card {
            display: flex; flex-direction: row; align-items: center; gap: 60px;
            max-width: 880px; width: 100%;
            background: var(--card); border: 1px solid var(--border);
            border-radius: 28px; padding: 56px 64px;
            position: relative; overflow: hidden;
            animation: fadeUp 1s 0.3s ease both;
            transition: border-color 0.4s, box-shadow 0.4s;
        }
        .profile-card::before {
            content:''; position:absolute; inset:0;
            background:linear-gradient(135deg, rgba(79,142,247,0.04) 0%, transparent 55%);
            pointer-events:none;
        }
        .profile-card:hover {
            border-color: rgba(79,142,247,0.3);
            box-shadow: 0 0 80px rgba(79,142,247,0.1), 0 40px 80px rgba(0,0,0,0.4);
        }
        .card-glow-tl {
            position:absolute; top:0; left:0; width:200px; height:200px;
            background:radial-gradient(circle at 0 0, rgba(79,142,247,0.15) 0%, transparent 70%);
            pointer-events:none;
        }
        .card-glow-br {
            position:absolute; bottom:0; right:0; width:180px; height:180px;
            background:radial-gradient(circle at 100% 100%, rgba(139,77,247,0.10) 0%, transparent 70%);
            pointer-events:none;
        }

        /* ─── Avatar ─── */
        .avatar-wrap { position:relative; flex-shrink:0; width:200px; height:200px; }

        .avatar-halo {
            position:absolute; inset:-28px; border-radius:50%;
            background:radial-gradient(circle, rgba(79,142,247,0.22) 0%, transparent 70%);
            animation:haloPulse 3s ease-in-out infinite; z-index:0;
        }
        @keyframes haloPulse {
            0%,100%{opacity:0.6; transform:scale(1);}
            50%    {opacity:1;   transform:scale(1.06);}
        }

        .avatar-ring {
            position:absolute; inset:0; border-radius:50%;
            background:conic-gradient(var(--blue) 0deg, #a78bfa 130deg, transparent 200deg, transparent 360deg);
            animation:spinRing 6s linear infinite; z-index:1;
        }
        @keyframes spinRing { to{transform:rotate(360deg);} }

        .avatar-inner {
            position:absolute; inset:4px; border-radius:50%;
            background:var(--bg); z-index:2;
        }
        .avatar-img-wrap {
            position:absolute; inset:8px; border-radius:50%;
            overflow:hidden; z-index:3;
            border:2px solid rgba(79,142,247,0.25);
        }
        .avatar-img-wrap img { width:100%; height:100%; object-fit:cover; }
        .avatar-fallback {
            width:100%; height:100%; display:flex; align-items:center; justify-content:center;
            background:linear-gradient(135deg, #1a3a8f, #4f8ef7);
        }
        .avatar-fallback span {
            font-family:'Syne',sans-serif; font-size:2.6rem; font-weight:800; color:#fff;
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

<div class="avatar-img-wrap">
<img src="images/developers/jake.jpg">
</div>

<div class="section contact">
<h3>CONTACT</h3>
<p>+63 930 246 7142</p>
<p>jeikur42@gmail.com</p>
<p>https://github.com/Jeii22</p>
<p>Poblacion, Madridejos Cebu</p>
</div>

<div class="section">
<h3>SKILLS</h3>

<div class="skill">Laravel<div class="bar"><span style="width:69%"></span></div></div>
<div class="skill">PHP<div class="bar"><span style="width:48%"></span></div></div>
<div class="skill">C#<div class="bar"><span style="width:57%"></span></div></div>

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
<div class="role">Developer</div>

<div class="card">
<h3>ABOUT ME</h3>
<p>
I specialize in crafting immersive and scalable web applications with a
strong emphasis on modern UI/UX design and front-end development. While I
don’t code entirely from scratch, I leverage AI tools and prompts to
efficiently build and refine interactive, user-friendly interfaces,
ensuring seamless integration with robust backend architectures.
</p>
</div>

<div class="card">
<h3>EXPERIENCE</h3>

<div class="timeline">

<div class="item">
<div class="year">2025</div>
<h4>BaltBep Ticketing System Developer</h4>
<p>Developed a ship ticketing system with admin dashboard for our Capstone.</p>
<p>4th year Final Output</p>
</div>

<div class="item">
<div class="year">2024</div>
<h4>Gym Monitoring System Developer</h4>
<p>Built a Monitoring System for the Fettle Hut Fitness Gym specifically in PHP.</p>
<p>3rd year Final Output</p>
</div>

<div class="item">
<div class="year">2024</div>
<h4>Gym Monitoring System Programmer</h4>
<p>Created a Monitoring System for the Fettle Hut Fitness Gym using C#</p>
<p>2nd year Final Output</p>
</div>

</div>
</div>

<div class="card">
<h3>EDUCATION</h3>

<div class="timeline">

<div class="item">
<div class="year">2022 – Present</div>
<h4>Bachelor of Information Technology</h4>
<p>Madridejos Community College</p>
</div>

</div>
</div>

</div>

</div>

</body>
</html>