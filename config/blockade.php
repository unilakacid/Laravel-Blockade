<?php

return [

    /**
     * Decide if the authentication package should be enabled.
     */
    'enabled' => env('BLOCKADE_ENABLED', false),

    /**
     * Set the password used for the authentication process.
     */
    'password' => env('BLOCKADE_PASSWORD', null),

    /**
     * Specify the title displayed on the blockade view.
     */
    'title' => 'Under Construction',

    /**
     * Specify the authentication handler used for granting access.
     *
     * @see \romanzipp\Blockade\Handlers\HandlerContract
     */
    'handler' => \romanzipp\Blockade\Handlers\CookieHandler::class,

    'handlers' => [

        'cookie' => [

            /**
             * Set the cookie name used for the cookie handler.
             */
            'cookie' => env('BLOCKADE_COOKIE_NAME', 'blockade'),

            /**
             * Set the domain used for setting the cookie,
             */
            'domain' => env('BLOCKADE_COOKIE_DOMAIN', env('APP_URL')),

        ],

    ],

];
