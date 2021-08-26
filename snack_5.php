<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Traccia:
       1- Prendere un testo abbastanza lungo, contenente diverse frasi.
       2- Suddividere il testo in tanti paragrafi <p>: ad ogni punto 
          corrisponde un nuovo paragrafo. 
    -->
    <?php
        $text = "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.
        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.";

        $newText = explode('.',$text);

        for ($i=0; $i < count($newText) ; $i++) { 
            echo "{$newText[$i]}<p/>";
        }

    ?>

</body>
</html>