<?php

namespace MikaRequester\Response;

use Symfony\Contracts\HttpClient\ResponseInterface;

class EmployeeList extends AbstractResponse
{
    public function getData()
    {
        $body = $this->data->getContent(); //str
        if (is_null($body)) {
            return null;
        }
        $body = json_decode($body, true);

        if (is_null($body)) {
            return null;
        }
        //dummy.restapiexample.comがdataの中に入って返却される。
        if (array_key_exists('data', $body)) {
            return $body['data'];
        }
        return null;
    }
}
