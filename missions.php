<?php 
include_once "common/header.php";
?>

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
                                    <span class="item-subtitle">ESPL, Janvier 2024</span>
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
                                    <span class="item-subtitle">ESPL, Mai 2024</span>
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
                                    <span class="item-subtitle">ESPL, Mars 2024</span>
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
                                    <span class="item-subtitle">ESPL, Avril 2024 à Mai 2025</span>
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
                                    <span class="item-subtitle">ESPL, Novembre 2024</span>
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

<?php 
include_once "missions-modals.php";
?>

<?php 
include_once "common/footer.php";
?>