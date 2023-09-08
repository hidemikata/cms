<?php

namespace Concrete\Package\MikaTask;

defined('C5_EXECUTE') or die('Access Denied.');

use \Concrete\Core\Package\Package;
use Concrete\Core\Command\Task\Manager as TaskManager;
use MikaTask\Command\Task\Controller\SampleMikaTaskController;
use MikaTask\Hoge\Hoge;
use  MikaTask\Command\SampleMikaCommand;


class Controller extends Package
{
    protected $pkgHandle = 'mika_task';
    protected $appVersionRequired = '8.5.1';
    protected $pkgVersion = '0.1';


    protected $pkgAutoloaderRegistries = ['src' => 'MikaTask'];

    public function getPackageDescription()
    {
        return t('mika task discription');
    }

    public function getPackageName()
    {
        return 'mika_task';
    }

    public function install()
    {
        $pkg = parent::install();
        $this->installContentFile('config/tasks.xml');
    }

    public function upgrade()
    {
        parent::upgrade();
        $this->installContentFile('config/tasks.xml');
    }
    public function on_start()
    {
        $manager = $this->app->make(TaskManager::class);
        $manager->extend('sample_mika_task', function () {
            return new SampleMikaTaskController();
        });

        //コマンドを任意の場所から実行するばあい
        $this->app->executeCommand(new SampleMikaCommand());
        //もしくは
        $app = app();
        $command = new SampleMikaCommand();
        $app->executeCommand($command);
    }
}
