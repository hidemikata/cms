<?php

namespace Concrete\Package\ThemeMika\Controller;

use Controller;
use Concrete\Core\Support\Facade\Facade;
use MikaRequester\Employee;

class RequestTest extends Controller
{
    public function test($param1)
    {
        var_dump('test');
        $app = Facade::getFacadeApplication();
        $mr = $app->make(Employee::class);
        /*
        $res = $mr->get_employee_list();

        $list = $res->getData();
        foreach ($list as $val) {
            var_dump($val);
        }

        $res = $mr->get_employee(1);
        $list = $res->getData();
        foreach ($list as $val) {
            var_dump($val);
        }
        */
        $mr->setHeader('testheader', 'testbody');
        $mr->setBody('{"name":"test","salary":"123","age":"41"}');
        $res = $mr->create();
        if ($res->getStatusCode() != 200) {
            var_dump('error' . $res->getStatusCode());
            exit;
        }
        //var_dump($res);
        //var_dump($res->getData());
    }
}
