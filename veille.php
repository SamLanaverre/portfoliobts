<?php include_once("partials/head.php") ?>

<body>

<?php include_once("partials/barrenav.php") ?>


    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<!-- Font Awesome pour les icônes -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Tableau de veille moderne -->
<style>
.veille-table-container {
  overflow-x: auto;
  margin: 2rem auto;
  padding-left: 2vw;
  padding-right: 2vw;
  max-width: 98vw;
}
.veille-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  background: #f8fbff;
  border-radius: 16px;
  box-shadow: 0 2px 16px rgba(79,140,255,0.08);
  font-size: 1rem;
  min-width: 700px;
  overflow: hidden;
  border: 2px solid #4f8cff; /* Bleu plus clair et moins épais */
}
.veille-table th, .veille-table td {
  padding: 1rem;
  text-align: left;
  border-bottom: 1px solid #e3eefd;
}
.veille-table th {
  background: #4f8cff;
  color: #fff;
  font-weight: 600;
  border-top: none;
}
.veille-table tr:nth-child(even) {
  background: #eaf2ff;
}
.veille-table tr:nth-child(odd) {
  background: #f8fbff;
}
.veille-table tr:last-child td {
  border-bottom: none;
}
.veille-table {
  border-radius: 16px;
  overflow: hidden;
}
.veille-link {
  color: #4f8cff;
  font-weight: bold;
  text-decoration: none;
  border-bottom: 1.5px dashed #7c3aed;
  transition: color 0.2s;
}
.veille-link:hover {
  color: #7c3aed;
  text-decoration: underline;
}
.veille-icon {
  margin-right: 0.5em;
  font-size: 1.2em;
  vertical-align: middle;
}
.veille-icon.greenit {
  color: #4f8cff;
}
.veille-icon.ai {
  color: #7c3aed;
}
@media (max-width: 900px) {
  .veille-table {
    font-size: 0.95rem;
    min-width: 500px;
  }
}
@media (max-width: 600px) {
  .veille-table-container {
    margin: 1rem -0.5rem;
  }
  .veille-table {
    min-width: 350px;
    font-size: 0.89rem;
  }
  .veille-table th, .veille-table td {
    padding: 0.5rem;
  }
}
</style>

<div class="veille-table-container">
  <table class="veille-table">
    <thead>
      <tr>
        <th>Sujet de veille</th>
        <th>Sujet de l'article</th>
        <th>Description</th>
        <th>Liens</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><span class="veille-icon greenit"><i class="fas fa-leaf"></i></span> Green IT</td>
        <td>Green Tech Forum</td>
        <td>Forum pour préparer une transition numérique écologique. Avec des réunions, des ateliers, le forum a pour objectif de d'informer sur : l'impact environnement du numérique, les stratégies et actions prioritaires pour un numérique responsable, la réglementation et le cadre législatif ou encore les innovations technologiques et durabilité.</td>
        <td><a href="https://numeum.fr/actu-informatique/green-tech-forum-les-5-et-6-novembre-2024" target="_blank" class="veille-link">Voir l'article <i class="fas fa-external-link-alt"></i></a></td>
      </tr>
      <tr>
        <td><span class="veille-icon greenit"><i class="fas fa-leaf"></i></span> Green IT</td>
        <td>Consommation d'un site web</td>
        <td>Site pouvant tester l'impact environnemental de votre site internet.</td>
        <td><a href="https://www.greenit.fr/2022/12/01/votre-site-web-est-il-ecolo-la-reponse-en-un-clic-avec-ecoindex-fr/" target="_blank" class="veille-link">Voir l'article <i class="fas fa-external-link-alt"></i></a></td>
      </tr>
      <tr>
        <td><span class="veille-icon greenit"><i class="fas fa-leaf"></i></span> Green IT</td>
        <td>Bilan actuel et regard vers la suite</td>
        <td>De plus en plus d'entreprises françaises choisissent de miser sur le marché de l'occasion pour les smartphones, ordinateurs et autres équipements numériques. Ce choc n'est pas anodin : il reflète une prise de conscience croissante et une envie de faire mieux. En prolongeant la durée de vie des appareils, on évite leur remplacement trop rapide et on limite la production de nouveaux équipements, souvent très polluants à fabriquer.</td>
        <td><a href="https://www.leasetic.fr/blog/limpact-carbone-ecologique-numerique-2024-bilan-pistes-dactions-avenir-durable" target="_blank" class="veille-link">Voir l'article <i class="fas fa-external-link-alt"></i></a></td>
      </tr>
      <tr>
        <td><span class="veille-icon ai"><i class="fas fa-robot"></i></span> Éthique de l'IA</td>
        <td>Éthique de l'IA par l'UNESCO</td>
        <td>L'UNESCO donne les points positifs de l'IA tout en mettant en garde sur les potentiels préoccupations éthiques. Avec les 4 valeurs qui sont leur ligne directrice (Droits de l'homme et dignité humaine / Vivre dans les sociétés pacifiques / Assurer la diversité et l'inclusion / Un environnement et des écosystèmes qui prospèrent).</td>
        <td><a href="https://www.unesco.org/fr/artificial-intelligence/recommendation-ethics" target="_blank" class="veille-link">Voir l'article <i class="fas fa-external-link-alt"></i></a></td>
      </tr>
      <tr>
        <td><span class="veille-icon ai"><i class="fas fa-robot"></i></span> Éthique de l'IA</td>
        <td>L'horreur existentielle de l'usine à téléphones</td>
        <td>Vidéo du Youtubeur "EGO" qui raconte les dérives que pourrait causer l'IA en cas de mauvaise utilisation, avec le jeu Universal Paperclips en support. Il raconte que la programmation et l'utilisation de l'IA dans une seule direction, peut faire de lourds dommages et complètement oublier l'éthique en cas de non-surveillance.</td>
        <td><a href="https://www.youtube.com/watch?v=ZP7T6WAK3Ow" target="_blank" class="veille-link">Voir la vidéo <i class="fas fa-external-link-alt"></i></a></td>
      </tr>
      <tr>
        <td><span class="veille-icon ai"><i class="fas fa-robot"></i></span> Éthique de l'IA</td>
        <td>L'éthique de l'IA au travail</td>
        <td>L'article montre comment l'IA permet aux entreprises de gagner du temps et d'optimiser leurs tâches. Elle peut s'occuper des tâches répétitives et laisse donc du temps pour que les salariés puissent travailler sur des sujets plus intéressants tel que : la créativité, la stratégie, l'humain. Côté client, elle permet des interactions plus personnalisées, plus pertinentes, presque sur-mesure pour les clients.</td>
        <td><a href="https://www.mandarine.academy/transformation-digitale-et-entreprises/lethique-de-lia-au-travail-comment-tracer-une-ligne-claire-et-responsable" target="_blank" class="veille-link">Voir l'article <i class="fas fa-external-link-alt"></i></a></td>
      </tr>
    </tbody>
  </table>
</div>

<?php include_once("partials/footer.php")?>

</html>