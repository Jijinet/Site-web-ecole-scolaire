<?php include("../controllers/SearchEngine.php"); ?>
<body>
    <div class="container">
        <header>

            <div class="header-content">
                <a href="../index.php"><img src="../assets/logo.png" alt="" class="logo"></a>
                <h2 class="header-title"><a href="../index.php">GROUPE ITAG</a> <span>LE PONT VERS L'ENTREPRISE</span></h2>
                <a href="http://www.dfp.gov.ma/formation-professionnelle-privee/accreditation-des-efpp.html#d%C3%A9finition"><img src="../assets/accredite-1.png" alt="" class="accredite"></a>
            </div>

        </header>

        <div class=" nav-container">
            <nav>
                <ul class="nav-content">
                    <li class="list-menu">
                        <a  href="../index.php">GROUPE ITAG</a>
                        <ul class="drop-down">
                        <li><a href="mot_de_president.php">Mot du president</a></li>
                            <li><a href="../tout-actualité.php">Actualités</a></li>
                            <li><a href="#">Qui somme nous</a></li>
                            <li class="nested-list">
                                <a href="">La force du groupe</a>
                                <ul class="drop-list">
                                    <li><a href="../index.php">Groupe des écoles ITAG</a></li>
                                    <li><a href="http://groupemiage.net/">Groupe des écoles MIAGE</a></li>
                                </ul>

                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="../les-ecoles.php">Écoles</a>
                    </li>

                    <li>
                        <a href="../filiere.php">Filiéres</a>
                    </li>
                    <li>
                        <a href="../formation.php">Formations</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contactez-Nous</a>
                    </li>
                    <li class="partenaires">
                        <a href="../partenaire.php">Partenaires</a>
                    </li>
                    <button class="border"><a class="inscrit" href="../inscription.php">INSCRIVEZ-VOUS</a></button>
                    <form  class="search" action="../search.php"  method="post">
                        <input required name="recherche" type="text" placeholder="Rechercher...">
                        <button name="submit"><i class="fas fa-search"></i>
                        </button>
                    </form>

                </ul>

                <div class="burger-menu">
                    <div class="content-menu"><i class="fas fa-bars trigger"></i>
                        <i class="fas fa-times close"></i>
                        <form class="search" action="../search.php"  method="post">
                            <input required name="recherche" type="text" placeholder="Rechercher...">
                            <button name="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <button class="btn-inscrit"><a class="inscrit" href="../inscription.php">INSCRIVEZ-VOUS</a></button>
                    <!-- <div class="menu-container">
                        <ul class="menu">
                            <li><a href="#">Contactez-Nous</a></li>
                            <li><a href="#">Nos Formations</a></li>
                            <li><a href="#">Nos Écoles</a></li>
                            <li><a href="#">Nos Filiéres</a></li>
                            <li class="partenaires"><a href="#">Nos Partenaires</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="menu-container">
                    <ul class="menu">
                        <li class="list-menu2"><a href="../index.php">GROUPE ITAG</a>
                        <ul class="drop-down2">
                        <li class="back-blue"><a class="blue" href="mot_de_president.php">Mot du president</a></li>
                                <li class="back-blue"><a class="blue" href="tout-actualité.php">Actualités</a></li>
                                <li class="back-blue"><a class="blue" href="#">Qui somme nous</a></li>
                                <li class="nested-list2 back-blue">
                                    <a class="blue" href="#">La force du groupe</a>
                                    <ul class="drop-list2">
                                        <li><a href="index.html">Groupe des écoles ITAG</a></li>
                                        <li><a href="http://groupemiage.net/">Groupe des écoles MIAGE</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="../les-ecoles.php">Écoles</a></li>
                        <li><a href="../filiere.php">Filiéres</a></li>
                        <li><a href="../formation.php">Formations</a></li>
                        <li><a href="../contact.php">Contactez-Nous</a></li>
                        <li class="partenaires"><a href="../partenaire.php">Partenaires</a></li>
                    </ul>
                </div>

            </nav>
        </div>