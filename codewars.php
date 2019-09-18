<?php

// calculer la différence entre deux tableaux
$a = [10, 15, 20];
$b = [5,2,5];

echo '<p>'.abs(array_product($a)-array_product($b)).'</p>';


// renvoyer un tableau contenant toutes les chaînes du tableau en entrée, sauf celles qui correspondent aux chaînes de l'autre tableau
function gooseFilter($birds) {
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher", "Crested"];

    $result = array_values(array_diff($birds ,$geese));
    return $result;
}

$birds = ["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish" , "Paris", "Orléans"];

var_dump(gooseFilter($birds));