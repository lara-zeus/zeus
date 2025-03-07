<?php

return [
    'domain' => null,

    /**
     * set the default path for the blog homepage.
     */
    'prefix' => '/home',

    /**
     * the middleware you want to apply on all the blog routes
     * for example if you want to make your blog for users only, add the middleware 'auth'.
     */
    'middleware' => ['web'],

    /**
     * you can overwrite any model and use your own
     * you can also configure the model per panel in your panel provider using:
     * ->models([ ... ])
     */
    'models' => [
        'Layout' => \LaraZeus\DynamicDashboard\Models\Layout::class,
        'Columns' => \LaraZeus\DynamicDashboard\Models\Columns::class,
    ],

    'defaultLayout' => 'new-page',
];
