<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jake Rodriguez - Portfolio Kunohay</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">

<style>
/* === KEEPING YOUR ORIGINAL DESIGN === */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}

:root{
--bg:#05050d;
--card:#0e0e1c;
--border:rgba(79,142,247,0.15);
--blue:#4f8ef7;
--blue-dim:rgba(79,142,247,0.25);
--text:#e6e6f5;
--muted:#6868a0;
--white:#ffffff;
}

body{
min-height:100vh;
background:var(--bg);
font-family:'DM Sans',sans-serif;
color:var(--text);
overflow-x:hidden;
display:flex;
flex-direction:column;
align-items:center;
justify-content:center;
padding:60px 24px 80px;
}

/* === AVATAR === */
.avatar-wrap{position:relative;width:200px;height:200px;margin:auto;}

.avatar-img-wrap{
position:absolute;
inset:8px;
border-radius:50%;
overflow:hidden;
border:2px solid rgba(79,142,247,0.25);
}

.avatar-img-wrap img{
width:100%;
height:100%;
object-fit:cover;
}

/* === SIMPLE CENTER LAYOUT === */
.section-title{
font-family:'Syne',sans-serif;
font-size:clamp(2.8rem,7vw,5.5rem);
font-weight:800;
text-align:center;
margin-bottom:20px;
}

.profile-card{
max-width:880px;
width:100%;
background:var(--card);
border:1px solid var(--border);
border-radius:28px;
padding:56px 64px;
text-align:center;
}

.dev-name{
font-family:'Syne',sans-serif;
font-size:2.5rem;
font-weight:800;
margin-top:20px;
}

.dev-title{
color:var(--blue);
margin-bottom:20px;
}

.footer{
margin-top:40px;
font-size:0.85rem;
color:#666;
}
</style>
</head>

<body>

<h1 class="section-title">Meet the <span style="color:#4f8ef7;">Developer</span></h1>

<div class="profile-card">

<div class="avatar-wrap">
  <div class="avatar-img-wrap">
    <img src="images/developers/jake.jpg" alt="Jake Rodriguez">
  </div>
</div>

<h2 class="dev-name">Jake Rodriguez</h2>
<p class="dev-title">Full-Stack Developer</p>

<p>
Full-stack developer crafting seamless digital experiences — bridging elegant
front-end design with robust back-end architecture to bring ideas to life.
</p>

</div>

<div class="footer">
© <span id="year"></span> <strong>Balt Bep</strong>. All rights reserved.
</div>

<script>
document.getElementById("year").textContent = new Date().getFullYear();
</script>

</body>
</html>