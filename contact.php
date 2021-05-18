
<?php include("controllers/contactForm.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1990 12:00:00 GMT" />


    <link rel="shortcut icon" type="image/png" href="assets/logo blan.png">
    <title>Groupe ITAG</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Roboto:700&display=swap" rel="stylesheet">

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/eeae5646a1.js" crossorigin="anonymous"></script>

    <!-- SLICK SLIDER CND -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Costume css -->
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet"  type="text/css" href="css/contact.css?v=<?=time();?>">
    <link rel="stylesheet" href="css/nav-bar.css">
  <style>

  </style>

</head>

<?php include("includes/header2.php"); ?>

        <div class="contact-container">
            <h1>CONTACTER-NOUS</h1>
            <div class="contact">
           
            <form class="contact-form" action="<?php $_SERVER['PHP_SELF']; ?>"  method="post">
                <!-- <div class="labels">
                    <label for="nom">Nom</label>
                    <label for="email">Email</label>
                    <label for="sujet">Sujet</label>
                    <label for="ecole">Ecole</label>
                    <label for="commentaire">Commentaire</label>
                </div> -->
                <div class="inputs">
                    <input class="input" maxlength="40" name="nom" type="text" id="nom" value="<?= $nom;?>" placeholder="Nom...">
                    <?= $name_error;?>
                    <input class="input" maxlength="45" name="email" type="text" id="email" value="<?= $email;?>" placeholder="Email...">
                   
                    <?= $email_error;?>
                    <input class="input" maxlength="48" name="sujet" type="text" id="sujet" value="<?= $sujet;?>" placeholder="Sujet...">
                    <?= $sujet_error;?>
                    <select name="ecole">
                    <option value="">Ecole...</option>
                     <?php foreach ($ecoles as $ecole ) : ?>
                    <option value="<?= $ecole; ?>"><?= $ecole; ?></option>
                     <?php endforeach; ?>
                    </select><?= $ecole_error;?><br><br>
                    

                    <textarea class="input" maxlength="200" placeholder="Message..." name="message" id="commentaire" cols="30"
                        rows="4"><?= $message;?></textarea>
                        <?= $message_error;?>
                    <input class="btn" type="submit" value="ENVOYER">
                    <?= $success;?>
                </div>

            </form>
            </div>
        </div>

        <?php include("includes/footer.php");   ?>
        
          <!-- JQUERY -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Slick Slider -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>

