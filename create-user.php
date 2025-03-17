<?php

require __DIR__ . '/config/connection-bd.php';

$email = $argv[1];
$password = $argv[2];
$hash =  password_hash($password, algo: PASSWORD_ARGON2ID);

$sqlQuery = 'INSERT INTO users (email, password) VALUES (:email, :password);';
$stmt = $pdo->prepare(query: $sqlQuery);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $hash );
$stmt->execute();

