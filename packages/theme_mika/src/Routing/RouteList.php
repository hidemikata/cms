<?php

namespace MikaSrc\Routing;

use Concrete\Core\Routing\RouteListInterface;
use MikaSrc\Http\Middleware\MySampleMiddleware;

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

        $router->buildGroup()
            ->setPrefix('/block_api')
            ->setNamespace('Concrete\Package\ThemeMika\Block\BasicTest')
            ->routes('in_block.php', 'theme_mika');

        $router->buildGroup()
            ->setPrefix('/api')
            ->setNamespace('Concrete\Package\ThemeMika\Controller')
            ->routes('cache_test.php', 'theme_mika');

        $router->buildGroup()
            ->setPrefix('/api')
            ->setNamespace('Concrete\Package\ThemeMika\Controller')
            ->routes('request_test.php', 'theme_mika');

        $router->buildGroup()
            ->setPrefix('/api')
            ->setNamespace('Concrete\Package\ThemeMika\Controller')
            ->addMiddleware(MySampleMiddleware::class)
            ->routes('middleware_test.php', 'theme_mika');
    }
}
