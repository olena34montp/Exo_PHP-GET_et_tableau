<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
<?php
$personnes = array( 
    'mdupond'=> array('prenom' => 'Martin', 'nom' =>'Dupond', 'age' => 25, 'ville' => 'Paris'), 
    'jm'=> array('prenom' => 'Jean','nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
    'toto'=>array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
    'arn'=> array ('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville'=> 'Paris'),
     'email'=> array('prenom'=>'Emilie', 'nom'=>'Ailta', 'age'=>46,'ville'=>'Villetaneuse'),
    'dask'=>array('prenom'=>'Damien','nom'=>'Askier','age'=>7,'ville'=>'Villetaneuse'));


//Quelles sont les clés du tableau $personnes et leur type ? 
echo "Les clés du tableau \$personnes sont: mdupond, jm, toto, arn, email, dask. Leur type - string";
//foreach ($personnes as $key => $values){
//    echo $key . ' type key = ' . gettype($key) . '<br>';
//}
echo "<br>";
//De quel type sont les valeurs de ce tableau ?
echo "Les valeurs de ce tableau ont le type - array";
//foreach ($personnes as $key => $values){
//    echo $key . ' type values = ' . gettype($values) . '<br>';
//}   
echo "<br>";
//Quelle est la valeur associée à ’toto’ ?
echo "La valeur associée à 'toto' = ['prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay']";
//print_r($personnes['toto']);
echo "<br> <br>";

//Comment accéder à la valeur 33 dans le tableau ? 
echo "print_r(\$personnes['arn']['age']);";
//print_r($personnes['arn']['age']);
echo "<br>";
//À la valeur ’Epinay’ ?
echo "print_r(\$personnes['toto']['ville']);"; 
//print_r($personnes['toto']['ville']);
echo "<br>";
//Au tableau contenant les valeurs ’Damien’, ’Askier’, 7, ’Villetaneuse’ ?
echo "print_r(\$personnes['dask']);"; 
//print_r($personnes['dask']);
echo "<br> <br>";

//Écrire une fonction permettant d’afficher le tableau dans son ensemble. 
//Ajouter une première ligne contenant les clés ’prenom’, ’nom’, ’age’ et ’ville’. 
//Ajouter ensuite un fichier CSS afin d’obtenir le tableau donné par la figure 3.4.
function afficheTableau(array $arr) {
    $indexPr = array_key_first($arr);
    $arrTh = $arr[$indexPr];
    echo "<table> <tr> <th></th>";
    foreach($arrTh as $key => $value) {
        echo "<th> $key </th>";
    }
    echo "</tr>";
    foreach($arr as $key => $values){
        echo "<tr> <th> $key </th>";
        foreach($values as $key2 => $value){
            echo "<td> $value </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

afficheTableau($personnes);

function afficheInfo (array $arr, string $ville) {
    echo "<table>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Âge</th><th>Ville</th>";
    foreach($arr as $key => $values){
        if($values["ville"] == $ville)
        {
            echo "<tr>";
            echo "<td>".$values['prenom']."</td>";
            echo "<td>".$values['nom']."</td>";
            echo "<td>".$values['age']."</td>";
            echo "<td>".$values['ville']."</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}
echo "<br>";
echo "<br>";
afficheInfo($personnes, "Epinay");
echo "<br>";
?>

<a href="pseudo.php?pseudo=jm">Jm</a>
​
    <br>
    <br>​
    <form action="pseudo.php" method="POST">
        <label for="pseudo">Pseudo : </label>
        <input type="text" name="pseudo" size="24" value="<?php if(isset($_POST["pseudo"])){echo $_POST["pseudo"];}?>">
        <input type="submit" name="envoie" value="Qui es-tu ?"></button>
    </form>
    </body>
</html>

