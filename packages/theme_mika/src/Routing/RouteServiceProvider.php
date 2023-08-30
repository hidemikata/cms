<?php

namespace MikaSrc\Routing;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Foundation\Service\Provider as ServiceProvider;
use Concrete\Core\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $router = $this->app->make(Router::class);
        $list = new RouteList();
        $list->loadRoutes($router);
    }
}
