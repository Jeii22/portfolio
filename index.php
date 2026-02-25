<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jake Rodriguez | CV</title>

<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<!-- FAVICON - Gradient J Monogram -->
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%234f8ef7'/%3E%3Cstop offset='100%25' style='stop-color:%23a78bfa'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='100' height='100' rx='20' fill='%230e0e1c'/%3E%3Ctext x='50' y='75' font-family='Arial Black, sans-serif' font-size='70' font-weight='900' text-anchor='middle' fill='url(%23g)'%3EJ%3C/text%3E%3C/svg%3E">

<style>

*{margin:0;padding:0;box-sizing:border-box}

body{
font-family:'DM Sans',sans-serif;
background:#05050d;
color:#e6e6f5;
overflow-x:hidden;
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

/* OPENING TRANSITIONS */

/* Initial states - hidden */
.left {
  opacity: 0;
  transform: translateX(-50px);
}

.right {
  opacity: 0;
  transform: translateX(50px);
}

.avatar {
  opacity: 0;
  transform: scale(0.5);
}

.name {
  opacity: 0;
  transform: translateY(-30px);
}

.role {
  opacity: 0;
  transform: translateY(-20px);
}

.card {
  opacity: 0;
  transform: translateY(40px);
}

.section {
  opacity: 0;
  transform: translateY(30px);
}

.item {
  opacity: 0;
  transform: translateX(-20px);
}

/* Loaded states - visible with transitions */
body.loaded .left {
  opacity: 1;
  transform: translateX(0);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

body.loaded .right {
  opacity: 1;
  transform: translateX(0);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.1s;
}

body.loaded .avatar {
  opacity: 1;
  transform: scale(1);
  transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.3s;
}

body.loaded .name {
  opacity: 1;
  transform: translateY(0);
  transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.4s;
}

body.loaded .role {
  opacity: 1;
  transform: translateY(0);
  transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1) 0.5s;
}

body.loaded .section {
  opacity: 1;
  transform: translateY(0);
  transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}

body.loaded .section:nth-of-type(1) { transition-delay: 0.6s; }
body.loaded .section:nth-of-type(2) { transition-delay: 0.7s; }
body.loaded .section:nth-of-type(3) { transition-delay: 0.8s; }

body.loaded .card {
  opacity: 1;
  transform: translateY(0);
  transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

body.loaded .card:nth-of-type(1) { transition-delay: 0.6s; }
body.loaded .card:nth-of-type(2) { transition-delay: 0.75s; }
body.loaded .card:nth-of-type(3) { transition-delay: 0.9s; }

body.loaded .item {
  opacity: 1;
  transform: translateX(0);
  transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}

body.loaded .timeline .item:nth-child(1) { transition-delay: 0.8s; }
body.loaded .timeline .item:nth-child(2) { transition-delay: 0.9s; }
body.loaded .timeline .item:nth-child(3) { transition-delay: 1.0s; }

/* Hover effects */
.card:hover {
  border-color: rgba(79,142,247,0.4);
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(79,142,247,0.1);
  transition: all 0.3s ease;
}

.skill:hover .bar span {
  filter: brightness(1.2);
  transition: filter 0.3s ease;
}

.contact p:hover {
  color: #4f8ef7;
  transform: translateX(5px);
  transition: all 0.3s ease;
}

.item:hover::before {
  transform: scale(1.3);
  box-shadow: 0 0 20px rgba(79,142,247,0.6);
  transition: all 0.3s ease;
}

a[href="https://baltbep.net"] {
  display: inline-block;
  transition: all 0.3s ease;
}

a[href="https://baltbep.net"]:hover {
  transform: scale(1.05);
  text-shadow: 0 0 10px rgba(0,255,0,0.5);
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
<p>+63 930 246 7142</p>
<p>jeikur42@gmail.com</p>
<p>github.com/Jeii22</p>
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
don't code entirely from scratch, I leverage AI tools and prompts to
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
  <a href="https://baltbep.net" target="_blank" rel="noopener noreferrer" style="color: lime;">baltbep.net</a>
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

<script>
// Trigger animations when page loads
window.addEventListener('load', function() {
  document.body.classList.add('loaded');
});
</script>

</body>
</html>