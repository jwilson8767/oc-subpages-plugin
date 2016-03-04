<?php namespace Jwilson8767\Subpages\Components;

use Cms\Classes\CmsException;
use Cms\Classes\CodeBase;
use Cms\Classes\ComponentBase;
use League\Flysystem\Exception;
use RainLab\Pages\Classes\Page;
use RainLab\Pages\Classes\Snippet;

class Subpages extends ComponentBase
{
    /** @var  $pages Page[] */
    protected $pages = [];

    protected $theme;

    public function componentDetails()
    {
        return [
            'name'        => 'Subpages Component',
            'description' => 'Embeds subpage contents into the current page',
        ];
    }

    public function defineProperties()
    {
        return ['page' => [
            'title'   => 'Page',
            'type'    => 'dropdown',
            'comment' => 'Leave blank for current page',
            'default' => '',
        ]];
    }

    public function getPageOptions()
    {
        return ['' => 'current page'] + Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        if ($this->property('page')) {
            //attempt to load the named static page's children
            $this->pages = Page::find($this->property('page'))->getChildren();
        }
        else {
            //attempt to load the current page's children
            if (isset($this->page->page->apiBag['staticPage']) && $this->page->page->apiBag['staticPage'] instanceof Page) {
                $this->pages = $this->page->page->apiBag['staticPage']->getChildren();
            }
            else {
                throw new \Exception('Subpages component used on non-Static Pages page without page name');
            }
        }
    }

    public function onRender()
    {
        ob_start();
        foreach ($this->pages as $page) {
            $page->initCmsComponents($this->controller);

            echo $this->renderPartial('subpages::subpage.htm', ['page' => $page]);
        }
        return ob_get_clean();
    }

}