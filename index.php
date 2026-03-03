<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jake Rodriguez | The Notebook</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Special+Elite&family=Patrick+Hand&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --paper-bg: #f4f1ea;
            --paper-line: #e8e4d9;
            --ink-color: #2c3e50;
            --pencil-gray: #5d6d7e;
            --highlight-pink: #ffb7b2;
            --highlight-yellow: #fdfd96;
            --highlight-blue: #a2d2ff;
            --highlight-green: #b9fbc0;
            --coffee-stain: rgba(139, 69, 19, 0.1);
            --tape-color: rgba(255, 255, 255, 0.6);
        }
        
        body {
            font-family: 'Patrick Hand', cursive;
            background: #3e3e3e;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        /* Wood Desk Background */
        .desk-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                repeating-linear-gradient(
                    90deg,
                    #5d4037 0px,
                    #4e342e 2px,
                    #5d4037 4px,
                    #6d4c41 50px
                );
            z-index: -2;
        }
        
        .desk-texture {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, transparent 0%, rgba(0,0,0,0.4) 100%);
            z-index: -1;
        }
        
        /* Notebook Container */
        #notebook {
            max-width: 900px;
            margin: 20px auto;
            background: var(--paper-bg);
            min-height: calc(100vh - 40px);
            position: relative;
            box-shadow: 
                0 0 20px rgba(0,0,0,0.5),
                0 0 60px rgba(0,0,0,0.3);
            transform: rotate(-1deg);
            transition: transform 0.3s;
        }
        
        @media (max-width: 768px) {
            #notebook {
                margin: 10px;
                min-height: calc(100vh - 20px);
                transform: rotate(0deg);
            }
        }
        
        /* Spiral Binding */
        .spiral-binding {
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 20px 0;
            z-index: 10;
        }
        
        .spiral-ring {
            width: 30px;
            height: 12px;
            border: 3px solid #4a4a4a;
            border-radius: 50%;
            background: linear-gradient(135deg, #666 0%, #333 100%);
            box-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            transform: rotate(-15deg);
        }
        
        @media (max-width: 768px) {
            .spiral-binding {
                left: 10px;
                width: 30px;
            }
            .spiral-ring {
                width: 20px;
                height: 8px;
                border-width: 2px;
            }
        }
        
        /* Paper Lines */
        .paper-content {
            margin-left: 70px;
            padding: 40px;
            background-image: 
                repeating-linear-gradient(
                    transparent,
                    transparent 31px,
                    #94acd4 31px,
                    #94acd4 32px
                );
            background-size: 100% 32px;
            min-height: 100%;
            position: relative;
        }
        
        @media (max-width: 768px) {
            .paper-content {
                margin-left: 45px;
                padding: 20px 15px;
                background-size: 100% 28px;
            }
        }
        
        /* Coffee Stains */
        .coffee-stain {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, transparent 40%, var(--coffee-stain) 45%, transparent 70%);
            pointer-events: none;
        }
        
        .stain-1 {
            width: 150px;
            height: 150px;
            top: 10%;
            right: 10%;
            transform: rotate(45deg);
        }
        
        .stain-2 {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 5%;
            transform: rotate(-30deg);
        }
        
        /* Tape Effect */
        .tape {
            position: absolute;
            background: var(--tape-color);
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
            transform: rotate(-2deg);
            backdrop-filter: blur(2px);
        }
        
        .tape-top {
            top: -15px;
            left: 50%;
            transform: translateX(-50%) rotate(-2deg);
            width: 120px;
            height: 35px;
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
        }
        
        /* Launch Overlay */
        #launch-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--paper-bg);
            z-index: 9999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Special Elite', monospace;
        }
        
        .handwritten-launch {
            font-family: 'Caveat', cursive;
            font-size: 2rem;
            color: var(--ink-color);
            margin: 10px 0;
            opacity: 0;
            animation: writeIn 0.5s forwards;
        }
        
        @keyframes writeIn {
            to { opacity: 1; }
        }
        
        .pencil-progress {
            width: 200px;
            height: 4px;
            background: var(--paper-line);
            margin-top: 30px;
            position: relative;
            overflow: hidden;
            border-radius: 2px;
        }
        
        .pencil-fill {
            height: 100%;
            background: var(--pencil-gray);
            width: 0%;
            animation: scribble 3s ease-out forwards;
            box-shadow: 0 0 5px var(--pencil-gray);
        }
        
        @keyframes scribble {
            0% { width: 0%; }
            100% { width: 100%; }
        }
        
        /* Page Content */
        .page {
            display: none;
            animation: pageTurn 0.6s ease-out;
        }
        
        .page.active {
            display: block;
        }
        
        @keyframes pageTurn {
            from {
                opacity: 0;
                transform: rotateY(-10deg);
            }
            to {
                opacity: 1;
                transform: rotateY(0);
            }
        }
        
        /* Typography */
        h1 {
            font-family: 'Caveat', cursive;
            font-size: 3.5rem;
            color: var(--ink-color);
            margin-bottom: 10px;
            line-height: 1.2;
            text-align: center;
            transform: rotate(-1deg);
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
        }
        
        h2 {
            font-family: 'Caveat', cursive;
            font-size: 2.5rem;
            color: var(--ink-color);
            margin: 30px 0 20px;
            border-bottom: 3px double var(--ink-color);
            display: inline-block;
            padding-bottom: 5px;
            transform: rotate(-1deg);
        }
        
        @media (max-width: 768px) {
            h2 {
                font-size: 1.8rem;
            }
        }
        
        .date-stamp {
            font-family: 'Special Elite', monospace;
            font-size: 0.9rem;
            color: var(--pencil-gray);
            text-align: right;
            margin-bottom: 20px;
            transform: rotate(1deg);
        }
        
        /* Profile Photo with Polaroid Style */
        .polaroid-container {
            display: flex;
            justify-content: center;
            margin: 30px 0;
            transform: rotate(3deg);
        }
        
        .polaroid {
            background: white;
            padding: 15px 15px 40px 15px;
            box-shadow: 3px 3px 10px rgba(0,0,0,0.2);
            position: relative;
            max-width: 280px;
        }
        
        @media (max-width: 768px) {
            .polaroid {
                max-width: 220px;
                padding: 10px 10px 30px 10px;
            }
        }
        
        .polaroid-img {
            width: 100%;
            height: auto;
            display: block;
            filter: sepia(20%) contrast(1.1);
            border: 1px solid #ddd;
        }
        
        .polaroid-caption {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            text-align: center;
            font-family: 'Caveat', cursive;
            font-size: 1.3rem;
            color: var(--ink-color);
        }
        
        /* Sticky Notes */
        .sticky-note {
            background: var(--highlight-yellow);
            padding: 20px;
            margin: 20px 0;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
            transform: rotate(-2deg);
            position: relative;
            font-size: 1.2rem;
            line-height: 1.6;
        }
        
        .sticky-note.pink {
            background: var(--highlight-pink);
            transform: rotate(2deg);
        }
        
        .sticky-note.blue {
            background: var(--highlight-blue);
            transform: rotate(-1deg);
        }
        
        .sticky-note.green {
            background: var(--highlight-green);
            transform: rotate(1deg);
        }
        
        /* Capabilities - Sketch Style */
        .sketch-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin: 20px 0;
        }
        
        @media (max-width: 768px) {
            .sketch-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .sketch-item {
            border: 2px solid var(--ink-color);
            border-radius: 255px 15px 225px 15px / 15px 225px 15px 255px;
            padding: 15px;
            position: relative;
            background: rgba(255,255,255,0.5);
        }
        
        .sketch-item::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border: 2px solid var(--ink-color);
            border-radius: 255px 15px 225px 15px / 15px 225px 15px 255px;
            opacity: 0.3;
            pointer-events: none;
        }
        
        .sketch-icon {
            font-size: 2rem;
            margin-bottom: 5px;
        }
        
        .sketch-title {
            font-family: 'Caveat', cursive;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--ink-color);
            margin-bottom: 5px;
        }
        
        /* Checklist Style */
        .checklist {
            list-style: none;
            padding: 0;
        }
        
        .checklist li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 15px;
            font-size: 1.2rem;
            line-height: 1.5;
        }
        
        .checklist li::before {
            content: '☐';
            position: absolute;
            left: 0;
            font-size: 1.4rem;
            color: var(--pencil-gray);
        }
        
        .checklist li.checked::before {
            content: '☑';
            color: var(--ink-color);
        }
        
        /* Bisaya Quote Box */
        .quote-box {
            background: rgba(255,255,255,0.7);
            border-left: 4px solid var(--ink-color);
            padding: 20px;
            margin: 20px 0;
            font-family: 'Caveat', cursive;
            font-size: 1.5rem;
            position: relative;
            transform: rotate(-1deg);
        }
        
        .quote-box::before {
            content: '"';
            font-size: 4rem;
            position: absolute;
            top: -20px;
            left: 10px;
            color: var(--pencil-gray);
            opacity: 0.3;
            font-family: Georgia, serif;
        }
        
        .translation {
            font-family: 'Patrick Hand', cursive;
            font-size: 1rem;
            color: var(--pencil-gray);
            margin-top: 10px;
            font-style: italic;
        }
        
        /* GIF Containers */
        .gif-sticker {
            display: inline-block;
            margin: 10px;
            border: 3px solid white;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
            transform: rotate(-3deg);
            background: white;
            padding: 5px;
            max-width: 200px;
        }
        
        .gif-sticker img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .gif-sticker:nth-child(even) {
            transform: rotate(3deg);
        }
        
        @media (max-width: 768px) {
            .gif-sticker {
                max-width: 150px;
            }
        }
        
        /* QR Code Section */
        .qr-wrapper {
            text-align: center;
            margin: 30px 0;
            position: relative;
        }
        
        .qr-note {
            background: white;
            display: inline-block;
            padding: 20px;
            box-shadow: 3px 3px 10px rgba(0,0,0,0.1);
            transform: rotate(-2deg);
            border: 1px solid #ddd;
        }
        
        .handwritten-url {
            font-family: 'Caveat', cursive;
            font-size: 1.3rem;
            margin-top: 10px;
            color: var(--ink-color);
        }
        
        /* Navigation */
        .page-nav {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            gap: 15px;
            z-index: 100;
        }
        
        @media (max-width: 768px) {
            .page-nav {
                bottom: 20px;
                right: 20px;
                left: 20px;
                justify-content: space-between;
            }
        }
        
        .nav-btn {
            background: var(--paper-bg);
            border: 2px solid var(--ink-color);
            padding: 12px 24px;
            font-family: 'Patrick Hand', cursive;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 3px 3px 0 var(--ink-color);
            transition: all 0.2s;
            border-radius: 255px 15px 225px 15px / 15px 225px 15px 255px;
        }
        
        @media (max-width: 768px) {
            .nav-btn {
                padding: 15px 30px;
                font-size: 1.2rem;
            }
        }
        
        .nav-btn:active {
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0 var(--ink-color);
        }
        
        .nav-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        /* Page Corner */
        .page-corner {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, transparent 50%, rgba(0,0,0,0.1) 50%);
            pointer-events: none;
        }
        
        /* Paper Clip */
        .paper-clip {
            position: absolute;
            top: 20px;
            right: 40px;
            width: 40px;
            height: 100px;
            border: 3px solid #c0c0c0;
            border-radius: 0 0 20px 20px;
            border-top: none;
            transform: rotate(-10deg);
            opacity: 0.6;
        }
        
        @media (max-width: 768px) {
            .paper-clip {
                right: 20px;
                width: 30px;
                height: 80px;
            }
        }
        
        /* Doodle Decorations */
        .doodle {
            position: absolute;
            pointer-events: none;
            opacity: 0.3;
        }
        
        .heart-doodle {
            font-size: 2rem;
            color: var(--highlight-pink);
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(5deg); }
        }
        
        /* Mobile Touch Areas */
        .touch-zone {
            position: fixed;
            top: 0;
            bottom: 0;
            width: 20%;
            z-index: 50;
            cursor: pointer;
        }
        
        .touch-zone.left {
            left: 0;
        }
        
        .touch-zone.right {
            right: 0;
        }
        
        @media (min-width: 769px) {
            .touch-zone {
                display: none;
            }
        }
        
        /* Page Number */
        .page-number {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Special Elite', monospace;
            color: var(--pencil-gray);
            font-size: 0.9rem;
        }
        
        /* Highlight Marker Effect */
        .marker {
            background: linear-gradient(120deg, var(--highlight-yellow) 0%, var(--highlight-yellow) 100%);
            background-repeat: no-repeat;
            background-size: 100% 40%;
            background-position: 0 88%;
            padding: 0 5px;
        }
        
        /* Washi Tape */
        .washi-tape {
            position: absolute;
            height: 30px;
            opacity: 0.7;
            transform: rotate(-2deg);
        }
        
        .tape-1 {
            top: -10px;
            left: 30%;
            width: 100px;
            background: repeating-linear-gradient(
                90deg,
                #ff9999,
                #ff9999 10px,
                #ffcccc 10px,
                #ffcccc 20px
            );
        }
    </style>
</head>
<body>
    <div class="desk-bg"></div>
    <div class="desk-texture"></div>
    
    <!-- Launch Overlay -->
    <div id="launch-overlay">
        <div class="handwritten-launch" style="animation-delay: 0.2s">Opening Notebook...</div>
        <div class="handwritten-launch" style="animation-delay: 0.7s">Sharpening Pencil...</div>
        <div class="handwritten-launch" style="animation-delay: 1.2s">Adding Coffee Stains...</div>
        <div class="pencil-progress">
            <div class="pencil-fill"></div>
        </div>
        <div class="handwritten-launch" style="animation-delay: 2.5s; margin-top: 20px;">Ready!</div>
    </div>
    
    <!-- Touch Zones for Mobile -->
    <div class="touch-zone left" onclick="prevPage()"></div>
    <div class="touch-zone right" onclick="nextPage()"></div>
    
    <!-- Notebook -->
    <div id="notebook">
        <div class="tape tape-top"></div>
        <div class="spiral-binding">
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
            <div class="spiral-ring"></div>
        </div>
        
        <div class="paper-content">
            <div class="coffee-stain stain-1"></div>
            <div class="coffee-stain stain-2"></div>
            <div class="paper-clip"></div>
            
            <!-- Page 1: Cover/Intro -->
            <div class="page active" data-page="1">
                <div class="date-stamp">Date: Today ♥</div>
                
                <div style="text-align: center; margin-top: 40px;">
                    <div class="washi-tape tape-1"></div>
                    <h1>Dear Future Girlfriend,</h1>
                    
                    <div class="polaroid-container">
                        <div class="polaroid">
                            <img src="jake.png" alt="Jake" class="polaroid-img" onerror="this.src='https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZXI2YzZiY3J5ZzRzeTJpdDJ0cWNxZzF3eXJ1aXJ5aXJ5aXJ5aXJ5ZiZjdD1n/3o7TKTDn976rzVgky4/giphy.gif'">
                            <div class="polaroid-caption">Jake Rodriguez ♥</div>
                        </div>
                    </div>
                    
                    <div class="sticky-note pink" style="max-width: 400px; margin: 0 auto;">
                        <strong>Way klaro ang bitoon,</strong><br>
                        pero klaro kaayo ko<br>
                        nga gusto tika.<br>
                        <span style="font-size: 0.9rem; color: var(--pencil-gray);">
                            (The stars aren't clear, but I'm clearly into you)
                        </span>
                    </div>
                    
                    <div style="margin-top: 30px; font-size: 1.3rem;">
                        <span class="marker">Intro kunohay</span>
                    </div>
                    
                    <div class="gif-sticker" style="position: absolute; right: 20px; top: 100px;">
                        <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZXI2YzZiY3J5ZzRzeTJpdDJ0cWNxZzF3eXJ1aXJ5aXJ5aXJ5aXJ5ZiZjdD1n/l378eovFdLNcb8J8Y/giphy.gif" alt="Cute hello">
                    </div>
                </div>
                
                <div class="page-number">- 1 -</div>
                <div class="page-corner"></div>
            </div>
            
            <!-- Page 2: Capabilities -->
            <div class="page" data-page="2">
                <div class="date-stamp">Page 2 of My Heart</div>
                
                <h2>What I Can Do ✓</h2>
                
                <div class="sketch-grid">
                    <div class="sketch-item">
                        <div class="sketch-icon">💻</div>
                        <div class="sketch-title">Code Wizard</div>
                        <div>I build apps, websites, and digital dreams. Your personal tech support for life.</div>
                    </div>
                    <div class="sketch-item">
                        <div class="sketch-icon">💪</div>
                        <div class="sketch-title">Gym Buddy</div>
                        <div>Certified fitness trainer. I'll spot you in the gym and in life.</div>
                    </div>
                    <div class="sketch-item">
                        <div class="sketch-icon">🎙️</div>
                        <div class="sketch-title">Voice Actor</div>
                        <div>I can read you bedtime stories with 20 different voices. Choose your adventure!</div>
                    </div>
                    <div class="sketch-item">
                        <div class="sketch-icon">🎬</div>
                        <div class="sketch-title">Film Actor</div>
                        <div>Drama? Comedy? Action? I perform all genres of romance.</div>
                    </div>
                    <div class="sketch-item">
                        <div class="sketch-icon">🏔️</div>
                        <div class="sketch-title">Adventure Planner</div>
                        <div>Spontaneous road trips? Secret beaches? I'm the map and the compass.</div>
                    </div>
                    <div class="sketch-item">
                        <div class="sketch-icon">🔧</div>
                        <div class="sketch-title">Tech Fixer</div>
                        <div>Phone broken? WiFi down? Consider it done before you finish complaining.</div>
                    </div>
                    <div class="sketch-item">
                        <div class="sketch-icon">👨‍🍳</div>
                        <div class="sketch-title">Chef Mode</div>
                        <div>I cook, you eat. From breakfast in bed to midnight snacks.</div>
                    </div>
                    <div class="sketch-item">
                        <div class="sketch-icon">🧠</div>
                        <div class="sketch-title">Therapist Jake</div>
                        <div>24/7 emotional support. Good listener, advice giver, hug dealer.</div>
                    </div>
                </div>
                
                <div class="quote-box">
                    Dili ko photographer,<br>
                    pero makita nako ang future nato.<br>
                    <div class="translation">I'm not a photographer, but I can picture us together.</div>
                </div>
                
                <div class="gif-sticker" style="float: right; margin-top: -50px;">
                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZXI2YzZiY3J5ZzRzeTJpdDJ0cWNxZzF3eXJ1aXJ5aXJ5aXJ5aXJ5ZiZjdD1n/26FLdmIp98wC8ol44/giphy.gif" alt="Skills">
                </div>
                
                <div class="page-number">- 2 -</div>
                <div class="page-corner"></div>
            </div>
            
            <!-- Page 3: Benefits -->
            <div class="page" data-page="3">
                <div class="date-stamp">The Good Stuff</div>
                
                <h2>Nganong Nindot Ko Kauban ★</h2>
                
                <div class="sticky-note blue">
                    <strong>Adaptive Boyfriend Technology™</strong><br>
                    Automatically mu-adjust sa imohang needs. Bad day? Therapist mode yan. Bored? Aw laag ta sa wala pa na adto. Gutom? Asang kusina? HAHAHA
                </div>
                
                <ul class="checklist">
                    <li class="checked"><span class="marker">Multi-tasking master</span> - makacuddle bisag ga coding</li>
                    <li class="checked"><span class="marker">Zero lag response time</span> - Paspas mu reply kay ikaw akong kalipay</li>
                    <li class="checked"><span class="marker">Unlimited patience</span> - handled ang own code, unsa pa kaha ikaw </li>
                    <li class="checked"><span class="marker">Built-in entertainment</span> - Voice actor + Author = personal Storyteller</li>
                    <li class="checked"><span class="marker">Free tech support for life</span> - Tipid sa technical issues, gastu sa laag</li>
                    <li class="checked"><span class="marker">Personal trainer included</span> - Workout together, para mag work out ta sa future</li>
                </ul>
                
                <div style="display: flex; justify-content: center; flex-wrap: wrap; margin: 20px 0;">
                    <div class="gif-sticker">
                        <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZXI2YzZiY3J5ZzRzeTJpdDJ0cWNxZzF3eXJ1aXJ5aXJ5aXJ5aXJ5ZiZjdD1n/l0HlNQ03J5JxX6lva/giphy.gif" alt="Love">
                    </div>
                    <div class="gif-sticker">
                        <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZXI2YzZiY3J5ZzRzeTJpdDJ0cWNxZzF3eXJ1aXJ5aXJ5aXJ5aXJ5ZiZjdD1n/3o7TKU8RvQuomFfUUU/giphy.gif" alt="Happy">
                    </div>
                </div>
                
                <div class="quote-box" style="background: var(--highlight-green);">
                    Kung gugma pa ang gipangutana,<br>
                    ako ang tubag.<br>
                    <div class="translation">If love is the question, I'm the answer.</div>
                </div>
                
                <div class="page-number">- 3 -</div>
                <div class="page-corner"></div>
            </div>
            
            <!-- Page 4: Why Me -->
            <div class="page" data-page="4">
                <div class="date-stamp">The Real Talk</div>
                
                <h2>Why Me? ♥</h2>
                
                <div class="sticky-note">
                    <strong>The Truth:</strong><br>
                    Di ko perfect. Daghan kog problema. Sometimes I forget where I put my keys. Pero kani akong maikahatag...
                </div>
                
                <div style="text-align: center; margin: 30px 0; padding: 30px; border: 3px double var(--ink-color); background: rgba(255,255,255,0.5); transform: rotate(-1deg);">
                    <p style="font-family: 'Caveat', cursive; font-size: 2rem; line-height: 1.4;">
                        "I am designed to be<br>
                        <span style="color: #e74c3c; font-size: 2.3rem;">whoever you want</span><br>
                        —not by changing myself,<br>
                        but by revealing the perfect version<br>
                        of me that already exists for you.<br>
                        Because I am everything you need"
                    </p>
                </div>
                
                <div class="sketch-grid" style="margin-top: 30px;">
                    <div class="sketch-item" style="background: var(--highlight-pink);">
                        <div class="sketch-title">Compatibility</div>
                        <div>Programmer + Designer + Caregiver + Lover + your Future = I speak all your love languages</div>
                    </div>
                    <div class="sketch-item" style="background: var(--highlight-blue);">
                        <div class="sketch-title">Reliability</div>
                        <div>Murag SafeGuard na sabon, kay naa rako permi 99.99%.</div>
                    </div>
                </div>
                
                <div class="quote-box">
                    Dili ko perfect,<br>
                    pero promise, unique kaayo ang hugs nako.<br>
                    <div class="translation">Este, bugs diay.</div>
                </div>
                
                <div class="gif-sticker" style="position: absolute; right: 10px; bottom: 80px;">
                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZXI2YzZiY3J5ZzRzeTJpdDJ0cWNxZzF3eXJ1aXJ5aXJ5aXJ5aXJ5ZiZjdD1n/26FLdmIp98wC8ol44/giphy.gif" alt="Heart">
                </div>
                
                <div class="page-number">- 4 -</div>
                <div class="page-corner"></div>
            </div>
            
            <!-- Page 5: Contact -->
            <div class="page" data-page="5">
                <div class="date-stamp">Don't Keep Me Waiting...</div>
                
                <h2>Connect With Me ✉</h2>
                
                <div style="text-align: center; margin: 40px 0;">
                    <div class="sticky-note pink" style="display: inline-block; transform: rotate(2deg); max-width: 350px;">
                        <strong>Scan to add me on Facebook!</strong><br>
                        Or type the link below...
                    </div>
                    
                      <div class="qr-wrapper">
                          <div class="qr-note">
                              <!-- QR Code will be generated here -->
                              <div id="qrcode"></div>
                              
                              <div class="handwritten-url">
                                  facebook.com/jei.waizzu
                              </div>
                              
                              <!-- Clickable Facebook Link -->
                              <a href="https://www.facebook.com/jei.waizzu" target="_blank" class="facebook-link" onclick="handleFacebookClick(event)">
                                  👆 Visit My Facebook
                              </a>
                              
                              <div class="tap-hint">Tap edges or use buttons to navigate</div>
                          </div>
                      </div>
                    
                    <div class="gif-sticker" style="margin: 20px auto;">
                        <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZXI2YzZiY3J5ZzRzeTJpdDJ0cWNxZzF3eXJ1aXJ5aXJ5aXJ5aXJ5ZiZjdD1n/l378eovFdLNcb8J8Y/giphy.gif" alt="Waiting">
                    </div>
                    
                    <div class="quote-box" style="background: var(--highlight-yellow); max-width: 400px; margin: 30px auto;">
                        Akong gugma nimo,<br>
                        dili na ma-debug.<br>
                        <div class="translation">Unsa pa may gipaabot nimo?</div>
                    </div>
                    
                    <div style="margin-top: 40px; font-family: 'Caveat', cursive; font-size: 1.8rem; color: var(--pencil-gray);">
                        ~ Jake Rodriguez ♥
                    </div>
                    
                    <div style="margin-top: 20px; font-size: 1.2rem;">
                        P.S. - <span class="marker">Swipe right on life with me?</span>
                    </div>
                </div>
                
                <div class="page-number">- 5 -</div>
                <div class="page-corner"></div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <div class="page-nav">
        <button class="nav-btn" id="prevBtn" onclick="prevPage()">← Back</button>
        <button class="nav-btn" id="nextBtn" onclick="nextPage()">Next →</button>
    </div>
    
    <!-- Background Music -->
    <audio id="bgMusic" loop>
    <source src="shael-palangga.mp3" type="audio/mpeg">
    </audio>


        <button onclick="document.getElementById('bgMusic').play()" 
            style="position: fixed; top: 20px; right: 20px; z-index: 1000;
                  background: #ff6b9d; color: white; border: none; 
                  padding: 10px 20px; border-radius: 20px; font-family: 'Patrick Hand';">
        🎵 Play Music
        </button>

    <script>
        let currentPage = 1;
        const totalPages = 5;
        
        // Launch sequence
        setTimeout(() => {
            document.getElementById('launch-overlay').style.opacity = '0';
            setTimeout(() => {
                document.getElementById('launch-overlay').style.display = 'none';
                // Try to play music
                const music = document.getElementById('bgMusic');
                music.volume = 0.4;
                music.play().catch(e => console.log('Autoplay blocked'));
            }, 500);
        }, 3500);
        
        function updatePage() {
            // Hide all pages
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });
            
            // Show current page
            document.querySelector(`.page[data-page="${currentPage}"]`).classList.add('active');
            
            // Update buttons
            document.getElementById('prevBtn').disabled = currentPage === 1;
            document.getElementById('nextBtn').disabled = currentPage === totalPages;
            
            // Update button text for last page
            if (currentPage === totalPages) {
                document.getElementById('nextBtn').textContent = 'The End ♥';
            } else {
                document.getElementById('nextBtn').textContent = 'Next →';
            }
            
            // Scroll to top
            window.scrollTo(0, 0);
        }
        
        function nextPage() {
            if (currentPage < totalPages) {
                currentPage++;
                updatePage();
            }
        }
        
        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                updatePage();
            }
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight' || e.key === ' ' || e.key === 'Enter' || e.key === 'PageDown') {
                e.preventDefault();
                nextPage();
            } else if (e.key === 'ArrowLeft' || e.key === 'PageUp') {
                e.preventDefault();
                prevPage();
            }
        });
        
        // Touch swipe support
        let touchStartX = 0;
        let touchEndX = 0;
        
        document.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, false);
        
        document.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextPage(); // Swipe left = next
                } else {
                    prevPage(); // Swipe right = previous
                }
            }
        }
        
        // Initialize
        updatePage();
        
        // Add floating hearts randomly
        setInterval(() => {
            if (Math.random() > 0.7) {
                const heart = document.createElement('div');
                heart.className = 'doodle heart-doodle';
                heart.innerHTML = '♥';
                heart.style.left = Math.random() * 100 + '%';
                heart.style.top = Math.random() * 100 + '%';
                heart.style.fontSize = (Math.random() * 20 + 10) + 'px';
                document.querySelector('.page.active').appendChild(heart);
                
                setTimeout(() => heart.remove(), 3000);
            }
        }, 2000);
    </script>
</body>
</html>