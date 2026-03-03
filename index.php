<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jake Rodriguez | Next-Gen Companion Interface</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --neon-cyan: #00f5ff;
            --neon-purple: #bc13fe;
            --neon-amber: #ffb347;
            --dark-bg: #0a0a0f;
            --panel-bg: rgba(20, 20, 30, 0.8);
            --vintage-gold: #d4af37;
            --matrix-green: #00ff41;
        }
        
        body {
            font-family: 'Rajdhani', sans-serif;
            background: var(--dark-bg);
            color: #fff;
            overflow: hidden;
            position: relative;
        }
        
        /* Scanline Effect */
        .scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                to bottom,
                rgba(255,255,255,0),
                rgba(255,255,255,0) 50%,
                rgba(0,0,0,0.2) 50%,
                rgba(0,0,0,0.2)
            );
            background-size: 100% 4px;
            pointer-events: none;
            z-index: 1000;
            opacity: 0.3;
        }
        
        /* Background Animation */
        .bg-grid {
            position: fixed;
            top: 0;
            left: 0;
            width: 200%;
            height: 200%;
            background-image: 
                linear-gradient(rgba(0, 245, 255, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 245, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
            z-index: -2;
        }
        
        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-50px, -50px); }
        }
        
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: var(--neon-cyan);
            border-radius: 50%;
            animation: float 10s infinite;
            opacity: 0.6;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) rotate(720deg); opacity: 0; }
        }
        
        /* Launch Sequence */
        #launch-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 1s ease-out;
        }
        
        .launch-text {
            font-family: 'Orbitron', monospace;
            font-size: 1.5rem;
            color: var(--neon-cyan);
            text-transform: uppercase;
            letter-spacing: 0.5em;
            margin: 10px 0;
            opacity: 0;
            animation: flicker 2s infinite;
        }
        
        .launch-bar {
            width: 300px;
            height: 4px;
            background: rgba(0, 245, 255, 0.2);
            margin-top: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .launch-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--neon-cyan), var(--neon-purple));
            width: 0%;
            animation: loadProgress 4s ease-out forwards;
            box-shadow: 0 0 20px var(--neon-cyan);
        }
        
        @keyframes loadProgress {
            0% { width: 0%; }
            100% { width: 100%; }
        }
        
        @keyframes flicker {
            0%, 100% { opacity: 1; text-shadow: 0 0 10px var(--neon-cyan); }
            50% { opacity: 0.3; text-shadow: none; }
        }
        
        /* Main Container */
        #presentation {
            width: 100vw;
            height: 100vh;
            position: relative;
            display: none;
        }
        
        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            background: radial-gradient(ellipse at center, rgba(20,20,40,0.9) 0%, rgba(10,10,15,1) 100%);
        }
        
        .slide.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide.prev {
            transform: translateX(-100%);
        }
        
        /* Typography */
        h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 4rem;
            font-weight: 900;
            text-transform: uppercase;
            background: linear-gradient(135deg, var(--neon-cyan), var(--neon-purple), var(--vintage-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(0, 245, 255, 0.5);
            margin-bottom: 20px;
            letter-spacing: 0.1em;
            animation: titleGlow 3s ease-in-out infinite;
        }
        
        @keyframes titleGlow {
            0%, 100% { filter: hue-rotate(0deg); }
            50% { filter: hue-rotate(30deg); }
        }
        
        h2 {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            color: var(--neon-amber);
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            text-shadow: 0 0 20px rgba(255, 179, 71, 0.5);
        }
        
        .subtitle {
            font-size: 1.5rem;
            color: var(--neon-cyan);
            letter-spacing: 0.3em;
            margin-bottom: 40px;
            text-transform: uppercase;
        }
        
        /* Profile Section */
        .profile-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 30px 0;
        }
        
        .profile-frame {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 3px solid var(--neon-cyan);
            border-radius: 50%;
            animation: rotate 10s linear infinite;
            box-shadow: 
                0 0 30px rgba(0, 245, 255, 0.5),
                inset 0 0 30px rgba(0, 245, 255, 0.2);
        }
        
        .profile-frame::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 2px solid var(--neon-purple);
            border-radius: 50%;
            animation: rotate 15s linear infinite reverse;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .profile-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            position: relative;
            z-index: 1;
            border: 4px solid rgba(0, 245, 255, 0.3);
        }
        
        /* Capabilities Grid */
        .capabilities-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: 40px 0;
        }
        
        .capability-card {
            background: var(--panel-bg);
            border: 2px solid var(--neon-cyan);
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            cursor: pointer;
            clip-path: polygon(10% 0, 100% 0, 100% 90%, 90% 100%, 0 100%, 0 10%);
        }
        
        .capability-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 40px rgba(0, 245, 255, 0.4);
            border-color: var(--neon-amber);
        }
        
        .capability-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, var(--neon-cyan), var(--neon-purple), var(--neon-amber));
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .capability-card:hover::before {
            opacity: 1;
        }
        
        .capability-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            display: block;
        }
        
        .capability-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2rem;
            color: var(--neon-cyan);
            margin-bottom: 10px;
        }
        
        .capability-desc {
            font-size: 0.9rem;
            color: #aaa;
            line-height: 1.4;
        }
        
        /* Benefits Section */
        .benefits-container {
            display: flex;
            gap: 40px;
            max-width: 1000px;
            align-items: center;
        }
        
        .benefit-item {
            flex: 1;
            background: rgba(0, 245, 255, 0.1);
            border-left: 4px solid var(--neon-cyan);
            padding: 30px;
            position: relative;
            transform: skewX(-5deg);
        }
        
        .benefit-item:nth-child(2) {
            border-left-color: var(--neon-purple);
            background: rgba(188, 19, 254, 0.1);
        }
        
        .benefit-item:nth-child(3) {
            border-left-color: var(--neon-amber);
            background: rgba(255, 179, 71, 0.1);
        }
        
        .benefit-text {
            transform: skewX(5deg);
            font-size: 1.3rem;
            line-height: 1.6;
        }
        
        .highlight {
            color: var(--neon-cyan);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        
        /* Bisaya Pickup Lines */
        .pickup-container {
            background: rgba(0, 0, 0, 0.6);
            border: 2px solid var(--vintage-gold);
            padding: 40px;
            max-width: 800px;
            text-align: center;
            position: relative;
            margin: 30px 0;
        }
        
        .pickup-line {
            font-size: 2rem;
            color: var(--vintage-gold);
            font-style: italic;
            margin-bottom: 20px;
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
            animation: typewriter 3s steps(40) 1s 1 normal both;
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid var(--vintage-gold);
        }
        
        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }
        
        .pickup-translation {
            font-size: 1.2rem;
            color: var(--neon-cyan);
            opacity: 0.8;
        }
        
        /* QR Section */
        .qr-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin: 30px 0;
            box-shadow: 0 0 30px rgba(0, 245, 255, 0.5);
        }
        
        .qr-code {
            width: 200px;
            height: 200px;
            background: 
                linear-gradient(45deg, #000 25%, transparent 25%), 
                linear-gradient(-45deg, #000 25%, transparent 25%), 
                linear-gradient(45deg, transparent 75%, #000 75%), 
                linear-gradient(-45deg, transparent 75%, #000 75%);
            background-size: 20px 20px;
            background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
            position: relative;
        }
        
        .qr-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            color: #000;
            background: white;
            padding: 5px;
            font-family: monospace;
        }
        
        /* Progress Bar */
        .progress-container {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 3px;
            overflow: hidden;
            z-index: 100;
        }
        
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--neon-cyan), var(--neon-purple), var(--neon-amber));
            width: 0%;
            transition: width 0.5s ease;
            box-shadow: 0 0 10px var(--neon-cyan);
        }
        
        /* Navigation */
        .nav-hint {
            position: fixed;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            z-index: 101;
        }
        
        .arrow-keys {
            display: inline-block;
            margin: 0 10px;
            color: var(--neon-cyan);
        }
        
        /* Slide Counter */
        .slide-counter {
            position: fixed;
            top: 30px;
            right: 30px;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2rem;
            color: var(--neon-cyan);
            z-index: 100;
        }
        
        /* GIF Placeholders */
        .gif-container {
            width: 200px;
            height: 200px;
            border: 2px dashed var(--neon-cyan);
            margin: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--neon-cyan);
            font-size: 0.9rem;
            text-align: center;
            opacity: 0.7;
        }
        
        /* Glitch Effect */
        .glitch {
            position: relative;
            animation: glitch 1s linear infinite;
        }
        
        @keyframes glitch {
            2%, 64% { transform: translate(2px,0) skew(0deg); }
            4%, 60% { transform: translate(-2px,0) skew(0deg); }
            62% { transform: translate(0,0) skew(5deg); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            h2 { font-size: 1.8rem; }
            .capabilities-grid { grid-template-columns: repeat(2, 1fr); }
            .benefits-container { flex-direction: column; }
        }
        
        /* Audio Visualizer Bars */
        .audio-viz {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            gap: 3px;
            z-index: 100;
        }
        
        .viz-bar {
            width: 4px;
            height: 20px;
            background: var(--neon-cyan);
            animation: vizPulse 0.5s ease-in-out infinite;
        }
        
        .viz-bar:nth-child(2) { animation-delay: 0.1s; background: var(--neon-purple); }
        .viz-bar:nth-child(3) { animation-delay: 0.2s; background: var(--neon-amber); }
        .viz-bar:nth-child(4) { animation-delay: 0.3s; }
        .viz-bar:nth-child(5) { animation-delay: 0.4s; background: var(--neon-purple); }
        
        @keyframes vizPulse {
            0%, 100% { height: 10px; }
            50% { height: 30px; }
        }
        
        .now-playing {
            position: fixed;
            top: 55px;
            left: 30px;
            font-size: 0.8rem;
            color: var(--neon-cyan);
            z-index: 100;
            font-family: 'Orbitron', sans-serif;
        }
    </style>
</head>
<body>
    <div class="scanlines"></div>
    <div class="bg-grid"></div>
    <div class="particles" id="particles"></div>
    
    <!-- Audio Visualizer -->
    <div class="audio-viz">
        <div class="viz-bar"></div>
        <div class="viz-bar"></div>
        <div class="viz-bar"></div>
        <div class="viz-bar"></div>
        <div class="viz-bar"></div>
    </div>
    <div class="now-playing">▶ SHAEL - PALANGGA</div>
    
    <!-- Launch Sequence -->
    <div id="launch-screen">
        <div class="launch-text" style="animation-delay: 0s">Initializing...</div>
        <div class="launch-text" style="animation-delay: 0.5s">Loading Profile...</div>
        <div class="launch-text" style="animation-delay: 1s">Calibrating Charm...</div>
        <div class="launch-text" style="animation-delay: 1.5s">Optimizing Rizal...</div>
        <div class="launch-bar">
            <div class="launch-progress"></div>
        </div>
        <div class="launch-text" style="animation-delay: 2s; margin-top: 20px; font-size: 1rem;">SYSTEM READY</div>
    </div>
    
    <!-- Background Music -->
    <audio id="bgMusic" loop>
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
        <!-- Replace with actual Shael - Palangga file -->
    </audio>
    
    <!-- Main Presentation -->
    <div id="presentation">
        <!-- Slide 1: Intro -->
        <div class="slide active" data-slide="1">
            <div class="subtitle">/// SYSTEM.ID: JAKE-RODRIGUEZ ///</div>
            <h1 class="glitch">Jake Rodriguez</h1>
            <div class="profile-container">
                <div class="profile-frame"></div>
                <img src="jake.png" alt="Jake Rodriguez" class="profile-img" onerror="this.src='https://via.placeholder.com/300/0a0a0f/00f5ff?text=JAKE'">
            </div>
            <div class="pickup-container" style="max-width: 600px; margin-top: 30px;">
                <div class="pickup-line">Way klaro ang bitoon</div>
                <div class="pickup-translation"> pero klaro kaayo ko nga gusto tika</div>
            </div>
            <p style="margin-top: 20px; color: var(--neon-amber); font-size: 1.2rem; letter-spacing: 0.2em;">NEXT-GEN COMPANION INTERFACE v2.0</p>
        </div>
        
        <!-- Slide 2: Capabilities -->
        <div class="slide" data-slide="2">
            <h2>/// Core Capabilities ///</h2>
            <div class="capabilities-grid">
                <div class="capability-card">
                    <span class="capability-icon">💻</span>
                    <div class="capability-title">Code Architect</div>
                    <div class="capability-desc">Full-stack developer. I can build apps, fix bugs, and hack life.</div>
                </div>
                <div class="capability-card">
                    <span class="capability-icon">💪</span>
                    <div class="capability-title">Fitness Trainer</div>
                    <div class="capability-desc">Your personal gains partner. Gym dates included.</div>
                </div>
                <div class="capability-card">
                    <span class="capability-icon">🎙️</span>
                    <div class="capability-title">Voice Actor</div>
                    <div class="capability-desc">I can narrate our love story with cinematic depth.</div>
                </div>
                <div class="capability-card">
                    <span class="capability-icon">🎬</span>
                    <div class="capability-title">Film Actor</div>
                    <div class="capability-desc">Drama? Comedy? I perform all genres of romance.</div>
                </div>
                <div class="capability-card">
                    <span class="capability-icon">🏔️</span>
                    <div class="capability-title">Adventure Planner</div>
                    <div class="capability-desc">Spontaneous trips? Secret spots? I got the map.</div>
                </div>
                <div class="capability-card">
                    <span class="capability-icon">🔧</span>
                    <div class="capability-title">Tech Fixer</div>
                    <div class="capability-desc">Phone broken? WiFi down? Consider it handled.</div>
                </div>
                <div class="capability-card">
                    <span class="capability-icon">👨‍🍳</span>
                    <div class="capability-title">Master Chef</div>
                    <div class="capability-desc">I cook, you eat. Date nights at home = gourmet.</div>
                </div>
                <div class="capability-card">
                    <span class="capability-icon">🧠</span>
                    <div class="capability-title">Personal Therapist</div>
                    <div class="capability-desc">24/7 emotional support. No subscription needed.</div>
                </div>
            </div>
            <div class="pickup-container" style="margin-top: 30px; padding: 20px;">
                <div class="pickup-line" style="font-size: 1.5rem; animation: none; border: none;">"Dili ko photographer, pero makita nako ang future nato."</div>
                <div class="pickup-translation">"I'm not a photographer, but I can picture us together."</div>
            </div>
        </div>
        
        <!-- Slide 3: Benefits -->
        <div class="slide" data-slide="3">
            <h2>/// Relationship Benefits ///</h2>
            <div class="benefits-container">
                <div class="benefit-item">
                    <div class="benefit-text">
                        <span class="highlight">Adaptive AI</span><br>
                        I evolve to be exactly who you need. Your preferences? Downloaded. Your love language? Configured.
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-text">
                        <span class="highlight">Multi-Threading</span><br>
                        I can code, cook, and cuddle simultaneously. Maximum efficiency in boyfriend operations.
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-text">
                        <span class="highlight">No Lag</span><br>
                        Instant replies. Zero buffering. My attention is always on you, not my phone (unless I'm fixing yours).
                    </div>
                </div>
            </div>
            
            <div style="display: flex; margin-top: 40px; gap: 30px; align-items: center;">
                <div class="gif-container">
                    [Insert Fun GIF 1]<br>
                    <small style="color: var(--neon-purple);">e.g., Cyberpunk dancing</small>
                </div>
                <div style="text-align: center; max-width: 400px;">
                    <p style="font-size: 1.3rem; color: var(--neon-amber); margin-bottom: 20px;">
                        "Dating me is like having a Swiss Army Knife, but make it romantic."
                    </p>
                    <div class="pickup-line" style="font-size: 1.2rem; animation: none; border: none; white-space: normal;">
                        "Kung gugma pa ang gipangutana, ako ang tubag."
                    </div>
                    <div class="pickup-translation" style="font-size: 1rem;">
                        "If love is the question, I'm the answer."
                    </div>
                </div>
                <div class="gif-container">
                    [Insert Fun GIF 2]<br>
                    <small style="color: var(--neon-purple);">e.g., Heart eyes cyberpunk</small>
                </div>
            </div>
        </div>
        
        <!-- Slide 4: Why Me -->
        <div class="slide" data-slide="4">
            <h2>/// Why Choose This Model? ///</h2>
            <div style="max-width: 900px; text-align: center;">
                <div style="background: rgba(0,0,0,0.5); border: 2px solid var(--neon-cyan); padding: 40px; margin: 20px 0; position: relative;">
                    <div style="position: absolute; top: -15px; left: 20px; background: var(--dark-bg); padding: 0 20px; color: var(--neon-cyan); font-family: 'Orbitron', sans-serif;">
                        UNIQUE SELLING POINT
                    </div>
                    <p style="font-size: 1.8rem; line-height: 1.6; color: #fff;">
                        "I am designed to be <span style="color: var(--neon-amber); text-transform: uppercase; font-weight: 700;">whoever she wants</span>—not by changing myself, but by revealing the perfect version of me that already exists for her."
                    </p>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 40px;">
                    <div style="text-align: left; padding: 20px; border-left: 3px solid var(--neon-purple);">
                        <h3 style="color: var(--neon-purple); margin-bottom: 10px; font-family: 'Orbitron';">COMPATIBILITY</h3>
                        <p>Programmer + Creative + Athlete + Caregiver. I speak all your languages.</p>
                    </div>
                    <div style="text-align: left; padding: 20px; border-left: 3px solid var(--neon-cyan);">
                        <h3 style="color: var(--neon-cyan); margin-bottom: 10px; font-family: 'Orbitron';">UPTIME</h3>
                        <p>99.9% reliability. I'm there for the debugs and the deployments of life.</p>
                    </div>
                    <div style="text-align: left; padding: 20px; border-left: 3px solid var(--neon-amber);">
                        <h3 style="color: var(--neon-amber); margin-bottom: 10px; font-family: 'Orbitron';">FLEXIBILITY</h3>
                        <p>From Netflix chill to mountain thrills. I compile to your environment.</p>
                    </div>
                    <div style="text-align: left; padding: 20px; border-left: 3px solid var(--vintage-gold);">
                        <h3 style="color: var(--vintage-gold); margin-bottom: 10px; font-family: 'Orbitron';">SECURITY</h3>
                        <p>Encrypted loyalty. Your data (heart) is safe with me. No leaks, ever.</p>
                    </div>
                </div>
                
                <div class="pickup-container" style="margin-top: 40px;">
                    <div class="pickup-line">"Dili ko perfect, pero promise, unique kaayo ang bugs nako."</div>
                    <div class="pickup-translation">"I'm not perfect, but I promise my bugs are one of a kind."</div>
                </div>
            </div>
        </div>
        
        <!-- Slide 5: Contact/CTA -->
        <div class="slide" data-slide="5">
            <h2>/// Establish Connection ///</h2>
            <div style="text-align: center;">
                <p style="font-size: 1.5rem; color: var(--neon-cyan); margin-bottom: 30px; letter-spacing: 0.2em;">
                    SCAN TO INITIALIZE DIRECT MESSAGE PROTOCOL
                </p>
                
                <div class="qr-container">
                    <div style="width: 200px; height: 200px; background: white; display: flex; align-items: center; justify-content: center; position: relative;">
                        <!-- Simulated QR Code Pattern -->
                        <div style="width: 180px; height: 180px; background: 
                            repeating-linear-gradient(0deg, #000 0px, #000 10px, transparent 10px, transparent 20px),
                            repeating-linear-gradient(90deg, #000 0px, #000 10px, transparent 10px, transparent 20px);">
                        </div>
                        <div style="position: absolute; background: white; padding: 10px; font-size: 0.7rem; color: #000; font-family: monospace; border: 2px solid #000;">
                            facebook.com/jei.waizzu
                        </div>
                    </div>
                </div>
                
                <p style="margin-top: 20px; color: var(--neon-amber); font-size: 1.2rem;">
                    OR VISIT: <span style="color: var(--neon-cyan); text-decoration: underline;">www.facebook.com/jei.waizzu</span>
                </p>
                
                <div style="margin-top: 40px; padding: 30px; border: 2px solid var(--neon-purple); background: rgba(188, 19, 254, 0.1); max-width: 600px;">
                    <div class="pickup-line" style="font-size: 2rem; margin-bottom: 10px;">"Ahong gugma nimo, dili na ma-debug."</div>
                    <div class="pickup-translation" style="font-size: 1.3rem;">"My love for you has no bugs to fix."</div>
                </div>
                
                <div style="margin-top: 30px; font-size: 1rem; color: rgba(255,255,255,0.5);">
                    <p>// END OF PRESENTATION</p>
                    <p style="margin-top: 10px; color: var(--neon-cyan);">Ready to compile our story together?</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>
    
    <!-- Navigation Hint -->
    <div class="nav-hint">
        <span class="arrow-keys">←</span> NAVIGATE <span class="arrow-keys">→</span> | <span class="arrow-keys">SPACE</span> ADVANCE
    </div>
    
    <!-- Slide Counter -->
    <div class="slide-counter">
        <span id="currentSlide">01</span> / <span id="totalSlides">05</span>
    </div>

    <script>
        // Generate particles
        const particlesContainer = document.getElementById('particles');
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 10 + 's';
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
            particlesContainer.appendChild(particle);
        }
        
        // Launch sequence
        setTimeout(() => {
            document.getElementById('launch-screen').style.opacity = '0';
            setTimeout(() => {
                document.getElementById('launch-screen').style.display = 'none';
                document.getElementById('presentation').style.display = 'block';
                // Try to play music (browsers may block autoplay)
                const music = document.getElementById('bgMusic');
                music.volume = 0.3;
                music.play().catch(e => console.log('Audio autoplay blocked'));
            }, 1000);
        }, 4000);
        
        // Slide management
        let currentSlide = 1;
        const totalSlides = 5;
        const slides = document.querySelectorAll('.slide');
        const progressBar = document.getElementById('progressBar');
        const currentSlideEl = document.getElementById('currentSlide');
        
        function updateSlide() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active', 'prev');
                if (index + 1 === currentSlide) {
                    slide.classList.add('active');
                } else if (index + 1 < currentSlide) {
                    slide.classList.add('prev');
                }
            });
            
            // Update progress
            const progress = ((currentSlide - 1) / (totalSlides - 1)) * 100;
            progressBar.style.width = progress + '%';
            currentSlideEl.textContent = currentSlide.toString().padStart(2, '0');
        }
        
        function nextSlide() {
            if (currentSlide < totalSlides) {
                currentSlide++;
                updateSlide();
            }
        }
        
        function prevSlide() {
            if (currentSlide > 1) {
                currentSlide--;
                updateSlide();
            }
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight' || e.key === ' ' || e.key === 'Enter') {
                e.preventDefault();
                nextSlide();
            } else if (e.key === 'ArrowLeft') {
                e.preventDefault();
                prevSlide();
            }
        });
        
        // Click navigation
        document.addEventListener('click', (e) => {
            const x = e.clientX / window.innerWidth;
            if (x > 0.7) {
                nextSlide();
            } else if (x < 0.3) {
                prevSlide();
            }
        });
        
        // Touch support
        let touchStartX = 0;
        document.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
        });
        
        document.addEventListener('touchend', (e) => {
            const touchEndX = e.changedTouches[0].clientX;
            const diff = touchStartX - touchEndX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) nextSlide();
                else prevSlide();
            }
        });
        
        // Initialize
        updateSlide();
        
        // Random glitch effect on title occasionally
        setInterval(() => {
            const glitchElements = document.querySelectorAll('.glitch');
            glitchElements.forEach(el => {
                el.style.animation = 'none';
                setTimeout(() => {
                    el.style.animation = 'glitch 1s linear infinite';
                }, 10);
            });
        }, 5000);
    </script>
</body>
</html>