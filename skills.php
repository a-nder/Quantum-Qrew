<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical Skills - Quantum Link</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; line-height: 1.6; }

        header {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            color: #fff; padding: 1rem 2rem;
            position: sticky; top: 0; z-index: 100;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        nav { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.6rem; font-weight: 700; letter-spacing: 1px; }
        .logo span { color: #00d4ff; }
        nav ul { list-style: none; display: flex; gap: 2rem; }
        nav ul li a { color: #ccc; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        nav ul li a:hover, nav ul li a.active { color: #00d4ff; }

        .page-banner {
            background: linear-gradient(135deg, #0f3460, #1a1a2e);
            color: #fff; text-align: center; padding: 4rem 2rem;
        }
        .page-banner h1 { font-size: 2.5rem; margin-bottom: 0.5rem; }
        .page-banner h1 span { color: #00d4ff; }
        .page-banner p { color: #bbb; font-size: 1.1rem; max-width: 650px; margin: 0 auto; }

        .section { max-width: 1200px; margin: 0 auto; padding: 4rem 2rem; }

        .skills-categories { margin-top: 2rem; }
        .skill-category {
            background: #fff; border-radius: 12px; padding: 2rem;
            margin-bottom: 1.5rem; box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .skill-category h3 {
            color: #1a1a2e; font-size: 1.3rem; margin-bottom: 0.8rem;
            display: flex; align-items: center; gap: 0.5rem;
        }
        .skill-category h3 .icon { font-size: 1.5rem; }
        .skill-tags { display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 1rem; }
        .skill-tag {
            background: #e0f7ff; color: #0077b6; padding: 0.3rem 0.9rem;
            border-radius: 20px; font-size: 0.9rem; font-weight: 500;
        }
        .skill-tag.highlight { background: #00d4ff; color: #1a1a2e; }
        .skill-category p { color: #666; margin-bottom: 0.8rem; }
        .skill-link { color: #0077b6; font-weight: 600; text-decoration: none; }
        .skill-link:hover { text-decoration: underline; }

        .stats-bar {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem; margin: 3rem 0;
        }
        .stat {
            text-align: center; padding: 1.5rem;
            background: linear-gradient(135deg, #f0f9ff, #e0f7ff);
            border-radius: 12px;
        }
        .stat .number { font-size: 2.5rem; font-weight: 700; color: #0077b6; }
        .stat .label { color: #555; font-size: 0.95rem; margin-top: 0.3rem; }

        .cta-section {
            background: linear-gradient(135deg, #0f3460, #16213e);
            color: #fff; text-align: center; padding: 3rem 2rem;
            border-radius: 12px; margin-top: 3rem;
        }
        .cta-section h2 { margin-bottom: 1rem; }
        .cta-section p { color: #bbb; margin-bottom: 1.5rem; max-width: 600px; margin-left: auto; margin-right: auto; }
        .cta-btn {
            display: inline-block; padding: 0.8rem 2.2rem;
            background: #00d4ff; color: #1a1a2e; text-decoration: none;
            border-radius: 50px; font-weight: 700; font-size: 1.05rem;
            transition: background 0.3s;
        }
        .cta-btn:hover { background: #00b8d9; }

        footer {
            background: #1a1a2e; color: #aaa; text-align: center;
            padding: 2rem; margin-top: 2rem;
        }
        footer a { color: #00d4ff; text-decoration: none; }
    </style>
</head>
<body>

    <header>
        <nav>
            <div class="logo">QUANTUM <span>LINK</span></div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="work-experience.html">Work Experience</a></li>
                <li><a href="practical-skills.html" class="active">Practical Skills</a></li>
                <li><a href="career-guidance.html">Career Guidance</a></li>
                <li><a href="employment-resources.html">Employment Resources</a></li>
            </ul>
        </nav>
    </header>

    <section class="page-banner">
        <h1>Practical <span>Skills</span></h1>
        <p>Master in-demand skills through hands-on workshops, online courses, and industry-certified training programs designed to make you job-ready.</p>
    </section>

    <section class="section">
        <!-- Stats -->
        <div class="stats-bar">
            <div class="stat">
                <div class="number">50+</div>
                <div class="label">Skill Courses Available</div>
            </div>
            <div class="stat">
                <div class="number">12K</div>
                <div class="label">Learners Enrolled</div>
            </div>
            <div class="stat">
                <div class="number">95%</div>
                <div class="label">Completion Rate</div>
            </div>
            <div class="stat">
                <div class="number">4.8★</div>
                <div class="label">Average Rating</div>
            </div>
        </div>

        <!-- Skill Categories -->
        <h2 class="section-title" style="margin-bottom:0.5rem;">Skill Categories</h2>
        <p class="section-subtitle">Build the competencies employers are looking for</p>

        <div class="skills-categories">
            <div class="skill-category">
                <h3><span class="icon">💻</span> Digital & Technical Skills</h3>
                <div class="skill-tags">
                    <span class="skill-tag highlight">Web Development</span>
                    <span class="skill-tag">Data Analysis</span>
                    <span class="skill-tag">Cybersecurity Basics</span>
                    <span class="skill-tag">Cloud Computing</span>
                    <span class="skill-tag">AI & Machine Learning</span>
                    <span class="skill-tag">Excel & Spreadsheets</span>
                </div>
                <p>From coding fundamentals to data literacy, these courses give you the technical foundation modern employers expect. Learn at your own pace with guided projects.</p>
                <a href="#" class="skill-link">View Digital Skills Courses →</a>
            </div>

            <div class="skill-category">
                <h3><span class="icon">🤝</span> Professional & Soft Skills</h3>
                <div class="skill-tags">
                    <span class="skill-tag highlight">Communication</span>
                    <span class="skill-tag">Teamwork</span>
                    <span class="skill-tag">Leadership</span>
                    <span class="skill-tag">Problem Solving</span>
                    <span class="skill-tag">Time Management</span>
                    <span class="skill-tag">Emotional Intelligence</span>
                </div>
                <p>Soft skills are the differentiator in every job interview. Develop the interpersonal abilities that set top performers apart from the rest.</p>
                <a href="#" class="skill-link">View Soft Skills Workshops →</a>
            </div>

            <div class="skill-category">
                <h3><span class="icon">📊</span> Business & Financial Literacy</h3>
                <div class="skill-tags">
                    <span class="skill-tag highlight">Marketing</span>
                    <span class="skill-tag">Project Management</span>
                    <span class="skill-tag">Budgeting</span>
                    <span class="skill-tag">Negotiation</span>
                    <span class="skill-tag">Customer Relations</span>
                </div>
                <p>Understand how businesses operate, manage projects effectively, and communicate value. These skills are transferable across every industry.</p>
                <a href="#" class="skill-link">View Business Skills →</a>
            </div>

            <div class="skill-category">
                <h3><span class="icon">🎨</span> Creative & Design Skills</h3>
                <div class="skill-tags">
                    <span class="skill-tag highlight">Graphic Design</span>
                    <span class="skill-tag">UI/UX Design</span>
                    <span class="skill-tag">Video Editing</span>
                    <span class="skill-tag">Content Creation</span>
                    <span class="skill-tag">Copywriting</span>
                </div>
                <p>Express your creative side with tools and techniques used by professionals. Build a portfolio that showcases your unique talents to potential employers.</p>
                <a href="#" class="skill-link">View Creative Skills →</a>
            </div>

            <div class="skill-category">
                <h3><span class="icon">📝</span> Career Readiness Skills</h3>
                <div class="skill-tags">
                    <span class="skill-tag highlight">Resume Writing</span>
                    <span class="skill-tag">Interview Prep</span>
                    <span class="skill-tag">LinkedIn Optimization</span>
                    <span class="skill-tag">Personal Branding</span>
                    <span class="skill-tag">Networking</span>
                </div>
                <p>Master the art of presenting yourself to employers. From crafting a standout resume to acing your next interview — everything you need to land the role.</p>
                <a href="#" class="skill-link">View Career Readiness →</a>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-section">
            <h2>Start Building Your Skill Set Today</h2>
            <p>Access free introductory modules or enrol in full certification courses. Your future career starts with one skill at a time.</p>
            <a href="#" class="cta-btn">Browse All Courses</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Quantum Link. All rights reserved. | <a href="index.html">Back to Home</a></p>
    </footer>

</body>
</html>