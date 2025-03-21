<?php

namespace Phplay\Mvc\Controller;

class LoginFormController extends ControllerWithHtml implements Controller
{
    public function processRequest(): void
    {
        if (array_key_exists('logado', $_SESSION) && $_SESSION['logado'] === true) {
            header('Location: /');
        }
        echo $this->renderTemplate('login-form');
    }
}
