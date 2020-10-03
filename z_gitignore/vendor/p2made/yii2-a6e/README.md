Yii 2 Advanced 6 Ends v4.0.0-alpha
=====================

[![License](https://poser.pugx.org/p2made/yii2-a6e/license)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Total Downloads](https://poser.pugx.org/p2made/yii2-a6e/downloads)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Monthly Downloads](https://poser.pugx.org/p2made/yii2-a6e/d/monthly)](https://packagist.org/packages/p2made/yii2-p2y2-things)
[![Latest Stable Version](https://poser.pugx.org/p2made/yii2-a6e/v/stable)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)
[![Latest Unstable Version](https://poser.pugx.org/p2made/yii2-a6e/v/unstable)](https://packagist.org/packages/p2made/yii2-p2y2-things-demo)

---

Installation
------------

*One*... create a new Yii2 Advanced project by running...

```
composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
```

*Two* *Before* running `init`, either...

Depending on your Composer setup, run *one* of the following commands:

```
composer require p2made/yii2-a6e "~4.0"
```

or

```
php composer.phar require p2made/yii2-a6e "~4.0"
```

*or* add:

```
	"p2made/yii2-a6e": "~4.0"
```

to the requires section of your `composer.json` & run `composer update`.

`yii2-a6e` installs...

```
	p2made/yii2-p2y2-things
	p2made/yii2-p2y2-things-demo
	p2made/yii2-startbootstrap-themes
	p2made/yii2-sb-admin-theme
```

*Three*... run...

```
cp -r ./vendor/p2made/yii2-a6e/environments ./
```

The `environments` folder will be replaced.

*Four*... run `./init` as usual.

Init to dev will replace some files. Select `All` when prompted. If you're going straight to a prod install for any reason, init to dev first so that these files do get replaced.

You now have application ends folders...

```
	api/
	assets/
	backend/
	frontend/
```

If there are any application ends that you won't use, you can delete those folders, along with some extra deletions in config edits that follow.

*Four*... edit some config files...

In `common/config/bootstrap.php` edit the last line...
```
	Yii::setAlias('assetsUrl', 'http://static.a4e-dev.dev');
```
to have the URL for your static/assets application end.

If you're discarding any ends, delete the lines setting aliases for them.

In `common/config/main.php` edit the `$_urlBase...` values at the top according to your server configuration.

If you're discarding any ends, delete the corresponding lines here, & also the lines below settung urlManagers for them.

In `common/config/params.php` edit the `reverseDomain` value according to your server configuration.




