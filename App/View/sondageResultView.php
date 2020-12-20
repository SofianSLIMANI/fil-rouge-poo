<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Résultat du sondage</title>
    <link rel="stylesheet"
          href="css/sondageResult.css">
    <link rel="stylesheet"
          href="css/home.css">
</head>
<body>
    <?php
    include("include/header.php");
    ?>

    <main>
        <section class="results">

            <h1>Votre vote a été pris en compte!</h1>

            <div class="responses">

                <p id="response_1"><?= $result['r1']['title'] . ': ' . $result['r1']['q'] . ' (' . $result['r1']['p'] . '%)' ?></p>
                <p id="response_2"><?= $result['r2']['title'] . ': ' . $result['r2']['q'] . ' (' . $result['r2']['p'] . '%)' ?></p>
            </div>
        </section>
    </main>
        <?php include "include/footer.php"; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function updateResponses() {
            $.ajax({
                url: "?page=getResultsApi&id=" + <?= $_GET['id'] ?>,
                dataType: "json",
                success: function (data) {
                    const voteTotal = data[0]['votes'] + data[1]['votes'];
                    [0, 1].forEach((id) => {
                        const responseElement = document.getElementById('response_' + (id + 1));
                        responseElement.innerText = `${data[id]['content']}: ${data[id]['votes']} (${data[id]['votes'] / voteTotal * 100}%)`;
                    })
                    setTimeout(updateResponses, 3000);
                }
            })
        }

        updateResponses()
    </script>
</body>
</html>
