<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController
{
    public function __construction() {} //optional
    public function indexAction(): void
    {
        echo "Olá mundo, estou dentro de uma action, dentro do controller";
    }
}