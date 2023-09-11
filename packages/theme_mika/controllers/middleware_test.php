<?php

namespace Concrete\Package\ThemeMika\Controller;

use Controller;
use Concrete\Core\Support\Facade\Facade;
use MikaRequester\Employee;

class MiddlewareTest extends Controller
{
    public function test($param1)
    {
        var_dump('MiddlewareTest test');
    }
}
