<?php

use yii\bootstrap4\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Link */

$this->title = 'Create Link';
$this->params['breadcrumbs'][] = ['label' => 'Link', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-create">

	<h1>(M) <?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>