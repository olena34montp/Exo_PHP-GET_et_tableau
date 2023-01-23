<?php

include_once "index.php";

$pseudo = $_GET["pseudo"];
//$pseudo_form = $_POST["pseudo"];

// var_dump($_POST);
// print_r($_POST);

$info = "";
$info_form = "";
$pseudo = filter_input(INPUT_GET, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS);
$pseudo_form = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($personnes[$pseudo]) && !empty($_GET)) {
    $info = $personnes[$pseudo];
}

if (isset($personnes[$pseudo_form]) && !empty($_POST)) {
    $info = $personnes[$pseudo_form];
}

if ($info == null && $info == "") {
    echo "Désolé, votre pseudonyme n’apparaît pas dans la liste.";
} else {
    echo "Pseudo: " . $pseudo . "<br>";
    echo "Prénom: " . $info['prenom'] . "<br>";
    echo "Nom: " . $info['nom'] . "<br>";
    echo "Age: " . $info['age'] . "<br>";
    echo "Ville: " . $info['ville'] . "<br>";
}

//Afficher l'information d'input 
// if ($info == null && $info == "") {
//     echo "Désolé, votre pseudonyme n’apparaît pas dans la liste.";
// } else {
//     echo "Pseudo: " . $pseudo_form . "<br>";
//     echo "Prénom: " . $info['prenom'] . "<br>";
//     echo "Nom: " . $info['nom'] . "<br>";
//     echo "Age: " . $info['age'] . "<br>";
//     echo "Ville: " . $info['ville'] . "<br>";
// }
