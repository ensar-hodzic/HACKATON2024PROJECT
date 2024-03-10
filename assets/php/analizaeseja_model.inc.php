<?php

declare(strict_types = 1);

function setEssay(object $pdo, string $userId, string $title, string $text) {
    $query = "INSERT INTO essays(users_id, essay_title, essay_text) VALUES (:userId, :title, :essayText);";
    $statement = $pdo->prepare($query);



    $statement->bindParam(":userId", $userId);
    $statement->bindParam(":title", $title);
    $statement->bindParam(":essayText", $text);
    $statement->execute();
}