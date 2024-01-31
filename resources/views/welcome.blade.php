<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Oxygen:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" />
    <title>fedSAEI</title>
</head>

<body>
    <div class="modal " id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5 mx-4" id="exampleModalLabel">contactez-nous</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </div>
    </div>

    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-sm nav">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/Picto_fedSAEI-removebg-preview.png') }}" width="100" height="60"
                        alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText">
                    <ul class="navbar-nav float-end">
                        <li class="nav-item">
                            <a class="nav-link bold mx-4" href="#a_propos">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bold mx-4" href="#">Emission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bold mx-4" href="#">Calendrier</a>
                        </li>
                        <li class="nav-item contact-modal">
                            <a type="button" class="nav-link bold" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary bold mx-4" href="https://www.digiboost.bj/fr"
                                target="_blank">Ecosystème</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="banner">
                <div class="container-sm">
                    <div class="banner-content">
                        <div class="content">
                            <div class="banner-img ">
                                <img src="{{ asset('images/Logo FedSAEI.png') }}" alt="">
                            </div>
                            <div>
                                <div class="barre"></div>
                                <h3 class="text-bold  "> Fédération Des Structures D'Accompagnement à l'Entrepreunariat
                                    Innovant au Bénin
                                    <div class="barre mt-2"></div>
                                </h3>

                            </div>
                            <div class="banner-link mt-5">
                                <button type="button" class="btn btn-primary  ">Adhérer à la FedSAEI</button>
                                <button type="button" class="btn btn-secondary ">Demande d'Appuie</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="description">
                <div class="container-sm">
                    <div class="description-content">
                        <div class="d-flex align-items-center mt-5 row">
                            <div class="col d-flex description-img">
                                <img src="{{ asset('images/image3.jpeg') }}" alt="" height="400"
                                    width="250" class="margin mx-2">
                                <img src="{{ asset('images/image1.jpeg') }}" alt="" class="mt-5"
                                    height="400" width="250">
                            </div>
                            <div class="mx-5 mt-5 col">
                                <h2 class="section-text"> DESCRIPTION</h2>
                                <p>
                                    La Fédération des Structures d’Accompagnement à l’Entrepreneuriat Innovant
                                    (FedSAEI) est une organisation laïque apolitique qui vise à propulser une synergie
                                    d’actions pour améliorer l’écosystème entrepreneurial béninois. Elle a été créée
                                    pour répondre à plusieurs défis, notamment :

                                <ul>
                                    <li class="li">
                                        Le manque de synergie entre les différents acteurs impliqués dans le
                                        domaine du soutien à l’entrepreneuriat,
                                    </li>
                                    <li class="li">
                                        Le besoin pour les structures d’accompagnement à l’entrepreneuriat
                                        innovant (SAEIs) de se professionnaliser et se structurer,
                                    </li>
                                    <li class="li">
                                        L’ignorance du fonctionnement des incubateurs d’entreprises par les
                                        différentes institutions gouvernementales et leurs partenaires de
                                        développement.
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="description-content">
                        <div class="d-flex align-items-center mt-5 row">
                            <div class="mx-5 mt-5 col">
                                <h2 class="section-text">OBJECTIF</h2>
                                <p>
                                <ul>
                                    <li class="li">Professionnaliser les structures d’accompagnement ;</li>
                                    <li class="li">Créer un cadre de connexion entre les SAEI et les autres acteurs
                                        de
                                        l’écosystème ;
                                    </li>
                                    <li class="li">Impulser la synergie d’actions.</li>
                                </ul>
                                </p>
                            </div>
                            <div class="col mb-5 d-flex description-img">
                                <img src="{{ asset('images/image3.jpeg') }}" alt="" height="400"
                                    width="250" class="margin mx-2">
                                <img src="{{ asset('images/image1.jpeg') }}" alt="" class="mt-5"
                                    height="400" width="250">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feature">
            <div class="container-sm">
                <div id="vision">
                    <div class="feature-left row">
                        <div class="feature-left-img col">
                            <img src="{{ asset('images/image2.jpeg') }}" alt="">
                        </div>
                        <div class="vision title-blue col">

                            <h2 class="section-text text-white">VISION</h2>
                            <p>
                                Être un cadre de référence dans l’écosystème de l’innovation et de
                                l’entrepreneuriat au Bénin, capable de professionnaliser, rendre performantes
                                et faire exceller les SAEI béninoises
                            </p>
                        </div>
                    </div>
                    <div class="feature-left row">
                        <div class="vision title-blue col">
                            <h2 class="mission section-text text-white"> MISSION </h2>
                            <p>
                                Créer un environnement d’échanges, de synergie, et de <br> professionnalisation
                                des SAEI <br>béninoises.
                            </p>
                        </div>
                        <div class="feature-left-img col">
                            <img src="{{ asset('images/image3.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="feature-left row">
                        <div class="feature-left-img col">
                            <img src="{{ asset('images/image4.jpeg') }}" alt="">
                        </div>
                        <div class="vision title-blue col">
                            <h2 class="section-text text-white"> VALEURS </h2>
                            <p>
                            <div class="li mb-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg> Équité
                            </div>
                            <div class="li mb-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg> Inclusion
                            </div>
                            <div class="li mb-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg> Solidarité
                            </div>
                            <div class="li mb-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg> Excellence
                            </div>
                            <div class="li  ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg> Transparence
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newsletter">
            <div class="container-sm">
                <h2 class="text-center mt-5 mb-5 section-text" id="a_propos"> A PROPOS</h2>
                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <video src="{{ asset('video/Capture vidéo du 24-11-2023 17:32:25.webm') }}" controls 
                                width="100%"></video>
                        </div>
                        <div class="carousel-item">
                            <video src="{{ asset('video/Capture vidéo du 24-11-2023 17:32:25.webm') }}" controls 
                                width="100%"></video>
                        </div>
                        <div class="carousel-item">
                            <video src="{{ asset('video/Capture vidéo du 24-11-2023 17:32:25.webm') }}" controls 
                                width="100%"></video>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon text-dark " aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section id="partner" class="py-5">
            <div class="container-sm">
                <h2 class="text-center mt-5 mb-5 section-text" id=""> Avec la contribution de :</h2>
                <div class=" partner-display">
                    <div class="">
                        <img src="{{ asset('images/enabel_logo.png') }}" alt="" height="">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/european_union.png') }}" alt="" height="">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/witech.jpg') }}" alt="" height="">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/seme.svg') }}" alt="" height="">
                    </div>


                    <div class="">
                        <img src="{{ asset('images/logo_wacomp.png') }}" alt="" height="">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/logo_mnd.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-5">
        <div class="container-fluid">
            <div class="footer-content">
                <div class=" footer-img">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="300" height=""
                        class="d-inline-block align-text-top">
                    <div class="">
                        <div class="d-flex social-links">
                            <a href="https://www.facebook.com/fedsaeibj" target="_blank" title="facebook"><i
                                    class="fab fa-facebook-f fa-2x "></i></a>
                            <a href="https://twitter.com/fedsaeibj"><i class="fab fa-twitter fa-2x " target="_blank"
                                    title="twitter"></i></a>
                            <a href="https://www.linkedin.com/company/86598719/admin/feed/posts/" target="_blank"
                                title="linkedin"><i class="fab fa-linkedin fa-2x "></i></a>
                        </div>
                    </div>
                </div>
                <div class=" mt-5">
                    <div class="footer-info">
                        <h3>Siège social</h3>
                        <p>
                            <em>
                                littoral,
                                commune de Cotonou, 9ème arrondissement,<br> quartier zogbohouè, immeuble <br>
                                NASSARAH Wenceslas
                            </em>
                        </p>
                        <h3>Contact</h3>
                        <p>
                            <strong>Code postal: </strong>03 BP 2279 <br>
                            <i class="fas fa-phone"></i> : (+229) 66013636 /43630000 <br>
                            <i class="fas fa-envelope"></i> :
                            <a href="mailto:fedsaei@gmail.com"> fedsaei@gmail.com</a> |
                            <a href="mailto:contact@fedsaei.bj"> contact@fedsaei.bj</a>
                        </p>
                    </div>
                </div>
                <div class="addto-newsletter ">
                    <h4>Inscrivez-vous à notre newsletter</h4>
                    <form action="/newsletter/subscribe" method="post">
                        <div class="form-group">
                            <label for="email">Votre adresse e-mail</label>
                            <input type="email" class="form-control form-width" id="" name="email"
                                required>
                        </div>
                        <button type="submit" class="btn btn-secondary">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
