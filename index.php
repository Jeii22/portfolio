<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jake Rodriguez | Creative Developer Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">

<!-- FAVICON - Gradient J Monogram -->
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon.png">

<style>

*{margin:0;padding:0;box-sizing:border-box}

html {
  scroll-behavior: smooth;
}

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

/* NAVIGATION */
.nav {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: rgba(5,5,13,0.8);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(79,142,247,0.1);
  opacity: 0;
  transform: translateY(-20px);
  transition: all 0.5s ease;
}

body.loaded .nav {
  opacity: 1;
  transform: translateY(0);
}

.nav-logo {
  font-family: 'Syne', sans-serif;
  font-size: 1.5rem;
  font-weight: 800;
  background: linear-gradient(135deg, #4f8ef7, #a78bfa);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.nav-links {
  display: flex;
  gap: 30px;
  list-style: none;
}

.nav-links a {
  color: #aaa;
  text-decoration: none;
  font-size: 0.9rem;
  font-weight: 500;
  transition: color 0.3s ease;
  position: relative;
}

.nav-links a:hover {
  color: #4f8ef7;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, #4f8ef7, #a78bfa);
  transition: width 0.3s ease;
}

.nav-links a:hover::after {
  width: 100%;
}

/* HERO SECTION */
.hero {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  padding: 100px 40px;
  overflow: hidden;
  padding: 100px 20px 60px;
}

.hero-content {
  text-align: center;
  max-width: 900px;
  z-index: 10;
  width: 100%;
}

.hero-badge {
  display: inline-block;
  background: rgba(79,142,247,0.15);
  border: 1px solid rgba(79,142,247,0.3);
  color: #4f8ef7;
  padding: 8px 20px;
  border-radius: 30px;
  font-size: 0.85rem;
  font-weight: 500;
  margin-bottom: 30px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s ease;
}

body.loaded .hero-badge {
  opacity: 1;
  transform: translateY(0);
  transition-delay: 0.2s;
}

.hero-title {
  font-family: 'Syne', sans-serif;
  font-size: clamp(3rem, 8vw, 6rem);
  font-weight: 800;
  line-height: 1.1;
  margin-bottom: 20px;
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.8s ease;
}

body.loaded .hero-title {
  opacity: 1;
  transform: translateY(0);
  transition-delay: 0.4s;
}

.hero-title span {
  background: linear-gradient(135deg, #4f8ef7, #a78bfa);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-subtitle {
  font-size: 1.25rem;
  color: #888;
  margin-bottom: 40px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s ease;
}

body.loaded .hero-subtitle {
  opacity: 1;
  transform: translateY(0);
  transition-delay: 0.6s;
}

.hero-cta {
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s ease;
  flex-direction: column;
  width: 100%;
}

body.loaded .hero-cta {
  opacity: 1;
  transform: translateY(0);
  transition-delay: 0.8s;
}

.btn {
  padding: 15px 35px;
  border-radius: 30px;
  font-size: 0.95rem;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  width: 100%;
  justify-content: center;
}

.btn-primary {
  background: linear-gradient(135deg, #4f8ef7, #a78bfa);
  color: #fff;
  border: none;
}

.btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(79,142,247,0.4);
}

.btn-secondary {
  background: transparent;
  color: #fff;
  border: 2px solid rgba(79,142,247,0.5);
}

.btn-secondary:hover {
  border-color: #4f8ef7;
  background: rgba(79,142,247,0.1);
}

/* FLOATING ELEMENTS */
.floating-elements {
  position: absolute;
  inset: 0;
  pointer-events: none;
  overflow: hidden;
}

.float-item {
  position: absolute;
  background: linear-gradient(135deg, rgba(79,142,247,0.1), rgba(167,139,250,0.1));
  border: 1px solid rgba(79,142,247,0.2);
  border-radius: 20px;
  padding: 20px;
  font-family: 'Syne', sans-serif;
  font-size: 0.9rem;
  color: #4f8ef7;
  animation: float 6s ease-in-out infinite;
}

.float-item:nth-child(1) {
  top: 20%;
  left: 10%;
  animation-delay: 0s;
}

.float-item:nth-child(2) {
  top: 60%;
  right: 10%;
  animation-delay: 2s;
}

.float-item:nth-child(3) {
  bottom: 20%;
  left: 15%;
  animation-delay: 4s;
}

@keyframes float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(2deg); }
}

/* SECTION STYLES */
.section {
  padding: 100px 40px;
  max-width: 1200px;
  margin: 0 auto;
}

.section-header {
  text-align: center;
  margin-bottom: 60px;
}

.section-label {
  display: inline-block;
  background: rgba(79,142,247,0.15);
  color: #4f8ef7;
  padding: 6px 16px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 15px;
}

.section-title {
  font-family: 'Syne', sans-serif;
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 700;
  margin-bottom: 15px;
}

.section-desc {
  color: #888;
  font-size: 1.1rem;
  max-width: 600px;
  margin: 0 auto;
}

/* ABOUT SECTION */
.about-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.about-image {
  position: relative;
}

.about-image-wrapper {
  position: relative;
  width: 100%;
  max-width: 400px;
  margin: 0 auto;
}

.about-image-glow {
  position: absolute;
  inset: -20px;
  background: conic-gradient(from 0deg, #4f8ef7, #a78bfa, #4f8ef7);
  border-radius: 50%;
  animation: spin 8s linear infinite;
  filter: blur(30px);
  opacity: 0.4;
}

.about-img {
  width: 100%;
  border-radius: 20px;
  position: relative;
  z-index: 10;
  border: 4px solid rgba(79,142,247,0.3);
}

.about-content h3 {
  font-family: 'Syne', sans-serif;
  font-size: 2rem;
  margin-bottom: 20px;
  background: linear-gradient(135deg, #fff, #a78bfa);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.about-content p {
  color: #aaa;
  line-height: 1.8;
  margin-bottom: 20px;
  font-size: 1.05rem;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 30px;
}

.stat-item {
  text-align: center;
  padding: 20px;
  background: rgba(79,142,247,0.05);
  border: 1px solid rgba(79,142,247,0.1);
  border-radius: 15px;
}

.stat-number {
  font-family: 'Syne', sans-serif;
  font-size: 2rem;
  font-weight: 800;
  color: #4f8ef7;
  display: block;
}

.stat-label {
  font-size: 0.85rem;
  color: #888;
  margin-top: 5px;
}

/* SKILLS SECTION */
.skills-section {
  background: linear-gradient(180deg, transparent, rgba(79,142,247,0.03), transparent);
}

.skills-grid {
  display: flex;
  justify-content: center;
  gap: 40px;
  flex-wrap: wrap;
}

.skill-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s ease;
}

body.loaded .skill-item {
  opacity: 1;
  transform: translateY(0);
}

body.loaded .skill-item:nth-child(1) { transition-delay: 0.1s; }
body.loaded .skill-item:nth-child(2) { transition-delay: 0.2s; }
body.loaded .skill-item:nth-child(3) { transition-delay: 0.3s; }

.skill-circle {
  position: relative;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
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
  inset: 10px;
  background: #0e0e1c;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
  flex-direction: column;
}

.skill-percentage {
  font-family: 'Syne', sans-serif;
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--skill-color);
}

.skill-name {
  font-size: 1rem;
  font-weight: 600;
  color: #fff;
  margin-top: 5px;
}

.skill-level {
  font-size: 0.75rem;
  color: var(--skill-color);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.skill-item[data-level="expert"] { --skill-color: #22c55e; }
.skill-item[data-level="advanced"] { --skill-color: #84cc16; }
.skill-item[data-level="intermediate"] { --skill-color: #eab308; }
.skill-item[data-level="beginner"] { --skill-color: #ef4444; }

/* EXPERIENCE/PROJECTS SECTION WITH MODAL */
.projects-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 30px;
}

.experience-card {
  background: linear-gradient(135deg, rgba(79,142,247,0.08), rgba(167,139,250,0.05));
  border: 1px solid rgba(79,142,247,0.2);
  border-radius: 20px;
  overflow: hidden;
  transition: all 0.4s ease;
  cursor: pointer;
  opacity: 0;
  transform: translateY(30px);
  position: relative;
}

body.loaded .experience-card {
  opacity: 1;
  transform: translateY(0);
}

body.loaded .experience-card:nth-child(1) { transition-delay: 0.1s; }
body.loaded .experience-card:nth-child(2) { transition-delay: 0.2s; }
body.loaded .experience-card:nth-child(3) { transition-delay: 0.3s; }
body.loaded .experience-card:nth-child(4) { transition-delay: 0.4s; }
body.loaded .experience-card:nth-child(5) { transition-delay: 0.5s; }

.experience-card:hover {
  transform: translateY(-10px);
  border-color: rgba(79,142,247,0.4);
  box-shadow: 0 30px 60px rgba(79,142,247,0.2);
}

.experience-card::before {
  content: 'Click for details';
  position: absolute;
  top: 15px;
  right: 15px;
  background: rgba(79,142,247,0.2);
  color: #4f8ef7;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 0.7rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 5;
}

.experience-card:hover::before {
  opacity: 1;
}

.project-image {
  width: 100%;
  height: 200px;
  background: linear-gradient(135deg, #1a1a2e, #16213e);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Syne', sans-serif;
  font-size: 3rem;
  color: rgba(79,142,247,0.3);
  position: relative;
  overflow: hidden;
}

.project-image::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, transparent, rgba(79,142,247,0.1));
}

.project-content {
  padding: 25px;
}

.project-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 15px;
}

.project-year {
  background: rgba(79,142,247,0.15);
  color: #4f8ef7;
  padding: 5px 12px;
  border-radius: 15px;
  font-size: 0.8rem;
  font-weight: 500;
}

.project-type {
  background: rgba(167,139,250,0.15);
  color: #a78bfa;
  padding: 3px 10px;
  border-radius: 10px;
  font-size: 0.7rem;
  text-transform: uppercase;
}

.project-title {
  font-family: 'Syne', sans-serif;
  font-size: 1.3rem;
  font-weight: 700;
  margin-bottom: 10px;
  color: #fff;
}

.project-desc {
  color: #888;
  font-size: 0.95rem;
  line-height: 1.6;
  margin-bottom: 15px;
}

.project-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: #4f8ef7;
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  transition: all 0.3s ease;
}

.project-link:hover {
  color: #a78bfa;
  gap: 12px;
}

/* AI BADGE */
.ai-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  background: linear-gradient(135deg, rgba(34,197,94,0.2), rgba(132,204,22,0.2));
  border: 1px solid rgba(34,197,94,0.4);
  color: #22c55e;
  padding: 4px 10px;
  border-radius: 12px;
  font-size: 0.7rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  margin-left: 8px;
  animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% { box-shadow: 0 0 0 0 rgba(34,197,94,0.4); }
  50% { box-shadow: 0 0 0 8px rgba(34,197,94,0); }
}

/* MOBILE APP BADGE */
.mobile-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  background: linear-gradient(135deg, rgba(79,142,247,0.2), rgba(167,139,250,0.2));
  border: 1px solid rgba(79,142,247,0.4);
  color: #4f8ef7;
  padding: 4px 10px;
  border-radius: 12px;
  font-size: 0.7rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  margin-left: 8px;
}

/* MODAL STYLES */
.modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(5,5,13,0.9);
  backdrop-filter: blur(10px);
  z-index: 2000;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.4s ease;
}

.modal-overlay.active {
  opacity: 1;
  visibility: visible;
}

.modal-content {
  background: linear-gradient(135deg, #0e0e1c, #1a1a2e);
  border: 1px solid rgba(79,142,247,0.3);
  border-radius: 24px;
  max-width: 700px;
  width: 100%;
  max-height: 90vh;
  overflow-y: auto;
  position: relative;
  transform: translateY(50px) scale(0.95);
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  box-shadow: 0 50px 100px rgba(79,142,247,0.3);
}

.modal-overlay.active .modal-content {
  transform: translateY(0) scale(1);
}

.modal-close {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(79,142,247,0.1);
  border: 1px solid rgba(79,142,247,0.3);
  color: #4f8ef7;
  font-size: 1.5rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  z-index: 10;
}

.modal-close:hover {
  background: #4f8ef7;
  color: #fff;
  transform: rotate(90deg);
}

.modal-header {
  padding: 40px 40px 20px;
  border-bottom: 1px solid rgba(79,142,247,0.1);
}

.modal-badge {
  display: inline-flex;
  gap: 10px;
  margin-bottom: 15px;
  flex-wrap: wrap;
}

.modal-year {
  background: rgba(79,142,247,0.15);
  color: #4f8ef7;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
}

.modal-type {
  background: rgba(167,139,250,0.15);
  color: #a78bfa;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
  text-transform: uppercase;
}

.modal-ai-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: linear-gradient(135deg, rgba(34,197,94,0.15), rgba(132,204,22,0.15));
  border: 1px solid rgba(34,197,94,0.4);
  color: #22c55e;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
}

.modal-ai-badge::before {
  content: '✨';
}

.modal-mobile-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: linear-gradient(135deg, rgba(79,142,247,0.15), rgba(167,139,250,0.15));
  border: 1px solid rgba(79,142,247,0.4);
  color: #4f8ef7;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
}

.modal-mobile-badge::before {
  content: '📱';
}

.modal-title {
  font-family: 'Syne', sans-serif;
  font-size: 2rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 10px;
}

.modal-subtitle {
  color: #888;
  font-size: 1.1rem;
}

.modal-body {
  padding: 30px 40px;
}

.modal-section {
  margin-bottom: 30px;
}

.modal-section:last-child {
  margin-bottom: 0;
}

.modal-section-title {
  font-family: 'Syne', sans-serif;
  font-size: 1.1rem;
  font-weight: 700;
  color: #4f8ef7;
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.modal-section-title::before {
  content: '';
  width: 4px;
  height: 20px;
  background: linear-gradient(180deg, #4f8ef7, #a78bfa);
  border-radius: 2px;
}

.modal-text {
  color: #aaa;
  line-height: 1.8;
  font-size: 1rem;
}

.tech-stack {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.tech-tag {
  background: rgba(79,142,247,0.1);
  border: 1px solid rgba(79,142,247,0.3);
  color: #4f8ef7;
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 500;
  transition: all 0.3s ease;
}

.tech-tag:hover {
  background: rgba(79,142,247,0.2);
  transform: translateY(-2px);
}

.key-features {
  list-style: none;
}

.key-features li {
  color: #aaa;
  padding: 10px 0;
  padding-left: 30px;
  position: relative;
  border-bottom: 1px solid rgba(79,142,247,0.1);
}

.key-features li:last-child {
  border-bottom: none;
}

.key-features li::before {
  content: '✓';
  position: absolute;
  left: 0;
  color: #22c55e;
  font-weight: 700;
  font-size: 1.2rem;
}

.modal-footer {
  padding: 20px 40px 40px;
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.modal-btn {
  padding: 12px 25px;
  border-radius: 25px;
  font-size: 0.9rem;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.modal-btn-primary {
  background: linear-gradient(135deg, #4f8ef7, #a78bfa);
  color: #fff;
  border: none;
}

.modal-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(79,142,247,0.4);
}

.modal-btn-secondary {
  background: transparent;
  color: #fff;
  border: 2px solid rgba(79,142,247,0.4);
}

.modal-btn-secondary:hover {
  border-color: #4f8ef7;
  background: rgba(79,142,247,0.1);
}

/* SERVICES SECTION */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
}

.service-card {
  background: rgba(79,142,247,0.05);
  border: 1px solid rgba(79,142,247,0.15);
  border-radius: 20px;
  padding: 35px;
  transition: all 0.4s ease;
  opacity: 0;
  transform: translateY(30px);
}

body.loaded .service-card {
  opacity: 1;
  transform: translateY(0);
}

body.loaded .service-card:nth-child(1) { transition-delay: 0.1s; }
body.loaded .service-card:nth-child(2) { transition-delay: 0.2s; }
body.loaded .service-card:nth-child(3) { transition-delay: 0.3s; }

.service-card:hover {
  background: rgba(79,142,247,0.1);
  border-color: rgba(79,142,247,0.3);
  transform: translateY(-5px);
}

.service-icon {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #4f8ef7, #a78bfa);
  border-radius: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  margin-bottom: 20px;
}

.service-title {
  font-family: 'Syne', sans-serif;
  font-size: 1.3rem;
  font-weight: 700;
  margin-bottom: 10px;
}

.service-desc {
  color: #888;
  line-height: 1.6;
}

/* TESTIMONIALS */
.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}

.testimonial-card {
  background: linear-gradient(135deg, rgba(79,142,247,0.05), rgba(167,139,250,0.03));
  border: 1px solid rgba(79,142,247,0.15);
  border-radius: 20px;
  padding: 30px;
  position: relative;
  opacity: 0;
  transform: translateY(30px);
}

body.loaded .testimonial-card {
  opacity: 1;
  transform: translateY(0);
}

.testimonial-card::before {
  content: '"';
  position: absolute;
  top: 20px;
  right: 30px;
  font-family: 'Syne', sans-serif;
  font-size: 4rem;
  color: rgba(79,142,247,0.2);
  line-height: 1;
}

.testimonial-text {
  color: #ccc;
  line-height: 1.7;
  margin-bottom: 20px;
  font-style: italic;
}

.testimonial-author {
  display: flex;
  align-items: center;
  gap: 15px;
}

.testimonial-avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: linear-gradient(135deg, #4f8ef7, #a78bfa);
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  color: #fff;
}

.testimonial-info h4 {
  font-family: 'Syne', sans-serif;
  font-size: 1rem;
  margin-bottom: 3px;
}

.testimonial-info p {
  font-size: 0.85rem;
  color: #888;
}

/* CONTACT SECTION */
.contact-section {
  background: linear-gradient(180deg, transparent, rgba(79,142,247,0.05));
}

.contact-content {
  text-align: center;
  max-width: 700px;
  margin: 0 auto;
}

.contact-title {
  font-family: 'Syne', sans-serif;
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 700;
  margin-bottom: 20px;
}

.contact-desc {
  color: #888;
  font-size: 1.1rem;
  margin-bottom: 40px;
  line-height: 1.7;
}

.contact-email {
  display: inline-flex;
  align-items: center;
  gap: 15px;
  background: rgba(79,142,247,0.1);
  border: 2px solid rgba(79,142,247,0.3);
  padding: 20px 40px;
  border-radius: 50px;
  font-size: 1.2rem;
  color: #fff;
  text-decoration: none;
  transition: all 0.3s ease;
  margin-bottom: 30px;
}

.contact-email:hover {
  background: rgba(79,142,247,0.2);
  border-color: #4f8ef7;
  transform: translateY(-3px);
}

.social-links {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.social-link {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: rgba(79,142,247,0.1);
  border: 1px solid rgba(79,142,247,0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #4f8ef7;
  text-decoration: none;
  font-size: 1.2rem;
  transition: all 0.3s ease;
}

.social-link:hover {
  background: #4f8ef7;
  color: #fff;
  transform: translateY(-5px);
}

/* FOOTER */
.footer {
  text-align: center;
  padding: 40px;
  border-top: 1px solid rgba(79,142,247,0.1);
  color: #666;
  font-size: 0.9rem;
}

/* MOBILE RESPONSIVE */
@media (max-width: 768px) {
  .nav {
    padding: 15px 20px;
  }
  
  .nav-links {
    display: none;
  }
  
  .hero {
    padding: 120px 20px 80px;
  }
  
  .section {
    padding: 60px 20px;
  }
  
  .about-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .stats-grid {
    grid-template-columns: 1fr;
  }
  
  .projects-grid {
    grid-template-columns: 1fr;
  }
  
  .floating-elements {
    display: none;
  }
  
  .modal-content {
    margin: 10px;
    max-height: 95vh;
  }
  
  .modal-header, .modal-body, .modal-footer {
    padding: 25px;
  }
  
  .modal-title {
    font-size: 1.5rem;
  }
}

/* Hide scrollbar for modal */
.modal-content::-webkit-scrollbar {
  width: 8px;
}

.modal-content::-webkit-scrollbar-track {
  background: rgba(79,142,247,0.1);
  border-radius: 4px;
}

.modal-content::-webkit-scrollbar-thumb {
  background: rgba(79,142,247,0.3);
  border-radius: 4px;
}

.modal-content::-webkit-scrollbar-thumb:hover {
  background: rgba(79,142,247,0.5);
}

</style>
</head>

<body>

<div class="bg"></div>

<!-- NAVIGATION -->
<nav class="nav">
  <div class="nav-logo">Jeiku</div>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<!-- HERO SECTION -->
<section class="hero">
  <div class="floating-elements">
    <div class="float-item">&lt;code&gt;</div>
    <div class="float-item">{design}</div>
    <div class="float-item">function()</div>
  </div>
  
  <div class="hero-content">
    <div class="hero-badge">Available for Development, IT & Office Work — Remote or On-Site</div>
    <h1 class="hero-title">
      Office Assistant<br>
      <span>Digital Creator</span>
    </h1>
    <p class="hero-subtitle">
      I build websites, apps, and handle office work — remote or on-site. 
      Coding, computers, and paperwork — whatever you need
    </p>
    <div class="hero-cta">
      <a href="#projects" class="btn btn-primary">View My Work</a>
      <a href="#contact" class="btn btn-secondary">Get In Touch</a>
    </div>
  </div>
</section>

<!-- ABOUT SECTION -->
<section class="section" id="about">
  <div class="section-header">
    <div class="section-label">About Me</div>
    <h2 class="section-title">Who I Am</h2>
  </div>
  
  <div class="about-grid">
    <div class="about-image">
      <div class="about-image-wrapper">
        <div class="about-image-glow"></div>
        <img src="images/developers/jake.jpg" alt="Jake Rodriguez" class="about-img">
      </div>
    </div>
    
    <div class="about-content">
      <h3>Building Digital Experiences That Matter</h3>
      <p>
        I'm Jake Rodriguez, a passionate developer based in Cebu, Philippines. 
        I specialize in crafting immersive and scalable web applications with a 
        strong emphasis on modern UI/UX design.
      </p>
      <p>
        While I don't code entirely from scratch, I leverage AI tools and prompts to 
        efficiently build and refine interactive, user-friendly interfaces, ensuring 
        seamless integration with robust backend architectures.
      </p>
      <div class="stats-grid">
        <div class="stat-item">
          <span class="stat-number">3+</span>
          <div class="stat-label">Years Learning</div>
        </div>
        <div class="stat-item">
          <span class="stat-number">10+</span>
          <div class="stat-label">Projects Built</div>
        </div>
        <div class="stat-item">
          <span class="stat-number">5+</span>
          <div class="stat-label">Technologies Mastered</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS SECTION -->
<section class="section skills-section" id="skills">
  <div class="section-header">
    <div class="section-label">Expertise</div>
    <h2 class="section-title">My Skills</h2>
    <p class="section-desc">Battery-level indicators showing my proficiency</p>
  </div>
  
  
  <div class="skills-grid">
    <div class="skill-item" data-level="expert" style="--percentage: 81;">
      <div class="skill-circle">
        <div class="skill-circle-inner">
          <span class="skill-percentage">81%</span>
          <span class="skill-level">advanced</span>
        </div>
      </div>
      <span class="skill-name">Laravel</span>
    </div>
    
    <div class="skill-item" data-level="advanced" style="--percentage: 60;">
      <div class="skill-circle">
        <div class="skill-circle-inner">
          <span class="skill-percentage">60%</span>
          <span class="skill-level">advanced</span>
        </div>
      </div>
      <span class="skill-name">PHP</span>
    </div>
    
    <div class="skill-item" data-level="advanced" style="--percentage: 68;">
      <div class="skill-circle">
        <div class="skill-circle-inner">
          <span class="skill-percentage">68%</span>
          <span class="skill-level">advanced</span>
        </div>
      </div>
      <span class="skill-name">C#</span>
    </div>
    
    <div class="skill-item" data-level="intermediate" style="--percentage: 45;">
      <div class="skill-circle">
        <div class="skill-circle-inner">
          <span class="skill-percentage">45%</span>
          <span class="skill-level">Intermediate</span>
        </div>
      </div>
      <span class="skill-name">React Native</span>
    </div>
    
    <div class="skill-item" data-level="intermediate" style="--percentage: 58;">
      <div class="skill-circle">
        <div class="skill-circle-inner">
          <span class="skill-percentage">58%</span>
          <span class="skill-level">Intermediate</span>
        </div>
      </div>
      <span class="skill-name">MySQL</span>
    </div>
    
    <div class="skill-item" data-level="intermediate" style="--percentage: 41;">
      <div class="skill-circle">
        <div class="skill-circle-inner">
          <span class="skill-percentage">41%</span>
          <span class="skill-level">intermediate</span>
        </div>
      </div>
      <span class="skill-name">JavaScript</span>
    </div>
    
    <div class="skill-item" data-level="beginner" style="--percentage: 35;">
      <div class="skill-circle">
        <div class="skill-circle-inner">
          <span class="skill-percentage">35%</span>
          <span class="skill-level">Beginner</span>
        </div>
      </div>
      <span class="skill-name">Firebase</span>
    </div>
    
    <div class="skill-item" data-level="advanced" style="--percentage: 68;">
      <div class="skill-circle">
        <div class="skill-circle-inner">
          <span class="skill-percentage">68%</span>
          <span class="skill-level">advanced</span>
        </div>
      </div>
      <span class="skill-name">HTML/CSS</span>
    </div>
  </div>



</section>

<!-- PROJECTS SECTION -->
<section class="section" id="projects">
  <div class="section-header">
    <div class="section-label">Portfolio</div>
    <h2 class="section-title">Featured Projects</h2>
    <p class="section-desc">Click on any project to see full details</p>
  </div>
  
  <div class="projects-grid">
    <!-- Burn Bai Mobile App -->
    <div class="experience-card" data-project="burnbai">
      <div class="project-image">🔥</div>
      <div class="project-content">
        <div class="project-header">
          <span class="project-year">2024</span>
          <span class="project-type">Mobile App</span>
        </div>
        <h3 class="project-title">
          Burn Bai
          <span class="mobile-badge">📱 Mobile</span>
        </h3>
        <p class="project-desc">
          A fat burner fitness app with easy, medium, and intense workouts. 
          No fancy equipment needed—work out anywhere, even on Bantayan Island or any island paradise.
        </p>
        <span class="project-link">View Details →</span>
      </div>
    </div>
    
    <!-- PSA Internship -->
    <div class="experience-card" data-project="psa">
      <div class="project-image">PSA</div>
      <div class="project-content">
        <div class="project-header">
          <span class="project-year">Jan - Apr 2026</span>
          <span class="project-type">Internship</span>
        </div>
        <h3 class="project-title">Philippine Statistics Authority</h3>
        <p class="project-desc">
          HR Department Internship - Managing personnel records and developing internal tools.
        </p>
        <span class="project-link">View Details →</span>
      </div>
    </div>
    
    <!-- BaltBep -->
    <div class="experience-card" data-project="baltbep">
      <div class="project-image">BB</div>
      <div class="project-content">
        <div class="project-header">
          <span class="project-year">2025</span>
          <span class="project-type">Capstone</span>
        </div>
        <h3 class="project-title">BaltBep Ticketing System</h3>
        <p class="project-desc">
          A comprehensive ship ticketing system with admin dashboard, booking management, 
          and real-time availability tracking.
        </p>
        <span class="project-link">View Details →</span>
      </div>
    </div>
    
    <!-- Gym PHP with AI -->
    <div class="experience-card" data-project="gym-php">
      <div class="project-image">GM+AI</div>
      <div class="project-content">
        <div class="project-header">
          <span class="project-year">2024</span>
          <span class="project-type">3rd Year</span>
        </div>
        <h3 class="project-title">
          Gym Monitoring System (PHP)
          <span class="ai-badge">AI Powered</span>
        </h3>
        <p class="project-desc">
          Full-featured gym management with AI assistant for member support, workout 
          recommendations, and smart scheduling.
        </p>
        <span class="project-link">View Details →</span>
      </div>
    </div>
    
    <!-- Gym C# -->
    <div class="experience-card" data-project="gym-csharp">
      <div class="project-image">GM</div>
      <div class="project-content">
        <div class="project-header">
          <span class="project-year">2024</span>
          <span class="project-type">2nd Year</span>
        </div>
        <h3 class="project-title">Gym Monitoring System (C#)</h3>
        <p class="project-desc">
          Created a desktop monitoring system using C# and .NET framework with comprehensive 
          reporting features.
        </p>
        <span class="project-link">View Details →</span>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section class="section" id="services">
  <div class="section-header">
    <div class="section-label">What I Do</div>
    <h2 class="section-title">Services</h2>
    <p class="section-desc">How I can help bring your ideas to life</p>
  </div>
  
  <div class="services-grid">
    <div class="service-card">
      <div class="service-icon">🌐</div>
      <h3 class="service-title">Web Development</h3>
      <p class="service-desc">
        Full-stack web applications using Laravel, PHP, and modern JavaScript frameworks. 
        From concept to deployment.
      </p>
    </div>
    
    <div class="service-card">
      <div class="service-icon">📱</div>
      <h3 class="service-title">Mobile Development</h3>
      <p class="service-desc">
        Cross-platform mobile applications that work seamlessly on both iOS and Android, 
        designed for real-world usability.
      </p>
    </div>
    
    <div class="service-card">
      <div class="service-icon">⚡</div>
      <h3 class="service-title">AI Integration</h3>
      <p class="service-desc">
        Leveraging AI tools to accelerate development, optimize workflows, and create 
        intelligent features for your applications.
      </p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="section">
  <div class="section-header">
    <div class="section-label">Testimonials</div>
    <h2 class="section-title">What People Say</h2>
  </div>
  
  <div class="testimonials-grid">
    <div class="testimonial-card">
      <p class="testimonial-text">
        "Jake delivered an exceptional ticketing system for our shipping company. 
        His attention to detail and problem-solving skills are remarkable."
      </p>
      <div class="testimonial-author">
        <div class="testimonial-avatar">BC</div>
        <div class="testimonial-info">
          <h4>BaltBep Client</h4>
          <p>Shipping Company Owner</p>
        </div>
      </div>
    </div>
    
    <div class="testimonial-card">
      <p class="testimonial-text">
        "The gym monitoring system transformed how we manage our members. 
        Professional work with great user interface design."
      </p>
      <div class="testimonial-author">
        <div class="testimonial-avatar">FH</div>
        <div class="testimonial-info">
          <h4>Fettle Hut Gym</h4>
          <p>Fitness Center Manager</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="section contact-section" id="contact">
  <div class="contact-content">
    <div class="section-label">Get In Touch</div>
    <h2 class="contact-title">Let's Work Together</h2>
    <p class="contact-desc">
      Have a project in mind? I'm always open to discussing new opportunities 
      and interesting collaborations.
    </p>
    
    <a href="mailto:jeikur42@gmail.com" class="contact-email">
      📧 jeikur42@gmail.com
    </a>
    
    <div class="social-links">
      <a href="https://github.com/Jeii22" target="_blank" class="social-link" title="GitHub">GH</a>
      <a href="https://web.facebook.com/jei.waizzu" target="_blank" class="social-link" title="Facebook">FB</a>
      <a href="https://www.instagram.com/jei.waizzu" target="_blank" class="social-link" title="Instagram">IG</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <p>&copy; 2025 Jake Rodriguez. Crafted with passion in Cebu, Philippines.</p>
</footer>

<!-- MODAL -->
<div class="modal-overlay" id="projectModal">
  <div class="modal-content">
    <button class="modal-close" onclick="closeModal()">&times;</button>
    
    <div class="modal-header">
      <div class="modal-badge">
        <span class="modal-year" id="modalYear">2025</span>
        <span class="modal-type" id="modalType">Capstone</span>
        <span class="modal-ai-badge" id="modalAiBadge" style="display: none;">AI Powered</span>
        <span class="modal-mobile-badge" id="modalMobileBadge" style="display: none;">Mobile App</span>
      </div>
      <h2 class="modal-title" id="modalTitle">Project Title</h2>
      <p class="modal-subtitle" id="modalSubtitle">Brief description</p>
    </div>
    
    <div class="modal-body">
      <div class="modal-section">
        <h3 class="modal-section-title">Overview</h3>
        <p class="modal-text" id="modalOverview">
          Full project description goes here.
        </p>
      </div>
      
      <div class="modal-section">
        <h3 class="modal-section-title">Technologies Used</h3>
        <div class="tech-stack" id="modalTech">
          <!-- Tech tags injected here -->
        </div>
      </div>
      
      <div class="modal-section">
        <h3 class="modal-section-title">Key Features</h3>
        <ul class="key-features" id="modalFeatures">
          <!-- Features injected here -->
        </ul>
      </div>
    </div>
    
    <div class="modal-footer" id="modalFooter">
      <!-- Buttons injected here -->
    </div>
  </div>
</div>

<script>
// Project data for modals
const projectData = {
  burnbai: {
    year: '2024',
    type: 'Mobile Application',
    title: 'Burn Bai',
    subtitle: 'Island-Ready Fitness Companion',
    overview: 'Burn Bai is a mobile fitness application designed specifically for people who want to stay fit without access to gym equipment or fancy facilities. Whether you\'re on Bantayan Island, Malapascua, or any remote island paradise, this app delivers effective fat-burning workouts that require zero equipment—just your body and determination. The app features three intensity levels (Easy, Medium, Intense) to accommodate beginners to advanced users, making fitness accessible to everyone, everywhere.',
    tech: ['React Native', 'Firebase', 'Node.js', 'Expo', 'AsyncStorage', 'Push Notifications'],
    features: [
      'Three workout intensity levels: Easy, Medium, and Intense',
      'Zero equipment required—bodyweight exercises only',
      'Works offline—perfect for island locations with poor connectivity',
      'Progress tracking and workout history',
      'Customizable workout reminders and schedules',
      'Calorie counter and fitness goal setting',
      'Video demonstrations for all exercises',
      'Bantayan Island-inspired tropical UI theme'
    ],
    link: null,
    hasAI: false,
    isMobile: true
  },
  psa: {
    year: 'Jan - Apr 2026',
    type: 'On the Job Training',
    title: 'Philippine Statistics Authority',
    subtitle: 'HR Department Internship',
    overview: 'Served as an intern under the Human Resources department at the Philippine Statistics Authority. Responsible for managing personnel records, assisting in recruitment processes, and developing internal tools to streamline HR workflows. Gained valuable experience in government operations and large-scale data management.',
    tech: ['Microsoft Office', 'HR Information Systems', 'Data Entry', 'Record Management'],
    features: [
      'Managed and organized personnel records for 100+ employees',
      'Assisted in recruitment and onboarding processes',
      'Developed Excel-based tools for HR analytics',
      'Participated in training sessions and workshops',
      'Learned government compliance and documentation standards'
    ],
    link: null,
    hasAI: false,
    isMobile: false
  },
  baltbep: {
    year: '2025',
    type: 'Capstone Project',
    title: 'BaltBep Ticketing System',
    subtitle: 'Ship Ticketing & Reservation Platform',
    overview: 'A comprehensive web-based ship ticketing system developed as my 4th year Capstone project. The system features real-time booking management, passenger tracking, automated ticket generation, and a robust admin dashboard for fleet management. Built with scalability in mind to handle peak season traffic.',
    tech: ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'Bootstrap', 'HTML/CSS'],
    features: [
      'Real-time seat availability and booking system',
      'Automated ticket generation',
      'Admin dashboard with analytics and reporting',
      'Passenger management',
      'Payment integration and invoice generation',
      'Mobile-responsive design for on-the-go booking',
      'Mobile Application for easy booking'

    ],
    link: 'https://baltbep.net',
    hasAI: false,
    isMobile: false
  },
  'gym-php': {
    year: 'OCt 2024 - Mar 2025',
    type: '3rd Year Final Project',
    title: 'Gym Management System (PHP)',
    subtitle: 'AI-Powered Fitness Center Management Platform',
    overview: 'A full-featured gym management system built specifically for Fettle Hut Fitness Gym, enhanced with an integrated AI assistant. The web application handles member registrations, attendance tracking, payment processing, and workout plan assignments. The AI assistant provides personalized workout recommendations, answers member queries, and assists with scheduling—making this a cutting-edge solution for modern fitness centers.',
    tech: ['PHP', 'MySQL', 'JavaScript', 'jQuery', 'Bootstrap', 'HTML/CSS', 'OpenAI API', 'AJAX'],
    features: [
      'Integrated AI assistant for member support and workout recommendations',
      'Smart scheduling system with AI-optimized trainer appointments',
      'Member registration and profile management',
      'Payment processing and invoice generation',
      'AI-generated personalized workout plans based on member goals',
      'Financial reporting and analytics dashboard'
    ],
    link: null,
    hasAI: true,
    isMobile: false
  },
  'gym-csharp': {
    year: 'Mar - May 2024',
    type: '2nd Year Final Project',
    title: 'Gym Monitoring System (C#)',
    subtitle: 'Desktop Application for Gym Management',
    overview: 'A Windows desktop application version of the gym monitoring system built using C# and .NET Framework. This was my first major project, focusing on desktop UI development and database integration. Features comprehensive reporting tools and offline functionality.',
    tech: ['C#', '.NET Framework', 'Windows Forms', 'SQL Server', 'Crystal Reports'],
    features: [
      'Windows Forms interface with modern UI design',
      'Local database storage with SQL Server',
      'Comprehensive reporting with Crystal Reports',
      'Member photo capture and ID card printing',
      'Backup and restore functionality',
      'Offline operation capability'
    ],
    link: null,
    hasAI: false,
    isMobile: false
  }
};

// Modal functions
function openModal(projectId) {
  const project = projectData[projectId];
  if (!project) return;
  
  // Populate modal content
  document.getElementById('modalYear').textContent = project.year;
  document.getElementById('modalType').textContent = project.type;
  document.getElementById('modalTitle').textContent = project.title;
  document.getElementById('modalSubtitle').textContent = project.subtitle;
  document.getElementById('modalOverview').textContent = project.overview;
  
  // Show/hide AI badge
  const aiBadge = document.getElementById('modalAiBadge');
  if (project.hasAI) {
    aiBadge.style.display = 'inline-flex';
  } else {
    aiBadge.style.display = 'none';
  }
  
  // Show/hide Mobile badge
  const mobileBadge = document.getElementById('modalMobileBadge');
  if (project.isMobile) {
    mobileBadge.style.display = 'inline-flex';
  } else {
    mobileBadge.style.display = 'none';
  }
  
  // Populate tech stack
  const techContainer = document.getElementById('modalTech');
  techContainer.innerHTML = project.tech.map(t => `<span class="tech-tag">${t}</span>`).join('');
  
  // Populate features
  const featuresContainer = document.getElementById('modalFeatures');
  featuresContainer.innerHTML = project.features.map(f => `<li>${f}</li>`).join('');
  
  // Populate footer buttons
  const footer = document.getElementById('modalFooter');
  if (project.link) {
    footer.innerHTML = `
      <a href="${project.link}" target="_blank" class="modal-btn modal-btn-primary">
        Visit Live Site →
      </a>
      <button class="modal-btn modal-btn-secondary" onclick="closeModal()">
        Close
      </button>
    `;
  } else {
    footer.innerHTML = `
      <button class="modal-btn modal-btn-secondary" onclick="closeModal()">
        Close
      </button>
    `;
  }
  
  // Show modal
  document.getElementById('projectModal').classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  document.getElementById('projectModal').classList.remove('active');
  document.body.style.overflow = '';
}

// Close modal when clicking outside
window.onclick = function(event) {
  const modal = document.getElementById('projectModal');
  if (event.target === modal) {
    closeModal();
  }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    closeModal();
  }
});

// Add click handlers to project cards
document.querySelectorAll('.experience-card').forEach(card => {
  card.addEventListener('click', function() {
    const projectId = this.getAttribute('data-project');
    openModal(projectId);
  });
});

// Trigger animations when page loads
window.addEventListener('load', function() {
  document.body.classList.add('loaded');
});

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});
</script>

</body>
</html>