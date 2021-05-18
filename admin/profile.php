
<?php  include("../controllers/connexion.php");


if(!isset($_SESSION['user'])){
    header('location: ../admin/index.php');
}

$conn=new mysqli($host,$user,$pass,$db_name);
$query="select login,email from login";
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
        <div class="admin-content profile">
           <div class="content profile">
               <h3>Profile</h3>
               <?php
               
               if($resultCheck>0){

                while($row=mysqli_fetch_assoc($result)){

               ?>
               <form method="post">
                <label for="titre">Nom d'utilisateur</label><br><br>
                <input type="text" name="username" value="<?php echo $row['login']; $log=$row['login'];?>" id="titre" autocomplete="off"><br><br><br>
                <?= $errorLogin ?>
                <label for="titre">Email</label><br><br>
                <input type="email" name="email" value="<?= $row['email']; ?>" id="titre" autocomplete="off"><br><br>
                <?= $errorEmail ?>
                <button type="submit" name="update">Modifier</button>

                <?= $error?>
                
            </form>

            <?php 
                }
            }
            ?>
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


    <script src="../js/admin-panel.js"></script>


</body>
</html>