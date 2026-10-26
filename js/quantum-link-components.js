/* =========================================================
   Quantum Link UI components: vanilla JavaScript

   Fills the [data-ql-mount] containers from the HTML snippet
   using its <template> elements.

   CUSTOMISE your data in one of three ways:
   a) Edit QL_SAMPLE_DATA below, or
   b) Define window.QL_DATA before this script loads
      (any key you set overrides the sample), or
   c) Call QuantumLink.render({ ...your data }) at any time,
      e.g. after fetching from your API.

   Clicking "Explore University" fires a "ql:explore" event
   you can listen for:
   document.addEventListener('ql:explore', (e) => console.log(e.detail.university));
   ========================================================= */

(function () {
  "use strict";

  /* ===== CUSTOMISE: sample data ===== */
  const QL_SAMPLE_DATA = {
    readiness: {
      score: 78, // 0-100
      label: "", // leave empty for an automatic label based on the score
      message: "", // leave empty for an automatic encouraging message
    },

    // value and target are percentages (0-100). value >= target shows green, otherwise yellow.
    skills: [
      { name: "Problem Solving", value: 85, target: 70 },
      { name: "Communication", value: 72, target: 70 },
      { name: "Coding Fundamentals", value: 58, target: 70 },
      { name: "Mathematics", value: 64, target: 75 },
      { name: "Teamwork", value: 90, target: 70 },
    ],

    leaderboard: {
      currentUser: "KasiQuant", // display name to highlight as "You" (or '' for none)
      // Use display names only; never real names or student numbers.
      rows: [
        { name: "NovaCoder_ZA", points: 4820 },
        { name: "ByteBraai", points: 4515 },
        { name: "Ubuntu_Dev", points: 4390 },
        { name: "KasiQuant", points: 4105 },
        { name: "TableMountainTech", points: 3980 },
      ],
    },

    // Replace image paths with your own campus photos (relative to your HTML page).
    // Sample APS values are placeholders: check each university's current admission requirements.
    universities: [
      {
        name: "University of Cape Town",
        location: "Rondebosch, Western Cape",
        programme: "BSc Computer Science",
        aps: 38,
        image: "images/campus-cape-town.jpg",
        imageAlt: "University of Cape Town campus below the mountain",
        url: "#", // link to the university page; '#' keeps the click on the page
      },
      {
        name: "University of the Witwatersrand",
        location: "Braamfontein, Johannesburg",
        programme: "BSc Engineering",
        aps: 42,
        image: "images/campus-johannesburg.jpg",
        imageAlt: "Wits University campus in Johannesburg",
        url: "#",
      },
      {
        name: "Stellenbosch University",
        location: "Stellenbosch, Western Cape",
        programme: "BCom Actuarial Science",
        aps: 40,
        image: "images/campus-stellenbosch.jpg",
        imageAlt: "Stellenbosch University campus with oak trees",
        url: "#",
      },
    ],
  };

  /* ===== CUSTOMISE: readiness labels and messages (highest "min" first) ===== */
  const READINESS_TIERS = [
    {
      min: 85,
      label: "Ready to launch",
      message: "You're in great shape. Start applying with confidence!",
    },
    {
      min: 70,
      label: "Almost there",
      message: "Great progress! A few more skills and you're ready to go.",
    },
    {
      min: 50,
      label: "Building momentum",
      message: "You're on your way. Keep practising a little every day.",
    },
    {
      min: 0,
      label: "Getting started",
      message: "Every expert started here. Take your first challenge today!",
    },
  ];

  /* ---------- Helpers ---------- */
  const clamp = (n) => Math.min(100, Math.max(0, Number(n) || 0));
  const formatPoints = (n) => new Intl.NumberFormat("en-ZA").format(n);
  const reducedMotion = () =>
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  function cloneTemplate(id) {
    const tpl = document.getElementById(id);
    if (!tpl) {
      console.warn('Quantum Link: missing <template id="' + id + '">');
      return null;
    }
    return tpl.content.firstElementChild.cloneNode(true);
  }

  function setField(root, name, value) {
    const el = root.querySelector('[data-field="' + name + '"]');
    if (el) el.textContent = value;
    return el;
  }

  // Runs the callback once the element scrolls into view (or immediately if motion is reduced).
  function whenVisible(el, callback) {
    if (reducedMotion() || !("IntersectionObserver" in window)) {
      requestAnimationFrame(callback);
      return;
    }
    const observer = new IntersectionObserver(
      (entries) => {
        if (entries.some((entry) => entry.isIntersecting)) {
          observer.disconnect();
          callback();
        }
      },
      { threshold: 0.2 },
    );
    observer.observe(el);
  }

  function countUp(el, to, duration) {
    if (reducedMotion()) {
      el.textContent = to;
      return;
    }
    const start = performance.now();
    const step = (now) => {
      const progress = Math.min(1, (now - start) / duration);
      const eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(to * eased);
      if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }

  /* ---------- 1. Readiness Score Circle ---------- */
  function renderReadiness(mount, data) {
    const node = cloneTemplate("ql-tpl-readiness");
    if (!node || !data) return;

    const score = Math.round(clamp(data.score));
    const tier = READINESS_TIERS.find((t) => score >= t.min);
    const ring = node.querySelector(".ql-readiness__ring");
    const arc = node.querySelector(".ql-readiness__value");
    const circumference = 2 * Math.PI * Number(arc.getAttribute("r"));

    arc.style.strokeDasharray = circumference;
    arc.style.strokeDashoffset = circumference;
    ring.setAttribute(
      "aria-label",
      "Readiness score: " + score + " out of 100",
    );
    setField(node, "label", data.label || tier.label);
    setField(node, "message", data.message || tier.message);
    const scoreEl = setField(node, "score", "0");

    mount.replaceChildren(node);

    whenVisible(ring, () => {
      arc.style.strokeDashoffset = circumference * (1 - score / 100);
      countUp(scoreEl, score, 1200);
    });
  }

  /* ---------- 2. Skill Bars ---------- */
  function renderSkills(mount, skills) {
    if (!Array.isArray(skills)) return;

    const fragment = document.createDocumentFragment();
    const fills = [];

    skills.forEach((skill) => {
      const node = cloneTemplate("ql-tpl-skill");
      if (!node) return;

      const value = Math.round(clamp(skill.value));
      const target = Math.round(clamp(skill.target ?? 70));
      const onTarget = value >= target;
      const bar = node.querySelector(".ql-skill__bar");

      node.classList.add(
        onTarget ? "ql-skill--on-target" : "ql-skill--needs-work",
      );
      setField(node, "name", skill.name);
      setField(node, "status", onTarget ? "On target" : "Needs work");
      setField(node, "value", value + "%");

      bar.setAttribute("aria-label", skill.name);
      bar.setAttribute("aria-valuenow", value);
      bar.setAttribute(
        "aria-valuetext",
        value +
          "%, target " +
          target +
          "%, " +
          (onTarget ? "on target" : "needs improvement"),
      );
      node.querySelector(".ql-skill__target").style.left = target + "%";

      fills.push({ el: node.querySelector(".ql-skill__fill"), value });
      fragment.append(node);
    });

    mount.replaceChildren(fragment);

    whenVisible(mount, () => {
      fills.forEach((fill, i) => {
        fill.el.style.transitionDelay = i * 80 + "ms";
        fill.el.style.width = fill.value + "%";
      });
    });
  }

  /* ---------- 3. Leaderboard Rows ---------- */
  function renderLeaderboard(mount, board) {
    if (!board || !Array.isArray(board.rows)) return;

    const rows = board.rows.slice().sort((a, b) => b.points - a.points);
    const fragment = document.createDocumentFragment();

    rows.forEach((row, index) => {
      const node = cloneTemplate("ql-tpl-leader");
      if (!node) return;

      const rank = index + 1;
      const isYou =
        Boolean(board.currentUser) && row.name === board.currentUser;

      setField(node, "rank", rank);
      setField(node, "name", row.name);
      setField(node, "points", formatPoints(row.points));
      node.querySelector(".ql-leader__name").title = row.name;

      if (rank === 1) node.classList.add("ql-leader--first");
      else node.querySelector(".ql-leader__crown").remove();

      if (rank === 2 || rank === 3) node.classList.add("ql-leader--podium");

      if (isYou) node.classList.add("ql-leader--you");
      else node.querySelector(".ql-leader__you").remove();

      fragment.append(node);
    });

    mount.replaceChildren(fragment);
  }

  /* ---------- 4. University Cards ---------- */
  function renderUniversities(mount, universities) {
    if (!Array.isArray(universities)) return;

    const fragment = document.createDocumentFragment();

    universities.forEach((uni) => {
      const node = cloneTemplate("ql-tpl-university");
      if (!node) return;

      const img = node.querySelector(".ql-uni__img");
      img.src = uni.image;
      img.alt = uni.imageAlt || uni.name + " campus";
      // If an image fails to load, the blue gradient behind it shows instead of a broken icon.
      img.addEventListener("error", () => img.remove(), { once: true });

      setField(node, "badge", "APS " + uni.aps);
      setField(node, "name", uni.name);
      setField(node, "location", uni.location);
      setField(node, "programme", uni.programme);
      setField(node, "aps", uni.aps + " points");
      setField(node, "ctaName", ": " + uni.name);

      const link = node.querySelector(".ql-btn");
      const hasUrl = Boolean(uni.url) && uni.url !== "#";
      link.href = hasUrl ? uni.url : "#";
      link.addEventListener("click", (event) => {
        const proceed = link.dispatchEvent(
          new CustomEvent("ql:explore", {
            bubbles: true,
            cancelable: true,
            detail: { university: uni },
          }),
        );
        // Stay on the page when there is no URL, or when a listener called event.preventDefault().
        if (!hasUrl || !proceed) event.preventDefault();
      });

      fragment.append(node);
    });

    mount.replaceChildren(fragment);
  }

  /* ---------- Render everything ---------- */
  const RENDERERS = {
    readiness: renderReadiness,
    skills: renderSkills,
    leaderboard: renderLeaderboard,
    universities: renderUniversities,
  };

  function render(data, root) {
    const source = Object.assign({}, QL_SAMPLE_DATA, data || {});
    (root || document).querySelectorAll("[data-ql-mount]").forEach((mount) => {
      const key = mount.getAttribute("data-ql-mount");
      if (RENDERERS[key] && source[key] !== undefined)
        RENDERERS[key](mount, source[key]);
    });
  }

  window.QuantumLink = {
    render,
    renderReadiness,
    renderSkills,
    renderLeaderboard,
    renderUniversities,
    sampleData: QL_SAMPLE_DATA,
  };

  const start = () => render(window.QL_DATA);
  if (document.readyState === "loading")
    document.addEventListener("DOMContentLoaded", start);
  else start();
})();
