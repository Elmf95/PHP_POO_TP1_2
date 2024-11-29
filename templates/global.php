<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $headTitle ?? "Machine à Sous" ?></title>
  <link rel="stylesheet" href="<?= "/sources/css/style.css?v=" . filemtime(ROOT . "/sources/css/style.css") ?>">
</head>

<body>
  <header class="main-head">
    <figure class="logo-figure">
      <img src="<?= "/assets/logo/canard.png" ?>" alt="Logo blog voyage" class="logo-img" />
      <figcaption class="logo-text">
        <h1>Casino en ligne</h1>
      </figcaption>
    </figure>

    <nav class="navbar">
      <ul class="nav-links">
        <li><a href="/slot-machine">Jouer</a></li>
      </ul>
      <div class="burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
  </header>

  <main class="main-content">
    <?= $mainContent ?? "Erreur 404" ?>
  </main>

  <footer class="main-foot">
    <p class="copyright">© Casino FIKRI - 2024</p>
  </footer>

  <script src="<?= "/sources/js/burger.js?v=" . filemtime(ROOT."/sources/js/burger.js") ?>"></script>

</body>
</html>
