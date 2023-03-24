<?php

namespace Agneswagey\MovieApi\App;

class View
{
    public static function render(string $view, $data)
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }

    public static function renderTemplate(string $view, $data)
    {
        require __DIR__ . '/../View/templates/' . $view . '.php';
    }
}