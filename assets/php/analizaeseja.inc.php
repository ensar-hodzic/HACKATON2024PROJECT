<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["theTitle"];
    $text = $_POST["essayText"];

    if(isset($_SESSION["user_id"])) {
        $userId = $_SESSION["user_id"];
    } else {
        echo "userId UNset";
    }


    try {
        
        require_once "dbh.inc.php";
        require_once "analizaeseja_model.inc.php";
        // require_once "login_view.inc.php";
        // require_once "analizasesija_contr.inc.php";

        // ERROR HANDLERS
       
        setEssay($pdo, $_SESSION["user_id"], $title, $text); 
        // NAPRAVIMO NOVI SESSION ID SA USEROVIM ID

        $_SESSION["essay_title"] = $title;
        $_SESSION["essay_text"] = $text;


        header("Location: ../../analizasummary.php?email=success");
        $pdo = null;
        $statement = null;
        die();

    } catch (PDOExcetion $e) {
        die("Query failed: " . e->getMessage());
    }


} else {
    header("Location: ../../login.php");
    die();
}