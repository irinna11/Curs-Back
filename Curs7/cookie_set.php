<?php

// setcookie("name", "Irina", time() + 3600, '/', '', 0);

$cookie_name = "user_preference";
$cookie_value = "preferinta";

$cookie_expiration_time = time() + 300; // 300 secunde = 5 minute
setcookie($cookie_name, $cookie_value, $cookie_expiration_time, "/");

if(isset($_COOKIE[$cookie_name]))
{
    echo "Cookie-ul '" . $cookie_name . "' este setat.<br>";
    echo "Valoarea cookie-ului este: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie-ul '" . $cookie_name . "' nu este setat sau a expirat.";
}