<?php namespace Jwilson8767\Subpages;

use App;
use Backend;
use Exception;
use October\Rain\Exception\AjaxException;
use System\Classes\PluginBase;

/**
 * Subpages Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['Rainlab.Pages'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Subpages',
            'description' => 'Adds components to allow embedding static pages\' children',
            'author'      => 'Jwilson8767',
            'icon'        => 'icon-sitemap',
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Jwilson8767\Subpages\Components\Subpages' => 'subpages',
        ];
    }

    public function registerPageSnippets()
    {
        return [
            'Jwilson8767\Subpages\Components\Subpages' => 'subpages',
        ];
    }


}
