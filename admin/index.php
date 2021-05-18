
<?php  include("../controllers/connexion.php");
if(isset($_SESSION['user'])){
    header("Location:../admin/manage-inscription.php");
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
    <link rel="stylesheet" href="../css/nav-bar.css">


</head>

<?php include("../includes/header3.php");   ?>

        <div class="login-container">
            

<?php

        if(!isset($_GET['ref_user'])){

           

?>

            <form  method="post">
                <h3>LOGIN</h3>
                <input type="text" value="<?= $login ?>"  name="user" placeholder="login" autocomplete="off">
                <?= $errorLogin ?>
               
                <input type="password" name="pass" placeholder="mot de passe" autocomplete="off" maxlength="20">
                <?= $errorPass ?>
                
                <button type="login" name="login" >Login</button><br><br>
                <a href="index.php?ref_user=<?= $row['login'];?>">Mot de passe oublié ?</a>
                <?= $error ?>
                
            </form>
            

<?php  

        }

        else{

        if(isset($_POST['verifier'])){
    
                $login=$_GET['ref_user'];
    
                if(empty($_POST['email'])){
                    $errorEmail="<p class='error'><i class='fas fa-exclamation-circle'></i>champs obligatoire!</p>";
                }
                else{
                    $email=tramed($_POST['email']);
                    
                }
                if(empty($_POST['conEmail'])){
                    $errorConEmail="<p class='error'><i class='fas fa-exclamation-circle'></i>champs obligatoire!</p>";
                }
                else{
                    $conEmail=tramed($_POST['conEmail']);
                }
                
                if($email!=$conEmail){
                    $error="<p class='error'><i class='fas fa-exclamation-circle'></i>email est incorrect</p>";
                }
    
    
        if(empty($errorEmail) &&  empty($errorConEmail) && empty($error)) {
    
                    $conn=new mysqli($host,$user,$pass,$db_name);
                    $query="select email from login where login='$login'";
                    $select=$conn->query($query);
            
            
                    if($select->num_rows>0){
                        $data=$select->fetch_array();
                        if($email==$data['email']){

?>

    <style type="text/css">
            #verifier{
            display:none;
     }
     </style>
            
            <form method="post">
                <h3>Mot de passe oublié</h3>
                <input type="password" placeholder="nouveau mot de passe" name="password" maxlength="20">
                <?=  $errorPass ?>
                <input type="password" placeholder="confirmation mot de passe" name="conPass" maxlength="20">
                <?=  $errorConPass ?>
                <button type="submit" name="confirmer" >Confirmer</button>
             
                <?=  $error ?>
            </form>

  
  <?php
            }
             else{
    
                $error="<p class='error'><i class='fas fa-exclamation-circle'></i>email est incorrect</p>";
            }
            }
             }
             

             
         }
    

     if(!isset($_POST['confirmer'])){

?>
          <form id="verifier" method="post">
                <h3>Mot de passe oublié</h3>
                <input type="email" placeholder="email" name="email">
                <?=  $errorEmail ?>
                <input type="email" placeholder="confirmation email" name="conEmail">
                <?=  $errorConEmail ?>
                <button type="submit" name="verifier" >Verifier</button>
                <?= $error ?>
            </form>

<?php

    
    } 


    else{

        $login=$_GET['ref_user'];
        
        if(empty($_POST['password'])){
            $errorPass="<p class='error' ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
            
        }
        else{
            $password=$_POST['password'];
        }
        if(empty($_POST['conPass'])){
            $errorConPass="<p class='error' ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
           
           
        }
        else{
            $conPass=$_POST['conPass'];
        }

        if($password!=$conPass){
            $error="<p class='error'><i class='fas fa-exclamation-circle'></i>le mot de passe est incorrect</p>";
    
        }
    
        if(empty($errorPass) &&  empty($errorConPass) && empty($error)) {
    
            $conn=new mysqli($host,$user,$pass,$db_name);
            $data= array_map(array($conn,'real_escape_string'),$_POST);
            extract($data);
    
            $query="update login set password='$password' where login='$login'";
            $update=$conn->query($query);
    
            if(isset($update)){
                
                if($update==true){
            $success="<p class='success' ><i class='fas fa-check-circle'></i>le mot de passe a été changé</p>";
                   
    ?>
    
                <form  method="post">
                    <h3>LOGIN</h3>
                    <input type="text" value="<?= $login ?>"  name="user" placeholder="login" autocomplete="off">
                    <?= $errorLogin ?>
                   
                    <input type="password" name="pass" placeholder="mot de passe" autocomplete="off" maxlength="20">
                    <?= $errorPass ?>
                    
                    <button type="login" name="login" >Login</button><br><br>
                    <a href="index.php?ref_user=<?= $row['login'];?>">Mot de passe oublié ?</a>
                    <?= $error ?>
                    <?= $success ?>
                </form>
    
    <?php
                }
                  
     
     else{
    
    
        $error="<p class='error'>échec de l'opération, veuillez réessayer</p>.$conn->error";
    
      }
     }
    
     }
     else{
        ?>

        <form method="post">
            <h3>Mot de passe oublié</h3>
            <input type="password" placeholder="nouveau mot de passe" name="password" maxlength="20">
            <?=  $errorPass ?>
            <input type="password" placeholder="confirmation mot de passe" name="conPass" maxlength="20">
            <?=  $errorConPass ?>
            <button type="submit" name="confirmer" >Confirmer</button>
         
            <?=  $error ?>
        </form>

<?php
     }
    }
    }
        
        ?>
      

        
        </div>



        <!-- FOOTER -->

        <?php include("../includes/footer.php");   ?>

       


      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Slick Slider -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="../js/les-ecoles.js"></script>
</body>

</html>