<?php

namespace Phplay\Mvc\Controller;

use Phplay\Mvc\Repository\UsersRepository;

class AuthController implements Controller
{
    public function __construct(private UsersRepository $userRepository) {}
    public function processRequest(): void
    {
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
      if ($email === false) {
          header('Location: /login?sucesso=0');
          exit();
      }
      
      $password = filter_input(INPUT_POST, 'password');
      if (!$password) {
          header('Location: /login?sucesso=0');
          exit();
        }

      $user = $this->userRepository->authenticateUser($email, $password);

      
      if (!$user) {
          header('Location: /login');
          exit();
      }
      $_SESSION['logado'] = true;
      header('Location: /');
    }
}