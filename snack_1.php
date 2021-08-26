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
    1- Creiamo una struttura che rappresenta le partite di basket di 
       una'ipotetica tappa del calendario.
    2- Ogni array interno conterra le seguenti informazioni:
        - una squadra di casa
        - una squadra ospite
        - punti fatti dalla squadra di casa
        - punti fatti dalla squadra ospite
    3- Stampiamo a schermo tutte le partite con questo schema:
        Olimpia Milano - Cantù | 55-60 -->
    
    <?php
        $partite = [
            [
                "casa" => "Olimpia Milano",
                "ospite" => "Cantù",
                "casaPunti" => 55,
                "ospitePunti" => 60 
            ],
            [
                "casa" => "Carpegna Prosciutto Pesaro",
                "ospite" => "Dolomiti Energia Trentino",
                "casaPunti" => 80,
                "ospitePunti" => 75 
            ],
            [
                "casa" => "Virtus Segafredo Bologna",
                "ospite" => "Fortitudo Bologna",
                "casaPunti" => 105,
                "ospitePunti" => 90 
            ]
            
        ];

        for ($i=0; $i < count($partite); $i++) { 

            // se dobbiamo riutilizzare la sintax conviene essergnarla ad una variabile!
            echo "{$partite[$i]["casa"]} - {$partite[$i]["ospite"]} | {$partite[$i]["casaPunti"]}-{$partite[$i]["ospitePunti"]}<br/>";
            
            
        }
    ?>

    
</body>
</html>