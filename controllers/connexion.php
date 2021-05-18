<?php 


session_start();

$host='localhost:3306';
$user='root';
$pass='root';
$db_name='my_database';



// if($conn->connect_error){
//     die('Database connection error : '.$conn->connect_error);
// }
// else{
//     echo"db conn successful";
// }

// function pr($value){
// echo "<prev>".print_r($value,true)."</prev>";
// }
$form=$form2=$style=$fileName="";
$id=$titre=$text=$image=$db_image=$db_file=$description=$file=$nomFichier="";
$login=$password=$email=$conEmail=$conPass=$log=$loginCheck=$passVerify="";
$errorLogin=$errorPass=$errorEmail=$errorConEmail=$errorConPass="";
$error=$success=$errorTitre=$errorText=$errorImage=$errorDescription=$errorFile="";

$nomComplet=$ville=$niveau=$tel=$ecole=$message="";
$errorNomComplet=$errorVille=$errorNiveau=$errorTel=$errorEcole=$errorMessage="";

$ecoles=array("Ecole Benslimane","Ecole Temara","Ecole Salé");
$niveaux=array("1ére Bac","Bachelier","Licencier","Master","DEUG");




function tramed($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlentities($data);
    return $data;
}



//! INSERT

if(isset($_POST['publier'])){
    // print_r($_FILES);
    if(empty($_POST['titre']) ){
        
        $errorTitre="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $titre=$_POST['titre'];
    }
      

    if(empty($_POST['contenu'])){
        $errorText="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
    }

    else{
        $text=$_POST['contenu'];
    }

    if(empty($_POST['description']) ){
        
        $errorDesciption="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $desciption=$_POST['description'];
    }

    // if(empty($_POST['image'])){
    //     $errorImage="<p class=error >le champ est obligatoire</p>";
    // }

    // else{
    //     $image=$_POST['image'];
    // }
    if(isset($_FILES['file']['name'])){

        $fileName=$_FILES['file']['name'];
        $destination="../assets/files/".$fileName;
        $result=move_uploaded_file($_FILES['file']['tmp_name'],$destination);
        $path="assets/files/";
        if($result){
            
            $_POST['file']=$path.$fileName;
            $_POST['fileName']=$fileName;
            $file=$_POST['file'];
            $nomFichier=$_POST['fileName'];
            
            
        }
        

    }

    if(empty($_FILES['image']['name'])){
        
        
        $errorImage="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
    }
   
    else{

        $imageName=$_FILES['image']['name'];
        $destination="../assets/images/".$imageName;
        $result=move_uploaded_file($_FILES['image']['tmp_name'],$destination);
        $path="assets/images/";
        if($result){
           
            $_POST['image']=$path.$imageName;
           
        }
        else{
            $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>.$conn->error";
        }

    }
    
    if(empty($errorImage) && empty($errorText) && empty($errorDescription) && empty($errorImage) && empty($errorTitre) && empty($error)){
        $image=$_POST['image'];
        $id=$_POST['id'];

        $conn=new mysqli($host,$user,$pass,$db_name);
        

       
        $query="insert into post(titre,text,description,image,fichier,nomFichier) values('$titre','$text','$description','$image','$file','$nomFichier')";
        $insert=$conn->query($query);

        $data= array_map(array($conn,'real_escape_string'),$_POST);

        // ? convert to variables
        extract($data);
    

        if(isset($insert)){
            
            if($insert==true){
                $success="<p class=success><i class='fas fa-check-circle'></i>l'opération est réussie</p>";
                $_SESSION['id']=$id;
              
                $titre="";
                $text="";
                $image="";
                $description="";
                $file="";
                
            }
            else{
               
                $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>.$conn->error";
                
            }

        }
    }
  
}


//! DELETE POST


if(isset($_GET['del_id'])){

    $id=$_GET['del_id'];
    $conn=new mysqli($host,$user,$pass,$db_name);
    $query="delete from post where id =$id";
    if ($conn->query($query) == true){
        $success="<p class='success'><i class='fas fa-check-circle'></i>l'article a été supprimé</p>";
        $_SESSION['id']=$id;
        unset($_SESSION['id']);
    }
    else{
        $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>";
    }
}



//! DELETE USER


if(isset($_GET['del_id'])){

    $id=$_GET['del_id'];
    $conn=new mysqli($host,$user,$pass,$db_name);
    $query="delete from user where id =$id";
    if ($conn->query($query) == true){
        $success="<p class='success'><i class='fas fa-check-circle'></i>l'utilisateu a été supprimé</p>";
    }
    else{
        $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>";
    }
}


//! REDIRECT Article

if(isset($_GET['ref_id'])){

    $id=$_GET['ref_id'];

$conn=new mysqli($host,$user,$pass,$db_name);
$query="select id,titre,text,image from post where id=$id";
$result=mysqli_query($conn,$query);
$resultCheck=mysqli_num_rows($result);


   
    
    if($resultCheck>0){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $titre= $row['titre'];
            $text=$row['text'];
            $image=$row['image'];
            $_SESSION['id']=$id;
        }


    }
}


//! REDIRECT UPDATE

if(isset($_GET['up_id'])){

    $id=$_GET['up_id'];

$conn=new mysqli($host,$user,$pass,$db_name);
$query="select id,titre,text,description,image from post where id=$id";
$result=mysqli_query($conn,$query);
$resultCheck=mysqli_num_rows($result);


   
    
    if($resultCheck>0){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $titre= $row['titre'];
            $text=$row['text'];
            $description=$row['description'];
            $image=$row['image'];
        }


    }
}

//! REDIRECT USER

if(isset($_GET['ref_user'])){

    $login=$_GET['ref_user'];

    $conn=new mysqli($host,$user,$pass,$db_name);
    $query="select login from login";
    $result=mysqli_query($conn,$query);
    $resultCheck=mysqli_num_rows($result);
    
    $row=mysqli_fetch_assoc($result);
        while($row=mysqli_fetch_assoc($result)){
            $login=$row['login'];
            
        }


    }

//! UPDATE


if(isset($_POST['modifier'])){
    
    
    if(empty($_POST['titre']) ){
        
        $errorTitre="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $titre=$_POST['titre'];
    }
    

    if(empty($_POST['contenu'])){
        $errorText="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
    }

    else{
        $text=$_POST['contenu'];
    }

    if(empty($_POST['description']) ){
        
        $errorDescription="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $description=$_POST['description'];
    }


    if(isset($_FILES['file']['name'])){
 
        if($db_file==$_FILES['file']['name']){
           
            $fileName=$_FILES['file']['name'];
            $destination="../assets/files/".$fileName;
            $path="assets/files/";
           

                $_POST['file']=$path.$fileName;
                $_POST['fileName']=$fileName;
                $file=$_POST['file'];
                $nomFichier=$_POST['fileName'];
            
           
        }
        else{
            
            $fileName=$_FILES['file']['name'];
            $destination="../assets/files/".$fileName;
            $result=move_uploaded_file($_FILES['file']['tmp_name'],$destination);
            $path="assets/files/";
            if($result){
                
            $_POST['file']=$path.$fileName;
            $_POST['fileName']=$fileName;
            $file=$_POST['file'];
            $nomFichier=$_POST['fileName'];
                
            }
           
            
        }
        
    }
    
    if(empty($_FILES['image']['name'])){
        $errorImage="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
    }
   
    else{
        if($db_image==$_FILES['image']['name']){
           
            $imageName=$_FILES['image']['name'];
            $destination="../assets/images/".$imageName;
            $path="assets/images/";
            if($result){
                
                $_POST['image']=$path.$imageName;
                
            }
            else{
                $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>";
            }
        }
        else{
            
            $imageName=$_FILES['image']['name'];
            $destination="../assets/images/".$imageName;
            $result=move_uploaded_file($_FILES['image']['tmp_name'],$destination);
            $path="assets/images/";
            if($result){
                
                $_POST['image']=$path.$imageName;
                
            }
            else{
                $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>";
            }
            
        }
        
    }

    // else{
    //     $text=$_POST['contenu'];
    // }
    
    // if(empty($_POST['image'])){
    //     $errorImage="<p class=error >le champ est obligatoire</p>";
    // }
   
    // else{
    //     if(!in_array($db_image,$_POST['image'])){
    //         $imageName=time().'_'.$_FILES['image']['name'];
    //         $destination="../assets/images/".$imageName;
    //         $result=move_uploaded_file($_FILES['image']['tmp_name'],$destination);
    //         $path="assets/images/";
    //         if($result){
                
    //             $_POST['image']=$path.$imageName;
                
    //         }
    //         else{
    //             $error="<p class='error'>échec de l'opération, veuillez réessayer</p>";
    //         }
    //     }
    //     else{
    //         $db_image=$_POST['image'];
    //     }
        
    // }

    if(empty($errorImage) && empty($errorText) && empty($errorDescription) && empty($errorTitre) && empty($error)){
        $image=$_POST['image'];
        $conn=new mysqli($host,$user,$pass,$db_name);
        $data= array_map(array($conn,'real_escape_string'),$_POST);

        // ? convert to variables
        extract($data);
        
       
        $query="update post SET titre='$titre',text='$text',description='$description' ,image='$image' ,fichier='$file', nomFichier='$nomFichier' WHERE id=$id";
        $update=$conn->query($query);

        if(isset($update)){
            if($update==true){
                $success="<p class='success'><i class='fas fa-check-circle'></i>le post a été modifié</p>";
                $titre="";
                $text="";
                $description="";
                $image="";
               
            }
            else{
               
                $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>";
               
            }
            
        }
      
    }


}




//! LOGIN

if(isset($_POST['login'])){

    if(empty($_POST['user']) ){
        
        $errorLogin="<p class='error'><i class='fas fa-exclamation-circle'></i>champs obligatoire!</p>";

    }
    else{
        $login=tramed($_POST['user']);
    }

    

    if(empty($_POST['pass'])){
        $errorPass="<p class='error'><i class='fas fa-exclamation-circle'></i>champs obligatoire!</p>";
    }

    else{
        $password=tramed($_POST['pass']);
    }

    if(empty($errorLogin) && empty($errorPass) && empty($error)){
        
        $conn=new mysqli($host,$user,$pass,$db_name);
        
       
        $query="select login, password from login where login='$login'";
        $result=mysqli_query($conn,$query);
        $resultCheck=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        $passVerify=$row['password'];
        if($resultCheck>0){
            if($passVerify==$password){
                $_SESSION['user']=$login;
                if(isset($_SESSION['user'])){

                    header("Location:../admin/manage-inscription.php", true, 301);
                    exit;

                }
               
            }
            else{
               
                $error="<p class='error'><i class='fas fa-exclamation-circle'></i>utilisateur ou mot de passe est incorrect!</p>";
                $password="";
                }
           
           
            
        }
        else{
               
            $error="<p class='error'><i class='fas fa-exclamation-circle'></i>utilisateur ou mot de passe est incorrect!</p>";
            $login="";
            $password="";
            }

    }



}

//! INSCRIPTION

if(isset($_POST['preinscription'])){
    // print_r($_FILES);
    if(empty($_POST['nomComplet']) ){
        
        $errorNomComplet="<p class='error'><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $nomComplet=$_POST['nomComplet'];
    }
      

    if(empty($_POST['email'])){
        $errorEmail="<p class='error'><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
    }

    else{
        $email=$_POST['email'];
    }

    if(empty($_POST['ville']) ){
        
        $errorVille="<p class='error'><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $ville=$_POST['ville'];
    }

    if(empty($_POST['niveau']) ){
        
        $errorNiveau="<p class='error'><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $niveau=$_POST['niveau'];
    }

    if(empty($_POST['tel']) ){
        
        $errorTel="<p class='error'><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $tel=$_POST['tel'];
    }


    if(empty($_POST['ecole']) ){
        
        $errorEcole="<p class='error'><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $ecole=$_POST['ecole'];
    }

    if(empty($_POST['message']) ){
        
        $errorMessage="<p class='error textarea'><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";

    }
    else{
        $message=$_POST['message'];
    }

    
    if(empty($errorNomComplet) && empty($errorEmail) && empty($errorNiveau) && empty($errorVille) && empty($errorEcole) && empty($errorTel) && empty($error)){
        

        
        $conn=new mysqli($host,$user,$pass,$db_name);
        $data= array_map(array($conn,'real_escape_string'),$_POST);

        // ? convert to variables
        extract($data);

       
        $query="insert into user(nomComplet,email,ville,niveau,tel) values('$nomComplet','$email','$ville','$niveau','$tel')";
        $insert=$conn->query($query);


    

        if(isset($insert)){
            
            if($insert==true){
                $success="<p class='success'><i class='fas fa-check-circle'></i>la preinscription a éte envoyé</p>";
                $nomComplet="";
                $email="";
                $ville="";
                $niveau="";
                $tel="";
                $message="";
            }
            else{
               
                $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>";
                
            }

        }
    }
  
}
       
   
       




//! UPDATE PROFIL

if(isset($_POST['update'])){

    if(empty($_POST['username'])){
        $errorLogin="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
    }
    else{
        
        $login=tramed($_POST['username']);
    }
    if(empty($_POST['email'])){
        $errorEmail="<p class=error ><i class='fas fa-exclamation-circle'></i>le champ est obligatoire</p>";
    }
    else{
        $email=tramed($_POST['email']);
        
    }

    if(empty($errorEmail) && empty($errorLogin) && empty($error)){

        $conn=new mysqli($host,$user,$pass,$db_name);
        $data= array_map(array($conn,'real_escape_string'),$_POST);

        // ? convert to variables
        extract($data);
        
       
        $query="update login SET login='$login', email='$email'";
        $update=$conn->query($query);

        if(isset($update)){
            if($update==true){
                $_SESSION['user']=$_POST['user'];
                $success="<p class='success'><i class='fas fa-check-circle'></i>l'opération est réussie</p>";
            
        }
        else{
            $error="<p class='error'><i class='fas fa-exclamation-circle'></i>échec de l'opération, veuillez réessayer</p>.$conn->error";
        }
            

    }
}

}



?>