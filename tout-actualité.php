<?php

include('controllers/connexion.php');

$results_per_page = 3;

$conn=new mysqli($host,$user,$pass,$db_name);
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$query = "select * from post order by id desc limit $start_from, ".$results_per_page;
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
    <link rel="stylesheet" type="text/css" href="/cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Costume css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav-bar.css">
    <link rel="stylesheet" href="css/tout-actualité.css">
    <style>

    
        .backward{
            display:"block";
        }

        .post-content .post .img img{
      width: 300px;
   
  }


       

    </style>

</head>

<?php include("includes/header2.php");   ?>

        <div class="post-container">
            <div class="post-content">
                <h3>Actualités groupe ITAG</h3>
                <?php
                if($resultCheck>0){
                while($row=mysqli_fetch_assoc($result)){

                ?>
                <div class="post">
                    <div class="img">
                        <a href="article-contenu.php?ref_id=<?php echo $row['id'] ?>"><img src="<?=$image=$row['image'];?>" alt=""></a>
                    </div>
                    <div class="content">
                        <a href="article-contenu.php?ref_id=<?php echo $row['id'] ?>"><h4><?= $titre=$row['titre'];?></h4></a>
                        <p><?= $description=$row['description'];?>...</p>
                        <a href="article-contenu.php?ref_id=<?php echo $row['id'] ?>" class="link">En savoir plus</a>

                    </div>
                </div>

                <?php }}?>

<!-- 
                <div class="post">
                    <div class="img">
                        <a href="#"><img src="assets/technicien-specialisé.jpg" alt=""></a>
                    </div>
                    <div class="content">
                        <a href="#"><h4>Lorem ipsum dolor sit.</h4></a>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam dolor ratione incidunt quod
                            eligendi quaerat illo, in consequuntur voluptatem suscipit, error harum ab quas officiis
                            voluptatibus ex sit impedit nihil.</p>
                        <a href="" class="link">En savoir plus</a>

                    </div>
                </div> -->

                <?php 
$query = "select count(id) as total from post";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$total_pages = ceil($row["total"] / $results_per_page);
 
?>
            

                <div class="grp-link">
                   
                    <?php 

                   
                    echo" <a href='tout-actualité.php?page=1"."' class='page-link'><i class='fas fa-angle-double-left'></i></a> ";
                                    
                      
                    for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                
                        echo "<a class='page-link page' href='tout-actualité.php?page=".$i."'";
                        echo  ">".$i."</a> "; 

                      
                        
                    };
                    $total_pages;
                    echo" <a href='tout-actualité.php?page=".$total_pages."' class='page-link forward'><i class='fas fa-angle-double-right'></i></a> ";
                                        
                     ?> 
                    
                    <!-- <a href="#" class="page-link page">2</a>
                    <a href="#" class="page-link page">3</a> -->
                 
                </div>

            </div>
        </div>

        
        <!-- FOOTER -->
        <?php include("includes/footer.php"); ?>
                
          <!-- JQUERY -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Slick Slider -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="js/script.js"></script>
    <script src="js/actualité.js"></script>
</body>

</html>