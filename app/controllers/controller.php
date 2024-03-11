<?php

namespace app\controllers;

class controller
{
    protected function view(string $string ,array $data = [])
    {
        extract($data);
        require_once "../views/{$string}.view.php";
    }
}