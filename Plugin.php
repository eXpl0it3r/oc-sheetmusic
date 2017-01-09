<?php

namespace Lukas\Sheetmusic;

class Plugin extends \System\Classes\Pluginbase
{
	public function pluginDetails()
	{
		return [
			'name' => 'Sheet Music Plugin',
			'description' => 'Adds features to manage sheet music for an orchestra or band.',
			'author' => 'Lukas Dürrenberger',
			'icon' => 'icon-music',
            'homepage' => 'https://my-gate.net'
		];
	}

	public function registerComponents()
	{
		return [
			'Lukas\Sheetmusic\Components\CategoryList' => 'categoryList'
		];
	}
}
