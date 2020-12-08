<?php
function compareNumber($number = 3, $secondNumber =  1){
    if($number > $secondNumber)
    {
        return 'Le premier nombre est plus grand';
    }
    elseif($number < $secondNumber)
    {
        return 'Le premier nombre est plus petit';
    }
    elseif ($number == $secondNumber)
    {
        return 'Les deux nombres sont identiques';
    }
};
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <title>Exercice 4 Partie 4</title>
</head>

<body>
    <h1>Exercice 4 Partie 4</h1>
    <p><?php
        echo compareNumber();
        ?></p>
</body>

</html>