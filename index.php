<?php include_once("partials/head.php") ?>

<body class="d-flex flex-column min-vh-100">

<?php include_once("partials/barrenav.php") ?>

    <!-- Video Banner -->
    <section class="tm-banner-section" id="tmVideoSection" style="position:relative;height:100vh;width:100vw;overflow:hidden;margin:0;padding:0;">
      <video id="hero-vid" autoplay loop muted playsinline style="position:absolute;top:0;left:0;width:100vw;height:100vh;object-fit:cover;z-index:1;"><source src="videos/city-night-blur-01.mp4" type="video/mp4" />Your browser does not support the video tag.</video>
      <div class="container tm-banner-text-container position-relative d-flex flex-column justify-content-center align-items-center" style="height:100vh;z-index:2;min-height:320px;">
        <div class="row w-100">
          <div class="col-12 text-center">
            <header class="py-5">
              <div style="background:rgba(0,0,0,0.45);border-radius:16px;display:inline-block;padding:1.2rem 2.2rem;box-shadow:0 8px 32px rgba(0,0,0,0.4);">
  <h2 class="tm-banner-title" style="font-size:2.8rem;font-weight:700;color:#FFFFFF;text-shadow:2px 2px 4px #000000;">Sam Lanaverre</h2>
  <p class="mx-auto tm-banner-subtitle" style="font-size:1.5rem;color:#FFFFFF;text-shadow:1px 1px 3px #000000;">Portfolio</p>
</div>
            </header>
          </div>
        </div>
      </div>
      <div style="position:absolute;top:0;left:0;width:100vw;height:100vh;background:linear-gradient(120deg,rgba(44,62,80,0.4) 0%,rgba(76,110,245,0.25) 100%);z-index:1;"></div>
    </section>

    <main class="flex-grow-1">
<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Colonne pour la photo -->
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <!-- Remplacer par votre image -->
            <img src="img/photocv.jpg" alt="Photo de Sam Lanaverre" class="img-fluid rounded-circle shadow-sm" style="max-width: 250px; height: auto;">
        </div>

        <!-- Colonne pour le texte -->
        <div class="col-md-8">
            <section id="a-propos" class="mt-4">
                <h2 class="mb-3">À propos</h2>
                <p class="text-justify">
                    Après une première expérience professionnelle dans la logistique et le transport, puis un parcours militaire en tant que chasseur alpin, j'ai choisi de me reconvertir dans le développement. Ce qui m'attire dans ce domaine, c'est la résolution de problèmes : partir d'un besoin concret et construire une solution fonctionnelle, transformer une idée en code qui répond aux attentes.
                </p>
                <p class="text-justify">
                    Actuellement en BTS SIO option SLAM en initial à l'ESPL, ce portfolio illustre mon parcours de formation et mes projets réalisés.
                </p>
                <div class="text-center text-md-left mt-4">
                    <a href="fichier/SamLANAVERRECV.pdf" class="btn btn-primary btn-lg" target="_blank" download>
                        <i class="fas fa-download mr-2"></i>Télécharger mon CV
                    </a>
                </div>
            </section>
        </div>
    </div>
</div>
    </main> <!-- Closing main tag -->

    <hr class="my-4"> <!-- Demarcation line -->

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

<?php include_once("partials/footer.php")?>