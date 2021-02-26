<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nesting
    |--------------------------------------------------------------------------
    |
    | Define how many layers of views you want to compile
    |
    */

    'nesting' => 5,

    /*
    |--------------------------------------------------------------------------
    | Default folder
    |--------------------------------------------------------------------------
    |
    | Define folder for placing compiled views if not set --location parameter
    | Set null if you want to replace original view file
    | Default: compiled
    |
    */

    'default_folder' => 'compiled',

    /*
    |--------------------------------------------------------------------------
    | View Composers
    |--------------------------------------------------------------------------
    |
    | Define whether or not you want to compile sections that has view composers.
    | You have to define the location of the service provider if set to true!
    | Default: false
    |
    */

    'view_composers' => [
        'exclude_sections' => false,
        'composerserviceprovider_location' => '', // e.g. app_path('Providers/ComposerServiceProvider.php'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Auto compilers
    |--------------------------------------------------------------------------
    |
    | Here you can define views that should be compiled when running the "compile:all" command.
    | The key is the name of the view that needs to be compiled, the value is the location of where the view needs to be compiled to.
    | Set the value to NULL if you want to overwrite the view.
    |
    */

    'auto_compilers' => [
        // e.g. view => compiled-view,
        // e.g. other.view => compiled.view-other,
        // e.g. third.view => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Excluded views
    |--------------------------------------------------------------------------
    |
    | Here you can define views that should never be compiled.
    | WARNING! Views that are defined here will not be compiled even if they are defined in the "auto_compilers" array !
    |
    */

    'excluded_views' => [
        //
    ]
];
