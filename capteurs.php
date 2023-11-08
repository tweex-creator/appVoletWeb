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

    <div id="video" class="text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ftD44t1jq8A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

    <div id="liste">
        <ul>
            <li>Un capteur de présence (à l'intérieur de la pièce)</li>
                <div class="image_capteur_presence">
        <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
        <img src="media/images/capteur_presence.png" alt="Description de l'image" class="img-fluid rounded">
                </div>

                <p>check1</p>
            <li>2 capteurs (côtés intérieur et extérieur) de température</li>
                <div class="image_capteur_temperature">
                    <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                    <img src="media/images/capteur_temperature.png" alt="Description de l'image" class="img-fluid rounded">
                </div>
                <p>check2</p>
            <li>1 capteur de luminosité (à l'extérieur) </li>
                <div class="image_capteur_luminosite">
                    <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                    <img src="media/images/capteur_luminosite.png" alt="Description de l'image" class="img-fluid rounded">
                </div>
                <p>check3</p>
            <li>1 capteur de mouvement (à l'intérieur de la pièce) </li>
                <div class="image_capteur_mouvement">
                    <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                    <img src="media/images/capteur_mouvement.jpg" alt="Description de l'image" class="img-fluid rounded">
                </div>
                <p>check4</p>
            <li>Un capteur de courant (relié aux moteurs) </li>
                <div class="image_capteur_courant">
                    <!-- Utilisez la classe .img-fluid pour rendre l'image responsive et .rounded pour des coins arrondis -->
                    <img src="media/images/capteur_courant.png" alt="Description de l'image" class="img-fluid rounded">
                </div>
                <p>check5</p>
        </ul>
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
