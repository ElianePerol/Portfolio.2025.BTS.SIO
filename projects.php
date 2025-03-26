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

                            <!-- myxlab opening-start -->
                            <div class="isotop-item assets project-mode availability">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-1">
                                        <img src="assets/img/projects/test.png" alt="">
                                    </a>
                                    <span class="item-subtitle">GIE MyXlab, Août 2023 - Septembre 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-1">
                                            MYXLAB : Déploiement et Ouverture de Laboratoires</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- myxlab opening-end -->

                            <!-- PSSI-start -->
                            <div class=" isotop-item assets project-mode pro-growth">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-2">
                                        <img src="assets/img/projects/pssi.png" alt="">
                                    </a>
                                    <span class="item-subtitle">GIE MyXlab, Août 2023 - Octobre 2023</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-2">
                                            Rédaction de la Politique de Sécurité des Systèmes d'Information (PSSI)</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- PSSI-end -->

                            <!-- websites-start -->
                            <div class=" isotop-item assets support online project-mode availability pro-growth">
                                <div class="fillter-item bg-yellow">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-3">
                                        <img src="assets/img/projects/websites.png" alt="">
                                    </a>
                                    <span class="item-subtitle">GIE MyXlab, depuis Octobre 2023</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-3">
                                            Mise à jour et administration des sites web Xlabs & MyXlab</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- websites-end -->

                            <!-- FCC-start -->
                            <div class=" isotop-item assets support availability pro-growth">
                                <div class="fillter-item bg-yellow">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-4">
                                        <img src="assets/img/projects/fcc.jpg" alt="">
                                    </a>
                                    <span class="item-subtitle">GIE MyXlab, Septembre 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-4">
                                            Configuration et optimisation de FCC pour la gestion des appels</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- FCC-end -->

                            <!-- portfolio-start -->
                            <div class="isotop-item online project-mode pro-growth">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-5">
                                        <img src="assets/img/projects/bts-portfolio.png" alt="">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool Angers, Septembre 2023 - Avril 2025</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-5">
                                            Création et développement du Portfolio BTS SIO SLAM</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- portfolio-end -->

                            <!-- welcome-training-start -->
                            <div class="isotop-item online project-mode availability pro-growth">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-6">
                                        <img src="assets/img/projects/welcome-training.png" alt="">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool Angers, Septembre 2024 - Décembre 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-6">
                                            Welcome Training : Application PHP de gestion des classes et des présences</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- welcome-training-end -->

                            <!-- click n eat-start -->
                            <div class="isotop-item online project-mode availability pro-growth">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-7">
                                        <img src="assets/img/projects/clickneat.png" alt="">
                                    </a>
                                    <span class="item-subtitle">MyDigitalSchool Angers, Février 2025 - Mars 2025</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-7">
                                            Click'n Eat : Application Laravel pour une Expérience de Restaurant Simplifiée
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <!-- click n eat-end -->

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

<!-- websites-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Mise à jour et administration des sites web Xlabs & MyXlab</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="col">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Dates : <span>depuis Août 2023</span>
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
                                <i class="fa-light fa-building-user"></i>
                                Service Informatique
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- projet-context-start -->

                <!-- projet-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Contexte</h5>
                        <p>J'ai pris en charge la maintenance et la mise à jour des sites internet de l'entreprise, notamment le site Xlabs 
                            sous Joomla, en activité depuis plus de dix ans sans mise à jour majeure, et le site MyXlab sous WordPress avec 
                            l'éditeur Colibri. Malgré les limites techniques et économiques, j'ai assuré la gestion des pages stratégiques, 
                            la conformité RGPD et la mise en œuvre de solutions économiquement viables.</p>
                        <p>Les modifications ont été entièrement réalisées par mes soins, avec une attention particulière portée à la traçabilité 
                            des évolutions et à la rédaction de procédures internes pour faciliter la prise en main des sites par les collaborateurs.
                        </p>
                        <p><strong>Contrainte principale : </strong> garantir la traçabilité des modifications grâce à une transition vers 
                            l’outil GLPI en octobre 2024, en remplacement du précédent système SAPANET.
                        </p>
                    
                    <h5>Avec qui :</h5>
                        <p>
                        <ul>
                            <li>• Philippe Soulard (RSI et tuteur, transfert de connaissances)</li>
                            <li>• Kévin Gandon (Technicien informatique, transfert de connaissances)</li>

                        </ul>
                        </p>                    
                    
                    <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li>• Joomla (v3.10.11 au lieu de v5.2.3, dernière version disponible) pour le site Xlabs.</li>
                                <li>• WordPress avec Colibri pour le site MyXlab.</li>
                                <li>• Add-ons gratuits pour la conformité RGPD.</li>
                                <li>• FileZilla pour la gestion des fichiers.</li>
                                <li>• Akeeba Backup et BackWPup pour les sauvegardes.</li>
                                <li>• GLPI pour le suivi des demandes de modifications.</li>
                                <li>• SAPANET pour la gestion des demandes avant octobre 2024.</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Sources d’apprentissage :</h6>
                            <ul>
                                <li>• Documentation officielle Joomla et WordPress.</li>
                                <li>• Forums et communautés en ligne pour trouver des solutions économiques.</li>
                        </p>
                    
                    <h5>Tâches</h5>
                        <p>
                            <h6>Gestion des sites internet :</h6>
                            <ul>
                                <li>• Mise à jour du contenu sur Xlabs (horaires, analyses, documents).</li>
                                <li>• Mise en conformité RGPD sur MyXlab (formulaire sécurisé, pages légales).</li>
                                <li>• Modifications régulières des deux sites selon les demandes du service Qualité.</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Rédaction de procédures internes :</h6>
                            <ul>
                                <li>• Création de documents pour gérer les tâches récurrentes (ajout de pages, pop-ups).</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Amélioration du processus de gestion des demandes :</h6>
                            <ul>
                                <li>• Migration de SAPANET vers GLPI pour centraliser les demandes.</li>
                                <li>• Coordination avec le service Qualité pour un traitement rapide des tickets.</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Mise en place de sauvegardes :</h6>
                            <ul>
                                <li>• Réalisation de backups avant chaque modification pour garantir une reprise rapide.</li>
                            </ul>
                        </p>
                </div>
                <!-- projet-content-pause -->

                <!-- projet-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li>• Outils techniques peu intuitifs : CMS en versions restreintes, compliquant les modifications.</li>
                                <li>• Contraintes budgétaires : impossibilité de financer des solutions payantes.</li>
                                <li>• Complexité RGPD : exigences strictes nécessitant une collaboration avec la DPO et des recherches de solutions gratuites.</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li>• <b>Rédaction de procédures internes : </b>création de guides pour simplifier les modifications par d'autres utilisateurs.</li>
                                <li>• <b>Utilisation de plugins gratuits : </b> utilisation de plugins WordPress gratuits pour assurer la conformité RGPD.</li>
                                <li>• <b>Centralisation via GLPI : </b> optimisation du suivi et de la traçabilité des demandes.</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Compétences couvertes</h5>
                            <ul>
                                <li><b>• Gérer le patrimoine informatique :</b>
                                    <ul>
                                        <li>Recenser et identifier les ressources numériques</li>
                                        <li>Exploiter des référentiels, normes et standards adoptés par le prestataire informatique</li>
                                        <li>Vérifier les conditions de la continuité d’un service informatique</li>
                                    </ul>
                                </li>
                                <li><b>• Répondre aux incidents et aux demandes d’assistance et d’évolution :</b>
                                    <ul>
                                        <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
                                        <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
                                    </ul>
                                </li>
                                <li><b>• Développer la présence en ligne de l’organisation :</b>
                                    <ul>
                                        <li>Collecter, suivre et orienter des demandes</li>
                                        <li>Participer à l’évolution d’un site Web exploitant les données de l’organisatio</li>
                                    </ul>
                                </li>
                                <li><b>• Travailler en mode projet :</b>
                                    <ul>
                                        <li>Analyser les objectifs et les modalités d'organisation d'un projet</li>
                                        <li>Planifier les activités</li>
                                        <li>Évaluer les indicateurs de suivi d'un projet et analyser les écarts</li>
                                    </ul>
                                </li>
                                <li><b>• Mettre à disposition des utilisateurs un service informatique :</b>
                                    <ul>
                                        <li>Déployer un service</li>
                                        <li>Accompagner les utilisateurs dans la mise en place d'un service</li>
                                    </ul>
                                </li>
                                <li><b>• Organiser son développement professionnel :</b>
                                    <ul>
                                        <li>Mettre en œuvre des outils et stratégies de veille informationnell</li>
                                        <li> Gérer son identité professionnelle</li>
                                    </ul>
                                </li>
                            </ul>
                    </p>
                    <p>
                        <p>
                        <h5>Bilan Personnel</h5>
                            <h6>Aptitudes renforcées :</h6>
                                <ul>
                                    <li>• Résolution de problèmes techniques dans un environnement contraint.</li>
                                    <li>• Amélioration de la documentation et de la transmission des connaissances.</li>
                                    <li>• Approfondissement des connaissances sur Joomla, WordPress et l’éditeur Colibri.</li>
                                </ul>
                        </p>
                        <p>
                            <h6>Axes d'amélioration :</h6>
                                <ul>
                                    <li>• Suivre une formation avancée sur les CMS pour améliorer l'efficacité des modifications.</li>
                                    <li>• Envisager une refonte des sites pour adopter une version plus moderne et intuitive.</li>
                                </ul>
                        </p>
                    </p>
                </div>
                <!-- project content ends -->

                <!-- annexe-list-start  -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="www.xlabs.fr" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site Xlabs</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="www.myxlab.fr" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site MyXlab</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Exemple de procédure</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Capture d'écran GLPI</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-start  -->
            </div>

        </div>
    </div>
</div>
<!-- websites-modal-end -->

<!-- FCC-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Configuration et optimisation de FCC pour la gestion des appels</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="col">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Date : <span>Septembre 2024</span>
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
                                <i class="fa-light fa-building-user"></i>
                                Service Informatique
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- projet-context-start -->

                <!-- projet-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Contexte</h5>
                        <p>Dans le cadre de l’ouverture de nouveaux sites, j’ai configuré la solution FCC (Flexible Contact Center) 
                            d'Orange pour optimiser la gestion des appels téléphoniques entre secrétaires médicales, patients et médecins.</p>
                        <p>Le projet visait à ajuster les horaires, créer des messages vocaux automatisés, et mettre en place une gestion 
                            des appels entrants adaptée à chaque site.</p>
                        <p><strong>Contrainte principale : </strong>respect de la configuration préexistante pour éviter les effets de 
                            bord indésirables sur les sites déjà opérationnels.</p>
                    
                    <h5>Avec qui :</h5>
                        <p>
                        <ul>
                            <li>• Philippe Soulard (RSI, tuteur)</li>
                            <li>• David Martin (Conseiller Orange Business)</li>
                        </ul>
                        </p>                    
                    
                    <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li>• Flexible Contact Center (FCC) : solution téléphonique automatisée</li>
                                <li>• Microsoft Excel : création d'un annuaire dédié au format CSV</li>
                                <li>• Documentation Orange sur l’utilisation de FCC</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Rédaction d'une procédure permettant :</h6>
                            <ul>
                                <li>• La configuration et les mises à jour du FCC en autonomie</li>
                                <li>• La passation de connaissance</li>
                        </p>
                    
                    <h5>Tâches</h5>
                        <p>
                            <ul>
                                <li>• Configuration des horaires et calendriers : pour permettre la gestion des répondeurs et des messages vocaux</li>
                                <li>• Création des messages vocaux : choix multiples pour diriger les appelants, est et ajustement en fonction des retours des secrétaires médicales</li>
                                <li>• Gestion des bascules d'appels vers un autre site ouvert lorsque celui contacté est fermé</li>
                                <li>• Modification de la réception des messages vocaux pour répondre aux contraintes de gestion interne (pas de standardiste)</li>
                                <li>• Importation des données d'annuaire : Gestion des fichiers CSV pour l'importation des annuaires internes et externes vers la polyclinique, avec mise à jour manuelle de l’annuaire.</li>
                            </ul>
                        </p>

                </div>
                <!-- projet-content-pause -->

                <!-- projet-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li>• L’absence de standardistes a nécessité une solution autonome pour gérer les messages vocaux</li>
                                <li>• Intégration de nouveaux sites tout en respectant les configurations des sites existants</li>
                                <li>• Complexité technique du FCC : Outil FCC assez peu intuitif pour gérer plusieurs sites et configurations simultanées, rendant certaines opérations chronophages</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li>• <b>Suivi rigoureux : </b>configurations maitrisées dans le détail pour chaque site</li>
                                <li>• <b>Tests techniques : </b> valider chaque étape de la configuration des répondeurs et des bascules</li>
                                <li>• <b>Rédaction de procédure : </b>faciliter la prise en main par les autres collaborateurs et réduire le risque d'erreurs</li>
                                <li></li>
                            </ul>
                    </p>
                    <p>
                        <h5>Compétences couvertes</h5>
                            <ul>
                                <li><b>• Gérer le patrimoine informatique :</b>
                                    <ul>
                                        <li>Exploiter des référentiels, normes et standards adoptés par le prestataire informatique</li>
                                        <li>Vérifier les conditions de la continuité d’un service informatique</li>
                                    </ul>
                                </li>
                                <li><b>• Répondre aux incidents et aux demandes d’assistance et d’évolution :</b>
                                    <ul>
                                        <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
                                        <li>Traiter des demandes concernant les applications</li>
                                    </ul>
                                </li>
                                <li><b>• Mettre à disposition des utilisateurs un service informatique :</b>
                                    <ul>
                                        <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
                                        <li>Déployer un service</li>
                                        <li>Accompagner les utilisateurs dans la mise en place d'un service</li>
                                    </ul>
                                </li>
                                <li><b>• Organiser son développement professionnel :</b>
                                    <ul>
                                        <li>Mettre en place son environnement d’apprentissage personnel</li>
                                    </ul>
                                </li>
                            </ul>
                    </p>
                    <p>
                        <p>
                        <h5>Bilan Personnel</h5>
                            <h6>Aptitudes renforcées :</h6>
                                <ul>
                                    <li>• Communication et collaboration</li>
                                    <li>• Rédaction de procédure technique</li>
                                    <li>• Adaptation aux contraintes techniques</li>
                                    <li>• Renforcement des compétences techniques en téléphonie professionnelle</li>
                                </ul>
                        </p>
                        <p>
                            <h6>Axes d'amélioration :</h6>
                                <ul>
                                    <li>• Formation complémentaire sur les outils de téléphonie</li>
                                    <li>• Automatiser l'import des annuaires internes</li>
                                </ul>
                        </p>
                    </p>
                </div>
                <!-- project content ends -->

                <!-- annexe-list-start  -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Procédure de configuration FCC</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Diagrammes de GANTT</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Annuaire FCC</a>
                            </span>
                        </div>
                        <!-- <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Rapports de test ou COFRAC</a>
                            </span>
                        </div> -->
                    </div>
                </div>
                <!-- annexe-list-start  -->

            </div>

        </div>
    </div>
</div>
<!-- FCC-modal-end -->

<!-- portfolio-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-5" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Création et développement du Portfolio BTS SIO SLAM</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="col">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Dates : <span>Septembre 2023 - Avril 2025</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>MyDigitalSchool, Angers</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- projet-context-start -->

                <!-- projet-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Contexte</h5>
                        <p>Dans le cadre du BTS SIO SLAM, ce projet consistait à créer un portfolio pour présenter mes compétences et projets 
                            réalisés pendant la formation, tant au niveau scolaire qu'en entreprise.</p>
                        <p>L'objectif principal était de concevoir un site dynamique et structuré en utilisant des technologies web comme HTML, 
                            CSS, PHP, JavaScript, et Bootstrap.</p>
                        <p><strong>Contrainte principale : </strong>Utilisation d’un template adapté et création d’un site responsive, incluant des 
                        sections pour les projets, les compétences, la veille technologique et la documentation obligatoire.</p>
                    
                    <h5>Avec qui :</h5>
                        <p>
                        <ul>
                            <li>• Gilles Comblez (Responsable Pédagogique)</li>
                            <li>• Kévin Niel (Intervenant "Solutions logicielles et Applications Métiers")</li>
                        </ul>
                        </p>                    
                    
                    <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li>• HTML, CSS, JavaScript, PHP, Bootstrap et Template Bostami pour la création du site</li>
                                <li>• VSCode pour le développement</li>
                                <li>• Notion pour l'organisation</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Sources d'apprentissage :</h6>
                            <ul>
                                <li>• Sites W3Schools, StackOverflow pour résoudre des problèmes techniques</li>
                                <li>• Documentation officielle des technologies utilisées (Bootstrap, PHP, JavaScript)</li>
                        </p>
                    
                    <h5>Tâches</h5>
                        <p>
                            <h6>Création du site :</h6>
                            <ul>
                                <li>• Sélection d'un template</li>
                                <li>• Élaboration du plan du site répondant aux attentes du référentil du BTS SIO SLAM</li>
                                <li>• Modification du template pour répondre au plan du site</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Développement dynamique :</h6>
                            <ul>
                                <li>• Intégration de modals en JavaScript</li>
                                <li>• Mise en place de liens croisés entre projets et compétences.</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Rédaction de contenu :</h6>
                            <ul>
                                <li>• Présentations : personnelle, de l'entreprise, du BTS</li>
                                <li>• Description des projets et missions, accès à leur documentation</li>
                                <li>• Description des méthodes et outils de veille technologique</li>
                                <li>• Renseignement d'un tableau de synthèse</li>
                            </ul>
                        </p>
                </div>
                <!-- projet-content-pause -->

                <!-- projet-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li>• Gestion de la présentation croisée des projets et compétences</li>
                                <li>• Responsivité sur certaines sections complexes</li>
                                <li>• Gestion du temps : certains projets ont été finalisés près de l'examen, pressant la mise à jour du portfolio</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li>• <b>Choix des outils : </b>utilisation de CSS et Bootstrap pour améliorer la responsivité des sections complexes</li>
                                <li>• <b>Planification rigoureuse : </b>priorisation des sections essentielles et mise à jour continue au fur et à mesure des projets.</li>
                                <li>• <b>Suivi régulier : </b> points réguliers avec les intervenants pour garantir l’avancement du portfolio en parallèle avec les projets</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Compétences couvertes</h5>
                            <ul>
                                <li><b>• Développer la présence en ligne de l’organisation :</b>
                                    <ul>
                                        <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
                                        <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
                                    </ul>
                                </li>
                                <li><b>• Travailler en mode projet :</b>
                                    <ul>
                                        <li>Analyser les objectifs et les modalités d'organisation d'un projet</li>
                                        <li>Planifier les activités</li>
                                        <li>Évaluer les indicateurs de suivi d'un projet et analyser les écarts</li>
                                    </ul>
                                </li>
                                <li><b>• Organiser son développement professionnel :</b>
                                    <ul>
                                        <li>Mettre en place son environnement d’apprentissage personnel</li>
                                        <li>Mettre en œuvre des outils et stratégies de veille informationnelle</li>
                                        <li>Gérer son identité professionnelle</li>
                                        <li>Développer son projet professionnel</li>
                                    </ul>
                                </li>

                            </ul>
                    </p>
                    <p>
                        <p>
                        <h5>Bilan Personnel</h5>
                            <h6>Aptitudes renforcées :</h6>
                                <ul>
                                    <li>• Maîtrise des technologies web utilisées pour le développement d’un site dynamique</li>
                                    <li>• Gestion de contenu et création de liens croisés entre projets et compétences</li>
                                    <li>• Structuration d'informations</li>
                                    <li>• Mise en place d'outils de veille technologique</li>
                                </ul>
                        </p>
                        <p>
                            <h6>Axes d'amélioration :</h6>
                                <ul>
                                    <li>• Expérimenter avec des frameworks PHP plus avancés pour gérer les aspects dynamiques du site, comme Laravel</li>
                                    <li>• Approfondir mes compétences en optimisation des performances web</li>
                                </ul>
                        </p>
                    </p>
                </div>
                <!-- project content ends -->

                <!-- annexe-list-start  -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://portfolio.elianeperol.com" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Portofolio</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://github.com/ElianePerol/Portfolio.2025.BTS.SIO"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository GitHub</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Page Notion</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-start  -->

            </div>

        </div>
    </div>
</div>
<!-- portfolio-modal-end -->

<!-- welcome-training-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-6" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Welcome Training : Application PHP de gestion des classes et des présences</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="col">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Dates : <span>Septembre 2024 - Décembre 2024</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>MyDigitalSchool Angers</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- projet-context-start -->

                <!-- projet-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Contexte</h5>
                        <p>Dans le cadre du BTS SIO SLAM, ce projet avait pour objectif de développer une application web permettant la gestion des 
                            utilisateurs, classes, des matières et des présences.</p>
                        <p>Les élèves ne peuvent valider leur présence que si l'enseignant l'a autorisée.</p>
                        <p><strong>Contrainte principale : </strong>utilisation d'une base de données MySQL pour la gestion des différentes entités,
                            programmation orientée objet.</p>
                    
                    <h5>Avec qui :</h5>
                        <p>
                        <ul>
                            <li>• Kévin Niel (Intervenant "Solutions logicielles et Applications Métiers")</li>
                        </ul>
                        </p>                    
                    
                        <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li>• PHP, MySQL, HTML, CSS (Bootstrap)</li>
                                <li>• VSCode pour le développement</li>
                                <li>• PHPMyAdmin pour la gestion de la base de données</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Sources d'apprentissage :</h6>
                            <ul>
                                <li>• Sites W3Schools, StackOverflow pour résoudre des problèmes techniques</li>
                                <li>• Documentation officielle des technologies utilisées (PHP, MySQL, Bootstrap)</li>
                        </p>
                    
                    <h5>Tâches</h5>
                        <p>
                            <h6>Rédaction du cahier des charges</h6>
                        </p>
                        <p>
                            <h6>Modélisation de la base de données MySQL selon la méthode Merise :</h6>
                            <ul>
                                <li>• Rédaction d'un dictionnaire de données</li>
                                <li>• <b>(Modèle Conceptuel de Données)</b> : Identification des entités (utilisateurs, classes, matières, présences) et relations</li>
                                <li>• <b>MLD (Modèle Logique de Données)</b> : Transformation en tables relationnelles avec clés primaires et étrangères</li>
                                <li>• <b>MPD (Modèle Physique de Données)</b> : Création des tables et contraintes en SQL</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Implémentation de l'authentification et gestion des rôles :</h6>
                            <ul>
                                <li>• Mise en place d'un système de connexion et d'authentification sécurisée, 
                                    avec une gestion des sessions utilisateurs et un cryptage des mots de passe</li>
                                <li>• Ajout de la gestion des rôles pour restreindre les accès aux fonctionnalités 
                                    spécifiques (administration, gestion des classes, consultation d'emploi du temps, etc.)</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Création des fonctionnalités principales :</h6>
                            <ul>
                                <li>• <b>Gestion des utilisateurs</b> : création, modification, suppression et consultation des utilisateurs (administrateurs, 
                                    enseignants, élèves)</li>
                                <li>• <b>Gestion des classes et des matières</b> : ajout, suppression, modification des classes et des matières associées</li>
                                <li>• <b>Emploi du temps</b> : gestion des horaires et affectation des matières aux classes</li>
                                <li>• <b>Gestion de la présence</b> : les enseignants peuvent marquer les élèves comme présents, 
                                    et les élèves peuvent ensuite valider leur présence via un bouton visible uniquement si l'enseignant l’a autorisé</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Interface utilisateur avec Bootstrap :</h6>
                            <ul>
                                <li>• <b>Création du tableau de bord administrateur</b> : permet de gérer les utilisateurs, les classes et les matières</li>
                                <li>• <b>Création du tableau de bord enseignant</b> : permet de  gérer les présences et de consulter l'emploi du temps</li>
                                <li>• <b>Création du tableau de bord élève</b> : permet de consulter son emploi du temps et de valider sa présence une fois autorisé</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Tests :</h6>
                            <ul>
                                <li>• Création manuelle des entités pour chaque table</li>
                                <li>• érification du bon fonctionnement de chaque fonctionnalité sur les trois tableaux de bord différents</li>
                            </ul>
                        </p>
                </div>
                <!-- projet-content-pause -->

                <!-- projet-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li>• Refactorisation du code procédural en POO</li>
                                <li>• Gestion des sessions et sécurisation des données</li>
                                <li>• Conditionnement du bouton de validation de présence</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li>• Utilisation de classes pour modulariser l'application</li>
                                <li>• Requêtes SQL conditionnelles pour la gestion des présences</li>
                                <li>• Sessions sécurisées et cryptage des mots de passe</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Compétences couvertes</h5>
                            <ul>
                                <li><b>• Développer la présence en ligne de l’organisation :</b>
                                    <ul>
                                        <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
                                        <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
                                    </ul>
                                </li>
                                <li><b>• Travailler en mode projet :</b>
                                    <ul>
                                        <li>Analyser les objectifs et les modalités d'organisation d'un projet</li>
                                        <li>Planifier les activités</li>
                                        <li>Évaluer les indicateurs de suivi d'un projet et analyser les écarts</li>
                                    </ul>
                                </li>
                                <li><b>• Mettre à disposition des utilisateurs un service informatique :</b>
                                    <ul>
                                        <li>Déployer un service</li>
                                    </ul>
                                </li>
                                <li><b>• Organiser son développement professionnel :</b>
                                    <ul>
                                        <li>Mettre en place son environnement d’apprentissage personnel</li>
                                        <li>Gérer son identité professionnelle</li>
                                        <li>Développer son projet professionnel</li>
                                    </ul>
                                </li>

                            </ul>
                    </p>
                    <p>
                        <p>
                        <h5>Bilan Personnel</h5>
                            <h6>Aptitudes renforcées :</h6>
                                <ul>
                                    <li>• Maîtrise de la POO et des principes de sécurité en développement web</li>
                                    <li>• Optimisation du code et structuration modulaire</li>
                                    <li>• Gestion de données dynamiques</li>
                                    <li>• Mise en place d'outils de veille technologique</li>
                                </ul>
                        </p>
                        <p>
                            <h6>Axes d'amélioration :</h6>
                                <ul>
                                    <li>• Ajouter des fonctionnalités telles que la gestion des absences et des rapports détaillés sur les présences des élèves</li>
                                    <li>• Exploration de frameworks PHP comme Laravel pour optimiser la gestion des requêtes</li>
                                </ul>
                        </p>
                    </p>
                </div>
                <!-- project content ends -->

                <!-- annexe-list-start  -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://welcometraining.elianeperol.com/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site Welcome Training</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://github.com/ElianePerol/Welcome-Training-OOP" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository GitHub</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Modélisation de la BDD</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Diagramme UML</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Code source (extraits commentés)</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Captures d’écran des interfaces</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Documentation utilisateur (guide rapide d’utilisation de l’application)</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-start  -->
            </div>

        </div>
    </div>
</div>
<!-- welcome-training-modal-end -->

<!-- click n eat-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-7" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Click'n Eat : Application Laravel pour une Expérience de Restaurant Simplifiée</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="col">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Dates : <span>Février 2025 - Mars 2025</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>MyDigitalSchool Angers</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- projet-context-start -->

                <!-- projet-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Contexte</h5>
                        <p>Dans le cadre de ma formation en BTS SIO SLAM, ce projet fictif a pour objectif de développer une application 
                            web permettant la gestion des restaurants, la réservation des repas et la prise de commande à l'avance.</p>
                        <p>L'objectif est de créer une solution permettant aux clients de récupérer leurs repas dès leur arrivée, sans attente.</p>
                        <p>Le projet vise à optimiser les échanges entre les différents acteurs du restaurant (administration, service, cuisine, 
                            clients) grâce à une gestion fluide et synchronisée des menus, commandes et réservations.</p>
                        <p><strong>Contrainte principale : </strong>Utilisation du framework Laravel pour le développement de l’application et 
                            intégration d’un système de paiement en ligne via l'API Stripe</p>
                    
                    <h5>Avec qui :</h5>
                        <p>
                        <ul>
                            <li>• Kévin Niel (Intervenant "Solutions logicielles et Applications Métiers")</li>
                        </ul>
                        </p>                    
                    
                        <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li>• VSCode pour le développement</li>
                                <li>• Framework Laravel (PHP)</li>
                                <li>• Template Quixlab (Bootstrap)</li>
                                <li>• Gestion des données : SQLite pré-prod et MySQL en production</li>
                                <li>• Framework Pest pour les tests unitaires</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Sources d'apprentissage :</h6>
                            <ul>
                                <li>• StackOverflow pour résoudre des problèmes techniques</li>
                                <li>• Documentation officielle des technologies utilisées (Laravel, Stripe)</li>
                        </p>
                    
                    <h5>Tâches</h5>
                        <p>
                            <h6>Rédaction du cahier des charges</h6>
                        </p>
                        <p>
                            <h6>Modélisation de la base de données selon la méthode Merise :</h6>
                            <ul>
                                <li>• Rédaction d'un dictionnaire de données</li>
                                <li>• <b>(Modèle Conceptuel de Données)</b> : Identification des entités (utilisateurs, classes, matières, présences) et relations</li>
                                <li>• <b>MLD (Modèle Logique de Données)</b> : Transformation en tables relationnelles avec clés primaires et étrangères</li>
                                <li>• <b>MPD (Modèle Physique de Données)</b> : Création des tables et contraintes en SQL</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Implémentation de l'authentification et gestion des rôles :</h6>
                            <ul>
                                <li>• Mise en place d'un système de connexion et d'authentification sécurisée avec Breeze</li>
                                <li>• Ajout de la gestion des rôles pour restreindre les accès aux fonctionnalités 
                                    spécifiques (tableau de bord restaurant, tableau de bord client, etc.)</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Création des fonctionnalités principales :</h6>
                            <ul>
                                <li>• <b>Gestion des utilisateurs</b> : Authentification des utilisateurs (clients et administrateurs) avec gestion des rôles (restaurant, client)</li>
                                <li>• <b>Gestion des restaurants</b> : Création, modification, suppression et consultation des restaurants</li>
                                <li>• <b>Gestion des menus</b> : Classification des articles au menu par catégorie et ajout des options spécifiques</li>
                                <li>• <b>Gestion des commandes</b> : Prise en charge des commandes avec options de suivi</li>
                                <li>• <b>Gestion des réservations </b> : Permet aux clients de réserver des tables en ligne et de recevoir un code QR pour accéder à leur commande</li>
                                <li>• <b>Gestion de la présence</b> : les enseignants peuvent marquer les élèves comme présents, 
                                    et les élèves peuvent ensuite valider leur présence via un bouton visible uniquement si l'enseignant l’a autorisé</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Interface utilisateur avec templace Quixlab :</h6>
                            <ul>
                                <li>• <b>Création du tableau de bord administrateur</b> : permet d'ajouter de nouveaux restaurants</li>
                                <li>• <b>Création du tableau de bord restaurant</b> : permet de créer ses menus et gérer ses commandes et réservations</li>
                                <li>• <b>Création du tableau de bord client</b> : permet de consulter les menus, réserver, commander et payer en ligne</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Fonctionnalités avancées (MLP) :</h6>
                            <ul>
                                <li>Génération d’un lien d’accès à la commande de chaque carte de restaurant via un QR code</li>
                                <li>Interface responsive pour une consultation facile sur tous les appareils</li>
                                <li>Paiement en ligne via API Stripe, avec gestion de la sécurité et de la confidentialité des transactions</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Tests :</h6>
                            <ul>
                                <li>• Mise en place de tests unitaires via Pest pour valider le bon fonctionnement des différentes fonctionnalités</li>
                                <li>• Tests d’ergonomie pour l'interface utilisateur sur différentes plateformes (mobile, tablette, desktop)</li>
                            </ul>
                        </p>
                </div>
                <!-- projet-content-pause -->

                <!-- projet-image -->
                <div class="h1-modal-img">
                    <img src="assets/img/work/portfolio-modal-img-1.jpg" alt="">
                </div>

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li>• Prise en main du framework Laravel</li>
                                <li>• Synchronisation des menus et des réservations en temps réel pour chaque restaurant</li>
                                <li>• Intégration du paiement en ligne avec Stripe et gestion des erreurs de paiement</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                            <li>• Consultation de la documentation officielle de Laravel pour faciliter la prise en main du framework et maîtriser ses concepts clés</li>
                            <li>• Utilisation de Laravel Echo et WebSockets pour assurer la synchronisation en temps réel des menus et des réservations pour chaque restaurant</li>
                            <li>• Intégration de Laravel Cashier avec l'API Stripe pour gérer les paiements en ligne et les erreurs</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Compétences couvertes</h5>
                            <ul>
                                <li><b>• Développer la présence en ligne de l’organisation :</b>
                                    <ul>
                                        <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
                                        <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
                                    </ul>
                                </li>
                                <li><b>• Travailler en mode projet :</b>
                                    <ul>
                                        <li>Analyser les objectifs et les modalités d'organisation d'un projet</li>
                                        <li>Planifier les activités</li>
                                        <li>Évaluer les indicateurs de suivi d'un projet et analyser les écarts</li>
                                    </ul>
                                </li>
                                <li><b>• Mettre à disposition des utilisateurs un service informatique :</b>
                                    <ul>
                                        <li>Déployer un service</li>
                                    </ul>
                                </li>
                                <li><b>• Organiser son développement professionnel :</b>
                                    <ul>
                                        <li>Mettre en place son environnement d’apprentissage personnel</li>
                                        <li>Gérer son identité professionnelle</li>
                                        <li>Développer son projet professionnel</li>
                                    </ul>
                                </li>

                            </ul>
                    </p>
                    <p>
                        <p>
                        <h5>Bilan Personnel</h5>
                            <h6>Aptitudes renforcées :</h6>
                                <ul>
                                    <li>• Maîtrise de Laravel et de son écosystème</li>
                                    <li>• Optimisation du code backend avec des pratiques de développement moderne</li>
                                    <li>• Gestion de la sécurité et de l'intégration de systèmes tiers (Stripe)</li>
                                    <li>• ests unitaires et gestion de l’intégration continue avec Pest</li>
                                </ul>
                        </p>
                        <p>
                            <h6>Axes d'amélioration :</h6>
                                <ul>
                                    <li>• Ajouter une fonctionnalité de gestion des stocks pour les restaurants</li>
                                    <li>• Explorer des fonctionnalités supplémentaires comme l'intégration de la charte graphique de chaque restaurant</li>
                                </ul>
                        </p>
                    </p>
                </div>
                <!-- project content ends -->

                <!-- annexe-list-start  -->
                <div class="h1-modal-paragraph">
                    <h5>Annexes</h5>
                </div>

                <div class="portfolio-modal-table">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://clickneat.elianeperol.com/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site Click'n Eat</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://github.com/ElianePerol/Click.n.Eat" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository GitHub</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Modélisation de la BDD</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Diagramme UML</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Code source (extraits commentés)</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Captures d’écran des interfaces</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Documentation utilisateur (guide rapide d’utilisation de l’application)</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- annexe-list-start  -->
            </div>

        </div>
    </div>
</div>
<!-- click n eat-modal-end -->
