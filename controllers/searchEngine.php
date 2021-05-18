<?php



$formationArr= array("bachlor","formation","licence","master","certification","communication");
$filiereArr=array("filiére","filiere","developpment","informatique","gestion des entreprises","gestion","infographie","maintenace","reseau","reseau");
$filiereFormationArr=array("technicien","technicien specialisé","qualification");
$ecoleArr=array("ecole","benslimane","salé","temara","itag benslimane","itag salé","itag temara");
$partenaireArr=array("partenaires","fede","federation","européenne","université","versailles");



$title=$title2=$title3=$title4=$content=$content2=$content3=$content4="";
$readMore=$readMore2=$readMore3=$readMore4="";
$no_result=$no_result2="";

if(isset($_POST["submit"])){

    if(in_array(strtolower($_POST["recherche"]),$formationArr)){
        $readMore="<a href='formation.php' id='readmore'>Savoir plus...</a>";
        $title="<a class='titre' href='formation.php'>Groupe Itag - Formation</a>";
        $content="<p>Diplômes Accrédités et signés par l'état Marocain - Licence Professionnelle – Diplôme d’Etat Français -Diplôme Européen d’Etudes Supérieures - bachlor federation européenne- Mastère Européen ,Technicien spécialisée ,technicien ,qualification . . .$readMore</p>";
        
    }
    elseif(in_array(strtolower($_POST["recherche"]),$filiereArr)){
        $readMore="<a href='filiere.php' id='readmore'>Savoir plus...</a>";
        $title="<a class='titre' href='filiere.php'>Groupe Itag - Filiére</a>";
        $content="<p>Decouvrez nos filiére pour les formations de technicien et technicien spécilisé- développement informatique ,réseaux informatiques ,Gestion des Entreprises ,Infographie ,Gestion Informatisée ,Maintenance Informatique ,Opérateur de saisie$readMore</p>";
    
        $readMore2="<a href='ecole.php' id='readmore'>Savoir plus...</a>";
        $title2="<a class='titre' href='filiere.php'>Groupe Itag - Ecoles Itag</a>";
        $content2="<p> Decouvrez les écoles de groupe ITAG pour les formations de technicien et technicien spécilisé ,contactez-nous,plus d'informations...$readMore2</p>";
    
    }
    elseif(in_array(strtolower($_POST["recherche"]),$filiereFormationArr)){
        $readMore="<a href='formation.php' id='readmore'>Savoir plus...</a>";
        $title="<a class='titre' href='formation.php'>Groupe Itag - Formation</a>";
        $content="<p>Diplômes Accrédités et signés par l'état Marocain - Licence Professionnelle – Diplôme d’Etat Français -Diplôme Européen d’Etudes Supérieures - bachlor federation européenne- Mastère Européen ,Technicien spécialisée ,technicien ,qualification . . .$readMore</p>";

        $readMore2="<a href='filiere.php' id='readmore'>Savoir plus...</a>";
        $title2="<a class='titre' href='filiere.php'>Groupe Itag - Filiére</a>";
        $content2="<p>Decouvrez nos filiére pour les formations de technicien et technicien spécilisé- développement informatique ,réseaux informatiques ,Gestion des Entreprises ,Infographie ,Gestion Informatisée ,Maintenance Informatique ,Opérateur de saisie...$readMore2</p>";
    }
    elseif(in_array(strtolower($_POST["recherche"]),$ecoleArr)){
        $readMore="<a href='les-ecoles.php' id='readmore'>Savoir plus...</a>";
        $title="<a class='titre' href='filiere.php'>Groupe Itag - Ecoles Itag</a>";
        $content="<p> Decouvrez les écoles de groupe ITAG pour les formations de technicien et technicien spécilisé ,contactez-nous,plus d'informations...$readMore</p>";

    }
    elseif(in_array(strtolower($_POST["recherche"]),$partenaireArr)){
        $readMore="<a href='formation.php' id='readmore'>Savoir plus...</a>";
        $title="<a class='titre' href='formation.php'>Groupe Itag - Formation</a>";
        $content="<p>Diplômes Accrédités et signés par l'état Marocain - Licence Professionnelle – Diplôme d’Etat Français -Diplôme Européen d’Etudes Supérieures - bachlor federation européenne- Mastère Européen ,Technicien spécialisée ,technicien ,qualification . . .$readMore</p>";

        $readMore2="<a href='partenaire.php' id='readmore'>Savoir plus...</a>";
        $title2="<a class='titre' href='partenaire.php'>Groupe Itag - Partenaires</a>";
        $content2="<p> Decouvrez les écoles de groupe ITAG pour les formations de technicien et technicien spécilisé ,contactez-nous,plus d'informations...$readMore2</p>";
    }

    else{
        $no_result="<a class='titre'>Aucun résultat été trouvé</a>";
        $no_result2="<p>Désolé, mais rien ne correspond à vos termes de recherche. Veuillez réessayer avec d'autres mots-clés.</p>";
    }

}




?>