<?php
/**
 * _navigation.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;

$menuItems = [
	['label' => 'Ends', 'url' =>'#', 'items' => [
		['label' => 'API', 'url' => Yii::$app->urlManagerApi->baseUrl],
		//['label' => 'Assets', 'url' => Yii::$app->urlManagerAssets->baseUrl],
		['label' => 'Back End', 'url' => Yii::$app->urlManagerBackEnd->baseUrl],
		['label' => 'Front End', 'url' => Yii::$app->urlManagerFrontEnd->baseUrl],
		['label' => 'Mid End', 'url' => Yii::$app->urlManagerMidend->baseUrl],
		['label' => 'Members', 'url' => Yii::$app->urlManagerMembers->baseUrl],
	]],
];

NavBar::begin([
	'brandLabel' => 'Home',
	'brandUrl' => Yii::$app->urlManagerFrontEnd->baseUrl,
	'options' => [
		'class' => 'navbar navbar-inverse navbar-fixed-top',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'nav navbar-nav'],
	'items' => $menuItems,
]);
NavBar::end();
