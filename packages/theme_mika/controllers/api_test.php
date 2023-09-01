<?php

namespace Concrete\Package\ThemeMika\Controller;

use Controller;
use User;
use Config;
use Package;
use MikaSrc\MikaLogger\MikaLogger;
use Psr\Log\LoggerInterface;
use Concrete\Core\Config\Repository\Repository;

class ApiTest extends Controller
{
    protected $viewPath = '/api_test_view';

    private $logger;
    private $config;
    public function __construct(User $user, LoggerInterface $logger, Repository $config) //configをインジェクションしてみたり。
    {
        //dipendency injectionも可能ぽい
        $this->logger = $logger;
        var_dump($config->get('app.test_key'));
        $this->config = $config;
    }

    public function test($param1)
    {
        $this->logger->debug('test');
        var_dump('test');
        $this->set('foo', $param1);
    }

    public function test2($param2)
    {
        $this->logger->debug($param2);

        var_dump('test');
        $this->set('foo', $param2);
    }
    public function config_test()
    {
        $config = \Core::make('config'); //configとか
        var_dump($config->get('concrete.log.configuration.mode'));
        var_dump($config->getEnvironment());
        var_dump($config->get('app.test_key'));

        var_dump(Config::get('concrete.log')); //Config::でとったり
        var_dump(Config::get('concrete.log.configuration.mode'));
        var_dump(Config::get('app.test_key'));

        $config = \Core::make(Repository::class); //Repositoryとか
        var_dump($config->get('app.test_key'));

        $config = \Core::make('config');
        var_dump($config->get('dir/dir_test.dir_key')); //サブディレクトリにファイル作ったり。
        //ファイルは環境名で勝手に読み込んでくれるが、意図したのがなかったらないやつ読みにいくくさい

        //パッケージに作って読み取る場合
        $packageObject = Package::getByHandle('theme_mika');
        var_dump($packageObject->getFileConfig()->get('app'));
    }
}
