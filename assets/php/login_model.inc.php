<?php

declare(strict_types = 1);

function getUser(object $pdo, string $username) {
    $query = "SELECT * FROM users WHERE username = :username;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":username", $username);
    $statement->execute();

    // fetch() samo uzme prvi result(1 row), fetchAll uzme sve, ovdje samo za 1 provjeravamo
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
    // ako ima result, vrati nam array, ako nema, vrati nam boolean
}