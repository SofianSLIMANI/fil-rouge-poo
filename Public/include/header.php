<?php
?>
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/49fa084123.js" crossorigin="anonymous"></script>
    <title>SBA</title>
</head>
<header id="acceuil">

    <i class="fas fa-bars"></i>
    <div class="hide1">
        <i class="fas fa-times"></i>
    </div>

    <img src="img/logosba.png" alt="logoSBA">

</header>
<div class="hide">

    <nav class="liens_header"><a href="?page=home">Accueil</a></nav>
    <?php
    if($this->auth->islogged()){
        echo '<nav class="liens_header"><a href="?page=logout">Déconnexion</a></nav>';
        echo '<nav class="liens_header"><a href="?page=profil">Mon profil</a></nav>';
        echo '<nav class="liens_header"><a href="?page=creaSondage">Créer un sondage</a></nav>';
    }
    else {
        echo '<nav class="liens_header"><a href="?page=login"><i class="fas fa-user"></i><br>Connexion</a></nav>';
        echo '<nav class="liens_header"><a href="?page=register"><i class="fas fa-user"></i><br>Inscription</a></nav>';
    }
    ?>
</div>
