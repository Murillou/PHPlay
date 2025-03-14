<?php

namespace Phplay\Mvc\Controller;

class LoginFormController implements Controller
{
    public function processRequest(): void
    {
        require_once __DIR__ . "/../../Views/login-form.php";
    }
}