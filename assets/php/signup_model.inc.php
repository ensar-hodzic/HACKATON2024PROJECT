<?php

// MODEL ZA QUERIANJE BAZE

declare(strict_types=1);

function getUsername(object $pdo, string $username) {

    // OVAJ FORMAT SA PREPARE STATEMENT SE RADI IZ SIGURNOSNIH RAZLOGA: PRVO QUERIJAMO NEKE PODATKE IZ BAZE, ONDA BINDAMO POTENCIJALNO OPASNE INPUTE SA bindParam() KOJI NECE ICI DIREKTNO U BAZU

    $query = "SELECT username FROM users WHERE username = :username;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":username", $username);
    $statement->execute();

    // fetch() samo uzme prvi result, fetchAll uzme sve, ovdje samo za 1 provjeravamo
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(object $pdo, string $email) {
    $query = "SELECT email FROM users WHERE email = :email;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":email", $email);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo, string $username, string $pwd, string $email) {
    $query = "INSERT INTO users(username, pwd, email) VALUES (:username, :pwd, :email);";
    $statement = $pdo->prepare($query);

    $options = [
        "cost" => 12
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);


    $statement->bindParam(":username", $username);
    $statement->bindParam(":pwd", $hashedPwd);
    $statement->bindParam(":email", $email);
    $statement->execute();
}