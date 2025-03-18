<?php

namespace Phplay\Mvc\Controller;

abstract class ControllerWithHtml implements Controller
{
    private const TEMPLATE_PATH = __DIR__ . '/../../Views/';
    protected function renderTemplate(string $templateName, array $context = []): void
    {
        extract($context);
        require_once self::TEMPLATE_PATH . $templateName . '.php';
    }
}