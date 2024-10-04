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
                                <div class="fillter-item bg-yellow">
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
                                <div class="fillter-item bg-yellow">
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

<?php 
include_once "projects-modals.php";
?>

<?php 
include_once "common/footer.php";
?>