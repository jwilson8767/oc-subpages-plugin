OctoberCms Subpages Plugin
==========================

- [Overview](#introduction)
    - [Pre-requisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
    - [In Static Pages](static-pages)
    - [In Cmd Pages](cms-pages)
    
<a name="introduction"></a>
##Introduction
The Subpages plugin adds a component/snippet to allow you to embed subpages of one static page into other pages. For example, if you have a series of product pages and a home page, you can embed the contents of the product pages on the home page.

<a name="prerequisites"></a>
####Pre-requisites:
 - Rainlab Pages plugin

<a name="installation"></a>
##Installation
The plugin is available on the marketplace or via `php artisan plugin:install Jwilson8767.Subpages`. If you would like to install the dev version you can do so by cloning the github repository and running `php artisan plugin:refresh Jwilson8767.Subpages`

<a name="usage"></a>
##Usage
<a name="static-pages"></a>
###In Static Pages
Open the page you would like to embed pages into, hover over the "Snippets" menu on the left, then click "Subpages". The Snippet will be inserted into your page. By default it will use the current page's children, if you click it you can select an alternate page to pull children from. Thats all!
<a name="cms-pages"></a>
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
