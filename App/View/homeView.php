<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet"
          href="css/home.css">

</head>
<body>
 <?php
    include ("include/header.php");
 ?>

<main>

    <div class="bleu">
        <h1>Le site de sondage officiel de la NBA !</h1>
    </div>
    <div class="img_main">
        <h2>Des sondages sur <span class="rouge">toutes vos équipes préférées</span></h2>
    </div>
    <h3  id="sondages" >Sondages:</h3>

    <div class="sondages">

        <?php if(!$this->auth->islogged()) {?>
            <p>Vous devez vous connecter pour voir les sondages!</p>
        <?php } else {

            foreach($values['polls'] as $poll){
                ?>

                <div class="card" >
                    <img src="img/detritvspistons.png" alt="Match">
                    <div class="container">
                        <h4><a href="<?=$this->getPath('poll_responses', ['id' => $poll[0]])?>"><b><?=$poll['title']?></b></a></h4>
                    </div>
                </div>

                <?php
            }

        }?>
    </div>

</main>
<?php include "include/footer.php"; ?>
</body>
</html>
