<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FYT</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite([
        'resources/css/app.css',
        'resources/css/style-salvia.css',
        'resources/css/vendor.bundle.css'
    ])
</head>

    <body class="antialiased">
        <body class="nk-body body-wider mode-onepage">
            <div class="nk-wrap">
                <header class="nk-header page-header is-transparent is-sticky is-shrink is-split" id="header">
                    <!-- Header @s -->
                    <div class="header-main">
                        <div class="container container-xxl">
                            <div class="header-wrap">
                                <!-- Logo @s -->
                                <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                                    <a href="./" class="logo-link">
                                        <img class="logo-dark" src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo">
                                        <img class="logo-light" src="{{ Vite::asset('resources/images/logo-full-white.png') }}" alt="logo">
                                    </a>
                                </div>
                                <!-- Menu Toogle @s -->
                                <div class="header-nav-toggle">
                                    <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                                        <div class="toggle-line">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- Menu @s -->
                                <div class="header-navbar header-navbar-s2 flex-grow-1 animated" data-animate="fadeInDown" data-delay=".75">
                                    <nav class="header-menu header-menu-s2" id="header-menu">
                                        <ul class="menu mx-auto">
                                            <li class="menu-item has-sub">
                                                <a class="menu-link nav-link menu-toggle" href="#">Home</a>
                                                <div class="menu-sub menu-drop menu-mega menu-mega-3clmn">
                                                    <div class="menu-mega-innr">
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a href="index-azalea.html">Azalea Dark<span class="badge badge-xs badge-light">v1.6</span></a></li>
                                                            <li class="menu-item"><a href="index-azalea-multi.html">Azalea Multi<span class="badge badge-xs badge-light">v1.6</span></a></li>
                                                            <li class="menu-item"><a href="index-gentian.html">Gentian Dark<span class="badge badge-xs badge-light">v1.5</span></a></li>
                                                            <li class="menu-item"><a href="index-gentian-pro.html">Gentian Pro<span class="badge badge-xs badge-light">v1.5</span></a></li>
                                                            <li class="menu-item"><a href="index-gentian-multi.html">Gentian Multi<span class="badge badge-xs badge-light">v1.5</span></a></li>
                                                            <li class="menu-item"><a href="index-zinnia.html">Zinnia Pro</a></li>
                                                            <li class="menu-item"><a href="index-salvia.html">Salvia Pro</a></li>
                                                            <li class="menu-item"><a href="index-lungwort.html">Lungwort Dark</a></li>
                                                        </ul>
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a href="index-jasmine.html">Jasmine Light</a></li>
                                                            <li class="menu-item"><a href="index-lobelia.html">Lobalia Dark</a></li>
                                                            <li class="menu-item"><a href="index-muscari.html">Muscari Pro</a></li>
                                                            <li class="menu-item"><a href="index-lavender.html">Lavender Pro</a></li>
                                                            <li class="menu-item"><a href="index-azure-pro.html">Azure Pro</a></li>
                                                            <li class="menu-item"><a href="index-azure.html">Azure Dark</a></li>
                                                            <li class="menu-item"><a href="index-dark-pro.html">Default Dark Pro</a></li>
                                                            <li class="menu-item"><a href="index-light.html">Default Light</a></li>
                                                        </ul>
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a href="index-dark.html">Default Dark</a></li>
                                                            <li class="menu-item"><a href="index-linum-wallet.html">Linum Wallet<span class="badge badge-xs badge-light">v1.8</span></a></li>
                                                            <li class="menu-item"><a href="index-flax-wallet.html">Flax Wallet<span class="badge badge-xs badge-light">v1.8</span></a></li>
                                                            <li class="menu-item"><a href="index-crocus-multi.html">Crocus Multi<span class="badge badge-xs badge-light">v1.9</span></a></li>
                                                            <li class="menu-item"><a href="index-cyanus-multi.html">Cyanus Multi</a></li>
                                                            <li class="menu-item"><a href="index-blockchain.html">Blockchain <span class="badge badge-xs badge-new">new</span></a></li>
                                                            <li class="menu-item"><a href="index-nft-portfolio.html">NFT Portfolio <span class="badge badge-xs badge-new">new</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item has-sub">
                                                <a class="menu-link nav-link menu-toggle" href="#">Pages</a>
                                                <div class="menu-sub menu-drop menu-mega menu-mega-2clmn">
                                                    <div class="menu-mega-innr">
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-about.html">About Us - Base</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-about-v2.html">About Us - Linum</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-about-v3.html">About Us - Cyanus<span class="badge badge-dot"></span></a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-team.html">Our Teams</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-wallets.html">Wallets -v1</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-wallets-v2.html">Wallets -v2</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-features.html">Features</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-token-sale.html">Token Sale</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-roadmap.html">Roadmap</a></li>
                                                        </ul>
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-download.html">Download</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-faq.html">FAQs</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-contact.html">Contact - Base</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-contact-v2.html">Contact - Cyanus<span class="badge badge-dot"></span></a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-exchange.html">Exchange - Cyanus<span class="badge badge-dot"></span></a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-partner.html">Partner - Cyanus<span class="badge badge-dot"></span></a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-mission.html">Mission - Cyanus<span class="badge badge-dot"></span></a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-career.html">Career - Cyanus<span class="badge badge-dot"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item has-sub">
                                                <a class="menu-link nav-link menu-toggle" href="#">Blog & Misc</a>
                                                <ul class="menu-sub menu-drop">
                                                    <li class="menu-item has-sub">
                                                        <a class="menu-link nav-link menu-toggle" href="#">Blog Pages</a>
                                                        <ul class="menu-sub menu-drop">
                                                            <li class="menu-item"><a class="menu-link nav-link" href="blog-3clmn.html">Blog 3 Column</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="blog-sidebar-left.html">Blog Sidebar - Left</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="blog-sidebar-right.html">Blog Sidebar - Right</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="blog-details.html">Blog Single - Sidebar</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="blog-details-full.html">Blog Single - Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item has-sub">
                                                        <a class="menu-link nav-link menu-toggle" href="#">Auth Pages</a>
                                                        <ul class="menu-sub menu-drop">
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-login.html">Login - v1</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-register.html">Register - v1</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-reset.html">Reset - v1</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-login-v2.html">Login - v2</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-register-v2.html">Register - v2</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="page-reset-v2.html">Reset - v2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item has-sub">
                                                        <a class="menu-link nav-link menu-toggle" href="#">Coming Soon</a>
                                                        <ul class="menu-sub menu-drop">
                                                            <li class="menu-item"><a class="menu-link nav-link" href="coming-soon-azalea.html" target="_blank">Coming Soon - Azalea</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="coming-soon-gentian.html" target="_blank">Coming Soon - Gentian</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="coming-soon-gentian-alt.html" target="_blank">Coming Soon - Gentian Alt</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="coming-soon-dark.html" target="_blank">Coming Soon - Dark</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="coming-soon-light.html" target="_blank">Coming Soon - Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item has-sub">
                                                        <a class="menu-link nav-link menu-toggle" href="#">Error 404</a>
                                                        <ul class="menu-sub menu-drop">
                                                            <li class="menu-item"><a class="menu-link nav-link" href="error-404-gentian.html" target="_blank">404 - Gentian</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="error-404-gentian-alt.html" target="_blank">404 - Gentian Alt</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="error-404-azalea.html" target="_blank">404 - Azalea</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="error-404-dark.html" target="_blank">404 - Dark</a></li>
                                                            <li class="menu-item"><a class="menu-link nav-link" href="error-404-light.html" target="_blank">404 - Light</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item has-sub">
                                                <a class="menu-link nav-link menu-toggle" href="#">Elements</a>
                                                <div class="menu-sub menu-drop menu-mega menu-mega-2clmn">
                                                    <div class="menu-mega-innr">
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a href="element-alert.html">Alert</a></li>
                                                            <li class="menu-item"><a href="element-button.html">Buttons</a></li>
                                                            <li class="menu-item"><a href="element-content.html">Contents</a></li>
                                                            <li class="menu-item"><a href="element-table.html">Tables</a></li>
                                                            <li class="menu-item"><a href="element-video.html">Videos</a></li>
                                                            <li class="menu-item"><a href="element-typography.html">Typography</a></li>
                                                            <li class="menu-item"><a href="element-progress-bar.html">Progress Bar</a></li>
                                                            <li class="menu-item"><a href="element-form.html">Form Elements</a></li>
                                                            <li class="menu-item"><a href="element-icon.html">Custom Icons<span class="badge badge-xs badge-info">v1.6.2</span></a></li>
                                                        </ul>
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a href="element-tab.html">Tabs</a></li>
                                                            <li class="menu-item"><a href="element-grid.html">Grids</a></li>
                                                            <li class="menu-item"><a href="element-color.html">Colors</a></li>
                                                            <li class="menu-item"><a href="element-modal.html">Modals</a></li>
                                                            <li class="menu-item"><a href="element-chart.html">Charts</a></li>
                                                            <li class="menu-item"><a href="element-notification.html">Notification</a></li>
                                                            <li class="menu-item"><a href="element-countdown.html">Countdown</a></li>
                                                            <li class="menu-item"><a href="element-accordion.html">Accordions</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-item has-sub">
                                                <a class="menu-link nav-link menu-toggle" href="#">Blocks</a>
                                                <div class="menu-sub menu-drop menu-mega menu-mega-2clmn">
                                                    <div class="menu-mega-innr">
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a href="block-navbar.html">Navbar</a></li>
                                                            <li class="menu-item"><a href="block-page-header.html">Page Header</a></li>
                                                            <li class="menu-item"><a href="block-footer.html">Footer</a></li>
                                                            <li class="menu-item"><a href="block-team.html">Team</a></li>
                                                            <li class="menu-item"><a href="block-banner.html">Banner <span class="badge badge-xs badge-hot">Hot</span></a></li>
                                                            <li class="menu-item"><a href="block-faq.html">FAQs</a></li>
                                                            <li class="menu-item"><a href="block-subscribe.html">Subscribe</a></li>
                                                        </ul>
                                                        <ul class="menu-mega-list">
                                                            <li class="menu-item"><a href="block-roadmap.html">Roadmaps</a></li>
                                                            <li class="menu-item"><a href="block-partner.html">Partners</a></li>
                                                            <li class="menu-item"><a href="block-token-info.html">Token Info</a></li>
                                                            <li class="menu-item"><a href="block-feature-card.html">Features Card</a></li>
                                                            <li class="menu-item"><a href="block-feature-panel.html">Features Panel</a></li>
                                                            <li class="menu-item"><a href="block-auth.html">Login / Register</a></li>
                                                            <li class="menu-item"><a href="block-contact.html">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="menu-btns">
                                            <li><a href="page-register.html" class="btn btn-md btn-auto btn-secondary btn-outline no-change"><span>Sign Up</span></a></li>
                                            <li><a href="page-login.html" class="btn btn-md btn-auto btn-secondary no-change focus"><span>Login</span></a></li>
                                        </ul>
                                    </nav>
                                </div><!-- .header-navbar @e -->
                            </div>
                        </div>
                    </div><!-- .header-main @e -->
                    <!-- Banner @s -->
                    <div class="header-banner bg-theme-grad-s2">
                        <div class="nk-banner">
                            <div class="banner banner-fs banner-single banner-s1">
                                <div class="banner-wrap my-auto">
                                    <div class="container container-xxl">
                                        <div class="row align-items-center justify-content-center justify-content-lg-between gutter-vr-60px">
                                            <div class="col-lg-6 col-xl-5 text-center text-lg-start">
                                                <div class="banner-caption tc-light animated" data-animate="fadeInUp" data-delay="1.25">
                                                    <div class="cpn-head mt-0">
                                                        <h1 class="title title-lg-s2">Simple. Faster. Secure</h1>
                                                    </div>
                                                    <div class="cpn-text cpn-text-s3 pb-2">
                                                        <p class="lead lead-s3 pb-1">Distributing finance for everyone</p>
                                                        <p>Buy Bitcoin and cryptocurrencies. Pay with Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    </div>
                                                    <div class="cpn-btns">
                                                        <ul class="btn-grp">
                                                            <li><a class="btn btn-lg btn-secondary" href="#">White Paper</a></li>
                                                            <li><a class="btn btn-lg btn-primary btn-outline" href="#">One Pager</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-lg-6 col-xl-7 col-md-8 col-sm-9">
                                                <div class="banner-gfx banner-gfx-s2 position-relative animated" data-animate="fadeInUp" data-delay="1.35">
                                                    <img src="{{ Vite::asset('resources/images/app-screens/sc-mockup.png') }}" alt="mockup">
                                                    <div class="has-flex-slider gfx-screen round" data-slide-speed="2500" data-slide-show="true" data-anim-loop="true" data-anim-speed="1500">
                                                        <ul class="slides">
                                                            <li class="gfx-slide">
                                                                <div class="bg-image round">
                                                                    <img src="{{ Vite::asset('resources/images/app-screens/sc-slide-one.jpg') }}" alt="slide img">
                                                                </div>
                                                            </li>
                                                            <li class="gfx-slide">
                                                                <div class="bg-image round">
                                                                    <img src="{{ Vite::asset('resources/images/app-screens/sc-slide-two.jpg') }}" alt="slide img">
                                                                </div>
                                                            </li>
                                                            <li class="gfx-slide">
                                                                <div class="bg-image round">
                                                                    <img src="{{ Vite::asset('resources/images/app-screens/sc-slide-three.jpg') }}" alt="slide img">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div>
                                </div>
                                <div class="banner-bottom w-100 pb-5 animated" data-animate="fadeInUp" data-delay="1.45">
                                    <div class="container container-xxl">
                                        <div class="d-flex justify-content-center justify-content-md-between align-items-center flex-lg-nowrap flex-wrap">
                                            <ul class="btn-grp m-0">
                                                <li><a class="btn btn-lg btn-theme-dark" href="#"><span class="btn-img pe-3"><img src="{{ Vite::asset('resources/images/wave.png') }}" alt="wave"></span><span class="btn-text ttc">View Details Statistic</span> <em class="ti ti-arrow-right ps-2"></em></a></li>
                                            </ul>
                                            <ul class="social pt-3 pt-md-0">
                                                <li><a href="#"><em class="social-icon fab fa-facebook-f"></em></a></li>
                                                <li><a href="#"><em class="social-icon fab fa-twitter"></em></a></li>
                                                <li><a href="#"><em class="social-icon fab fa-youtube"></em></a></li>
                                                <li><a href="#"><em class="social-icon fab fa-github"></em></a></li>
                                                <li><a href="#"><em class="social-icon fab fa-bitcoin"></em></a></li>
                                                <li><a href="#"><em class="social-icon fab fa-medium-m"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-banner -->
                        <div class="nk-ovm shape-z6">
                            <div class="nk-ovm-inner"></div>
                        </div>
                    </div>
                    <!-- .header-banner @e -->
                </header>
                <main class="nk-pages">
                    <div class="section pb-0 animated" data-animate="fadeInUp" data-delay=".1">
                        <div class="container">
                            <div class="nk-block">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-mb-10">
                                        <div class="nk-block-text text-center">
                                            <h2 class="title title-regular">Buy popular digital currencies with ICO Crypto!</h2>
                                            <p>Buy through our currency partners and receive assets directly to your personal wallet.</p>
                                            <ul class="icon-currency-list pt-4 pb-5">
                                                <li class=""><em class="icon icon-bg icon-bg-lg bg-theme-grad-s2 icon-md ikon ikon-ltc"></em></li>
                                                <li class=""><em class="icon icon-bg icon-bg-xl bg-theme-grad-s2 icon-md ikon ikon-eth"></em></li>
                                                <li class=""><em class="icon icon-bg icon-bg-lg bg-theme-grad-s2 icon-md ikon ikon-btc"></em></li>
                                            </ul>
                                            <a href="#" class="btn btn-secondary btn-lg">purchase now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // -->
                    <section class="section">
                        <div class="container">
                            <div class="nk-block nk-block-text-wrap">
                                <div class="row align-items-center gutter-vr-30px justify-content-lg-between justify-content-center">
                                    <div class="col-lg-5 col-mb-10">
                                        <div class="nk-block-img gfx-re-lgl py-5 py-lg-0 animated" data-animate="fadeInUp" data-delay="0.1">
                                            <div class="gfx-round-bg after"></div>
                                            <img src="{{ Vite::asset('resources/images/app-screens/sc-large-q.png') }}" alt="app">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-mb-10">
                                        <div class="nk-block-text animated" data-animate="fadeInUp" data-delay="0.2">
                                            <div class="pb-5">
                                                <h2 class="title title-regular">ICO Crypto Exchange</h2>
                                                <p>The heart of ICO Crypto Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim</p>
                                            </div>
                                            <ul class="list list-check list-check-s3 list-check-s3-sm">
                                                <li>
                                                    <h4 class="title title-md">Designed for everyone</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                                <li>
                                                    <h4 class="title title-md">All the tools you want</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                                <li>
                                                    <h4 class="title title-md">Multiple asset classes</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                            </ul>
                                            <ul class="btn-grp pt-4">
                                                <li><a class="btn btn-lg btn-secondary" href="#">try it out</a></li>
                                                <li><a class="btn btn-lg btn-primary btn-outline" href="#">Explore features</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .block @e -->
                        </div>
                    </section>
                    <!-- // -->
                    <section class="section pt-0">
                        <div class="container">
                            <div class="nk-block nk-block-text-wrap">
                                <div class="row align-items-center gutter-vr-30px justify-content-lg-between justify-content-center">
                                    <div class="col-lg-5 col-mb-9 order-lg-last">
                                        <div class="nk-block-img gfx-re-lg animated" data-animate="fadeInUp" data-delay="0.1">
                                            <div class="gfx-round-bg after"></div>
                                            <img src="{{ Vite::asset('resources/images/app-screens/sc-large-q2.png') }}" alt="app">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-mb-10">
                                        <div class="nk-block-text animated" data-animate="fadeInUp" data-delay="0.2">
                                            <div class="pb-5">
                                                <h2 class="title title-regular">ICO Crypto Mobile Wallet</h2>
                                                <p>Mobile wallet meets trading app.</p>
                                            </div>
                                            <ul class="list list-check list-check-s3 list-check-s3-sm">
                                                <li>
                                                    <h4 class="title title-md">All-in-one</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                                <li>
                                                    <h4 class="title title-md">Scan. Convert. Pay.</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                                <li>
                                                    <h4 class="title title-md">Trade as you go</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                            </ul>
                                            <ul class="btn-grp pt-4">
                                                <li><a class="btn btn-lg btn-secondary" href="#">Explore features</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .block @e -->
                        </div>
                    </section>
                    <!-- // -->
                    <section class="section pt-0 ov-v">
                        <div class="container">
                            <div class="nk-block nk-block-text-wrap">
                                <div class="row align-items-center gutter-vr-30px justify-content-lg-between justify-content-center">
                                    <div class="col-lg-5 col-mb-10">
                                        <div class="nk-block-img gfx-re-lgl py-5 py-lg-0 animated" data-animate="fadeInUp" data-delay="0.1">
                                            <div class="gfx-round-bg"></div>
                                            <img src="{{ Vite::asset('resources/images/gfx/gfx-b.png') }}" alt="app">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-mb-10">
                                        <div class="nk-block-text animated" data-animate="fadeInUp" data-delay="0.2">
                                            <div class="pb-5">
                                                <h2 class="title title-regular">ICO Crypto Pay</h2>
                                                <p>Make life easy for your customers. Embed our platform into your store for instant digital asset payments – with zero fees or cashbacks.</p>
                                            </div>
                                            <ul class="list list-check list-check-s3 list-check-s3-sm">
                                                <li>
                                                    <h4 class="title title-md">Automatic conversion</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                                <li>
                                                    <h4 class="title title-md">Simple to manage</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                                <li>
                                                    <h4 class="title title-md">Quick to set up</h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </li>
                                            </ul>
                                            <ul class="btn-grp pt-4">
                                                <li><a class="btn btn-lg btn-secondary" href="#">Explore features</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .block @e -->
                        </div>
                    </section>
                    <!-- // -->
                    <section class="section pt-0">
                        <div class="container">
                            <div class="nk-block nk-block-feature">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-mb-10">
                                        <div class="section-head text-center animated" data-animate="fadeInUp" data-delay="0.1">
                                            <h2 class="title title-regular">Know more about ICO Crypto</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-mb-10">
                                        <div class="feature feature-inline card card-s3 flex-wrap flex-sm-nowrap animated" data-animate="fadeInUp" data-delay="0.2">
                                            <div class="feature-icon feature-icon-lg-s3 mt-0">
                                                <img src="{{ Vite::asset('resources/images/icons/icon-t-alt.png') }}" alt="icon">
                                            </div>
                                            <div class="feature-text">
                                                <h5 class="title title-md">Compliance</h5>
                                                <p>We believe legal compliance is key to growing digital finance.</p>
                                                <a href="#" class="btn btn-secondary btn-md">learn more <em class="ti ti-arrow-right ps-2"></em></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-mb-10">
                                        <div class="feature feature-inline card card-s3 flex-wrap flex-sm-nowrap animated" data-animate="fadeInUp" data-delay="0.3">
                                            <div class="feature-icon feature-icon-lg-s3 mt-0">
                                                <img src="{{ Vite::asset('resources/images/icons/icon-t2.png') }}" alt="icon">
                                            </div>
                                            <div class="feature-text">
                                                <h5 class="title title-md">Funds management</h5>
                                                <p>ICO Cryptosimplifies the lorem ipsum dolor sumit in repeherenderit.</p>
                                                <a href="#" class="btn btn-secondary btn-md">learn more <em class="ti ti-arrow-right ps-2"></em></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // -->
                    <section class="section bg-light">
                        <div class="container">
                            <div class="nk-block nk-block-feature">
                                <div class="section-head text-center animated" data-animate="fadeInUp" data-delay="0.1">
                                    <h2 class="title title-regular">Get started now</h2>
                                    <p>Can’t wait to try ICO Crypto? You don’t have to! Getting started is a matter of minutes.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="feature feature-center animated" data-animate="fadeInUp" data-delay="0.2">
                                            <div class="feature-serial">
                                                <span>1</span>
                                            </div>
                                            <div class="feature-text feature-text-wd">
                                                <h5 class="title title-md">Sign up</h5>
                                                <p class="mx-auto">We’ll guide you through the process.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="feature feature-center animated" data-animate="fadeInUp" data-delay="0.3">
                                            <div class="feature-serial">
                                                <span>2</span>
                                            </div>
                                            <div class="feature-text feature-text-wd">
                                                <h5 class="title title-md">Try your new wallet</h5>
                                                <p class="mx-auto">Buy crypto through our partners or transfer in funds.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="feature feature-center animated" data-animate="fadeInUp" data-delay="0.4">
                                            <div class="feature-serial">
                                                <span>3</span>
                                            </div>
                                            <div class="feature-text feature-text-wd">
                                                <h5 class="title title-md">Explore the ecosystem</h5>
                                                <p class="mx-auto">See how easy it is to trade, pay and invest with ICO Crypto!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-3 animated" data-animate="fadeInUp" data-delay="0.5">
                                    <a href="#" class="btn btn-lg btn-secondary">create an account</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // -->
                </main>
                <!-- Footer -->
                <footer class="nk-footer bg-theme ov-h">
                    <section class="section section-m section-footer tc-light bg-transparent ov-h">
                        <div class="container">
                            <!-- Block @s -->
                            <div class="nk-block block-footer mgb-m30">
                                <div class="row justify-content-between">
                                    <div class="col-sm-3 mb-sm-0 col-6">
                                        <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay="0.1">
                                            <h6 class="wgs-title">Help</h6>
                                            <div class="wgs-body">
                                                <ul class="wgs-links">
                                                    <li><a href="#">Community</a></li>
                                                    <li><a href="#">Knowledge base</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                    <li><a href="#">Security</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-3 mb-sm-0 col-6">
                                        <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay="0.2">
                                            <h6 class="wgs-title">Company</h6>
                                            <div class="wgs-body">
                                                <ul class="wgs-links">
                                                    <li><a href="#">About</a></li>
                                                    <li><a href="#">Compliance</a></li>
                                                    <li><a href="#">Careers</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-3 col-sm-4 mb-sm-0 col-6">
                                        <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay="0.3">
                                            <h6 class="wgs-title">Products</h6>
                                            <div class="wgs-body">
                                                <ul class="wgs-links">
                                                    <li><a href="#">ICO Crypto Exchange</a></li>
                                                    <li><a href="#">Funds Management</a></li>
                                                    <li><a href="#">ICO Crypto Extension</a></li>
                                                    <li><a href="#">ICO Crypto Mobile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-2 mb-sm-0 col-6">
                                        <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay="0.4">
                                            <h6 class="wgs-title">Follow</h6>
                                            <div class="wgs-body">
                                                <ul class="wgs-links">
                                                    <li><a href="#">Twitter</a></li>
                                                    <li><a href="#">YouTube</a></li>
                                                    <li><a href="#">Medium</a></li>
                                                    <li><a href="#">LinkedIn</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .block @e -->
                        </div>
                    </section>
                    <div class="section section-sm pt-0 footer-bottom animated" data-animate="fadeInUp" data-delay="0.5">
                        <div class="container">
                            <div class="row justify-content-md-between align-items-center">
                                <div class="col-lg-6 col-md-3 col-sm-4">
                                    <a href="./" class="wgs-logo-s2 d-inline-block mb-2 mb-md-0">
                                        <img src="{{ Vite::asset('resources/images/logo-full-white.png') }}" alt="logo">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="copyright-text">
                                        <ul class="d-flex justify-content-between align-items-center flex-wrap flex-md-nowrap">
                                            <li><a href="#">User Agreement</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li>
                                                <p>&copy;2022 - ICO Crypto. All rights reserved</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-ovm shape-z7 ov-h"></div>
                </footer>
            </div>
            <!-- preloader -->
            <div class="preloader preloader-alt no-split"><span class="spinner spinner-alt"><img class="spinner-brand" src="images/logo-full-white.png" alt=""></span></div>
            
        </body>
        {{-- <div id="app"></div>

        @vite('resources/js/app.js') --}}
    </body>
    @vite([
        'resources/js/app.js',
        'resources/js/jquery.bundle.js',
        'resources/js/scripts.js',
        'resources/js/charts.js',
    ])
</html>