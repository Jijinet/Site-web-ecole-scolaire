<?php

$ecoles=array("Ecole Benslimane","Ecole Temara","Ecole Salé");
$nom=$email=$sujet=$message=$ecole="";
$name_error=$email_error=$sujet_error=$message_error=$ecole_error="";
$success="";


if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST["nom"])){
        $name_error="<p class='error'><i class='fas fa-exclamation-circle'></i>champ obligatoire!</p>";
    }
    else{
        $nom=tramed($_POST["nom"]);
    }
    if(empty($_POST["email"])){
        $email_error="<p class='error'><i class='fas fa-exclamation-circle'></i>champ obliatoire!</p>";
       
        
    }
    else{
        $email=tramed($_POST["email"]);
        if(!preg_match("/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}$/",$email)){
            $email_error="<p class='error'><i class='fas fa-exclamation-circle'></i>la forme de email incorrect</p>";
        }
    }
      
    if(empty($_POST["sujet"])){
        $sujet_error="<p class='error'><i class='fas fa-exclamation-circle'></i>champ obligatoire!</p>";
    }
    else{
        $sujet=tramed($_POST["sujet"]);
    }
    if(empty($_POST["message"])){
        $message_error="<p class='error'><i class='fas fa-exclamation-circle'></i>champ obligatoire!</p>";
    }
    else{
        $message=tramed($_POST["message"]);
    }

    if(empty($_POST["ecole"])){
        $ecole_error="<p class='error'><i class='fas fa-exclamation-circle'></i>champ obligatoire!</p>";
    }
    else{
        $ecole=tramed($_POST["ecole"]);
    }
    if(empty($name_error) && empty($email_error) && empty($sujet_error) && empty($ecole_error)&& empty($message_error)){

        $success="<p class='success'><i class='fas fa-check-circle'></i>le message a été envoyé</p>";
     
        $nom=$email=$sujet=$message=$ecole="";
        // require 'C:/xampp/htdocs/FPDF/fpdf.php';
        // $pdf=new FPDF();
        // $pdf->AddPage();
        // $pdf->SetFont("Arial","B","16");
        // $pdf->SetTextColor(17,90,219);
        // $pdf->Cell(45,10,"Nom Complet : ",0,0,'C');
        // $pdf->SetTextColor(0,0,0);
        // $pdf->Cell(45,10,$_POST["nom"],0,1);
        // $pdf->SetTextColor(17,90,219);
        // $pdf->Cell(25,10,"Email : ",0,0);
        // $pdf->SetTextColor(0,0,0);
        // $pdf->Cell(45,10,$_POST["email"],0,1);
        // $pdf->SetTextColor(17,90,219);
        // $pdf->Cell(25,10,"Sujet : ",0,0);
        // $pdf->SetTextColor(0,0,0);
        // $pdf->Cell(45,10,$_POST["sujet"],0,1);
        // $pdf->SetTextColor(17,90,219);
        // $pdf->Cell(25,10,"Ecole : ",0,0);
        // $pdf->SetTextColor(0,0,0);
        // $pdf->Cell(45,10,$_POST["ecole"],0,1);
        // $pdf->SetTextColor(17,90,219);
        // $pdf->Cell(35,10,"Message : ",0,0);
        // $pdf->SetTextColor(0,0,0);
        // $pdf->Cell(45,10,$_POST["message"],0,1);
        // $pdf->Output();
    }
    
}


function tramed($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlentities($data);
    return $data;
}


?>