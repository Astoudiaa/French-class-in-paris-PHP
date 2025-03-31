<?php
header("Location: html2/home.php");
exit();
?>

<?php

session_start();

// Démarrage de la session pour stocker la langue
session_start();

// Vérifie si une langue a été sélectionnée dans le formulaire
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Si aucune langue n'est définie, définir le français comme langue par défaut
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr';
}

// Inclure les fichiers de langue correspondant à la session active
include("lang/".$_SESSION['lang'].".php");
?>
