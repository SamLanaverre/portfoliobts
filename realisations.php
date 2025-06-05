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
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Portfolio BTS SIO SLAM</h5>
                        <p class="card-text flex-grow-1">Création d'un portfolio professionnel pour présenter mes compétences.</p>
                        
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
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">BFormation</h5>
                        <p class="card-text flex-grow-1">Application de gestion des classes et des présences pour un centre de formation.</p>
                        
                        <p class="card-text"><small class="text-muted">Période : Octobre 2025 - Décembre 2025</small></p>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalBformation">Voir les détails</button>
                    </div>
                </div>
            </div>

            <!-- Projet 3: Click'n Eat -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100 realisation-card shadow-sm">
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Click'n Eat</h5>
                        <p class="card-text flex-grow-1">Application web de commande et réservation de repas en ligne pour un restaurant, avec gestion des créneaux horaires.</p>
                        
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
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">GLPI - Gestion de ticketing</h5>
                        <p class="card-text flex-grow-1">Mise en place et configuration d'une solution de gestion de parc informatique et de ticketing (GLPI) pour l'entreprise Contoso.</p>
                        
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
            <img src="img/imgportfolio.png" class="img-fluid rounded shadow-sm" alt="Portfolio BTS SIO SLAM">
            <div class="mt-3">
              <span class="badge bg-primary">PHP</span>
              <span class="badge badge-secondary">HTML5</span>
              <span class="badge badge-secondary">CSS3</span>
              <span class="badge badge-secondary">JavaScript</span>
              <span class="badge badge-info">Bootstrap</span>
              <span class="badge badge-info">jQuery</span>
            </div>
            <div class="mt-2">
              <small class="text-muted">Période : Septembre 2023 - Mai 2025</small>
            </div>
          </div>
          <div class="col-md-7">
            <h5 class="mb-3"><span class="mr-2">📋</span>Contexte</h5>
            <p>Dans le cadre de ma formation en BTS SIO option SLAM, j'ai développé un portfolio professionnel pour mettre en valeur mes compétences et projets. Ce site web personnel sert de vitrine pour présenter mon parcours, mes réalisations et documenter les compétences acquises pendant ma formation. Il constitue également un outil de communication pour ma recherche de stage et mon insertion professionnelle future.</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <h5 class="mb-3"><span class="mr-2">🎯</span>Consignes</h5>
            <ul>
              <li>Présentation du BTS SIO et de l'option SLAM</li>
              <li>CV</li>
              <li>Documentation des compétences du référentiel</li>
              <li>Présentation des projets réalisés</li>
              <li>Veille technologique</li>
              <li>Navigation intuitive</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">📌</span>Description des tâches</h5>
            <ul>
              <li>Développement du front-end responsive</li>
              <li>Intégration des contenus et médias</li>
              <li>Documentation des compétences</li>
              <li>Mise en place d'une section veille technologique</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">🛠️</span>Moyens utilisés</h5>
            <ul>
              <li><strong>Outils :</strong> Visual Studio Code, XAMPP, Git, GitHub</li>
              <li><strong>Technologies :</strong> PHP, HTML5, CSS3, JavaScript, jQuery</li>
              <li><strong>Frameworks/Librairies :</strong> Bootstrap</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">👥</span>Avec qui</h5>
            <p>Projet réalisé individuellement.</p>

            <h5 class="mt-4 mb-3"><span class="mr-2">⚠️</span>Difficultés rencontrées</h5>
            <p><strong>Problème :</strong> Aucun problème majeur rencontré.</p>

            <h5 class="mt-4 mb-3"><span class="mr-2">🎯</span>Compétences couvertes</h5>
            <ul>
              <li><strong>Développer la présence en ligne de l'organisation :</strong>
                <ul>
                  <li>Participer à la valorisation de l'image de l'organisation sur les médias numériques</li>
                  <li>Référencer les services en ligne de l'organisation et mesurer leur visibilité</li>
                  <li>Participer à l'évolution d'un site Web exploitant les données de l'organisation</li>
                </ul>
              </li>
              <li><strong>Mettre à disposition des utilisateurs un service informatique :</strong>
                <ul>
                  <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
                  <li>Déployer un service</li>
                </ul>
              </li>
              <li><strong>Organiser son développement professionnel :</strong>
                <ul>
                  <li>Mettre en place son environnement d'apprentissage personnel</li>
                  <li>Mettre en œuvre des outils et stratégies de veille informationnelle</li>
                  <li>Gérer son identité professionnelle</li>
                </ul>
              </li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">📊</span>Bilan personnel</h5>
            <ul>
              <li><strong>Compétences développées :</strong>
                <ul>
                  <li>Maîtrise de PHP / HTML / CSS</li>
                  <li>Compétences en intégration web responsive</li>
                  <li>Documentation technique et présentation professionnelle</li>
                  <li>Mise en place d'une veille technologique structurée</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
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
            <img src="img/imgbformation.png" class="img-fluid rounded shadow-sm" alt="BFormation">
            <div class="mt-3">
              <span class="badge bg-primary">PHP</span>
              <span class="badge badge-secondary">MySQL</span>
              <span class="badge badge-secondary">HTML</span>
              <span class="badge badge-info">JavaScript</span>
              <span class="badge badge-info">Bootstrap 5</span>
            </div>
            <div class="mt-2">
              <small class="text-muted">Période : Octobre 2025 - Décembre 2025</small>
            </div>
          </div>
          <div class="col-md-7">
            <h5 class="mb-3"><span class="mr-2">📋</span>Contexte</h5>
            <p>Dans le cadre de ma formation en BTS SIO option SLAM, j'ai développé une application web permettant la gestion centralisée des classes et le suivi des présences dans un établissement d'enseignement. Cette solution intègre un système simple et efficace de validation des présences via une case à cocher après l'appel effectué par le professeur. L'application offre une traçabilité précise et simplifie la gestion administrative pour les établissements d'enseignement en centralisant les informations relatives aux utilisateurs, aux classes et aux emplois du temps.</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <h5 class="mb-3"><span class="mr-2">🎯</span>Consignes</h5>
            <ul>
              <li>Gestion complète des utilisateurs avec différents rôles (administrateur, enseignant, élève)</li>
              <li>Administration des classes, des matières et des plannings de cours</li>
              <li>Système de validation des présences simple par case à cocher</li>
              <li>Interface responsive et intuitive pour tous les types d'utilisateurs</li>
              <li>Enregistrement des présences pour une traçabilité complète</li>
              <li>Respect des standards actuels de développement web et sécurité des données</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">📌</span>Description des tâches</h5>
            <ul>
              <li>Conception de l'architecture de l'application et de la base de données relationnelle</li>
              <li>Développement des interfaces administrateur, enseignant et élève</li>
              <li>Implémentation du système d'authentification sécurisé avec gestion des rôles</li>
              <li>Création du système de validation des présences par case à cocher</li>
              <li>Tests fonctionnels et correction des anomalies</li>
              <li>Documentation technique de l'application</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">🛠️</span>Moyens utilisés</h5>
            <ul>
              <li><strong>Langages :</strong> PHP, JavaScript, HTML, CSS</li>
              <li><strong>Base de données :</strong> MySQL</li>
              <li><strong>Framework CSS :</strong> Bootstrap 5</li>
              <li><strong>Environnement :</strong> XAMPP, Visual Studio Code</li>
              <li><strong>Gestion de version :</strong> Git, GitHub</li>
              <li><strong>Tests :</strong> Tests manuels fonctionnels</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">👥</span>Avec qui</h5>
            <p>Projet développé en autonomie avec validation technique périodique par l'intervenant.</p>

            <h5 class="mt-4 mb-3"><span class="mr-2">⚠️</span>Difficultés rencontrées</h5>
            <p><strong>Problème :</strong> Corruption de ma base de données et de mon environnement XAMPP</p>
            <h6 class="mt-2">✅ Solution apportée</h6>
            <p>Réinstallation complète de l'environnement avec restauration des sauvegardes de code et de données</p>

            <h5 class="mt-4 mb-3"><span class="mr-2">🎯</span>Compétences couvertes</h5>
            <ul>
              <li><strong>Développer la présence en ligne de l'organisation :</strong>
                <ul>
                  <li>Participer à la valorisation de l'image de l'organisation sur les médias numériques</li>
                  <li>Référencer les services en ligne de l'organisation et mesurer leur visibilité</li>
                </ul>
              </li>
              <li><strong>Travailler en mode projet :</strong>
                <ul>
                  <li>Analyser les objectifs et les modalités d'organisation d'un projet</li>
                  <li>Planifier les activités</li>
                </ul>
              </li>
              <li><strong>Mettre à disposition des utilisateurs un service informatique :</strong>
                <ul>
                  <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
                  <li>Déployer un service</li>
                </ul>
              </li>
              <li><strong>Organiser son développement professionnel :</strong>
                <ul>
                  <li>Mettre en place son environnement d'apprentissage personnel</li>
                  <li>Gérer son identité professionnelle</li>
                </ul>
              </li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">📊</span>Bilan personnel</h5>
            <ul>
              <li><strong>Compétences développées :</strong>
                <ul>
                  <li>Maîtrise du développement PHP pour une application web complète</li>
                  <li>Gestion de la sécurité des données et des authentifications</li>
                  <li>Développement d'interfaces utilisateur adaptées à différents profils</li>
                  <li>Gestion d'incidents techniques majeurs (corruption de base de données)</li>
                </ul>
              </li>
              <li><strong>Perspectives d'amélioration :</strong>
                <ul>
                  <li>Refactorisation du code pour adopter une approche entièrement orientée objet</li>
                  <li>Mise en place de contraintes plus strictes sur la création des cours</li>
                  <li>Mise en place d'une réelle signature à enregistrer et stocker</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
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
            <!-- Pas d'image disponible pour Click'n Eat -->
            <div class="mt-3">
              <span class="badge badge-danger">Laravel 10</span>
              <span class="badge badge-secondary">MySQL</span>
              <span class="badge badge-secondary">Blade</span>
              <span class="badge badge-info">Bootstrap 5</span>
              <span class="badge badge-info">JavaScript</span>
            </div>
            <div class="mt-2">
              <small class="text-muted">Période : Janvier 2025 - Mars 2025</small>
            </div>
          </div>
          <div class="col-md-7">
            <h5 class="mb-3"><span class="mr-2">📋</span>Contexte</h5>
            <p>Dans le cadre de ma formation en BTS SIO option SLAM, j'ai conçu et développé une plateforme web permettant aux clients de commander des repas en choisissant un créneau horaire spécifique pour le retrait. Ce système de réservation horaire permet aux utilisateurs de planifier leur venue au restaurant, évitant ainsi les temps d'attente, tout en offrant aux restaurateurs un outil complet pour gérer leurs commandes en fonction des heures prévues.</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <h5 class="mb-3"><span class="mr-2">🎯</span>Consignes</h5>
            <ul>
              <li>Interface client pour la commande et le suivi des préparations</li>
              <li>Espace restaurateur pour la gestion des menus et des commandes</li>
              <li>Panel d'administration complet</li>
              <li>Suivi des commandes pour les clients et restaurateurs</li>
              <li>Organisation des plats par catégories</li>
              <li>Développement avec Laravel selon les standards actuels de développement web</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">📌</span>Description des tâches</h5>
            <ul>
              <li>Création de l'architecture MVC avec Laravel</li>
              <li>Conception des différentes interfaces utilisateurs</li>
              <li>Configuration des différents niveaux d'accès et permissions</li>
              <li>Débogage et tests fonctionnels</li>
              <li>Rédaction de la documentation technique</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">🛠️</span>Moyens utilisés</h5>
            <ul>
              <li><strong>Framework :</strong> Laravel 10</li>
              <li><strong>Gestion de données :</strong> MySQL</li>
              <li><strong>Front-end :</strong> Blade, Bootstrap 5, JavaScript</li>
              <li><strong>Outils de développement :</strong> Visual Studio Code, Git, GitHub</li>
              <li><strong>Tests :</strong> PHPUnit</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">👥</span>Avec qui</h5>
            <p>Projet développé en autonomie avec validation technique périodique par l'intervenant.</p>

            <h5 class="mt-4 mb-3"><span class="mr-2">⚠️</span>Difficultés rencontrées</h5>
            <p><strong>Problème :</strong> Problèmes de gestion des rôles suites à une maj de Laravel</p>
            <h6 class="mt-2">✅ Solution apportée</h6>
            <p>Changement dans les routes et dans le middleware qui gère les rôles.</p>

            <h5 class="mt-4 mb-3"><span class="mr-2">🎯</span>Compétences couvertes</h5>
            <ul>
              <li><strong>Développer la présence en ligne de l'organisation :</strong>
                <ul>
                  <li>Participer à la valorisation de l'image de l'organisation sur les médias numériques</li>
                  <li>Référencer les services en ligne de l'organisation et mesurer leur visibilité</li>
                </ul>
              </li>
              <li><strong>Travailler en mode projet :</strong>
                <ul>
                  <li>Analyser les objectifs et les modalités d'organisation d'un projet</li>
                  <li>Planifier les activités</li>
                </ul>
              </li>
              <li><strong>Mettre à disposition des utilisateurs un service informatique :</strong>
                <ul>
                  <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
                  <li>Déployer un service</li>
                  <li>Accompagner les utilisateurs dans la mise en place d'un service</li>
                </ul>
              </li>
              <li><strong>Organiser son développement professionnel :</strong>
                <ul>
                  <li>Mettre en place son environnement d'apprentissage personnel</li>
                  <li>Mettre en œuvre des outils et stratégies de veille informationnelle</li>
                </ul>
              </li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">📊</span>Bilan personnel</h5>
            <ul>
              <li><strong>Compétences développées :</strong>
                <ul>
                  <li>Maîtrise du framework Laravel</li>
                  <li>Gestion autonome d'un projet complexe</li>
                  <li>Mise en place d'interfaces par rôle</li>
                  <li>Sécurisation des données utilisateurs</li>
                </ul>
              </li>
              <li><strong>Perspectives d'amélioration :</strong>
                <ul>
                  <li>Augmentation du nombre de tests unitaires</li>
                  <li>Mettre en place un système de paiement (via Stripe par exemple)</li>
                  <li>Possibilité de personnalisation pour les restaurateurs</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
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
            <img src="img/imgglpi.png" class="img-fluid rounded shadow-sm" alt="GLPI">
            <div class="mt-3">
              <span class="badge badge-success">GLPI</span>
              <span class="badge badge-secondary">Debian</span>
              <span class="badge badge-secondary">Ubuntu</span>
              <span class="badge badge-info">VMware</span>
            </div>
            <div class="mt-2">
              <small class="text-muted">Période : Avril 2025 - Mai 2025</small>
            </div>
          </div>
          <div class="col-md-7">
            <h5 class="mb-3"><span class="mr-2">📋</span>Contexte</h5>
            <p>Dans le cadre d'une mise en situation professionnelle pour ma formation en BTS SIO option SLAM, j'ai été chargé de mettre en place une solution de ticketing pour l'entreprise Contoso, qui compte 250 salariés. L'entreprise souhaitait disposer d'un outil permettant aux utilisateurs de créer et suivre leurs tickets via une interface simplifiée, en utilisant leur authentification LDAP existante. Le système devait également permettre une gestion efficace par trois équipes techniques distinctes (Système, Réseau et Application), tout en facilitant l'assignation automatique des demandes.</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12">
            <h5 class="mb-3"><span class="mr-2">🎯</span>Consignes</h5>
            <ul>
              <li>Configuration d'un système d'authentification compatible avec LDAP</li>
              <li>Création de profils utilisateurs différenciés (self-service et techniciens)</li>
              <li>Mise en place de groupes techniques spécialisés</li>
              <li>Configuration de formulaires de tickets préformatés avec assignation automatique</li>
              <li>Mise en place d'un système d'inventaire du parc informatique</li>
              <li>Installation d'un agent GLPI sur une machine cliente pour l'inventaire automatique</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">📌</span>Description des tâches</h5>
            <ul>
              <li>Configuration de l'entité par défaut dans GLPI</li>
              <li>Paramétrage des profils de service et des techniciens</li>
              <li>Création des groupes techniques (Application, Réseau, Système)</li>
              <li>Création d'utilisateurs avec différents profils :
                <ul>
                  <li>Utilisateurs standard avec profil self-service</li>
                  <li>Techniciens spécialisés affectés à leurs groupes respectifs</li>
                </ul>
              </li>
              <li>Mise en place de catégories de tickets (logiciel, matériel)</li>
              <li>Création de 3 formulaires spécifiques (Application, Réseau, Système) avec champs personnalisés</li>
              <li>Configuration des règles d'assignation automatique des tickets aux groupes concernés</li>
              <li>Déploiement d'un agent GLPI sur une machine cliente pour l'inventaire automatique</li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">🛠️</span>Moyens utilisés</h5>
            <ul>
              <li><strong>Logiciels :</strong> GLPI (solution de gestion libre de parc informatique et de helpdesk), GLPI Project (gestion de projets)</li>
              <li><strong>Environnement virtualisé VMware avec :</strong>
                <ul>
                  <li>Une machine virtuelle Debian pour l'hébergement du serveur GLPI</li>
                  <li>Une machine virtuelle Ubuntu pour les tests clients et déploiement de l'agent GLPI</li>
                </ul>
              </li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">👥</span>Avec qui</h5>
            <p>Projet réalisé dans le cadre de ma formation.</p>

            <h5 class="mt-4 mb-3"><span class="mr-2">⚠️</span>Difficultés rencontrées</h5>
            <p><strong>Problème :</strong> Problème de connexion entre les VM pour envoyer la configuration vers le GLPI Admin.</p>
            <h6 class="mt-2">✅ Solution apportée</h6>
            <p>Correction de l'URL du serveur dans la configuration de l'agent et en redémarrant le service, permettant ainsi l'envoi de la configuration vers GLPI Admin.</p>

            <h5 class="mt-4 mb-3"><span class="mr-2">🎯</span>Compétences couvertes</h5>
            <ul>
              <li><strong>Gérer le patrimoine informatique :</strong>
                <ul>
                  <li>Recenser et identifier les ressources numériques</li>
                  <li>Exploiter des référentiels, normes et standards adoptés par le prestataire informatique</li>
                  <li>Mettre en place et vérifier les niveaux d'habilitation associés à un service</li>
                  <li>Vérifier les conditions de la continuité d'un service informatique</li>
                  <li>Gérer des sauvegardes</li>
                  <li>Vérifier le respect des règles d'utilisation des ressources numériques</li>
                </ul>
              </li>
              <li><strong>Répondre aux incidents et aux demandes d'assistance et d'évolution :</strong>
                <ul>
                  <li>Collecter, suivre et orienter des demandes</li>
                  <li>Traiter des demandes concernant les services réseau et système</li>
                  <li>Traiter des demandes concernant les applications</li>
                </ul>
              </li>
            </ul>

            <h5 class="mt-4 mb-3"><span class="mr-2">📊</span>Bilan personnel</h5>
            <ul>
              <li><strong>Compétences développées :</strong>
                <ul>
                  <li>Maîtrise du logiciel GLPI pour la gestion du parc informatique et des tickets</li>
                </ul>
              </li>
              <li><strong>Perspectives d'amélioration :</strong>
                <ul>
                  <li>Faire des tickets plus complet et complexe, en fonction des réponses utilisateur.</li>
                  <li>Explorer les fonctionnalités de gestion de parc dans sa globalité.</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
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
<script>
$(function(){
  // Fonction pour ouvrir la modale selon le paramètre ?modal=xxx
  function openModalFromParam() {
    const urlParams = new URLSearchParams(window.location.search);
    const modalParam = urlParams.get('modal');
    console.log('[Debug Realisations] Modal parameter from URL:', modalParam);

    if(modalParam) {
      // Les ancres sont en minuscules (ex: 'portfolio'), les IDs de modales sont #modalPortfolio
      let modalId = '#modal' + modalParam.charAt(0).toUpperCase() + modalParam.slice(1).toLowerCase();
      console.log('[Debug Realisations] Constructed modal ID:', modalId);

      const modalElement = $(modalId);
      console.log('[Debug Realisations] jQuery selector result for modal ID:', modalElement);
      console.log('[Debug Realisations] Number of elements found:', modalElement.length);

      if(modalElement.length) {
        console.log('[Debug Realisations] Attempting to show modal:', modalId);
        modalElement.modal('show');
        // Temporairement commenté pour le débogage :
        // console.log('[Debug Realisations] Attempting to clean URL history');
        // window.history.replaceState({}, document.title, window.location.pathname + (window.location.hash || ''));
      } else {
        console.warn('[Debug Realisations] Modal element not found in DOM for ID:', modalId);
      }
    } else {
      console.log('[Debug Realisations] No \'modal\' parameter found in URL.');
    }
  }
  openModalFromParam();
});
</script>
<?php include_once('partials/footer.php'); ?>

</body>
</html>
