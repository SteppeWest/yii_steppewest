<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LinkSearch */
/* @var $form kartik\form\ActiveForm */
?>

<div class="link-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]) ?>

	<?= $form->field($model, 'link_id') ?>

	<?= $form->field($model, 'subgroup_id') ?>

	<?= $form->field($model, 'name') ?>

	<?= $form->field($model, 'title') ?>

	<?= $form->field($model, 'link') ?>

	<?php // echo $form->field($model, 'https') ?>

	<?php // echo $form->field($model, 'hide') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
