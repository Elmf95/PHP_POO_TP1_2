<?php
$headTitle = "Accueil";
ob_start();
?>

  <section class="main-sections">
  <div class="slot-machine-wrapper">
    <article class="main-articles">
      <div class="container">
        <h1>🎰 Machine à Sous 🎰</h1>
        <article class="slot-machine">
          <div class="reel" id="reel1">🍒</div>
          <div class="reel" id="reel2">🍒</div>
          <div class="reel" id="reel3">🍒</div>
        </article>
        <button id="spinButton">🎲 Spin votre chance</button>
        <div id="result"></div>
      </div>
    </article>
  </div>
</section>


<?php
$mainContent = ob_get_clean();