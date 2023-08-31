<?php

namespace MikaSrc\MikaLogger;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Foundation\Service\Provider as ServiceProvider;

class MikaServiceProvider extends ServiceProvider
{
    public function register()
    {

        //ロガーなのでシングルトン
        $this->app->singleton('mikalog', function ($app) {
            $mika_logger = new MikaLogger();
            return $mika_logger->getLogger();
        });

        $this->app->bind('mikalogger', 'mikalog');
        $this->app->bind('Psr\Log\LoggerInterface', 'mikalog');
        $this->app->bind('Concrete\Core\Logging\Logger', 'mikalog');
    }
}
