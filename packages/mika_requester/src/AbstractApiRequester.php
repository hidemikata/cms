<?php

namespace MikaRequester;

use Symfony\Component\HttpClient\HttpClient;
use Concrete\Core\Application\ApplicationAwareInterface;
use Concrete\Core\Application\ApplicationAwareTrait;
use Concrete\Core\Application\Application;

abstract class AbstractApiRequester implements ApplicationAwareInterface
{
    use ApplicationAwareTrait;

    private $site;
    private $client;
    private $headers;
    private $body;


    public function __construct(Application $app)
    {
        $packageObject = \Package::getByHandle('mika_requester');
        $this->site = $packageObject->getFileConfig()->get('app.url');

        $this->client = HttpClient::create();
        $app->make('config');
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
