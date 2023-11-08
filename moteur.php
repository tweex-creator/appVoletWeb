<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moteur de Volet Intelligent - Projet École d'Ingénieurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .equal-height {
            display: flex;
            flex-wrap: wrap;
        }

        .equal-height > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }

        .equal-height .img-fluid {
            margin-top: auto;
            margin-bottom: auto; /* Centre verticalement l'image dans son conteneur */
        }

        /* Ajustements pour le responsive design - mode mobile */
        @media (max-width: 767px) {
            .equal-height {
                display: block;
            }

            .equal-height > [class*='col-'] {
                height: auto;
            }
        }
    </style>
</head>
<body>

<?php include("commons/navbar.php") ?>

<header class="bg-primary text-white text-center py-4">
    <h1>Le Moteur du Volet Battant Connecté</h1>
    <p>Découvrez les dessous techniques de notre projet.</p>
</header>

<section class="pt-5 pb-4">
    <div class="container">
        <h2 class="mb-4">Le Moteur à Vis Sans Fin</h2>
        <div class="row equal-height">
            <div class="col-md-6">
                <p>Le moteur à vis sans fin choisi pour notre volet battant connecté est un moteur 24V DC. Ce type de moteur se distingue par sa capacité à convertir une rotation rapide avec peu de force, en un mouvement lent avec une force élevée. C’est un atout majeur dans le cadre de l’automatisation des volets battants qui requiert précision et puissance de maintien.</p>
                <h4>Avantages :</h4>
                <ul>
                    <li>Rapport élevé entre couple et vitesse</li>
                    <li>Mouvement fluide et précis</li>
                    <li>Auto-bloquant, ce qui confère une sécurité en cas de coupure de courant</li>
                </ul>
                <h4>Inconvénients :</h4>
                <ul>
                    <li>Rendement limité dû aux frottements importants</li>
                    <li>Usure plus rapide des composants</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="media/images/moteur.jpg" alt="Moteur à Vis Sans Fin" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-4">
    <div class="container">
        <h2 class="mb-4">Le Contrôle par Pont en H - L298N</h2>
        <div class="row equal-height">
            <div class="col-md-6">
                <img src="media/images/L298N.jpg" alt="Pont en H L298N" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>Le pont en H L298N est un dispositif de commande de moteurs qui permet de contrôler la direction et la vitesse d'un moteur à courant continu tel que notre moteur à vis sans fin. Dans notre projet, nous utilisons l'ESP32 pour diriger ce pont en H, mais nous nous concentrerons ici sur les avantages et inconvénients du L298N lui-même.</p>
                <h4>Avantages :</h4>
                <ul>
                    <li>Permet la commande en marche avant et en marche arrière du moteur</li>
                    <li>Fournit une protection contre les surtensions</li>
                    <li>Mise en place rapide lors du prototypage</li>
                    <li>Pilote les deux moteurs simultanément</li>
                </ul>
                <h4>Inconvénients :</h4>
                <ul>
                    <li>Chauffe rapidement sans radiateur adéquat</li>
                    <li>Consommation en veille (quand le moteur ne tourne pas)</li>
                </ul>

                <!-- Nouvelle catégorie Fonctionnement pour le Pont en H -->
                <h4>Fonctionnement :</h4>
                <p>Le Pont en H L298N permet de contrôler le sens de rotation d'un moteur à courant continu en inversant la polarité de l'alimentation aux bornes du moteur. Grâce à ses quatre interrupteurs (généralement sous forme de transistors), il peut non seulement inverser la polarité mais aussi implémenter un contrôle PWM (modulation de largeur d'impulsion) pour réguler la vitesse du moteur.</p>
                <p>Lorsque les interrupteurs situés en diagonale sont activés en même temps (haut droit et bas gauche ou haut gauche et bas droit), le moteur se met en rotation dans un sens ou dans l'autre. L'activation simultanée des interrupteurs du même côté (haut droit et haut gauche ou bas droit et bas gauche) provoque l'arrêt du moteur, souvent réalisé par un freinage dynamique où les deux bornes du moteur se court-circuitent.</p>

                <h4>Interfaçage avec l'ESP32 :</h4>
                <p>Pour contrôler le Pont en H L298N avec l'ESP32, il faut connecter les broches de commande du L298N aux GPIO de l'ESP32. Les signaux PWM envoyés par l'ESP32 permettent de réguler la vitesse du moteur, tandis que les broches digitales permettent de changer le sens de rotation en activant les transistors appropriés dans la configuration du Pont en H.</p>
                <p>L'ESP32 est programmé pour interpréter les commandes des utilisateurs (par exemple, via une application ou une interface web) et ajuster les sorties en conséquence pour commander le moteur. Grâce à sa capacité de communication sans fil, l'ESP32 peut également recevoir des commandes à distance, ce qui est idéal pour un volet battant connecté.</p>
            </div>
        </div>
    </div>
</section>


<?php include("commons/footer.php") ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>