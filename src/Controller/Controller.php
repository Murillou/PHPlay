<?php

namespace Phplay\Mvc\Controller;

interface Controller
{
  public function processRequest(): void;
}