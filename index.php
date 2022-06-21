<?php   
    $paragraph = 'Beh, Shinji, io non posso fare altro che stare qui ad annaffiare. Però, quanto a te, quanto a quel che non puoi far che tu, per te qualcosa da poter far dovrebbe esserci. Ma non ti costringerà nessuno, pensa da te stesso, decidi da te stesso che cosa tu stesso possa fare. Beh, che tu non abbia rammarichi';

    $word= $_GET["word"];

    $newParagraph = str_replace("$word", "***", $paragraph);

?>

<!-- Document html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- parte con il paragrafo originale -->
    <h2>Paragrafo Originale</h2>
    <p> <?php echo $paragraph  ?> </p>
    <p>Lunghezza del paragrafo: <?php echo strlen($paragraph) ?></p>
    <!-- parte con il paragrafo censurato -->
    <h2>Paragrafo Censurato</h2>
    <p><?php echo $newParagraph ?></p>
    <p>Lunghezza del paragrafo: <?php echo strlen($newParagraph) ?></p>
</body>
</html>