<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Subgroup */

$this->title = 'Update Subgroup: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Subgroup', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->subgroup_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subgroup-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
