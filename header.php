<?php
/**
 * Header
 *
 * @package @pablorica/scss
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vue.js boilerplate</title>
        <link rel="stylesheet" href="<?=STYLESHEET?>" />

        <link rel="apple-touch-icon" sizes="180x180" href="<?=BASE_URL?>/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=BASE_URL?>/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=BASE_URL?>/favicon-16x16.png">
        <link rel="manifest" href="<?=BASE_URL?>/site.webmanifest">

        <!-- highlight.js -->
        <link 
            rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/dark.min.css"
        >
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
        <script>hljs.highlightAll();</script>

    </head>
    <body>

        <div class="container">


            <header role="banner"> 
                <div class="banner-container"> 
                    <div class="banner-container__brand"> 
                        <a href="<?=BASE_URL?>"><img alt="Sass" src="<?=BASE_URL?>/public/img/logo.png" height="48"> </a>
                    </div> 
                    <h1 class="banner-container__title"><a href="<?=BASE_URL?>">Vue.js Boilerplate</a></h1> 
                        <nav 
                            aria-label="Site navigation" 
                            class="banner-container__menu" 
                            itemscope="itemscope" 
                            itemtype="http://schema.org/SiteNavigationElement" 
                            role="navigation"
                        > 
                            <ul> 
                                <li><a href="http://localhost/tutorials/laravel-vue-crud/public/posts" target="_blank">Programming manual</a></li> 
                            </ul> 
                        </nav>
                </div> 
            </header>

