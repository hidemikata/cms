<?php

namespace MikaSrc\Routing;

use Concrete\Core\Routing\RouteListInterface;

class RouteList implements RouteListInterface
{
    public function loadRoutes($router)
    {
        $router->buildGroup()
            ->setPrefix('/api')
            ->setNamespace('Concrete\Package\ThemeMika\Controller')
            ->routes('test.php', 'theme_mika');
        /*
        その２
        $router->buildGroup()
        ->setPrefix('/api')
        ->setNamespace('Concrete\Package\ThemeMika\Controller')
        ->routes('test.php', 'theme_mika');
        */
    }
}
