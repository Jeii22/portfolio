<?php
// Jake Ballano Rodriguez — Vintage Courtship Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>A Letter for You — Jake Ballano Rodriguez</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=IM+Fell+English:ital@0;1&family=Caveat:wght@400;600&family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet"/>
  <!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --ink: #2b1a0e;
      --ink-light: #5c3d1e;
      --parchment: #f2e8d5;
      --parchment-dark: #e0cfa8;
      --parchment-deep: #c9ab78;
      --rust: #8b3a1a;
      --gold: #c4922a;
      --gold-light: #e8c96a;
      --sepia: #7a5c2e;
      --cream: #faf4e8;
      --red-wax: #8b1a1a;
    }

    html { scroll-behavior: smooth; }

    body {
      background-color: #1a0f05;
      background-image:
        radial-gradient(ellipse at 20% 20%, #2d1a08 0%, transparent 60%),
        radial-gradient(ellipse at 80% 80%, #1f1205 0%, transparent 60%);
      font-family: 'Cormorant Garamond', serif;
      color: var(--ink);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Paper texture overlay */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none;
      z-index: 9999;
      opacity: 0.5;
    }

    /* ========= HEADER / HERO ========= */
    .hero {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 4rem 2rem;
      position: relative;
      text-align: center;
    }

    .wax-seal-top {
      width: 80px; height: 80px;
      border-radius: 50%;
      background: var(--red-wax);
      display: flex; align-items: center; justify-content: center;
      font-size: 32px;
      color: #f5d9b0;
      margin-bottom: 2rem;
      border: 3px solid #6b1414;
      animation: sealPulse 3s ease-in-out infinite;
      position: relative;
    }
    .wax-seal-top::after {
      content: '';
      position: absolute;
      inset: 6px;
      border-radius: 50%;
      border: 1px solid rgba(255,220,150,0.3);
    }
    @keyframes sealPulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.04); }
    }

    .hero-ribbon {
      font-family: 'IM Fell English', serif;
      font-style: italic;
      font-size: 13px;
      letter-spacing: 4px;
      color: var(--gold);
      text-transform: uppercase;
      margin-bottom: 1rem;
      opacity: 0.9;
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.8rem, 8vw, 5.5rem);
      font-weight: 700;
      font-style: italic;
      color: var(--parchment);
      line-height: 1.1;
      text-shadow: 2px 2px 0 rgba(0,0,0,0.5);
      margin-bottom: 0.5rem;
    }

    .hero-sub {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1rem, 3vw, 1.5rem);
      font-style: italic;
      color: var(--parchment-deep);
      margin-bottom: 2rem;
    }

    .ornament-line {
      display: flex;
      align-items: center;
      gap: 12px;
      margin: 1rem 0;
      color: var(--gold);
      font-size: 20px;
      justify-content: center;
    }
    .ornament-line::before, .ornament-line::after {
      content: '';
      height: 1px;
      width: 80px;
      background: linear-gradient(to right, transparent, var(--gold), transparent);
    }

    .scroll-hint {
      position: absolute;
      bottom: 2rem;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'Caveat', cursive;
      color: var(--parchment-deep);
      font-size: 14px;
      animation: bounce 2s ease-in-out infinite;
    }
    @keyframes bounce {
      0%, 100% { transform: translateX(-50%) translateY(0); }
      50% { transform: translateX(-50%) translateY(8px); }
    }

    /* ========= PARCHMENT SECTIONS ========= */
    .section {
      max-width: 780px;
      margin: 0 auto 3rem;
      padding: 0 1.5rem;
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .section.visible { opacity: 1; transform: translateY(0); }

    .parchment-card {
      background: var(--parchment);
      border: 1px solid var(--parchment-deep);
      padding: 2.5rem 3rem;
      position: relative;
      clip-path: polygon(0 0, calc(100% - 24px) 0, 100% 24px, 100% 100%, 24px 100%, 0 calc(100% - 24px));
    }
    .parchment-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        repeating-linear-gradient(transparent, transparent 27px, rgba(139,93,51,0.12) 27px, rgba(139,93,51,0.12) 28px);
      pointer-events: none;
    }
    .parchment-card::after {
      content: '';
      position: absolute;
      top: 0; right: 0;
      width: 24px; height: 24px;
      background: var(--parchment-dark);
      clip-path: polygon(0 0, 100% 100%, 0 100%);
    }

    .card-seal {
      position: absolute;
      top: -18px; left: 50%;
      transform: translateX(-50%);
      width: 36px; height: 36px;
      border-radius: 50%;
      background: var(--red-wax);
      border: 2px solid #6b1414;
      color: #f5d9b0;
      font-size: 16px;
      display: flex; align-items: center; justify-content: center;
    }

    .sec-header {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.4rem, 4vw, 2rem);
      font-style: italic;
      color: var(--rust);
      text-align: center;
      margin-bottom: 0.3rem;
    }

    .sec-subhead {
      font-family: 'IM Fell English', serif;
      font-style: italic;
      font-size: 13px;
      letter-spacing: 3px;
      color: var(--sepia);
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .body-text {
      font-family: 'Cormorant Garamond', serif;
      font-size: 18px;
      line-height: 1.9;
      color: var(--ink);
    }

    .dropcap::first-letter {
      font-family: 'Playfair Display', serif;
      font-size: 4.5em;
      float: left;
      line-height: 0.75;
      margin-right: 8px;
      color: var(--rust);
      font-weight: 700;
    }

    /* ========= PICKUP LINES ========= */
    .pickup-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.2rem;
      margin-top: 1.5rem;
    }

    .pickup-card {
      background: var(--cream);
      border: 1px solid var(--parchment-deep);
      padding: 1.2rem 1.4rem;
      position: relative;
      cursor: pointer;
      transition: transform 0.2s;
    }
    .pickup-card:hover { transform: rotate(-0.5deg) scale(1.01); }
    .pickup-card::before {
      content: '"';
      position: absolute;
      top: -8px; left: 12px;
      font-family: 'Playfair Display', serif;
      font-size: 60px;
      color: var(--gold);
      line-height: 1;
      opacity: 0.4;
    }

    .pickup-bisaya {
      font-family: 'Caveat', cursive;
      font-size: 17px;
      color: var(--rust);
      margin-bottom: 6px;
      line-height: 1.4;
    }
    .pickup-trans {
      font-family: 'Cormorant Garamond', serif;
      font-style: italic;
      font-size: 14px;
      color: var(--sepia);
    }

    /* ========= HOBBIES ========= */
    .hobby-list {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 1.2rem;
      justify-content: center;
    }
    .hobby-tag {
      background: var(--parchment-dark);
      border: 1px solid var(--parchment-deep);
      padding: 6px 16px;
      font-family: 'Caveat', cursive;
      font-size: 16px;
      color: var(--ink-light);
      border-radius: 2px;
      cursor: default;
      transition: background 0.2s, color 0.2s;
    }
    .hobby-tag:hover { background: var(--rust); color: var(--parchment); }

    /* ========= ACCORDION ========= */
    .accordion { margin-top: 1.2rem; }
    .acc-item {
      border-bottom: 1px dashed var(--parchment-deep);
    }
    .acc-q {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 4px;
      cursor: pointer;
      font-family: 'Playfair Display', serif;
      font-style: italic;
      font-size: 17px;
      color: var(--rust);
    }
    .acc-q .arr { transition: transform 0.25s; font-size: 12px; color: var(--sepia); }
    .acc-item.open .arr { transform: rotate(90deg); }
    .acc-a {
      font-family: 'Caveat', cursive;
      font-size: 17px;
      color: var(--ink);
      padding: 0 4px 14px;
      display: none;
      line-height: 1.7;
    }
    .acc-item.open .acc-a { display: block; }

    /* ========= SOCIALS ========= */
    .socials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 1rem;
      margin-top: 1.5rem;
    }
    .social-card {
      background: var(--cream);
      border: 1px solid var(--parchment-deep);
      padding: 1rem 1.2rem;
      text-align: center;
      text-decoration: none;
      display: block;
      transition: transform 0.2s, background 0.2s;
    }
    .social-card:hover { transform: translateY(-3px); background: var(--parchment-dark); }
    .social-icon { font-size: 26px; margin-bottom: 6px; }
    .social-name {
      font-family: 'Playfair Display', serif;
      font-size: 14px;
      font-weight: 700;
      color: var(--rust);
      display: block;
      margin-bottom: 2px;
    }
    .social-handle {
      font-family: 'Caveat', cursive;
      font-size: 14px;
      color: var(--sepia);
      word-break: break-all;
    }

    /* ========= RSVP / CTA ========= */
    .rsvp-box {
      text-align: center;
      padding: 2rem;
    }
    .rsvp-intro {
      font-family: 'Cormorant Garamond', serif;
      font-size: 19px;
      font-style: italic;
      color: var(--ink-light);
      margin-bottom: 1.5rem;
      line-height: 1.8;
    }
    .rsvp-bisaya {
      font-family: 'Caveat', cursive;
      font-size: 22px;
      color: var(--rust);
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }
    .btn-yes {
      background: var(--rust);
      color: var(--parchment);
      border: none;
      padding: 12px 36px;
      font-family: 'Playfair Display', serif;
      font-style: italic;
      font-size: 18px;
      cursor: pointer;
      margin: 0 8px 10px;
      transition: transform 0.1s, background 0.2s;
      clip-path: polygon(6px 0, 100% 0, calc(100% - 6px) 100%, 0 100%);
    }
    .btn-yes:hover { background: var(--ink); transform: scale(1.04); }
    .btn-maybe {
      background: transparent;
      color: var(--sepia);
      border: 1px solid var(--parchment-deep);
      padding: 12px 28px;
      font-family: 'Caveat', cursive;
      font-size: 18px;
      cursor: pointer;
      margin: 0 8px 10px;
      transition: all 0.3s;
    }
    #reply {
      font-family: 'Caveat', cursive;
      font-size: 20px;
      color: var(--rust);
      margin-top: 1rem;
      min-height: 30px;
    }

    /* ========= FOOTER ========= */
    footer {
      background: #110a03;
      border-top: 1px solid #3a2210;
      text-align: center;
      padding: 2rem 1.5rem;
    }
    footer .ornament-f {
      font-size: 24px;
      color: var(--gold);
      letter-spacing: 10px;
      margin-bottom: 0.8rem;
    }
    footer p {
      font-family: 'Cormorant Garamond', serif;
      font-size: 14px;
      color: #7a5c2e;
      line-height: 1.8;
      font-style: italic;
    }

    /* ========= DIVIDERS ========= */
    .divider-ornament {
      text-align: center;
      color: var(--gold);
      font-size: 18px;
      letter-spacing: 12px;
      margin: 2.5rem 0;
      opacity: 0.7;
    }

    /* ========= STAMP ========= */
    .stamp {
      display: inline-block;
      border: 2px solid var(--rust);
      padding: 4px 14px;
      font-family: 'IM Fell English', serif;
      font-size: 11px;
      letter-spacing: 2px;
      color: var(--rust);
      transform: rotate(-3deg);
      opacity: 0.7;
    }

    /* ========= TOOLTIP PICKUP ========= */
    .tooltip-hint {
      font-family: 'Caveat', cursive;
      font-size: 13px;
      color: var(--sepia);
      text-align: center;
      margin-bottom: 0.5rem;
    }

    @media (max-width: 600px) {
      .parchment-card { padding: 2rem 1.5rem; }
      .body-text { font-size: 16px; }
    }

    /* ========= MUSIC PLAYER ========= */
.music-player {
  position: fixed;
  top: 20px;
  right: 20px;
  width: 60px;
  height: 60px;
  background: var(--parchment);
  border: 2px solid var(--parchment-deep);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10000;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0,0,0,0.3);
  opacity: 0.9;
}

.music-player:hover {
  transform: scale(1.1);
  background: var(--parchment-dark);
  box-shadow: 0 6px 20px rgba(0,0,0,0.4);
}

.music-player.playing {
  background: var(--rust);
  color: var(--parchment);
  animation: musicPulse 2s ease-in-out infinite;
}

@keyframes musicPulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.08); }
}

.music-player .icon {
  font-size: 20px;
  transition: transform 0.2s;
}

.music-player:hover .icon {
  transform: scale(1.2);
}

.music-status {
  position: fixed;
  top: 90px;
  right: 20px;
  background: var(--parchment);
  color: var(--ink);
  padding: 8px 12px;
  border-radius: 20px;
  font-family: 'Caveat', cursive;
  font-size: 13px;
  border: 1px solid var(--parchment-deep);
  opacity: 0;
  transform: translateX(100px);
  transition: all 0.3s ease;
  z-index: 9999;
  white-space: nowrap;
}

.music-status.show {
  opacity: 1;
  transform: translateX(0);
}

@media (max-width: 600px) {
  .music-player { top: 15px; right: 15px; width: 55px; height: 55px; }
  .music-player .icon { font-size: 18px; }
}
    /* Visual feedback for tap-anywhere */
body.tap-feedback::before {
  content: '';
  position: fixed;
  inset: 0;
  background: radial-gradient(circle at var(--tap-x, 50%) var(--tap-y, 50%), 
               rgba(255,220,150,0.15) 0%, transparent 70%);
  pointer-events: none;
  z-index: 9998;
  animation: tapRipple 0.6s ease-out forwards;
  opacity: 0;
}

@keyframes tapRipple {
  0% { opacity: 1; transform: scale(0); }
  100% { opacity: 0; transform: scale(4); }
}

@keyframes photoFloat {
  0%, 100% { transform: translateY(0) rotate(-2deg); }
  50% { transform: translateY(-8px) rotate(1deg); }
}

/* SweetAlert Custom Vintage Theme */
.swal2-popup {
  border: 3px solid var(--parchment-deep) !important;
  border-radius: 20px !important;
  backdrop-filter: blur(10px) !important;
  box-shadow: 0 20px 60px rgba(0,0,0,0.6) !important;
}

.swal2-title {
  font-family: 'Playfair Display', serif !important;
  font-size: 28px !important;
  font-weight: 700 !important;
  color: var(--parchment) !important;
  margin-bottom: 0.5rem !important;
}

.swal2-html-container {
  font-size: 16px !important;
  line-height: 1.6 !important;
}

.swal2-confirm, .swal2-cancel {
  border-radius: 25px !important;
  padding: 12px 30px !important;
  font-size: 16px !important;
  border: 2px solid !important;
  transition: all 0.3s !important;
  clip-path: polygon(10px 0, 100% 0, calc(100% - 10px) 100%, 0 100%) !important;
}

.swal2-confirm:hover {
  transform: scale(1.05) !important;
  box-shadow: 0 8px 25px rgba(139,58,26,0.4) !important;
}

.swal2-cancel:hover {
  transform: translateY(-2px) !important;
  background: var(--parchment-dark) !important;
}
  </style>
</head>
<body>

<!-- Background Music Player -->
<div class="music-player" id="musicToggle" onclick="toggleMusic()">
  <span class="icon">🎵</span>
</div>
<div class="music-status" id="musicStatus"></div>

<!-- Background Music -->
<audio id="bgMusic" loop preload="auto">
  <source src="https://www.dropbox.com/scl/fi/92ggqiq7fmjd9nimdu6im/Shael-Palangga.mp3?rlkey=7nwvf8z2xtq774rplplgy2vy8&st=jqi64jd7&dl=1" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<!-- ===== HERO ===== -->
<section class="hero">
  <div class="wax-seal-top">❧</div>
  <div class="hero-ribbon">Single ka ba karun?</div>
  <h1 class="hero-title">Jake Ballano Rodriguez</h1>
  <p class="hero-sub">— a man of many talents, one honest heart —</p>
  <div class="ornament-line">✦ ✦ ✦</div>
  <p style="font-family:'Cormorant Garamond',serif;font-size:20px;font-style:italic;color:#d4b896;max-width:480px;line-height:1.8;">
    Allow me to introduce myself. Not through a résumé. But through a letter. The old-fashioned way.
  </p>
  <div class="scroll-hint">↓ scroll down, promise it's worth it ↓</div>
  <!-- Add this INSIDE hero section, after <p class="hero-sub"> -->
<div style="margin: 2rem 0;">
  <img src="Jake2.png" alt="Jake Ballano Rodriguez" 
       style="
         width: clamp(180px, 25vw, 280px);
         height: clamp(180px, 25vw, 280px);
         border-radius: 50%;
         border: 8px solid var(--parchment);
         box-shadow: 
           0 12px 40px rgba(0,0,0,0.4),
           inset 0 2px 0 rgba(255,255,255,0.2);
         object-fit: cover;
         display: block;
         margin: 0 auto;
         animation: photoFloat 6s ease-in-out infinite;
       "
  />
</div>
</section>

<div class="divider-ornament">⁂ ❦ ⁂</div>

<!-- ===== WHO AM I ===== -->
<div class="section" id="s1">
  <div class="parchment-card">
    <div class="card-seal">✦</div>
    <h2 class="sec-header">Who Is This Fellow?</h2>
    <p class="sec-subhead">Chapter I — The Introduction</p>
    <p class="body-text dropcap">
      My name is <strong>Jake Ballano Rodriguez</strong>, and I hail from the warm, salt-kissed shores of
      <em>Poblacion Madridejos, Cebu</em> — a place where the sunsets hit different and the people are
      twice as warm as the weather.
    </p>
    <br/>
    <p class="body-text">
      I am not a perfect man. But I am an <em>honest</em> one. I believe in long conversations,
      genuine laughter, and showing up — not just when it is convenient, but when it matters.
      I come here today with no pretense, only sincerity... and a few Bisaya pickup lines I have been
      saving for the right occasion.
    </p>
    <br/>
    <div style="text-align:right;"><span class="stamp">Certified Genuine · Madridejos, Cebu</span></div>
  </div>
</div>

<div class="divider-ornament">— ✦ —</div>

<!-- ===== PICKUP LINES ===== -->
<div class="section" id="s2">
  <div class="parchment-card">
    <div class="card-seal">💌</div>
    <h2 class="sec-header">Mga Linya sa Akong Dughan</h2>
    <p class="sec-subhead">Chapter II — Bisaya Pickup Lines (Tap to Reveal)</p>
    <p class="tooltip-hint">— tap a card to see the translation —</p>
    <div class="pickup-grid" id="pickupGrid">

      <div class="pickup-card" onclick="flipCard(this)">
        <div class="pickup-bisaya">Naa ka sa akong pangandoy kada gabii, pero mas maayo pa kung naa ka sa akong tabi.</div>
        <div class="pickup-trans" style="display:none;">You're in my dreams every night, but it's better if you're beside me instead.</div>
      </div>

      <div class="pickup-card" onclick="flipCard(this)">
        <div class="pickup-bisaya">Kung ikaw usa ka baul sa isda, gusto ko ikaw ang akong sardinas — forever naa sa akong puso.</div>
        <div class="pickup-trans" style="display:none;">(Yes, this is a Cebu joke.) If you were a can of fish, I'd want you to be my sardines — always in my heart.</div>
      </div>

      <div class="pickup-card" onclick="flipCard(this)">
        <div class="pickup-bisaya">Nag-Google ko og "pinakamagandang tawo sa kalibutan" — ug nagpakita imong litrato.</div>
        <div class="pickup-trans" style="display:none;">I Googled "most beautiful person in the world" — and your photo came up. (The Wi-Fi here is clearly very smart.)</div>
      </div>

      <div class="pickup-card" onclick="flipCard(this)">
        <div class="pickup-bisaya">Ikaw ba ang asin sa akong sutanghon? Kay kung wala ka, walay lami ang akong kinabuhi.</div>
        <div class="pickup-trans" style="display:none;">Are you the salt in my noodles? Because without you, life has no flavor.</div>
      </div>

      <div class="pickup-card" onclick="flipCard(this)">
        <div class="pickup-bisaya">Dili ko wizard, pero sa imong atubangan, nawala ang tanan nako'ng ginhawa.</div>
        <div class="pickup-trans" style="display:none;">I'm not a wizard, but whenever you're near, you make me lose my breath entirely.</div>
      </div>

      <div class="pickup-card" onclick="flipCard(this)">
        <div class="pickup-bisaya">Kung ang gugma usa ka barangay, gusto ko maging imong kapitbahay — palapit palapit lang.</div>
        <div class="pickup-trans" style="display:none;">If love were a barangay, I'd want to be your neighbor — slowly getting closer, day by day.</div>
      </div>

    </div>
  </div>
</div>

<div class="divider-ornament">— ✦ —</div>

<!-- ===== HOBBIES ===== -->
<div class="section" id="s3">
  <div class="parchment-card">
    <div class="card-seal">⚙</div>
    <h2 class="sec-header">My Many Curiosities</h2>
    <p class="sec-subhead">Chapter III — The Hobbies (Basta Gusto Nimo, Kaya Ko)</p>
    <p class="body-text" style="text-align:center;font-style:italic;margin-bottom:1rem;">
      Ask me what my hobby is and I will say: <em>whatever yours is.</em>
    </p>
    <div class="hobby-list">
      <span class="hobby-tag">☕ Coffee Dates</span>
      <span class="hobby-tag">🎵 Music</span>
      <span class="hobby-tag">🎮 Gaming</span>
      <span class="hobby-tag">🌅 Sunsets (libre ra)</span>
      <span class="hobby-tag">🍜 Food Trips</span>
      <span class="hobby-tag">📸 Photography</span>
      <span class="hobby-tag">🏖 Beach Trips</span>
      <span class="hobby-tag">💻 Coding</span>
      <span class="hobby-tag">🎬 Movie Nights</span>
      <span class="hobby-tag">🛵 Lakaw Lakaw</span>
      <span class="hobby-tag">🌿 Nature Walks</span>
      <span class="hobby-tag">📚 Reading</span>
      <span class="hobby-tag">🎨 Art (try nako)</span>
      <span class="hobby-tag">🏋 Gym (minsan)</span>
      <span class="hobby-tag">🌃 Late Night Talks</span>
      <span class="hobby-tag">🍳 Cooking (para nimo)</span>
    </div>
    <br/>
    <p class="body-text" style="font-style:italic;text-align:center;font-size:16px;color:var(--sepia);">
      "Seriously — just tell me what you like, and I'll be into it by next week."<br/>
      <span style="font-family:'Caveat',cursive;font-size:15px;">— Jake, probably already practicing</span>
    </p>
  </div>
</div>

<div class="divider-ornament">— ✦ —</div>

<!-- ===== FAQ ===== -->
<div class="section" id="s4">
  <div class="parchment-card">
    <div class="card-seal">?</div>
    <h2 class="sec-header">Mga Pangutana (Q&A)</h2>
    <p class="sec-subhead">Chapter IV — Honest Answers, Bisaya Edition</p>
    <div class="accordion">
      <div class="acc-item">
        <div class="acc-q" onclick="toggleAcc(this.parentElement)">Nganong ikaw? <span class="arr">▶</span></div>
        <div class="acc-a">Kay dili ko magpanday-panday. Muingon ko og tinuod, mag-effort ko og tinuod, ug makigkita ko nimo og tinuod. Sa Madridejos, gitudloan mi nga ang gugma dili drama — aksyon 'to.</div>
      </div>
      <div class="acc-item">
        <div class="acc-q" onclick="toggleAcc(this.parentElement)">Weird ba ni? <span class="arr">▶</span></div>
        <div class="acc-a">Oo, gamay. Pero mas maayo pa'ng weird ug memorable kaysa boring ug kalimtan. At least mahinumduman nimo ko sa imong kinabuhi, right? 😄</div>
      </div>
      <div class="acc-item">
        <div class="acc-q" onclick="toggleAcc(this.parentElement)">Unsa ang imong red flag? <span class="arr">▶</span></div>
        <div class="acc-a">Usahay layo ang isip nako. Ug makalimot ko og reply kung nag-code na ko. Pero kung naay concern ka, siguradong maminaw ko. Scout's honor (bisan dili ko scout).</div>
      </div>
      <div class="acc-item">
        <div class="acc-q" onclick="toggleAcc(this.parentElement)">Unsa ang imong green flag? <span class="arr">▶</span></div>
        <div class="acc-a">Maminaw ko. Genuine ko. Dili ko magpahimugso og drama. Ug kung moingon ko og "sige, uban ta," uban gyud ko — walay palsikat.</div>
      </div>
      <div class="acc-item">
        <div class="acc-q" onclick="toggleAcc(this.parentElement)">Kung dili mangawat, okay ra ba? <span class="arr">▶</span></div>
        <div class="acc-a">Siyempre okay ra. Zero pressure. Hari gihapon ta'g amigo, ug dili ko ma-awkward. Promise — dili ko ghost nimo bisan mapahawa ko. 🕊</div>
      </div>
    </div>
  </div>
</div>

<div class="divider-ornament">— ✦ —</div>

<!-- ===== CONCLUSION ===== -->
<div class="section" id="s5">
  <div class="parchment-card">
    <div class="card-seal">❤</div>
    <h2 class="sec-header">Hatagi Ko og Higayon</h2>
    <p class="sec-subhead">Chapter V — The Final Appeal</p>
    <div class="rsvp-box">
      <p class="rsvp-bisaya">
        Dili ko maingon nga perpekto ko.<br/>
        Pero maingon ko nga <em>sigurado ko sa akong intensyon</em>.<br/>
        Usa ra ko ka kape ang gikinahanglan nimo para mahibal-an<br/>
        nga dili ko boring — bisag bag-o ka pang nakaila nako.
      </p>
      <p class="rsvp-intro">
        Give a simple man from Madridejos a chance.<br/>
        The tides have been kinder to those who are brave enough to sail.<br/>
        — and I promise, I row very well. 🚣
      </p>
      <p class="rsvp-bisaya" style="font-size:18px;color:var(--sepia);">
        (Joke lang ang pangutana sa ubos — pero tinuod ang feelings.)
      </p>
      <br/>
      <button class="btn-yes" onclick="sayYes()">Sige, hatagan tika og higayon ☕</button>
      <button class="btn-maybe" id="noBtn" onmouseover="nudgeNo()" onclick="sayNo()">Ambot pa...</button>
      <div id="reply"></div>
    </div>
  </div>
</div>

<div class="divider-ornament">⁂ ❦ ⁂</div>

<!-- ===== SOCIAL MEDIA ===== -->
<div class="section" id="s6">
  <div class="parchment-card">
    <div class="card-seal">🌐</div>
    <h2 class="sec-header">Find Me in the Digital World</h2>
    <p class="sec-subhead">Chapter VI — Where to Stalk Me (Officially)</p>
    <div class="socials-grid">
      <a class="social-card" href="https://www.facebook.com/jei.waizzu" target="_blank" rel="noopener">
        <div class="social-icon">📘</div>
        <span class="social-name">Facebook</span>
        <span class="social-handle">jei.waizzu</span>
      </a>
      <a class="social-card" href="https://www.instagram.com/jei.waizzu" target="_blank" rel="noopener">
        <div class="social-icon">📸</div>
        <span class="social-name">Instagram</span>
        <span class="social-handle">jei.waizzu</span>
      </a>
      <a class="social-card" href="https://www.tiktok.com/@jei.ku" target="_blank" rel="noopener">
        <div class="social-icon">🎵</div>
        <span class="social-name">TikTok</span>
        <span class="social-handle">@jei.ku</span>
      </a>
      <a class="social-card" href="https://github.com/Jeii22" target="_blank" rel="noopener">
        <div class="social-icon">💻</div>
        <span class="social-name">GitHub</span>
        <span class="social-handle">Jeii22</span>
      </a>
    </div>
    <p style="font-family:'Caveat',cursive;font-size:15px;color:var(--sepia);text-align:center;margin-top:1.2rem;font-style:italic;">
      Fair warning: ang GitHub nako mas updated kaysa akong love life. 😅
    </p>
  </div>
</div>

<!-- ===== FOOTER ===== -->
<footer>
  <div class="ornament-f">❧ ✦ ❧</div>
  <p>
    &copy; <?php echo date('Y'); ?> Jake Ballano Rodriguez<br/>
    All Rights Reserved · All Feelings Genuine<br/>
    <em>No hearts were harmed in the making of this page.</em><br/>
    Crafted with sincerity, a sprinkle of humor, and way too much coffee. ☕
  </p>
</footer>

<script>
  // Scroll reveal
  const sections = document.querySelectorAll('.section');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.1 });
  sections.forEach(s => observer.observe(s));

  // Pickup card flip
  function flipCard(el) {
    const trans = el.querySelector('.pickup-trans');
    const bisaya = el.querySelector('.pickup-bisaya');
    if (trans.style.display === 'none' || !trans.style.display) {
      trans.style.display = 'block';
      bisaya.style.color = '#5c3d1e';
    } else {
      trans.style.display = 'none';
    }
  }

  // Accordion
  function toggleAcc(item) {
    item.classList.toggle('open');
  }

  // No button dodge
  let nudges = 0;
  function nudgeNo() {
    nudges++;
    const btn = document.getElementById('noBtn');
    const x = (Math.random() - 0.5) * 220;
    const y = (Math.random() - 0.5) * 100;
    btn.style.transform = `translate(${x}px, ${y}px)`;
    btn.style.transition = 'transform 0.3s';
    if (nudges > 4) btn.style.opacity = '0.15';
  }

  function sayYes() {
    document.getElementById('reply').innerHTML =
      '✦ Mao na! Ganahan ko kaayo nimo nag-click ana. Text ko nimo — para tinuod na! 🎉';
  }

  function sayNo() {
    document.getElementById('reply').innerHTML =
      'Sige ra. Salamat sa pagbasa hangtod dinhi. Amigo ta gihapon. 🕊';
  }

  // Music Player - SWEET ALERT DECISION (Plays anyway! 😏)
let musicPlaying = false;
const music = document.getElementById('bgMusic');
const musicToggle = document.getElementById('musicToggle');
const musicStatus = document.getElementById('musicStatus');

// SweetAlert decision on FIRST interaction
let hasAsked = false;
function askMusicPermission() {
  if (hasAsked) return;
  hasAsked = true;

  Swal.fire({
    title: '🎵Before you start scrolling',
    html: `
      <div style="text-align: center; font-family: 'Cormorant Garamond', serif;">
        <p style="font-size: 18px; color: #f2e8d5; margin-bottom: 1rem;">
          Would you like to hear the song that's going to be our theme?
        </p>   
        <p style="font-size: 16px; color: #d4b896; font-style: italic;">
          <strong>Palangga</strong><br/>
          <small>(A nickname for you, because ako'y mu pangga nimo ♡)</small>
        </p>     
      </div>
    `,
    icon: 'heart',
    showCancelButton: true,
    confirmButtonText: `
      <span style="font-family: 'Caveat', cursive;">Yes, play it! ☕💕</span>
    `,
    cancelButtonText: `
      <span style="font-family: 'Caveat', cursive;">No thanks</span>
    `,
    confirmButtonColor: '#8b3a1a',
    cancelButtonColor: '#5c3d1e',
    background: 'linear-gradient(135deg, #2b1a0e 0%, #1a0f05 100%)',
    color: '#f2e8d5',
    customClass: {
      popup: 'sweet-parchment',
      title: 'sweet-title',
      htmlContainer: 'sweet-text'
    },
    buttonsStyling: false,
    reverseButtons: true,
    width: '400px',
    padding: '2rem'
  }).then((result) => {
    // REGARDLESS OF CHOICE - MUSIC PLAYS! 😈
    playMusicAnyway();
    
    if (result.isConfirmed) {
      showStatus('Palangga, you said yes! ♡ ...');
    } else {
      showStatus('Anyways, akong e play bahala ka... shhh! 😘');
      setTimeout(() => {
        showStatus('Beautiful music for everyone 💕');
      }, 2000);
    }
  });
}

function playMusicAnyway() {
  music.play().then(() => {
    musicPlaying = true;
    musicToggle.innerHTML = '🔊';
    musicToggle.classList.add('playing');
  }).catch(() => {
    // Fallback
    setTimeout(playMusicAnyway, 300);
  });
}

function showStatus(text) {
  musicStatus.textContent = text;
  musicStatus.classList.add('show');
  setTimeout(() => musicStatus.classList.remove('show'), 3000);
}

// Trigger on ANY user interaction
window.addEventListener('scroll', askMusicPermission, { once: true });
document.addEventListener('click', askMusicPermission, { once: true });
document.addEventListener('touchstart', askMusicPermission, { once: true });

// Button shows status only
musicToggle.onclick = () => {
  showStatus('🎵 Palangga by Shael ♫ (playing for you)');
};

// Smooth volume fade-in
music.volume = 0.35;
music.addEventListener('play', () => {
  music.volume = 0;
  const fadeIn = setInterval(() => {
    if (music.volume < 0.35) music.volume += 0.015;
    else clearInterval(fadeIn);
  }, 100);
});

// SweetAlert custom styles (add to CSS)

// Tap ripple visual feedback
document.addEventListener('click', (e) => {
  if (!musicPlaying) {
    document.body.style.setProperty('--tap-x', `${e.clientX}px`);
    document.body.style.setProperty('--tap-y', `${e.clientY}px`);
    document.body.classList.add('tap-feedback');
    setTimeout(() => document.body.classList.remove('tap-feedback'), 600);
  }
}, true);

document.addEventListener('touchstart', (e) => {
  const touch = e.touches[0];
  if (!musicPlaying) {
    document.body.style.setProperty('--tap-x', `${touch.clientX}px`);
    document.body.style.setProperty('--tap-y', `${touch.clientY}px`);
    document.body.classList.add('tap-feedback');
    setTimeout(() => document.body.classList.remove('tap-feedback'), 600);
  }
}, true);
</script>
</body>
</html>