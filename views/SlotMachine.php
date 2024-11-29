<?php
$headTitle = "Machine à Sous";

ob_start();
?>

<section class="main-sections">
  <article class="main-articles">
    <div class="container">
      <h1>🎰 Machine à Sous 🎰</h1>
      <div class="slot-machine">
        <!-- Rouleaux -->
        <div class="reels">
          <span class="reel" id="reel1">🍒</span>
          <span class="reel" id="reel2">🍋</span>
          <span class="reel" id="reel3">🔔</span>
        </div>

        <!-- Bouton Spin -->
        <button id="spinButton">🎲 Spin votre chance</button>

        <!-- Message de résultat (dans le même conteneur) -->
        <p id="result" class="result-text">Appuyez sur "Spin" pour commencer</p>
      </div>
    </div>
  </article>
</section>

<script src="/sources/js/slotscript.js"></script>

<?php
$mainContent = ob_get_clean();
