<!DOCTYPE html>
<html lang="fr">

<title>Sam Lanaverre Portfolio COUCOU</title>

<!-- link  -->
<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"/>
<!-- https://fonts.google.com/specimen/Open+Sans -->
<link rel="stylesheet" href="css/all.min.css" />
<!-- https://fontawesome.com/ -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- https://getbootstrap.com/ -->
<!-- <link rel="stylesheet" href="css/tooplate-style.css" />  Tech Startup theme active, template désactivé pour test -->
<!-- Tooplate 2111 Pro Line
http://www.tooplate.com/view/2111-pro-line
-->
<style>
  body, html {
    background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);
    color: #222831;
    font-family: 'Open Sans', Arial, sans-serif;
    min-height: 100vh;
  }
  .navbar, .navbar-light.bg-light, .shadow-sm {
    background: #fff !important;
    border-bottom: 1px solid #e5e9f2 !important;
    box-shadow: 0 2px 12px 0 rgba(79,140,255,0.04);
    color: #222831 !important;
  }
  .navbar-nav .nav-link {
    color: #4f8cff !important;
    font-weight: 600;
    letter-spacing: 0.5px;
    border-radius: 0.4rem;
    transition: background 0.2s, color 0.2s;
    padding: 0.5rem 1.1rem;
    margin: 0 0.2rem;
  }
  .navbar-nav .nav-link.active, .navbar-nav .nav-link:focus, .navbar-nav .nav-link:hover {
    color: #fff !important;
    background: linear-gradient(90deg, #4f8cff 60%, #7c3aed 100%);
  }
  .navbar-toggler {
    border-color: #4f8cff !important;
  }
  .navbar-toggler-icon {
    background-image: none !important;
    color: #4f8cff !important;
  }
  h1, h2, h3, h4, h5, h6 {
    color: #222831;
    font-weight: 700;
    letter-spacing: 0.5px;
  }
  a, a:visited {
    color: #4f8cff;
    transition: color 0.2s;
  }
  a:hover, a:focus {
    color: #7c3aed;
    text-decoration: underline;
  }
  .btn-primary, .btn-primary:focus, .btn-primary:active {
    background: linear-gradient(90deg, #4f8cff 60%, #7c3aed 100%) !important;
    border: none !important;
    color: #fff !important;
    font-weight: 600;
    box-shadow: 0 4px 18px 0 rgba(79,140,255,0.10);
    letter-spacing: 0.5px;
    border-radius: 0.5rem;
    transition: background 0.2s, box-shadow 0.2s;
  }
  .btn-primary:hover {
    background: linear-gradient(90deg, #7c3aed 60%, #4f8cff 100%) !important;
    color: #fff !important;
    box-shadow: 0 6px 24px 0 rgba(124,58,237,0.14);
  }
  .btn, .btn-lg {
    border-radius: 0.5rem;
    font-weight: 600;
  }
  .rounded, .rounded-circle, img.rounded-circle {
    border-radius: 1.2rem !important;
    border: 3px solid #4f8cff !important;
    background: #f3f6fa !important;
    box-shadow: 0 2px 12px 0 rgba(79,140,255,0.09);
  }
  .container, .container-fluid {
    background: transparent;
    border-radius: 1.2rem;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .competence-table {
    background: #fff !important;
    color: #222831 !important;
    border-radius: 0.8rem;
    box-shadow: 0 2px 16px 0 rgba(79,140,255,0.07);
    overflow: hidden;
  }
  .competence-table th {
    background: linear-gradient(90deg, #4f8cff 60%, #7c3aed 100%) !important;
    color: #fff !important;
    border: none;
    font-size: 1.08rem;
    font-weight: 700;
    letter-spacing: 0.5px;
  }
  .competence-table td {
    border-color: #e0e7ef !important;
    font-size: 1rem;
  }
  .competence-table tbody tr:nth-child(even) {
    background: #f3f6fa !important;
  }
  .main-competence {
    color: #222831;
    font-weight: 600;
    margin-top: 0.7em;
    display: block;
  }
  .sub-competence {
    color: #4f8cff;
    margin-left: 1.2em;
    font-weight: 400;
    display: block;
  }
  .project-name {
    color: #7c3aed;
    font-weight: 700;
  }
  hr {
    border-top: 2px solid #e0e7ef;
  }
  footer, .footer, .mt-auto {
    background: #fff !important;
    color: #7c3aed !important;
    border-top: 2px solid #4f8cff;
    box-shadow: 0 -1px 14px 0 rgba(79,140,255,0.05);
    border-radius: 0 0 1.2rem 1.2rem;
  }
  .scrolltop {
    background: #4f8cff !important;
    color: #fff !important;
    border: none;
    box-shadow: 0 2px 8px 0 rgba(79,140,255,0.12);
  }
  #tmVideoSection {
    position: relative;
    overflow: hidden;
    border-radius: 1.2rem 1.2rem 0 0;
    margin-bottom: 2rem;
    background: linear-gradient(135deg, #e0e7ef 0%, #f8fafc 100%);
  }
  #tmVideoSection header, #tmVideoSection .tm-banner-title, #tmVideoSection .tm-banner-subtitle {
    position: relative;
    z-index: 2;
    color: #222831 !important;
    text-shadow: 0 2px 8px #fff;
  }
  #tmVideoSection::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(79,140,255, 0.12);
    z-index: 1;
    pointer-events: none;
  }
</style>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" 
rel="stylesheet"/> -->


<!-- meta  -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<!-- L'en-tête Pro Line a été supprimé -->
