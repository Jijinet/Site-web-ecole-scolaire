<?php

include("controllers/connexion.php");

$conn=new mysqli($host,$user,$pass,$db_name);
$query="select id,titre,image from post limit 3";
$result=mysqli_query($conn,$query);
$resultCheck=mysqli_num_rows($result);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/logo blan.png">
    <title>Groupe ITAG</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Roboto:700&display=swap" rel="stylesheet">

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/eeae5646a1.js" crossorigin="anonymous"></script>

    <!-- SLICK SLIDER CND -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Costume css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav-bar.css">

</head>


<?php include("includes/header2.php");   ?>


        <!-- Actualités -->

        <div class="act-container">
            
            <h3>Dernières actualités</h3>

            <div class="act-content">
            <?php
                            
                            if($resultCheck>0){
                            while($row=mysqli_fetch_assoc($result)){
                                    
                                 ?>
                <a href="article-contenu.php?ref_id=<?php echo $row['id'] ?>">
                    <div class="post">
                        <img src="<?= $image= $row['image']; ?>" alt="">
                        <h4><?= $titre= $row['titre']; ?></h4>
                    </div>
                </a>
                <?php     
                   }
                             
                 }?>

            </div>

            <button><a href="tout-actualité.php">Actualités</a></button>

        </div>




        <!-- FORMATIONS -->


        <div class="formation-container">

            <h1>NOS FORMATIONS</h1>
            <img src="assets/Formations.jpg" alt="">
            <div class="formation">
                <a class="card1" href="formation.php">
                    <div>
                        <h3>Technicien</h3>
                    </div>
                </a>
                <a class="card2" href="formation.php">
                    <div>
                        <h3>Licence Pro et Master</h3>
                    </div>
                </a>
                <a class="card3" href="formation.php">
                    <div>
                        <h3>Technicien Spécialisé</h3>
                    </div>
                </a>
            </div>
            <button><a href="formation.php">+ D'informations</a></button>

        </div>


        <!-- FILIERE -->

        <div class="filiere-container">

            <h1>FILIERES DE FORMATION</h1>

            <i class="fas fa-chevron-left priv"></i>
            <i class="fas fa-chevron-right nixt"></i>

            <div class="cards">
                <a href="filiere.php">
                    <div class="card">
                        <img src="assets/gestionEProfile4.jpg" alt="">
                        <h4>Gestion des Entreprises</h4>
                    </div>
                </a>
                <a href="filiere.php">
                    <div class="card">
                        <img src="assets/developement.jpg" alt="">
                        <h4>Developpment Informatique</h4>
                    </div>
                </a>
                <a href="filiere.php">
                    <div class="card">
                        <img src="assets/reseauProfile.jpg" alt="">
                        <h4>Réseaux Informatique</h4>
                    </div>
                </a>
                <a href="filiere.php">
                    <div class="card">
                        <img src="assets/infographie.jpg" alt="">
                        <h4>Infographie</h4>
                    </div>
                </a>
                <a href="filiere.php">
                    <div class="card">
                        <img src="assets/gestion-informatisé.jpg" alt="">
                        <h4>Gestion Informatisée</h4>
                    </div>
                </a>
                <a href="filiere.php">
                    <div class="card">
                        <img src="assets/maintenaceProfile.jpg" alt="">
                        <h4>Maintenance Informatique</h4>
                    </div>
                </a>
                <a href="filiere.php">
                    <div class="card">
                        <img src="assets/operateur-saisie.jpg" alt="">
                        <h4>Opérateur de saisie</h4>
                    </div>
                </a>

            </div>
            <button><a href="filiere.php">+ D'informations</a></button>

        </div>


        <!-- PARTENAIRES -->

        <div class="partenaire-container">
            <div class="partenaire-content">
                <a href="partenaire.php">
                    <div class="title">
                        <h1><a href="partenaire.php">NOS PARTENAIRES</a></h1>
                    </div>
                </a>
                <a href="partenaire.php">
                    <div class="img">
                        <img src="assets/Fede.png" alt="">
                        <img src="assets/Versaille.png" alt="">
                    </div>
                </a>
            </div>
        </div>

        <!-- VIDEO -->

        <div class="video-container">
            <video class="video" poster="assets/logo-yellow.jpg" controls>
                <source src="assets/video ITAG.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
            </video>
        </div>
        <!-- <script async src="https://cse.google.com/cse.js?cx=005927569488028852491:govsoywqihw"></script>
        <div class="gcse-search"></div> -->

        <!-- FOOTER -->


        <?php include("includes/footer.php");   ?>
      

    <!-- JQUERY -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Slick Slider -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Javascript -->

    <script type="text/javascript" src="js/script.js"></script>





</body>

</html>