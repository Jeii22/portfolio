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
opacity:0;
transition:opacity 1.2s ease-out;
}

body.loaded .bg {
  opacity:1;
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
opacity:0;
transform:scale(0.95) translateY(20px);
filter:blur(10px);
transition:all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

body.loaded .left {
  opacity:1;
  transform:scale(1) translateY(0);
  filter:blur(0);
}

/* AVATAR WITH GLOWING SPINNING EFFECT */
.avatar-wrapper {
  position: relative;
  width: 170px;
  height: 170px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

.avatar-glow {
  position: absolute;
  inset: 0;
  border-radius: 50%;
  background: conic-gradient(from 0deg, #4f8ef7, #a78bfa, #4f8ef7);
  animation: spin 3s linear infinite;
  filter: blur(15px);
  opacity: 0.6;
}

.avatar-glow::before {
  content: '';
  position: absolute;
  inset: -5px;
  border-radius: 50%;
  background: conic-gradient(from 180deg, #a78bfa, #4f8ef7, #a78bfa);
  animation: spin 4s linear infinite reverse;
  filter: blur(20px);
  opacity: 0.4;
}

.avatar-ring {
  position: absolute;
  inset: 5px;
  border-radius: 50%;
  border: 2px solid transparent;
  background: linear-gradient(135deg, #4f8ef7, #a78bfa) border-box;
  -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
  mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  animation: spin 8s linear infinite;
}

.avatar{
width:150px;
height:150px;
border-radius:50%;
padding:5px;
background: linear-gradient(135deg, #4f8ef7, #a78bfa);
position: relative;
z-index: 10;
opacity:0;
transform:scale(0.8);
transition:all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.3s;
}

body.loaded .avatar {
  opacity:1;
  transform:scale(1);
}

.avatar img{
width:100%;
height:100%;
border-radius:50%;
border:4px solid #05050d;
object-fit:cover;
}

@keyframes spin {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}

.section{
margin-top:40px;
opacity:0;
transform:translateY(30px) scale(0.95);
transition:all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

body.loaded .section:nth-of-type(1) { transition-delay: 0.5s; }
body.loaded .section:nth-of-type(2) { transition-delay: 0.6s; }
body.loaded .section:nth-of-type(3) { transition-delay: 0.7s; }

body.loaded .section {
  opacity:1;
  transform:translateY(0) scale(1);
}

.section h3{
font-family:'Syne',sans-serif;
margin-bottom:20px;
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

/* CIRCULAR SKILLS WITH BATTERY COLORS */
.skills-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.skill-item {
  display: flex;
  align-items: center;
  gap: 15px;
  opacity:0;
  transform:translateX(-20px);
  transition:all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

body.loaded .skill-item:nth-child(1) { transition-delay: 0.7s; }
body.loaded .skill-item:nth-child(2) { transition-delay: 0.8s; }
body.loaded .skill-item:nth-child(3) { transition-delay: 0.9s; }

body.loaded .skill-item {
  opacity:1;
  transform:translateX(0);
}

.skill-circle {
  position: relative;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.skill-circle::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 50%;
  background: conic-gradient(
    var(--skill-color) calc(var(--percentage) * 3.6deg),
    rgba(255,255,255,0.05) calc(var(--percentage) * 3.6deg)
  );
  transition: all 0.8s ease-out;
}

.skill-circle-inner {
  position: absolute;
  inset: 8px;
  background: #0e0e1c;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
}

.skill-percentage {
  font-family: 'Syne', sans-serif;
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--skill-color);
  transition: color 0.5s ease;
}

.skill-info {
  flex: 1;
}

.skill-name {
  font-size: 1rem;
  font-weight: 500;
  color: #fff;
  margin-bottom: 4px;
}

.skill-level-text {
  font-size: 0.75rem;
  color: var(--skill-color);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  font-weight: 500;
}

/* Color coding based on percentage */
.skill-item[data-level="expert"] { --skill-color: #22c55e; }
.skill-item[data-level="advanced"] { --skill-color: #84cc16; }
.skill-item[data-level="intermediate"] { --skill-color: #eab308; }
.skill-item[data-level="beginner"] { --skill-color: #ef4444; }

/* RIGHT PANEL */
.right{
padding:60px;
opacity:0;
transform:scale(0.95) translateY(20px);
filter:blur(10px);
transition:all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.15s;
}

body.loaded .right {
  opacity:1;
  transform:scale(1) translateY(0);
  filter:blur(0);
}

/* HEADER */
.name{
font-family:'Syne',sans-serif;
font-size:3rem;
opacity:0;
transform:translateY(40px) scale(0.9);
transition:all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.4s;
}

body.loaded .name {
  opacity:1;
  transform:translateY(0) scale(1);
}

.role{
color:#4f8ef7;
margin-bottom:30px;
opacity:0;
transform:translateY(20px);
transition:all 0.6s ease-out 0.6s;
}

body.loaded .role {
  opacity:1;
  transform:translateY(0);
}

/* CARD */
.card{
background:#0e0e1c;
padding:30px;
border-radius:20px;
border:1px solid rgba(79,142,247,0.15);
margin-bottom:30px;
opacity:0;
transform:translateY(50px) scale(0.95);
filter:blur(5px);
transition:all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

body.loaded .card:nth-of-type(1) { transition-delay: 0.6s; }
body.loaded .card:nth-of-type(2) { transition-delay: 0.75s; }
body.loaded .card:nth-of-type(3) { transition-delay: 0.9s; }

body.loaded .card {
  opacity:1;
  transform:translateY(0) scale(1);
  filter:blur(0);
}

/* REDESIGNED EXPERIENCE CARDS */
.experience-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.experience-card {
  background: linear-gradient(135deg, rgba(79,142,247,0.08) 0%, rgba(167,139,250,0.05) 100%);
  border: 1px solid rgba(79,142,247,0.2);
  border-radius: 16px;
  padding: 24px;
  position: relative;
  overflow: hidden;
  opacity:0;
  transform:translateY(30px) scale(0.98);
  filter:blur(3px);
  transition:all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

body.loaded .experience-card:nth-child(1) { transition-delay: 0.7s; }
body.loaded .experience-card:nth-child(2) { transition-delay: 0.85s; }
body.loaded .experience-card:nth-child(3) { transition-delay: 1.0s; }

body.loaded .experience-card {
  opacity:1;
  transform:translateY(0) scale(1);
  filter:blur(0);
}

.experience-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: linear-gradient(180deg, #4f8ef7 0%, #a78bfa 100%);
  opacity: 0.6;
  transition: width 0.3s ease, opacity 0.3s ease;
}

.experience-card:hover::before {
  width: 6px;
  opacity: 1;
}

.experience-card:hover {
  transform: translateY(-5px);
  border-color: rgba(79,142,247,0.4);
  box-shadow: 0 20px 40px rgba(79,142,247,0.15), 0 0 0 1px rgba(79,142,247,0.1);
}

.experience-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 12px;
  flex-wrap: wrap;
  gap: 10px;
}

.experience-year {
  background: rgba(79,142,247,0.15);
  color: #4f8ef7;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 500;
  border: 1px solid rgba(79,142,247,0.3);
  opacity:0;
  transform:scale(0.8);
  transition:all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

body.loaded .experience-card:nth-child(1) .experience-year { transition-delay: 0.9s; }
body.loaded .experience-card:nth-child(2) .experience-year { transition-delay: 1.05s; }
body.loaded .experience-card:nth-child(3) .experience-year { transition-delay: 1.2s; }

body.loaded .experience-year {
  opacity:1;
  transform:scale(1);
}

.experience-type {
  background: rgba(167,139,250,0.15);
  color: #a78bfa;
  padding: 4px 12px;
  border-radius: 12px;
  font-size: 0.75rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  border: 1px solid rgba(167,139,250,0.2);
}

.experience-title {
  font-family: 'Syne', sans-serif;
  font-size: 1.25rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 8px;
  line-height: 1.3;
  opacity:0;
  transform:translateY(10px);
  transition:all 0.5s ease-out;
}

body.loaded .experience-card:nth-child(1) .experience-title { transition-delay: 0.95s; }
body.loaded .experience-card:nth-child(2) .experience-title { transition-delay: 1.1s; }
body.loaded .experience-card:nth-child(3) .experience-title { transition-delay: 1.25s; }

body.loaded .experience-title {
  opacity:1;
  transform:translateY(0);
}

.experience-desc {
  color: #aaa;
  font-size: 0.95rem;
  line-height: 1.6;
  margin-bottom: 12px;
  opacity:0;
  transform:translateY(10px);
  transition:all 0.5s ease-out;
}

body.loaded .experience-card:nth-child(1) .experience-desc { transition-delay: 1.0s; }
body.loaded .experience-card:nth-child(2) .experience-desc { transition-delay: 1.15s; }
body.loaded .experience-card:nth-child(3) .experience-desc { transition-delay: 1.3s; }

body.loaded .experience-desc {
  opacity:1;
  transform:translateY(0);
}

.experience-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  color: #4f8ef7;
  text-decoration: none;
  font-size: 0.9rem;
  font-weight: 500;
  transition: all 0.3s ease;
  opacity:0;
  transform:translateX(-10px);
}

body.loaded .experience-card:nth-child(1) .experience-link { transition-delay: 1.05s; }

body.loaded .experience-link {
  opacity:1;
  transform:translateX(0);
}

.experience-link:hover {
  color: #a78bfa;
  transform: translateX(5px);
}

.experience-link svg {
  width: 16px;
  height: 16px;
  transition: transform 0.3s ease;
}

.experience-link:hover svg {
  transform: translateX(3px);
}

/* ENHANCED EDUCATION CARDS */
.education-container {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.education-card {
  background: linear-gradient(135deg, rgba(79,142,247,0.06) 0%, rgba(167,139,250,0.04) 100%);
  border: 1px solid rgba(79,142,247,0.18);
  border-radius: 16px;
  padding: 22px;
  position: relative;
  overflow: hidden;
  opacity:0;
  transform:translateY(30px) scale(0.98);
  filter:blur(3px);
  transition:all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

body.loaded .education-card:nth-child(1) { transition-delay: 0.9s; }
body.loaded .education-card:nth-child(2) { transition-delay: 1.05s; }
body.loaded .education-card:nth-child(3) { transition-delay: 1.2s; }

body.loaded .education-card {
  opacity:1;
  transform:translateY(0) scale(1);
  filter:blur(0);
}

.education-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: linear-gradient(180deg, #a78bfa 0%, #4f8ef7 100%);
  opacity: 0.5;
  transition: width 0.3s ease, opacity 0.3s ease;
}

.education-card:hover::before {
  width: 6px;
  opacity: 0.8;
}

.education-card:hover {
  transform: translateY(-4px);
  border-color: rgba(79,142,247,0.35);
  box-shadow: 0 15px 35px rgba(79,142,247,0.12), 0 0 0 1px rgba(79,142,247,0.08);
}

.education-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 10px;
  flex-wrap: wrap;
  gap: 8px;
}

.education-year {
  background: rgba(79,142,247,0.12);
  color: #4f8ef7;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: 500;
  border: 1px solid rgba(79,142,247,0.25);
  opacity:0;
  transform:scale(0.8);
  transition:all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

body.loaded .education-card:nth-child(1) .education-year { transition-delay: 1.1s; }
body.loaded .education-card:nth-child(2) .education-year { transition-delay: 1.25s; }
body.loaded .education-card:nth-child(3) .education-year { transition-delay: 1.4s; }

body.loaded .education-year {
  opacity:1;
  transform:scale(1);
}

.education-level {
  background: rgba(167,139,250,0.12);
  color: #a78bfa;
  padding: 3px 10px;
  border-radius: 10px;
  font-size: 0.7rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  border: 1px solid rgba(167,139,250,0.18);
}

.education-title {
  font-family: 'Syne', sans-serif;
  font-size: 1.15rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 6px;
  line-height: 1.3;
  opacity:0;
  transform:translateY(10px);
  transition:all 0.5s ease-out;
}

body.loaded .education-card:nth-child(1) .education-title { transition-delay: 1.15s; }
body.loaded .education-card:nth-child(2) .education-title { transition-delay: 1.3s; }
body.loaded .education-card:nth-child(3) .education-title { transition-delay: 1.45s; }

body.loaded .education-title {
  opacity:1;
  transform:translateY(0);
}

.education-school {
  color: #888;
  font-size: 0.9rem;
  display: flex;
  align-items: center;
  gap: 6px;
  opacity:0;
  transform:translateY(8px);
  transition:all 0.5s ease-out;
}

body.loaded .education-card:nth-child(1) .education-school { transition-delay: 1.2s; }
body.loaded .education-card:nth-child(2) .education-school { transition-delay: 1.35s; }
body.loaded .education-card:nth-child(3) .education-school { transition-delay: 1.5s; }

body.loaded .education-school {
  opacity:1;
  transform:translateY(0);
}

.education-school::before {
  content: '';
  display: inline-block;
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: #4f8ef7;
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
.experience-header, .education-header {
  flex-direction: column;
  gap: 8px;
}
.skill-item {
  flex-direction: column;
  text-align: center;
  gap: 10px;
}
}

/* Hover effects for other elements */
.contact p:hover {
  color: #4f8ef7;
  transform: translateX(5px);
  transition: all 0.3s ease;
}

.skill-item:hover .skill-circle::before {
  filter: brightness(1.2);
  transform: scale(1.05);
}

</style>
</head>

<body>

<div class="bg"></div>

<div class="container">

<!-- LEFT -->
<div class="left">

<div class="avatar-wrapper">
  <div class="avatar-glow"></div>
  <div class="avatar-ring"></div>
  <div class="avatar">
    <img src="images/developers/jake.jpg">
  </div>
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

<div class="skills-container">
  <div class="skill-item" data-level="advanced" style="--percentage: 69;">
    <div class="skill-circle">
      <div class="skill-circle-inner">
        <span class="skill-percentage">69%</span>
      </div>
    </div>
    <div class="skill-info">
      <div class="skill-name">Laravel</div>
      <div class="skill-level-text">Advanced</div>
    </div>
  </div>

  <div class="skill-item" data-level="intermediate" style="--percentage: 48;">
    <div class="skill-circle">
      <div class="skill-circle-inner">
        <span class="skill-percentage">48%</span>
      </div>
    </div>
    <div class="skill-info">
      <div class="skill-name">PHP</div>
      <div class="skill-level-text">Intermediate</div>
    </div>
  </div>

  <div class="skill-item" data-level="intermediate" style="--percentage: 57;">
    <div class="skill-circle">
      <div class="skill-circle-inner">
        <span class="skill-percentage">57%</span>
      </div>
    </div>
    <div class="skill-info">
      <div class="skill-name">C#</div>
      <div class="skill-level-text">Intermediate</div>
    </div>
  </div>
</div>

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

<div class="experience-container">

<div class="experience-card">
  <div class="experience-header">
    <span class="experience-year">2025</span>
    <span class="experience-type">Capstone</span>
  </div>
  <h4 class="experience-title">BaltBep Ticketing System Developer</h4>
  <p class="experience-desc">Developed a ship ticketing system with admin dashboard for our Capstone project.</p>
  <a href="https://baltbep.net" target="_blank" rel="noopener noreferrer" class="experience-link">
    Visit baltbep.net
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
      <polyline points="15 3 21 3 21 9"></polyline>
      <line x1="10" y1="14" x2="21" y2="3"></line>
    </svg>
  </a>
</div>

<div class="experience-card">
  <div class="experience-header">
    <span class="experience-year">2024</span>
    <span class="experience-type">3rd Year Final Output</span>
  </div>
  <h4 class="experience-title">Gym Monitoring System Developer</h4>
  <p class="experience-desc">Built a comprehensive Monitoring System for Fettle Hut Fitness Gym using PHP.</p>
</div>

<div class="experience-card">
  <div class="experience-header">
    <span class="experience-year">2024</span>
    <span class="experience-type">2nd Year Final Output</span>
  </div>
  <h4 class="experience-title">Gym Monitoring System Programmer</h4>
  <p class="experience-desc">Created a Monitoring System for Fettle Hut Fitness Gym using C# and .NET framework.</p>
</div>

</div>
</div>

<div class="card">
<h3>EDUCATION</h3>

<div class="education-container">

<div class="education-card">
  <div class="education-header">
    <span class="education-year">2022 – Present</span>
    <span class="education-level">College</span>
  </div>
  <h4 class="education-title">Bachelor of Science in Information Technology</h4>
  <p class="education-school">Madridejos Community College</p>
</div>

<div class="education-card">
  <div class="education-header">
    <span class="education-year">2020 – 2022</span>
    <span class="education-level">Senior High</span>
  </div>
  <h4 class="education-title">Humanities and Social Sciences</h4>
  <p class="education-school">Madridejos National High School</p>
</div>

<div class="education-card">
  <div class="education-header">
    <span class="education-year">2016 – 2020</span>
    <span class="education-level">Junior High</span>
  </div>
  <h4 class="education-title">Junior High School</h4>
  <p class="education-school">Madridejos National High School</p>
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