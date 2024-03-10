<?php

// prihvacamo i boolean i array, boolean ce biti ako nemamo result(false)
function isUsernameWrong(bool|array $result) {
    if(!$result) {
        return true;
    } else {
        return false;
    }
}

function isPasswordWrong(string $pwd, string $hashedPwd) {
    if(!password_verify($pwd, $hashedPwd)) {
        return true;
    } else {
        return false;
    }
}

function isInputEmpty(string $username, string $password) {
    if(empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
} 