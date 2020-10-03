<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
//use frontend\assets\HeroicFeaturesAsset;
use common\widgets\Alert;

//use p2m\assets\P2CoreAsset;
//P2CoreAsset::register($this);

frontend\assets\BareAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

	<div class="wrap">

		<?= $this->render('_navigation.php', []) ?>

		<!-- Page Content -->
		<div class="container">
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= Alert::widget() ?>

<?= $content ?>

		</div>
		<!-- /.container -->
	</div>

<?= $this->render('_footer.php', []) ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
