<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupSearch */
/* @var $form kartik\form\ActiveForm */
?>

<div class="group-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]) ?>

	<?= $form->field($model, 'group_id') ?>

	<?= $form->field($model, 'category_id') ?>

	<?= $form->field($model, 'name') ?>

	<?= $form->field($model, 'title') ?>

	<?= $form->field($model, 'hide') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
