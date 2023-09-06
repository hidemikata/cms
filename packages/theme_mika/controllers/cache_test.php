<?php

namespace Concrete\Package\ThemeMika\Controller;

use Controller;

class CacheTest extends Controller
{
    public function normal($param1)
    {
        //たぶんconfigで設定しないと動かん
    }
    public function requestCache($param1)
    {

        $normalCache = \Core::make('cache/request');
        $order_user_cache = $normalCache->getItem('Order/User/Request' . $param1);

        if ($order_user_cache->isMiss()) { //必ずmiss
            var_dump('miss');
            $order_user_cache->lock();
            $db = \Database::connection();
            $u = $db->executeQuery('SELECT * FROM order_users where order_id=' . $param1);
            $info = $u->fetchAll();
            $normalCache->save($order_user_cache->set($info)->expiresAfter(100));
        }

        $order_user_cache2 = $normalCache->getItem('Order/User/Request' . $param1);

        if (!$order_user_cache2->isMiss()) { //必ずhit
            var_dump('hit');
            $info = $order_user_cache2->get();
        }
        var_dump($info);
    }
    public function expensive($param1)
    {
        $normalCache = \Core::make('cache/expensive');
        $order_user_cache = $normalCache->getItem('Order/User' . $param1);

        if ($order_user_cache->isMiss()) {
            var_dump('miss');
            $order_user_cache->lock();
            $db = \Database::connection();
            $u = $db->executeQuery('SELECT * FROM order_users where order_id=' . $param1);
            $info = $u->fetchAll();
            $normalCache->save($order_user_cache->set($info)->expiresAfter(100));
        } else {
            var_dump('hit');
            $info = $order_user_cache->get();
        }
        var_dump($info);
    }
}
