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
                            <h2 class="page-title">Projets</h2>
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

                            <!-- project-1-start -->
                            <div class="isotop-item assets online">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-1">
                                        <img src="assets/img/work/work-img-1.png" alt="">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool, 01/01/1970</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-1">Projet 1</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- project-1-end -->

                            <!-- project-2-start -->
                            <div class=" isotop-item support">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-2">
                                        <img src="assets/img/work/work-img-2.png" alt="">
                                    </a>
                                    <span class="item-subtitle">XLABS, 01/01/1970</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-2">Projet 2</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- project-2-end -->

                            <!-- project-3-start -->
                            <div class=" isotop-item assets project-mode">
                                <div class="fillter-item bg-catkrill ">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-3">
                                        <img src="assets/img/work/work-img-3.png" alt="">
                                    </a>
                                    <span class="item-subtitle">GIE MyXlab, 01/01/1970</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-3">Projet 3</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- project-3-end -->

                            <!-- project-4-start -->
                            <div class=" isotop-item online pro-growth">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-4">
                                        <img src="assets/img/work/work-img-4.png" alt="">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool, 01/01/1970</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-4">Projet 4</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- project-4-end -->

                            <!-- project-5-start -->
                            <div class="isotop-item project-mode availability">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-5">
                                        <img src="assets/img/work/work-img-5.png" alt="">
                                    </a>
                                    <span class="item-subtitle">XLABS, 01/01/1970</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-5">Projet 5</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- project-5-end -->

                            <!-- project-6-start -->
                            <div class="isotop-item support availability pro-growth">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-6">
                                        <img src="assets/img/work/work-img-6.png" alt="">
                                    </a>
                                    <span class="item-subtitle">MyXlab 44, 01/01/1970</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-6">Projet 6</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- project-6-end -->

                        </div>
                    </div>
                    <!-- project-items end -->

                </div>
            </div>  
                <!-- content-end -->
        </div>
    </div>
</div>
<!-- main-content-div-start -->

<!-- project-1-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Projet 1</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Projet : <span>Projet 1</span>
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
                <!-- projet-context-start -->

                <!-- projet-content-start -->
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
                <!-- projet-content-start -->

                <!-- projet-image -->
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
<!-- project-1-modal-end -->

<!-- project-2-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Projet 2</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Projet : <span>Projet 2</span>
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
                <!-- projet-context-end -->

                <!-- projet-content-start -->
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
                <!-- projet-content-end -->

                <!-- projet-image -->
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
<!-- project-2-modal-end -->

<!-- project-3-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Projet 3</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Projet : <span>Projet 3</span>
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
                <!-- projet-context-end -->

                <!-- projet-content-start -->
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
                <!-- projet-content-end -->

                <!-- projet-image -->
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
<!-- project-3-modal-end -->

<!-- project-4-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Projet 4</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Projet : <span>Projet 4</span>
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
                <!-- projet-context-end -->

                <!-- projet-content-start -->
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
                <!-- projet-content-end -->

                <!-- projet-image -->
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
<!-- project-4-modal-end -->

<!-- project-5-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-5" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Projet 5</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Projet : <span>Projet 5</span>
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
                <!-- projet-context-end -->

                <!-- projet-content-start -->
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
                <!-- projet-content-end -->

                <!-- projet-image -->
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
<!-- project-5-modal-end -->

<!-- project-6-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-6" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Projet 6</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Projet : <span>Projet 6</span>
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
                <!-- projet-context-end -->

                <!-- projet-content-start -->
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
                <!-- projet-content-end -->

                <!-- projet-image -->
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
<!-- project-6-modal-end -->

<?php 
include_once "common/footer.php";
?>