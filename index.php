<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantum Link - Career Development Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
        }

        /* ── Header / Nav ── */
        header {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            color: #fff;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.6rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .logo span {
            color: #00d4ff;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        nav ul li a {
            color: #ccc;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: #00d4ff;
        }

        /* ── Hero ── */
        .hero {
            background: linear-gradient(135deg, #0f3460, #1a1a2e);
            color: #fff;
            text-align: center;
            padding: 6rem 2rem;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero h1 span {
            color: #00d4ff;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            color: #bbb;
        }

        .hero-btn {
            display: inline-block;
            padding: 0.9rem 2.5rem;
            background: #00d4ff;
            color: #1a1a2e;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: background 0.3s, transform 0.3s;
        }

        .hero-btn:hover {
            background: #00b8d9;
            transform: translateY(-2px);
        }

        /* ── Cards Section ── */
        .section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: #1a1a2e;
        }

        .section-subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 2rem;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 4px solid #00d4ff;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .card h3 {
            margin-bottom: 0.8rem;
            color: #1a1a2e;
        }

        .card p {
            color: #666;
            margin-bottom: 1.2rem;
        }

        .card-btn {
            display: inline-block;
            padding: 0.6rem 1.6rem;
            border: 2px solid #00d4ff;
            color: #00d4ff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .card-btn:hover {
            background: #00d4ff;
            color: #1a1a2e;
        }

        /* ── Footer ── */
        footer {
            background: #1a1a2e;
            color: #aaa;
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
        }

        footer a {
            color: #00d4ff;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- ── Navigation ── -->
    <header>
        <nav>
            <div class="logo">QUANTUM <span>LINK</span></div>
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="work-experience.html">Work Experience</a></li>
                <li><a href="practical-skills.html">Practical Skills</a></li>
                <li><a href="career-guidance.html">Career Guidance</a></li>
                <li><a href="employment-resources.html">Employment Resources</a></li>
            </ul>
        </nav>
    </header>

    <!-- ── Hero ── -->
    <section class="hero">
        <h1>Welcome to <span>Quantum Link</span></h1>
        <p>Your portal to fast-tracking your career development and professional success. Gain real-world experience, build practical skills, and access expert guidance.</p>
        <a href="work-experience.html" class="hero-btn">Get Started →</a>
    </section>

    <!-- ── What We Offer ── -->
    <section class="section">
        <h2 class="section-title">What We Offer</h2>
        <p class="section-subtitle">Everything you need to accelerate your professional journey</p>
        <div class="cards">
            <div class="card">
                <div class="card-icon">💼</div>
                <h3>Gain Work Experience</h3>
                <p>Discover real-world internships, micro-placements, and project-based roles tailored to elevate your portfolio.</p>
                <a href="work-experience.html" class="card-btn">Explore</a>
            </div>
            <div class="card">
                <div class="card-icon">🛠️</div>
                <h3>Practical Skills</h3>
                <p>Master in-demand skills through hands-on workshops, online courses, and industry-certified training programs.</p>
                <a href="practical-skills.html" class="card-btn">Explore</a>
            </div>
            <div class="card">
                <div class="card-icon">🧭</div>
                <h3>Career Guidance</h3>
                <p>Get personalized advice from industry mentors who help you navigate your career path with confidence.</p>
                <a href="career-guidance.html" class="card-btn">Explore</a>
            </div>
            <div class="card">
                <div class="card-icon">📋</div>
                <h3>Employment Resources</h3>
                <p>Access job boards, application templates, interview prep tools, and everything you need to land your dream role.</p>
                <a href="employment-resources.html" class="card-btn">Explore</a>
            </div>
        </div>
    </section>

    <!-- ── Footer ── -->
    <footer>
        <p>&copy; 2026 Quantum Link. All rights reserved. | <a href="index.html">Back to Home</a></p>
    </footer>

</body>
</html>