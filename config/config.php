<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define base URL
$host1 = '/best/';
$host = '/';
define("BASEROOT", $host1);

// Handle language switching
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['en', 'fr'])) {
        $_SESSION['lang'] = $lang;
    }
    // Redirect to clean the URL (only if no output has been sent yet)
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}

// Set default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

$lang = $_SESSION['lang'];
$lang_file = __DIR__ . '/../lang/' . $lang . '.php';

// Load translation file
if (file_exists($lang_file)) {
    $translations = include($lang_file);
} else {
    $translations = include(__DIR__ . '/../lang/en.php'); // fallback
}

// Translation function
function __($key) {
    global $translations;
    return $translations[$key] ?? $key;
}
