<?php
namespace Concrete\Package\ThemeMika\Theme\ThemeMika;

use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die('Access Denied.');

class PageTheme extends Theme
{

    public function getThemeName()
    {
        return t('ThemeMika');
    }

    public function getThemeDescription()
    {
        return t('description');
    }

    public function registerAssets()
    {
        $this->requireAsset('jquery');
    }

}


