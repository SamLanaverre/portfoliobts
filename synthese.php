<?php include('partials/head.php'); ?>
<?php include('partials/barrenav.php'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-3 gap-2">
                <h1 class="display-4 mb-0 mr-md-3">Synthèse des compétences</h1>
                <a href="fichier/tableaudesynthèse.pdf" class="btn btn-primary mb-2 mb-md-0" target="_blank" download>
                    <i class="fas fa-download mr-2"></i>Télécharger le tableau de synthèse
                </a>
            </div>
        </div>
    </div>

    <style>
        .competence-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
            background: #fff;
        }
        .competence-table th, .competence-table td {
            border: 1px solid #dee2e6;
            padding: 1rem 0.75rem;
            vertical-align: top;
        }
        .competence-table th {
            background: #f8f9fa;
            font-size: 1.1rem;
            font-weight: 700;
            text-align: left;
        }
        .competence-table tbody tr:nth-child(even) {
            background: #f4f8fb;
        }
        .main-competence {
            font-weight: 600;
            margin-top: 0.5em;
        }
        .sub-competence {
            margin-left: 1.5em;
            font-weight: 400;
            color: #444;
            display: block;
        }
        .project-name {
            font-size: 1.05rem;
            font-weight: 600;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <table class="competence-table">
                <thead>
                    <tr>
                        <th>Projet</th>
                        <th>Compétences</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Portfolio -->
                    <tr>
                        <td class="project-name">Portfolio</td>
                        <td>
                            <span class="main-competence">Développer la présence en ligne de l'organisation :</span>
                            <span class="sub-competence">Participer à la valorisation de l'image de l'organisation sur les médias numériques</span>
                            <span class="sub-competence">Référencer les services en ligne de l'organisation et mesurer leur visibilité</span>
                            <span class="sub-competence">Participer à l'évolution d'un site Web exploitant les données de l'organisation</span>
                            <span class="main-competence">Mettre à disposition des utilisateurs un service informatique :</span>
                            <span class="sub-competence">Réaliser les tests d'intégration et d'acceptation d'un service</span>
                            <span class="sub-competence">Déployer un service</span>
                            <span class="main-competence">Organiser son développement professionnel :</span>
                            <span class="sub-competence">Mettre en place son environnement d'apprentissage personnel</span>
                            <span class="sub-competence">Mettre en oeuvre des outils et stratégies de veille informationnelle</span>
                            <span class="sub-competence">Gérer son identité professionnelle</span>
                        </td>
                    </tr>
                    <!-- bformation -->
                    <tr>
                        <td class="project-name">bformation</td>
                        <td>
                            <span class="main-competence">Développer la présence en ligne de l'organisation :</span>
                            <span class="sub-competence">Participer à la valorisation de l'image de l'organisation sur les médias numériques</span>
                            <span class="sub-competence">Référencer les services en ligne de l'organisation et mesurer leur visibilité</span>
                            <span class="main-competence">Travailler en mode projet :</span>
                            <span class="sub-competence">Analyser les objectifs et les modalités d'organisation d'un projet</span>
                            <span class="sub-competence">Planifier les activités</span>
                            <span class="main-competence">Mettre à disposition des utilisateurs un service informatique :</span>
                            <span class="sub-competence">Réaliser les tests d'intégration et d'acceptation d'un service</span>
                            <span class="sub-competence">Déployer un service</span>
                            <span class="main-competence">Organiser son développement professionnel :</span>
                            <span class="sub-competence">Mettre en place son environnement d'apprentissage personnel</span>
                            <span class="sub-competence">Gérer son identité professionnelle</span>
                        </td>
                    </tr>
                    <!-- clickneat -->
                    <tr>
                        <td class="project-name">clickneat</td>
                        <td>
                            <span class="main-competence">Développer la présence en ligne de l'organisation :</span>
                            <span class="sub-competence">Participer à la valorisation de l'image de l'organisation sur les médias numériques</span>
                            <span class="sub-competence">Référencer les services en ligne de l'organisation et mesurer leur visibilité</span>
                            <span class="main-competence">Travailler en mode projet :</span>
                            <span class="sub-competence">Analyser les objectifs et les modalités d'organisation d'un projet</span>
                            <span class="sub-competence">Planifier les activités</span>
                            <span class="main-competence">Mettre à disposition des utilisateurs un service informatique :</span>
                            <span class="sub-competence">Réaliser les tests d'intégration et d'acceptation d'un service</span>
                            <span class="sub-competence">Déployer un service</span>
                            <span class="sub-competence">Accompagner les utilisateurs dans la mise en place d'un service</span>
                            <span class="main-competence">Organiser son développement professionnel :</span>
                            <span class="sub-competence">Mettre en place son environnement d'apprentissage personnel</span>
                            <span class="sub-competence">Mettre en oeuvre des outils et stratégies de veille informationnelle</span>
                        </td>
                    </tr>
                    <!-- GLPI -->
                    <tr>
                        <td class="project-name">GLPI</td>
                        <td>
                            <span class="main-competence">Gérer le patrimoine informatique :</span>
                            <span class="sub-competence">Recenser et identifier les ressources numériques</span>
                            <span class="sub-competence">Exploiter des référentiels, normes et standards adoptés par le prestataire informatique</span>
                            <span class="sub-competence">Mettre en place et vérifier les niveaux d'habilitation associés à un service</span>
                            <span class="sub-competence">Vérifier les conditions de la continuité d'un service informatique</span>
                            <span class="sub-competence">Gérer des sauvegardes</span>
                            <span class="sub-competence">Vérifier le respect des règles d'utilisation des ressources numériques</span>
                            <span class="main-competence">Répondre aux incidents et aux demandes d'assistance et d'évolution :</span>
                            <span class="sub-competence">Collecter, suivre et orienter des demandes</span>
                            <span class="sub-competence">Traiter des demandes concernant les services réseau et système</span>
                            <span class="sub-competence">Traiter des demandes concernant les applications</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include('partials/footer.php'); ?>
