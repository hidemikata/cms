<?php

namespace MikaSrc\MikaEvent;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Foundation\Service\Provider as ServiceProvider;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\Event;
use Concrete\Core\Support\Facade\Events;


class MikaEventServiceProvider extends ServiceProvider
{
    public function register()
    {
        //$dispatcher = \Core::make(EventDispatcherInterface::class);
        //$dispatcher->addListener()でもかける。
        Events::addListener('on_recieve_event', function (Event $event) {
            var_dump('on_recieve_event');
            var_dump($event->getData('test_key1'));
        });

        //subscriberの場合。
        $subscriber = new MikaEventSubscriber(); //サブスクライバーをnewしてadd.
        Events::addSubscriber($subscriber);
    }
}
