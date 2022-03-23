<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony, Cidjie, Théo and Vincent, Wcs 2022">
    <meta name="description" content="Bienvenue sur We love Lyon ! Découvrez la capitale des Gaules, la seule ville des Lumières.
    Retrouvez les plus beaux sites, les meilleurs hôtels et restaurants et bien plus !">
    <meta name="keywords" content="lyon, fourvière, confluence, restaurant, hôtels, monument, musée, parc, ballade, visite, indispensable, wild, code, school">
    <link rel="stylesheet" href="./src/css/index.css">
    <link rel="stylesheet" href="./src/css/_head_foot_style.css">
    <link rel="stylesheet" href="./src/css/css_init.css">
    <title>Présentation</title>
</head>

<body>

    <header>
        <?php include('./_header_nav.php'); ?>
        <div class="headerTitle">
            <img src="./src/assets/logo/_logo_noir.png" alt="Logo We love Lyon Noir">
            <!-- <p>Le saviez-vous : Si vous voyez le Mont Blanc depuis ce point de vue, il pleut deux jours plus tard !</p>-->
        </div>
    </header>

    <main>
        
        <section class="introduction">
            <h1>Bienvenue</h1>
            <p>We love Lyon, c'est le site pour découvrir la capitale des Gaules, la seule ville des lumières. Retrouvez les plus beaux sites, les meilleurs hôtels et restaurants, et bien plus !</p>        
        </section>

        <img src="./src/assets/carroussel_pictures/img2.jpg" alt="Photo_de_Lyon">

    <!--<div id="carroussel">

        <div id="container">
        </div>


        <img src="src/assets/carroussel_pictures/bouton.png" class="bouton" id="d"/>
        <img src="src/assets/carroussel_pictures/bouton.png" class="bouton" id="g"/>
    
    </div>-->


    </main>

    <footer>
        <?php include('./_footer.php'); ?>
    </footer>

    <script src="./src/js/index_script.js"></script>

    <!-- À confirmer mais n'insérer le script uniquement si besoin pour éviter les erreurs -->

</body>

</html>