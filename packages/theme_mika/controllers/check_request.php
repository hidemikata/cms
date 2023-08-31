<?php

namespace Concrete\Package\ThemeMika\Controller;

use Controller;
use Psr\Log\LoggerInterface;

class CheckRequest extends Controller
{
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function check()
    {
        $this->logger->debug('check');
        $request = $this->getRequest(); //controller内ですでにgetInstanceしてsymfonyのインスタンスを持ってるのでそれをもらう
        var_dump($request->get('hoge')); //クエリーパラメータの取得
        foreach ($request->headers as $key => $value) { //ヘッダの取得
            var_dump($key);
            var_dump($value);
            echo "<br>";
        }
        var_dump($request->getContent()); //クエリーパラメータの取得文字列で取れる。

    }
}
