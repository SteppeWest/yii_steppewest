<?php

use yii\bootstrap4\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Subgroup */

$this->title = 'Create Subgroup';
$this->params['breadcrumbs'][] = ['label' => 'Subgroup', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subgroup-create">

	<h1>(M) <?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
