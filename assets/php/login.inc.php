<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        // require_once "login_view.inc.php";
        require_once "login_contr.inc.php";

        // ERROR HANDLERS
        $errors = [];

        if(isInputEmpty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all fields";
        }
        
        $result = getUser($pdo, $username);

        if(isUsernameWrong($result)) {
            $errors["wrong_username"] = "Username is wrong";
        }

        // username is right but password is wrong
        if(!isUsernameWrong($result) && isPasswordWrong($pwd, $result["pwd"])) {
            $errors["wrong_password"] = "Incorrect password for that user";
        }

        // TREBA NAM SESSION DA BI ACCESSALI $_SESSION[]
        require_once "config_session.inc.php";

        if($errors) { // IF THERE IS DATA IN ERRORS ARRAY -> TRUE; OTHERWISE -> FALSE
            $_SESSION["errors_login"] = $errors;
                        
            header("Location: ../../login.php");
            die(); // AKO IMA ERRORA, DA NAM NE IDE DOLE NA SUCCESS, VEC UGASIMO SKRIPTU
        }

        // NAPRAVIMO NOVI SESSION ID SA USEROVIM ID

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        // sanitizamo samo username jer ga nekom prilikom mozemo ispisati na stranicu
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION['last_regeneration'] = time();

        header("Location: ../../index.php?login=success");
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