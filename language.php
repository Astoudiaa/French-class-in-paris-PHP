<?php
// Fichier : language.php

 

// Fonction pour obtenir la langue actuelle
function getCurrentLanguage() {
    // Priorité 1 : paramètre GET
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        // Stocker la langue dans un cookie
        setcookie('selectedLanguage', $lang, time() + 31536000, '/');
        return $lang;
    }
    
    // Priorité 2 : cookie existant
    if (isset($_COOKIE['selectedLanguage'])) {
        return $_COOKIE['selectedLanguage'];
    }
    
    // Priorité 3 : langue du navigateur
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (in_array($browserLang, ['fr', 'en', 'es', 'pt'])) {
        return $browserLang;
    }
    
    // Langue par défaut
    return 'fr';
}

// Fonction pour charger les traductions
function loadTranslations($lang) {
    $translations = [];
    
    // Charger le fichier de traduction correspondant à la langue
    $filePath = __DIR__ . "/../translations/{$lang}.php";
    
    if (file_exists($filePath)) {
        $translations = include $filePath;
    } else {
        // Fallback sur le français si le fichier n'existe pas
        $translations = include __DIR__ . "/translations/fr.php";
    }
    
    return $translations;
}

// Fonction pour obtenir une traduction
function __($key) {
    global $translations;
    
    if (isset($translations[$key])) {
        return $translations[$key];
    }
    
    // Retourner la clé si la traduction n'existe pas
    return $key;
}

// Initialisation
$currentLang = getCurrentLanguage();
$translations = loadTranslations($currentLang);
?>