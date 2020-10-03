<?php
/**
 * _navigation.php
 */

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

NavBar::begin([
	'brandLabel' => Yii::$app->name,
//	'brandLabel' => '<img width="150" height="50" src="/images/p2y2things_150x50.png" alt="P2Y2Things">',
	'brandUrl' => Url::home(true),
	'options' => [
		'class' => 'navbar navbar-expand-lg navbar-dark bg-dark static-top',
	],
]);

//Url::home(true)->getId(1)

$menuItems = [
	['label' => 'Home', 'url' => ['/site/index', 'id' => $id]],
	//['label' => 'Travel', 'url' => ['/site/travel']],
	['label' => 'Category', 'url' => ['/category/index']],
	['label' => 'Group', 'url' => ['/group/index']],
	['label' => 'Subgroup', 'url' => ['/subgroup/index']],
	['label' => 'Link', 'url' => ['/link/index']],
	//['label' => 'About', 'url' => ['/site/about']],
	['label' => 'Gii', 'url' => ['/gii']],
];

if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
}
else {
	$menuItems[] = '<li>'
		. Html::beginForm(['/site/logout'], 'post')
		. Html::submitButton(
			'Logout (' . Yii::$app->user->identity->username . ')',
			['class' => 'btn btn-link logout']
		)
		. Html::endForm()
		. '</li>';
}

echo Nav::widget([
	'options' => ['class' => 'navbar-nav ml-auto'],
	'items' => $menuItems,
]);

NavBar::end();
