
<?php  include("controllers/connexion.php"); ?>


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
    <link rel="stylesheet" href="css/inscrit.css">
    <link rel="stylesheet" href="css/nav-bar.css">

</head>
<?php include("includes/header2.php");   ?>
        <!-- Form -->

       
        <div class="inscrit-container">
            <h1>PRE-INSCRIPTION</h1>
            <h2>Inscription au service d'accueil de l'école ITAG</h2>
            <div class="inscrit-content">
                <form class="inscrit-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <!-- <div class="labels">
                        <label for="nom">Nom</label>
                        <label for="email">Email</label>
                        <label for="sujet">Sujet</label>
                        <label for="ecole">Ecole</label>
                        <label for="commentaire">Commentaire</label>
                    </div> -->
                    <div class="inputs">
                        <div class="input-container">
                            <div class="input-box">
                                <input class="input" maxlength="30"  name="nomComplet" type="text" value="<?= $nomComplet; ?>" id="nom" placeholder="Nom Complet...">
                                <?= $errorNomComplet; ?>
                            </div>




                            <div class="input-box">
                                <input class="input" maxlength="31" name="email" type="email" value="<?= $email; ?>" id="email" placeholder="Email...">
                                <?= $errorEmail; ?>
                            </div>



                            <div class="input-box">
                                <input class="input" maxlength="25" name="ville" type="text" value="<?= $ville; ?>" id="ville" placeholder="Ville...">
                                <?= $errorVille; ?>
                            </div>


                            <div class="input-box">
                                <select name="niveau" id="niveau">
                                    <option value="">Niveau d'étude...</option>
                                    <?php foreach ($niveaux as $niveau ) : ?>
                                    <option value="<?=$niveau; ?>"><?=$niveau; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= $errorNiveau; ?>
                               
                            </div>
                            
                            <div class="input-box">
                                <input class="input" maxlength="20"  name="tel" type="tel" value="<?= $tel; ?>" id="numero" placeholder="Teléphone personnel...">
                                <?= $errorTel; ?>
                            </div>


                            <div class="input-box">
                                <select name="ecole" id="ecole">
                                    <option value="">Ecole...</option>
                                    <?php foreach ($ecoles as $ecole ) : ?>
                                    <option value="<?= $ecole; ?>"><?= $ecole; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= $errorEcole; ?>
                               
                            </div>

                           
                               
                                    <textarea maxlength="200" class="input" placeholder="Message..." name="message"
                                id="commentaire" cols="30" rows="4"><?= $message;?></textarea>
                                <?= $errorMessage; ?>
                                
                           


                            <input class="btn" type="submit" name="preinscription" value="PRE-INSCRIPTION">
                            <?= $error; ?>
                            <?= $success; ?>
                        </div>


                    </div>



                    <!-- <p class="success">champ obligatoire</p> -->


                </form>
            </div>


        </div>


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