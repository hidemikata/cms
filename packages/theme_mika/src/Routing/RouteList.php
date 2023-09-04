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

        $router->buildGroup()
            ->setPrefix('/api')
            ->setNamespace('Concrete\Package\ThemeMika\Controller')
            ->routes('check_request.php', 'theme_mika');

        $router->buildGroup()
            ->setPrefix('/api')
            ->setNamespace('Concrete\Package\ThemeMika\Controller')
            ->routes('event.php', 'theme_mika');
    }
}
