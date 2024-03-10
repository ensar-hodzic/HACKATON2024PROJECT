<?php


// STRICT TYPES CE NAM IZBACIT ERROR UKOLIKO STAVIMO DA JE RETURN TYPE OD FUNKCIJE NPR STRING A NE RETURNAMO STRING ("Uncaught TypeError") TREBA VAZDA STAVITI DA DODATNU SIGURNOST
declare(strict_types=1);

function checkSignupErrors() {
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";
        foreach($errors as $error) {
            echo "<p>" . $error . "</p>";
        }

        unset($_SESSION["errors_signup"]);
    } else if(isset($_GET["signup"]) && $_GET["signup"] == "success") {
        echo "<p>Signed in succesfully</p>";
    };
}

function showSignupInputs() {

    // AKO SMO UNIJELI USERNAME I AKO NEMAMO ERORA VEZANIH ZA USERNAME, NEK USTANE U POLJU KROZ ATRIBUT value
    // U SUPROTNOM, NEK POLJE OSTANE PRAZNO
    if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        // echo $_SESSION["errors_signup"]["username_taken"];
        echo '<input type="text" name="username" placeholder="Username..." value="' . $_SESSION["signup_data"]["username"] . '">';
    } else {
        // echo "NE RADI";
        echo '<input type="text" name="username" placeholder="Username...">';
    }

        echo '<input type="password" name="pwd" placeholder="Password...">';


    if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["invalid_email"]) && !isset($_SESSION["errors_signup"]["email_taken"])) {
        // echo "RADI";
        echo '<input type="email" name="email" placeholder="Email..." value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        // echo "NE RADI";
        echo '<input type="email" name="email" placeholder="Email...">';
    }
}