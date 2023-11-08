<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volet battant connecté et intelligent - Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <!-- Assurez-vous de créer un fichier styles.css pour vos styles personnalisés -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-image {
            background-image: url("media/images/backGround.jpg");
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: relative;
            height: 100%;
        }

        .bg-overlay {
            background: rgba(255, 255, 255, 100%);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .team-member-photo {
            width: 150px; /* Largeur fixe */
            height: 150px; /* Hauteur fixe */
            object-fit: cover; /* Assure que l'image couvre toute la zone sans déformer */
            border-radius: 50%; /* Rend l'image circulaire si vous le souhaitez */
            margin-bottom: 10px; /* Espace en dessous de l'image */
        }
    </style>
</head>
<body>
<div class="bg-image">
    <div class="bg-overlay">

        <?php include("commons/navbar.php") ?>

        <header class="bg-primary text-white text-center py-5 mb-4">
            <div class="container">
                <h1 class="font-weight-light text-white">Volet battant connecté et intelligent</h1>
            </div>
        </header>

        <section class="container mb-4">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="ratio ratio-16x9 mb-4">
                        <video class="embed-responsive-item" autoplay muted controls>
                            <source src="media/videos/APP-Volet_demo.mp4" type="video/mp4">
                            Votre navigateur ne prend pas en charge la balise vidéo.
                        </video>
                    </div>
                    <h2 class="mb-3">Les avantages des volets battants connectés</h2>
                    <p>Les volets battants motorisés sont la première étape pour rendre la vie à la maison plus
                        confortable et pratique. Découvrez comment la connectivité peut transformer votre expérience
                        domestique toute en augmentant la sécurité et l'efficacité énergétique de votre foyer.</p>

                    <hr class="my-4">

                    <h3 class="mb-3">Pourquoi choisir notre solution?</h3>
                    <p>Avec notre système de volets battants automatisés, profitez de:</p>
                    <div class="row gx-5">
                        <div class="col-md-4 mb-3">
                            <div class="card text-center h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Confort</h4>
                                    <p class="card-text">Commande à distance, programmation facile et intégration avec
                                        des assistants vocaux.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Économies d'énergie</h4>
                                    <p class="card-text">Réduisez vos coûts de chauffage et de climatisation grâce à une
                                        gestion intelligente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center h-100">
                                <div class="card-body">
                                    <h4 class="card-title">Sécurité</h4>
                                    <p class="card-text">Protégez votre maison avec des volets qui peuvent être fermés à
                                        distance.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h3 class="mb-3">Documentation Technique</h3>
                    <object data="../documents/presentation_S6.pdf" type="application/pdf" width="100%" height="500px">
                        <p>Consulter : <a href="media/CR_semestre/CR_S8.pdf">Télécharger PDF</a>.</p>
                    </object>
                </div>
            </div>
        </section>


    </div>
</div>
<?php include("commons/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>
</html>