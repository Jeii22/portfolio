<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>A Letter for You — Jake</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Caveat&family=Cormorant+Garamond&display=swap" rel="stylesheet">

<style>
body {
  margin:0;
  background:#1a0f05;
  font-family:'Cormorant Garamond', serif;
  color:#f2e8d5;
  text-align:center;
}

/* HERO */
.hero {
  height:100vh;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
}

/* WAX SEAL */
.wax-seal-top {
  width:80px;
  height:80px;
  background:#8b1a1a;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:30px;
  cursor:pointer;
  transition:0.3s;
}
.wax-seal-top:hover {
  transform:scale(1.1);
}

/* TEXT */
h1 {
  font-size:3rem;
  margin:20px 0 10px;
}
p {
  max-width:500px;
  line-height:1.6;
}

/* BUTTON */
.music-btn {
  margin-top:20px;
  padding:10px 25px;
  cursor:pointer;
}
</style>
</head>

<body>

<!-- 🎵 MUSIC -->
<audio id="bgMusic" loop preload="auto">
  <source src="https://dl.dropboxusercontent.com/scl/fi/92ggqiq7fmjd9nimdu6im/Shael-Palangga.mp3" type="audio/mpeg">
</audio>

<!-- HERO -->
<section class="hero">
  <div class="wax-seal-top" onclick="startMusic()">❧</div>
  <h1>Jake Ballano Rodriguez</h1>
  <p>Allow me to introduce myself... not through a résumé, but through a letter.</p>

  <button class="music-btn" onclick="toggleMusic()" id="musicBtn">
    🎵 Play Music
  </button>
</section>

<script>

/* ======================
   🎵 MUSIC SYSTEM
====================== */

const music = document.getElementById("bgMusic");
const btn = document.getElementById("musicBtn");

let isPlaying = false;

// Fade in
function fadeIn() {
  let vol = 0;
  music.volume = 0;

  const fade = setInterval(() => {
    if (vol < 0.3) {
      vol += 0.02;
      music.volume = vol;
    } else {
      clearInterval(fade);
    }
  }, 200);
}

// Start via wax seal
function startMusic() {
  if (!isPlaying) {
    music.play().then(() => {
      fadeIn();
      isPlaying = true;
      btn.textContent = "🔊 Pause Music";
    }).catch(() => {});
  }
}

// Toggle button
function toggleMusic() {
  if (isPlaying) {
    music.pause();
    btn.textContent = "🎵 Play Music";
    isPlaying = false;
  } else {
    music.play().then(() => {
      fadeIn();
      isPlaying = true;
      btn.textContent = "🔊 Pause Music";
    });
  }
}

// Autoplay attempt
window.addEventListener("load", () => {
  music.play().then(() => {
    fadeIn();
    isPlaying = true;
    btn.textContent = "🔊 Pause Music";
  }).catch(() => {
    enableInteraction();
  });
});

// Fallback (first interaction)
function enableInteraction() {
  const start = () => {
    music.play();
    fadeIn();
    isPlaying = true;
    btn.textContent = "🔊 Pause Music";

    document.removeEventListener("click", start);
    document.removeEventListener("scroll", start);
    document.removeEventListener("keydown", start);
  };

  document.addEventListener("click", start);
  document.addEventListener("scroll", start);
  document.addEventListener("keydown", start);
}

</script>

</body>
</html>