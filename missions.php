<?php 
include_once "common/header.php";
?>

<!-- main-content-div-start -->
<div class="bostami-page-area z-index-3">
    <div class="container">
        <div class="bostami-page-wrap pt-60 pl-80 pr-80">

            <!-- page-title -->
            <div class="page-tilte-2-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="bostami-page-title-wrap mb-40">
                            <h2 class="page-title">Missions</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-start -->
            <div class="bostami-work-2 mb-30">
                <div class="row">

                    <!-- filters-start -->
                    <div class="col-12">
                        <ul class="fillter-btn-wrap buttonGroup isotop-menu-wrapper mb-30">
                            <li class="fillter-btn is-checked " data-filter="*">Tout</li>
                            <li class="fillter-btn" data-filter=".assets">Patrimoine informatique</li>
                            <li class="fillter-btn" data-filter=".support">Support</li>
                            <li class="fillter-btn" data-filter=".online">Présence en ligne</li>
                            <li class="fillter-btn" data-filter=".project-mode">Mode projet</li>
                            <li class="fillter-btn" data-filter=".availability">Mise à disposition</li>
                            <li class="fillter-btn" data-filter=".pro-growth">Développement pro</li>
                        </ul>
                    </div>
                    <!-- filters-end -->

                    <!-- project-items-start -->
                    <div class="col-12">
                        <div id="fillter-item-active" class="fillter-item-wrap">
                            <div class="grid-sizer"></div>

                            <!-- mission-1-start -->
                            <div class="isotop-item pro-growth online">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#mission-1">
                                        <img src="assets/img/missions/netflix.jpg" alt="Logo Netflix">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool, Janvier 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#mission-1">Intégration statique Netflix</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- mission-1-end -->

                            <!-- mission-5-start -->
                            <div class="isotop-item pro-growth project-mode support">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#mission-5">
                                        <img src="assets/img/missions/bar.jpg" alt="Bar">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool, Mai 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#mission-5">Application de gestion d'un bar</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- mission-5-end -->

                            <!-- mission-2-start -->
                            <div class=" isotop-item assets availability">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#mission-2">
                                        <img src="assets/img/missions/database.jpg" alt="Bibliothèque">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool, Mars 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#mission-2">Création d'une base de données</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- mission-2-end -->

                            <!-- mission-3-start -->
                            <div class=" isotop-item support project-mode availability pro-growth">
                                <div class="fillter-item bg-catkrill ">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#mission-3">
                                        <img src="assets/img/missions/glpi.jpg" alt="Tickets">
                                    </a>
                                    <span class="item-subtitle">Xlabs, Octobre 2023</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#mission-3">Mise en place d'une solution de ticketing</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- mission-3-end -->
                            
                            <!-- mission-6-start -->
                            <div class="isotop-item online pro-growth">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#mission-6">
                                        <img src="assets/img/missions/porfolio.jpg" alt="">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool, Avril 2024 à Mai 2025</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#mission-6">Création d'un portfolio</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- mission-6-end -->

                            <!-- mission-4-start -->
                            <div class=" isotop-item assets support ">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#mission-4">
                                        <img src="assets/img/missions/docker.jpg" alt="Logo Docker">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool, Novembre 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#mission-4">Création d'un container Docker</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- mission-4-end -->
                            
                        </div>
                    </div>
                    <!-- mission-items end -->

                </div>
            </div>  
                <!-- content-end -->
        </div>
    </div>
</div>
<!-- main-content-div-start -->

<!-- mission-1-modal-start -->
<div class="modal portfolio-modal-box fade" id="mission-1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Mission 1</h6>
                
                <!-- mission-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Mission : <span>Mission 1</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>MyDigitalSchool, Angers</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>01/01/1970</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-building-user"></i>
                                Service : <span>Informatique</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- mission-context-start -->

                <!-- mission-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Tâches</h5>
                    <p>
                        <ul>
                            <li>- Attention à tout lister</li>
                            <li>- Vérifier que tout soit réellement mis en place</li>
                            <li>- Ex. : J’ai analysé une maquette Figma pour préparer une intégration statique HTML, CSS et Javascript</li>
                        </ul>
                    </p>
                    
                    <h5>Moyens</h5>
                    <p>
                        <ul>
                            <li>- Outils (VSCode, Figma...)</li>
                            <li>- Sources d’apprentissage (Sites internet, Microlead...)</li>
                            <li>- Particularités technologiques employées (Flexbox...)</li>
                        </ul>
                    </p>

                    <h5>Avec qui</h5>
                    <p>Décrire ce qui à été fait en solitaire ou en groupe</p>

                    <h5>Commentaires</h5>
                    <p>Si pertinent</p>
                </div>
                <!-- mission-content-start -->

                <!-- mission-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- annexe-list-start  -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site web</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Cahier des charges</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Guide utilisateur</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-start  -->

            </div>

        </div>
    </div>
</div>
<!-- mission-1-modal-end -->

<!-- mission-2-modal-start -->
<div class="modal portfolio-modal-box fade" id="mission-2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Mission 2</h6>
                
                <!-- mission-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Mission : <span>Mission 2</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>XLABS, Cholet</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>01/01/1970</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-building-user"></i>
                                Service : <span>Informatique</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- mission-context-end -->

                <!-- mission-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Tâches</h5>
                    <p>
                        <ul>
                            <li>- Attention à tout lister</li>
                            <li>- Vérifier que tout soit réellement mis en place</li>
                            <li>- Ex. : J’ai analysé une maquette Figma pour préparer une intégration statique HTML, CSS et Javascript</li>
                        </ul>
                    </p>
                    
                    <h5>Moyens</h5>
                    <p>
                        <ul>
                            <li>- Outils (VSCode, Figma...)</li>
                            <li>- Sources d’apprentissage (Sites internet, Microlead...)</li>
                            <li>- Particularités technologiques employées (Flexbox...)</li>
                        </ul>
                    </p>

                    <h5>Avec qui</h5>
                    <p>Décrire ce qui à été fait en solitaire ou en groupe</p>

                    <h5>Commentaires</h5>
                    <p>Si pertinent</p>
                </div>
                <!-- mission-content-end -->

                <!-- mission-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- annexe-list-start -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site web</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Cahier des charges</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Guide utilisateur</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-end -->

            </div>

        </div>
    </div>
</div>
<!-- mission-2-modal-end -->

<!-- mission-3-modal-start -->
<div class="modal portfolio-modal-box fade" id="mission-3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Mission 3</h6>
                
                <!-- mission-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Mission : <span>Mission 3</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>GIE MyXlab, Cholet</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>01/01/1970</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-building-user"></i>
                                Service : <span>Informatique</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- mission-context-end -->

                <!-- mission-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Tâches</h5>
                    <p>
                        <ul>
                            <li>- Attention à tout lister</li>
                            <li>- Vérifier que tout soit réellement mis en place</li>
                            <li>- Ex. : J’ai analysé une maquette Figma pour préparer une intégration statique HTML, CSS et Javascript</li>
                        </ul>
                    </p>
                    
                    <h5>Moyens</h5>
                    <p>
                        <ul>
                            <li>- Outils (VSCode, Figma...)</li>
                            <li>- Sources d’apprentissage (Sites internet, Microlead...)</li>
                            <li>- Particularités technologiques employées (Flexbox...)</li>
                        </ul>
                    </p>

                    <h5>Avec qui</h5>
                    <p>Décrire ce qui à été fait en solitaire ou en groupe</p>

                    <h5>Commentaires</h5>
                    <p>Si pertinent</p>
                </div>
                <!-- mission-content-end -->

                <!-- mission-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- annexe-list-start  -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site web</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Cahier des charges</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Guide utilisateur</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-end  -->
            </div>

        </div>
    </div>
</div>
<!-- mission-3-modal-end -->

<!-- mission-4-modal-start -->
<div class="modal portfolio-modal-box fade" id="mission-4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Mission 4</h6>
                
                <!-- mission-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Mission : <span>Mission 4</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>MyDigitalSchool, Angers</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>01/01/1970</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-building-user"></i>
                                Service : <span>Informatique</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- mission-context-end -->

                <!-- mission-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Tâches</h5>
                    <p>
                        <ul>
                            <li>- Attention à tout lister</li>
                            <li>- Vérifier que tout soit réellement mis en place</li>
                            <li>- Ex. : J’ai analysé une maquette Figma pour préparer une intégration statique HTML, CSS et Javascript</li>
                        </ul>
                    </p>
                    
                    <h5>Moyens</h5>
                    <p>
                        <ul>
                            <li>- Outils (VSCode, Figma...)</li>
                            <li>- Sources d’apprentissage (Sites internet, Microlead...)</li>
                            <li>- Particularités technologiques employées (Flexbox...)</li>
                        </ul>
                    </p>

                    <h5>Avec qui</h5>
                    <p>Décrire ce qui à été fait en solitaire ou en groupe</p>

                    <h5>Commentaires</h5>
                    <p>Si pertinent</p>
                </div>
                <!-- mission-content-end -->

                <!-- mission-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- annexe-list-start -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site web</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Cahier des charges</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Guide utilisateur</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-end -->

            </div>

        </div>
    </div>
</div>
<!-- mission-4-modal-end -->

<!-- mission-5-modal-start -->
<div class="modal portfolio-modal-box fade" id="mission-5" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Mission 5</h6>
                
                <!-- mission-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Mission : <span>Mission 5</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>XLABS, Cholet</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>01/01/1970</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-building-user"></i>
                                Service : <span>Informatique</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- mission-context-end -->

                <!-- mission-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Tâches</h5>
                    <p>
                        <ul>
                            <li>- Attention à tout lister</li>
                            <li>- Vérifier que tout soit réellement mis en place</li>
                            <li>- Ex. : J’ai analysé une maquette Figma pour préparer une intégration statique HTML, CSS et Javascript</li>
                        </ul>
                    </p>
                    
                    <h5>Moyens</h5>
                    <p>
                        <ul>
                            <li>- Outils (VSCode, Figma...)</li>
                            <li>- Sources d’apprentissage (Sites internet, Microlead...)</li>
                            <li>- Particularités technologiques employées (Flexbox...)</li>
                        </ul>
                    </p>

                    <h5>Avec qui</h5>
                    <p>Décrire ce qui à été fait en solitaire ou en groupe</p>

                    <h5>Commentaires</h5>
                    <p>Si pertinent</p>
                </div>
                <!-- mission-content-end -->

                <!-- mission-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- annexe-list-start -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site web</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Cahier des charges</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Guide utilisateur</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-end -->

            </div>

        </div>
    </div>
</div>
<!-- mission-5-modal-end -->

<!-- mission-6-modal-start -->
<div class="modal portfolio-modal-box fade" id="mission-6" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Mission 6</h6>
                
                <!-- mission-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Mission : <span>Mission 6</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>MyXlab 44, St Nazaire</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>01/01/1970</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-building-user"></i>
                                Service : <span>Informatique</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- mission-context-end -->

                <!-- mission-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Tâches</h5>
                    <p>
                        <ul>
                            <li>- Attention à tout lister</li>
                            <li>- Vérifier que tout soit réellement mis en place</li>
                            <li>- Ex. : J’ai analysé une maquette Figma pour préparer une intégration statique HTML, CSS et Javascript</li>
                        </ul>
                    </p>
                    
                    <h5>Moyens</h5>
                    <p>
                        <ul>
                            <li>- Outils (VSCode, Figma...)</li>
                            <li>- Sources d’apprentissage (Sites internet, Microlead...)</li>
                            <li>- Particularités technologiques employées (Flexbox...)</li>
                        </ul>
                    </p>

                    <h5>Avec qui</h5>
                    <p>Décrire ce qui à été fait en solitaire ou en groupe</p>

                    <h5>Commentaires</h5>
                    <p>Si pertinent</p>
                </div>
                <!-- mission-content-end -->

                <!-- mission-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- annexe-list-start -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site web</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Cahier des charges</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Guide utilisateur</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-end -->
            </div>

        </div>
    </div>
</div>
<!-- mission-6-modal-end -->

<?php 
include_once "common/footer.php";
?>