<?php

namespace Concrete\Package\ThemeMika\Controller;

use Controller;
use User;
use MikaSrc\MikaLogger\MikaLogger;
use Psr\Log\LoggerInterface;

class ApiTest extends Controller
{
    protected $viewPath = '/api_test_view';

    private $logger;
    public function __construct(User $user, LoggerInterface $logger)
    {
        //dipendency injectionも可能ぽい
        $this->logger = $logger;
    }

    public function test($param1)
    {
        $this->logger->debug('test');
        var_dump('test');
        $this->set('foo', $param1);
    }

    public function test2($param2)
    {
        $this->logger->debug($param2);

        var_dump('test');
        $this->set('foo', $param2);
    }
}
