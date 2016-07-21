This is a Litecms package that provides news management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `litecms/news`.

    "litecms/news": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Litecms\News\Providers\NewsServiceProvider::class,

```

And also add it to alias

```php
'News'  => Litecms\News\Facades\News::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Litecms\News\Providers\NewsServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Litecms\News\Providers\NewsServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Litecms\News\Providers\NewsServiceProvider" --tag="config"

Language

    php artisan vendor:publish --provider="Litecms\News\Providers\NewsServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Litecms\News\Providers\NewsServiceProvider" --tag="view"

Public folders

	php artisan vendor:publish --provider="Litecms\News\Providers\NewsServiceProvider" --tag="public"


Publish admin views only if it is necessary.

## Usage


