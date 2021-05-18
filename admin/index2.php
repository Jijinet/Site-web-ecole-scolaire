<?php  include("../controllers/connexion.php");

if(isset($_SESSION['user'])){
    header("Location:../admin/manage-post.php");
}

$conn=new mysqli($host,$user,$pass,$db_name);
$query="select login from login";
$result=mysqli_query($conn,$query);
$resultCheck=mysqli_num_rows($result);

$row=mysqli_fetch_assoc($result);


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
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">

</head>


<?php include("../includes/header3.php");   ?>

        <div class="login-container">



            <form id="login"  method="post">
                <h3>LOGIN</h3>
                <input type="text" value="<?= $login ?>"  name="user" placeholder="login" autocomplete="off">
                <?= $errorLogin ?>
               
                <input type="password" name="pass" placeholder="mot de passe" autocomplete="off" maxlength="20">
                <?= $errorPass ?>
                
                <button type="login" name="login" >Login</button><br><br>
                <a href="index2.php?ref_user=<?= $row['login']; ?>">Mot de passe oublié ?</a>
                <?= $error ?>
            </form>

            
            <form id="verifier" method="post">
                <h3>Mot de passe oublié</h3>
                <input type="email" placeholder="email" name="email">
                <?=  $errorEmail ?>
                <input type="email" placeholder="confirmation email" name="conEmail">
                <?=  $errorConEmail ?>
                <button type="submit" name="verifier" >Verifier</button>
                <?= $error ?>
            </form>

            <form id="confirmer"  method="post">
                <h3>Mot de passe oublié</h3>
                <input type="password" placeholder="nouveau mot de passe" name="password" maxlength="20">
                <?=  $errorPass ?>
                <input type="password" placeholder="confirmation mot de passe" name="conPass" maxlength="20">
                <?=  $errorConPass ?>
                <button type="submit" name="confirmer" >Confirmer</button>
             
                <?=  $error ?>
            </form>


        </div>

        <?php include("../includes/footer.php");   ?>