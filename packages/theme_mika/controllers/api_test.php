<?php

namespace Concrete\Package\ThemeMika\Controller;

use Controller;

class ApiTest extends Controller
{
    protected $viewPath = '/api_test_view';

    public function test($param1)
    {
        var_dump('test');
        $this->set('foo', $param1);
    }
}