<?php

namespace MikaSrc\MikaEditor;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Asset\AssetList;
use Concrete\Core\Editor\Plugin;
use Concrete\Core\Foundation\Service\Provider as ServiceProvider;

class MikaEditorServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $app = \Concrete\Core\Support\Facade\Facade::getFacadeApplication();
        $ckeditor = $this->app->make('editor');
        $pluginManger = $ckeditor->getPluginManager();
        $al = AssetList::getInstance();
        
        $al->register('javascript', 'editor/ckeditor4/codepre',  'js/ckeditor/plugins/codepre/register.js', array(), 'theme_mika');
        $al->registerGroup('editor/ckeditor4/codepre', array( array('javascript', 'editor/ckeditor4/codepre')));
        
        
        $editorPlugin = new Plugin();
        $editorPlugin->setKey('codepre');
        $editorPlugin->setName('codeprename');
        
        $editorPlugin->requireAsset('editor/ckeditor4/codepre');
        
        $editorPlugin->setDescription('codepre description');
        $pluginManger->register($editorPlugin);
    }
}
