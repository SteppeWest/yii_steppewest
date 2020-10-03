<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Link */
/* @var $form kartik\form\ActiveForm */
?>

<div class="link-form">

	<?php $form = ActiveForm::begin() ?>

	<?= $form->field($model, 'subgroup_id')->textInput() ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'https')->textInput() ?>

	<?= $form->field($model, 'hide')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
