<?php

return [
    /**
     * set the default path for the layout page.
     */
    'path' => '/dashboard',

    /**
     * the middleware you want to apply on all the blogs routes
     * for example if you want to make your blog for users only, add the middleware 'auth'.
     */
    'middleware' => ['web'],

    /**
     * customize the models
     */
    'models' => [
        'layout' => \LaraZeus\Rain\Models\Layout::class,
    ],

    /**
     * you can use the default layout as a starting point for your blog.
     * however, if you're already using your own component, just set the path here.
     */
    'layout' => 'layouts.app',
    //'layout' => 'zeus::components.app',

    /**
     * set the default upload options for departments logo.
     */
    'uploads' => [
        'disk' => 'public',
        'directory' => 'layouts',
    ],

    /**
     * this will be setup the default seo site title. read more about it in 'laravel-seo'.
     */
    'site_title' => config('app.name', 'Laravel'),

    /**
     * this will be setup the default seo site description. read more about it in 'laravel-seo'.
     */
    'site_description' => config('app.name', 'Laravel'),

    /**
     * this will be setup the default seo site color theme. read more about it in 'laravel-seo'.
     */
    'color' => '#F5F5F4',

    /**
     * the default theme, for now we only have one theme, and soon we will provide more free and premium themes.
     */
    'theme' => 'breeze',

    /**
     * Navigation Group Label
     */
    'navigation_group_label' => 'rain',

    /**
     * default layout slug
     */
    'default_layout' => 'new-page',
];
