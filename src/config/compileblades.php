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

    'nesting' => 2,

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
        // e.g. view => compiled/view,
    ],
];
