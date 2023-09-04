<?php

namespace MikaSrc\MikaEvent;

defined('C5_EXECUTE') or die('Access Denied.');

use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class MikaEventSubscriber implements EventSubscriberInterface //インタフェースをimplements
{
    public static function getSubscribedEvents(): array
    {
        return [
            MikaEventDef::class => [
                ['test_subscriber_func1', 10], //ここに書いたものが順次実行
                ['test_subscriber_func2', 11], //値が大きい方から順に実行される
            ]
        ];
    }
    public function test_subscriber_func1(MikaEventDef $event)
    {
        var_dump('test_subscriber_func1 called');
    }
    public function test_subscriber_func2(MikaEventDef $event)
    {
        var_dump('test_subscriber_func2 called');
    }
}
