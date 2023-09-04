<?php

namespace MikaSrc\MikaEvent;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Foundation\Service\Provider as ServiceProvider;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\Event;
use Concrete\Core\Support\Facade\Events;


class MikaEventDef extends Event
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function setData($key, $val)
    {
        $this->data[$key] = $val;
        return $this->data;
    }

    public function getData($key)
    {
        if (!array_key_exists($key, $this->data)) {
            return null;
        }
        return $this->data[$key];
    }
}
