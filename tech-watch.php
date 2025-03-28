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
                            <h2 class="page-title">Veille technologique</h2>

                            <!-- tableau-synthèse-button -->
                            <div class="bostami-parsonal-info-btn d-flex align-items-center">
                                <a class="btn-2 circle d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#def-and-tools">
                                    <h5 class="bostami-parsonal-info-title text-white m-0">Définition et outils</h5>
                                </a>
                            </div>

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
                            <li class="fillter-btn" data-filter=".quantum-it">Informatique quantique</li>
                            <li class="fillter-btn" data-filter=".space-it">Informatique spatiale</li>
                            <li class="fillter-btn" data-filter=".dev-languages">Langages de programmation émergents</li>
                        </ul>
                    </div>
                    <!-- filters-end -->

                    <!-- project-items-start -->
                    <div class="col-12">
                        <div id="fillter-item-active" class="fillter-item-wrap">
                            <div class="grid-sizer"></div>

                            <!-- def-and-tools- start -->
                            <!-- <div class="isotop-item quantum-it space-it dev-languages">
                                <div class="fillter-item bg-yellow">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#def-and-tools
                                    ">
                                        <img src="assets/img/work/def1.jpg" alt="">
                                    </a>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#def-and-tools">Définition et outils</a>
                                    </h6>
                                </div>
                            </div> -->
                            <!-- def-and-tools-end -->

                            <!-- source-1- start -->
                            <div class="isotop-item space-it">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-1
                                    ">
                                        <img src="assets/img/tech-watch/source1.png" alt="">
                                    </a>
                                    <span class="item-subtitle">Medium, 23/04/2023</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-1">Software development for space programs and satellites</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-1-end -->

                            <!-- source-2-start -->
                            <div class=" isotop-item quantum-it">
                                <div class="fillter-item bg-yellow">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-2">
                                        <img src="assets/img/tech-watch/source2.png" alt="">
                                    </a>
                                    <span class="item-subtitle">IBM, 05/08/2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-2">What is quantum computing?</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-2-end -->

                            <!-- source-3-start -->
                            <div class=" isotop-item dev-languages">
                                <div class="fillter-item bg-prink ">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-3">
                                        <img src="assets/img/tech-watch/source3.png" alt="">
                                    </a>
                                    <span class="item-subtitle">Analytics Insight, 04/10/2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-3">Will There Be a New Dominant Programming Language by 2030?</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-3-end -->

                            <!-- source-4-start -->
                            <div class=" isotop-item quantum-it">
                                <div class="fillter-item bg-yellow">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-4">
                                        <img src="assets/img/tech-watch/source4.png" alt="">
                                    </a>
                                    <span class="item-subtitle">IBM, 28/02/2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-4">What is a qubit?</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-4-end -->

                            <!-- source-5-start -->
                            <div class="isotop-item space-it">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-5">
                                        <img src="assets/img/tech-watch/source5.png" alt="">
                                    </a>
                                    <span class="item-subtitle">Analytics Insight, 23/08/2023</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-5">10 Programming Languages for ISRO’s 2023 Space Projects</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-5-end -->

                            <!-- source-6-start -->
                            <div class="isotop-item dev-languages">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-6">
                                        <img src="assets/img/tech-watch/source6.png" alt="">
                                    </a>
                                    <span class="item-subtitle">New York Institute of Technology, 25/10/2023</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-6">The Role of Programming Languages in Data Science</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-6-end -->

                            <!-- source-7-start -->
                            <div class=" isotop-item space-it">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-7">
                                        <img src="assets/img/tech-watch/source7.png" alt="">
                                    </a>
                                    <span class="item-subtitle">Blue Marble Space Institute of Science, 03/08/2021</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-7">The importance of software in space missions</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-7-end -->

                            <!-- source-8-start -->
                            <div class=" isotop-item quantum-it">
                                <div class="fillter-item bg-yellow">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-8">
                                        <img src="assets/img/tech-watch/source8.jpg" alt="">
                                    </a>
                                    <span class="item-subtitle">Newsroom IBM, 16/05/2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-8">IBM étend Qiskit</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-8-end -->

                            <!-- source-9-start -->
                            <div class="isotop-item dev-languages">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#source-9">
                                        <img src="assets/img/tech-watch/source9.jpg" alt="">
                                    </a>
                                    <span class="item-subtitle">The New Stack, 26/11/2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#source-9">Why PyTorch Gets All the Love</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- source-9-end -->

                        </div>
                    </div>
                    <!-- source-items end -->

                </div>
            </div>  
            <!-- content-end -->
        </div>
    </div>
</div>


<!-- source-8-modal-start -->
<div class="modal portfolio-modal-box fade" id="source-8" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">IBM étend Qiskit, le logiciel quantique le plus performant au monde</h6>
                
                <!-- header-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Source : <span>Newsroom IBM</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-arrow-up-right-from-square"></i>
                                Lien : <a href="https://fr.newsroom.ibm.com/IBM-etend-Qiskit,-le-logiciel-quantique-le-plus-performant-au-monde" target="_blank">
                                    <span>Lire l'article</span></a>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>16/05/2024</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-newspaper"></i>
                                Type : <span>Article web</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- header-end -->

                <!--résumé-start -->
                <div class="h1-modal-paragraph">
                    <h5>Résumé</h5>
                    <p><ul>Qiskit, initialement un kit de développement logiciel open-source lancé en 2017, est désormais une 
                    plateforme logicielle complète et performante pour l'informatique quantique.
                        <p><li><b>Adoption mondiale :</b> Plus de 550 000 utilisateurs ont exécuté plus de 3 000 milliards de circuits quantiques 
                        sur les systèmes IBM.</li></p>
                        <p><li><b>Performances améliorées :</b> La dernière version offre une exécution des circuits 39 fois plus rapide et 
                        réduit l'utilisation mémoire de 3 fois par rapport aux anciennes versions.</li></p>
                        <p><li><b>Soutien à l’écosystème :</b> Plateforme utilisée par entreprises, instituts de recherche et universités pour 
                        des expérimentations à grande échelle.</li></p>
                        <p><li><b>Formation de la main-d'œuvre :</b> Qiskit soutient des programmes éducatifs pour former les experts en quantique 
                        de demain.</li></p>
                        <p><li><b>Objectif principal :</b> Aider à atteindre l’avantage quantique grâce à un matériel avancé et des logiciels robustes.
                        Langage Rust : Intégration pour améliorer les performances critiques des codes.</li></p>
                        <p><li><b>Vision future :</b> Orchestrer un calcul hybride intégrant QPU, GPU et CPU pour définir un nouveau paradigme de 
                        supercalculateur quantique.</li></p>
                        <p><li><b>Collaboration mondiale :</b> Soutient un écosystème croissant d’utilisateurs et d’applications dans divers secteurs.
                        IBM Quantum Network :</b> Plateforme conçue pour permettre la découverte d'algorithmes et l'exploration de problèmes 
                        complexes.</li></p>
                    </ul>
                    </p>
                </div>
                <!--résumé-end -->
            </div>

        </div>
    </div>
</div>
<!-- source-8-modal-end -->

<!-- source-9-modal-start -->
<div class="modal portfolio-modal-box fade" id="source-9" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Why PyTorch Gets All the Love</h6>
                
                <!-- header-start -->
                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-file-lines"></i>
                                Source : <span>The New Stack</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-arrow-up-right-from-square"></i>
                                Lien : <a href="https://thenewstack.io/why-pytorch-gets-all-the-love/" target="_blank"><span>Lire l'article</span></a>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>26/11/2024</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-newspaper"></i>
                                Type : <span>Article web</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- header-end -->

                <!--résumé-start -->
                <div class="h1-modal-paragraph">
                    <h5>Résumé</h5>
                    <p><ul>PyTorch est une bibliothèque open-source Python de machine learning, de plus en plus populaire et 
                    soutenue par une large communauté de développeurs et de chercheurs.
                        <p><li><b>Facilité d'utilisation :</b> Comparé à TensorFlow, PyTorch offre une approche plus intuitive et directe 
                        grâce à une interface conviviale. Il adopte un mode impératif (ou dynamique), permettant de modifier 
                        les modèles en temps réel durant l'exécution. En revanche, TensorFlow utilise un modèle plus statique, 
                        ce qui peut rendre les ajustements plus complexes et moins flexibles pour les utilisateurs.</li></p>
                        <p><li><b>Adoption par la communauté académique :</b> PyTorch est largement adopté par les chercheurs en intelligence 
                        artificielle et en apprentissage profond, notamment en raison de sa flexibilité. Il permet une expérimentation 
                        rapide et le prototypage de nouveaux modèles. Facilement intégrable avec d'autres outils de recherche, 
                        PyTorch permet aux chercheurs de tester de nouvelles idées et d'obtenir des résultats plus rapidement.</li></p>
                        <p><li><b>Compatibilité avec les GPUs :</b> PyTorch est nativement compatible avec les GPU, ce qui est essentiel pour 
                        l'entraînement de modèles complexes et la gestion de grandes quantités de données. L'optimisation sur les 
                        GPU permet de réduire considérablement le temps nécessaire à l'entraînement des modèles, ce qui est un atout 
                        majeur dans le développement de modèles d'intelligence artificielle.</li></p>
                        <p><li><b>Communauté et support :</b> La communauté de PyTorch est très active et propose une vaste gamme de ressources, 
                        forums de discussion et exemples de code. Cela permet aux utilisateurs de bénéficier de précieux conseils et 
                        d'un support efficace. De plus, PyTorch a attiré l'attention de grandes entreprises technologiques ainsi que 
                        de nombreuses startups, ce qui favorise son développement continu.</li></p>
                        <p><li><b>Comparaison avec TensorFlow :</b> TensorFlow est un autre framework populaire pour l'apprentissage automatique. 
                        PyTorch se distingue par son calcul dynamique, plus souple et accessible, tandis que TensorFlow utilise un modèle 
                        statique, qui peut rendre son utilisation plus complexe pour les nouveaux utilisateurs. Cependant, TensorFlow 
                        bénéficie d'un écosystème plus large et d'une forte adoption en production. Néanmoins, PyTorch reste privilégié 
                        dans le domaine de la recherche en raison de sa flexibilité et de sa simplicité.</li></p>
                        <p><li><b>Évolution continue :</b> PyTorch continue d'évoluer pour intégrer de nouvelles fonctionnalités et répondre aux besoins 
                        des chercheurs et des ingénieurs. L'ajout de nouveaux outils pour la production et le support des systèmes distribués 
                        renforcent son attrait et sa pertinence dans le domaine du machine learning.</li></p>
                    </ul>
                    </p>
                </div>
                <!--résumé-end -->

            </div>

        </div>
    </div>
</div>
<!-- source-9-modal-end -->

<?php 
include_once "common/footer.php";
?>

<?php 
include_once "tech-watch-modals.php";
?>
