<?php namespace Ainul\JobApplication;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

    	return [
    		'Ainul\JobApplication\Components\JobApplication' => 'jobapplication'
    	];

    }

    public function registerSettings()
    {
    }
}
