<?php

namespace Concrete\Package\MikaRequester;

defined('C5_EXECUTE') or die('Access Denied.');

use \Concrete\Core\Package\Package;
use Route;


class Controller extends Package
{
    protected $pkgHandle = 'mika_requester';
    protected $appVersionRequired = '8.5.1';
    protected $pkgVersion = '0.1';


    protected $pkgAutoloaderRegistries = ['src' => 'MikaRequester'];

    public function getPackageDescription()
    {
        return t('mika requester discription');
    }

    public function getPackageName()
    {
        return 'mika_requester';
    }

    public function install()
    {
        $pkg = parent::install();
    }

    public function upgrade()
    {
        parent::upgrade();
    }
    public function on_start()
    {
    }
}
