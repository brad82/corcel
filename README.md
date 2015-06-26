Laravel Corcel
================

This is a fork of jgrossi's awesome work on the original Corcel package. Its designed to play
a bit better with the Laravel framework specifically. It was developed to be used in a laravel app that sat behind a corporate wordpress site. 

We needed to pull some data in from wordpress which sat on a different server from the application. It made more sense to fork the package rather than override all the classes to allow for a separate connection.

--

Corcel is a class collection created to retrieve Wordpress database data using a better syntax. This flavour of corcel is designed to work with Laravel only, although I'm sure it'll work without it. You'll just have to build a config class that can load `corcel.connection`.

## Installation

To install Corcel just create a `composer.json` file and add:

    "require": {
        "brad82/corcel": "dev-master"
    },

After that run `composer install` and wait.

## Usage

Just include the service provider in your app config:

    'Corcel\Providers\CorcelServiceProvider'

And then publish the config file with

    php artisan vendor:publish

### Configuration

Laravel Corcel comes with a corcel.php config file. The only key in here currently is `connection`. This is a driver you have already configured in your db.php you want corcel to use. Useful if your wordpress installation lives on a different server than your app.


### API

Coming soon.. Its roughly on the same lines as the original package, although things have been namespaced, so the models live under Corcel\Database\Models instead of being imported into the
global namespace.

If you take a look at jgrossi's readme you can get the jist of it.


## Roadmap

I haven't got any plans to expand this past what's already here, as its working for my needs. I might update it in the future if the app its being used in demands it. I'm more than happy to look at pull requests if you have anything you think may help.

## Licence

Corcel is licensed under the MIT license.
