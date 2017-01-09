<?php

namespace Lukas\Sheetmusic\Components;

class CategoryList extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Category List',
            'description' => 'Displays all the sheet music categories as a list.'
        ];
    }
}
