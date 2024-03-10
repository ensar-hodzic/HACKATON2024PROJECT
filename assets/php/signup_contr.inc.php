<?php

declare(strict_types=1);

function isInputEmpty(string $username, string $password, string $email) {
    if(empty($username) || empty($password) || empty($email)) {
        return true;
    } else {
        return false;
    }
} 

function isEmailInvalid(string $email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; // AKO NIJE VALID -> RETURN TRUE
    } else {
        return false;
    }
}

function isUsernameTaken(object $pdo, string $username): bool {
    if(getUsername($pdo, $username)) { // if(ANY DATA PRESENT) -> TRUE
        return true;
    } else {
        return false; 
    }
}

function isEmailRegistered(object $pdo, string $email): bool {
    if(getEmail($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function createUser(object $pdo, string $username, string $pwd, string $email) {
    setUser($pdo, $username, $pwd, $email);
}