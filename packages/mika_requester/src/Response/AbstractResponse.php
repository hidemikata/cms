<?php

namespace MikaRequester\Response;

use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractResponse
{
    protected $data;
    public function __construct(ResponseInterface $data)
    {
        $this->data = $data;
    }
    public function getStatusCode()
    {
        return $this->data->getStatusCode();
    }
}
