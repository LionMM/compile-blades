# compile-blades

A Laravel package for compiling blades nested in 1 file into 1 flattened file.

Refactored and tested only for Laravel 8

Be ready to refactor your views for using this command ;)

## Why?

> For best performance, you may want to consider flattening your blades on production, cause a lot of nesting consumes time in laravel
> since each nested level repeats the same pipline process, that consumes time & memory.

### Example of problems:

- https://stackoverflow.com/questions/30673129/laravel-blades-performance/44863712#44863712
- https://laracasts.com/discuss/channels/laravel/how-to-improve-laravel-views-performance-when-using-multiple-times-same-view-file-or-howto-avoid-repeating-expensive-read-file-operation

**Table of Contents**

- [Requirements](#requirements)
- [Installation](#installation)
    - [1) Require the package](#1-require-the-package)
    - [2) Configure Laravel](#2-configure-laravel)
- [Usage](#usage)
    - [Flattening Views](#flattening-views)

## Requirements

This version of package working only with Laravel 8+

## Installation

### 1) Require the package

From your project's base path, run:

```shell
    $ composer require lionmm/compile-blades
```


### 2) Configure Laravel


```shell
    $ ./artisan vendor:publish --provider="Lionmm\CompileBlades\CompileBladesServiceProvider"
```

WIP

## Usage

Before getting started, I highly recommend reading through Laravels documentation on Views and Blades.

### Flattening Views:

Providing everything is set up and configured properly, all you need to do in order to flatten a view for a certain
route or something else, is running the following command:
```shell
    $ php artisan view:compile view.name
```

This will generate a flattened view instead of the current one.

Better way: pic needed blades in `auto_compilers` section of configuration and use command
```shell
    $ php artisan view:compile:auto
```

By default, folder `compiled` will be created in your `resources/views` path and flatten files will be placed in it

Now you can use command `compiled_view();` instead of `view();` for using flatten views IF they present

WIP

