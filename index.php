<?php
/*
 * SCSS Boilerplate
 * 
 * @package @pablorica/scss
 * @author Pablo Rica
 * @copyright 2022 Pablo Rica
 * @license GPL-2.0-or-later 
 * 
 * Description: SCSS boilerplate with common functions, mixins, helpers and patterns
 * Version: 1.5.2.3
 * Author: Pablo Rica
 * Author URI: http://codigo.co.uk/pablo-rica
 * License: GPLv2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt 
*/

define('VERSION','1.6.5');
define('BASE_URL','http://localhost/tutorials/vue/');
define('STYLESHEET',BASE_URL.'public/css/style.css?v='.VERSION);
define('JSSCRIPT',BASE_URL.'public/js/main.js?v='.VERSION);


include('header.php');

if(isset($_GET['page'])) {
    include('pages/'.$_GET['page'].'.php');
} else {
?>
    <section id = "main">

    <h2>Chapter 1: Vue.js Essentials</h2> 
    <hr/>
        
        <ul class="sl-l-grid"> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=vue-spa">Vue SPA's</a></h2> 
                <p>In this section we will introduce how to scaffold a Vue Single Page Application on your local machine. The created project will be using a build setup based on Vite and allow us to use Vue Single-File Components.</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=vue-cdn">From a CDN</a></h2> 
                <p>You can use Vue directly from a CDN via a script tag</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><span class="caps">CSS</span>&nbsp;Compatible</h2> 
                <p>Sass is completely compatible with all versions of <span class="caps">CSS.</span> We take&nbsp;this compatibility seriously, so that you can seamlessly use any&nbsp;available <span class="caps">CSS</span>&nbsp;libraries.</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><span class="caps">CSS</span>&nbsp;Compatible</h2> 
                <p>Sass is completely compatible with all versions of <span class="caps">CSS.</span> We take&nbsp;this compatibility seriously, so that you can seamlessly use any&nbsp;available <span class="caps">CSS</span>&nbsp;libraries.</p> 
            </li>
        </ul> 
        
    </section>
<?php 
}

include('footer.php'); ?>