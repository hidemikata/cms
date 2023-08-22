<?php

namespace Concrete\Package\ThemeMika;

defined('C5_EXECUTE') or die('Access Denied.');

use \Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use MikaSrc\MikaLogger\MikaServiceProvider;


class Controller extends Package
{
    protected $pkgHandle = 'theme_mika';
    protected $appVersionRequired = '8.5.1';
    protected $pkgVersion = '0.1';


    protected $pkgAutoloaderRegistries = ['src' => 'MikaSrc'];

    public function getPackageDescription()
    {
        return t('mika theme discription');
    }

    public function getPackageName()
    {
        return 'mikatheme';
    }

    public function install()
    {
        $pkg = parent::install();
        $this->installContentFile('install/theme.xml');
    }

    public function upgrade()
    {
        parent::upgrade();
        $this->installContentFile('install/theme.xml');
    }
    public function on_start()
    {
        $provider_list = $this->app->make('Concrete\Core\Foundation\Service\ProviderList');
        $provider_list->registerProvider(MikaServiceProvider::class);
    }
}
