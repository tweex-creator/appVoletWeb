<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<?php include("commons/navbar.php") ?>

<div id="main" class="container">
    <div id="titre" class="text-center">
        <h1>Projet d'études: Volet battant connecté et intelligent</h1>
    </div>

    <div id="image" class="text-center">
     <img src="media/images/capteurs-topground.jpg" alt="Description de l'image" class="img-fluid">
    </div>


    <div id="soustitre1">
        <h2>Pourquoi des capteurs ?</h2>
    </div>

    <div id="intro">
        <p>Etant donné que la Raspberry Pi ne possède pas d’entrées analogique et que convertir des 
        signaux analogiques en signaux numériques aurait inutilement complexifié le projet. 
        L’ensemble des capteurs sélectionnés ont pour point commun d’être soit numérique (sortie à 
        0 ou 1), soit d’utiliser le protocole I2C.</p> 
        <p>Les capteurs sont des dispositifs qui détectent et mesurent des caractéristiques
        spécifiques de l'environnement physique ou d'autres grandeurs, puis convertissent
        ces mesures en signaux électriques ou numériques pour un traitement ultérieur. 
        Ils sont utilisés dans une variété de domaines pour collecter des données, 
        surveiller des conditions et automatiser des systèmes. </p>
    </div>

    <div id="soustitre2">
        <h2> Sur notre projet, nous retrouvons les capteurs suivants:</h2>
    </div>

    <div id="accordion">
        
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1 capteur de présence (à l'intérieur de la pièce)
                </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
            
                        <div class="image_capteur_temperature">
                            <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                            <img src="media/images/capteur_presence.png" alt="Description de l'image" class="img-fluid rounded">
                        </div>
                        <p>Ce capteur est basé sur un détecteur à infrarouges passifs qui 
                        détecte les mouvements d’une source de chaleurs humaine (+-
                        35°C). Ce module communiquera avec une carte Raspberry Pi via
                        une communication digital digitale (état haut -> mouvement, état 
                        bas -> pas de mouvement).
                        </p>
                </div>
            </div>
        </div>
        

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                2 capteurs (côtés intérieur et extérieur) de température
                </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
            
                        <div class="image_capteur_temperature">
                            <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                            <img src="media/images/capteur_temperature.png" alt="Description de l'image" class="img-fluid rounded">
                        </div>
                        <p>Le capteur de température et d'humidité DHT22 communique avec 
                        un microcontrôleur via un port série. Ayant une plage de mesure de 
                        -40°C à +80 °C avec une précision de +- 0.5°C, il propose également 
                        une mesure de l’humidité que nous ne prévoyons pas d’utiliser dans 
                        la gestion du volet mais permettra d’informer l’utilisateur. Un de ces 
                        capteurs se retrouvera à l’extérieur c’est pourquoi ils supportent 
                        des températures allant de -15°C à 40°C. Le signal fournit par ces 
                        capteurs sera numérique, les signaux numériques n’étant pas 
                        supportés par la Raspberry.
                </p>
                </div>
            </div>
        </div>
        

        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                1 capteur de luminosité (à l'extérieur)
                </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
            
                        <div class="image_capteur_temperature">
                            <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                            <img src="media/images/capteur_luminosite.png" alt="Description de l'image" class="img-fluid rounded">
                        </div>
                        <p>
                        Capteur permet une mesure de la quantité de lumière ambiante. 
                        Ce capteur est compatible via le bus I2C présent sur la Raspberry 
                        pi 3b. Supportant aussi des températures allant de -15° C à 40°C. 
                        </p>
                </div>
            </div>
        </div>

        
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                1 capteur de mouvement (à l'intérieur de la pièce)
                </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
            
                        <div class="image_capteur_temperature">
                            <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                            <img src="media/images/capteur_mouvement.jpg" alt="Description de l'image" class="img-fluid rounded">
                        </div>
                        <p>
                        Un capteur de mouvement, également appelé capteur de présence ou détecteur de mouvement, est un dispositif électronique 
                        qui est capable de détecter les mouvements dans son environnement. Lorsqu'un changement est détecté, le capteur envoie un signal 
                        électrique qui peut être utilisé pour déclencher des actions spécifiques dans un système électronique.
                        </p>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                1 capteur de courant (relié aux moteurs)
                </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
            
                        <div class="image_capteur_temperature">
                            <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                            <img src="media/images/capteur_courant.png" alt="Description de l'image" class="img-fluid rounded">
                        </div>
                        <p>
                        Dans un souci d’esthétique nous avons choisi d’utiliser 
                        capteur de courant pour détecter les fins de courses. 
                        Celui-ci va mesurer le courant et envoyé les mesures 
                        recensées à la Raspberry qui coupera ou non les 
                        moteurs. C’est ampèremètre peut mesurer des courants 
                        allant à 5A pour une tension de 65V.
                        </p>
                </div>
            </div>
        </div>


    </div>

        
    </div>



    <!--
    <embed src="../documents/presentation_S6.pdf" width="100%" height="45%" type="application/pdf"/>
    
    <div id="logo" class="text-center">
        <img src="../documents/photos/logopopo.png" width="400" class="img-fluid">
    </div>
    -->
</div>
<?php include("commons/footer.php") ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
