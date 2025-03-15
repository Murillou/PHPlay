<?php

namespace Phplay\Mvc\Controller;

class LoginFormController implements Controller
{
    public function processRequest(): void
    {
        if ($_SESSION['logado'] === true) {
            header('Location: /');
        }
        require_once __DIR__ . "/../../Views/login-form.php";
    }
}