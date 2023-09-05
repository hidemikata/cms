<?php

namespace Concrete\Package\ThemeMika\Block\BasicTest;

use Concrete\Core\Block\BlockController;
use Controller;
use Environment;

class BlockApiAjax extends Controller
{
	private $block_path = 'blocks/basic_test';
	protected $viewPath = '/api_view';

	public function test()
	{
		$env = Environment::get();
		$innerContentFilePath = $env->getPath($this->block_path . $this->viewPath . '.php', 'theme_mika');
		$view = $this->getViewObject();
		$view->setInnerContentFile($innerContentFilePath);

		var_dump('test');
	}
}
