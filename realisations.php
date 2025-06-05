<?php 
$pageTitle = "Mes Réalisations";
include_once('partials/head.php'); 
?>

<body>

<?php include_once('partials/barrenav.php'); ?>

<main class="flex-grow-1">
    <div class="container my-5">
        <h1 class="display-4 text-center mb-5">Mes Réalisations</h1>

        <div class="row">
            <!-- Projet 1: Portfolio -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100 realisation-card shadow-sm">
                    <img src="img/imgportfolio.jpg" class="card-img-top" alt="Image du projet Portfolio">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Portfolio BTS SIO SLAM</h5>
                        <p class="card-text flex-grow-1">Création d'un portfolio professionnel pour présenter mes compétences, projets et parcours dans le cadre du BTS SIO SLAM.</p>
                        <p class="card-text"><span class="badge bg-primary">PHP</span></p>
                        <p class="card-text"><small class="text-muted">Période : Septembre 2023 - Mai 2025</small></p>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalPortfolio">Voir les détails</button>
                    </div>
                </div>
            </div>

            <!-- Projet 2: BFormation -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100 realisation-card shadow-sm">
                    <img src="img/imgbformation.jpg" class="card-img-top" alt="Image du projet BFormation">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">BFormation</h5>
                        <p class="card-text flex-grow-1">Application de gestion des classes et des présences pour un centre de formation, incluant un système de signature numérique.</p>
                        <p class="card-text"><span class="badge bg-primary">PHP</span></p>
                        <p class="card-text"><small class="text-muted">Période : Octobre 2024 - Décembre 2024</small></p>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalBformation">Voir les détails</button>
                    </div>
                </div>
            </div>

            <!-- Projet 3: Click'n Eat -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100 realisation-card shadow-sm">
                    <img src="img/imgclickneat.jpg" class="card-img-top" alt="Image du projet Click'n Eat">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Click'n Eat</h5>
                        <p class="card-text flex-grow-1">Application web de commande et réservation de repas en ligne pour un restaurant, avec gestion des créneaux horaires.</p>
                        <p class="card-text"><span class="badge bg-primary">Laravel</span></p>
                        <p class="card-text"><small class="text-muted">Période : Février 2025 - Mai 2025</small></p>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalClickneat">Voir les détails</button>
                    </div>
                </div>
            </div>

            <!-- Projet 4: GLPI -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100 realisation-card shadow-sm">
                    <img src="img/imgglpi.jpg" class="card-img-top" alt="Image du projet GLPI">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">GLPI - Gestion de ticketing</h5>
                        <p class="card-text flex-grow-1">Mise en place et configuration d'une solution de gestion de parc informatique et de ticketing (GLPI) pour l'entreprise Contoso.</p>
                        <p class="card-text"><span class="badge bg-primary">GLPI</span></p>
                        <p class="card-text"><small class="text-muted">Période : Avril 2025 - Mai 2025</small></p>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalGlpi">Voir les détails</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modales de détails des projets -->
<!-- Portfolio -->
<div class="modal fade" id="modalPortfolio" tabindex="-1" aria-labelledby="modalPortfolioLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPortfolioLabel">Portfolio BTS SIO SLAM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 text-center mb-3 mb-md-0">
            <img src="img/imgportfolio.jpg" class="img-fluid rounded shadow-sm" alt="Portfolio BTS SIO SLAM">
          </div>
          <div class="col-md-7">
            <h6>Description</h6>
            <p>Création d'un portfolio professionnel pour présenter mes compétences, projets et parcours dans le cadre du BTS SIO SLAM.</p>
            <h6>Technologies utilisées</h6>
            <p><span class="badge bg-primary">PHP</span> <span class="badge badge-secondary">HTML</span> <span class="badge badge-secondary">CSS</span> <span class="badge badge-secondary">JavaScript</span> <span class="badge badge-info">Bootstrap</span></p>
            <h6>Période de réalisation</h6>
            <p>Septembre 2023 - Mai 2025</p>
          </div>
        </div>
        <hr>
        <h6>Contexte du projet</h6>
        <p>Projet personnel et académique essentiel pour la validation du BTS SIO et la présentation professionnelle.</p>
        <h6>Objectifs principaux</h6>
        <ul>
          <li>Présenter mon profil, mes compétences et réalisations.</li>
          <li>Support pour la recherche de stage/emploi.</li>
          <li>Montrer mes compétences en développement web.</li>
        </ul>
        <h6>Compétences développées</h6>
        <ul>
          <li>Développement web fullstack</li>
          <li>Organisation de projet</li>
          <li>Responsive design</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- BFormation -->
<div class="modal fade" id="modalBformation" tabindex="-1" aria-labelledby="modalBformationLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBformationLabel">BFormation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 text-center mb-3 mb-md-0">
            <img src="img/imgbformation.jpg" class="img-fluid rounded shadow-sm" alt="BFormation">
          </div>
          <div class="col-md-7">
            <h6>Description</h6>
            <p>Application de gestion des classes et des présences pour un centre de formation, incluant un système de signature numérique.</p>
            <h6>Technologies utilisées</h6>
            <p><span class="badge bg-primary">PHP</span> <span class="badge badge-secondary">MySQL</span> <span class="badge badge-secondary">HTML</span> <span class="badge badge-info">JavaScript</span></p>
            <h6>Période de réalisation</h6>
            <p>Octobre 2024 - Décembre 2024</p>
          </div>
        </div>
        <hr>
        <h6>Contexte du projet</h6>
        <p>Projet réalisé dans le cadre d'un stage en centre de formation.</p>
        <h6>Objectifs principaux</h6>
        <ul>
          <li>Faciliter la gestion des présences et des signatures.</li>
          <li>Automatiser les tâches administratives récurrentes.</li>
        </ul>
        <h6>Compétences développées</h6>
        <ul>
          <li>Développement d'applications métiers</li>
          <li>Gestion de base de données</li>
          <li>Interface utilisateur ergonomique</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- Click'n Eat -->
<div class="modal fade" id="modalClickneat" tabindex="-1" aria-labelledby="modalClickneatLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalClickneatLabel">Click'n Eat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 text-center mb-3 mb-md-0">
            <img src="img/realisation-placeholder.jpg" class="img-fluid rounded shadow-sm" alt="Click'n Eat">
          </div>
          <div class="col-md-7">
            <h6>Description</h6>
            <p>Application web de commande et réservation de repas en ligne pour un restaurant, avec gestion des créneaux horaires.</p>
            <h6>Technologies utilisées</h6>
            <p><span class="badge bg-primary">Laravel</span> <span class="badge badge-secondary">PHP</span> <span class="badge badge-secondary">MySQL</span> <span class="badge badge-info">Bootstrap</span></p>
            <h6>Période de réalisation</h6>
            <p>Février 2025 - Mai 2025</p>
          </div>
        </div>
        <hr>
        <h6>Contexte du projet</h6>
        <p>Projet fictif pour l'apprentissage du framework Laravel et des problématiques de réservation en ligne.</p>
        <h6>Objectifs principaux</h6>
        <ul>
          <li>Permettre aux clients de réserver et commander en ligne.</li>
          <li>Optimiser la gestion des créneaux et des commandes.</li>
        </ul>
        <h6>Compétences développées</h6>
        <ul>
          <li>Développement avec Laravel</li>
          <li>Conception d'une base de données relationnelle</li>
          <li>UX/UI pour la réservation en ligne</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- GLPI -->
<div class="modal fade" id="modalGlpi" tabindex="-1" aria-labelledby="modalGlpiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalGlpiLabel">GLPI - Gestion de ticketing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5 text-center mb-3 mb-md-0">
            <img src="img/imgglpi.jpg" class="img-fluid rounded shadow-sm" alt="GLPI">
          </div>
          <div class="col-md-7">
            <h6>Description</h6>
            <p>Mise en place et configuration d'une solution de gestion de parc informatique et de ticketing (GLPI) pour l'entreprise Contoso.</p>
            <h6>Technologies utilisées</h6>
            <p><span class="badge bg-primary">GLPI</span> <span class="badge badge-secondary">PHP</span> <span class="badge badge-info">MySQL</span></p>
            <h6>Période de réalisation</h6>
            <p>Avril 2025 - Mai 2025</p>
          </div>
        </div>
        <hr>
        <h6>Contexte du projet</h6>
        <p>Projet réalisé en entreprise pour améliorer la gestion des incidents et du parc informatique.</p>
        <h6>Objectifs principaux</h6>
        <ul>
          <li>Centraliser la gestion des tickets et du matériel.</li>
          <li>Optimiser le suivi des interventions.</li>
        </ul>
        <h6>Compétences développées</h6>
        <ul>
          <li>Administration GLPI</li>
          <li>Gestion d'un parc informatique</li>
          <li>Support utilisateur</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

</main>

<style>
.realisation-card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}
.realisation-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.1) !important;
}
.card-footer {
    background-color: transparent;
    border-top: none;
}
.badge.bg-primary {
    background-color: #4f8cff !important; /* Couleur principale suggérée */
}
</style>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include_once('partials/footer.php'); ?>

</body>
</html>
