<?php
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sondage</title>
    <link rel="stylesheet" href="css/sondage.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php
include ("include/header.php");
?>

<main>
    <form method="post">
        <div class="bleu">
            <h1><?=$poll[0]['title']?></h1>
        </div>

        <div class="line">
            <label for="response_1"><?=$responses[0]?></label>
            <input required type="radio" class="radio" name="response" value="0"  id="response_1"/>
        </div>
        <div class="line">
            <label for="response_2"><?=$responses[1]?></label>
            <input required type="radio" class="radio" name="response" value="1" id="response_2"/>
        </div>

        <input type="submit" id="button" value="Envoyer" name="response_submit"/>
    </form>
</main>

<?php include "include/footer.php"; ?>
</body>
</html>
