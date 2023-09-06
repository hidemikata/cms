<?php

namespace MikaRequester;

use Symfony\Component\HttpClient\HttpClient;

abstract class AbstractApiRequester
{
    private $site;
    private $client;
    private $headers;
    private $body;

    public function __construct()
    {
        $packageObject = \Package::getByHandle('mika_requester');
        $this->site = $packageObject->getFileConfig()->get('app.url');

        $this->client = HttpClient::create();
    }
    public function setHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }
    public function setBody($body)
    {
        $this->body = $body;
    }

    protected function post($url)
    {
        return $this->client->request('POST', $this->site . $url, ['body' => $this->body, 'headers' => $this->headers]);
    }
    protected function get($url)
    {
        return $this->client->request('GET', $this->site . $url, ['headers' => $this->headers]);
    }
}
