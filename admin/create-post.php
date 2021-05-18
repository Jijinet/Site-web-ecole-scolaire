
<?php  include("../controllers/connexion.php");


if(!isset($_SESSION['user'])){
    header('location: ../admin/index.php');
}


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
    <style>
    
    textarea.desc{

        font-family:var(--large-font);
        border: 1.5px solid rgb(189, 189, 189);
        border-radius: 3px;
        padding-left: .5rem;
        width: 100%;
        font-size: 1.8rem;
        color: var(--blue);
        }
    
    </style>
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
            <div class="content add-post">
                <h3>Créer Article</h3>

                <?=$success?>
                <?=$error?>

                <form  method="post" action="create-post.php" enctype="multipart/form-data">
                <input type="hidden" value="<?= $id ?>" name="id" >
                <input type="hidden" value="<?= $db_image ?>" name="image" >
                <input type="hidden" value="<?= $db_file ?>" name="file" >
                    <label for="titre">Titre</label><br><br>
                    <input type="text" value="<?= $titre ?>" name="titre" id="titre" autocomplete="off"><br><br><br>
                    <?=$errorTitre?>
                    <label class="label" for="body">Text</label><br><br>

                    <textarea name="contenu" id="body" cols="30" rows="10"><?= $text ?></textarea><br><br>
                    <?=$errorText?>
                    
                    <label class="label" for="decs">Description</label><br><br>
                    <textarea class="desc" name="description" id="decs" cols="30" rows="5"><?= $description ?></textarea><br><br><br>
                 <label class="label">Image</label><br><br>
                    <input class="custom-file" value="<?= $image ?>"  name="image"  type="file" multiple="true" accept="image/*"><br><br>
                    <?=$errorImage?>
                    <label class="label">Fichier</label><br><br>
                    <input class="custom-file" title="" name="file" value="<?= $file ?>" type="file" multiple="true" accept="file/*"><br>
                    <?=$errorFile?>
                    <input class="custom-file" value="<?= $nomFichier ?>"   name="fileName"  type="hidden" multiple="true">
                    <button type="submit" name="publier">Publier</button>
                    <button type="submit" name="modifier">Modifier</button>
                    
                </form>
              
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

    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>

    <script src="../js/admin-panel.js"></script>


</body>

</html>