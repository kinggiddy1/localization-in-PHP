<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host1 = '/best/';
$host = '/';
define("BASEROOT", $host1);


if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['en', 'fr'])) {
        $_SESSION['lang'] = $lang;
    }
  
}


if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

$lang = $_SESSION['lang'];
$lang_file = __DIR__ . '/../lang/' . $lang . '.php';


if (file_exists($lang_file)) {
    $translations = include($lang_file);
} else {
    $translations = include(__DIR__ . '/../lang/en.php'); // fallback
}

function __($key) {
    global $translations;
    return $translations[$key] ?? $key;
}
