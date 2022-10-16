<?php

namespace CMS\Core;

class Controller
{
    public function render($view, $params=[])
    {
        return application::$app->router->renderView($view, $params);
    }
}