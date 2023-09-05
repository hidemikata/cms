<?php

namespace Concrete\Package\ThemeMika\Block\BasicTest;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
	protected $btTable = 'btBasicTest';
	protected $content;

	public function getBlockTypeName()
	{
		return 'Hello World';
	}

	public function getBlockTypeDescription()
	{
		return 'This is my sample block.';
	}
	public function view()
	{
		$this->set('content', $this->content);
	}
}
