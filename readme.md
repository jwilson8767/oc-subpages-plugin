OctoberCms Subpages Plugin
==========================

##Overview
The Subpages plugin adds a component/snippet to allow you to embed subpages of one static page into other pages.

####Prerequisites:
 - Rainlab Pages plugin
 
##Installation
The plugin is available on the marketplace or via `php artisan plugin:install Jwilson8767.Subpages`. If you would like to install the dev version you can do so by cloning the github repository and running `php artisan plugin:refresh Jwilson8767.Subpages`

##Usage

###In Static Pages
Open the page you would like to embed pages into, hover over the "Snippets" menu on the left, then click "Subpages". The Snippet will be inserted into your page. By default it will use the current page's children, if you click it you can select an alternate page to pull children from. Thats all!

###In Cms Pages
Use this example page:
```````````````````
url = "/subpage"
title = "Subpage Example"
layout = "default"

[subpages]
page='/events'
==
//php code block
==
<div class="container">
    {% component 'subpages' %}
</div>
```````````````````
