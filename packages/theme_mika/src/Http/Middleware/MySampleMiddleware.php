<?php

namespace MikaSrc\Http\Middleware;

use Concrete\Core\Http\Middleware\DelegateInterface;
use Concrete\Core\Http\Middleware\MiddlewareInterface;
use Symfony\Component\HttpFoundation\Request;

class MySampleMiddleware implements MiddlewareInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(Request $request, DelegateInterface $frame)
    {
        //リファラーチェックするとか。
        return $frame->next($request);
    }
}
