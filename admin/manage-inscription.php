<?php  include("../controllers/connexion.php");



if(!isset($_SESSION['user'])){
    header('location:../admin/index.php');
}

//! SELECT

$conn=new mysqli($host,$user,$pass,$db_name);
$query="select id,nomComplet,email,ville,niveau,tel from user";
$result=mysqli_query($conn,$query);
$resultCheck=mysqli_num_rows($result);




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
       <!-- Google Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Roboto:700&display=swap" rel="stylesheet">

<!-- Font Awsome -->
<script src="https://kit.fontawesome.com/eeae5646a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/admin-panel.css">
    <link rel="stylesheet" href="../css/inscrit.css">
   
</head>

<body>
    <div class="admin-container">
        <header>
            <ul>
                <li class="title">
                    <a class="title" href="manage-inscription.php">Admin Panel</a>
                </li>
                <li class="admin">
                    <a href="profile.php"><?= $_SESSION['user']; ?></a>
                    <ul class="admin-menu">
                        <!-- <li><a href="">profile</a></li> -->
                        <li><a href="../controllers/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </header>
        <div class="admin-content">

            <div class="content manage-post manage-inscription">
                <h3>Gerer inscription</h3>

                <div class="manage">
                    <?= $error ?>
                    <?= $success ?>
                   
                    <div class="grid">

                        <span><strong>Nom complet</strong></span>
                        <span><strong>Email</strong></span>
                        <span><strong>Ville</strong></span>
                        <span><strong>Niveau d'étude</strong></span>
                        <span><strong>Tel</strong></span>
                        <span><strong>Supprimer</strong></span>
                        <?php
                            
                            if($resultCheck>0){
                            while($row=mysqli_fetch_assoc($result)){
                                    
                                 ?>
                        <span><?= $nomComplet=$row['nomComplet']; ?></span>
                        <span><?= $email=$row['email']; ?></span>
                        <span><?= $ville=$row['ville']; ?></span>
                        <span><?= $niveau=$row['niveau']; ?></span>
                        <span><?= $tel=$row['tel']; ?></span>
                        <span><a href="manage-inscription.php?del_id=<?php echo $row['id'];?>" class="delete">supprimer</a></span>
                        
                        <?php     
                                 }
                             
                             }?>


                    </div>
                </div>
            </div>

        </div>
        <div class="sidebar">
            <ul>
                <li><a href="manage-inscription.php">Gerer Titulaires</a></li>
                <li><a href="manage-post.php">Gerer Articles</a></li>
                <li><a href="create-post.php">Créer Articles</a></li>
                <li class="li"><a href="profile.php">Profile</a></li>
            </ul>
        </div>


    </div>

    <!-- CHK 5 EDITOR  -->

    <!-- <script src="/ckeditor5-build-classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.getElementById('body'));
    </script> -->

    <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>

    <script src="../js/admin-panel.js"></script>


</body>

</html>