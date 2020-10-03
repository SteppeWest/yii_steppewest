<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subgroup */
/* @var $form kartik\form\ActiveForm */
?>

<div class="subgroup-form">

	<?php $form = ActiveForm::begin() ?>

	<?= $form->field($model, 'group_id')->textInput() ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'hide')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>