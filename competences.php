<?php include_once("partials/head.php") ?>

<body>

<?php include_once("partials/barrenav.php") ?>

<main class="flex-grow-1">
  <div class="container mt-5">
    <h1 class="mb-5 text-center" style="font-weight:700;color:#232946;">Les 6 compétences du BTS SIO</h1>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="competence-card h-100 p-4 text-center shadow-sm rounded-4 d-flex flex-column justify-content-center" data-competence="patrimoine-informatique" tabindex="0">
  <span class="competence-icon mb-3"><i class="fas fa-server fa-2x"></i></span>
  <h3 class="competence-title">Gérer le patrimoine informatique</h3>
</div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="competence-card h-100 p-4 text-center shadow-sm rounded-4 d-flex flex-column justify-content-center" data-competence="assistance-evolution" tabindex="0">
  <span class="competence-icon mb-3"><i class="fas fa-headset fa-2x"></i></span>
  <h3 class="competence-title">Répondre aux incidents et aux demandes d'assistance et d'évolution</h3>
</div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="competence-card h-100 p-4 text-center shadow-sm rounded-4 d-flex flex-column justify-content-center" data-competence="presence-en-ligne" tabindex="0">
  <span class="competence-icon mb-3"><i class="fas fa-globe fa-2x"></i></span>
  <h3 class="competence-title">Développer la présence en ligne de l'organisation</h3>
</div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="competence-card h-100 p-4 text-center shadow-sm rounded-4 d-flex flex-column justify-content-center" data-competence="mode-projet" tabindex="0">
  <span class="competence-icon mb-3"><i class="fas fa-users fa-2x"></i></span>
  <h3 class="competence-title">Travailler en mode projet</h3>
</div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="competence-card h-100 p-4 text-center shadow-sm rounded-4 d-flex flex-column justify-content-center" data-competence="service-informatique" tabindex="0">
  <span class="competence-icon mb-3"><i class="fas fa-desktop fa-2x"></i></span>
  <h3 class="competence-title">Mettre à disposition des utilisateurs un service informatique</h3>
</div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="competence-card h-100 p-4 text-center shadow-sm rounded-4 d-flex flex-column justify-content-center" data-competence="developpement-pro" tabindex="0">
  <span class="competence-icon mb-3"><i class="fas fa-chart-line fa-2x"></i></span>
  <h3 class="competence-title">Organiser son développement professionnel</h3>
</div>
      </div>
    </div> <!-- Fermeture de la div class="row g-4" -->
  </div> <!-- Fermeture de la div class="container mt-5" -->
</main> <!-- Fermeture de la balise main -->

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!-- Font Awesome (si pas déjà inclus dans head.php) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Modal réalisations par compétence -->
<style>
.competence-popover {
  position: absolute;
  z-index: 1050;
  left: 0; top: 0;
  width: 0; height: 0;
}
.competence-popover-content {
  position: absolute;
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 8px 40px rgba(79,140,255,0.18);
  min-width: 270px;
  max-width: 400px;
  width: max-content;
  padding: 1.2rem 1.1rem 1.1rem 1.1rem;
  z-index: 2;
  animation: popoverPopIn 0.32s cubic-bezier(.2,.8,.2,1);
  border: 2px solid #4f8cff;
  max-height: 70vh;
  overflow-y: auto;
}
@keyframes popoverPopIn {
  from { transform: scale(0.92) translateY(30px); opacity: 0; }
  to { transform: scale(1) translateY(0); opacity: 1; }
}
.competence-popover-close {
  position: absolute;
  top: 0.7rem; right: 1.1rem;
  background: none;
  border: none;
  font-size: 1.7rem;
  color: #4f8cff;
  cursor: pointer;
  transition: color 0.2s;
  z-index: 2;
}
.competence-popover-close:hover {
  color: #7c3aed;
}
.competence-popover-title {
  margin-top: 0;
  margin-bottom: 1.1rem;
  font-size: 1.08rem;
  color: #2563eb;
  font-weight: 700;
  text-align: center;
}
.competence-popover-body {
  display: flex;
  flex-direction: column;
  gap: 0.8rem;
}
.competence-real-card {
  background: #f8fbff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(79,140,255,0.06);
  padding: 0.85rem 1rem;
  display: flex;
  flex-direction: column;
  cursor: pointer;
  border: 2px solid transparent;
  transition: box-shadow 0.2s, border-color 0.2s, background 0.2s;
  text-decoration: none;
}
.competence-real-card:hover, .competence-real-card:focus {
  background: #eaf2ff;
  border-color: #4f8cff;
  box-shadow: 0 4px 18px rgba(79,140,255,0.15);
  outline: none;
}
.competence-real-title {
  font-size: 1.08rem;
  color: #2563eb;
  font-weight: 600;
  margin-bottom: 0.3rem;
}
.competence-real-desc {
  font-size: 0.97rem;
  color: #444;
}
@media (max-width: 600px) {
  .competence-popover-content { min-width: 180px; max-width: 98vw; padding: 0.7rem 0.3rem 0.7rem 0.3rem; }
  .competence-popover-title { font-size: 0.95rem; }
  .competence-popover-body { gap: 0.6rem; }
}
</style>
<div id="competencePopover" class="competence-popover" style="display:none;">
  <div class="competence-popover-content" role="dialog" aria-modal="true">
    <button class="competence-popover-close" aria-label="Fermer">&times;</button>
    <h4 class="competence-popover-title">Réalisations pour cette compétence</h4>
    <div class="competence-popover-body" id="competencePopoverBody">
      <!-- Les cartes de réalisations seront injectées ici -->
    </div>
  </div>
</div>
<script>
const competenceRealisations = {
  "presence-en-ligne": [
    {
      title: "Portfolio",
      desc: "Création d'un portfolio professionnel",
      anchor: "portfolio"
    },
    {
      title: "BFormation",
      desc: "Application PHP de gestion des classes et des présences",
      anchor: "bformation"
    },
    {
      title: "ClicknEat",
      desc: "Application web de commande et réservation de repas",
      anchor: "clickneat"
    }
  ],
  "mode-projet": [
    {
      title: "BFormation",
      desc: "Application PHP de gestion des classes et des présences",
      anchor: "bformation"
    },
    {
      title: "ClicknEat",
      desc: "Application web de commande et réservation de repas",
      anchor: "clickneat"
    }
  ],
  "service-informatique": [
    {
      title: "Portfolio",
      desc: "Création d'un portfolio professionnel",
      anchor: "portfolio"
    },
    {
      title: "BFormation",
      desc: "Application PHP de gestion des classes et des présences",
      anchor: "bformation"
    },
    {
      title: "ClicknEat",
      desc: "Application web de commande et réservation de repas",
      anchor: "clickneat"
    }
  ],
  "developpement-pro": [
    {
      title: "Portfolio",
      desc: "Création d'un portfolio professionnel",
      anchor: "portfolio"
    },
    {
      title: "BFormation",
      desc: "Application PHP de gestion des classes et des présences",
      anchor: "bformation"
    },
    {
      title: "ClicknEat",
      desc: "Application web de commande et réservation de repas",
      anchor: "clickneat"
    }
  ],
  "patrimoine-informatique": [
    {
      title: "GLPI",
      desc: "Gestion de ticketing et de patrimoine",
      anchor: "glpi"
    }
  ],
  "assistance-evolution": [
    {
      title: "GLPI",
      desc: "Gestion de ticketing et de patrimoine",
      anchor: "glpi"
    }
  ]
};

// Gestion du popover contextuel
let currentPopoverAnchor = null;
function showCompetencePopover(anchor, compKey) {
  const realList = competenceRealisations[compKey] || [];
  const popover = document.getElementById('competencePopover');
  const popoverBody = document.getElementById('competencePopoverBody');
  popoverBody.innerHTML = '';
  realList.forEach(real => {
    const cardDiv = document.createElement('a');
    cardDiv.className = 'competence-real-card';
    cardDiv.href = `realisations.php?modal=${real.anchor}`;
    
    cardDiv.innerHTML = `<div class="competence-real-title">${real.title}</div>\n                           <div class="competence-real-desc">${real.desc}</div>`;
    popoverBody.appendChild(cardDiv);
  });
  // Positionnement du popover sous le bloc cliqué
  const rect = anchor.getBoundingClientRect();
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  const scrollLeft = window.scrollX || document.documentElement.scrollLeft;
  popover.style.display = 'block';
  // Décalage vertical et horizontal pour effet "qui sort du bloc"
  let top = rect.bottom + scrollTop + 8;
  let left = rect.left + scrollLeft + rect.width/2;
  popover.querySelector('.competence-popover-content').style.left = '0';
  popover.querySelector('.competence-popover-content').style.top = '0';
  setTimeout(()=>{
    const popContent = popover.querySelector('.competence-popover-content');
    const popWidth = popContent.offsetWidth;
    const popHeight = popContent.offsetHeight;
    let leftFinal = left - popWidth/2;
    // Empêcher de sortir de l'écran horizontalement
    leftFinal = Math.max(leftFinal, 8);
    leftFinal = Math.min(leftFinal, window.innerWidth - popWidth - 8);
    // Si le popover déborde en bas, on l'affiche au-dessus du bloc
    let topFinal = top;
    if (top + popHeight > window.innerHeight + scrollTop - 8) {
      topFinal = rect.top + scrollTop - popHeight - 8;
      if (topFinal < scrollTop + 8) topFinal = scrollTop + 8; // ne pas sortir en haut non plus
    }
    popContent.style.left = leftFinal + 'px';
    popContent.style.top = topFinal + 'px';
    popContent.focus();
  }, 10);
  currentPopoverAnchor = anchor;
}
document.querySelectorAll('.competence-card[data-competence]').forEach(card => {
  card.addEventListener('click', function(e) {
    e.stopPropagation();
    showCompetencePopover(this, this.getAttribute('data-competence'));
  });
});
function closeCompetencePopover() {
  document.getElementById('competencePopover').style.display = 'none';
  currentPopoverAnchor = null;
}
document.querySelector('.competence-popover-close').onclick = closeCompetencePopover;
document.addEventListener('click', function(e) {
  const popover = document.getElementById('competencePopover');
  if(popover.style.display==='block' && !popover.contains(e.target)) closeCompetencePopover();
});
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeCompetencePopover();
});
window.addEventListener('scroll', function() {
  if(document.getElementById('competencePopover').style.display==='block') closeCompetencePopover();
});
</script>
<?php include_once("partials/footer.php")?>
</body>
</html>