<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gain Work Experience - Quantum Link</title>
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

        .experience-grid {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem; margin-top: 2rem;
        }
        .exp-card {
            background: #fff; border-radius: 12px; padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border-left: 4px solid #00d4ff;
            transition: transform 0.3s;
        }
        .exp-card:hover { transform: translateY(-4px); }
        .exp-card h3 { color: #1a1a2e; margin-bottom: 0.6rem; font-size: 1.3rem; }
        .exp-card .tag {
            display: inline-block; background: #e0f7ff; color: #0077b6;
            padding: 0.25rem 0.8rem; border-radius: 20px; font-size: 0.85rem;
            margin-bottom: 0.8rem; font-weight: 600;
        }
        .exp-card p { color: #666; margin-bottom: 1rem; }
        .exp-card ul { list-style: disc; padding-left: 1.2rem; color: #555; margin-bottom: 1rem; }
        .exp-card a { color: #0077b6; font-weight: 600; text-decoration: none; }
        .exp-card a:hover { text-decoration: underline; }

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
                <li><a href="work-experience.html" class="active">Work Experience</a></li>
                <li><a href="practical-skills.html">Practical Skills</a></li>
                <li><a href="career-guidance.html">Career Guidance</a></li>
                <li><a href="employment-resources.html">Employment Resources</a></li>
            </ul>
        </nav>
    </header>

    <section class="page-banner">
        <h1>Gain <span>Work Experience</span></h1>
        <p>Discover real-world internships, micro-placements, and project-based roles tailored to elevate your portfolio and kickstart your career.</p>
    </section>

    <section class="section">
        <h2 class="section-title" style="margin-bottom:0.5rem;">Opportunity Types</h2>
        <p class="section-subtitle">Choose the path that fits your goals and schedule</p>

        <div class="experience-grid">
            <!-- Internships -->
            <div class="exp-card">
                <span class="tag">Internships</span>
                <h3>Full & Part-Time Internships</h3>
                <p>Immerse yourself in a professional environment and learn from industry leaders. Our partnered companies offer structured internship programs across multiple sectors.</p>
                <ul>
                    <li>8–12 week programs available</li>
                    <li>Paid and unpaid options</li>
                    <li>Fields: Tech, Marketing, Finance, Design, and more</li>
                    <li>Certificate of completion provided</li>
                </ul>
                <a href="#">View Available Internships →</a>
            </div>

            <!-- Micro-Placements -->
            <div class="exp-card">
                <span class="tag">Micro-Placements</span>
                <h3>Short-Term Placements</h3>
                <p>Perfect for students and career-changers who want focused, bite-sized experience. Complete meaningful projects in just 2–4 weeks.</p>
                <ul>
                    <li>2–4 week commitments</li>
                    <li>Flexible remote or on-site options</li>
                    <li>Real deliverables for your portfolio</li>
                    <li>Direct mentor feedback included</li>
                </ul>
                <a href="#">Browse Micro-Placements →</a>
            </div>

            <!-- Project-Based Roles -->
            <div class="exp-card">
                <span class="tag">Project Roles</span>
                <h3>Project-Based Work</h3>
                <p>Work on specific, well-defined projects that challenge your skills and produce tangible results. Great for freelancers and self-motivated learners.</p>
                <ul>
                    <li>Project durations: 1–8 weeks</li>
                    <li>Scope defined by employer needs</li>
                    <li>Build portfolio-ready deliverables</li>
                    <li>Networking with hiring managers</li>
                </ul>
                <a href="#">Explore Project Roles →</a>
            </div>

            <!-- Virtual Experience -->
            <div class="exp-card">
                <span class="tag">Virtual</span>
                <h3>Remote Experience Programs</h3>
                <p>Gain experience from anywhere in the world. Our remote programs connect you with global companies looking for talent like you.</p>
                <ul>
                    <li>100% remote flexibility</li>
                    <li>Collaborate with international teams</li>
                    <li>Develop remote-work competencies</li>
                    <li>Digital badge upon completion</li>
                </ul>
                <a href="#">Find Remote Roles →</a>
            </div>

            <!-- Shadowing -->
            <div class="exp-card">
                <span class="tag">Job Shadowing</span>
                <h3>Industry Shadowing</h3>
                <p>Spend a day or a week observing professionals in your field of interest. Gain insights into daily workflows, company culture, and career trajectories.</p>
                <ul>
                    <li>1–5 day shadowing sessions</li>
                    <li>Interactive Q&A with professionals</li>
                    <li>Exposure to real workplace environments</li>
                    <li>Reflective journaling toolkit provided</li>
                </ul>
                <a href="#">See Shadowing Opportunities →</a>
            </div>

            <!-- Apprenticeships -->
            <div class="exp-card">
                <span class="tag">Apprenticeships</span>
                <h3>Learn & Earn Apprenticeships</h3>
                <p>Combine classroom learning with paid on-the-job training. Build a skill set that employers value while earning an income.</p>
                <ul>
                    <li>6–12 month programs</li>
                    <li>Competitive stipend or salary</li>
                    <li>Pathway to full-time employment</li>
                    <li>Industry-recognized certification</li>
                </ul>
                <a href="#">View Apprenticeships →</a>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-section">
            <h2>Ready to Gain Real-World Experience?</h2>
            <p>Create your free profile today and get matched with opportunities that align with your skills and ambitions.</p>
            <a href="#" class="cta-btn">Create Your Profile</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Quantum Link. All rights reserved. | <a href="index.html">Back to Home</a></p>
    </footer>

</body>
</html>