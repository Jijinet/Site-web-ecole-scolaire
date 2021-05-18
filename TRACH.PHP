

<?php 

    if(isset($_POST['verifier'])){

            $login=$_GET['ref_user'];

            if(empty($_POST['email'])){
                $errorEmail="<p class='success'>champs obligatoire!</p>";
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
            
            <form id="confirmer" method="POST">
                <h3>Mot de passe oublié</h3>
                <input type="password" placeholder="nouveau mot de passe" name="password" maxlength="20">
                <?=  $errorPass ?>
                <input type="password" placeholder="confirmation mot de passe" name="conPass" maxlength="20">
                <?=  $errorConPass ?>
                <button type="submit" name="confirmer" >Confirmer</button>
                <?= $success ?>
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

?>



<?php
if(isset($_POST['confirmer'])){

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


    if(empty($errorPass) &&  empty($errorConPass) && empty($error)) {

        $conn=new mysqli($host,$user,$pass,$db_name);
        $data= array_map(array($conn,'real_escape_string'),$_POST);
        extract($data);

        $query="update login set password='$password' where login='$login'";
        $update=$conn->query($query);

        if(isset($update)){
            if($update==true){
                $success="<p class='success'><i class='fas fa-check-circle'></i>le mot de passe a été changé</p>";


?>
  <style type="text/css">
            #verifier{
            display:none;
     }
  </style>

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


    $error="<p class='error'>échec de l'opération, veuillez réessayer</p>.$conn->error";

 }

}
    }

    }


?>