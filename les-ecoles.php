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

    <!-- lighbox cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/images/close.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/images/loading.gif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/images/next.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/images/prev.png">

    <!-- Costume css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/les-ecoles.css">
    <link rel="stylesheet" href="css/nav-bar.css">

</head>

<?php include("includes/header2.php"); ?>
        <!-- Ecoles -->

      <!-- Ecoles -->

      <div class="ecole-container">
            <h1 class="title">ÉCOLES</h1>
            <div class="cardes">
               
                    <div onclick="handle = window.open('ecole-salé.php', '_blank');" class="card E-salé">
                        <h3>ITAG SALÉ</h3>
                        <img src="assets/ecoleSale.jpg" alt="">
                        <button><a>ACCÉDEZ<i class="fas fa-external-link-alt"></i></a></button>
                  
                    </div>
                     
                    <div onclick="handle = window.open('ecole-temara.php', '_blank');" class="card E-tmr">
                        <h3>ITAG TEAMARA</h3>
                        <img src="assets/ecoleTemara.JPG" alt="">
                        <button><a>ACCÉDEZ<i class="fas fa-external-link-alt"></i></a></button>
                    </div>
                
                    <div onclick="handle = window.open('ecole-bns.php', '_blank');" class="card E-bns">
                        <h3>ITAG BENSLIMANE</h3>
                        <img src="assets/ecoleBns.jpg" alt="">
                        <button><a>ACCÉDEZ<i class="fas fa-external-link-alt"></i></button>
                    </div>
                
            </div>

        </div>
        
    
        <?php include("includes/footer.php"); ?>

          <!-- JQUERY -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Slick Slider -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="js/script.js">
    document.querySelector(".E-bns").addEventListener('click', function() {
  handle = window.open('ecole-bns.php', '_blank');
});
document.querySelector(".E-tmr").addEventListener('click', function() {
    handle = window.open('ecole-temara.php', '_blank');
});
document.querySelector(".E-salé").addEventListener('click', function() {
    handle = window.open('ecole-salé.php', '_blank');
});
    
    
    </script>
    
</body>

</html>
        