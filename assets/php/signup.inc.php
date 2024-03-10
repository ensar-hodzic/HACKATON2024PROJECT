<?php

// DA LI JE USER DOSAO OVDJE NA TACAN NACIN
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        
        require_once "dbh.inc.php";
        
        // MVC PATTERN
        require_once "signup_model.inc.php"; // MODEL VAZDA PRVI, PA IDE VIEW, PA CONTR
        require_once "signup_contr.inc.php"; // CONTR IZA VIEWA

        // ERROR HANDLERS
        $errors = [];

        if(isInputEmpty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields";
        }
        if(isEmailInvalid($email)) {
            $errors["invalid_email"] = "Email is invalid";
        }
        if(isUsernameTaken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken";
        }
        if(isEmailRegistered($pdo, $email)) {
            $errors["email_taken"] = "Email already registered";
        }

        // TREBA NAM SESSION DA BI ACCESSALI $_SESSION[]
        require_once "config_session.inc.php";

        if($errors) { // IF THERE IS DATA IN ERRORS ARRAY -> TRUE; OTHERWISE -> FALSE
            $_SESSION["errors_signup"] = $errors;
            
            $signupData = [
                "username" => $username,
                "pwd" => $pwd,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;
            
            header("Location: ../../register.php");
            die(); // AKO IMA ERRORA, DA NAM NE IDE DOLE NA SUCCESS, VEC UGASIMO SKRIPTU
        }


        createUser($pdo, $username, $pwd, $email);

        header("Location: ../../index.php?signup=success");
        
        $pdo = null;
        $statement = null;

        die();

    } catch (PDOExcetion $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../../register.php");
    die();
}