<?php

namespace Phplay\Mvc\Repository;
use PDO;
use PDOException;
use Phplay\Mvc\Model\Users;
use RuntimeException;

class UsersRepository
{
    private PDO $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function authenticateUser(string $email, string $password): ?Users {
      try{
          $sqlQuery = "SELECT * FROM users WHERE email = :email LIMIT 1";
          $stmt = $this->pdo->prepare($sqlQuery);
          $stmt->bindValue(':email', $email, PDO::PARAM_STR);
          $stmt->execute();
          $userData = $stmt->fetch();

          $correctPassword = password_verify($password, $userData['password'] ?? '');
          
          if (!$userData) {
            return null;
          }

          if (!$correctPassword) {
            return null;
          }

          return new Users($userData['id'], $userData['email'], $userData['password']);

      } catch(PDOException $error) {
          throw new RuntimeException('Erro ao autenticar usuário: ' . $error->getMessage());
      }
    }

}