<?php

declare(strict_types=1);

function checkLoginErrors() {
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";
        foreach($errors as $error) {
            echo "<p>" . $error . "</p>";
        }

        unset($_SESSION["errors_login"]);
    } else if(isset($_GET["login"]) && $_GET["login"] == "success") {
        echo "<p>Logged in succesfully</p>";
    };
}

function outputUsername() {
    if(isset($_SESSION["user_id"])) {
        echo "<p>Dobrodošao nazad, " . $_SESSION["user_username"] . "</p>";
    } else {
        echo "You are not logged in";
    }
}