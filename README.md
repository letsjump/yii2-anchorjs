AnchorJS
========
Yii2 wrapper for [AnchorJS](https://www.bryanbraun.com/anchorjs) that add deep anchor links to your Yii docs.

Overview
--------
AnchorJS lets you drop deep anchor links (like these) onto any webpage, and be on your way.

You don't need to set up IDs or worry about urls. AnchorJS will respect your IDs if you have them, and generate them if you don't.

It uses an attractive link icon by default, but you can customize the display via options and CSS styling. The examples demonstrate a few customization ideas.

Finally, AnchorJS is lightweight, accessible, and dependency-free.

The perfect example? The bootstrap manual pages: 



Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist letsjump/yii2-anchorjs "*"
```

or add

```
"letsjump/yii2-anchorjs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply add this in any view that need it.

```php
<?= \letsjump\AnchorJS\AnchorJS::widget([
        'add' => 'h1, h2',
        'options' => [
            'placement'=>'right', 
            'icon'=>'',
            // ... refer to https://www.bryanbraun.com/anchorjs/#options for any option available
        ], 
]); ?>

```

Application wide configuration
---------------------

You can set an application wide configuration by adding its options to your /app/config/params.php
```php
<?php

return [
    'adminEmail' => 'admin@example.com',
    'anchorjs'   => [
        'placement' => 'left',
        'icon' => ''
        // ... refer to https://www.bryanbraun.com/anchorjs/#options for any option available
    ],
];
```