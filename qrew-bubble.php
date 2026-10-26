<?php
/*
  Qrew speech bubble (the assistant formerly known as Linky)

  HOW TO USE on any page:
    <?php include 'qrew-bubble.php'; ?>

  HOW TO SHOW A MESSAGE from your own JavaScript:
    Qrew.say('welcome');
    Qrew.say('goodProgress');

  EDIT THE MESSAGES in the QREW_MESSAGES list near the bottom of this file.
  All class names start with "qrew-" so nothing else on the page changes.
*/
?>
<style>
  .qrew {
    --qrew-blue: #072045;
    --qrew-blue-strong: #072045;
    --qrew-yellow: #FFD60A;
    --qrew-ink: #0F172A;
    display: flex;
    align-items: flex-end;
    gap: 0.75rem;
    max-width: 32rem;
    margin: 1.25rem 0;
    font-family: "Plus Jakarta Sans", "Segoe UI", Roboto, system-ui, sans-serif;
    color: var(--qrew-ink);
  }

  .qrew *, .qrew *::before, .qrew *::after { box-sizing: border-box; }

  /* Qrew's face: your logo image. The rounded corners also hide any white corners in the PNG. */
  .qrew__avatar {
    flex: none;
    display: block;
    width: 3.25rem;
    height: 3.25rem;
    border-radius: 0.875rem;
    object-fit: cover;
    box-shadow: 0 4px 12px rgba(7, 32, 69, 0.3);
  }

  /* The speech bubble */
  .qrew__bubble {
    position: relative;
    padding: 0.875rem 1rem;
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 1rem;
    border-bottom-left-radius: 0.25rem;
    box-shadow: 0 1px 2px rgba(15, 23, 42, 0.06), 0 8px 24px -8px rgba(15, 23, 42, 0.14);
  }

  .qrew__name {
    margin: 0 0 0.25rem;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--qrew-blue-strong);
  }

  .qrew__text {
    margin: 0;
    font-size: 1rem;
    line-height: 1.5;
  }

  .qrew__next {
    margin-top: 0.625rem;
    padding: 0.375rem 0.75rem;
    border: 0;
    border-radius: 0.75rem;
    background: var(--qrew-yellow);
    color: var(--qrew-ink);
    font: inherit;
    font-size: 0.8125rem;
    font-weight: 700;
    cursor: pointer;
  }

  .qrew__next:hover { filter: brightness(0.95); }
  .qrew :focus-visible { outline: 3px solid var(--qrew-blue); outline-offset: 2px; }
</style>

<aside class="qrew" aria-label="Qrew, your assistant">
  <img class="qrew__avatar" src="images/qrew-avatar.png" alt="" width="52" height="52">
  <div class="qrew__bubble">
    <p class="qrew__name">Qrew</p>
    <!-- aria-live makes screen readers read out the new message when it changes -->
    <p class="qrew__text" id="qrew-text" aria-live="polite"></p>
    <!-- This button is only for testing. Delete it when you don't need it. -->
    <button class="qrew__next" id="qrew-next" type="button">Show another message</button>
  </div>
</aside>

<script>
  (function () {
    'use strict';

    /* EDIT THE MESSAGES HERE: one key per situation */
    var QREW_MESSAGES = {
      welcome: "Yoh! Sharp! 👋 Ready to level up your future?",
      missingSkill: "Shwele, you're not quite there yet. Let's work on this skill!",
      goodProgress: "Beast mode! 🔥 You're making moves.",
      scoreUp: "Look at you! Your readiness score is going up!",
      exploreUnis: "Let's find a uni that matches your goals.",
      lowProgress: "No stress, one step at a time. You've got this.",
      taskDone: "Aweh! Another one ticked off. Keep going!",
      returning: "You're back! Ready to pick up where you left off?"
    };

    var keys = Object.keys(QREW_MESSAGES);
    var textEl = document.getElementById('qrew-text');
    var nextBtn = document.getElementById('qrew-next');
    var current = 0;

    /* Show the message for one situation, e.g. Qrew.say('taskDone') */
    function say(key) {
      if (!QREW_MESSAGES[key]) {
        console.warn('Qrew: no message called "' + key + '"');
        return;
      }
      textEl.textContent = QREW_MESSAGES[key];
      current = keys.indexOf(key);
    }

    /* Test button: go to the next message in the list, and loop back to the start */
    nextBtn.addEventListener('click', function () {
      say(keys[(current + 1) % keys.length]);
    });

    window.Qrew = { say: say, messages: QREW_MESSAGES };

    say('welcome');
  })();
</script>
