

<?php


include("controllers/connexion.php");




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
   <link rel="stylesheet" type="text/css" href="/cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

   <!-- Costume css -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/nav-bar.css">
   <link rel="stylesheet" href="css/article-contenu.css">



</head>

<?php include("includes/header2.php");   ?>

       <div class="article-container">
           <div class="article-content">
               <div class="article-section">
               
                   <div class="content">
                       <h2>l'article n'existe plus</h2>
                      
                   </div>
                   
               </div>

               <div class="sidebar">

                   <div class="post-container">

                       <h3>Articles Recents</h3>

<?php


                       //! SELECT TOP

                       $conn=new mysqli($host,$user,$pass,$db_name);
                       $query="select * from post limit 3";
                       $result=mysqli_query($conn,$query);
                       $resultCheck=mysqli_num_rows($result);

                       if($resultCheck>0){
 
                       while($row=mysqli_fetch_assoc($result)){  

?>
           
                       <a href="article-contenu.php?ref_id=<?php echo $row['id']?>">
                           <div class="post">
                               <img src="<?= $image= $row['image']; ?>" alt="">
                               <h4><?= $titre= $row['titre']; ?></h4>
                           </div>
                       </a>
 <?php     
                                }
                            
                            }?>
                       <!-- <a href="#">
                           <div class="post">
                               <img src="assets/first-slider.jpg" alt="">
                               <h4>Lorem ipsum dolor sit amet.</h4>

                           </div>
                       </a>
                       <a href="#">
                           <div class="post">
                               <img src="assets/first-slider.jpg" alt="">
                               <h4>Lorem ipsum dolor sit amet.</h4>

                           </div>
                       </a> -->



                   </div>


               </div>
           </div>
       </div>

       <?php  include("includes/footer.php"); ?>
               
         <!-- JQUERY -->

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
       integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

   <!-- Slick Slider -->

   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   <script src="js/script.js"></script>
</body>

</html>