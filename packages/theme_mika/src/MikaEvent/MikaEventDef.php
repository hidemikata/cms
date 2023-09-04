<?php

namespace MikaSrc\MikaEvent;

defined('C5_EXECUTE') or die('Access Denied.');

use Symfony\Contracts\EventDispatcher\Event;


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
