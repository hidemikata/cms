<?php

namespace Concrete\Package\ThemeMika\Controller;

use Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use MikaSrc\MikaEvent\MikaEventDef;

class EventFunc extends Controller
{
    public function call($param1)
    {
        var_dump('called api callfunc.');
        $dispatcher = \Core::make(EventDispatcherInterface::class);
        $event = new MikaEventDef();
        $event->setData('test_key1', 'test_val1');
        $event->setData('test_key2', 'test_val2');

        $dispatcher->dispatch($event, 'on_recieve_event');
    }
    public function call_subscriber($param1)
    {
        var_dump('called api call_subscriber.');
        $dispatcher = \Core::make(EventDispatcherInterface::class);
        $event = new MikaEventDef();
        $event->setData('test_key1', 'test_val1');
        $event->setData('test_key2', 'test_val2');

        //サブスクライバー
        $dispatcher->dispatch($event, MikaEventDef::class);
    }
}
