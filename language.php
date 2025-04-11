<?php
// Inclure la configuration
require_once __DIR__ . '/config.php';

// Fonction pour détecter la langue
function detectLanguage() {
    global $available_languages, $default_language;
    
    // Vérifier si une langue est spécifiée dans l'URL (?lang=xx)
    if (isset($_GET['lang']) && in_array($_GET['lang'], $available_languages)) {
        // Stocker la préférence dans un cookie (valable 30 jours)
        setcookie('preferred_language', $_GET['lang'], time() + (86400 * 30), "/");
        return $_GET['lang'];
    }
    
    // Vérifier si une préférence est stockée dans un cookie
    if (isset($_COOKIE['preferred_language']) && in_array($_COOKIE['preferred_language'], $available_languages)) {
        return $_COOKIE['preferred_language'];
    }
    
    // Vérifier l'en-tête HTTP Accept-Language
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $browser_langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        foreach ($browser_langs as $browser_lang) {
            $browser_lang = substr($browser_lang, 0, 2); // Prendre les 2 premiers caractères
            if (in_array($browser_lang, $available_languages)) {
                return $browser_lang;
            }
        }
    }
    
    // Utiliser la langue par défaut si aucune correspondance n'est trouvée
    return $default_language;
}

// Créer les dossiers de langue s'ils n'existent pas
$languages_dir = $languages_basepath;
if (!file_exists($languages_dir)) {
    mkdir($languages_dir, 0755, true);
    
    foreach ($available_languages as $lang) {
        if (!file_exists("$languages_dir/$lang")) {
            mkdir("$languages_dir/$lang", 0755, true);
        }
    }
}

// Détecter la langue
$current_language = detectLanguage();

// Chemin vers le fichier de langue
$lang_file = "$languages_dir/$current_language/lang.php";

// Vérifier si le fichier de langue existe, sinon utiliser le fichier de langue par défaut
if (!file_exists($lang_file)) {
    // Si le fichier n'existe pas encore, créons un fichier vide
    if (!file_exists(dirname($lang_file))) {
        mkdir(dirname($lang_file), 0755, true);
    }
    
    // Créer un fichier de langue vide
    file_put_contents($lang_file, "<?php\n\$lang = [];\n?>");
}

// Charger le fichier de langue
require_once $lang_file;

// Fonction de traduction
function __($key) {
    global $lang, $current_language, $default_language, $languages_basepath;
    
    if (isset($lang[$key])) {
        return $lang[$key];
    }
    
    // Si la clé n'existe pas et que nous ne sommes pas dans la langue par défaut,
    // essayons de charger la clé depuis la langue par défaut
    if ($current_language != $default_language) {
        $default_lang_file = "$languages_basepath/$default_language/lang.php";
        if (file_exists($default_lang_file)) {
            include $default_lang_file;
            if (isset($lang[$key])) {
                return $lang[$key];
            }
        }
    }
    
    // Si la clé n'existe toujours pas, retourner la clé elle-même
    return $key;
}
?>