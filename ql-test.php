<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quantum Link component test</title>

  <!-- 1. The looks (our new CSS file) -->
  <link rel="stylesheet" href="css/quantum-link-components.css">

  
  <style>
    .ql-site-header { display: flex; align-items: center; gap: 14px; margin-bottom: 16px; }
.ql-site-header img { width: 72px; height: 72px; border-radius: 16px; }
.ql-site-name { font-size: 2rem; font-weight: 800; color: #072045; }
    /* Only for this test page: a light grey background so the white cards stand out */
    body { margin: 0; padding: 24px; background: #f4f7f6; }
  </style>
</head>
<body>


<header class="ql-site-header">
  <img src="images/quantum-link-logo.png" alt="Quantum Link logo" width="48">
  <span class="ql-site-name">Quantum Link</span>
</header>
  <!-- 2. The skeleton (the cards) -->
  <section class="ql-scope" aria-label="Quantum Link student progress">
    <div class="ql-grid">

      <!-- Readiness Score Circle -->
      <article class="ql-card" aria-labelledby="ql-readiness-title">
        <header class="ql-card__header">
          <div>
            <p class="ql-card__eyebrow">Your progress</p>
            <h2 class="ql-card__title" id="ql-readiness-title">Career readiness</h2>
          </div>
        </header>
        <div data-ql-mount="readiness"></div>
      </article>

      <!-- Skill Bars -->
      <article class="ql-card" aria-labelledby="ql-skills-title">
        <header class="ql-card__header">
          <div>
            <p class="ql-card__eyebrow">Skills</p>
            <h2 class="ql-card__title" id="ql-skills-title">Skill progress</h2>
          </div>
        </header>
        <ul class="ql-skill-list" data-ql-mount="skills"></ul>
        <ul class="ql-legend" aria-label="Skill bar legend">
          <li><span class="ql-legend__swatch ql-legend__swatch--green" aria-hidden="true"></span>On target</li>
          <li><span class="ql-legend__swatch ql-legend__swatch--yellow" aria-hidden="true"></span>Needs work</li>
          <li><span class="ql-legend__swatch ql-legend__swatch--target" aria-hidden="true"></span>Target</li>
        </ul>
      </article>

      <!-- Leaderboard -->
      <article class="ql-card" aria-labelledby="ql-leaderboard-title">
        <header class="ql-card__header">
          <div>
            <p class="ql-card__eyebrow">This week</p>
            <h2 class="ql-card__title" id="ql-leaderboard-title">Leaderboard</h2>
          </div>
        </header>
        <ol class="ql-leaderboard" data-ql-mount="leaderboard"></ol>
      </article>

    </div>

    <!-- University Cards -->
    <article class="ql-card ql-uni-section" aria-labelledby="ql-uni-title">
      <header class="ql-card__header">
        <div>
          <p class="ql-card__eyebrow">Recommended for you</p>
          <h2 class="ql-card__title" id="ql-uni-title">Universities that match your APS</h2>
        </div>
      </header>
      <ul class="ql-uni-grid" data-ql-mount="universities"></ul>
    </article>

    <!-- Templates: the JavaScript copies these for each item. -->
    <template id="ql-tpl-readiness">
      <div class="ql-readiness">
        <div class="ql-readiness__ring" role="img">
          <svg viewBox="0 0 120 120" aria-hidden="true" focusable="false">
            <circle class="ql-readiness__track" cx="60" cy="60" r="52"></circle>
            <circle class="ql-readiness__value" cx="60" cy="60" r="52"></circle>
          </svg>
          <p class="ql-readiness__score" aria-hidden="true">
            <span class="ql-readiness__number" data-field="score">0</span>
            <span class="ql-readiness__max">out of 100</span>
          </p>
        </div>
        <p class="ql-readiness__label" data-field="label"></p>
        <p class="ql-readiness__message" data-field="message"></p>
      </div>
    </template>

    <template id="ql-tpl-skill">
      <li class="ql-skill">
        <div class="ql-skill__head" aria-hidden="true">
          <span class="ql-skill__name" data-field="name"></span>
          <span class="ql-skill__meta">
            <span class="ql-skill__status" data-field="status"></span>
            <span class="ql-skill__value" data-field="value"></span>
          </span>
        </div>
        <div class="ql-skill__bar" role="progressbar" aria-valuemin="0" aria-valuemax="100">
          <span class="ql-skill__fill"></span>
          <span class="ql-skill__target" aria-hidden="true"></span>
        </div>
      </li>
    </template>

    <template id="ql-tpl-leader">
      <li class="ql-leader">
        <span class="ql-leader__rank"><span class="ql-sr-only">Rank </span><span data-field="rank"></span></span>
        <span class="ql-leader__crown" role="img" aria-label="First place">
          <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" focusable="false">
            <path d="M3 8l4.5 4L12 5l4.5 7L21 8l-2 11H5L3 8z" fill="currentColor" stroke="#6B5300" stroke-width="1.5" stroke-linejoin="round"></path>
          </svg>
        </span>
        <span class="ql-leader__name" data-field="name"></span>
        <span class="ql-leader__you">You</span>
        <span class="ql-leader__points"><span data-field="points"></span> <span class="ql-leader__unit">pts</span></span>
      </li>
    </template>

    <template id="ql-tpl-university">
      <li class="ql-uni">
        <article class="ql-uni__card">
          <div class="ql-uni__media">
            <img class="ql-uni__img" alt="" width="640" height="400" loading="lazy" decoding="async">
            <span class="ql-uni__badge" aria-hidden="true" data-field="badge"></span>
          </div>
          <div class="ql-uni__body">
            <h3 class="ql-uni__name" data-field="name"></h3>
            <p class="ql-uni__location">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                <circle cx="12" cy="9.5" r="2.5" fill="none" stroke="currentColor" stroke-width="2"></circle>
              </svg>
              <span class="ql-sr-only">Location: </span><span data-field="location"></span>
            </p>
            <dl class="ql-uni__facts">
              <div><dt>Programme</dt><dd data-field="programme"></dd></div>
              <div><dt>APS requirement</dt><dd data-field="aps"></dd></div>
            </dl>
            <a class="ql-btn" href="#">
              Explore University<span class="ql-sr-only" data-field="ctaName"></span>
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M5 12h14M13 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </div>
        </article>
      </li>
    </template>
  </section>

  <footer class="ql-scope" style="margin-top: 1.5rem; font-size: 0.875rem; color: #475569;">
    <p><strong>Photo credits</strong></p>
    <ul>
      <li>University of Cape Town: Shawn Harrison on Unsplash. Resized and cropped.</li>
      <li>Wits University East Campus: Samuella99, Wikimedia Commons (public domain). Resized and cropped.</li>
      <li>Stellenbosch University: <a href="https://flickr.com/photos/42477684@N08/53782540243">Domenico Convertini</a>, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC BY-SA 2.0</a>. Resized and cropped.</li>
    </ul>
  </footer>

  <!-- Qrew speech bubble (its own file, pulled in by PHP) -->
  <?php include 'qrew-bubble.php'; ?>

  <!-- 3. The brain (our new JavaScript file), loaded last -->
  <script src="js/quantum-link-components.js" defer></script>
</body>
</html>
