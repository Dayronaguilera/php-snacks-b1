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
    1- Creare un array contenente qualche alunno di una ipotetica classe.
    2- Ogni alunno avrà i seguenti dati:
        - nome
        - cognome
        - un array contenente i suoi voti scolastici.
    3- Stampare nome, cognome e la media dei voti di ogni alunno-->
    <?php
        $school = [

            [
                'name' => 'Dayron',
                'surname' => 'Aguilera',
                'vote' => [8,7,8,8]
            ],
            [
                'name' => 'Gabriele',
                'surname' => 'Sanna',
                'vote' => [6,5,9,3]
            ],
            [
                'name' => 'Noemi',
                'surname' => 'Paterno',
                'vote' => [10,9,9,9]
            ],
        ];

        foreach ($school as $student) {
            // stampiamo nome e cognome dello studente!
            echo "{$student["name"]} - {$student["surname"]}";

            // calcoliamo la media del array vote e la stampiamo!
            $sum = array_sum($student['vote'])/count($student['vote']);
            $media = round($sum, 2);
            echo ', Media: '.$media.'<br>';
                
        }
    ?>
</body>
</html>