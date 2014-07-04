<?php namespace Sensecomentaris\Uikit;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Uikit',
            'description' => '',
            'author'      => '',
            'icon'        => 'icon-gears'
        ];
    }


    public function registerComponents()
    {
        return [
           '\Sensecomentaris\Uikit\Components\Uikit' => 'uikit'
        ];
    }    
}