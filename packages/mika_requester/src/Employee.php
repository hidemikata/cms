<?php

namespace MikaRequester;

use MikaRequester\Response\EmployeeList;

class Employee extends AbstractApiRequester
{

    public function get_employee_list()
    {
        return new EmployeeList($this->get('/api/v1/employees'));
    }

    public function get_employee($id)
    {
        return new EmployeeList($this->get('/api/v1/employee/' . $id));
    }

    public function create()
    {
        return new EmployeeList($this->post('/api/api_test/test/1'));
    }
}
