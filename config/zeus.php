<?php

return [
    /**
     * set the default theme for all zeus packages
     *
     * Available layouts with artemis:
     *
     * breeze, daisy, another-portfolio
     */
    // 'theme' => 'another-portfolio',

    /**
     * set the default layout component
     *
     * Available layouts with artemis:
     *
     * zeus::themes.breeze.layouts.app
     * zeus::themes.daisy.layouts.app
     * zeus::themes.another-portfolio.layouts.app
     */
    // 'layout' => 'zeus::themes.another-portfolio.layouts.app',

    'theme' => 'zeus',
    'layout' => 'zeus::components.app',

    /**
     * this will be set up the default seo site title. read more about it in 'laravel-seo'.
     */
    'site_title' => config('app.name', 'Laravel'),

    /**
     * this will be setup the default seo site description. read more about it in 'laravel-seo'.
     */
    'site_description' => 'All about '.config('app.name', 'Laravel'),

    /**
     * this will be setup the default seo site color theme. read more about it in 'laravel-seo'.
     */
    'site_color' => '#F5F5F4',

    /** set the default menu to use in header nav */
    'header_menu' => 'home-nav',
];
