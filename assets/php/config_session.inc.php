<?php

// -> DA POINTAMO NA METODU ILI ATRIBUT OBJEKTA
// => DA POVEZEMO KEY SA VALUEOM U ASSOCIATIVE ARRAYU

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params([
    "lifetime" => 1800,
    "domain" => "localhost",
    "path" => "/",
    "secure" => true,
    "httponly" => true
]);

session_start();

if(isset($_SESSION["user_id"])) {
    if(!isset($_SESSION['last_regeneration'])) {
        regenerate_session_logged_in();
    } else {
        $interval = 1800;
        if(time() - $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session_logged_in();
        }
    }
} else {
    if(!isset($_SESSION['last_regeneration'])) {
        regenerate_session();
    } else {
        $interval = 1800;
        if(time() - $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session();
        }
    }
}

function regenerate_session() {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}

function regenerate_session_logged_in() {
    session_regenerate_id(true);
    
    $userId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId);

    $_SESSION['last_regeneration'] = time();
}