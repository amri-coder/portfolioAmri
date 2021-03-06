<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
  <link href="./css/cv.css" rel="stylesheet">

  <title>Amri</title>
</head>

<body class="bg-light">

  <!--NavBar-->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <a href="#accueil" class="navabar-brand" id="logo"><img src="img/amrimaher.png" height="60px" width="60px" title="Amri." alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCOLLAPSE">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-0" id="navbarCOLLAPSE">
        <ul class="navbar-nav text-right inline">

          <li class="nav-item text-center" id="menu1">
            <a href="#accueil" class="nav-link active" style="color:#1B1960;">
              Accueil
            </a>
          </li>

          <li class="nav-item text-center" id="menu2">
            <a href="#apropos" class="nav-link" style="color:#1B1960;">
              À propos
            </a>
          </li>

          <li class="nav-item text-center" id="menu3">
            <a href="#services" class="nav-link" style="color:#1B1960;">
              Services
            </a>
          </li>

          <li class="nav-item text-center" id="menu4">
            <a href="#portfolio" class="nav-link" style="color:#1B1960;">
              Portfolio
            </a>
          </li>
          <li class="nav-item text-center" id="menu5">
            <a href="#contact" class="nav-link" style="color:#1B1960;">
              Contact
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!--Fin NavBar-->

  <!-- Accueil -->

  <section class="accueil py-5" id="accueil">
    <div class="container-lg">
      <div class="row min-vh-100 align-item-center align-content-center">
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="accueil-img text-center">
            <img src="img/amri.png" class="rounded-circle mw-100" alt="Amri img">
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0 order-md-first">
          <div class="accueil-text">
            <p class="text-muted mb-1">Bonjour, Je suis </p>
            <h1 class="text-info text-uppercase fw-bold">Développeur Web</h1>
            <h2 class="fs-4">Amri Maher.</h2>
            <p class="mt-4 text-muted">Développeur Web, je suis à votre disposition pour répondre à tout type de projets
              de création de sites internet vitrine, e-commerce, de développement spécifique ou d’applications web.
            </p>
            <a href="#portfolio" class="btn btn-info px-3 mt-3">Mon travail</a>
          </div>
        </div>
      </div>
    </div>
    <div class="mouse_scroll">
      <a href="#apropos">
        <div class="mouse">
          <div class="wheel"></div>
        </div>
        <div>
          <span class="m_scroll_arrows unu"></span>
          <span class="m_scroll_arrows doi"></span>
          <span class="m_scroll_arrows trei"></span>

        </div>
      </a>
    </div>
  </section>

  <!-- Fin De La Section Accueil -->


  <!-- Section A propos-->

  <section class="apropos bg-white py-5" id="apropos">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">À PROPOS</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="apropos-text">
            <h3 class="fs-4 mb-3">Ce que je réalise</h3>
            <p class="text-muted">Création de tous types de projet web : aussi bien un site vitrine, site WordPress,
              e-commerce, sur mesure ou une application mobile… Les sites internet développés sont également optimisés
              pour les différents navigateurs et moteurs de recherche et surtout 100% adaptés à vos besoins.
            </p>
          </div>
          <div class="row text-center text-uppercase my-3">
            <div class="col-sm-4">
              <div class="fact-item">
                <h4 class="fs-1 fw-bold">100</h4>
                <p class="text-muted">Projets Terminés</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="fact-item">
                <h4 class="fs-1 fw-bold">90</h4>
                <p class="text-muted">Clients Satisfaits</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="fact-item">
                <h4 class="fs-1 fw-bold">95</h4>
                <p class="text-muted">Avis Positifs</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 d-flex align-item-center">
              <a href="cv/cv.html" class="btn px-3 btn-info me-5">Voir cv</a>
              <div class="social-links">
                <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                <a href=" https://github.com/amri-coder" class="text-dark me-2"><i class="fab fa-github"></i></a>
                <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/amri-amri-302228187/" class="text-dark me-2"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-6 mt-5 mt-md-0">

          <div class="skill-item mb-4">
            <h3 class="fs-6">HTML 5 / CSS 3</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="skill-item mb-4">
            <h3 class="fs-6">PHP</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="skill-item mb-4">
            <h3 class="fs-6">SYMFONY</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="skill-item mb-4">
            <h3 class="fs-6">JAVASCRIPT</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="skill-item mb-4">
            <h3 class="fs-6">REACT</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="skill-item mb-4">
            <h3 class="fs-6">BOOTSTRAP</h3>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Fin De La Section A propos-->


  <!-- Services -->
  <section class="services py-5" id="services">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">SERVICES</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <i class="fas fa-code"></i>
            </div>
            <h3 class="fs-5 py-2">Développement Web</h3>
            <p class="text-muted">La <span style="font-weight: bold;">création de site web</span> est indispensable pour
              améliorer la visibilité de ses activités. Le <span style="font-weight: bold;">développement</span> de
              votre site web est réalisé <span style="font-weight:bold;">avec soin</span> et répond aux standards web du
              W3C.</p>
            <ul>
              <li>HTML5 & CSS3</li>
              <li>Design responsive</li>
            </ul>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <i class="fas fa-lightbulb"></i>
            </div>
            <h3 class="fs-5 py-2">Web Design</h3>
            <p class="text-muted">Votre identité de marque (logo, design de tous supports web) est créée <span style="font-weight: bold;">sur mesure</span> pour répondre aux besoins de <span style="font-weight: bold;">votre cible</span>.</p>
            <ul>
              <li>Design de site internet</li>
              <li>Application web & mobile</li>
              <li>Mise en page de contenu</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <i class="fas fa-wrench"></i>
            </div>
            <h3 class="fs-5 py-2">Maintenance</h3>
            <p class="text-muted">Un <span style="font-weight: bold;">site internet en bonne santé</span> est un site
              internet mis à jour.
              Les forfaits de maintenance proposés sont le fruits d’années d’expérience et des solutions apportées à mes
              clients afin de vous garantir un site internet performant et fiable.</p>
            <ul>
              <li>Maintenance des sites web</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin section Services -->

  <!--Portfolio-->

  <section class="portfolio py-5" id="portfolio">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">QUELQUES RÉALISATIONS</span></h2>
          </div>
        </div>
      </div>




      <div class="row text-center">

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="img/amri.store.PNG" class="card-img-top" alt="amri.store">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">Site Agence</h3>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>

            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#exampleModalSiteAgence">Voir plus !</button>

            <!--modal Site Agence-->

            <div class="modal fade" id="exampleModalSiteAgence" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">amri.store</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="img/amri.store.png" class="card-img-top border border-muted" alt="amri-dev.site">
                    <h2 class="text-primary text-uppercase ">Site Agence Web</h2>
                    <h2 class="fs-4">Amri.</h2>
                    <h4 style="color: #93A4AA;">- Stack Technique -</h4>
                    <p class="mt-4 text-muted">
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        react-bootstrap
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        styled-components
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        React Router
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        React
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        fortawesome
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        material-ui
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        Autres
                      </button>
                    </p>
                  </div>
                  <div class="modal-footer">

                    <a href="http://amri.store/" class="btn btn-secondary text-decoration-none text-white" role="button">
                      EXÉCUTABLE
                    </a>

                    <a href="#" class="btn btn-primary text-decoration-none text-white" role="button" data-bs-dismiss="modal">
                      QUITTER !
                    </a>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="img/amri-dev.PNG" class="card-img-top" alt="amri.store">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">PERSONNEL PORTFOLIO</h3>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Voir plus !</button>

            <!--modal-->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">amri-dev.site</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="img/amri-dev.png" class="card-img-top border border-muted" alt="amri-dev.site">
                    <h2 class="text-primary text-uppercase ">Site Web personnel responsive</h2>
                    <h2 class="fs-4">Amri.</h2>
                    <h4 style="color: #93A4AA;">- Stack Technique -</h4>
                    <p class="mt-4 text-muted">
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">

                        mdbreact
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        ui-neumorphism
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        React Router
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        React
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        fortawesome
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        material-ui
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        Autres ..
                      </button>

                    </p>
                  </div>
                  <div class="modal-footer">

                    <a href="http://amri-dev.site/" class="btn btn-secondary text-decoration-none text-white" role="button">
                      EXÉCUTABLE
                    </a>

                    <a href="https://github.com/amri-coder/amri-dev" class="btn btn-secondary text-decoration-none text-white" role="button">
                      CODE SOURCE
                    </a>

                    <a href="#" class="btn btn-primary text-decoration-none text-white" role="button" data-bs-dismiss="modal">
                      QUITTER !
                    </a>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="img/e-commerce.PNG" class="card-img-top" alt="amri.store">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">E-commerce</h3>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <!--
            <button class="get-btn"><a href="page/portfolio.html" class="text-dark text-decoration-none">Voir plus !</a></button>
            -->
            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#exampleModalEcommerce">Voir plus !</button>

            <!--modal-->

            <div class="modal fade" id="exampleModalEcommerce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">E-commerce</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="img/e-commerce.png" class="card-img-top border border-muted" alt="amri-dev.site">
                    <h2 class="text-primary text-uppercase ">Site Web e-commerce</h2>
                    <h2 class="fs-4">Amri.</h2>
                    <h4 style="color: #93A4AA;">- Stack Technique -</h4>
                    <p class="mt-4 text-muted">
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        HTML 5 / CSS 3
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        Bootstrap
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        JavaScript
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        Autres ..
                      </button>
                    </p>
                  </div>
                  <div class="modal-footer">

                    <a href="https://github.com/amri-coder/e-commerce" class="btn btn-secondary text-decoration-none text-white" role="button">
                      CODE SOURCE
                    </a>

                    <a href="#" class="btn btn-primary text-decoration-none text-white" role="button" data-bs-dismiss="modal">
                      QUITTER !
                    </a>

                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>





        <div class="row text-center">

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="services-item shadow-sm p-4 rounded bg-white">
              <div class="icon my-3 text-info fs-2">
                <img src="img/laJungle.png" class="card-img-top" alt="laJungle">
              </div>
              <h3 class="fs-5 py-2 text-uppercase text-info text-muted">Site E-commerce</h3>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <button class="get-btn" data-bs-toggle="modal" data-bs-target="#exampleModalSiteJungle">Voir plus !</button>

              <!--modal Site Agence-->

              <div class="modal fade" id="exampleModalSiteJungle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">La Jungle</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <img src="img/laJungle.png" class="card-img-top border border-muted" alt="amri-dev.site">
                      <h2 class="text-primary text-uppercase ">Site E-commerce</h2>
                      <h2 class="fs-4">La Jungle.</h2>
                      <h4 style="color: #93A4AA;">- Stack Technique -</h4>
                      <p class="mt-4 text-muted">
                        <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                          react-bootstrap
                        </button>
                        <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                          CSS / HTML 5
                        </button>
                        <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                          React Router
                        </button>
                        <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                          React
                        </button>
                        <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                          UseEffect
                        </button>
                        <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                          UseState
                        </button>
                        <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                          Autres
                        </button>
                      </p>
                    </div>
                    <div class="modal-footer">

                      <a href=" https://amri-coder.github.io/la-maison-jungle/" class="btn btn-secondary text-decoration-none text-white" role="button">
                        EXÉCUTABLE
                      </a>



                      <a href="https://github.com/amri-coder/la-maison-jungle" class="btn btn-secondary text-decoration-none text-white" role="button">
                        CODE SOURCE
                      </a>

                      <a href="#" class="btn btn-primary text-decoration-none text-white" role="button" data-bs-dismiss="modal">
                        QUITTER !
                      </a>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>


        </div>










      </div>
    </div>
  </section>

  <!--Fin portfolio-->

  <!-- Section Freelance -->

  <section class="freelance py-5 bg-info">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <p class="text-light fs-5">Avez-vous un projet ?</p>
          <h2 class="fs-1 text-white mb-4">Je Suis Disponible Pour Freelance Ou Autre</h2>
          <a href="mailto:amri.site@yahoo.com" class="btn btn-outline-light">Engagez moi</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Fin Section Freelance -->


  <!-- section contact -->

  <section class="contact py-5" id="contact">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">CONTACT</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="contact-item d-flex mb-3">
            <div class="icon fs-4 text-info">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="text ms-3">
              <h3 class="fs-5">E-mail</h3>
              <p class="text-muted">amri.site@yahoo.com</p>
            </div>
          </div>
          <div class="contact-item d-flex mb-3">
            <div class="icon fs-4 text-info">
              <i class="fas fa-phone"></i>
            </div>
            <div class="text ms-3">
              <h3 class="fs-5">Téléphone</h3>
              <p class="text-muted">06.52.96.02.44</p>
            </div>
          </div>
          <div class="contact-item d-flex mb-3">
            <div class="icon fs-4 text-info">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="text ms-3">
              <h3 class="fs-5">Adresse</h3>
              <p class="text-muted">Rueil Malmaison, 92, FR</p>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="contact-form">

            <form id="contactForm">
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <input type="text" placeholder="Votre nom *" class="form-control form-control-lg fs-6 border-0 shadow-sm required" id="nom">
                  <span id="nomManquant" style="color:red;"></span>
                </div>
                <div class="col-lg-6 mb-4">
                  <input type="text" placeholder="Votre e-mail *" class="form-control form-control-lg fs-6 border-0 shadow-sm" id="email">
                  <span id="emailManquant" style="color:red;"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 mb-4">
                  <input type="text" placeholder="Sujet" class="form-control form-control-lg fs-6 border-0 shadow-sm">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 mb-4">
                  <textarea rows="5" placeholder="Votre message *" class="form-control form-control-lg fs-6 border-0 shadow-sm" id="textarea"></textarea>
                  <span id="textareaManquant" style="color:red;"></span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-info px-3">Envoyer !</button><br /><span id="bouton" style="color:red;"></span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section contact -->

  <!-- section footer-->

  <footer class="footer border-top py-4">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-12">
          <p class="m-0 text-center text-muted">&copy; All Right Reserved - Amri - <?= date('Y'); ?></p>
        </div>
      </div>
    </div>
  </footer>



  <!-- fin footer-->

  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="js/cv.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>