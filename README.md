Yii2-Start Latest News Widget
========================
Latest News Widget for Yii2-Start application. 
Displays a set number the latest blog posts. 

Requirements
------------

This module is used with Yii2-Start application
[yii2-start](https://github.com/vova07/yii2-start).


Installation
=============

Install via Composer
--------------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require nill/yii2-latest-news-widget "dev-master"
```

or add

```
"nill/yii2-latest-news-widget": "dev-master"
```

to the require section of your `composer.json` file.

Install from an Archive File
----------------------------

Download and extract the zip-file into the folder with your project


```
/my/path/to/yii2-start/vendor/nill/yii2-latest-news-widget
```

Configuration
=============

- Add module to extensions "vendor\yiisoft\extensions.php":

```
'nill/widget-latest-news' => 
array (
    'name' => 'nill/yii2-latest-news-widget',
    'version' => '0.1.0.0',
    'alias' => 
    array (
        '@nill/widgetapn' => $vendorDir . '/nill/yii2-latest-news-widget',
    ),
),
```

Usage
=====

```
<?= Widgetapn::widget([
    'limit' =>2 // limit of displayed news
]) ?>
```