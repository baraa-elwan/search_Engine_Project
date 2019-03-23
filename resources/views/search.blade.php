<!DOCTYPE html>
<!-- saved from url=(0030)http://tntsearch.tntstudio.us/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A showcase for TNTSearch engine">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>TNT Search</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="http://tntsearch.tntstudio.us/images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="http://tntsearch.tntstudio.us/images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="http://tntsearch.tntstudio.us/images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="./tntSearch_files/css">
    <link rel="stylesheet" href="./tntSearch_files/icon">
    <link rel="stylesheet" href="./tntSearch_files/material.blue-pink.min.css">
    <link rel="stylesheet" href="./tntSearch_files/styles.css">

    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
</head>
<body id="app" datasqstyle="{&quot;paddingTop&quot;:null}" datasquuid="25eaa3d5-ed27-4775-adf8-6eb5acf9ca93" style="padding-top: 40px;">
<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout">
    <header class="demo-header mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Search Engine</span>
            {{--<nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link is-active" href="http://tntsearch.tntstudio.us/#">About</a>
                <a class="mdl-navigation__link" href="http://tntsearch.tntstudio.us/#">FAQ</a>
            </nav>--}}
            <div class="devsite-search-wrapper">
                <form class="devsite-search-form" id="top-search">
                    <div id="searchbox" class="devsite-searchbox">
                        <input placeholder="Search for your document" type="text" class="devsite-search-field devsite-search-query" name="q" autocomplete="off">
                        {{--<div class="devsite-search-image material-icons"></div>
--}}
                    </div>
                </form>
            </div>
            <li class="sub-menu"><a href="{{route('createIndex')}}">
                    <i class="glyphicon glyphicon-file"></i>
                    Create Index
                </a>
            </li>
        </div>
    </header>
    <div class="demo-ribbon banner"></div>

    <main class="demo-main mdl-layout__content mdl-demo">
        <div class="demo-container mdl-grid">
            <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <div class="demo-content mdl-color--white content  mdl-cell mdl-cell--8-col">

                <div class="mdl-shadow--4dp intro">
                    <h3>NEW YORK Search</h3>
                    <h4>TNTSearch is a fully featured full text search engine written in PHP</h4>
                    <p>This page is intended to show the powerfull search capabilities of the engine.
                        You can try to search for any TV Show you can think of. The indexed database consists of 57000 shows
                        and 130000 actors. It is posible to search by series name, actor name or genre.</p>

                    <p>
                        <img  width=600px height=400px src="./tntSearch_files/relevancy.png" alt="">
                    </p>
                </div>



            </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">

        </footer>
    </main>
</div>
{{--<a href="https://github.com/teamtnt/tntsearch" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast" datasqstyle="{&quot;top&quot;:null}" datasquuid="25eaa3d5-ed27-4775-adf8-6eb5acf9ca93" datasqtop="621" style="top: 621px;">View Source</a>--}}
<script type="text/javascript" async="" src="./TNT Search_files/analytics.js.download"></script><script src="./TNT Search_files/app-1a1b6aead5.js.download"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            shows: []
        },
        methods: {
            search: function () {
                var that = this;
                $.post('/search',{query: this.searchInput}, function(res) {
                    that.shows = res.hits;
                });
            }
        }
    })
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./TNT Search_files/js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-39834309-5');
</script>




<div id="sqseobar2" class="sqseobar2-white sqseobar2-horizontal">
    <div class="sqseobar2-inner"><img src="chrome-extension://akdgnmcogleenhbclghghlkkdndkjdjc/static/svg/seoquake-icon.svg" class="sqseobar2-logo"><a class="sqseobar2-link sqseobar2-reloadButton sqseobar2-item-hidden"><span>Load all parameters</span></a><div class="sqseobar2-parameters">
            <div class="sqmore-container" style="width: 886px;"><div class="sqseobar2-parameters-container">
                    <div class="sqseobar2-parameterItemInline">
                        <span class="sqicn sqicn-google"></span>
                        <span class="sqseobar2-parameterItemInline-title sqseobar2-parameterItemInline-title-full">Google index</span>
                        <span class="sqseobar2-parameterItemInline-title">I</span>
                        <a href="https://www.google.com/search?hl=en&amp;safe=off&amp;q=site%3Atntsearch.tntstudio.us&amp;btnG=Search&amp;gws_rd=cr" target="_blank" class="seoquake-params-request">1</a>
                    </div>
                    <div class="sqseobar2-parameterItemInline">
                        <span class="sqicn sqicn-semrush"></span>
                        <span class="sqseobar2-parameterItemInline-title sqseobar2-parameterItemInline-title-full">SEMrush backlinks</span>
                        <span class="sqseobar2-parameterItemInline-title">L</span>
                        <a href="https://www.semrush.com/analytics/backlinks/backlinks/http%3A%2F%2Ftntsearch.tntstudio.us%2F:url?utm_source=seoquake&amp;utm_medium=toolbar&amp;utm_campaign=params&amp;ref=174537735" target="_blank" class="seoquake-params-request">656</a>
                    </div>
                    <div class="sqseobar2-parameterItemInline">
                        <span class="sqicn sqicn-semrush"></span>
                        <span class="sqseobar2-parameterItemInline-title sqseobar2-parameterItemInline-title-full">SEMrush subdomain backlinks</span>
                        <span class="sqseobar2-parameterItemInline-title">LD</span>
                        <a href="https://www.semrush.com/analytics/backlinks/backlinks/tntsearch.tntstudio.us:domain?utm_source=seoquake&amp;utm_medium=toolbar&amp;utm_campaign=params&amp;ref=174537735" target="_blank" class="seoquake-params-request">656</a>
                    </div>
                    <div class="sqseobar2-parameterItemInline">
                        <span class="sqicn sqicn-bing"></span>
                        <span class="sqseobar2-parameterItemInline-title sqseobar2-parameterItemInline-title-full">Bing index</span>
                        <span class="sqseobar2-parameterItemInline-title">I</span><a href="https://www.bing.com/search?q=site%3Atntsearch.tntstudio.us&amp;FORM=QBRE" target="_blank" class="seoquake-params-request">1</a></div>
                    <div class="sqseobar2-parameterItemInline"><span class="sqicn sqicn-alexa"></span>
                        <span class="sqseobar2-parameterItemInline-title sqseobar2-parameterItemInline-title-full">Alexa rank</span>
                        <span class="sqseobar2-parameterItemInline-title">Rank</span>
                        <a href="https://www.alexa.com/siteinfo/tntsearch.tntstudio.us" target="_blank" class="seoquake-params-request">3.95M</a>
                    </div>
                    <div class="sqseobar2-parameterItemInline">
                        <span class="sqicn sqicn-webarchive"></span>
                        <span class="sqseobar2-parameterItemInline-title sqseobar2-parameterItemInline-title-full">Webarchive age</span>
                        <span class="sqseobar2-parameterItemInline-title">Age</span>
                        <a href="https://web.archive.org/web/*/http://tntsearch.tntstudio.us" target="_blank" class="seoquake-params-request">2016|04|16</a></div><div class="sqseobar2-parameterItemInline"><span class="sqicn sqicn-facebook"></span><span class="sqseobar2-parameterItemInline-title sqseobar2-parameterItemInline-title-full">Facebook likes</span><span class="sqseobar2-parameterItemInline-title">l</span><a href="https://www.facebook.com/v2.5/plugins/like.php?layout=button_count&amp;href=http%3A%2F%2Ftntsearch.tntstudio.us%2F" target="_blank" class="seoquake-params-request">12</a></div><div class="sqseobar2-parameterItemInline"><span class="sqicn sqicn-google-plus"></span><span class="sqseobar2-parameterItemInline-title sqseobar2-parameterItemInline-title-full">Google +1</span><span class="sqseobar2-parameterItemInline-title">+1</span><a href="https://plusone.google.com/u/0/_/+1/fastbutton?count=true&amp;url=http://tntsearch.tntstudio.us/" target="_blank" class="seoquake-params-request sqseobar2-error">!</a></div><div class="sqseobar2-parameterItemInline"><span class="sqicn sqicn-user"></span><a href="https://whois.domaintools.com/tntsearch.tntstudio.us?utm_source=seoquake&amp;utm_medium=seoquake&amp;utm_campaign=seoquake&amp;ref=174537735" target="_blank" class="seoquake-params-request">whois</a></div><div class="sqseobar2-parameterItemInline"><span class="sqicn sqicn-source"></span><a href="view-source:http://tntsearch.tntstudio.us/" target="_blank" class="seoquake-params-request">source</a></div></div></div><button class="sqseobar2-button-more" style="visibility: visible;">More data</button></div><div class="sqseobar2-right-container"><div class="sqseobar2-right-container-buttons"><a class="sqseobar2-link sqseobar2-link-pageinfo"><span>Summary report</span></a><a class="sqseobar2-link sqseobar2-link-diagnosis"><span>Diagnosis</span></a><a class="sqseobar2-link sqseobar2-link-density"><span>Density</span></a><a class="sqseobar2-link sqseobar2-link-external"><span>External links</span><span class="sqseobar2-link-value">1</span></a><a class="sqseobar2-link sqseobar2-link-internal"><span>Internal links</span><span class="sqseobar2-link-value">5</span></a><a class="sqseobar2-link sqseobar2-link-siteaudit" href="http://tntsearch.tntstudio.us/#"><span>Site audit</span><span class="sqseobar2-link-value">n/a</span></a></div><button class="sqseobar2-button-close" title="Close panel"></button><button class="sqseobar2-button-configure" title="Configure panel">

            </button></div></div></div></body></html>