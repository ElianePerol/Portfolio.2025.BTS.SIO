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

                            <!-- tableau-synthèse-button -->
                            <div class="bostami-parsonal-info-btn">
                                <a class="btn-2 circle" href="assets/docs/tableau-synthese-competences.pdf" target="_blank">
                                    <span class="icon"><i class="fa-regular fa-download"></i>Tableau de Synthèse (Annexe 8-1)</a>
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
                                <div class="fillter-item bg-prink">
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
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-5">
                                        <img src="assets/img/projects/bts-portfolio.png" alt="">
                                    </a>
                                    <span class="item-subtitle">ESPL Angers, Mai 2024 - Avril 2025</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-5">
                                            Création et développement du Portfolio BTS SIO SLAM</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- portfolio-end -->

                            <!-- welcome-training-start -->
                            <div class="isotop-item online project-mode availability pro-growth">
                                <div class="fillter-item bg-yellow">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-6">
                                        <img src="assets/img/projects/welcome-training.png" alt="">
                                    </a>
                                    <span class="item-subtitle">ESPL Angers, Septembre 2024 - Décembre 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-6">
                                            Welcome Training : Application PHP de gestion des classes et des présences</a>
                                    </h6>
                                </div>
                            </div>
                            <!-- welcome-training-end -->

                            <!-- click n eat-start -->
                            <div class="isotop-item online project-mode availability pro-growth">
                                <div class="fillter-item bg-catkrill">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-7">
                                        <img src="assets/img/projects/clickneat.png" alt="">
                                    </a>
                                    <span class="item-subtitle">ESPL Angers, Février 2025 - Mars 2025</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-7">
                                            Click'n Eat : Application Laravel pour une Expérience de Restaurant Simplifiée
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <!-- click n eat-end -->

                            <!-- glpi-start -->
                            <div class="isotop-item support online availability pro-growth">
                                <div class="fillter-item bg-prink">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-8">
                                        <img src="assets/img/projects/glpi.png" alt="">
                                    </a>
                                    <span class="item-subtitle">GIE MyXlab, Depuis Août 2023</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-8">
                                            Résolution des Tickets GLPI et Gestion des Problèmes Techniques
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <!-- glpi-end -->

                            <!-- mssante-start -->
                            <div class="isotop-item assets support availability">
                                <div class="fillter-item bg-yellow">
                                    <a class="img" href="" data-bs-toggle="modal" data-bs-target="#projet-9">
                                        <img src="assets/img/projects/mssante.png" alt="">
                                    </a>
                                    <span class="item-subtitle">GIE MyXlab, Novembre 2024</span>
                                    <h6 class="item-title">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#projet-9">
                                            Mise en place d’une adresse MSSanté organisationnelle
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <!-- mssante-end -->

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
include_once "common/footer.php";
?>


<!-- websites-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;" role="document">
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
                        <p>J'ai pris en charge la maintenance et la mise à jour des sites internet de l'entreprise :<br>
                               - le site Xlabs, créé avec le CMS Joomla, en activité depuis plus de dix ans<br>
                               - le site MyXlab, créé avec le CMS WordPress et l'éditeur Colibri<br>
                            En tenant compte des limites techniques et économiques, j'ai assuré la gestion des pages stratégiques, 
                            la conformité RGPD et la mise en œuvre de solutions économiquement viables.</p>
                        <p>J'ai porté une attention particulière à la traçabilité des évolutions et à la rédaction de procédures internes 
                            pour faciliter la prise en main des sites par les collaborateurs.</p>
                        <p><strong>Contrainte principale : </strong> garantir la traçabilité des modifications grâce à une transition vers 
                            l’outil GLPI en octobre 2024, en remplacement du précédent système SAPANET.
                        </p>
                    
                    <h5>Avec qui :</h5>
                        <p>
                        <ul>
                            <li><b>• Philippe Soulard</b> - RSI et tuteur, transfert de connaissances</li>
                            <li><b>• Kévin Gandon</b> - Technicien informatique, transfert de connaissances</li>
                            <li><b>• Sylvie Dehoux</b> - Responsable Qualité, transmission des demandes</li>
                            <li><b>• Aline Hucteau</b> - Assistante Qualité, transmission des demandes</li>
                        </ul>
                        </p>                    
                    
                    <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li><b>• GLPI</b> pour le suivi des demandes de modifications</li>
                                <li><b>• SAPANET</b> pour la gestion des demandes avant octobre 2024</li>
                                <li><b>• Joomla</b> (v3.10.11 au lieu de v5.2.5, dernière version disponible) pour le site Xlabs</li>
                                <li><b>• WordPress</b> avec Colibri pour le site MyXlab</li>
                                <li><b>• Akeeba Backup</b> pour les sauvegardes complètes du site sous Joomla</li>
                                <li><b>• BackWPup</b> pour les sauvegardes complètes du site sous WordPress</li>
                                <li><b>• Add-ons</b> gratuits pour la conformité RGPD</li>
                                <li><b>• FileZilla</b> pour la gestion des fichiers</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Sources d’apprentissage :</h6>
                            <ul>
                                <li>• Documentation officielle Joomla et WordPress</li>
                                <li>• Forums et communautés en ligne pour trouver des solutions économiques</li>
                        </p>
                    
                    <h5>Tâches</h5>
                        <p>
                            <h6>Gestion des sites internet :</h6>
                            <ul>
                                <li>• Mise à jour du contenu sur Xlabs (horaires, analyses, documents)</li>
                                <li>• Mise en conformité RGPD sur MyXlab (formulaire sécurisé, pages légales)</li>
                                <li>• Modifications régulières des deux sites selon les demandes du service Qualité</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Rédaction de procédures internes :</h6>
                            <ul>
                                <li>• Création de documents pour gérer les tâches récurrentes (ajout de pages, pop-ups)</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Amélioration du processus de gestion des demandes :</h6>
                            <ul>
                                <li>• Migration de SAPANET vers GLPI pour centraliser les demandes</li>
                                <li>• Coordination avec le service Qualité pour un traitement rapide des tickets</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Mise en place de sauvegardes :</h6>
                            <ul>
                                <li>• Réalisation de backups avant chaque modification pour garantir une reprise rapide</li>
                            </ul>
                        </p>
                </div>
                <!-- projet-content-pause -->

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li><b>• Outils techniques restreints</b> : utilisation de versions gratuites de CMS, dont Joomla dans une version obsolète, rendant les modifications complexes</li>
                                <li><b>• Contraintes budgétaires</b> : impossibilité de financer des solutions payantes</li>
                                <li><b>• Complexité RGPD</b> : exigences strictes nécessitant une collaboration avec la DPO et la recherche de solutions gratuites</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li><b>• Rédaction de procédures internes</b> : création de guides pour simplifier les modifications par d'autres utilisateurs</li>
                                <li><b>• Utilisation de plugins gratuits</b> :  utilisation de plugins WordPress gratuits pour assurer la conformité RGPD</li>
                                <li><b>• Centralisation via GLPI</b> :  optimisation du suivi et de la traçabilité des demandes</li>
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
                                        <li>Collecter, suivre et orienter des demandes</li>
                                        <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
                                    </ul>
                                </li>
                                <li><b>• Développer la présence en ligne de l’organisation :</b>
                                    <ul>
                                        <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux
                                        économiques</li>
                                        <li>Référencer les services en ligne de l’organisation et mesurer leur visibilité</li>
                                        <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation</li>
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
                                        <li>Mettre en place son environnement d’apprentissage personnel</li>
                                        <li>Mettre en œuvre des outils et stratégies de veille informationnelle</li>
                                        <li>Gérer son identité professionnelle</li>
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
                    <!-- <div class="row"> -->
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://www.xlabs.fr" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site Xlabs</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://www.myxlab.fr" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site MyXlab</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/demande_maj_sapanet_glpi.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Demandes de mises à jour : de SAPANET à GLPI</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/sauvegarde_akeebabackup_backwpup.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Tableaux de bord des sauvegardes (capture)</a>
                            </span>
                        </div>
                    <!-- </div> -->
                </div>
                <!-- annexe-list-start  -->
            </div>

        </div>
    </div>
</div>
<!-- websites-modal-end -->

<!-- FCC-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;" role="document">
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
                            <li><b>• Philippe Soulard</b> - RSI, tuteur</li>
                            <li><b>• David Martin</b> - Conseiller Orange Business</li>
                        </ul>
                        </p>                    
                    
                    <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li><b>• Flexible Contact Center (FCC)</b> : solution téléphonique automatisée</li>
                                <li><b>• Microsoft Excel</b> : création d'un annuaire dédié au format CSV</li>
                                <li><b>• Documentation Orange</b> sur l’utilisation de FCC</li>
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
                                <li>• Création des messages vocaux : choix multiples pour diriger les appelants, tests et ajustement en fonction des retours 
                                    des secrétaires médicales</li>
                                <li>• Gestion des bascules d'appels vers un autre site ouvert lorsque celui contacté est fermé</li>
                                <li>• Modification des modalités de réception des messages vocaux pour répondre aux contraintes de gestion interne (pas de standardiste)</li>
                                <li>• Importation des données d'annuaire : Gestion des fichiers CSV pour l'importation des annuaires internes et externes vers la polyclinique, avec mise à jour manuelle de l’annuaire.</li>
                            </ul>
                        </p>

                </div>
                <!-- projet-content-pause -->

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li><b>• Absence de standardistes</b> : nécessité d'une solution autonome pour gérer les messages vocaux</li>
                                <li><b>• Intégration de nouveaux sites</b> tout en respectant les configurations des sites existants</li>
                                <li><b>• Complexité technique du FCC</b> : Outil FCC assez peu intuitif pour gérer plusieurs sites et configurations simultanées, rendant certaines opérations chronophages</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li><b>• Suivi rigoureux : </b>configurations maitrisées dans le détail pour chaque site</li>
                                <li><b>• Tests techniques : </b> valider chaque étape de la configuration des répondeurs et des transferts</li>
                                <li><b>• Rédaction de procédure : </b>faciliter la prise en main par les autres collaborateurs et réduire les risques d'erreur</li>
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
                                        <li>Collecter, suivre et orienter des demandes</li>
                                        <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
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
                                    <li>• Rédaction de procédure technique détaillée</li>
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
                    <!-- <div class="row"> -->
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/procedure_configuration_fcc.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Procédure de configuration FCC</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/dashboard_fcc.png" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Tableau de bord FCC Orange Business (capture)</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/annuaire_fcc_csv.png" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Annuaire FCC (extrait)</a>
                            </span>
                        </div>
                        <!-- <div class="col-md-6">
                            <span class="">
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Rapports de test ou COFRAC</a>
                            </span>
                        </div> -->
                    <!-- </div> -->
                </div>
                <!-- annexe-list-start  -->

            </div>

        </div>
    </div>
</div>
<!-- FCC-modal-end -->

<!-- portfolio-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-5" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;" role="document">
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
                                Dates : <span>Mai 2024 - Avril 2025</span>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-location-dot"></i>
                                Lieu : <span>ESPL, Angers</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- projet-context-start -->

                <!-- projet-content-start -->
                <div class="h1-modal-paragraph">
                    <h5>Contexte</h5>
                        <p>Dans le cadre du BTS SIO option SLAM, ce projet avait pour objectif de créer un portfolio en ligne servant de vitrine 
                            pour présenter les projets réalisés en entreprise et durant la formation.</p>
                        <p>L’objectif principal était de structurer ce portfolio de manière à répondre aux compétences et sous-compétences 
                            prédéfinies, tout en intégrant une section dédiée à la veille technologique, afin de présenter les outils et stratégies 
                            mis en place.</p>
                        <p><strong>Contrainte principale : </strong>Utilisation d’un template adapté pour garantir une mise en page claire et 
                        professionnelle, intégrant différentes sections : projets, compétences, veille technologique et documentation obligatoire.</p>
                    
                    <h5>Avec qui :</h5>
                        <p>
                        <ul>
                            <li><b>• Gilles Comblez</b> - Responsable Pédagogique</li>
                            <li><b>• Kévin Niel</b> - Intervenant "Solutions logicielles et Applications Métiers"</li>
                        </ul>
                        </p>                    
                    
                    <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li><b>• HTML, CSS, JavaScript, PHP, Bootstrap</b> et <b>Template Bostami</b> pour la création du site</li>
                                <li><b>• VSCode</b> pour le développement</li>
                                <li><b>• Notion</b> pour l'organisation</li>
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
                                <li>• Élaboration du plan du site répondant aux attentes du référentiel du BTS SIO SLAM</li>
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

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li><b>• Gestion de la présentation croisée</b> des projets et compétences</li>
                                <li><b>• Responsivité</b> sur certaines sections complexes</li>
                                <li><b>• Gestion du temps</b> : certains projets ont été finalisés près de l'examen, pressant la mise à jour du portfolio</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li><b>• Choix des outils : </b>utilisation de CSS et Bootstrap pour améliorer la responsivité des sections complexes</li>
                                <li><b>• Planification rigoureuse : </b>priorisation des sections essentielles et mise à jour continue au fur et à mesure des projets.</li>
                                <li><b>• Suivi régulier : </b> points réguliers avec les intervenants pour garantir l’avancement du portfolio en parallèle avec les projets</li>
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
                    <!-- <div class="row"> -->
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/gantt_portfolio.png" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square" target="_blank"></i>   Diagramme de GANTT</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/notion_portfolio.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square" target="_blank"></i>   Page Notion</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://portfolio.elianeperol.com" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Portfolio</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://github.com/ElianePerol/Portfolio.2025.BTS.SIO" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Repository GitHub</a>
                            </span>
                        </div>
                    <!-- </div> -->
                </div>
                <!-- annexe-list-start  -->

            </div>

        </div>
    </div>
</div>
<!-- portfolio-modal-end -->

<!-- welcome-training-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-6" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;" role="document">
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
                                Lieu : <span>ESPL, Angers</span>
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
                            <li><b>• Kévin Niel</b> - Intervenant "Solutions logicielles et Applications Métiers"</li>
                        </ul>
                        </p>                    
                    
                        <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li><b>• PHP, MySQL, HTML, CSS (Bootstrap)</b></li>
                                <li><b>• VSCode</b> pour le développement</li>
                                <li><b>• PHPMyAdmin</b> pour la gestion de la base de données</li>
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
                                <li><b>• Rédaction d'un dictionnaire de données</b></li>
                                <li><b>• MCD (Modèle Conceptuel de Données)</b> : Identification des entités (utilisateurs, classes, matières, présences) et relations</li>
                                <li><b>• MLD (Modèle Logique de Données)</b> : Transformation en tables relationnelles avec clés primaires et étrangères</li>
                                <li><b>• MPD (Modèle Physique de Données)</b> : Création des tables et contraintes en SQL</li>
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
                                <li><b>• Gestion des utilisateurs</b> : création, modification, suppression et consultation des comptes utilisateurs (administrateurs, 
                                    enseignants, élèves)</li>
                                <li><b>• Gestion des classes et des matières</b> : ajout, suppression, modification des classes et des matières associées</li>
                                <li><b>• Emploi du temps</b> : gestion des horaires et affectation des matières aux classes</li>
                                <li><b>• Gestion de la présence</b> : les enseignants peuvent marquer les élèves comme présents, 
                                    et les élèves peuvent ensuite valider leur présence via un bouton visible uniquement si l'enseignant l’a autorisé</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Interface utilisateur avec Bootstrap :</h6>
                            <ul>
                                <li><b>• Création du tableau de bord administrateur</b> : permet de gérer les utilisateurs, les classes et les matières</li>
                                <li><b>• Création du tableau de bord enseignant</b> : permet de  gérer les présences et de consulter l'emploi du temps</li>
                                <li><b>• Création du tableau de bord élève</b> : permet de consulter son emploi du temps et de valider sa présence une fois autorisé</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Tests :</h6>
                            <ul>
                                <li>• Création manuelle des entités pour chaque table</li>
                                <li>• Vérification du bon fonctionnement de chaque fonctionnalité sur les trois tableaux de bord différents</li>
                            </ul>
                        </p>
                </div>
                <!-- projet-content-pause -->

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li>• Refactorisation du code procédural en Programmation Orientée Objet (POO)</li>
                                <li>• Gestion des sessions et sécurisation des données</li>
                                <li>• Conditionnement du bouton de validation de présence</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li>• Utilisation de classes pour modulariser le code</li>
                                <li>• Requêtes SQL conditionnelles pour la gestion des présences</li>
                                <li>• Gestion sécurisée des sessions et cryptage des mots de passe</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Compétences couvertes</h5>
                            <ul>
                                <li><b>• Développer la présence en ligne de l’organisation :</b>
                                    <ul>
                                        <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte 
                                            du cadre juridique et des enjeux économiques</li>
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
                                        <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
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
                                <a href="#" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Cahier des charges</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/welcome_training_merise_bdd.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Modélisation de la BDD</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Diagramme de GANTT</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Diagramme UML</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Code source (extraits commentés)</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Captures d’écran des interfaces</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="#" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Documentation utilisateur (guide rapide d’utilisation de l’application)</a>
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
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;" role="document">
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
                                Lieu : <span>ESPL, Angers</span>
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
                            <li><b>• Kévin Niel</b> - Intervenant "Solutions logicielles et Applications Métiers"</li>
                        </ul>
                        </p>                    
                    
                        <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li><b>• VSCode</b> pour le développement</li>
                                <li><b>• Laravel</b> : framework PHP</li>
                                <li><b>• Quixlab</b> : template Bootstrap</li>
                                <li><b>• SQLite</b> en préproduction et <b>MySQL</b> en production pour la gestion des données</li>
                                <li><b>• Pest</b> : framework pour les tests unitaires</li>
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
                                <li><b>• Rédaction d'un dictionnaire de données</b></li>
                                <li><b>• MLD (Modèle Conceptuel de Données)</b> : Identification des entités (utilisateurs, restaurants, menus, commandes) et relations</li>
                                <li><b>• MLD (Modèle Logique de Données)</b> : Transformation en tables relationnelles avec clés primaires et étrangères</li>
                                <li><b>• MPD (Modèle Physique de Données)</b> : Création des tables et contraintes en SQL</li>
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
                                <li><b>• Gestion des utilisateurs</b> : Authentification des utilisateurs (clients et administrateurs) avec gestion des rôles (restaurant, client)</li>
                                <li><b>• Gestion des restaurants</b> : Création, modification, suppression et consultation des restaurants</li>
                                <li><b>• Gestion des menus</b> : Classification des articles au menu par catégorie et ajout des options spécifiques</li>
                                <li><b>• Gestion des commandes</b> : Prise en charge des commandes avec options de suivi</li>
                                <li><b>• Gestion des réservations </b> : Permet aux clients de réserver des tables en ligne et de recevoir un code QR pour accéder à leur commande</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Interface utilisateur avec templace Quixlab :</h6>
                            <ul>
                                <li><b>• Création du tableau de bord administrateur</b> : permet d'ajouter de nouveaux restaurants</li>
                                <li><b>• Création du tableau de bord restaurant</b> : permet de créer ses menus et gérer ses commandes et réservations</li>
                                <li><b>• Création du tableau de bord client</b> : permet de consulter les menus, réserver, commander et payer en ligne</li>
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
                            <li>• Intégration de Laravel Cashier avec l'API Stripe pour gérer les paiements en ligne et les éventuelles erreurs de paiement</li>
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
                                        <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
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
                                    <li>• Tests unitaires et gestion de l’intégration continue avec Pest</li>
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
                                <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Diagramme GANT</a>
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

<!-- glpi-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-8" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Résolution des Tickets GLPI et Gestion des Problèmes Techniques</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="col">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Dates : <span>Depuis Août 2023</span>
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
                        <p>Le service informatique de l’entreprise est composé de cinq personnes :
                            <ul>
                                <li><b>• Eric Comy</b> – Directeur des Systèmes d’Information (DSI)</li>
                                <li><b>• Philippe Soulard</b> – Responsable des Systèmes d’Information (RSI)</li>
                                <li><b>• Tifen Massé</b> – Administratrice réseau</li>
                                <li><b>• Kevin Gandon</b> – Technicien support</li>
                                <li><b>• Moi-même</b> – Alternante BTS SIO option SLAM</li>
                            </ul>
                        </p>
                        <p>Lorsqu’un utilisateur ouvre un ticket via GLPI, Kevin ou moi nous chargeons de l’attribuer à la personne la plus compétente en 
                            fonction de la nature du problème.</p>
                        <p>S’il s’agit d’un ticket que nous pouvons résoudre nous-mêmes, nous analysons l’incident ou la demande, identifions les causes, 
                            proposons une solution et validons son implémentation avec l’utilisateur avant de clôturer le ticket.</p>
                        <p>
                            <ul>Les tickets traités couvrent une variété de demandes, parmi lesquelles :
                                <li>• Incidents récurrents liés à la transmission des résultats médicaux (problèmes de configuration de Kalisil, du 
                                    Bioserveur et des messageries sécurisées MSSanté, Apicrypt)</li>
                                <li>• Réclamations sur la performance des PC et demandes de remplacement de matériel défectueux</li>
                                <li>• Remise en service d’outils après un plantage</li>
                                <li>• Modifications et mises à jour des sites internet</li>
                            </ul>
                        </p>
                  
                    <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li><b>• GLPI</b> : Suivi et gestion des tickets</li>
                                <li><b>• Kalisil</b> : Logiciel métier utilisé pour générer et transmettre les résultats médicaux</li>
                                <li><b>• Bioserveur</b> :  Service de gestion des envois sécurisés de résultats d'analyses</li>
                                <li><b>• Messageries sécurisées de santé (MSSanté, Apicrypt)</b> : Messageries sécurisées de santé</li>
                                <li><b>• WordPress & Joomla</b> : Gestion et mises à jour des sites internet</li>
                            </ul>
                        </p>
                    
                    <h5>Tâches</h5>
                        <p>
                            <ol>
                                <li>Attribution des tickets GLPI en fonction des compétences de chacun</li>
                                <li>Analyse des incidents et demandes pour identifier leur origine</li>
                                <li>Proposition et mise en œuvre de solutions adaptées</li>
                                <li>Validation des corrections avec l’utilisateur avant clôture</li>
                                <li>Documentation des résolutions pour faciliter les interventions futures</li>
                            </ol>
                        </p>
                </div>
                <!-- projet-content-pause -->

                <!-- project content continues -->
                <div>
                    <h4>Exemple concret : Ticket GLPI #1424 – Modification horaire du site internet</h4>
                    <p>
                        <h5>Contexte du ticket</h5>
                        <p>Un biologiste a formulé une demande d’amélioration du site internet, nécessitant l’ajout 
                            d’un plugin et la création d’une nouvelle page pour mieux structurer certaines informations.</p>
                            <ul><strong>Actions réalisées :</strong>
                                <li>• Définition du besoin avec l’utilisateur pour préciser ses attentes</li>
                                <li>• Ajout du plugin permettant la création de pop-up sur WordPress et configuration des paramètres</li>
                                <li>• Création et intégration de la nouvelle page, en respectant la charte graphique existante</li>
                                <li>• Validation auprès du biologiste pour s’assurer que la modification répondait bien au besoin exprimé</li>
                                <li>• Anticipation de besoins similaires pour d’autres sites, en prenant contact avec les biologistes 
                                    d’autres laboratoires pour proposer une mise à jour similaire si nécessaire</li>
                                <li>• Communication des modifications par e-mail aux biologistes concernés, avec une explication sur les 
                                    nouvelles fonctionnalités disponibles</li>
                            </ul>
                            <ul><strong>Résultat :</strong>
                                <li>• Le site internet a été mis à jour conformément aux attentes du biologiste</li>
                                <li>• Les autres laboratoires ont été consultés et ont également opté pour cette modification</li>
                                <li>• Une documentation interne a été réalisée pour faciliter la mise en œuvre de modifications similaires à l’avenir</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                            <li>• Prise en main de WordPress et Joomla</li>
                            <li>• Choix du plugin le plus adapté</li>
                            <li>• Coordination avec plusieurs biologistes pour anticiper les besoins similaires</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                            <li>• Consultation de la documentation officielle</li>
                            <li>• Test du plugin avant installation sur le site déployé</li>
                            <li>• Communication proactive par e-mail</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Compétences couvertes</h5>
                            <ul>
                                <li><b>• Répondre aux incidents et aux demandes d’assistance et d’évolution :</b>
                                    <ul>
                                        <li>Collecter, suivre et orienter des demandes</li>
                                        <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
                                        <li>Traiter des demandes concernant les applications</li>
                                    </ul>
                                </li>
                                <li><b>• Développer la présence en ligne de l’organisation :</b>
                                    <ul>
                                        <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
                                        <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation</li>
                                    </ul>
                                </li>
                                <li><b>• Mettre à disposition des utilisateurs un service informatique :</b>
                                    <ul>
                                        <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
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
                                    <li>• Gestion des tickets via GLPI, de leur ouverture à leur clôture</li>
                                    <li>• Analyse et résolution de problèmes techniques</li>
                                    <li>• Coordination avec les utilisateurs pour assurer la satisfaction des demandes</li>
                                    <li>• Anticipation des besoins pour une meilleure gestion des mises à jour</li>
                                </ul>
                        </p>
                        <p>
                            <h6>Axes d'amélioration :</h6>
                                <ul>
                                    <li>• Développer une procédure standardisée pour les demandes de modification des sites web afin d’optimiser le traitement des tickets similaires</li>
                                    <li>• Approfondir mes compétences sur WordPress et Joomla, notamment sur la gestion avancée des extensions et des permissions utilisateurs</li>
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
                    <!-- <div class="row"> -->
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/Ticket_GLPI_1424.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Ticket GLPI #1424</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/email_proposition_proactive.png" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Email de proposition proactive</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/modifications_apportees_captures.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Modifications apportées (captures)</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects//documentation_popup_redigee.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Documentation pop-up rédigée</a>
                            </span>
                        </div>
                    <!-- </div> -->
                </div>
                <!-- annexe-list-end  -->
            </div>

        </div>
    </div>
</div>
<!-- glpi-modal-end -->

<!-- mssante-modal-start -->
<div class="modal portfolio-modal-box fade" id="projet-9" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="far fa-times"></i>
                </button>
            </div>

            <div class="modal-body">

                <h6 class="blog-title">Mise en place d’une adresse MSSanté organisationnelle</h6>
                
                <!-- projet-context-start -->
                <div class="portfolio-modal-table">
                    <div class="col">
                        <div class="col-md-6">
                            <h3 class="portfolio-modal-table-text">
                                <i class="fa-light fa-calendar-days"></i>
                                Dates : <span>Mai 2024</span>
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
                        <p>Dans le cadre de mon alternance, j'ai participé à un projet de mise en conformité pour la communication des données sensibles 
                            dans le secteur de la santé.</p>
                        <p>L'objectif était de créer une adresse MSSanté organisationnelle pour sécuriser les échanges entre les professionnels de santé 
                            (médecins, laboratoires, hôpitaux, etc.) et de mettre en place une procédure d'utilisation.</p>
                        <p><ul><strong>Contrainte principale : </strong>
                                <li>• Assurer la conformité avec les exigences légales pour les échanges de données de santé</li>
                                <li>• Implémenter une messagerie sécurisée MSSanté et une double authentification pour garantir la sécurité des accès</li>
                                <li>• Former les utilisateurs à la gestion de cette nouvelle messagerie sécurisée</li>
                            </ul>
                        </p>
                    
                    <h5>Avec qui :</h5>
                        <p>
                        <ul>
                            <li><b>• Eric Comy</b> - Directeur des Systèmes d’Information (DSI)</li>
                        </ul>
                        </p>
                  
                    <h5>Environnement technologique</h5>
                        <p>
                            <h6>Outils utilisés :</h6>
                            <ul>
                                <li><b>• Messagerie MSSanté</b> : création de l'adresse organisationnelle</li>
                                <li><b>• Microsoft Exchange</b> et <b>Office 365</b> : Gestion de la double authentification</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Sources d'apprentissage :</h6>
                            <ul>
                                <li>• Documentation officielle MSSanté</li>
                            </ul>
                        </p>
                    
                    <h5>Tâches</h5>
                        <p>
                            <h6>Création de l'adresse MSSanté :</h6>
                            <ul>
                                <li>• Mise en place de l’adresse MSSanté organisationnelle</li>
                                <li>• Configuration de la messagerie</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Gestion des accès et de la double authentification :</h6>
                            <ul>
                                <li>• Création d'une boîte mail partagée interne via Microsoft Exchange, destinée à recevoir le code de double authentification</li>
                                <li>• Attribution des accès au utilisateurs concernés</li>
                                <li>• Création d'un groupe utilisateur "Gr_MSSante" dans l'Active Directory (AD) afin de cibler les utilisateurs concernés</li>
                                <li>• Création d'un objet de stratégie de groupe (GPO) pour ajouter les raccourcis bureau des boîtes mails interne et MSSanté sur les sessions des utilisateurs concernés</li>
                            </ul>
                        </p>
                        <p>
                            <h6>Formation des utilisateurs :</h6>
                            <ul>
                                <li>• Création d’une procédure détaillée expliquant les étapes nécessaires à l'utilisation de la messagerie MSSanté</li>
                                <li>• Réalisation de sessions de formation pour s’assurer que chaque utilisateur soit à l’aise avec le système</li>
                            </ul>
                        </p>
                </div>
                <!-- projet-content-pause -->

                <!-- project content continues -->
                <div>
                    <p>
                        <h5>Difficultés rencontrées</h5>
                            <ul>
                                <li>• Adoption de la messagerie : certaines utilisateurs étaient peu familiers avec les systèmes de messagerie 
                                    sécurisée, rendant la prise en main plus lente</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Solutions apportées</h5>
                            <ul>
                                <li>• Organisation de sessions de formation supplémentaires pour garantir la maîtrise de la plateforme par les utilisateurs</li>
                            </ul>
                    </p>
                    <p>
                        <h5>Compétences couvertes</h5>
                            <ul>
                                <li><b>• Gérer le patrimoine informatique :</b>
                                    <ul>
                                        <li>Exploiter des référentiels, normes et standards adoptés par le prestataire informatique</li>
                                        <li>Mettre en place et vérifier les niveaux d’habilitation associés à un service</li>
                                        <li>Vérifier le respect des règles d’utilisation des ressources numériques</li>
                                    </ul>
                                </li>
                                <li><b>• Répondre aux incidents et aux demandes d’assistance et d’évolution :</b>
                                    <ul>
                                        <li>Collecter, suivre et orienter des demandes</li>
                                        <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
                                        <li>Traiter des demandes concernant les applications</li>
                                    </ul>
                                </li>
                                <li><b>• Mettre à disposition des utilisateurs un service informatique :</b>
                                    <ul>
                                        <li>Réaliser les tests d'intégration et d'acceptation d'un service</li>
                                        <li>Déployer un service</li>
                                        <li>Accompagner les utilisateurs dans la mise en place d’un service</li>
                                    </ul>
                                </li>
                            </ul>
                    </p>
                    <p>
                        <p>
                        <h5>Bilan Personnel</h5>
                            <h6>Aptitudes renforcées :</h6>
                                <ul>
                                    <li>• Gestion de la messagerie sécurisée MSSanté et mise en place de la double authentification</li>
                                    <li>• Rédaction de procédures claires pour l’utilisation de la messagerie</li>
                                    <li>• Formation des utilisateurs à la sécurité des échanges de données</li>
                                </ul>
                        </p>
                        <p>
                            <h6>Axes d'amélioration :</h6>
                                <ul>
                                    <li>• Renforcer la communication et le support pour les utilisateurs lors de la mise en place de nouvelles solutions</li>
                                    <li>• Organiser des sessions de formation en cybersécurité pour sensibiliser les utilisateurs à l'importance de la MFA</li>
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
                    <!-- <div class="row"> -->
                        <div class="col-md-6">
                            <span class="">
                                <a href="https://esante.gouv.fr/produits-services/mssante" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Site de l'Agence du Numérique en Santé (ANS) : MSSanté</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/mssante_guide_utilisateur.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Guide de connexion à l'adresse MSSanté Organisationnelle</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/mssante_gpo.pdf" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Création d'une GPO pour afficher les raccourcis bureau</a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/mssante_exchange.png" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Console Exchange, boîte mail partagée pour réception du code de double authentification (capture) </a>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <span class="">
                                <a href="assets/docs/projects/mssante_dashboard.png" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i>   Boîte mail MSSanté (capture)</a>
                            </span>
                        </div>
                    <!-- </div> -->
                </div>
                <!-- annexe-list-start  -->
            </div>

        </div>
    </div>
</div>
<!-- mssante-modal-end -->


<?php 
include_once "projects-modals.php";
?>
